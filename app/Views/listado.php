<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
  </head>
  <body>

    <div class="container">
        <h1>Crud con codeigniter</h1> 
        
        <h4>Listado</h4>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control">
                <label for="materno">Apellido Materno</label>
                <input type="text" name="materno" id="materno" class="form-control">
                <br>
                <button class="btn btn-primary" > Guardar </button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
           
            <div class="col-sm-12">
              <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                      <tr>
                          <th>Nombre</th>
                          <th>Apellido Paterno</th>
                          <th>Apellido Materno</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                      </tr>
                      <?php foreach($datos as $key): ?>
                      <tr>
                        <td><?php echo $key->nombre ?></td>
                        <td><?php echo $key->paterno ?></td>
                        <td><?php echo $key->materno ?></td>
                        <td>
                            <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre?>" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                      </tr> 
                      <?php endforeach; ?> 
                    </table>
              </div>
            </div>
        </div>
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
  let mensaje = '<?php echo $mensaje; ?>'

  if(mensaje == '1'){
    swal(':D','Agregado con exito', 'success');
  }else if(mensaje == '0'){
    swal(':(','Error al agregar', 'error');
  }else if(mensaje == '2'){
    swal(':D','Actualizado Correctamente', 'success');
  }else if(mensaje == '3'){
    swal(':(','Fallo al actualizar', 'error');
  }else if(mensaje == '4'){
    swal(':D','Eliminado con exito', 'success');
  }else if(mensaje == '4'){
    swal(':(','Error al Eliminar', 'error');
  }                          


</script>

</body>

</html>