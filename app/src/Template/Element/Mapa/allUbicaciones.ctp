<!DOCTYPE html>
<html>
  <head>
      <script type="text/javascript">
//          $(document).ready(function(){
//              $('form').submit(function(e){
//                 e.preventDefault();
//                 var data = $(this).serialezeArray();
//                 $.ajax({
//                     url: 'escuelas/ubicaciones',
//                     type: 'post',
//                     datetype: 'json',
//                     data: data,
//                     
//                 });
//              });
//          });

    $(function(){
        $('#enviar').click(function(){
//            var targeturl = $(this).attr('rel');
            var data = $('form').serialezeArray();    
                    $.ajax({
                        url: 'escuelas/ubicaciones',
                        type: 'post',
                        datetype: 'json',
                        data: data,
//                        url: targeturl,
                        beforeSend: function(){
                            
                        },
                        success: function(){
                            
//                            if (response.result)
//                            {
//                                var result = response.result;
//                                $('#result').html(result.now);
//                            }
                        },
//                        error: function (e)
//                        {
//                            alert("An error occurred: " + e.responseText.message);
//                            console.log(e);
//                        }
                    });
            });
        });
      </script>  
    <style>
       #map {
            height: 600px;
            width: 100%;
       }
       #info_mapa {
           padding: 10px;
           font-size: 10px;
           
       }
       #masInfoMapa {
           padding: 5px;
           float: right;
       }
    </style>
  </head>
  <body>
     <?php 
            
     ?> 
    <h3>Todos los mapas de la zona</h3>
    <?= $this->Form->create(); ?>
    <div class="input-group add-on" style="margin: 0; padding-bottom: 10px">        
        <?= $this->Form->control('buscar', ['label' => false, 'placeholder' => 'Buscar']) ?>
        <div class="input-group-btn">
            <div class="btn-group" role="group">            
            <?= $this->Form->control('regionale_id', ['label' => false, 'type' => 'select', 'options' => $regionales, 'default' => '9', 'class' => false, 'style' => 'width: 166px;']) ?>
            <span class="caret"></span>    
          </div>           
            <?= $this->Form->button('<i class="glyphicon glyphicon-search"></i>',['class' => 'btn btn-default', 'style' => 'width:100px; height:34px', 'id' => 'enviar'], ['escape' => false])  ?>          
            <!--<i class="glyphicon glyphicon-refresh"></i>-->
            <!--<i class="fa fa-refresh fa/spin"></i>-->
        </div>        
    </div>
    <?= $this->Form->end(); ?>
    <div id="map"></div>
    <script>
      function initMap() {
         
        var uluru = {lat: -26.7833, lng: -60.45};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        }); 
        <?php foreach ($escuelas as $escuela): ?>         
        addMarker({
                coords:{lat:<?= $escuela->latitud ?>, lng:<?= $escuela->longitud ?>},
                content:'<div id="info_mapa"><div></h4><?= $escuela->name ?>&nbsp;</h4><span>C.U.E.&nbsp;<?= $escuela->cue ?></span></div><div id="masInfoMapa"><?= $this->Html->link('Mas informacion', ['controller' => 'escuelas', 'action' => 'view', $escuela->id], ['target' => '_blank']) ?></div></div>',
                icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
            });
        <?php endforeach; ?>                    
                
        function addMarker(props) {
            var marker = new google.maps.Marker({
                position: props.coords,
                map:map,
                icon: props.icon
            });
            
            //  Generar contenido
            
            if(props.content) {
                var infowindow = new google.maps.InfoWindow({
                    content: props.content
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                  });
            }
            
            
        }
    }  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6yOyJEdB8w1HYsYd2EomznimxUO2jbaE&callback=initMap">
    </script>
  </body>
</html>