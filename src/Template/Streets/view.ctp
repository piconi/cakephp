<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Street $street
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Street'), ['action' => 'edit', $street->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Street'), ['action' => 'delete', $street->id], ['confirm' => __('Are you sure you want to delete # {0}?', $street->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Streets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Street'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="streets view large-9 medium-8 columns content">
    <h3><?= h($street->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($street->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($street->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($street->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($street->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($street->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($street->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($street->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($street->modified) ?></td>
        </tr>
    </table>
</div>
