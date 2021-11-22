<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jogo[]|\Cake\Collection\CollectionInterface $jogos
 */
?>
<div class="jogos index content">
    <?= $this->Html->link(__('Novo Jogo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jogos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('lancamento') ?></th>
                    <th><?= $this->Paginator->sort('plataforma') ?></th>
                    <th><?= $this->Paginator->sort('preco') ?></th>
                    <th><?= $this->Paginator->sort('consoles_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jogos as $jogo): ?>
                <tr>
                    <td><?= $this->Number->format($jogo->id) ?></td>
                    <td><?= h($jogo->nome) ?></td>
                    <td><?= h($jogo->lancamento) ?></td>
                    <td><?= h($jogo->plataforma) ?></td>
                    <td><?= h($jogo->preco) ?></td>
                    <td><?= $jogo->has('console') ? $this->Html->link($jogo->console->id, ['controller' => 'Consoles', 'action' => 'view', $jogo->console->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $jogo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $jogo->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $jogo->id], ['confirm' => __('Tem certeza que quer deletar # {0}?', $jogo->id)]) ?>
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
