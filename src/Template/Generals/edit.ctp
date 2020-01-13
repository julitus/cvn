<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\General $general
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $general->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $general->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Generals'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="generals form large-9 medium-8 columns content">
    <?= $this->Form->create($general) ?>
    <fieldset>
        <legend><?= __('Edit General') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
