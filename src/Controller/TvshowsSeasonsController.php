<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TvshowsSeasons Controller
 *
 * @property \App\Model\Table\TvshowsSeasonsTable $TvshowsSeasons
 */
class TvshowsSeasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Seasons', 'Episodes', 'Tvshows']
        ];
        $tvshowsSeasons = $this->paginate($this->TvshowsSeasons);

        $this->set(compact('tvshowsSeasons'));
        $this->set('_serialize', ['tvshowsSeasons']);
    }

    /**
     * View method
     *
     * @param string|null $id Tvshows Season id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tvshowsSeason = $this->TvshowsSeasons->get($id, [
            'contain' => ['Seasons', 'Episodes', 'Tvshows']
        ]);

        $this->set('tvshowsSeason', $tvshowsSeason);
        $this->set('_serialize', ['tvshowsSeason']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tvshowsSeason = $this->TvshowsSeasons->newEntity();
        if ($this->request->is('post')) {
            $tvshowsSeason = $this->TvshowsSeasons->patchEntity($tvshowsSeason, $this->request->data);
            if ($this->TvshowsSeasons->save($tvshowsSeason)) {
                $this->Flash->success(__('The tvshows season has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows season could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->TvshowsSeasons->Seasons->find('list', ['limit' => 200]);
        $episodes = $this->TvshowsSeasons->Episodes->find('list', ['limit' => 200]);
        $tvshows = $this->TvshowsSeasons->Tvshows->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsSeason', 'seasons', 'episodes', 'tvshows'));
        $this->set('_serialize', ['tvshowsSeason']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tvshows Season id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tvshowsSeason = $this->TvshowsSeasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tvshowsSeason = $this->TvshowsSeasons->patchEntity($tvshowsSeason, $this->request->data);
            if ($this->TvshowsSeasons->save($tvshowsSeason)) {
                $this->Flash->success(__('The tvshows season has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows season could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->TvshowsSeasons->Seasons->find('list', ['limit' => 200]);
        $episodes = $this->TvshowsSeasons->Episodes->find('list', ['limit' => 200]);
        $tvshows = $this->TvshowsSeasons->Tvshows->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsSeason', 'seasons', 'episodes', 'tvshows'));
        $this->set('_serialize', ['tvshowsSeason']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tvshows Season id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tvshowsSeason = $this->TvshowsSeasons->get($id);
        if ($this->TvshowsSeasons->delete($tvshowsSeason)) {
            $this->Flash->success(__('The tvshows season has been deleted.'));
        } else {
            $this->Flash->error(__('The tvshows season could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
