<div class="directores view large-9 medium-8 columns content">
    <h3><?= h($directore->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($directore->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($directore->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($directore->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($directore->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Escuela') ?></th>
            <td><?= h($directore->escuela_cue)?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($directore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año') ?></th>
            <td><?= h($directore->anio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($directore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($directore->modified) ?></td>
        </tr>
    </table>
</div>
