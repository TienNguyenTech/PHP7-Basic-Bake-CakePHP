<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RoomBookings Controller
 *
 * @property \App\Model\Table\RoomBookingsTable $RoomBookings
 */
class RoomBookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->RoomBookings->find()
            ->contain(['Rooms']);
        $roomBookings = $this->paginate($query);

        $this->set(compact('roomBookings'));
    }

    /**
     * View method
     *
     * @param string|null $id Room Booking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomBooking = $this->RoomBookings->get($id, contain: ['Rooms']);
        $this->set(compact('roomBooking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomBooking = $this->RoomBookings->newEmptyEntity();
        if ($this->request->is('post')) {
            $roomBooking = $this->RoomBookings->patchEntity($roomBooking, $this->request->getData());
            if ($this->RoomBookings->save($roomBooking)) {
                $this->Flash->success(__('The room booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room booking could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomBookings->Rooms->find('list', limit: 200)->all();
        $this->set(compact('roomBooking', 'rooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Booking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomBooking = $this->RoomBookings->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomBooking = $this->RoomBookings->patchEntity($roomBooking, $this->request->getData());
            if ($this->RoomBookings->save($roomBooking)) {
                $this->Flash->success(__('The room booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room booking could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomBookings->Rooms->find('list', limit: 200)->all();
        $this->set(compact('roomBooking', 'rooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Booking id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomBooking = $this->RoomBookings->get($id);
        if ($this->RoomBookings->delete($roomBooking)) {
            $this->Flash->success(__('The room booking has been deleted.'));
        } else {
            $this->Flash->error(__('The room booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
