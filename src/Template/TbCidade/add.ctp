<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbCidade $tbCidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tb Cidade'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tbCidade form large-9 medium-8 columns content">
    <?= $this->Form->create($tbCidade) ?>
    <fieldset>
        <legend><?= __('Add Tb Cidade') ?></legend>
        <?php
            echo $this->Form->control('nome_cidade');
            echo $this->Form->control('pais_cidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
