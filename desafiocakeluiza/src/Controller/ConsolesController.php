<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Consoles Controller
 *
 * @property \App\Model\Table\ConsolesTable $Consoles
 * @method \App\Model\Entity\Console[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsolesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $consoles = $this->paginate($this->Consoles);

        $this->set(compact('consoles'));
    }

    /**
     * View method
     *
     * @param string|null $id Console id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $console = $this->Consoles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('console'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $console = $this->Consoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $console = $this->Consoles->patchEntity($console, $this->request->getData());
            if ($this->Consoles->save($console)) {
                $this->Flash->success(__('O novo console foi registrado!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O console não pode ser registrado.'));
        }
        $this->set(compact('console'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Console id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $console = $this->Consoles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $console = $this->Consoles->patchEntity($console, $this->request->getData());
            if ($this->Consoles->save($console)) {
                $this->Flash->success(__('O novo console foi registrado!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O console não pode ser registrado.'));
        }
        $this->set(compact('console'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Console id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $console = $this->Consoles->get($id);
        if ($this->Consoles->delete($console)) {
            $this->Flash->success(__('O console foi apagado.'));
        } else {
            $this->Flash->error(__('O console não pode ser apagado'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
