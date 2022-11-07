<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TbCidade Controller
 *
 * @property \App\Model\Table\TbCidadeTable $TbCidade
 *
 * @method \App\Model\Entity\TbCidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TbCidadeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tbCidade = $this->paginate($this->TbCidade);

        $this->set(compact('tbCidade'));
    }

    /**
     * View method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tbCidade = $this->TbCidade->get($id, [
            'contain' => [],
        ]);

        $this->set('tbCidade', $tbCidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tbCidade = $this->TbCidade->newEntity();
        if ($this->request->is('post')) {
            $tbCidade = $this->TbCidade->patchEntity($tbCidade, $this->request->getData());
            if ($this->TbCidade->save($tbCidade)) {
                $this->Flash->success(__('The tb cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb cidade could not be saved. Please, try again.'));
        }
        $this->set(compact('tbCidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tbCidade = $this->TbCidade->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tbCidade = $this->TbCidade->patchEntity($tbCidade, $this->request->getData());
            if ($this->TbCidade->save($tbCidade)) {
                $this->Flash->success(__('The tb cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tb cidade could not be saved. Please, try again.'));
        }
        $this->set(compact('tbCidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tb Cidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tbCidade = $this->TbCidade->get($id);
        if ($this->TbCidade->delete($tbCidade)) {
            $this->Flash->success(__('The tb cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The tb cidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
