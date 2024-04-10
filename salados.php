
<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       <?php 
    include('recursos/header.php')
    ?>
    </header>
    <main class="productosmain">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "comida";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } 

    // Sacar los datos
    $sql = "SELECT * FROM salados";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul class='productos'>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" .
                "<h2>" . $row["nombre"] . "</h2>" .
                "<p>" . $row["descripcion"] . "</p>" .
                "<img src=" . 'img/'.$row["img"] . ">" .
                "</li>";
            }
        echo "</ul>";
    } else {
        echo "No hay resultados";
    }

    // Cerrar la conexión
    $conn->close();

    ?>
    <div class="pinxos">
    <h2>¡Tenemos una gran variedad de pinchos!</h2>
    <img src="" alt="" id="secuencia2">
    </div>

    </main>
    <footer>
        <?php include 'recursos/footer.php' ?>
    </footer>
    <script src="jsjs2.js"></script>
    
</body>
</html>