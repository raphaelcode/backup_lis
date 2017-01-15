<?php include 'header.php' ?>
	
<style>
body {
    background-image: url(img/zanqueti/back.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
}
#conteudo{
    background-image: url(img/backsuport.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;  
}
p{
  font-style: bold;
  font-size: 18px;
}
#carimbo{
  color: #000;
  background-color: #FFF;
}

</style>


<div class="row-fluid" id="conteudo" align="center">

    <div class="span8" align="center">
      <br><br><br><br><br><br><br>
      <h2>Zanqueti Carimbos e Cópias</h2>
    </div>
      
      <div class="span4" align="center">
          <div class="fb-like-box" data-href="https://www.facebook.com/ZanquetiCarimbosECopias" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>
        
        <div class="span12" align="center">
          <img src="img/lojas/zanqueti_cover.jpg">
        </div>
      
    <div class="span12" align="center">
      <h4>
      <br>
        Passeio Juazeiro nº 109<br>
        Fone: (18) 3743-4410 / (18) 98117-8322 - Ilha Solteira - SP
    </h4>
    </div>
</div>

<div class="span12" id="conteudo">
  <hr>
</div>

<div class="row-fluid" id="conteudo">
	<div class="span12"> <!-- Inicio do Menu Lateral -->
        <h3>Precisando de que?</h3>
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tabCarimbos" data-toggle="tab"><h4 id="carimbo">Carimbos</h4></a></li>
              <li><a href="#tabServicos" data-toggle="tab"><h4 id="carimbo">Serviços</h4></a></li>
            </ul>

            <!-- Carimbos -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="tabCarimbos">
                <?php include 'tabs/zanqueti/carimbos.php' ?>
              </div>
            
            <!-- Serviços -->
              <div class="tab-pane fade" id="tabServicos">
                <?php include 'tabs/zanqueti/servicos.php' ?>
              </div>
            </div>  <!-- Fim do Conteudo -->

  		</div>
	</div>
</div>



<?php include 'footer.php' ?>