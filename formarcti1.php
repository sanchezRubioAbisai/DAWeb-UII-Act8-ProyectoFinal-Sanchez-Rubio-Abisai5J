<form class="formact1" action="" method="POST">
  <h1>Escoga su articulo preferido</h1>
  <select name="artInventario">
    <option>Arete de Oro</option>
    <option>Collar de Plata</option>
    <option>Anillo de Diamante</option>
  </select>
  <input type="submit" name="ight" value="Comprar">

  <?php
  if (isset($_POST['ight'])) {
    $articulo = $_POST['artInventario'];

    if ($articulo == "Arete de Oro") {
      $precioArt = 2000;
    } else if ($articulo  == "Collar de Plata") {
      $precioArt = 3200;
    } else if ($articulo == "Anillo de Diamante") {
      $precioArt = 5600;
    }
    echo "<b>Producto escogido:</b> $articulo<br><b>Precio:</b> MN$precioArt";
  }
  ?>
</form>