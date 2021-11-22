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
            <?= $this->Form->postLink(
                __('Deletar Console'),
                ['action' => 'delete', $console->id],
                ['confirm' => __('Voce tem certeza que quer deletar # {0}?', $console->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Consoles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="consoles form content">
            <?= $this->Form->create($console) ?>
            <fieldset>
                <legend><?= __('Editar Console') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('lancamento', ['empty' => true]);
                    echo $this->Form->control('preco');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
