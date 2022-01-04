<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $producto->id],
                ['confirm' => __('Estas seguro que desea eliminar el producto {0}?', $producto->Nombre_prod)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Producto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Categoria'), ['controller' => 'Categoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Categoria'), ['controller' => 'Categoria', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="producto form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Editar Producto') ?></legend>
        <?php
            echo $this->Form->control('Nombre_producto');
            echo $this->Form->control('Estado',["options"=> ["alta"=>"Con Stock","baja"=>"Sin Stock"]]);
            echo $this->Form->control('categoria_id', ['options' => $categoria]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
