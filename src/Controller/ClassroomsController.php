<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClassRooms Controller
 *
 * @property \App\Model\Table\ClassRoomsTable $ClassRooms
 */
class ClassRoomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Recintos']
        ];
        $classRooms = $this->paginate($this->ClassRooms);

        $this->set(compact('classRooms'));
        $this->set('_serialize', ['classRooms']);
    }

    /**
     * View method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classRoom = $this->ClassRooms->get($id, [
            'contain' => ['Recintos']
        ]);

        $this->set('classRoom', $classRoom);
        $this->set('_serialize', ['classRoom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classRoom = $this->ClassRooms->newEntity();
        if ($this->request->is('post')) {
            $classRoom = $this->ClassRooms->patchEntity($classRoom, $this->request->data);
            if ($this->ClassRooms->save($classRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Class Room'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Class Room'));
            }
        }
        $recintos = $this->ClassRooms->Recintos->find('list', ['limit' => 200]);
        $this->set(compact('classRoom', 'recintos'));
        $this->set('_serialize', ['classRoom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classRoom = $this->ClassRooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classRoom = $this->ClassRooms->patchEntity($classRoom, $this->request->data);
            if ($this->ClassRooms->save($classRoom)) {
                $this->Flash->success(__('The {0} has been saved.', 'Class Room'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Class Room'));
            }
        }
        $recintos = $this->ClassRooms->Recintos->find('list', ['limit' => 200]);
        $this->set(compact('classRoom', 'recintos'));
        $this->set('_serialize', ['classRoom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Class Room id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classRoom = $this->ClassRooms->get($id);
        if ($this->ClassRooms->delete($classRoom)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Class Room'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Class Room'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
