<?php
$data = json_decode( file_get_contents('http://192.168.137.170:3000/lista/'), true );

// foreach($data as $item){
//     echo $item ["titulo"]."<br/>";
// }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>API Lugares Turisticos</title>

    <script defer src="script.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center pt-5 pb-4">Listado Turistico</h1>
      <hr>
      <div id="contenedor">
<?php
foreach($data as $item){
?>
          <div class="card">
              <div class="card-header">
                <h5 class="card-title"><?php echo $item ["titulo"]; ?></h5>
              </div>
              <div class="card-body">
                  <p class="card-text"><?php echo $item ["descripcion"]; ?></p>
              </div>
              <div class="card-footer">
                <h5 class="card-title"><?php echo "Lugar: ".$item ["departamento"]; ?></h5>
              </div>
          </div>
          <br/>
<?php
}
?>
      </div>
    </div>
  </body>
</html>
