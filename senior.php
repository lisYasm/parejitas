<?php
  include("cabecera.php");
?>
<div class="right_col" role="main">
    <div class="col-lg-6">
        <?php
            
            for ($i=1; $i <=8 ; $i++) { 
                $j = 0;
                $sql="SELECT * FROM two_players WHERE tipo_juego = '3_year' ORDER BY id DESC limit 2";
                $resultado=mysqli_query($conexion, $sql);
                while ($consulta = mysqli_fetch_array($resultado)) {
                    $j=$j+1;
                    $var = $j%2;
                    if ($var==0) {
        ?>
                        <div class="">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    Pregunta <?php echo $i;?> - 
                                    <?php
                                        if ($i==1) {
                                            echo "Situación el la que conociste a sus padres";
                                        }
                                        if ($i==2) {
                                            echo "Cual es su plato favorito ";
                                        }
                                        if ($i==3) {
                                            echo "Cual es su estatura";
                                        }
                                        if ($i==4) {
                                            echo "Que es lo mejor de tu pareja";
                                        }
                                        if ($i==5) {
                                            echo "Hasta que base llegaron con tu pareja";
                                        }
                                        if ($i==6) {
                                            echo "Cuantas veces tienen relaciones sexuales al mes";
                                        }
                                        if ($i==7) {
                                            echo "Cual es su posición favorita";
                                        }
                                        if ($i==8) {
                                            echo "Lo mas pervertido que hiciste fue con tu pareja actual";
                                        }
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <p align="center">
                                        <?php  echo $consulta[$i+1];?>
                                    </p>
                                </div>
                            </div>
            </div>
        <?php
                    }
                }
            }
        ?>       
    </div>
    <div class="col-lg-6">
        <?php
            
            for ($i=1; $i <=8 ; $i++) { 
                $j = 0;
                $sql="SELECT * FROM two_players WHERE tipo_juego = '3_year' ORDER BY id DESC limit 2";
                $resultado=mysqli_query($conexion, $sql);
                while ($consulta = mysqli_fetch_array($resultado)) {
                    $j=$j+1;
                    $var = $j%2;
                    if ($var==1) {
        ?>
                        <div class="">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Pregunta <?php echo $i;?> - 
                                    <?php
                                        if ($i==1) {
                                            echo "Situación el la que conociste a sus padres";
                                        }
                                        if ($i==2) {
                                            echo "Cual es su plato favorito ";
                                        }
                                        if ($i==3) {
                                            echo "Cual es su estatura";
                                        }
                                        if ($i==4) {
                                            echo "Que es lo mejor de tu pareja";
                                        }
                                        if ($i==5) {
                                            echo "Hasta que base llegaron con tu pareja";
                                        }
                                        if ($i==6) {
                                            echo "Cuantas veces tienen relaciones sexuales al mes";
                                        }
                                        if ($i==7) {
                                            echo "Cual es su posición favorita";
                                        }
                                        if ($i==8) {
                                            echo "Lo mas pervertido que hiciste fue con tu pareja actual?";
                                        }
                                    ?>
                                </div>
                                <div class="panel-body">
                                    <p align="center">
                                        <?php  echo $consulta[$i+1];?>
                                    </p>
                                </div>
                            </div>
            </div>
        <?php
                    }
                }
            }
        ?>       
    </div>
</div>
    
    


<?php  
  include("pie.php");
?>