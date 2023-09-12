<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Sales Controller
 *
 */
class SalesController extends AppController
{
    public function index() {

        $profile = 0;

        //if ($this->Auth->user('profile') === 0) {
        if ($profile == 0) {
            
            $tableFrutas = TableRegistry::getTableLocator()->get('Frutas');
            
            $query = $tableFrutas->find();
    
            $frutas = $this->paginate($query, [
                'limit' => 3,
                'order' => [
                    'Frutas.id' => 'asc'
                ]
            ]);
    
            $this->set(compact('frutas'))->render('index', 'admin');
       
        } else {
           
            $this->Flash->error('Você não tem permissão para acessar esta página.');
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
    

    public function report() {
        
        $profile = 0;

        //if ($this->Auth->user('profile') === 0) {
        if ($profile == 0) {
            
            $tableSales = TableRegistry::getTableLocator()->get('Sales');
            
            $query = $tableSales->find()->contain(['Users', 'Frutas'])->order(['Sales.id' => 'asc']);
    
            $sales = $this->paginate($query, [
                'limit' => 3,
                'order' => [
                    'Sales.id' => 'asc'
                ]
            ]);
    
            $this->set(compact('sales'))->render('report', 'admin');
        
        } else {
           
            $this->Flash->error('Você não tem permissão para acessar esta página.');
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
    

    public function add() {
        
        $profile = 0;

        //if ($this->Auth->user('profile') === 0) {
            if ($profile == 0) {
            
            $sale = $this->Sales->newEmptyEntity();
    
            if ($this->request->is('post')) {
                
                $sale = $this->Sales->patchEntity($sale, $this->request->getData());
    
                if ($this->Sales->save($sale)) {
                        
                    $this->Flash->success(__('Venda registrada com sucesso.'));
                        
                    return $this->redirect(['action' => 'index']);
                
                    } else {
                    
                        $this->Flash->error(__('Não foi possível registrar a venda. Por favor, tente novamente.'));
                }
            }
    
            $this->loadModel('Users');
            $this->loadModel('Frutas');
    
            $users = $this->Users->find('list', [
                'keyField' => 'id',
                'valueField' => 'name',
                'conditions' => ['profile' => 0],
            ]);
    
            $frutas = $this->Frutas->find('list', [
                'keyField' => 'id',
                'valueField' => function ($fruta) {
                    return $fruta->name . ' (qtd: ' . $fruta->qtd . ')';
                },
                'conditions' => ['qtd >' => 0],
            ]);
    
            $this->set(compact('sale', 'users', 'frutas'))->render('add', 'admin');
        } else {   
            $this->Flash->error('Você não tem permissão para acessar esta página.');
            
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }
    
}
