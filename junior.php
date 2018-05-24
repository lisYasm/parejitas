<?php
  include("cabecera.php");
?>
<div class="right_col" role="main">
    <div class="col-lg-6">
        <?php
            
            for ($i=1; $i <=8 ; $i++) { 
                $j = 0;
                $sql="SELECT * FROM two_players WHERE tipo_juego = '1_year' ORDER BY id DESC limit 2";
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
                                            echo "Día y mes de aniversario";
                                        }
                                        if ($i==2) {
                                            echo "Mes inolvidable de su primer beso ";
                                        }
                                        if ($i==3) {
                                            echo "Día y mes de su happy";
                                        }
                                        if ($i==4) {
                                            echo "Día y mes de tu happy";
                                        }
                                        if ($i==5) {
                                            echo "Contador de veces que rompieron en su relación";
                                        }
                                        if ($i==6) {
                                            echo "Mes inolvidable de su primer TE AMO";
                                        }
                                        if ($i==7) {
                                            echo "Mes en que se conocieron";
                                        }
                                        if ($i==8) {
                                            echo "Hasta que base llegaron con tu pareja";
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
                $sql="SELECT * FROM two_players WHERE tipo_juego = '1_year' ORDER BY id DESC limit 2";
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
                                            echo "Día y mes de aniversario";
                                        }
                                        if ($i==2) {
                                            echo "Mes inolvidable de su primer beso ";
                                        }
                                        if ($i==3) {
                                            echo "Día y mes de su happy";
                                        }
                                        if ($i==4) {
                                            echo "Día y mes de tu happy";
                                        }
                                        if ($i==5) {
                                            echo "Contador de veces que rompieron en su relación";
                                        }
                                        if ($i==6) {
                                            echo "Mes inolvidable de su primer TE AMO";
                                        }
                                        if ($i==7) {
                                            echo "Mes en que se conocieron";
                                        }
                                        if ($i==8) {
                                            echo "Hasta que base llegaron con tu pareja";
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