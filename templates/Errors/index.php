<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Error[]|\Cake\Collection\CollectionInterface $errors
 */
?>
<div class="errors index content">
    <?= $this->Html->link(__('New Error'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Errors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('error_name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('source') ?></th>
                    <th><?= $this->Paginator->sort('time') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($errors as $error): ?>
                <tr>
                    <td><?= $this->Number->format($error->id) ?></td>
                    <td><?= h($error->error_name) ?></td>
                    <td><?= h($error->description) ?></td>
                    <td><?= h($error->source) ?></td>
                    <td><?= h($error->time) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $error->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $error->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $error->id], ['confirm' => __('Are you sure you want to delete # {0}?', $error->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
