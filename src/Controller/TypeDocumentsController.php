<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeDocuments Controller
 *
 * @property \App\Model\Table\TypeDocumentsTable $TypeDocuments
 */
class TypeDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $typeDocuments = $this->paginate($this->TypeDocuments);

        $this->set(compact('typeDocuments'));
        $this->set('_serialize', ['typeDocuments']);
    }

    /**
     * View method
     *
     * @param string|null $id Type Document id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeDocument = $this->TypeDocuments->get($id, [
            'contain' => ['Personas']
        ]);

        $this->set('typeDocument', $typeDocument);
        $this->set('_serialize', ['typeDocument']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeDocument = $this->TypeDocuments->newEntity();
        if ($this->request->is('post')) {
            $typeDocument = $this->TypeDocuments->patchEntity($typeDocument, $this->request->data);
            if ($this->TypeDocuments->save($typeDocument)) {
                $this->Flash->success(__('The type document has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeDocument'));
        $this->set('_serialize', ['typeDocument']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Document id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeDocument = $this->TypeDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeDocument = $this->TypeDocuments->patchEntity($typeDocument, $this->request->data);
            if ($this->TypeDocuments->save($typeDocument)) {
                $this->Flash->success(__('The type document has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The type document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('typeDocument'));
        $this->set('_serialize', ['typeDocument']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Document id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeDocument = $this->TypeDocuments->get($id);
        if ($this->TypeDocuments->delete($typeDocument)) {
            $this->Flash->success(__('The type document has been deleted.'));
        } else {
            $this->Flash->error(__('The type document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
