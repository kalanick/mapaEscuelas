<div class="container">
    <div class="row col-md-10">
    <table class="table table-striped custab">            
        <tbody>
                <?php foreach ($directores as $directore): ?>
            <tr>
                <td><?= $this->Number->format($directore->id) ?></td>
                <td><?= h($directore->nombre) ?></td>
                <td><?= h($directore->apellido) ?></td>
                <td><?= h($directore->email) ?></td>
                <td><?= h($directore->telefono) ?></td>
                <td><?= h($directore->anio) ?></td>
                <td><?= h($directore->created) ?></td>
                <td><?= h($directore->modified) ?></td>
                <td><?= h($directore->escuela_cue) ?></td>
                <td class="text-center">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit"></span> INFO', ['action' => 'view', $directore->id], ['class' => 'btn btn-info btn-xs', 'escape' => false]) ?>
                        <?= $this->Html->link('<span class="glyphicon glyphicon-remove"></span> EDIT', ['action' => 'edit', $directore->id], ['class' => 'btn btn-warning btn-xs', 'escape' => false]) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $directore->id], ['class' => 'btn btn-danger btn-xs', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $directore->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>    
    </table>
    </div>
</div>
<div class="directores index large-9 medium-8 columns content">    
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
