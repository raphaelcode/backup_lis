<?php include 'header.php' ?>
<link href="css/teste.css" rel="stylesheet">
	<div id="topo" align="center">
		<h2>Studio Daniela Righetto</h2>
	<hr>
	 <img src="img/lojas/studio_dani_cover.jpg">
		<h4>
		Rua 7 de Setembro nº 523 - Fone: (18) 3742-1393 - Jardim Aeroporto - Ilha Solteira - SP
		</h4>
	</div>

<hr>

	<div class="span12"> <!-- Inicio do Menu Lateral -->
        <h4>Meus Trabalhos</h4>
          <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tabantesedepois" data-toggle="tab">Antes e Depois</a></li>
            </ul>

            <div class="tab-content">
            <!-- ANTES E DEPOIS -->
              <div class="tab-pane fade in active" id="tabantesedepois">
                <?php include 'tabs/studioDani/antesedepois.php' ?>
              </div>

          </div><!--fim das abas-->
          

    </div>  <!-- Fim do Conteudo -->

  		</div>
	</div> <!-- Fim do menu Lateral -->

<?php include 'footer.php' ?>