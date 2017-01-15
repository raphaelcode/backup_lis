<hr>
<div class="container-fluid">
 <div class="row-fluid" id="rodape">

      <!-- Espaço em Branco  -->
      <div class="span1"></div>

      <!-- Sobre a LIS -->
      <div class="span3">
        <br>
        <p>LIS Publicidade</p>
          <a href="servicos.php">Serviços</a><br>
          <a href="quemsomos.php">Conheça a LIS</a><br>
          <a href="idealizadores.php">Idealizadores</a><br>
        <br>
      </div>
   
    <!-- Contato -->
      <div class="span3">
        <br>
        <p>Contato</p>
        <a href="contato.php">Fale Conosco</a><br>
        <a href="serviços.php">Anuncie Conosco</a>
      </div>

        <!-- Espaço em Branco  -->
        <div class="span1"></div>

        <!-- Facebook Plugin -->
        <div class="span4">
          <div class="fb-like-box" data-href="https://www.facebook.com/lispublicidade" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>

        <div class="span1"></div>
      </div>
    </div>

  </div> <!-- final do container -->

<!-- Arquivos Javascripts
    ================================================== -->
     <script type="text/javascript">
      $(document).ready(function(){
      $('.carousel').carousel({
        interval: 2000
          });
      });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function (){
        $("[rel='tooltip']").tooltip();
      });
      $(function (){
        $("[rel='popover']").popover();
      });
    </script>

    <!-- coloquei pelo light box -->

    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui-1.8.18.custom.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/lightbox.js"></script>

    <script>
      jQuery(document).ready(function($) {
          $('a').smoothScroll({
            speed: 1000,
            easing: 'easeInOutCubic'
          });

          $('.showOlderChanges').on('click', function(e){
            $('.changelog .old').slideDown('slow');
            $(this).fadeOut();
            e.preventDefault();
          })
      });

    </script>

  </body>
</html>