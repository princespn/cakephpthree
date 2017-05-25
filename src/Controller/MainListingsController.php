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


    public function token_value(){

        $auth_data = array(
            'applicationId' =>'b72fc47a-ef82-4cb3-8179-2113f09c50ff',
            'applicationSecret' =>'e727f554-7d27-4fd2-bcaf-dad3e0079821',
            'token' =>'cd431b31abd667bbb1e947be42077e9d');
        $header = array("POST:https://api.linnworks.net//api/Auth/AuthorizeByApplication HTTP/1.1","Host:api.linnworks.net","Connection: keep-alive","Accept: application/json, text/javascript, ; q=0.01","Origin: https://www.linnworks.net","Accept-Language: en","User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36","Content-Type: application/x-www-form-urlencoded; charset=UTF-8","Referer: https://www.linnworks.net/","Accept-Encoding: gzip, deflate");
        $url = 'https://api.linnworks.net//api/Auth/AuthorizeByApplication?applicationId='.$auth_data['applicationId'].'&applicationSecret='.$auth_data['applicationSecret'].'&token='.$auth_data['token'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $auth_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_USERPWD,$some_data['userName'].':'.$some_data['password']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $yummy = json_decode($result);
        curl_close($ch);
        //print_r($yummy);die();
        $Token = $yummy->{'Token'};
        if(!empty($Token)){return $Token ;}else{throw new MissingWidgetHelperException('Token not authorized to view this page.', 401);}
    }



    public function categname() {
        $userkey = $this->token_value();
        $some_data = array('token' => $userkey);
        $header = array("POST:https://eu1.linnworks.net//api/Inventory/GetCategories HTTP/1.1<", "Host: eu1.linnworks.net", "Connection: keep-alive", "Accept: application/json, text/javascript, */*; q=0.01", "Origin: https://www.linnworks.net", "Accept-Language: en", "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.90 Safari/537.36", "Content-Type: application/x-www-form-urlencoded; charset=UTF-8", "Referer: https://www.linnworks.net/", "Accept-Encoding: gzip, deflate", "Authorization:" . $some_data['token']);
        $url = 'https://eu1.linnworks.net//api/Inventory/GetCategories';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $some_data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_USERPWD,$some_data['userName'].':'.$some_data['password']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        $catgory = json_decode($result);
        curl_close($ch);
        //print_r($catgory);die();
        return $catgory;
    }

	
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
		$this->set('title', 'Diagonasis prices details.');
		
		$categories = $this->categname();
		
		
        $this->paginate = [
            'contain' => ['InventoryCodes']
        ];
        $mainListings = $this->paginate($this->MainListings);

		//print_r($mainListings);die();
        $this->set(compact('mainListings','categories'));
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
            'contain' => ['InventoryCodes']
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
