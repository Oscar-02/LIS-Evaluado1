<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="indexCSS.php">
    <title>Ejercicio 2</title>
</head>
<body style="padding: 10px 0;">
    <div class="title mx-auto">
        <h1>Calculadora de formulas</h1>
    </div>
    <div class="title">
    <?php 
        if (isset($_POST['calcular'])){
            $calculo = $_POST['calculo'];
            switch($calculo){
                case "perimetro":
                    $radio = $_POST['radio'];
                    $result = 2 * pi() * $radio;
                    break;
                case "area":
                    $radio = $_POST['radio'];
                    $result = pi() * pow($radio, 2);
                    break;
                case "volumen":
                    $radio = $_POST['radio'];
                    $result = 4/3 * pi() * pow($radio, 3);
                    break;
                case "velocidad":
                    $d = $_POST['distancia'];
                    $t = $_POST['tiempo'];
                    $result = $d / $t;
                    break;
                case "fuerza":
                    $m = $_POST['masa'];
                    $a = $_POST['aceleracion'];
                    $result = $m * $a;
                    break;
                case "voltaje":
                    $i = $_POST['intensidad'];
                    $r = $_POST['resistencia'];
                    $result = $i * $r;
                    break;
                case "presion":
                    $f = $_POST['fuerza'];
                    $a = $_POST['area'];
                    $result = $f / $a;
                    break;
                case "densidad":
                    $m = $_POST['masa'];
                    $v = $_POST['volumen'];
                    $result = $m / $v;
                    break;
                case "error":
                    $t = $_POST['teorico'];
                    $e = $_POST['experimento'];
                    $result = (($e - $t) / ($t)) * 100;
                    break;
            }
            echo '<p class="lead"> El resultado a la operación anterior solicitada es: '.round($result, 4).'</p>';
        }
    ?>
    </div>
    <p style="padding: 0 20px;">
        <button class="btn btn-primary" type="button" aria-controls="mathList" aria-expanded="false"
        data-toggle="collapse" data-target="#mathList">Matemáticas</button>
        <button class="btn btn-primary" type="button" aria-controls="phyList" aria-expanded="false"
        data-toggle="collapse" data-target="#phyList">Física</button>
        <button class="btn btn-primary" type="button" aria-controls="cheList" aria-expanded="false"
        data-toggle="collapse" data-target="#cheList">Química</button>
        <button class="btn btn-primary" type="button" aria-controls="bioList" aria-expanded="false"
        data-toggle="collapse" data-target="#bioList">Biología</button>
        <button class="btn btn-primary" type="button" aria-controls="geoList" aria-expanded="false"
        data-toggle="collapse" data-target="#geoList">Geología</button>
    </p>
    <div class="collapse multi-collapse" id="mathList">
        <div class="card text-center" style="margin: 0px 10px;">
            <div class="card-header">
                <nav>
                    <div class="nav nav-tabs" role="tablist" id="nav-tab">
                        <a href="#math1Show" class="nav-item nav-link active" id="math1" 
                        data-toggle="tab" role="tab" aria-controls="math1Show" aria-selected="true">Perimetro de circulo</a>
                        <a href="#math2Show" class="nav-item nav-link" id="math2" 
                        data-toggle="tab" role="tab" aria-controls="math2Show" aria-selected="false">Area de circulo</a>
                        <a href="#math3Show" class="nav-item nav-link" id="math3" 
                        data-toggle="tab" role="tab" aria-controls="math3Show" aria-selected="false">Volumen de esfera</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">    
                    <div class="tab-pane fade show active" id="math1Show" role="tabpanel" aria-labelledby="math1">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20P%3D2%5Cpi%20r" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Radio del circulo"
                                                name="radio" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="perimetro" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="math2Show" role="tabpanel" aria-labelledby="math2">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20A%3D%5Cpi%20r%5E2" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Radio del circulo"
                                                name="radio" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="area" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="math3Show" role="tabpanel" aria-labelledby="math3">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20A%3D%5Cfrac%7B4%7D%7B3%7D%20%5Cpi%20r%5E3" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Radio de la esfera"
                                                name="radio" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="volumen" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse multi-collapse" id="phyList">
    <div class="card text-center" style="margin: 0px 10px;">
            <div class="card-header">
                <nav>
                    <div class="nav nav-tabs" role="tablist" id="nav-tab">
                        <a href="#phy1Show" class="nav-item nav-link active" id="phy1" 
                        data-toggle="tab" role="tab" aria-controls="phy1Show" aria-selected="true">Velocidad MRU</a>
                        <a href="#phy2Show" class="nav-item nav-link" id="phy2" 
                        data-toggle="tab" role="tab" aria-controls="phy2Show" aria-selected="false">Fuerza (2ª Newton)</a>
                        <a href="#phy3Show" class="nav-item nav-link" id="phy3" 
                        data-toggle="tab" role="tab" aria-controls="phy3Show" aria-selected="false">Voltaje</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">    
                    <div class="tab-pane fade show active" id="phy1Show" role="tabpanel" aria-labelledby="phy1">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20V%20%3D%20%5Cfrac%7Bd%7D%7Bt%7D" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Distancia"
                                                name="distancia" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Tiempo"
                                                name="tiempo" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="velocidad" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="phy2Show" role="tabpanel" aria-labelledby="phy2">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20F%20%3D%20ma" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Masa"
                                                name="masa" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Aceleracion"
                                                name="aceleracion" step="0.0001" required>
                                                <input type="text" name="calculo" value="fuerza" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="phy3Show" role="tabpanel" aria-labelledby="phy3">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20V%20%3D%20IR" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Intensidad"
                                                name="intensidad" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Resistencia"
                                                name="resistencia" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="voltaje" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collapse multi-collapse" id="cheList">
        <div class="card text-center" style="margin: 0px 10px;">
            <div class="card-header">
                <nav>
                    <div class="nav nav-tabs" role="tablist" id="nav-tab">
                        <a href="#che1Show" class="nav-item nav-link active" id="che1" 
                        data-toggle="tab" role="tab" aria-controls="che1Show" aria-selected="true">Presion</a>
                        <a href="#che2Show" class="nav-item nav-link" id="che2" 
                        data-toggle="tab" role="tab" aria-controls="che2Show" aria-selected="false">Densidad</a>
                        <a href="#che3Show" class="nav-item nav-link" id="che3" 
                        data-toggle="tab" role="tab" aria-controls="che3Show" aria-selected="false">Porcentaje de error</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">    
                    <div class="tab-pane fade show active" id="che1Show" role="tabpanel" aria-labelledby="che1">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20P%20%3D%20%5Cfrac%7BF%7D%7BA%7D" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Fuerza"
                                                name="fuerza" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Area"
                                                name="area" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="presion" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="che2Show" role="tabpanel" aria-labelledby="che2">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20%5Crho%20%3D%20%5Cfrac%7Bm%7D%7BV%7D" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Masa"
                                                name="masa" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Volumen"
                                                name="volumen" step="0.0001" required>
                                                <input type="text" name="calculo" value="densidad" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="che3Show" role="tabpanel" aria-labelledby="che3">
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 20px 0 0 0;">
                                    <img src="https://latex.codecogs.com/png.latex?%5CLARGE%20%25E%20%3D%20%5Cfrac%7BV_%7Bexp%7D%20-%20V_%7Bteo%7D%7D%7BV_%7Bteo%7D%7D%20%5Ctimes%20100" alt="formula" class="img-thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <form action="#" method="post">
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control" placeholder="Valor Teorico"
                                                name="teorico" min="0" step="0.0001" required>
                                                <input type="number" class="form-control" placeholder="Valor Experimental"
                                                name="experimento" min="0" step="0.0001" required>
                                                <input type="text" name="calculo" value="error" class="collapse">
                                                <div class="input-group-append">
                                                    <input type="submit" name="calcular" value="Calcular" class="btn btn-dark">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="collapse multi-collapse" id="bioList">
        a
    </div>
    <div class="collapse multi-collapse" id="geoList">
        a
    </div>
</body>
</html>