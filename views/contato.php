<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Entre em contato com a gente!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-breadcrumb">
        <div class="container">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contato</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                        <!-- widget search -->
                        <h3 class="widget-title">Nosso contato</h3>
                        <address>
                          <strong><?=$this->infos['company_name']?></strong><br>
                          <?=$this->infos['address']?><br>
                          <abbr title="Phone">tel:</abbr> <?=$this->infos['phone']?> / <?=$this->infos['responsible_cel_phone']?>
                        </address>
                        <address>
                          <strong><?=$this->infos['responsible_name']?></strong><br>
                          <a href="mailto:#"><?=$this->infos['responsible_email']?></a>
                        </address>
                         
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">

                        <div class="social-circle">
                             <a href="#" class="#"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="#"><i class="fa fa-instagram"></i></a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1>Formulário de contato</h1>
                        <p> Preencha o formulário abaixo que entraremos em contato pra mais informações!</p>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="name">Nome</label>
                                    <input type="text" name="name" id="name" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="phone">Telefone</label>
                                    <input type="text" name="phone" id="phone" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="email">E-mail</label>
                                    <input type="text" name="email" id="email" placeholder="" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label" for="Subject">Assunto</label>
                                    <input type="text" name="Subject" id="Subject" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Mensagem</label>
                                            <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">Enviar mensagem</button>
                                            
                                        </div>
                                    </div>

                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                    <h1 class="cta-title">Faça um agendamento online</h1>
                    <p class="cta-text"> Clique para realizar um agendamento online.</p>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <a href="#" class="btn btn-white btn-lg mt20">Agendar!</a>
                </div>
            </div>
        </div>
    </div>