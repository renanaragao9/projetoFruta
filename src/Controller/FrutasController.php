<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;

/**
 * Frutas Controller
 *
 */
class FrutasController extends AppController
{
    public function index() {
        
        $profile = 0;

        //if ($this->Auth->user('profile') === 1) {
          if ($profile == 1) { 
            $tableFrutas = TableRegistry::getTableLocator()->get('Frutas');
            
            $query = $tableFrutas->find();
    
            $frutas = $this->paginate($query,[
                'limit' => 3,
                'order' => [
                    'Frutas.id' => 'asc'
                ]
            ]);
           
            $this->set(compact('frutas'))->render('index', 'admin');
        
        } else {
            
            $this->Flash->error(__('Você não tem permissão para acessar esta página.'));
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
    
    public function add() {
        
        $profile = 0;

        //if ($this->Auth->user('profile') === 1) {
          if ($profile == 1) {
            
            $fruta = $this->Frutas->newEmptyEntity();
    
            if ($this->request->is('post')) {
                
                $fruta = $this->Frutas->patchEntity($fruta, $this->request->getData());
    
                if ($this->Frutas->save($fruta)) {
                    
                    $this->Flash->success('A fruta foi salva com sucesso.');
                    
                    return $this->redirect(['action' => 'index']);
                }
               
                $this->Flash->error('Não foi possível salvar a fruta.');
            }
    
            $this->set(compact('fruta'))->render('add', 'admin');
        } else {
            
            $this->Flash->error(__('Você não tem permissão para acessar esta página.'));
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
    

    public function edit($id) {

        $profile = 0;

        //if ($this->Auth->user('profile') === 1) {
          if ($profile == 1) {
            
            $fruta = $this->Frutas->get($id);
            
            if ($this->request->is(['patch', 'post', 'put'])) {
                
                $fruta = $this->Frutas->patchEntity($fruta, $this->request->getData());
                
                if ($this->Frutas->save($fruta)) {
                   
                    $this->Flash->success('A fruta foi atualizada com sucesso.');
                    
                    return $this->redirect(['action' => 'index']);
                }
                
                $this->Flash->error('Não foi possível atualizar a fruta.');
            }
    
            $this->set(compact('fruta'))->render('edit', 'admin');
        } else {
            
            $this->Flash->error(__('Você não tem permissão para acessar esta página.'));
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }

    public function delete($id) {
        
        $fruta = $this->Frutas->get($id);
        
        if ($this->Frutas->delete($fruta)) {
           
            $this->Flash->success('A fruta foi excluída com sucesso.');
        
        } else {
            $this->Flash->error('Não foi possível excluir a fruta.');
        }

        return $this->redirect(['action' => 'index']);
    }

    
}
