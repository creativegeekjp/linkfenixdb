<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TvshowsGenres Controller
 *
 * @property \App\Model\Table\TvshowsGenresTable $TvshowsGenres
 */
class TvshowsGenresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tvshows', 'Genres']
        ];
        $tvshowsGenres = $this->paginate($this->TvshowsGenres);

        $this->set(compact('tvshowsGenres'));
        $this->set('_serialize', ['tvshowsGenres']);
    }

    /**
     * View method
     *
     * @param string|null $id Tvshows Genre id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tvshowsGenre = $this->TvshowsGenres->get($id, [
            'contain' => ['Tvshows', 'Genres']
        ]);

        $this->set('tvshowsGenre', $tvshowsGenre);
        $this->set('_serialize', ['tvshowsGenre']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tvshowsGenre = $this->TvshowsGenres->newEntity();
        if ($this->request->is('post')) {
            $tvshowsGenre = $this->TvshowsGenres->patchEntity($tvshowsGenre, $this->request->data);
            if ($this->TvshowsGenres->save($tvshowsGenre)) {
                $this->Flash->success(__('The tvshows genre has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows genre could not be saved. Please, try again.'));
            }
        }
        $tvshows = $this->TvshowsGenres->Tvshows->find('list', ['limit' => 200]);
        $genres = $this->TvshowsGenres->Genres->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsGenre', 'tvshows', 'genres'));
        $this->set('_serialize', ['tvshowsGenre']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tvshows Genre id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tvshowsGenre = $this->TvshowsGenres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tvshowsGenre = $this->TvshowsGenres->patchEntity($tvshowsGenre, $this->request->data);
            if ($this->TvshowsGenres->save($tvshowsGenre)) {
                $this->Flash->success(__('The tvshows genre has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshows genre could not be saved. Please, try again.'));
            }
        }
        $tvshows = $this->TvshowsGenres->Tvshows->find('list', ['limit' => 200]);
        $genres = $this->TvshowsGenres->Genres->find('list', ['limit' => 200]);
        $this->set(compact('tvshowsGenre', 'tvshows', 'genres'));
        $this->set('_serialize', ['tvshowsGenre']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tvshows Genre id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tvshowsGenre = $this->TvshowsGenres->get($id);
        if ($this->TvshowsGenres->delete($tvshowsGenre)) {
            $this->Flash->success(__('The tvshows genre has been deleted.'));
        } else {
            $this->Flash->error(__('The tvshows genre could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
