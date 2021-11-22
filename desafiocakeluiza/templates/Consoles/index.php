<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Console[]|\Cake\Collection\CollectionInterface $consoles
 */
?>
<div class="consoles index content">
    <?= $this->Html->link(__('Novo Console'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Consoles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('lancamento') ?></th>
                    <th><?= $this->Paginator->sort('preco') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consoles as $console): ?>
                <tr>
                    <td><?= $this->Number->format($console->id) ?></td>
                    <td><?= h($console->nome) ?></td>
                    <td><?= h($console->lancamento) ?></td>
                    <td><?= h($console->preco) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $console->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $console->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $console->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $console->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Proximo') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>
