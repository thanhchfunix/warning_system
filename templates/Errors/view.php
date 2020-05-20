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
            <?= $this->Html->link(__('Edit Error'), ['action' => 'edit', $error->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Error'), ['action' => 'delete', $error->id], ['confirm' => __('Are you sure you want to delete # {0}?', $error->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Errors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Error'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="errors view content">
            <h3><?= h($error->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Error Name') ?></th>
                    <td><?= h($error->error_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($error->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Source') ?></th>
                    <td><?= h($error->source) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($error->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($error->time) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
