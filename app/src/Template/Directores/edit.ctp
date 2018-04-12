<?= $this->element('Directores/tablas') ?>
<div class="directores form large-9 medium-8 columns content">
    <?= $this->Form->create($directore) ?>
    <fieldset>
        <legend><?= __('Editar Directore') ?></legend>
        <?= $this->element('Directores/fields')?>
    </fieldset>
    <?= $this->Form->button(__('Continular')) ?>
    <?= $this->Form->end() ?>
</div>
