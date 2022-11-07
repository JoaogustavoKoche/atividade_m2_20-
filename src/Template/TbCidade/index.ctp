<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TbCidade[]|\Cake\Collection\CollectionInterface $tbCidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tb Cidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tbCidade index large-9 medium-8 columns content">
    <h3><?= __('Tb Cidade') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais_cidade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tbCidade as $tbCidade): ?>
            <tr>
                <td><?= $this->Number->format($tbCidade->id_cidade) ?></td>
                <td><?= h($tbCidade->nome_cidade) ?></td>
                <td><?= h($tbCidade->pais_cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tbCidade->id_cidade]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tbCidade->id_cidade]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tbCidade->id_cidade], ['confirm' => __('Are you sure you want to delete # {0}?', $tbCidade->id_cidade)]) ?>
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
