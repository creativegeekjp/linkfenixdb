<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class IframesController extends AppController
{


    public function index()
    {
        $iframes = $this->paginate($this->Iframes);

        $this->set(compact('iframes'));
        $this->set('_serialize', ['iframes']);
    }

    public function view($id = null)
    {
        $iframe = $this->Iframes->get($id, [
            'contain' => []
        ]);

        $this->set('iframe', $iframe);
        $this->set('_serialize', ['iframe']);
    }
    /*
    *
    * Get the active iframe
    */
    public function design()
    {
        $conditions = array(
            'conditions' => array(
                'or' => array(
                    'Active LIKE' => "1"
                )
            )
        );
    
        $iframe= $this->Iframes->find('all',$conditions);
    
        echo json_encode($iframe);
        
        exit;

    }
    /*
    * set active and inactive frames
    */
    public function editframe($id = null)
    {
  
        $query1 =  $this->Iframes->query();
        $query1->update()->set(['active' => 1])->where(['id' => $id])->execute();
        
        
        $query2 =  $this->Iframes->query();
        $query2->update()->set(['active' => 0])->where(['id !=' => $id])->execute();
        
         $conditions = array(
            'conditions' => array(
                'or' => array(
                    'Active LIKE' => "1"
                )
            )
        );
        
        $iframe= $this->Iframes->find('all',$conditions);
    
        echo json_encode($iframe);
        
        exit;
    }
    public function add()
    {
        $iframe = $this->Iframes->newEntity();
        if ($this->request->is('post')) {
            $iframe = $this->Iframes->patchEntity($iframe, $this->request->data);
            if ($this->Iframes->save($iframe)) {
                $this->Flash->success(__('The iframe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iframe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iframe'));
        $this->set('_serialize', ['iframe']);
    }

  
    public function edit($id = null)
    {
        $iframe = $this->Iframes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iframe = $this->Iframes->patchEntity($iframe, $this->request->data);
            if ($this->Iframes->save($iframe)) {
                $this->Flash->success(__('The iframe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iframe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iframe'));
        $this->set('_serialize', ['iframe']);
    }

  
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iframe = $this->Iframes->get($id);
        if ($this->Iframes->delete($iframe)) {
            $this->Flash->success(__('The iframe has been deleted.'));
        } else {
            $this->Flash->error(__('The iframe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
