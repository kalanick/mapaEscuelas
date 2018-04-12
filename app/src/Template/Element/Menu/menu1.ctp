<nav class="navbar navbar-default navbar-static"> 
    <div class="container-fluid"> 
        <div class="navbar-header"> 
            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse"> 
                <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
            <a href="#" class="navbar-brand">Mapa de Escuelas</a> 
        </div>
        
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse"> 
            <?php  if(isset($current_user)):  ?>
            <ul class="nav navbar-nav"> 
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Escuelas <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop1"> 
                        <li><?= $this->Html->link('Buscar escuelas',['controller' => 'escuelas', 'action' => 'ubicaciones'])?></li> 
                        <li><?= $this->Html->link('Agregar escuelas',['controller' => 'escuelas', 'action' => 'add'])?></a></li> 
                        <li><?= $this->Html->link('Listar escuelas',['controller' => 'escuelas', 'action' => 'index'])?></li> 
                        <li role="separator" class="divider"></li> 
                        <li><a href="#">Separated link</a></li> 
                    </ul> 
                </li> 
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Directores <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop2"> 
                        <li><?= $this->Html->link('Agregar Directores',['controller' => 'directores', 'action' => 'add'])?></li> 
                        <li><?= $this->Html->link('Listar Directores',['controller' => 'directores', 'action' => 'index'])?></li>
                        <li role="separator" class="divider"></li> 
                        <li><a href="#">Separated link</a></li> 
                    </ul> 
                </li>
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Equipamientos <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop2"> 
                        <li><?= $this->Html->link('Agregar Equipamiento',['controller' => '#', 'action' => '#'])?></li> 
                        <li><?= $this->Html->link('Listar Equipamiento',['controller' => '#', 'action' => '#'])?></li>
                        <li role="separator" class="divider"></li> 
                        <li><a href="#">Separated link</a></li> 
                    </ul> 
                </li>
                <?php if($current_user['role'] == 'admin'):  ?>
                <li class="dropdown"> 
                    <a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuarios <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop2"> 
                        <li><?= $this->Html->link('Agregar Usuario',['controller' => 'users', 'action' => 'add'])?></li> 
                        <li><?= $this->Html->link('Listar Usuarios',['controller' => 'users', 'action' => 'index'])?></li>
                        <li role="separator" class="divider"></li> 
                        <li><a href="#">Separated link</a></li> 
                    </ul> 
                </li>
                <?php endif;  ?>
            </ul> 
            <ul class="nav navbar-nav navbar-right"> 
                <li id="fat-menu" class="dropdown"> <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Usuario <span class="caret"></span> </a> 
                    <ul class="dropdown-menu" aria-labelledby="drop3"> 
                        <li><?= $this->Html->link('Perfil',['controller' => 'users', 'action' => 'view', $current_user['id']])?></li>
                        <li role="separator" class="divider"></li> 
                        <li><?= $this->Html->link('Logout',['controller' => 'users', 'action' => 'logout'])?></li> 
                    </ul> 
                </li> 
            </ul> 
        <?php else: ?>
            <ul class="nav navbar-nav navbar-right"> 
                <li id="fat-menu" class="dropdown"> 
                    <?= $this->Html->link('Login',['controller' => 'users', 'action' => 'login'])?>                    
                </li> 
            </ul>
        <?php endif; ?>
        </div>
        
    </div> 
</nav>
