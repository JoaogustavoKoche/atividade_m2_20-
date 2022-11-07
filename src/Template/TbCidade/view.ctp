<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbCidade $tbCidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tb Cidade'), ['action' => 'edit', $tbCidade->id_cidade]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tb Cidade'), ['action' => 'delete', $tbCidade->id_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCidade->id_cidade)]) ?> </li>
        <li><?= $this->Html->link(__('List Tb Cidade'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tb Cidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tbCidade view large-9 medium-8 columns content">
    <h3><?= h($tbCidade->id_cidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Cidade') ?></th>
            <td><?= h($tbCidade->nome_cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais Cidade') ?></th>
            <td><?= h($tbCidade->pais_cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cidade') ?></th>
            <td><?= $this->Number->format($tbCidade->id_cidade) ?></td>
        </tr>
    </table>
</div>
