<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Producto'), ['action' => 'edit', $producto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Producto'), ['action' => 'delete', $producto->id], ['confirm' => __('Esta seguro que desea eliminar el producto {0}?', $producto->Nombre_prod)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Producto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorium'), ['controller' => 'Categoria', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="producto view large-9 medium-8 columns content">
    <h3><?= h($producto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Prod') ?></th>
            <td><?= h($producto->Nombre_prod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($producto->Estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categorium') ?></th>
            <td><?= $producto->has('categorium') ? $this->Html->link($producto->categorium->descripcion_cat, []) : '' ?></td>
   
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
    </table>
</div>
