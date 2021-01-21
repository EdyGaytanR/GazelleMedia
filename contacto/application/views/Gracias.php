<!doctype html>
<html lang="es" style="height: 700px;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="agencia de medios, full media, marketing 360, marketing digital, Publicidad, marketing online, marketing digital online, agencia medios, agencia de medios publicitarios, agencia de medios de comunicación, Gazelle Media, Gazelle Media & Marketing, Gazelle">
    <link rel="icon" type="image/png" href="imagenes/fav.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/estilo.css"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/../css/estilo.css'; ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title>GAZELLE | MEDIA & MARKETING</title>
  </head>
  <body style="height: 700px">
    <div id="cont-gral" style="height: 700px; background-position: bottom;">
      <div id="cabeza">
        <div class="container-fluid">
          <div class="row py-3">
            <div class="col-md-12 text-center">
                <img src="<?php echo base_url().'assets/../imagenes/logotipo-gazelle.png'; ?>" class="img-fluid img-logo">
            </div>
          </div>
        </div><!-- container -->
      </div><!-- Cabeza -->
      <div class="container" style="height: 500px;">
        <div class="row py-5 align-items-center text-center">
          <div class="col-md-12 mx-auto">
            <h3 style="color: #1d1d1d; padding-top: 10%;">Muchas gracias por registrarte, <br/> en breve nos comunicaremos contigo</h3>
          </div>
        </div>
      </div><!-- Cuerpo -->
      <div id="pie">
        <div class="container-fluid">
          <div class="row py-2">
            <div class="col-md-12 text-center">
              Todos los derechos reservados Gazelle 2010 Consulta nuestro <a href="#" data-toggle="modal" data-target="#aviso-privacidad" class="enlace-negro">AVISO DE PRIVACIDAD</a>
            </div>
          </div>
        </div>
      </div><!-- pie -->
    </div><!-- Cont gral Gazelle -->


    <!-- Modal -->
<div class="modal fade" id="aviso-privacidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AVISO DE PRIVACIDAD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Aviso de privacidad</h5>
        <p class="text-justify">
        	El presente aviso de privacidad se establece en cumplimiento de lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.<br><br>
			<strong>GAZELLE SERVICIOS DE MARKETING Y PUBLICIDAD SA DE CV</strong>, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos.<br><br>
			Para las finalidades señaladas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas: cuando usted nos los proporciona directamente; cuando visita nuestro sitio de Internet o utiliza nuestros servicios en línea, y cuando obtenemos información a través de otras fuentes que están permitidas por la ley. Recabamos sus datos personales de forma directa cuando usted mismo nos los proporciona por diversos medios, como cuando nos contacta o nos da información con objeto de que le prestemos un servicio. Los datos que obtenemos por este medio pueden ser, entre otros: Su nombre, correo electrónico (email), país y ciudad, páginas visitadas dentro de nuestro sitio, información para mejorar su experiencia en nuestro sitio como resolución de pantalla, explorador y tipo de sistema operativo utilizado. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<a id="redi" href="https://gazellemedia.mx/" hidden></a>
<?php if (isset($redirect)) {
                    if ($redirect != '') {?>
                    <script>
                    let red = document.getElementById('redi');
                    setTimeout(() => {
                      if (red) {
                        red.click();
                      }
                    }, 5000);
                    </script>
                        <?php }
                } ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>