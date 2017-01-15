<?php include 'header.php' ?>
<div class="row">

  <div class="span10">
          <div class="accordion" id="accordion2">
          
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#ar">
                  Ar-Condicionado
                </a>
              </div>
              <div id="ar" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/ar.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->

          <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#eletricista">
                  Eletricista
                </a>
              </div>
              <div id="eletricista" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/eletricista.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->

          <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#encanador">
                  Encanador
                </a>
              </div>
              <div id="encanador" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/encanador.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->

           <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#pedreiro">
                  Pedreiro
                </a>
              </div>
              <div id="pedreiro" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/pedreiro.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->

           <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#pintor">
                  Pintor
                </a>
              </div>
              <div id="pintor" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/pintor.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->
           
          <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" 
                data-parent="#accordion2" href="#outros">
                  Outros
                </a>
              </div>
              <div id="outros" class="accordion-body collapse">
                <div class="accordion-inner">
                  <div class="tabbable tabs-left">

                  <?php include 'tabs/sg/outros.php' ?>

                </div>
              </div> <!-- fim do accordion inner-->
            </div> <!-- final do grupo do faq -->
          </div> <!-- fim do accordion group-->

    </div> <!-- fim do span10 -->
</div>
    <div class="span2">
      <?php include 'menuLateral.php' ?>
    </div>

</div> <!-- fim da linha -->


<?php include 'footer.php' ?>