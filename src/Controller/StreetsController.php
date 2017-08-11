<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Streets Controller
 *
 * @property \App\Model\Table\StreetsTable $Streets
 *
 * @method \App\Model\Entity\Street[] paginate($object = null, array $settings = [])
 */
class StreetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $streets = $this->paginate($this->Streets);

        $this->set(compact('streets'));
        $this->set('_serialize', ['streets']);
    }

    /**
     * View method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $street = $this->Streets->get($id, [
            'contain' => []
        ]);

        $this->set('street', $street);
        $this->set('_serialize', ['street']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $street = $this->Streets->newEntity();
        if ($this->request->is('post')) {
            $street = $this->Streets->patchEntity($street, $this->request->getData());
            if ($this->Streets->save($street)) {
                $this->Flash->success(__('The street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The street could not be saved. Please, try again.'));
        }
        $this->set(compact('street'));
        $this->set('_serialize', ['street']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $street = $this->Streets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $street = $this->Streets->patchEntity($street, $this->request->getData());
            if ($this->Streets->save($street)) {
                $this->Flash->success(__('The street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The street could not be saved. Please, try again.'));
        }
        $this->set(compact('street'));
        $this->set('_serialize', ['street']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $street = $this->Streets->get($id);
        if ($this->Streets->delete($street)) {
            $this->Flash->success(__('The street has been deleted.'));
        } else {
            $this->Flash->error(__('The street could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
