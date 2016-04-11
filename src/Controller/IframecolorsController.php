<?php
namespace App\Controller;

use App\Controller\AppController;

class IframecolorsController extends AppController
{

    /*
    *
    * Get the active iframe color 
    */
    public function activecolor()
    {
        
         echo json_encode($this->Iframecolors->find("all", [
            'contain' => []
        ] ));
         
         exit;
    }
    /*
    * update active iframe color
    */
    public function updatecolor($id = null)
    {
         
        if($id == null) exit;
         
        $this->Iframecolors->query()->update()->set(['active' => 1])->where(['id' => $id  ])->execute();
        
        $this->Iframecolors->query()->update()->set(['active' => 0])->where(['id NOT IN' => $id  ])->execute();
        
         exit;
    }

   
}
