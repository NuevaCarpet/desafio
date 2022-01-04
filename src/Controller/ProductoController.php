<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Producto Controller
 *
 * @property \App\Model\Table\ProductoTable $Producto
 *
 * @method \App\Model\Entity\Producto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categoria'],
        ];
        $producto = $this->paginate($this->Producto);

        $this->set(compact('producto'));
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => ['Categoria'],
        ]);

        $this->set('producto', $producto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producto = $this->Producto->newEntity();
        if ($this->request->is('post')) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('El producto se guardo exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no se ha guardado. por favor, intente de nuevo.'));
        }
        $categoria = $this->Producto->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'categoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Producto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Producto->patchEntity($producto, $this->request->getData());
            if ($this->Producto->save($producto)) {
                $this->Flash->success(__('El producto se edito exitosamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El producto no se ha guardado. por favor, intente de nuevo.'));
        }
        $categoria = $this->Producto->Categoria->find('list', ['limit' => 200]);
        $this->set(compact('producto', 'categoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Producto->get($id);
        if ($this->Producto->delete($producto)) {
            $this->Flash->success(__('El producto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El producto no se ha eliminado. por favor, intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
