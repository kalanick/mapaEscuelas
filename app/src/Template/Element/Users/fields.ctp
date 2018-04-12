<?php
echo $this->Form->control('name', ['label' => 'Nombre']);
echo $this->Form->control('last_name', ['label' => 'Apellido']);
echo $this->Form->control('email');
echo $this->Form->control('password');
if($current_user['role'] === 'admin') {
    echo $this->Form->control('role', ['options' => ['admin' => 'Adminstrador', 'users' => 'Usuario']]);
    echo $this->Form->control('active');
} else {
    echo $this->Form->control('role',['type' => 'hide', 'value' => 'users']);
    echo $this->Form->control('active',['type' => 'hide', 'value' => '1']);
}    

?>

