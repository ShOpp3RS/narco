<?php
 
$conexion = mysqli_connect("localhost", "root", "", "modulo");
$sql = "SELECT * FROM datos";
          $result = mysqli_query($conexion,$sql);
          $registros = mysqli_fetch_all($result);
            
          
?>

<!DOCTYPE html>
<html lang="es">
<head>  
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js" ></script>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">


    <Script type = "text / javascript">
     google.charts.load ( 'actuales', {paquetes: [ 'corechart']});     
   </Script>

	<title>Estacion Meteorologica</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<header>
	
</header>
<main>
<section class="jumbotron">
	<div class="container">
		<h1 class="titulo-blog">Estacion Meteorologica</h1>
		<p>Grafico de Tº y Humedad</p>
		
	</div>
</section>
<section class="main container">
	<div class="row">
		<section class="posts col-md-12">
		
			<article class="post clearfix"></article>

			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawTrendlines);

function drawTrendlines() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'x');
      data.addColumn('number', 'humedad');
      data.addColumn('number', 'temperatura');
      
      data.addRows([
        <?php
        foreach ($registros as $key => $value){

      echo "[".$value[2].",".$value[3].",1],";

        }
        ?>
      ]);

      var options = {
        hAxis: {
          title: 'tiempo'
        },
        vAxis: {
          title: 'datos'
        },
        colors: ['#AB0D06', '#007329'],
        trendlines: {
          0: {type: 'exponential', color: '#333', opacity: 1},
          1: {type: 'linear', color: '#111', opacity: .3}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>

    <div class="container">
    	     <div class="table-responsive">
      <div id="chart_div"></div>
             </div>
    </div>
		</section>
	</div>
</section>
  </main>
<footer>
	
</footer>


</body>
</html>
