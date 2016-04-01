<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Casts Controller
 *
 * @property \App\Model\Table\CastsTable $Casts
 */
class CastsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $casts = $this->paginate($this->Casts);

        $this->set(compact('casts'));
        $this->set('_serialize', ['casts']);
    }
    
    public function indexrest()
    {
        $casts = $this->paginate($this->Casts);

        $this->set(compact('casts'));
        $this->set('_serialize', ['casts']);
        echo json_encode($casts);
        exit;
    }

    /**
     * View method
     *
     * @param string|null $id Cast id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cast = $this->Casts->get($id, [
            'contain' => ['Movies']
        ]);

        $this->set('cast', $cast);
        $this->set('_serialize', ['cast']);
    }
    
     public function viewrest($id = null)
    {
        $cast = $this->Casts->get($id, [
            'contain' => ['Movies']
        ]);

        $this->set('cast', $cast);
        $this->set('_serialize', ['cast']);
        echo json_encode($cast);
        exit;
    }
    

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cast = $this->Casts->newEntity();
        if ($this->request->is('post')) {
            $cast = $this->Casts->patchEntity($cast, $this->request->data);
            if ($this->Casts->save($cast)) {
                $this->Flash->success(__('The cast has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cast could not be saved. Please, try again.'));
            }
        }
        $movies = $this->Casts->Movies->find('list', ['limit' => 200]);
        $this->set(compact('cast', 'movies'));
        $this->set('_serialize', ['cast']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cast id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cast = $this->Casts->get($id, [
            'contain' => ['Movies']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cast = $this->Casts->patchEntity($cast, $this->request->data);
            if ($this->Casts->save($cast)) {
                $this->Flash->success(__('The cast has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cast could not be saved. Please, try again.'));
            }
        }
        $movies = $this->Casts->Movies->find('list', ['limit' => 200]);
        $this->set(compact('cast', 'movies'));
        $this->set('_serialize', ['cast']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cast id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cast = $this->Casts->get($id);
        if ($this->Casts->delete($cast)) {
            $this->Flash->success(__('The cast has been deleted.'));
        } else {
            $this->Flash->error(__('The cast could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
