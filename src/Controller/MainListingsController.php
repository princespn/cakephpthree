<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MainListings Controller
 *
 * @property \App\Model\Table\MainListingsTable $MainListings
 *
 * @method \App\Model\Entity\MainListing[] paginate($object = null, array $settings = [])
 */
class MainListingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Channels']
        ];
        $mainListings = $this->paginate($this->MainListings);

        $this->set(compact('mainListings'));
        $this->set('_serialize', ['mainListings']);
    }

    /**
     * View method
     *
     * @param string|null $id Main Listing id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mainListing = $this->MainListings->get($id, [
            'contain' => ['Channels']
        ]);

        $this->set('mainListing', $mainListing);
        $this->set('_serialize', ['mainListing']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mainListing = $this->MainListings->newEntity();
        if ($this->request->is('post')) {
            $mainListing = $this->MainListings->patchEntity($mainListing, $this->request->getData());
            if ($this->MainListings->save($mainListing)) {
                $this->Flash->success(__('The main listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main listing could not be saved. Please, try again.'));
        }
        $channels = $this->MainListings->Channels->find('list', ['limit' => 200]);
        $this->set(compact('mainListing', 'channels'));
        $this->set('_serialize', ['mainListing']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Main Listing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mainListing = $this->MainListings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainListing = $this->MainListings->patchEntity($mainListing, $this->request->getData());
            if ($this->MainListings->save($mainListing)) {
                $this->Flash->success(__('The main listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The main listing could not be saved. Please, try again.'));
        }
        $channels = $this->MainListings->Channels->find('list', ['limit' => 200]);
        $this->set(compact('mainListing', 'channels'));
        $this->set('_serialize', ['mainListing']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Main Listing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainListing = $this->MainListings->get($id);
        if ($this->MainListings->delete($mainListing)) {
            $this->Flash->success(__('The main listing has been deleted.'));
        } else {
            $this->Flash->error(__('The main listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
