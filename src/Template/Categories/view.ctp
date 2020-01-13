<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notices'), ['controller' => 'Notices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notice'), ['controller' => 'Notices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($category->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($category->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Notices') ?></h4>
        <?php if (!empty($category->notices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Banner') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Pdf') ?></th>
                <th scope="col"><?= __('Liked') ?></th>
                <th scope="col"><?= __('Noliked') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->notices as $notices): ?>
            <tr>
                <td><?= h($notices->id) ?></td>
                <td><?= h($notices->title) ?></td>
                <td><?= h($notices->body) ?></td>
                <td><?= h($notices->start) ?></td>
                <td><?= h($notices->path) ?></td>
                <td><?= h($notices->banner) ?></td>
                <td><?= h($notices->image) ?></td>
                <td><?= h($notices->pdf) ?></td>
                <td><?= h($notices->liked) ?></td>
                <td><?= h($notices->noliked) ?></td>
                <td><?= h($notices->category_id) ?></td>
                <td><?= h($notices->created) ?></td>
                <td><?= h($notices->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Notices', 'action' => 'view', $notices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Notices', 'action' => 'edit', $notices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Notices', 'action' => 'delete', $notices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
