
<div class="escuelas form large-9 medium-8 columns content">
    <?= $this->Form->create($escuela) ?>
    <fieldset>
        <legend><?= __('Editar Escuela') ?></legend>
        <?= $this->element('Escuelas/fields') ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
