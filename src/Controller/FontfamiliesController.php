<?php
namespace App\Controller;

use App\Controller\AppController;

class FontfamiliesController extends AppController
{
    /* Get the active font families */
    
    public function activefontfamily()
    {
        
         echo json_encode($this->Fontfamilies->find("all", [
            'contain' => []
        ] ));
         
         exit;
    }
    
     /*
    * update active font family
    */
    public function updatefamily($id = null)
    {
         
        if($id == null) exit;
         
        $this->Fontfamilies->query()->update()->set(['active' => 1])->where(['id' => $id  ])->execute();
        
        $this->Fontfamilies->query()->update()->set(['active' => 0])->where(['id NOT IN' => $id  ])->execute();
        
         exit;
    }


}
