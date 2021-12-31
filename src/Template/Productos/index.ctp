<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto[]|\Cake\Collection\CollectionInterface $productos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productos index large-9 medium-8 columns content">
    <h3><?= __('Productos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_prod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_categoria') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $this->Number->format($producto->id) ?></td>
                <td><?= h($producto->descripcion_prod) ?></td>
                <td><?= h($producto->estado) ?></td>
                <td><?= $this->Number->format($producto->id_categoria) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $producto->id_producto]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producto->id_producto]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producto->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id_producto)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
