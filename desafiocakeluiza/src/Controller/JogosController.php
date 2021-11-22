<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Jogos Controller
 *
 * @property \App\Model\Table\JogosTable $Jogos
 * @method \App\Model\Entity\Jogo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JogosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consoles'],
        ];
        $jogos = $this->paginate($this->Jogos);

        $this->set(compact('jogos'));
    }

    /**
     * View method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => ['Consoles'],
        ]);

        $this->set(compact('jogo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jogo = $this->Jogos->newEmptyEntity();
        if ($this->request->is('post')) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->getData());
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('O registro do novo jogo foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O registro não pode ser salvo'));
        }
        $consoles = $this->Jogos->Consoles->find('list', ['limit' => 200])->all();
        $this->set(compact('jogo', 'consoles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jogo = $this->Jogos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jogo = $this->Jogos->patchEntity($jogo, $this->request->getData());
            if ($this->Jogos->save($jogo)) {
                $this->Flash->success(__('O registro do novo jogo foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O registro não pode ser salvo'));
        }
        $consoles = $this->Jogos->Consoles->find('list', ['limit' => 200])->all();
        $this->set(compact('jogo', 'consoles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jogo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jogo = $this->Jogos->get($id);
        if ($this->Jogos->delete($jogo)) {
            $this->Flash->success(__('O registro foi apagado.'));
        } else {
            $this->Flash->error(__('O registro não pode ser apagado.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
