<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>




<h3>Colegios</h3>
<p>Diversidad de establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile Datos totales desde el año 2009 al 2015</p>
<img src="images/tiposdecolegio.png" class="img-responsive">

<br>
<br>


<h3>Genero</h3>
<p>Clasificacion por genero de estudiantes que ingresan al primer año de la carrera de Diseño de la Universidad de Chile (2009-2015)</p>

<img src="images/genero.png" class="img-responsive">


<br>
<br>


</section>
<footer>
<p>Mayo de 2017 &bull; Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.</p>
</footer>
</div><!--/col-sm-10 col-sm-offset-1-->
</div><!--/row-->
</div><!--/container-->
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
