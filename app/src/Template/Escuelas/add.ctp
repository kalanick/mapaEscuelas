<nav class="navbar navbar-default navbar-static"> 
    <div class="container-fluid">        
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
            <?= $this->Form->create($escuela) ?>
            <fieldset>
                <legend>Agregar Escuela</legend>
                <?= $this->element('Escuelas/fields') ?>
            </fieldset>
            <div class='form-row'>
                <div class='form-group'>
                    <label class='control-label' style="width: 100%"></label>                     
                    <?= $this->Form->button('Continual', ['class' => 'btn btn-primary submit-button', ['style' => 'width:100%']]) ?>                
                </div>
            </div>            
            <?= $this->Form->end() ?>
        </div>        
    </div>  
</div>
