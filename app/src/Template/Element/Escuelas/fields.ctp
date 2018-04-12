<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="tab-content">
                <div id="stripe" class="tab-pane fade in active">                    
                    <div class='form-row'>
                        <div class='form-group required'>                            
                            <label class='control-label'>C.U.E. Del Establecimiento</label>
                            <?php echo $this->Form->control('cue', ['label' => false, 'type' => 'text']); ?>                            
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Nombre del Establecimiento</label>
                            <?php echo $this->Form->control('name', ['label' => false]); ?>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Direccion</label>
                            <?php echo $this->Form->control('address', ['label' => false]); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Modo estableciemiento</label>
                            <?php echo $this->Form->control('modo', ['label' => false, 'options' => ['primaria' => 'Primaria', 'secundaria' => 'Secundaria']]); ?> 
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Condicion Establecimiento</label>
                            <?php echo $this->Form->control('tipo', ['label' => false, 'options' => ['central' => 'Central', 'anexo' => 'Anexo']]); ?> 
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Email</label>
                            <?php echo $this->Form->control('email', ['label' => false]); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Telefono</label>
                            <?php echo $this->Form->control('telefono', ['label' => false]); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Latitud</label>
                            <?php echo $this->Form->control('latitud', ['label' => false]); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Longitud</label>
                            <?php echo $this->Form->control('longitud', ['label' => false]); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Descripcion</label>
                            <?php echo $this->Form->control('descripcion', ['label' => false, 'type' => 'textarea']); ?>  
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group card required'>
                            <label class='control-label'>Regional</label>
                            <?php echo $this->Form->control('regional_id', ['label' => false, 'options' => $regionales] ); ?>  
                        </div>
                    </div>                                        
                </div>                
            </div>
        </div>
    </div>
</div>