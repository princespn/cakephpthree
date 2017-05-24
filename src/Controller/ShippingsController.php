<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Shippings Controller
 *
 * @property \App\Model\Table\ShippingsTable $Shippings
 *
 * @method \App\Model\Entity\Shipping[] paginate($object = null, array $settings = [])
 */
class ShippingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $shippings = $this->paginate($this->Shippings);

        $this->set(compact('shippings'));
        $this->set('_serialize', ['shippings']);
    }

    /**
     * View method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shipping = $this->Shippings->get($id, [
            'contain' => []
        ]);

        $this->set('shipping', $shipping);
        $this->set('_serialize', ['shipping']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shipping = $this->Shippings->newEntity();
        if ($this->request->is('post')) {
            $shipping = $this->Shippings->patchEntity($shipping, $this->request->getData());
            if ($this->Shippings->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
        }
        $this->set(compact('shipping'));
        $this->set('_serialize', ['shipping']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shipping = $this->Shippings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shipping = $this->Shippings->patchEntity($shipping, $this->request->getData());
            if ($this->Shippings->save($shipping)) {
                $this->Flash->success(__('The shipping has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping could not be saved. Please, try again.'));
        }
        $this->set(compact('shipping'));
        $this->set('_serialize', ['shipping']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shipping = $this->Shippings->get($id);
        if ($this->Shippings->delete($shipping)) {
            $this->Flash->success(__('The shipping has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
