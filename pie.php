<script src="vendors/jquery/dist/jquery.min.js"></script>
<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/fastclick/lib/fastclick.js"></script>
<script src="vendors/nprogress/nprogress.js"></script>
<script src="vendors/Chart.js/dist/Chart.min.js"></script>
<script src="build/js/custom.min.js"></script>
<script>
  // Doughnut chart SICA
  <?php
    $sql1="SELECT tipo FROM one_player where tipo = 'sica' and puntaje BETWEEN 4 AND 24";
    $resultado1=mysqli_query($conexion, $sql1);
    $num1 = mysqli_num_rows($resultado1) ;

    $sql2="SELECT tipo FROM one_player where tipo = 'sica' and puntaje BETWEEN 25 AND 49";
    $resultado2=mysqli_query($conexion, $sql2);
    $num2 = mysqli_num_rows($resultado2) ;

    $sql3="SELECT tipo FROM one_player where tipo = 'sica' and puntaje BETWEEN 50 AND 74";
    $resultado3=mysqli_query($conexion, $sql3);
    $num3 = mysqli_num_rows($resultado3) ;

    $sql4="SELECT tipo FROM one_player where tipo = 'sica' and puntaje BETWEEN 75 AND 100";
    $resultado4=mysqli_query($conexion, $sql4);
    $num4 = mysqli_num_rows($resultado4) ;
  ?>
  var ctx = document.getElementById("canvasDoughnutSica");
  var val1 = <?php echo $num1; ?>;
  var val2 = <?php echo $num2; ?>;
  var val3 = <?php echo $num3; ?>;
  var val4 = <?php echo $num4; ?>;
  var data = {
    labels: [
      "4 a 24 puntos",
      "25 a 49 puntos",
      "50 a 74 puntos",
      "75 a 100 puntos"
    ],
    datasets: [{
      data: [val1, val2, val3, val4],
      backgroundColor: [
        "#455C73",
        "#9B59B6",
        "#BDC3C7", 
        "#26B99A"
      ],
      hoverBackgroundColor: [
        "#34495E",
        "#B370CF",
        "#CFD4D8",
        "#36CAAB"

      ]

    }]
  };
  var canvasDoughnut = new Chart(ctx, {
    type: 'doughnut',
    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
    data: data
  });
</script>

<script>
  // Pie chart Friendzone
  <?php
    $sql1="SELECT tipo FROM one_player where tipo = 'friendzone' and puntaje BETWEEN 4 AND 24";
    $resultado1=mysqli_query($conexion, $sql1);
    $num1 = mysqli_num_rows($resultado1) ;

    $sql2="SELECT tipo FROM one_player where tipo = 'friendzone' and puntaje BETWEEN 25 AND 49";
    $resultado2=mysqli_query($conexion, $sql2);
    $num2 = mysqli_num_rows($resultado2) ;

    $sql3="SELECT tipo FROM one_player where tipo = 'friendzone' and puntaje BETWEEN 50 AND 74";
    $resultado3=mysqli_query($conexion, $sql3);
    $num3 = mysqli_num_rows($resultado3) ;

    $sql4="SELECT tipo FROM one_player where tipo = 'friendzone' and puntaje BETWEEN 75 AND 100";
    $resultado4=mysqli_query($conexion, $sql4);
    $num4 = mysqli_num_rows($resultado4) ;
  ?>
  var ctx = document.getElementById("pieChartFriendzone");
  var val1 = <?php echo $num1; ?>;
  var val2 = <?php echo $num2; ?>;
  var val3 = <?php echo $num3; ?>;
  var val4 = <?php echo $num4; ?>;
  var data = {
    datasets: [{
      data: [val1, val2, val3, val4],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A"
          ],
          label: 'My dataset' // for legend
    }],
    labels: [
      "descripcion 1",
      "descripcion 2",
      "descripcion 3",
      "descripcion 4"
    ]
  };
  var pieChart = new Chart(ctx, {
    data: data,
    type: 'pie'
  });
</script>

<script>
  // Doughnut chart Junior
  var ctx = document.getElementById("canvasDoughnutJunior");
  var data = {
    labels: [
      "4 a 24 puntos",
      "25 a 49 puntos",
      "50 a 74 puntos",
      "75 a 100 puntos"
    ],
    datasets: [{
      data: [120, 50, 140, 180],
      backgroundColor: [
        "#455C73",
        "#9B59B6",
        "#BDC3C7",
        "#26B99A",
        "#3498DB"
      ],
      hoverBackgroundColor: [
        "#34495E",
        "#B370CF",
        "#CFD4D8",
        "#36CAAB",
        "#49A9EA"
      ]
    }]
  };
  var canvasDoughnut = new Chart(ctx, {
    type: 'doughnut',
    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
    data: data
  });
</script>

<script>
    // Pie chart Senior
  var ctx = document.getElementById("pieChartSenior");
  var data = {
    datasets: [{
      data: [120, 50, 140, 180, 100],
          backgroundColor: [
            "#455C73",
            "#9B59B6",
            "#BDC3C7",
            "#26B99A",
            "#3498DB"
          ],
          label: 'My dataset' // for legend
    }],
    labels: [
      "descripcion 1",
      "descripcion 2",
      "descripcion 3",
      "descripcion 4",
      "descripcion 5"
    ]
  };
  var pieChart = new Chart(ctx, {
    data: data,
    type: 'pie'
  });
</script>

  </body>
</html>