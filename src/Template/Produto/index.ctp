<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produto index large-9 medium-8 columns content">
    <h3><?= __('Produto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ide') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_produto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produto as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->ide) ?></td>
                <td><?= h($produto->nome_produto) ?></td>
                <td><?= h($produto->valor_produto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $produto->ide]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->ide]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->ide], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->ide)]) ?>
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
