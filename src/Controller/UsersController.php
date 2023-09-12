<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;

/**
 * Users Controller
 *
 */
class UsersController extends AppController

{
    public function index() {

        $tableUsers = TableRegistry::getTableLocator()->get('Users');
        
        $query = $tableUsers->find();

        $users = $this->paginate($query,[
            'limit' => 3,
            'order' => [
            'Users.id' => 'asc'
            ]
        ]);
       
        $this->set(compact('users'))->render('index', 'admin');
    }

    public function add() {
        $user = $this->Users->newEmptyEntity();
    
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+]).{8,}$/', $data['password'])) {
                $this->Flash->error(__('A senha deve conter pelo menos 8 caracteres, incluindo pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.'));
                return $this->redirect(['action' => 'add']);
            }
    
            $salt = bin2hex(random_bytes(22));
            $data['password'] = password_hash($data['password'] . $salt, PASSWORD_BCRYPT);
    
            $user = $this->Users->patchEntity($user, $data);
    
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar o usuário.'));
        }
    
        $this->set(compact('user'))->render('add', 'admin');
    }

    public function edit($id) {
        $user = $this->Users->get($id);
    
        if ($this->request->is(['post', 'put'])) {
            
            // Remova o campo de senha dos dados recebidos
            $data = $this->request->getData();
            unset($data['password']);
            
            $this->Users->patchEntity($user, $data);
    
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário atualizado com sucesso.');
                return $this->redirect(['action' => 'index']);
            }
    
            $this->Flash->error('Erro ao atualizar o usuário.');
        }
    
        $this->set('user', $user)->render('edit', 'admin');
    }

    public function delete($id) {

        $user = $this->Users->get($id);
        
        if ($this->Users->delete($user)) {
            $this->Flash->success('O usuário foi excluído com sucesso.');
        
        } else {
          
            $this->Flash->error('Erro ao excluir o usuário. Tente novamente.');
        }
       
        return $this->redirect(['action' => 'index']);
    }

    public function login() {

        $users = TableRegistry::getTableLocator()->get('Users');
        
        $this->set(compact('users'))->render('login');
    }
    
    
}
