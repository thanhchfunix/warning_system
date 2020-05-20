<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Error $error
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $error->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $error->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Errors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="errors form content">
            <?= $this->Form->create($error) ?>
            <fieldset>
                <legend><?= __('Edit Error') ?></legend>
                <?php
                    echo $this->Form->control('error_name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('source', [
                        'options' => ['telegram' => 'Telegram', 'email' => 'Email']]);
                    echo $this->Form->control('time');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
