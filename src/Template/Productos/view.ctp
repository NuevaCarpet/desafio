<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto'), ['action' => 'edit', $producto->id_producto]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id_producto)]) ?> </li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productos view large-9 medium-8 columns content">
    <h3><?= h($producto->id_producto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion Prod') ?></th>
            <td><?= h($producto->descripcion_prod) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($producto->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($producto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Categoria') ?></th>
            <td><?= $this->Number->format($producto->id_categoria) ?></td>
        </tr>
    </table>
</div>
