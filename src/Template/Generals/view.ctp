<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\General $general
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit General'), ['action' => 'edit', $general->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete General'), ['action' => 'delete', $general->id], ['confirm' => __('Are you sure you want to delete # {0}?', $general->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Generals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New General'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generals view large-9 medium-8 columns content">
    <h3><?= h($general->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($general->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($general->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($general->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($general->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($general->body)); ?>
    </div>
</div>
