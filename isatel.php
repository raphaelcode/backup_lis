<?php include 'header.php' ?>
	<div id="topo" align="center">
		<h2>Isatel Telecomunicações - Representante SKY de Ilha Solteira</h2>
	<hr>
		<img src="img/lojas/pan_isatel.jpg">
		<h4>
		Passeio Niterói nº 107 - Fone: (18) 3742-2910 / (18) 3742-4925 - Centro - Ilha Solteira - SP
		</h4>
	</div>
	<hr>

	<div class="span12"> <!-- Inicio do Menu Lateral -->
        <h4>Precisando de que?</h4>
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li><a href="#tabAntenas" data-toggle="tab">Antenas</a></li>
              <li><a href="#tabCabos" data-toggle="tab">Cabos</a></li>
              <li><a href="#tabControles" data-toggle="tab">Controles</a></li>
              <li><a href="#tabPilhas" data-toggle="tab">Pilhas e Baterias</a></li>
              <li><a href="#tabProdutostv" data-toggle="tab">Produtos de TV</a></li>
              <li><a href="#tabSuportes" data-toggle="tab">Suportes de Antena</a></li>
              <li><a href="#tabTelefones" data-toggle="tab">Telefones</a></li>
              <li class="active"><a href="#tabSky" data-toggle="tab">SKY</a></li>
            </ul>

            <!-- ANTENAS -->
            <div class="tab-content">
              <div class="tab-pane fade" id="tabAntenas">
                <?php include 'tabs/isatel/antenas.php' ?>
              </div>
            
            <!-- CABOS -->
              <div class="tab-pane fade" id="tabCabos">
                <?php include 'tabs/isatel/cabos.php' ?>
              </div>

              <!-- CONTROLES -->
              <div class="tab-pane fade" id="tabControles">
                <?php include 'tabs/isatel/controles.php' ?>
              </div>

              <!-- PILHAS -->
              <div class="tab-pane fade" id="tabPilhas">
                <?php include'tabs/isatel/pilhas.php' ?>
              </div>
              
              <!-- PRODUTOS PARA TV -->
              <div class="tab-pane fade" id="tabProdutostv">
                <?php include'tabs/isatel/prodtv.php' ?>
              </div>

              <!-- SUPORTES ANTENA -->
              <div class="tab-pane fade" id="tabSuportes">
                <?php include'tabs/isatel/suporteantena.php' ?>
              </div>

              <!-- TELEFONES -->
              <div class="tab-pane fade" id="tabTelefones">
                <?php include'tabs/isatel/telefones.php' ?>
              </div>

              <!-- SKY -->
              <div class="tab-pane fade in active" id="tabSky">
                <?php include 'tabs/isatel/sky.php' ?>
              </div>

          </div><!--fim das abas-->

          

    </div>  <!-- Fim do Conteudo -->

  		</div>
	</div>
</div>



<?php include 'footer.php' ?>