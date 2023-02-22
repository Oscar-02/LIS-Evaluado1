<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="index.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <div class="content">
        <header>
            <h1>Calculadora de CUM</h1>
            <p>
                Esta aplicacion permite el calculo del Coeficiente de Unidades 
                de Mérito y poder catalogar al alumno por su nivel de aprendizaje.
                <br>
                Para iniciar, coloque su nombre y a continuación agregue el nombre
                de la materia, sus unidades valorativas y su calificación.
            </p>
        </header>
        <div class="calculator">
            <div class="form">
                <form method="post" action="#">
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="material-symbols-outlined input-group-text">school</span>
                        </div>
                            <input type="text" name="matNombre" id="matNombre" placeholder="Materia"
                             class="form-control" required>
                            <input type="number" name="UV" id="UV" placeholder="UV" min="1" max="6"
                             class="form-control" required>
                            <input type="number" name="nota" id="Nota" placeholder="Calificación"
                            min="0" max="10" step="0.01" class="form-control" required>
                            <input type="submit" name="add" class="material-symbols-outlined" value="add_circle">
                    </div>  
                    <?php
                        if (isset($_POST['add'])){
                            array_push($_SESSION['notas'], array($_POST['matNombre'], $_POST['UV'], $_POST['nota']));
                        }
                        else{
                            $_SESSION['notas'] = array();
                        }
                    ?>
                </form>
            </div>
            <div class="card">
                <div class="card-body">
                        <?php
                            if (isset($_POST['add'])){
                                $nombre = $_SESSION['nombre'];
                                $notas = $_SESSION['notas'];
                                $sumNotas = 0;
                                $sumUV = 0;
                                for ($i=0; $i < count($notas); $i++) { 
                                    $sumNotas += $notas[$i][2] * $notas[$i][1];
                                    $sumUV += $notas[$i][1];
                                }
                                $cum = $sumNotas / $sumUV;
                                echo '<h5 class="card-title">' . round($cum, 2) . '</h5>';
                                if ($cum >= 9.5){
                                    echo '<h6 class="card-subtitle mb-2 text-muted">SUMMA CUM LAUDE</h6>';
                                }
                                else if ($cum >= 8.5 and $cum < 9.5 ){
                                    echo '<h6 class="card-subtitle mb-2 text-muted">MAGNA CUM LAUDE</h6>';
                                }
                                else if ($cum >= 8 and $cum < 8.5){
                                    echo '<h6 class="card-subtitle mb-2 text-muted">CUM LAUDE</h6>';
                                }
                                else if ($cum >= 6 and $cum < 8){
                                    echo '<h6 class="card-subtitle mb-2 text-muted">Graduado</h6>';
                                }
                            }
                        ?>
                        <a href="index.php" class="card-link">Limpiar e iniciar de nuevo</a>
                </div>
            </div>
            <div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr id="Materias">
                            <th scope="col">Nombre de la materia</th>
                            <th scope="col">UV</th>
                            <th scope="col">Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($_POST['add'])){
                                $notas = $_SESSION['notas'];
                                foreach($notas as $valor){
                                    echo "<tr>";
                                    echo "<th>" . $valor[0] . "</th>";
                                    echo "<td>" . $valor[1] . "</td>";
                                    echo "<td>" . $valor[2] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            else{
                                
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="card">
            <img src="http://www.sciweavers.org/upload/Tex2Img_1677049295/render.png" alt="method" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Formula de calculo de CUM</h5>
            </div>
        </div>
    </div>
    
</body>
</html>