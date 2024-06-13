<?php
    //require_once('conectar.php');
    //include 'header/nav/conectar.php';
    $conexion = d();
    $NOMBRE_ID = $_SESSION['nombre'];
    $sql = "SELECT * FROM USUARIOS WHERE NOMBRE='$NOMBRE_ID'";
    $res=mysqli_query($conexion, $sql);
    $nf=mysqli_num_rows($res);//numero de filas que tiene
    if($nf==1){
        $fila= mysqli_fetch_array($res);
        $ALARMAS_SQL = $fila['ALARMAS'];
        $ALARMAS_HISTORICO_SQL = $fila['ALARMAS_HISTORICO'];
        $CARGAS_SQL = $fila['CARGAS'];
        $CARGAS_HISTORICO_SQL = $fila['CARGAS_HISTORICO'];
        $ETIQUETAS_SQL = $fila['ETIQUETAS'];
        $METALES_SQL = $fila['METALES'];
        $PRODUCTIVIDAD_SQL = $fila['PRODUCTIVIDAD'];
        $PLANIFICACION_SQL = $fila['PLANIFICACION'];
        $USUARIOS_SQL = $fila['USUARIOS'];
    }
?>
<header class="navbar navbar-inverse">
    <div class="container-fluid bg-warning" id="user_noregistrado" style="width: 100%;">
        <div class="navbar-header" style="width: 12%;">
            <div id="logo" class="col-12" style="">
                <!--<a href="../../index.php">-->
			<img src="../../multimedia/logo_spain.jpg" class="img-fluid">
		<!--</a>-->
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 88%;">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height:58px;">
                <ul class="nav navbar-nav navbar-left">
                    <?php
                        if ($PLANIFICACION_SQL==1){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="../../index.php">Planificación</a>
                        </li>
                    <?php
                        }
                    ?>
                    <?php
                        if ($PRODUCTIVIDAD_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link  text-center" href="../../Productividad/index.php">Productividad</a>
                    </li>
                    <?php
                        }
                    ?>
                    <?php
                        if ($METALES_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link  text-center" href="../../Metales/index.php">Metales</a>
                    </li>
                    <?php
                        }
                        if ($USUARIOS_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link  text-center" href="../../Layouts/editarusuario.php">Usuarios</a>
                    </li>
                    <?php
                        }
                        if ($ALARMAS_SQL==1){
                    ?>
                    <!--<li class="nav-item">
                        <a class="nav-link  text-center" href="../editarusuario.php">Usuarios</a>
                    </li>-->
                   
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../../Alarmas/index.php">Alarmas</a>
                    </li>
                    <?php
                        }
                    ?>
                    <?php
                        if ($ALARMAS_HISTORICO_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../../Alarmashistorico/index.php">Histórico Alarmas</a>
                    </li>
                    <?php
                        }
                    ?>
                    <?php
                        if ($CARGAS_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../../Cargas/index.php">Cargas</a>
                    </li>
                    <?php
                        }
                        if ($CARGAS_HISTORICO_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../../Cargas/historial_cargas.php">Histórico Cargas</a>
                    </li>
                    <?php
                        }
                        if ($ETIQUETAS_SQL==1){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../../Etiquetas/index.php">Etiquetas</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
                <ul class="nav navbar-nav push" style="margin-left:auto;margin-right:3%">
                    <li class="nav-item">
                        <a class="nav-link text-center" style="height:auto;" href="../header/cerrarsesion.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>