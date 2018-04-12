<script type="text/javascript">
    $(document).ready( function () {
        if($('#escuela_cue').val() !== '') {
            var cue = $('#escuela_cue').val();
            $('#escueal-seleccionada').val(cue);
        }
            var table = $('#tabla_escuelas').DataTable({
                            scrollY: 400,
                            "language": {
                                "lengthMenu": "Mostrando _MENU_ registros por pagina",
                                "zeroRecords": "No se han encontrado resultadoas",
                                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                                "infoEmpty": "Sin resultados",
                                "infoFiltered": "(filtrodo from _MAX_ total registros)",
                                "search": "Buscar"
                            }
                        });

            $('#tabla_escuelas').on('click', 'tbody tr', function () {
                var id = table.row(this).id();
                $('#escueal-seleccionada').val(id);
                $('#escuela_cue').val(id);
            });

//        $('#escuela-seleccionada').click({
//           alert('seleccionaste esta escuela') 
//        });
        });
    
</script>

<table id="tabla_escuelas" >
    <thead>        
        <tr>
            <td scope="col">ID</td>
            <td scope="col">C.U.E.</td>
            <td scope="col">Nombre</td>
            <td scope="col">Region</td>
            <td scope="col">Email</td>
            <td scope="col">Telefono</td>
            <td scope="col" ><?= __('Actions') ?></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($escuelas as $directore): ?>
        <tr id='<?= $directore->cue ?>'>
            <td><?= $directore->id ?></td>
            <td><?= $directore->cue ?></td>
            <td><?= $directore->name ?></td>
            <td><?= $directore->regionale_id ?></td>
            <td><?= $directore->email ?></td>
            <td><?= $directore->telefono ?></td>                

            <td>
                <button class="btn btn-info btn-xs" id='seleccionarEscuela'><span class="glyphicon glyphicon-edit"></span> Seleccionar</button>                    
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>    
</table>

