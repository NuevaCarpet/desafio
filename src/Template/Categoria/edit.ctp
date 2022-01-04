<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorium $categorium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $categorium->id],
                ['confirm' => __('Estas seguro que desea eliminar la categoria {0}?', $categorium->descripcion_cat)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Categoria'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoria form large-9 medium-8 columns content">
    <?= $this->Form->create($categorium) ?>
    <fieldset>
        <legend><?= __('Editar Categoria') ?></legend>
        <?php
            echo $this->Form->control('descripcion_cat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
