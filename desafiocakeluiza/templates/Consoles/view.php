<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Console $console
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Console'), ['action' => 'edit', $console->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Console'), ['action' => 'delete', $console->id], ['confirm' => __('Are you sure you want to delete # {0}?', $console->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Consoles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Console'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="consoles view content">
            <h3><?= h($console->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($console->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco') ?></th>
                    <td><?= h($console->preco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($console->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lancamento') ?></th>
                    <td><?= h($console->lancamento) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
