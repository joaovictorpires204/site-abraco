<!------------------ START HTML ------------------>
<!DOCTYPE html>

<!------------------ START LANGUAGE  ------------------>
<html lang="pt">
<!------------------ END LANGUAGE  ------------------>

<!------------------ START HEAD  ------------------>

<head>

  <!------------------ START META  ------------------>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="A melhor associação de proteção veícular do Brasil!" />
  <meta name="author" content="Stevan Jackson" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <!------------------ END META  ------------------>

  <!------------------ START TITLE  ------------------>
  <title>Abraço Clube de Benefícios</title>
  <!------------------ END TITLE  ------------------>

  <!------------------ START FAVICON  ------------------>
  <link rel="shortcut icon" href="images/favicon.ico" />
  <!------------------ END FAVICON  ------------------>

  <!------------------ START BOOTSTRAP  ------------------>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <!------------------ END BOOTSTRAP  ------------------>

  <!------------------ START FLATICON  ------------------>
  <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
  <!------------------ END FLATICON  ------------------>

  <!------------------ START MEGA MENU  ------------------>
  <link rel="stylesheet" type="text/css" href="css/mega-menu/mega_menu.css" />
  <!------------------ END MEGA MENU  ------------------>

  <!------------------ START MEGA MENU  ------------------>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!------------------ START FONTAWESOME  ------------------>
  <link href="./fonts/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet" type="text/css">
  <link href="./fonts/fontawesome-free-5.15.1-web/css/brands.css" rel="stylesheet" type="text/css">
  <link href="./fonts/fontawesome-free-5.15.1-web/css/solid.css" rel="stylesheet" type="text/css">
  <!------------------ END FONTAWESOME  ------------------>
  <!------------------ END MEGA MENU  ------------------>

  <!------------------ START OWL-CAROUSEL  ------------------>
  <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.css" />
  <!------------------ END OWL-CAROUSEL  ------------------>

  <!------------------ START MAGNIFIC-POPUP  ------------------>
  <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css" />
  <!------------------ END MAGNIFIC-POPUP  ------------------>

  <!------------------ START JQUERY-UI  ------------------>
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
  <!------------------ END JQUERY-UI  ------------------>

  <!------------------ START REVOLUTION  ------------------>
  <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
  <!------------------ END REVOLUTION  ------------------>

  <!------------------ START MAIN STYLE  ------------------>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!------------------ END MAIN STYLE  ------------------>

  <!------------------ START RESPONSIVE  ------------------>
  <link rel="stylesheet" type="text/css" href="css/responsive.css" />
  <!------------------ END RESPONSIVE  ------------------>

      <!------------------ START FONTAWESOME  ------------------>
      <link href="./fonts/fontawesome-free-5.15.1-web/css/fontawesome.css" rel="stylesheet">
      <link href="./fonts/fontawesome-free-5.15.1-web/css/brands.css" rel="stylesheet">
      <link href="./fonts/fontawesome-free-5.15.1-web/css/solid.css" rel="stylesheet">
      <!------------------ END FONTAWESOME  ------------------>

      

        <!------------------ START GOOGLE ANALYTICS  ------------------>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143961234-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143961234-1');
      </script>
  <!------------------ END GOOGLE ANALYTICS  ------------------>

    <!------------------ START CHAT ONLINE  ------------------>
  <script src="//code.jivosite.com/widget/OUga4KZ4sG" async></script>
<!------------------ END CHAT ONLINE  ------------------>

  <!--------------------------- START OPEN NEW FILE ---------------------->
  <script>
    const element = document.querySelectorAll('a')
    element.forEach(function (el) {
      el.addEventListener('click', function () {
        var url = event.target.href; // pega o href de qualquer "a" clicado
        var guia = window.open(url, '_blank'); // abre em nova guia
        console.log("Abre: " + url + " em nova guia.");
      });
    });
  </script>
  <!--------------------------- END OPEN NEW FILE ---------------------->

  <script type="text/javascript" src="./js/jquery.js"></script>
<!----------------------------- ( DIVISION OF CONTENT  )------------------------------------------->
<script type="text/javascript" src="./js/jquery.maskedinput.js"></script>
<!----------------------------- ( DIVISION OF CONTENT  )------------------------------------------->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
 crossorigin="" />
  
    

