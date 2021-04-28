<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Estetica Palagot</title>
</head>

<body>
    <header class="head">
        <a href="index.php"><img src="../img/Logo.jpg" height="100%" width="100%" alt="Logo"></a>
        <div class="nvg">
            <ul class=" nav justify-content-center ">
                <div class="row">
                    <div class="col-sm-4">
                        <li class="nav-item"><a class="nav-link text-dark" href="citas.php">Ver cita</a></li>
                    </div>
                    <div class="col-sm-4">
                        <li class="nav-item"><a class="nav-link text-dark" href="../index.html">Salir</a></li>
                    </div>
                </div>
            </ul>
        </div>
    </header>
        <?php
        session_start();
        include '../php/conexion.php';
        $query = "select * from cita";
        $r = mysqli_query($dbc,$query);
        if($r){
            echo "<table class='table table-dark table-hover'>";
            echo"<thead>";
            echo"<tr>";
            echo"<th>Id cita</th>";
            echo"<th>Servicio</th>";
            echo"<th>Fecha</th>";
            echo"<th>Hora</th>";
            echo"</tr>";
            echo"</thead>";
            while ($row=mysqli_fetch_array($r))
            {
                echo"<tbody>";
                echo "<td>".$row["Id"]."</td>";
                echo "<td>".$row["servicio"]."</td>";
                echo "<td>".$row["fecha"]."</td>";
                echo "<td>".$row["dia"]."</td>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
</body>

</html>