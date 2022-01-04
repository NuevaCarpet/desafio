<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categorium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Categoria'), ['action' => 'delete', $categorium->id], ['confirm' => __('Estas seguro que desea eliminar la categoria {0}?', $categorium->descripcion_cat)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Categoria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Categoria'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoria view large-9 medium-8 columns content">
    <h3><?= h($categorium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion Cat') ?></th>
            <td><?= h($categorium->descripcion_cat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categorium->id) ?></td>
        </tr>
    </table>
</div>
