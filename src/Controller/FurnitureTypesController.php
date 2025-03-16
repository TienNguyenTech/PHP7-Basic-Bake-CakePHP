<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * FurnitureTypes Controller
 *
 * @property \App\Model\Table\FurnitureTypesTable $FurnitureTypes
 */
class FurnitureTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->FurnitureTypes->find();
        $furnitureTypes = $this->paginate($query);

        $this->set(compact('furnitureTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Furniture Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $furnitureType = $this->FurnitureTypes->get($id, contain: ['Rooms']);
        $this->set(compact('furnitureType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $furnitureType = $this->FurnitureTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $furnitureType = $this->FurnitureTypes->patchEntity($furnitureType, $this->request->getData());
            if ($this->FurnitureTypes->save($furnitureType)) {
                $this->Flash->success(__('The furniture type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The furniture type could not be saved. Please, try again.'));
        }
        $rooms = $this->FurnitureTypes->Rooms->find('list', limit: 200)->all();
        $this->set(compact('furnitureType', 'rooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Furniture Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $furnitureType = $this->FurnitureTypes->get($id, contain: ['Rooms']);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $furnitureType = $this->FurnitureTypes->patchEntity($furnitureType, $this->request->getData());
            if ($this->FurnitureTypes->save($furnitureType)) {
                $this->Flash->success(__('The furniture type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The furniture type could not be saved. Please, try again.'));
        }
        $rooms = $this->FurnitureTypes->Rooms->find('list', limit: 200)->all();
        $this->set(compact('furnitureType', 'rooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Furniture Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $furnitureType = $this->FurnitureTypes->get($id);
        if ($this->FurnitureTypes->delete($furnitureType)) {
            $this->Flash->success(__('The furniture type has been deleted.'));
        } else {
            $this->Flash->error(__('The furniture type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
