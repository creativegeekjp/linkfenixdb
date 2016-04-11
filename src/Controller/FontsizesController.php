<?php
namespace App\Controller;

use App\Controller\AppController;

class FontsizesController extends AppController
{
    
    
    /* Get the active font size  */
    
    public function activefontsize()
    {
        
         echo json_encode($this->Fontsizes->find("all",  [
            'contain' => []
        ] ));
         
         exit;
    }
     /*
    * update active font size
    */
    public function updatesize($id = null)
    {
         
        if($id == null) exit;
         
        $this->Fontsizes->query()->update()->set(['active' => 1])->where(['id' => $id  ])->execute();
        
        $this->Fontsizes->query()->update()->set(['active' => 0])->where(['id NOT IN' => $id  ])->execute();
        
         exit;
    }
}