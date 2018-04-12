<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Directores Controller
 *
 * @property \App\Model\Table\DirectoresTable $Directores
 *
 * @method \App\Model\Entity\Directore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DirectoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()    {
        
        $directores = $this->paginate($this->Directores);

        $this->set(compact('directores'));
    }

    /**
     * View method
     *
     * @param string|null $id Directore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $directore = $this->Directores->get($id,[
//            'contain' => ['Escuelas', 'cue']
        ]);      
        
        
        $this->set('directore', $directore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $directore = $this->Directores->newEntity();
        if ($this->request->is('post')) {
            $directore = $this->Directores->patchEntity($directore, $this->request->getData());
//            debug($this->request->getData());
//            exit();
            if ($this->Directores->save($directore)) {
                $this->Flash->success(__('The directore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The directore could not be saved. Please, try again.'));
        }
        $escuelas = $this->Directores->Escuelas->find('all');
        $this->set(compact('directore', 'escuelas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Directore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $directore = $this->Directores->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $directore = $this->Directores->patchEntity($directore, $this->request->getData());
            if ($this->Directores->save($directore)) {
                $this->Flash->success(__('The directore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The directore could not be saved. Please, try again.'));
        }
        $escuelas = $this->Directores->Escuelas->find('all', ['limit' => 10]);
        $this->set(compact('directore', 'escuelas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Directore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $directore = $this->Directores->get($id);
        if ($this->Directores->delete($directore)) {
            $this->Flash->success(__('The directore has been deleted.'));
        } else {
            $this->Flash->error(__('The directore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
