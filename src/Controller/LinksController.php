<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Links Controller
 *
 * @property \App\Model\Table\LinksTable $Links
 */
class LinksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Movies', 'Tvshows', 'Episodes']
        ];
        $links = $this->paginate($this->Links);

        $this->set(compact('links'));
        $this->set('_serialize', ['links']);
    }

    /**
     * View method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => ['Movies', 'Tvshows', 'Episodes']
        ]);

        $this->set('link', $link);
        $this->set('_serialize', ['link']);
    } 
    
    /*
    * get links by movie id
    *
    */
    public function getmovielinks($id = null)
    {
        if($id == null) exit;
        
        $conditions = array(
            'conditions' => array(
                'or' => array(
                    'movie_id LIKE' => $id
                )
            )
        );
    
        $movies_links = $this->Links->find('all',$conditions);
    
        echo json_encode($movies_links);
        
        exit;

    }
    /*
    * get links by tvshows episodes
    *
    */
    public function gettvlinks($id = null)
    {
        
        if($id == null) exit;
         
        $conditions = array(
            'conditions' => array(
                'or' => array(
                    'episode_id LIKE' => $id
                )
            )
        );
    
        $episodes_links = $this->Links->find('all',$conditions);
    
        echo json_encode($episodes_links);
        
        exit;

    }
    /**
     * Add method
     *
    public function add()
    {
        $link = $this->Links->newEntity();
        if ($this->request->is('post')) {
            $link = $this->Links->patchEntity($link, $this->request->data);
            if ($this->Links->save($link)) {
                $this->Flash->success(__('The link has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The link could not be saved. Please, try again.'));
            }
        }
        $movies = $this->Links->Movies->find('list', ['limit' => 200]);
        $tvshows = $this->Links->Tvshows->find('list', ['limit' => 200]);
        $episodes = $this->Links->Episodes->find('list', ['limit' => 200]);
        $this->set(compact('link', 'movies', 'tvshows', 'episodes'));
        $this->set('_serialize', ['link']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $link = $this->Links->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $link = $this->Links->patchEntity($link, $this->request->data);
            if ($this->Links->save($link)) {
                $this->Flash->success(__('The link has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The link could not be saved. Please, try again.'));
            }
        }
        $movies = $this->Links->Movies->find('list', ['limit' => 200]);
        $tvshows = $this->Links->Tvshows->find('list', ['limit' => 200]);
        $episodes = $this->Links->Episodes->find('list', ['limit' => 200]);
        $this->set(compact('link', 'movies', 'tvshows', 'episodes'));
        $this->set('_serialize', ['link']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Link id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $link = $this->Links->get($id);
        if ($this->Links->delete($link)) {
            $this->Flash->success(__('The link has been deleted.'));
        } else {
            $this->Flash->error(__('The link could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
