<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SeasonsEpisodes Controller
 *
 * @property \App\Model\Table\SeasonsEpisodesTable $SeasonsEpisodes
 */
class SeasonsEpisodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Episodes', 'Seasons']
        ];
        $seasonsEpisodes = $this->paginate($this->SeasonsEpisodes);

        $this->set(compact('seasonsEpisodes'));
        $this->set('_serialize', ['seasonsEpisodes']);
    }

    /**
     * View method
     *
     * @param string|null $id Seasons Episode id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seasonsEpisode = $this->SeasonsEpisodes->get($id, [
            'contain' => ['Episodes', 'Seasons']
        ]);

        $this->set('seasonsEpisode', $seasonsEpisode);
        $this->set('_serialize', ['seasonsEpisode']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seasonsEpisode = $this->SeasonsEpisodes->newEntity();
        if ($this->request->is('post')) {
            $seasonsEpisode = $this->SeasonsEpisodes->patchEntity($seasonsEpisode, $this->request->data);
            if ($this->SeasonsEpisodes->save($seasonsEpisode)) {
                $this->Flash->success(__('The seasons episode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seasons episode could not be saved. Please, try again.'));
            }
        }
        $episodes = $this->SeasonsEpisodes->Episodes->find('list', ['limit' => 200]);
        $seasons = $this->SeasonsEpisodes->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('seasonsEpisode', 'episodes', 'seasons'));
        $this->set('_serialize', ['seasonsEpisode']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seasons Episode id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seasonsEpisode = $this->SeasonsEpisodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seasonsEpisode = $this->SeasonsEpisodes->patchEntity($seasonsEpisode, $this->request->data);
            if ($this->SeasonsEpisodes->save($seasonsEpisode)) {
                $this->Flash->success(__('The seasons episode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The seasons episode could not be saved. Please, try again.'));
            }
        }
        $episodes = $this->SeasonsEpisodes->Episodes->find('list', ['limit' => 200]);
        $seasons = $this->SeasonsEpisodes->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('seasonsEpisode', 'episodes', 'seasons'));
        $this->set('_serialize', ['seasonsEpisode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seasons Episode id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seasonsEpisode = $this->SeasonsEpisodes->get($id);
        if ($this->SeasonsEpisodes->delete($seasonsEpisode)) {
            $this->Flash->success(__('The seasons episode has been deleted.'));
        } else {
            $this->Flash->error(__('The seasons episode could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
