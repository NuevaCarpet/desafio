<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producto $producto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Productos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productos form large-9 medium-8 columns content">
    <?= $this->Form->create($producto) ?>
    <fieldset>
        <legend><?= __('Add Producto') ?></legend>
        <?php
           
            echo $this->Form->control('descripcion_prod');
            echo $this->Form->control('estado',["options"=>["baja" => "sin stock","alta" =>"con stock"]]);
            echo $this->Form->control('id_categoria',["options"=>["1" => "comida","2" =>"ferreteria","3" =>"cotillon","4" =>"cosas"]]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
