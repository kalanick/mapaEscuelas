<?php
echo $this->Form->control('escueal_seleccionada', ['readonly' => 'readonly']);
echo $this->Form->control('nombre');
echo $this->Form->control('apellido');
echo $this->Form->control('email');
echo $this->Form->control('telefono');
echo $this->Form->control('anio', ['readonly' => 'readonly', 'format' => 'Y m d']);
echo $this->Form->control('escuela_cue', ['type' => 'hide']);
?>