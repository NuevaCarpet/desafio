<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categoria Controller
 *
 * @property \App\Model\Table\CategoriaTable $Categoria
 *
 * @method \App\Model\Entity\Categorium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $categoria = $this->paginate($this->Categoria);

        $this->set(compact('categoria'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => [],
        ]);

        $this->set('categorium', $categorium);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorium = $this->Categoria->newEntity();
        if ($this->request->is('post')) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->getData());
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('La categoria se cargo exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no se ha guardado. por favor, intente de nuevo.'));
        }
        $this->set(compact('categorium'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorium = $this->Categoria->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorium = $this->Categoria->patchEntity($categorium, $this->request->getData());
            if ($this->Categoria->save($categorium)) {
                $this->Flash->success(__('La categoria se cargo exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no se ha guardado. por favor, intente de nuevo.'));
        }
        $this->set(compact('categorium'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorium id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorium = $this->Categoria->get($id);
        if ($this->Categoria->delete($categorium)) {
            $this->Flash->success(__('La categoria se ha eliminado exitosamente..'));
        } else {
            $this->Flash->error(__('La categoria no se ha eliminado. por favor, intente de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
