<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AcademicYears Controller
 *
 * @property \App\Model\Table\AcademicYearsTable $AcademicYears
 */
class AcademicYearsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $academicYears = $this->paginate($this->AcademicYears);

        $this->set(compact('academicYears'));
        $this->set('_serialize', ['academicYears']);
    }

    /**
     * View method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academicYear = $this->AcademicYears->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('academicYear', $academicYear);
        $this->set('_serialize', ['academicYear']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academicYear = $this->AcademicYears->newEntity();
        if ($this->request->is('post')) {
            $academicYear = $this->AcademicYears->patchEntity($academicYear, $this->request->data);
            if ($this->AcademicYears->save($academicYear)) {
                $this->Flash->success(__('The {0} has been saved.', 'Academic Year'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Academic Year'));
            }
        }
        $this->set(compact('academicYear'));
        $this->set('_serialize', ['academicYear']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academicYear = $this->AcademicYears->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academicYear = $this->AcademicYears->patchEntity($academicYear, $this->request->data);
            if ($this->AcademicYears->save($academicYear)) {
                $this->Flash->success(__('The {0} has been saved.', 'Academic Year'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Academic Year'));
            }
        }
        $this->set(compact('academicYear'));
        $this->set('_serialize', ['academicYear']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Academic Year id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academicYear = $this->AcademicYears->get($id);
        if ($this->AcademicYears->delete($academicYear)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Academic Year'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Academic Year'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
