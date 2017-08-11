<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Streets'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="streets form large-9 medium-8 columns content">
    <?= $this->Form->create($street) ?>
    <fieldset>
        <legend><?= __('Add Street') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('number');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('cep');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
