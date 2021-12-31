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
                __('Delete'),
                ['action' => 'delete', $producto->id_producto],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producto->id_producto)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Edit Producto') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('descripcion_prod');
            echo $this->Form->control('estado');
            echo $this->Form->control('id_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
