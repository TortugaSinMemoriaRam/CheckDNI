<?php
$personas = array(
    array("Dennis Diaz Meza", "71072259"),
    array("Catalina Rolón", "70540916"),
    array("Valentina Sisneros", "77798270"),
    array("Antonio Salazar", "73477883"),
    array("Alexander Saucedo", "74759671"),
    array("Sophie Bétancourt", "72760991"),
    array("Anthony Pizarro", "73398598"),

    array("David Aranda", "70912021"),
    array("María Fernanda Garza", "73994025"),
    array("Rafaela Barela", "76739550"),
    array("Valery Santacruz", "76290555"),
    array("Lucas Barrera", "72136727"),
    array("Andrea Sauceda", "74448326"),
    array("Rafael Montalvo", "76812198")
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagina Principal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Formulario de Consulta</h1>
        <h2>Consulta:</h2>
        <div class="para">
        <p>Consulta de identificación de Dni simple via pagina web alojado en servicio de Azure. <br> Servicios. <strong> Web Estatic app, MySQL server</strong> y <strong> Githup.</strong> <br>
        Leguajes: <strong>HTML, PHP, CSS, SQL</strong><br>
        Program; <strong>Azure poltal, Visual Studio Code<strong></p>
    </div>
        <h3>Ejemplos</h3>
        <div class="box">
            <ul>
                <li>71072259</li>
                <li>70540916</li>
                <li>77798270</li>
                <li>73477883</li>
                <li>74759671</li>
                <li>72760991</li>
                <li>73398598</li>
            </ul>
        </div>
        <div class="box">
            <ul>
                <li>70912021</li>
                <li>73994025</li>
                <li>76739550</li>
                <li>76290555</li>
                <li>72136727</li>
                <li>74448326</li>
                <li>76812198</li>
            </ul>
        </div>
        <div class="Doc">
            <form method="post">
        <label for="dni">Ingrese un DNI:</label>
    <input type="text" name="dni" id="dni">
        <n><strong>Nombre:</strong></n>
        <?php
        // Verificar si se recibió un DNI por POST
  if (isset($_POST['dni'])) {
      $dni = $_POST['dni'];
      $encontrado = false;
      // Buscar el DNI en la lista
      foreach ($personas as $persona) {
          if ($persona[1] == $dni) {
              $encontrado = true;
              echo "<p>La persona con DNI $dni es: ".$persona[0]."</p>";
              break;
          }
      }
      // Si no se encontró el DNI, mostrar un mensaje de error
      if (!$encontrado) {
          echo "<p>No se encontró ninguna persona con DNI $dni</p>";
      }
  }
  ?>
        <button type="submit">Buscar</button>
        </form>
        </div>
    </body>
</html>
