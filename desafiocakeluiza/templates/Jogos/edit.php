<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jogo $jogo
 * @var string[]|\Cake\Collection\CollectionInterface $consoles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar Jogo'),
                ['action' => 'delete', $jogo->id],
                ['confirm' => __('Voce tem certeza que quer deletar # {0}?', $jogo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Jogos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jogos form content">
            <?= $this->Form->create($jogo) ?>
            <fieldset>
                <legend><?= __('Editar Jogo') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('lancamento', ['empty' => true]);
                    echo $this->Form->control('plataforma');
                    echo $this->Form->control('preco');
                    echo $this->Form->control('consoles_id', ['options' => $consoles, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
