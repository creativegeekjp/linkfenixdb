<?php
namespace App\Controller;

use App\Controller\AppController;

class EpisodesController extends AppController
{

    /*
    * author:  jino
    * if user cliked the copy to clipboard button it automatically update the default value to 1 which is visited
    *
    *
    */
    public function visited($id = null)
    {
        if($id == null) exit;
    
        $this->Episodes->query()->update()->set(['clicked' => 1])->where(['id' => $id])->execute();
        
    }
    
    
    
    
    
    
    
    
    
    
    /*
    *
    *
    *  code generated
    *
    *
    *
    */
    
    
    
    
    public function index()
    {
        $episodes = $this->paginate($this->Episodes);

        $this->set(compact('episodes'));
        $this->set('_serialize', ['episodes']);
    }

  
    public function view($id = null)
    {
        $episode = $this->Episodes->get($id, [
            'contain' => ['Seasons']
        ]);

        $this->set('episode', $episode);
        $this->set('_serialize', ['episode']);
    }

    public function add()
    {
        $episode = $this->Episodes->newEntity();
        if ($this->request->is('post')) {
            $episode = $this->Episodes->patchEntity($episode, $this->request->data);
            if ($this->Episodes->save($episode)) {
                $this->Flash->success(__('The episode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The episode could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->Episodes->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('episode', 'seasons'));
        $this->set('_serialize', ['episode']);
    }
    
    public function edit($id = null)
    {
        $episode = $this->Episodes->get($id, [
            'contain' => ['Seasons']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $episode = $this->Episodes->patchEntity($episode, $this->request->data);
            if ($this->Episodes->save($episode)) {
                $this->Flash->success(__('The episode has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The episode could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->Episodes->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('episode', 'seasons'));
        $this->set('_serialize', ['episode']);
    }

  
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $episode = $this->Episodes->get($id);
        if ($this->Episodes->delete($episode)) {
            $this->Flash->success(__('The episode has been deleted.'));
        } else {
            $this->Flash->error(__('The episode could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
