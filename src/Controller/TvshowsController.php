<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tvshows Controller
 *
 * @property \App\Model\Table\TvshowsTable $Tvshows
 */
class TvshowsController extends AppController
{

   
    public function indexrest()
    {
       $this->viewBuilder()->layout(false);
        
    
        $this->paginate = ['contain' => ['Genres','Casts','Links', 'Seasons']];
        
        $tvshows = $this->set('tvshows',$this->paginate($this->Tvshows));
    
        
        $result['items'] = count($tvshows);
        
       /* $result['pagecount'] = count($jm);
        
        $result['currentpage'] = count($mj);*/
        
        /*$result['movies'] = $f;*/
        
        $result['tvshows'] = $tvshows;
        
        //$result['Genres'] = $genres;  
        
       

         echo json_encode($result);

       /* debug($this->request->params);*/
        /*exit;*/
        
      
    }


    public function viewrest($id = null)
    {
        $tvshow = $this->Tvshows->get($id, [
            'contain' => ['Seasons']
        ]);

        echo json_encode($tvshow);
        exit;
    }    


    public function search()
    { 
        
        $search = isset($_POST['search'])  ? $_POST['search'] : "" ;
        
         $conditions = array(
            'conditions' => array(
                'and' => array(
                    'name LIKE' => "$search%"
                )
            )
        );
        
       
        switch($search)
        {
            case 'null' :
                 $tvshow = $this->Tvshows->find("all"); 
            break;
            
            default :
                 $tvshow = $this->Tvshows->find("all", $conditions);
            break;
        }
        
        $this->set('tvshow', $tvshow);
        $this->set('_serialize', ['tvshow']);
    }

    public function index()
    {
        $tvshows = $this->paginate($this->Tvshows);

        $this->set(compact('tvshows'));
        $this->set('_serialize', ['tvshows']);
    }
    public function view($id = null)
    {
        $tvshow = $this->Tvshows->get($id, [
            'contain' => ['Seasons']
        ]);

        $this->set('tvshow', $tvshow);
        $this->set('_serialize', ['tvshow']);
    }
    public function add()
    {
        $tvshow = $this->Tvshows->newEntity();
        if ($this->request->is('post')) {
            $tvshow = $this->Tvshows->patchEntity($tvshow, $this->request->data);
            if ($this->Tvshows->save($tvshow)) {
                $this->Flash->success(__('The tvshow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshow could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->Tvshows->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('tvshow', 'seasons'));
        $this->set('_serialize', ['tvshow']);
    }
    public function edit($id = null)
    {
        $tvshow = $this->Tvshows->get($id, [
            'contain' => ['Seasons']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tvshow = $this->Tvshows->patchEntity($tvshow, $this->request->data);
            if ($this->Tvshows->save($tvshow)) {
                $this->Flash->success(__('The tvshow has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tvshow could not be saved. Please, try again.'));
            }
        }
        $seasons = $this->Tvshows->Seasons->find('list', ['limit' => 200]);
        $this->set(compact('tvshow', 'seasons'));
        $this->set('_serialize', ['tvshow']);
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tvshow = $this->Tvshows->get($id);
        if ($this->Tvshows->delete($tvshow)) {
            $this->Flash->success(__('The tvshow has been deleted.'));
        } else {
            $this->Flash->error(__('The tvshow could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
