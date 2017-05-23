<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MasterListings Controller
 *
 * @property \App\Model\Table\MasterListingsTable $MasterListings
 *
 * @method \App\Model\Entity\MasterListing[] paginate($object = null, array $settings = [])
 */
class MasterListingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function display()
    {
        $this->paginate = [
            'contain' => ['Channels']
        ];
        $masterListings = $this->paginate($this->MasterListings);

        $this->set(compact('masterListings'));
        $this->set('_serialize', ['masterListings']);
    }

    /**
     * View method
     *
     * @param string|null $id Master Listing id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $masterListing = $this->MasterListings->get($id, [
            'contain' => ['Channels']
        ]);

        $this->set('masterListing', $masterListing);
        $this->set('_serialize', ['masterListing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $masterListing = $this->MasterListings->newEntity();
        if ($this->request->is('post')) {
            $masterListing = $this->MasterListings->patchEntity($masterListing, $this->request->getData());
            if ($this->MasterListings->save($masterListing)) {
                $this->Flash->success(__('The master listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master listing could not be saved. Please, try again.'));
        }
        $channels = $this->MasterListings->Channels->find('list', ['limit' => 200]);
        $this->set(compact('masterListing', 'channels'));
        $this->set('_serialize', ['masterListing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Master Listing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $masterListing = $this->MasterListings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $masterListing = $this->MasterListings->patchEntity($masterListing, $this->request->getData());
            if ($this->MasterListings->save($masterListing)) {
                $this->Flash->success(__('The master listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master listing could not be saved. Please, try again.'));
        }
        $channels = $this->MasterListings->Channels->find('list', ['limit' => 200]);
        $this->set(compact('masterListing', 'channels'));
        $this->set('_serialize', ['masterListing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Master Listing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $masterListing = $this->MasterListings->get($id);
        if ($this->MasterListings->delete($masterListing)) {
            $this->Flash->success(__('The master listing has been deleted.'));
        } else {
            $this->Flash->error(__('The master listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
