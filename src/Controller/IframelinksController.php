<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Iframelinks Controller
 *
 * @property \App\Model\Table\IframelinksTable $Iframelinks
 */
class IframelinksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $iframelinks = $this->paginate($this->Iframelinks);

        $this->set(compact('iframelinks'));
        $this->set('_serialize', ['iframelinks']);
    }

    /*
    *   Get the active link
    *
    */
    public function activecount()
    {
        $conditions = array(
            'conditions' => array(
                'or' => array(
                    'active LIKE' => "1"
                )
            )
        );
    
        $iframelinks = $this->Iframelinks->find('all',$conditions);
    
        echo json_encode($iframelinks);
        
        exit;

    }
    /*
    * set active and inactive frameslinks
    */
    public function setactivelinks($id = null)
    {
  
        $query1 =  $this->Iframelinks->query();
        $query1->update()->set(['active' => 1])->where(['id' => $id])->execute();
        
        
        $query2 =  $this->Iframelinks->query();
        $query2->update()->set(['active' => 0])->where(['id !=' => $id])->execute();
        
         $conditions = array(
            'conditions' => array(
                'or' => array(
                    'active LIKE' => "1"
                )
            )
        );
        
        $iframelinks= $this->Iframelinks->find('all',$conditions);
    
        echo json_encode($iframelinks);
        
        exit;
    }
    public function view($id = null)
    {
        $iframelink = $this->Iframelinks->get($id, [
            'contain' => []
        ]);

        $this->set('iframelink', $iframelink);
        $this->set('_serialize', ['iframelink']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iframelink = $this->Iframelinks->newEntity();
        if ($this->request->is('post')) {
            $iframelink = $this->Iframelinks->patchEntity($iframelink, $this->request->data);
            if ($this->Iframelinks->save($iframelink)) {
                $this->Flash->success(__('The iframelink has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iframelink could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iframelink'));
        $this->set('_serialize', ['iframelink']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Iframelink id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iframelink = $this->Iframelinks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iframelink = $this->Iframelinks->patchEntity($iframelink, $this->request->data);
            if ($this->Iframelinks->save($iframelink)) {
                $this->Flash->success(__('The iframelink has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The iframelink could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('iframelink'));
        $this->set('_serialize', ['iframelink']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Iframelink id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iframelink = $this->Iframelinks->get($id);
        if ($this->Iframelinks->delete($iframelink)) {
            $this->Flash->success(__('The iframelink has been deleted.'));
        } else {
            $this->Flash->error(__('The iframelink could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
