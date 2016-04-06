<?php
namespace App\Controller;
use App\Controller\AppController;

class OptionsController extends AppController
{
    
    /*
    *  display all active checkbox for movies
    *
    */
    public function mvactiveoptions()
    {
         $conditions = array(
            'conditions' => array(
                'and' => array(
                    'active LIKE' => "1",
                    'scode' => 'mv'
                )
            )
        );
    
       
        echo json_encode($this->Options->find('all',$conditions));
        
        exit;
    }
     /*
    *  display all active checkbox for tvs
    *
    */
    public function tvactiveoptions()
    {
         $conditions = array(
            'conditions' => array(
                'and' => array(
                    'active LIKE' => "1",
                    'scode' => 'tv'
                )
            )
        );
    
         echo json_encode($this->Options->find('all',$conditions));
        
        exit;
    }
     /*
    *  display all active shortcoder checkbox for preferences
    *
    */
    public function shortcoder()
    {
         $conditions = array(
            'conditions' => array(
                'and' => array(
                    'active LIKE' => "1",
                    'scode' => 'pr'
                )
            )
        );
    
         echo json_encode($this->Options->find('all',$conditions));
        
        exit;
    }
    
    /*
    *  update movies options
    *
    */
    public function mvupdateoptions()
    {
        $str_arr = unserialize(urldecode($this->request->query('chk')));
        
        foreach ($str_arr as $value) {
           $this->Options->query()->update()->set(['active' => 1])->where(['id' => $value, 'scode' => 'mv' ])->execute();
            $this->Options->query()->update()->set(['active' => 0])->where(['id NOT IN' => $str_arr, 'scode' => 'mv'])->execute();
        }
    
    }
    /*
     * update tv options
     * 
     */
     
     public function tvupdateoptions()
     {
       $str_arr = unserialize(urldecode($this->request->query('chk')));
        
        foreach ($str_arr as $value) {
           $this->Options->query()->update()->set(['active' => 1])->where(['id' => $value, 'scode' => 'tv' ])->execute();
            $this->Options->query()->update()->set(['active' => 0])->where(['id NOT IN' => $str_arr, 'scode' => 'tv'])->execute();
        }
     }
     /*
     * update shortcoder
     *
     */
     
    public function updateshortcoder($id = null)
    {
        if(isset($id))
        {
            $this->Options->query()->update()->set(['active' => 1])->where(['id' => $id, 'scode' => 'pr' ])->execute();
        }
        else
        {
             $id = 15; // id of shortcoder in the table
            
             $this->Options->query()->update()->set(['active' => 0])->where(['id' => $id, 'scode' => 'pr' ])->execute();
        }
      
    }
    
    
   
}
