<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <title>canciones prueba</title>
</head>
<body>
  <div class = "container-lg text-center">
      <!-- fila div de titulo  -->
    <div class = "row">
      <div class = "col">
      <h1>My playlist</h1>
      </div>
    </div>
    <br><br>
    <!-- fila div de búsqueda del nombre de una canción  -->
    <div class = "row">
      <div class = "col">
        <form>
          <input type="text" id="inputText" size="50" placeholder="Campo de búsqueda" />
          <input type="button" id="buttonText" value="Buscar" />
        </form>
    </div>
    </div>
    <br><br>
<!-- fila div de titulos: Nombre, Artistas y género  -->
    <div class = "row">
      <div class = "col" style="border: 1px solid black">
        <h3>Nombre</h2>
      </div>
      <div class = "col" style="border: 1px solid black">
        <h3>Artista</h3>
      </div>
      <div class = "col" style="border: 1px solid black">
        <h3>Género</h3>
      </div>
    </div>

  <!-- fila div de los nombres, artistas y generos -->
      <div class= "row" style="border: 1px solid black">
        <div class = "col">
        <?php
        require_once 'model/funcionesBD.php';
        require_once 'controller/funciones.php';
//         echo getAllSongs();
        // devuelve todos los nombres
        $result = getAllSongs();
        
        foreach ($result as $cancion){
            
            echo '<div class="row">
		              <div class = "col" style="border: 1px solid black">'. $cancion['name'].'</div>
                      <div class = "col" style="border: 1px solid black">'. $cancion['artist'].'</div>
                      <div class = "col" style="border: 1px solid black">'. $cancion['genre'].'</div>
                 </div>';
        }

        
        
        ?>
        </div>
      </div>
   
  </div>
</body>
</html>


