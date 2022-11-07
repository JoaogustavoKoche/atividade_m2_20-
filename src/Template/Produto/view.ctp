<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->ide]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->ide], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->ide)]) ?> </li>
        <li><?= $this->Html->link(__('List Produto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produto view large-9 medium-8 columns content">
    <h3><?= h($produto->ide) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Produto') ?></th>
            <td><?= h($produto->nome_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Produto') ?></th>
            <td><?= h($produto->valor_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ide') ?></th>
            <td><?= $this->Number->format($produto->ide) ?></td>
        </tr>
    </table>
</div>
