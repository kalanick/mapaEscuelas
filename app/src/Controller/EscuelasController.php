<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Escuelas Controller
 *
 *
 * @method \App\Model\Entity\Escuela[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EscuelasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $escuelas = $this->paginate($this->Escuelas);

        $this->set(compact('escuelas'));
    }

    /**
     * View method
     *
     * @param string|null $id Escuela id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
//        use \Cake\ORM\Table;
        $escuela = $this->Escuelas->get($id, [
            'contain' => 'Regionales'
                   ]);

        $directores = $this->Escuelas->Directores->find('all', [
            'conditions' => [
                'escuela_cue' => $escuela->cue
            ],
            'ORDER' => 'create DESC'
        ]);      
        
        $this->set(compact('escuela', 'directores'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $escuela = $this->Escuelas->newEntity();
        if ($this->request->is('post')) {
            $escuela = $this->Escuelas->patchEntity($escuela, $this->request->getData());
            if ($this->Escuelas->save($escuela)) {
                $this->Flash->success(__('The escuela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escuela could not be saved. Please, try again.'));
        }
        $regionales = $this->Escuelas->Regionales->find('list');
        $this->set(compact('escuela', 'regionales'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Escuela id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $escuela = $this->Escuelas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escuela = $this->Escuelas->patchEntity($escuela, $this->request->getData());
            if ($this->Escuelas->save($escuela)) {
                $this->Flash->success(__('The escuela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The escuela could not be saved. Please, try again.'));
        }
        $regionales = $this->Escuelas->Regionales->find('list');
        $this->set(compact('escuela', 'regionales'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Escuela id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escuela = $this->Escuelas->get($id);
        if ($this->Escuelas->delete($escuela)) {
            $this->Flash->success(__('The escuela has been deleted.'));
        } else {
            $this->Flash->error(__('The escuela could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    
    public function ubicaciones($id = null) {              
        if ($this->request->is(['patch', 'post', 'put'])) {

            if ($this->request->data('regionale_id') == '9' && empty($this->request->data('buscar'))) {
//                debug('entro aca ');
                $escuelas = $this->Escuelas->find('all');
            
            } else if ($this->request->data('regionale_id') == '9' && !empty($this->request->data('buscar'))) { 
                $escuelas = $this->Escuelas->find('all')
                        ->andWhere(function (QueryExpression $exp) {
                            return $exp->or_([
                                        'cue LIKE' => '%' .$this->request->data('buscar'). '%',
                                        'name LIKE' => '%' . $this->request->data('buscar') . '%',
                                        'tipo LIKE' => '%' . $this->request->data('buscar') . '%'
                            ]);
                        });
                
            } else if (!empty($this->request->data('buscar'))) {
                //                $valor = $this->request->data('buscar');
                $escuelas = $this->Escuelas->find('all')
                        ->where(['regionale_id' => $this->request->data('regionale_id')])
                        ->andWhere(function (QueryExpression $exp) {
                    return $exp->or_([
                                'cue LIKE' => '%' .$this->request->data('buscar'). '%',
                                'name LIKE' => '%' . $this->request->data('buscar') . '%',
                                'tipo LIKE' => '%' . $this->request->data('buscar') . '%'
                    ]);
                });
            } else {
                $escuelas = $this->Escuelas->find('all', [
                    'conditions' => [
                        'regionale_id' => $this->request->data('regionale_id'),
                    ]
                ]);
            }
        } else {
            $escuelas = $this->Escuelas->find('all', [
                'conditions' => [
                    'regionale_id' => 8,
                ]
            ]);
        }

        $regionales = $this->Escuelas->Regionales->find('list'); 
        
        $this->set(compact('escuelas', 'regionales'));
    }
}
