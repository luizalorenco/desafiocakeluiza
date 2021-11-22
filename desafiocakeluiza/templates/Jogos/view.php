<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jogo $jogo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Jogo'), ['action' => 'edit', $jogo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Jogo'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Jogos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Jogo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jogos view content">
            <h3><?= h($jogo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($jogo->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plataforma') ?></th>
                    <td><?= h($jogo->plataforma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco') ?></th>
                    <td><?= h($jogo->preco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Console') ?></th>
                    <td><?= $jogo->has('console') ? $this->Html->link($jogo->console->id, ['controller' => 'Consoles', 'action' => 'view', $jogo->console->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($jogo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lancamento') ?></th>
                    <td><?= h($jogo->lancamento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
