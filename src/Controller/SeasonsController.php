<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Seasons Controller
 *
 * @property \App\Model\Table\SeasonsTable $Seasons
 */
class SeasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $seasons = $this->paginate($this->Seasons);

        $this->set(compact('seasons'));
        $this->set('_serialize', ['seasons']);
    }

    /**
     * View method
     *
     * @param string|null $id Season id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $season = $this->Seasons->get($id, [
            'contain' => ['Episodes', 'Tvshows']
        ]);

        $this->set('season', $season);
        $this->set('_serialize', ['season']);
    }
    
    public function viewrest($id = null)
    {
        $tvshow = $this->Seasons->get($id, [
            'contain' => ['Episodes']
        ]);

        echo json_encode($tvshow);
        exit;
    }
    /*
    * query those latest episodes and return its tvshow_id and created
    */
    public function getlatesepisodes()
    {  
        
         $tvshowS= TableRegistry::get('tvshows');
          
        $query = $this->Seasons->find('all', [
            'contain' => ['Episodes']
        ]);
        
        foreach($query as $key => $queries)
        {
                $i= 0;
                
                $tmp = array();
                
                foreach($queries['episodes'] as $key => $v)
                {
                    $tmp[$key+1] =  date('Y-m-d',strtotime($v['created']));
                }
                $i++;
                
                foreach(array_unique($tmp) as $key => $res)
                {
                    if( $res >= date("Y-m-d") )
                    {
                          $lista = $tvshowS->find('all')->where(['id =' => $queries['tvshow_id'] ]) ;
                           
                          foreach ($lista as $value) 
                          {
                                $arr[] = array('id' => $value['id'] , 'name' => $value['name']);
                           }
                           
                       
                    }
                 
                }
                        
        }
        
        echo json_encode(  $arr );
       
        exit;
    }
    
    public function getlateseasons($id=null)
    {  
        
        // $episodesS= TableRegistry::get('episodes');
          
        // $query = $this->Seasons->find('all', [
        //     'contain' => ['Episodes']
        // ]);
        
        // foreach($query as $key => $queries)
        // {
        //         $i= 0;
                
        //         $tmp = array();
                
        //         foreach($queries['episodes'] as $key => $v)
        //         {
        //             $tmp[$key+1] =  $v['season_id'];
        //         }
        //         $i++;
                
        //         foreach($tmp as $key => $res)
        //         {
                   
        //                   $lista = $episodesS->find('all')->where(['season_id =' => $id ]) ;
                           
        //                   foreach ($lista as $value) 
        //                   {
        //                         $arr[] = array('id' => $value['id'] , 'name' => $value['name']);
        //                   }
                           
                       
                    
                 
        //         }
                        
        // }
        
        // echo json_encode(  $arr );
       
        // exit;
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $season = $this->Seasons->newEntity();
        if ($this->request->is('post')) {
            $season = $this->Seasons->patchEntity($season, $this->request->data);
            if ($this->Seasons->save($season)) {
                $this->Flash->success(__('The season has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The season could not be saved. Please, try again.'));
            }
        }
        $episodes = $this->Seasons->Episodes->find('list', ['limit' => 200]);
        $tvshows = $this->Seasons->Tvshows->find('list', ['limit' => 200]);
        $this->set(compact('season', 'episodes', 'tvshows'));
        $this->set('_serialize', ['season']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Season id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $season = $this->Seasons->get($id, [
            'contain' => ['Episodes', 'Tvshows']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $season = $this->Seasons->patchEntity($season, $this->request->data);
            if ($this->Seasons->save($season)) {
                $this->Flash->success(__('The season has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The season could not be saved. Please, try again.'));
            }
        }
        $episodes = $this->Seasons->Episodes->find('list', ['limit' => 200]);
        $tvshows = $this->Seasons->Tvshows->find('list', ['limit' => 200]);
        $this->set(compact('season', 'episodes', 'tvshows'));
        $this->set('_serialize', ['season']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Season id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $season = $this->Seasons->get($id);
        if ($this->Seasons->delete($season)) {
            $this->Flash->success(__('The season has been deleted.'));
        } else {
            $this->Flash->error(__('The season could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