</head>
<!------------------ END HEAD  ------------------>


<!--============================== (    SCRIPT      )===========================================-->
<script>
	jQuery(function ($) {
		$("#telefone").mask("(99) 9999-9999");
		$("#celularDiecast").mask("(99) 99999-9999");
		$("#cpfIndicador").mask("999.999.999-99");
	});
</script>
<!--============================== (  END SCRIPT    )===========================================-->




<!------------------ START BODY ------------------>

<body>
  

  <!------------------ START LOADER ------------------>
  <div id="loading">
    <div id="loading-center">
      <img src="images/loader3.gif" alt="">
    </div>
  </div>
  <!------------------ END LOADER ------------------>

  <!------------------ START TOP BAR ------------------>
  <header id="header" class="topbar-dark">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <!------------------ START OPENING HOURS ------------------>
          <div class="col-lg-6 col-md-12">
            <div class="topbar-left text-lg-left text-center">
              <ul class="list-inline">
                <!--  <li> <a href="#"></a><i class="fa fa-comment-o"> </i> Chat Online</li> </a> -->
                <li> <i class="fa fa-phone"></i> Assistência 24 horas<a href="tel:08007707766"> 0800 770 7766 </li> |</a>
                    <li> <i class="fa fa-clock-o"></i> Seg - Sex 8:00 - 17:30 </li>
              </ul>
            </div>
          </div>
          <!------------------ END OPENING HOURS ------------------>


          <div class="col-lg-6 col-md-12">
            <div class="topbar-right text-lg-right text-center">
              <ul class="list-inline">

                <!------------------ START SAA ------------------>
                <li> <i class="fa fa-phone"></i> (SAA) Serviço Atendimento ao Associado<a href="tel:3133321186"> (31) 3332-1186 </li> |</a>
                    
                <!------------------ END SAA ------------------>

                <!------------------ START SOCIAL ------------------>
                <li><a href="https://www.facebook.com/clubeabraco/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/clubeabraco/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCu1gcm0g68CCzxe5-h49ZZA" target="_blank"><i
                      class="fab fa-youtube"></i></a></li>
                <!------------------ END SOCIAL ------------------>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------------------ END TOP BAR ------------------>


    <!------------------ START MEGA MENU ------------------>
    <div class="menu">

      <!------------------ START MENU ------------------>
      <nav id="menu" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
          <div class="container">
            <div class="row">
              <div class="col-md-12">

                <!------------------ START MENU LOGO ------------------>
                <ul class="menu-logo">
                  <li>
                    <a href="index.php"><img id="logo_img" src="images/logoAbraco.png" alt="logo"> </a>
                  </li>
                </ul>
                <!------------------ END MENU LOGO ------------------>

                <!------------------ START MENU LINKS ------------------>
                <ul class="menu-links">

                  <!------------------ START MENU HOME ------------------>
                  <li class="active"><a href="index.php"> Home </i></a>
                  </li>
                  <!------------------ END MENU HOME ------------------>

                  <!------------------ START MENU O CLUBE ------------------>
                  <li ><a href="javascript:void(0)">O Clube <i
                        class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    <li><a href="certificados.php">Certificados</a></li>
                      <li><a href="fgrs.php">FGRS - Fundo Garantidor</a></li>
                      <li><a href="aaapv.php">Filiados AAAPV</a></li>
                      <li><a href="quemSomos.php">Quem Somos</a></li>
                    </ul>
                  </li>
                  <!------------------ END MENU O CLUBE ------------------>

                  <!------------------ START MENU BENEFICIOS ------------------>
                  <li><a href="javascript:void(0)">Benefícios <i class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    <li><a href="assistencia.php">Assistência </a></li>
                    <li><a href="beneficios.php">Benefícios</a></li>
                      <li><a href="coberturas.php">Cobertura</a></li>
                      <li><a href="opcionais.php">Opcionais</a></li>
                    </ul>
                  </li>
                  <!------------------ END MENU BENEFICIOS ------------------>

                  <!------------------ START MENU COTAÇÃO ------------------>
                  <li><a href="javascript:void(0)">Cotação Online <i class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                      <li><a href="cotacaoOnline.php"> Cotar Agora </a> </li>
                    </ul>
                  </li>
                  <!------------------ END MENU COTAÇÃO ------------------>

                  <!------------------ START MENU BLOG ------------------>
                  <!--
                  <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
       
                    <ul class="drop-down-multilevel">
                      <li><a href="blog.php"> Conteudo </a> </li>
                    </ul>
                  </li>
                -->

                  <!------------------ START MENU CONTATO ------------------>
                  <li><a href="javascript:void(0)"> Associado <i class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    <li><a href="loginAssociado.php">Área do Associado</a></li>
                      <li><a href="eventos.php">Eventos</a></li>
                      <li><a href="loginRastreamento.php">Rastreamento</a></li>
                      <li><a href="ouvidoria.php">Ouvidoria</a></li>
                      <li><a href="./downloads/regulamento.pdf">Regulamento Associado</a></li>
                      <li><a href="noticias.php">Últimas Notícias</a></li>
                      <!-- <li><a href="faq.php">Perguntas Frequentes</a></li> -->
                      <!------------------ END MENU CONTATO ------------------>
                    </ul>

                  <!------------------ START MENU INTRANET ------------------>
                  <li><a href="javascript:void(0)"> Aplicativos <i class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    <li><a href="https://play.google.com/store/apps/details?id=br.com.evogerencial.app.abraco">Play Store</a></li>
                      <li><a href="https://apps.apple.com/br/app/abra%C3%A7o-clube-de-benef%C3%ADcios/id1549877621">Apple Store</a></li>
                    </ul>
                  </li>
                  <!------------------ END MENU INTRANET ------------------>

                    <!------------------ START MENU INTRANET ------------------>
                  <li><a href="javascript:void(0)"> Intranet <i class="fa fa-angle-down fa-indicator"></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    <li><a href="http://evogerencial.com.br/assistBtx/client/globalX/">Assist Messenger</a></li>
                      <li><a href="http://portalant.com.br/325@a87-h2g/">Consultor</a></li>
                      <li><a href="https://www.ensineonline.com.br/professor/login/index.php">UCCA - Univeridade
                          Abraço</a></li>
                    </ul>
                  </li>
                  <!------------------ END MENU INTRANET ------------------>

                    <!------------------ START MENU INTRANET ------------------>
                                      <li><a href="javascript:void(0)">  <i class=""></i></a>
                    <!-- drop down multilevel  -->
                    <ul class="drop-down-multilevel">
                    </ul>
                  </li>
                  <!------------------ END MENU INTRANET ------------------>

                  <!------------------ END MENU LINKS ------------------>
              </div>
            </div>
          </div>
        </section>
      </nav>
      <!------------------ END MENU ------------------>

    </div>
    <!------------------ END MEGA MENU ------------------>

  </header>
  <!------------------ END HEADER ------------------>


