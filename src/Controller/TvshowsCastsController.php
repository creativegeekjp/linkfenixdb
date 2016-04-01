<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TvshowsCasts Controller
 *
 * @property \App\Model\Table\TvshowsCastsTable $TvshowsCasts
 */
class TvshowsCastsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tvshows', 'Casts']
        ];
        $tvshowsCasts = $this->paginate($this->TvshowsCasts);

        $this->set(compact('tvshowsCasts'));
        $this->set('_serialize', ['tvshowsCasts']);
    }

    /**
     * View method
     *
     * @param string|null $id Tvshows Cast id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tvshowsCast = $this->TvshowsCasts->get($id, [
            'contain' => ['Tvshows', 'Casts']
        ]);

        $this->set('tvshowsCast', $tvshowsCast);
        $this->set('_serialize', ['tvshowsCast']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tvshowsCast = $this->TvshowsCasts->newEntity();
        if ($this->request->is('post')) {
            $tvshowsCast = $this->TvshowsCasts->patchEntity($tvshowsCast, $this->request->data);
            if ($this->TvshowsCasts->save($tvshowsCast)) {
                $this->Flash->success(__('The tvshows cast has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows cast could not be saved. Please, try again.'));
            }
        }
        $tvshows = $this->TvshowsCasts->Tvshows->find('list', ['limit' => 200]);
        $casts = $this->TvshowsCasts->Casts->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsCast', 'tvshows', 'casts'));
        $this->set('_serialize', ['tvshowsCast']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tvshows Cast id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tvshowsCast = $this->TvshowsCasts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tvshowsCast = $this->TvshowsCasts->patchEntity($tvshowsCast, $this->request->data);
            if ($this->TvshowsCasts->save($tvshowsCast)) {
                $this->Flash->success(__('The tvshows cast has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows cast could not be saved. Please, try again.'));
            }
        }
        $tvshows = $this->TvshowsCasts->Tvshows->find('list', ['limit' => 200]);
        $casts = $this->TvshowsCasts->Casts->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsCast', 'tvshows', 'casts'));
        $this->set('_serialize', ['tvshowsCast']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tvshows Cast id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tvshowsCast = $this->TvshowsCasts->get($id);
        if ($this->TvshowsCasts->delete($tvshowsCast)) {
            $this->Flash->success(__('The tvshows cast has been deleted.'));
        } else {
            $this->Flash->error(__('The tvshows cast could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
