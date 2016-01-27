<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8" />
	<title>Agencia Digital PI | dise&ntilde;o web paraguay | diseño gr&aacute;fico paraguay | social media paraguay | marketing y publicidad paraguay | community manager paraguay | v&iacute;deo y fotograf&iacute;a paraguay | aplicaciones m&oacute;viles paraguay | asunci&oacute;n, paraguay |</title>
	<meta name="description" content="En esta secci&oacute; podr&aacute;s ponerte en contacto con nosotros" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="stylesheet" href="css/estilos.css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<! endif -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69624167-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	<header>
		<h1>
			<a href="index.html">
				<img class="fade" alt="Agencia Digital PI | Infinitas ideas, infinitas soluciones" src="img/agenciadigitalpi.png" />
			</a>
		</h1>
	</header>
	<header>
		<nav>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="sobrepi.html">Sobre PI</a></li>
				<li><a href="quehacemos.html">Qu&eacute; hacemos?</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				<li><a href="clientes.html">Clientes</a></li>
<li><a href="http://agenciadigitalpi.com/soporte" target="_blank">Soporte</a></li>
				<li><a href="contacto.php">Contacto</a></li>

			</ul>
		</nav>
	</header>
	<section id="contenido">
		<section id="contacto">
			<h2>Cont&aacute;ctanos</h2>
			<article id="info-contacto">
				<p>
					Email:
					<span class="datos-contacto">3.14@agenciadigitalpi.com</span>
					<br />
					M&oacute;vil:
					<span class="datos-contacto">+595971787787</span>
					<br />
					Web:
					<span class="datos-contacto">www.agenciadigitalpi.com</span>
					<br />
					Direcci&oacute;n:
					<span class="datos-contacto">Paraguari 813</span>
					<br />
					Social Media
					<br />
					<span class="datos-contacto">
						<a class="fade" href="http://facebook.com/AgenciaDigitalPI" title="Facebook" target="_blank"><img src="img/facebook-logo.png" /></a>
						&nbsp;&nbsp;&nbsp;
						<a class="fade" href="http://twitter.com/adigitalpi" title="Twitter" target="_blank"><img src="img/twitter-logo.png" /></a>
						&nbsp;&nbsp;&nbsp;
						<a class="fade" href="https://plus.google.com/u/0/b/118056972476788456949/" title="Google +" target="_blank"><img src="img/google-plus-logo.png" /></a>
						&nbsp;&nbsp;&nbsp;
						<a class="fade" href="http://youtube.com/AgenciaDigitalPI" title="Youtube" target="_blank"><img src="img/youtube-logo.png" /></a>
						&nbsp;&nbsp;&nbsp;
					</span>
				</p>
			</article>
			<article id="contactanos">
				<form method="post" action="contacto.php">
					<fieldset>
						<legend>Env&iacute;anos un mensaje</legend>
						<div>
							<label for="nombre">Nombre:</label>
							<input type="text" id="nombre" class="fade" name="nombre" required />
						</div>
						<div>
							<label for="email">Email:</label>
							<input type="email" id="email" class="fade" name="email" required />
						</div>
						<!--<div>
							<label for="asunto">Asunto:</label>
							<input type="text" id="asunto" class="fade" name="asunto_txt" required />
						</div>-->
						<div>
							<label for="comentarios">Mensaje:</label>
							<textarea id="comentarios" class="fade" name="mensaje" cols="31" rows="5" required></textarea>
						</div>
						<div>
							<input type="submit" id="enviar" class="fade" name="enviar_btn" value="Enviar" />
						</div>
<div>
<? 

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$mensaje = addslashes($_POST['mensaje']);

$cabeceras = "From: $email\n" 
 . "Reply-To: $email\n";
$asunto = "Mensaje enviado desde PI"; 
$email_to = "3.14@agenciadigitalpi.com"; 
$contenido = "$nombre ha enviado un mensaje desde www.agenciadigitalpi.com\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"

. "Mensaje: $mensaje\n"
. "\n";

if (empty($_POST['nombre'])) {
  echo("");
} else {

if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
echo"<center>";
echo("Gracias, su mensaje se envió correctamente.");
}else{
 
die("Error: Su información no pudo ser enviada, intente más tarde"); echo "</center>";
} }
?>
</div>
					</fieldset>
				</form>
			</article>
		</section>
		<section id="mapa">
			<iframe width="500" height="535" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.py/maps/ms?msa=0&amp;msid=204484444150201383389.0004f0a80f0fe219617f1&amp;ie=UTF8&amp;t=m&amp;ll=-25.288721,-57.632539&amp;spn=0.000849,0.002521&amp;z=19&amp;output=embed"></iframe>
			<br />
			<small>Ver <a href="https://maps.google.com.py/maps/ms?msa=0&amp;msid=204484444150201383389.0004f0a80f0fe219617f1&amp;ie=UTF8&amp;t=m&amp;ll=-25.288721,-57.632539&amp;spn=0.000849,0.002521&amp;z=19&amp;source=embed" style="color:#FFF;text-align:left" target="_blank">Agencia Digital PI</a> en un mapa ampliado</small>
		</section>
	</section>
	<footer>
		<article>
    		Redes | <a rel="author" href="http://facebook.com/AgenciaDigitalPI" target="_blank">Facebook</a> |
    		<a rel="author" href="http://twitter.com/adigitalpi" target="_blank">Twitter</a>
		</article>
		<article>
    		Partners | <a rel="author" href="http://rpygroup.com" target="_blank">RpyGroup</a> |
    		<a rel="author" href="http://rodrigorodas.com" target="_blank">Rodrigo Rodas</a>
		</article>
		<article>
    		Informaci&oacute;n | <a rel="author" href="http://www.agenciadigitalpi.com/terminos.html" target="_blank">Términos y Condiciones</a> |
    		<a rel="author" href="http://www.agenciadigitalpi.com/archivos/planes.pdf" target="_blank">Planes</a>
		</article>
		Diseño original desarrollado por Agencia Digital PI ®. Todos los derechos reservados.
	</footer>
</body>
</html>