<!--=================================
 service -->




 <!--=================================
 service-center -->

<section class="service-center white-bg page-section-ptb">
 <div class="container">

 <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span>Evento em São Paulo 2023</span>
         <h2>Salão Diecast </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>


   <div class="row">
     <div class="col-md-6">
        <h5 style="text-align: center;">Formulário para captação de leed e entrega de brindes.</h5>          
        <br><br>
      <div class="gray-form">
         <div id="formmessage">Success/Error Message Goes Here</div>
          

           <form class="form-horizontal" action="./eventos/contact/processa.php" method="post">
            
            <div class="contact-form row">
              

              <div class="col-lg-12 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="Nome Completo" class="form-control" name="nomeDiecast" id="nomeDiecast">
                </div>
              </div>

              <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                 <input id="emailDiecast" type="email" placeholder="E-mail" class="form-control"  name="emailDiecast">
               </div> 
             </div> 

             <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="Celular" class="form-control" name="celularDiecast" id="celularDiecast">
                </div>
              </div>

             <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <select class="form-control" name="estadoDiecast" id="estadoDiecast">
                    <option value="">Selecionar Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-6 col-sm-12">
               <div class="form-group">
                 <input id="cidadeDiecast" type="text" placeholder="Cidade" class="form-control"  name="cidadeDiecast">
               </div> 
             </div>

              <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <select class="form-control" name="veiculo" id="veiculo">
                    <option value="">Possui Veículo?</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>



              <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <select class="form-control" name="seguro" id="seguro">
                    <option value="">Possui Seguro?</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-12 col-sm-12">
                <div class="form-group">
                  <select class="form-control" name="seguroCelular" id="seguroCelular">
                    <option value="">Possui Seguro para Celular?</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                  </select>
                </div>
              </div>

             <div class="col-lg-12 col-sm-12">
               <div class="form-group">
                 <textarea id="obsDiecast" name="obsDiecast" class="form-control required" rows="5" placeholder="Em poucas palavras escreva uma observação..."></textarea>
               </div> 
             </div> 

              <div class="col-md-12"><br>
              <input class="input100" type="hidden" type="text" name="data" id="data"> 
                 <button class="button red"> Cadastrar</button>
               </div>
              </div>

          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
       </div>

        <br><br>

    </div>
    <div class="col-md-6">
      <img class="img-fluid center-block" src="images/diecast2022.png" alt="">
    </div>
   </div>
  </div>
