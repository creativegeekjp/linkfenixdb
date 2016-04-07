<?php
namespace App\Controller;
use Cake\View\Helper\PaginatorHelper;
use App\Controller\AppController;
use Cake\Network\Request;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\Entity;
/*
 * Movies Controller
 *
 * @property \App\Model\Table\MoviesTable $Movies
 */
class MoviesController extends AppController
{

   
    public function index()
    {
    
      
        /*$this->paginate = ['contain' => ['Genres','Casts']];*/
        
     /*   $movies = $this->set('movies',$this->paginate($this->Movies));*/
        
        $movies = $this->paginate($this->Movies);
        $this->set(compact('movies'));
        $this->set('_serialize', ['movies']);
    //    echo json_encode($movies);exit;
    }





    public function indexrest($limit = null)
    {
       $this->viewBuilder()->layout(false);
       
           if($limit == null){
               $limit = 20;
           }
            
        
        $this->paginate = ['contain' => ['Genres','Casts', 'Links'],'limit' => $limit];
        
        $movies = $this->set('movies',$this->paginate($this->Movies));
    
        
        $result['items'] = count($movies);
        
       /* $result['pagecount'] = count($jm);
        
        $result['currentpage'] = count($mj);*/
        
        /*$result['movies'] = $f;*/
        
        $result['movies'] = $movies;

        
        //$result['Genres'] = $genres;  
        
       

         echo json_encode($result);

       /* debug($this->request->params);*/
        /*exit;*/
        
      
    }

    
    public function view($id=null)
    {
           $movies = $this->paginate($this->Movies);
       
        $movie = $this->Movies->get($id, [
            'contain' => ['Casts', 'Genres', 'Links']
        ]);

        $this->set('movie', $movie);
        $this->set('_serialize', ['movie']);
    }

    public function viewrest($id = null)
    {
       
        $movie = $this->Movies->get($id, [
            'contain' => ['Casts', 'Genres', 'Links']
        ]);

        $this->set('movie', $movie);
        $this->set('_serialize', ['movie']);
        echo json_encode($movie);
        exit;
        
    }



   
    public function add()
    {
        $movie = $this->Movies->newEntity();
        if ($this->request->is('post')) {

            $movie = $this->Movies->patchEntity($movie, $this->request->data);
        
            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movie could not be saved. Please, try again.'));
            }
        }
        $casts = $this->Movies->Casts->find('list', ['limit' => 200]);
        $genres = $this->Movies->Genres->find('list', ['limit' => 200]);
        $this->set(compact('movie', 'casts', 'genres'));
        $this->set('_serialize', ['movie']);
    }

    public function addrest()
    {
        $movie = $this->Movies->newEntity();
        if ($this->request->is('post')) {
            $movie = $this->Movies->patchEntity($movie, json_decode($this->request->data['json']));
            if ($this->Movies->save($movie)) {
                echo json_encode(array('result' => 'ok'));
            } else {
                 echo json_encode(array('result' => 'Failed'));
            }
        }
        exit;
    }



    public function edit($id = null)
    {
        $movie = $this->Movies->get($id, [
            'contain' => ['Casts', 'Genres']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $movie = $this->Movies->patchEntity($movie, $this->request->data);
            if ($this->Movies->save($movie)) {
                $this->Flash->success(__('The movie has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The movie could not be saved. Please, try again.'));
            }
        }
        $casts = $this->Movies->Casts->find('list', ['limit' => 200]);
        $genres = $this->Movies->Genres->find('list', ['limit' => 200]);
        $this->set(compact('movie', 'casts', 'genres'));
        $this->set('_serialize', ['movie']);
    }

   
    
    /*
    */
    public function latestepisodes()
    {
        
        $mov = array();
        $episode = array();
        $season = "";
        
        $tvshowS= TableRegistry::get('tvshows');
        $seasonS = TableRegistry::get('seasons');
        $episodeS = TableRegistry::get('episodes');
      
        
        $tv = $tvshowS->find('all');
    
        
        if(is_array($tv) || is_object($tv))
        {
            foreach($tv as $row1)
            {
              $season = $seasonS->find('all');
            }
        }
        if(is_array($season) || is_object($season))
        {
         foreach($season as $row2)
            {
              $episode['tv'][] = $episodeS->find()->select(['id','season_id','name','title','created'])->where(['season_id =' => $row2->id ]);
            }
              
        }
     
      
        
        echo json_encode( $episode );
        
        exit;

    }
    /*
    *  count latest movies in the database
    *
    */
    public function latestmovies()
    {
        $lmovies = $this->Movies->find('all');
        
         foreach($lmovies as $key => $res)
                {
                    if(   date('Y-m-d',strtotime($res['created']))  >= date("Y-m-d") )
                    {
                        $arr[]  = array('id' => $res['id']);
                       
                    }
                 
                }
                
        echo json_encode($arr);
        
        exit;
    }
    
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $movie = $this->Movies->get($id);
        if ($this->Movies->delete($movie)) {
            $this->Flash->success(__('The movie has been deleted.'));
        } else {
            $this->Flash->error(__('The movie could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
