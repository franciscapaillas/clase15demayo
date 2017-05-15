<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>

<h3>Rangos</h3>
<p>Estos son los rangos de la facultad y sus docentes</p>
<img src="images/rangos.png" class="img-responsive">

<br>
<br>


<p>Pertenecientes al departamento de diseño y a la escuela de pregrado unificada</p>
<img src="images/clasificacion.png" class="img-responsive">

<br>
<br>

<h3>Horas </h3>
<p>Estas son las horas contratadas </p>
<img src="images/horas.png" class="img-responsive">

<
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
