
<?= $this->element('Directores/tablas') ?>
<div class="directores form large-6 medium-5 columns content">
    <?= $this->Form->create($directore) ?>
    <fieldset>
        <legend><?= __('Agregar un Director') ?></legend>
        <?= $this->element('Directores/fields')?>
    </fieldset>
    <?= $this->Form->button('Continuar', ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>

