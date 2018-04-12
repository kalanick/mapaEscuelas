<div>
    <h3><?= __('Escuelas') ?></h3>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cue') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitud') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitud') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('regionale_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($escuelas as $escuela): ?>
            <tr>
                <td><?= $this->Number->format($escuela->id) ?></td>
                <td><?= h($escuela->cue) ?></td>
                <td><?= h($escuela->name) ?></td>
                <td><?= h($escuela->address) ?></td>
                <td><?= h($escuela->modo) ?></td>
                <td><?= h($escuela->tipo) ?></td>
                <td><?= h($escuela->email) ?></td>
                <td><?= h($escuela->telefono) ?></td>
                <td><?= h($escuela->latitud) ?></td>
                <td><?= h($escuela->longitud) ?></td>
                <td><?= h($escuela->descripcion) ?></td>
                <td><?= h($escuela->created) ?></td>
                <td><?= h($escuela->modified) ?></td>
                <td><?= h($escuela->regionale_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span>Detalle', ['action' => 'view', $escuela->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                    <?= $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>Editar'), ['action' => 'edit', $escuela->id], ['class' => 'btn btn-warning', 'escape' => false]) ?>
                    <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-edit"></span>Delete'), ['action' => 'delete', $escuela->id], ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $escuela->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '' ]) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
