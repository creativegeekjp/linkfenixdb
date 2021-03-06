<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

class SeasonsController extends AppController
{

   
    /*
    * view list of episodes
    */
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
              
                foreach($queries['episodes'] as $key => $v)
                {
                     if( $v['clicked']==0 )
                     {
                         $arrs[] = $queries['tvshow_id'];
                     }
                }
        }
 
        foreach(array_unique($arrs) as $key => $res)
        {
           
                  $lista = $tvshowS->find('all')->where(['id =' => $res ]) ;
                
                    foreach ($lista as $value) 
                        {
                                 $arr[] = array('id' => $value['id'] , 'name' => $value['name']);
                        }
            
         
        }
        echo json_encode(  $arr );
       
        exit;
    }
    public function episodesindicator()
    {
         $tvshowS= TableRegistry::get('tvshows');
          
        $query = $this->Seasons->find('all', [
            'contain' => ['Episodes']
        ]);
        
        foreach($query as $key => $queries)
        {
                $i= 0;
                $count = 0;
                
                $tmp = array();
                
                foreach($queries['episodes'] as $key => $v)
                {
                    $tmp[$key+1] = $v['clicked'];
                }
                $i++;
                
                foreach($tmp as $key => $res)
                {
                    if( $res == 0)
                    {
                          $lista = $tvshowS->find('all')->where(['id =' => $queries['tvshow_id'] ]) ;
                           
                          foreach ($lista as $value) 
                          {
                             
                                $arr[] = array('id' =>  $value['id']);
                           }
                           
                       
                    }
                 
                }
                        
        }
        
        echo json_encode(  $arr );
       
        exit;
    }
    /*
    * get the latest episodes according to its date created
    */
    public function getlateseasonseepi($id=null)
    {  
        $query = $this->Seasons->find('all', ['contain' => ['Episodes','Tvshows']])->where(['tvshow_id' => $id ]);
        
        foreach ($query as $key => $value) {
            
                foreach($value['episodes'] as $key => $v)
                {
                     if($v['clicked']==0  )
                     {
                          $arrs[] = $v['season_id'];
                     }
                    
                }
                
                $ar = $value['tvshow']['name'];
        }
        foreach(array_unique($arrs) as $key => $res)
        {
                  $lista =  $this->Seasons->find('all')->where(['id =' => $res ]) ;
                
                    foreach ($lista as $value) 
                        {
                                 $arr[] = array(
                                     'id' => $value['id'],
                                     'name' => $ar , 'season_name' => $value['name'], 
                                     'scode' => $value['scode']
                                );
                                
                                
                        }
        }
      
        echo json_encode($arr);
        
        exit;
    }
    
    public function getlatestepisodes($id = null )
    {
        
         $Episodes = TableRegistry::get('episodes');
          
         $query = $Episodes->find('all')->where(['season_id' => $id]) ;
         
          foreach ($query as $key => $value) {

                 if($value['clicked']==0   )
                 {
                        $arrs[] = array('id' => $value['id'], 'ecode' => $value['ecode'] , 'title' => $value['title'] , 'episode_name' => $value['name']);
                 }
            }
            
          echo json_encode($arrs);
        
        exit;
    }
    /*
     * search titile in the database
     */
     public function search($keyword = null)
     {
        $Movies = TableRegistry::get('movies');
        
        $arrs['mov'] = $Movies->find('all')->select(['id','name','year'])->where(['name LIKE' => "$keyword%"]);
        
        $query = $this->Seasons->find('all', ['contain' => ['Episodes','Tvshows']])->where(['Tvshows.name LIKE' => "$keyword%"]);
        
        foreach ($query as $key => $value) 
        {
            $tvname = $value['tvshow']['name'];
            $scode = $value['scode'];   
            
            foreach($value['episodes'] as $key => $v)
            {
                $arrs['tv'][] = array('id'=> $v['id'], 'tvname' => $tvname, 'scode' => $scode, 'episode_name' => $v['name'], 'title' =>  $v['title'], 'ecode' => $v['ecode'] );
           
            }
        }
        
        //$movie = array_merge($mov,$episode);

        echo json_encode($arrs);
        
        
        exit;
     }
   
    /*
    * query those tvshows that has only its seasons and new episodes
    */
    public function getlatesebytvshows()
    {  
        
        $tvshowS= TableRegistry::get('tvshows');
          
        $query = $this->Seasons->find('all', [
            'contain' => ['Episodes']
        ]);
        
        foreach($query as $key => $queries)
        {
              
                foreach($queries['episodes'] as $key => $v)
                {
                     if( $v['clicked']==0 )
                     {
                         $arrs[] = $queries['tvshow_id'];
                     }
                }
        }
        
        foreach(array_unique($arrs) as $key => $res)
        {
         
                    foreach ( $tvshowS->find('all')->where(['id =' => $res ]) as $value) 
                        {
                                 $arr[] = array('id' => $value['id'], 'clicked' => 0 , 'name' => $value['name']); //clicked == 0 meaning new published tvepisode
                        }
            
         
        }
        echo json_encode(  $arr );
       
        exit;
    }
    /*
    *  query those seasons that has only new episodes
    */
    public function getlatesebyseasons($id=null)
    {  
        $query = $this->Seasons->find('all', ['contain' => ['Episodes','Tvshows']])->where(['tvshow_id' => $id ]);
        
        foreach ($query as $key => $value) {
            
                foreach($value['episodes'] as $key => $v)
                {
                     if($v['clicked']==0  )
                     {
                          $arrs[] = $v['season_id'];
                     }
                    
                }
        }
        foreach(array_unique($arrs) as $key => $res)
        {
                  $lista =  $this->Seasons->find('all')->where(['id =' => $res ]) ;
                
                    foreach ($lista as $value) 
                        {
                                 $arr[] = array(
                                     'id' => $value['id'],
                                     'season_name' => $value['name'], 
                                     'clicked' => 0
                                );
                                
                                
                        }
        }
      
        echo json_encode($arr);
        
        exit;
    }
    /*
    *  query new episodes 
    */
    public function getlatesebyepisodes($id = null )
    {
        
         $Episodes = TableRegistry::get('episodes');
          
         $query = $Episodes->find('all')->where(['season_id' => $id]) ;
         
          foreach ($query as $key => $value) {

                 if($value['clicked']==0   )
                 {
                        $arrs[] = array('id' => $value['id'], 'clicked' => 0);
                 }
            }
            
          echo json_encode($arrs);
        
        exit;
    }
   
   
   
   
   
   
   
   
   
   
   
   
   
    /**
     *  Code genereated 
     *
     * 
     */
    public function index()
    {
        $seasons = $this->paginate($this->Seasons);

        $this->set(compact('seasons'));
        $this->set('_serialize', ['seasons']);
    }

   
    public function view($id = null)
    {
        $season = $this->Seasons->get($id, [
            'contain' => ['Episodes', 'Tvshows']
        ]);

        $this->set('season', $season);
        $this->set('_serialize', ['season']);
    }
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
