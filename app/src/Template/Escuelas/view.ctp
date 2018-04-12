<style>
    .panel-table {
        display:table;
    }
    .panel-table > .panel-heading {
        display: table-header-group;
        background: transparent;
    }
    .panel-table > .panel-body {
        display: table-row-group;
    }
    .panel-table > .panel-body:before,
    .panel-table > .panel-body:after {
        content:none;
    }
    .panel-table > .panel-footer {
        display: table-footer-group;
        background: transparent;
    }
    .panel-table > div > .tr {
        display: table-row;
    }
    .panel-table > div:last-child > .tr:last-child > .td {
        border-bottom: none;
    }
    .panel-table .td {
        display: table-cell;
        padding: 15px;
        border: 1px solid #ddd;
        border-top: none;
        border-left: none;
    }
    .panel-table .td:last-child {
        border-right: none;
    }
    .panel-table > .panel-heading > .tr > .td,
    .panel-table > .panel-footer > .tr > .td {
        background-color: #f5f5f5;
    }
    .panel-table > .panel-heading > .tr > .td:first-child {
        border-radius: 4px 0 0 0;
    }
    .panel-table > .panel-heading > .tr > .td:last-child {
        border-radius: 0 4px 0 0;
    }
    .panel-table > .panel-footer > .tr > .td:first-child {
        border-radius: 0 0 0 4px;
    }
    .panel-table > .panel-footer > .tr > .td:last-child {
        border-radius: 0 0 4px 0;
    }
</style>


<div class="panel panel-default panel-table">
    <div class="panel-heading">
        <div class="tr">
            <div class="td">heading</div>
            <div class="td">heading</div>
            <div class="td">heading</div>
        </div>
    </div>
    <div class="panel-body">
        <div class="tr">
            <div class="td">
                <!--Datos de la Escuela-->
                <table class="vertical-table">
                    <tr>
                        <th scope="row">C.U.E.</th>
                        <td><?= $this->Number->format($escuela->cue) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Nombre') ?></th>
                        <td><?= h($escuela->name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Direccion') ?></th>
                        <td><?= h($escuela->address) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modo') ?></th>
                        <td><?= h($escuela->modo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Tipo') ?></th>
                        <td><?= h($escuela->tipo) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Email') ?></th>
                        <td><?= h($escuela->email) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Telefono') ?></th>
                        <td><?= h($escuela->telefono) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Latitud') ?></th>
                        <td><?= h($escuela->latitud) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Longitud') ?></th>
                        <td><?= h($escuela->longitud) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Descripcion') ?></th>
                        <td><?= h($escuela->descripcion) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Regionale') ?></th>
                        <td><?= $escuela->has('regionale') ? $this->Html->link($escuela->regionale->name, ['controller' => 'Regionales', 'action' => 'view', $escuela->regionale->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($escuela->id) ?></td>
                    </tr>                                        
                </table>
                
                <!--Fin datos de escuela-->
            </div>
            <div class="td">
                <!--Ubicacion del establecimiento-->
                <?= $this->element('Mapa/ubicacion') ?>
                
            </div>
            <div class="td">
                <!--Datos del Director-->
                
                <?php if (!empty($directores)): ?>
                <table class="table table-responsive">
                        <tr>
                            <th scope="col"><?= __('Nombre') ?></th>
                            <th scope="col"><?= __('Apellido') ?></th>
                            <th scope="col"><?= __('Email') ?></th>
                            <th scope="col"><?= __('Telefono') ?></th>
                            <th scope="col"><?= __('Anio') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($directores as $directore): ?>
                            <tr>
                                <td><?= h($directore->nombre) ?></td>
                                <td><?= h($directore->apellido) ?></td>
                                <td><?= h($directore->email) ?></td>
                                <td><?= h($directore->telefono) ?></td>
                                <td><?= h($directore->anio) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Directores', 'action' => 'view', $directore->id]) ?><br />
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Directores', 'action' => 'edit', $directore->id]) ?><br />
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Directores', 'action' => 'delete', $directore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $directore->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <div class="tr">
            <div class="td">footer</div>
            <div class="td">footer</div>
            <div class="td">footer</div>
        </div>
    </div>
</div>

</div></div></div>