</section>


<!--=================================
service schedule -->
 
 

  <!------------------ START BACK TO TOP ------------------>
  <div class="car-top">
    <span><img src="images/car.png" alt=""></span>
  </div>
  <!------------------ END BACK TO TOP ------------------>


  <!------------------ START SCRIPT ------------------>

  <!------------------ START JQUERY ------------------>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!------------------ START END ------------------>

  <!------------------ START BOOTSTRAP ------------------>
  <script type="text/javascript" src="js/popper.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!------------------ END BOOTSTRAP ------------------>

  <!------------------ START MEGA MENU ------------------>
  <script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>
   <!------------------ START END ------------------>

 <!------------------ START APPEER ------------------>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
 <!------------------ END APPEER ------------------>

  <!------------------ START COUNTER ------------------>
  <script type="text/javascript" src="js/counter/jquery.countTo.js"></script>
    <!------------------ END COUNTER ------------------>

  <!------------------ START ISOTOPE ------------------>
  <script type="text/javascript" src="js/isotope/isotope.pkgd.min.js"></script>
    <!------------------ END ISOTOPE ------------------>

  <!------------------ START OWL CAROUSEL ------------------>
  <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
  <!------------------ END OWL CAROUSEL ------------------>

  <!------------------ START MAGNIFIC POPUP ------------------>
  <script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!------------------ END MAGNIFIC POPUP ------------------>

  <!------------------ START JQUERY-UI ------------------>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
  <!------------------ END JQUERY-UI ------------------>

   <!------------------ START SELECT ------------------>
  <script type="text/javascript" src="js/select/jquery-select.js"></script>
<!------------------ END SELECT ------------------>

<!------------------ START REVOLUTION ------------------>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!------------------ END REVOLUTION ------------------>

  <!------------------ START CUSTOM ------------------>
  <script type="text/javascript" src="js/custom.js"></script>
  <!------------------ END CUSTOM ------------------>

<!------------------ START JAVA ------------------>
  <script type="text/javascript">
    var tpj = jQuery;

    var revapi6;
    tpj(document).ready(function () {
      if (tpj("#rev_slider_6_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_6_1");
      } else {
        revapi6 = tpj("#rev_slider_6_1").show().revolution({
          sliderType: "standard",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            arrows: {
              style: "hesperiden",
              enable: true,
              hide_onmobile: false,
              hide_onleave: false,
              tmp: '',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              }
            }
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1270, 1024, 778, 480],
          gridheight: [450, 450, 500, 500],
          lazyType: "none",
          shadow: 0,
          spinner: "spinner0",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    }); /*ready*/
  </script>
<!------------------ END JAVA ------------------>

<!------------------ START DATA ------------------>
<script language="JavaScript" type="text/javascript">
  var today = new Date();
  var dy = today.getDate();
  var mt = today.getMonth() + 1;
  var yr = today.getFullYear();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  document.getElementById('data').value = dy + "/" + mt + "/" + yr + " " + h + ":" + m + ":" + s;
  setTimeout('time()', 500);
</script>
  <!------------------ END DATA ------------------>


<!------------------ START RD STATION ------------------>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/741adbd5-33fb-4123-8677-b3e46fb7805f-loader.js" ></script>
<!------------------ END RD STATION ------------------>

</body>
<!------------------ END BODY ------------------>

</html>
<!------------------ END HTML ------------------>






