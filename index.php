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
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="material-icons input-group-text">account_circle</span>
                    </div>
                    <input type="text" name="name" id="name" placeholder="Nombre del Estudiante"
                    class="form-control">
                    <input type="text" name="lastName" id="lastName" placeholder="Apellido del Estudiante"
                    class="form-control">
                </div>
                <form method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="material-symbols-outlined input-group-text">school</span>
                        </div>
                            <input type="text" name="matNombre" id="matNombre" placeholder="Nombre de la materia"
                             class="form-control" require>
                            <input type="number" name="UV" id="UV" placeholder="UV" min="1" max="6"
                             class="form-control" require>
                            <input type="number" name="nota" id="Nota" placeholder="Calificación"
                            min="0" max="10" class="form-control" require>
                            <input type="submit" class="btn btn-outline-secondary" name="add">
                                <span class="material-symbols-outlined">add_circle</span>
                            </button>
                    </div>
                </form>
            </div>
            <?php 
                if (isset($_SESSION['notas'])){
                $notas = $_SESSION['notas'];
                }
                else{
                    $_SESSION['notas'] = array();
                    $notas = $_SESSION['notas'];
                }
                
            ?>
            <div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre de la materia</th>
                            <th scope="col">UV</th>
                            <th scope="col">Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="info">
        <div class="card">
            INFO DEL APP
        </div>
    </div>
    
</body>
</html>