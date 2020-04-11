<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?=$this->configs['site_title']?></title>
    <!-- Bootstrap -->
    <!-- Carrossel -->
    <link href="<?=BASE_URL?>assets/css/carrossel.css" rel="stylesheet" >
    <link href="<?=BASE_URL?>assets/css/tema_carrossel.css" rel="stylesheet">

    <link href="<?=BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=BASE_URL?>assets/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Style -->
    <link href="<?=BASE_URL?>assets/css/style.css" rel="stylesheet">
    <link href="<?=BASE_URL?>assets/css/slider-carousel.css" rel="stylesheet">
    <link href="<?=BASE_URL?>assets/css/animate.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header-top">
    <!-- header-top-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <span class="text-block time-block">  
                    <span class="time-text">Seg a Sex: <strong>9 - 19h</strong> 
                </span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="top-text">
                    <span class="text-block call-block"> 
                        <span class="call-no"><?=$this->infos['responsible_cel_phone']?></span>
                    </span>
                    <span class="text-block mail-block hidden-xs hidden-sm">  
                        <span class="mail-text"><?=$this->infos['responsible_email']?></span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="#"><img src="images/logo70.png"></a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                    <div id="navigation">
                        <ul>
                            
							<?php foreach($this->menus as $menu):?>
                                <li class="<?php echo $menu['url'] == $url ? 'active' : '';?>">
									<a href="<?=BASE_URL.$menu['url']?>"><?=$menu['nome']?></a>
								</li>
							<?php endforeach;?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
	<?php 
		//A função abaixo é como se estivesse sendo executada dentro do método $this->loadTemplate
		$this->loadViewInTemplate($viewName, $viewData); 

	?>
<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget widget-newsletter">
                        <h2 class="widget-title">Newsletters</h2>
                        <p>Entre com seu e-mail abaixo para receber informações e artigos importantes sobre saúde!</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Seu e-mail">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Inscrever-se</button>
                           </span>
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Terapia</h2>
                        <ul class="listnone">
                            <li><a href="#">Fisioterapia</a></li>
                            <li><a href="#">Pilates</a></li>
                            <li><a href="#">Reabilitação</a></li>
                            <li><a href="#">Diagnóstico</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget footer-social">
                        <h2 class="widget-title">Nossas redes sociais</h2>
                        <ul class="listnone">
                            <li>
                                <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                            <li>
                                <a href="#"> <i class="fa fa-youtube"></i>Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer-widget footer-social">
                        <h2 class="widget-title">Nossa localização:</h2>
                        <ul class="listnone contact">
                            <li><i class="fa fa-map-marker"></i> <?=$this->infos['address']?>
                            </li>
                            <li><i class="fa fa-phone"></i><?=$this->infos['phone']?></li>
                            <li><i class="fa fa-whatsapp"></i><?=$this->infos['responsible_cel_phone']?></li>
                            <li><i class="fa fa-envelope-o"></i> <?=$this->infos['responsible_email']?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright-content">
                        <p>© Viver Bem 2020  |  todos os direitos reservados</p>
                    </div>
              </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
    <script src="<?=BASE_URL?>assets/js/menumaker.js"></script>
 

    <script src="<?=BASE_URL?>assets/js/jquery.sticky.js"></script>
    <script src="<?=BASE_URL?>assets/js/sticky-header.js"></script>
    <script src="<?=BASE_URL?>assets/js/owlcarousel/owl.carousel.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('.owl-carousel').owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items:1,
                margin:30,
                stagePadding:0,
                smartSpeed:450,
                autoplay:true
            });
            // $('.owl-carousel-3').owlCarousel({
            //     animateOut: 'fadeOut',
            //     items:3,
            //     margin:30,
            //     stagePadding:30,
            //     smartSpeed:450,
            //     autoplay:true
            // });
        });
    </script>
</body>

</html>