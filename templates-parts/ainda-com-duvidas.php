<section id="ainda-com-duvidas">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <h1>
                    <?php echo get_field('ainda_com_duvidas_titulo') ?>
                </h1>
            </div>
            <div class="col-sm-12 col-md-6 col-md-offset-3">
                <p>
                    <?php echo get_field('ainda_com_duvidas_descricao') ?>
                </p>
                <button class="btn-verde" data-toggle="modal" data-target="#faleConsultor">
                    <?php echo get_field('ainda_com_duvidas_botao') ?>
                </button>
            </div>
        </div>
    </div>

    <div class="container footer">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <h2 class="hidden-xs" >Lets.events</h2>
                <ul class="list-inline social">
                    <li>
                        <a href="https://facebook.com/letseventsofficial" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Facebook@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/lets_events" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Twitter@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/lets.events" target="_blank">
                            <img data-src="<?php echo plugins_url('../img/Instagram@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-sm-4">
                        <h2><?php _traduzir('Institutional', 'Institucional')?></h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://lets.events/blog">Blog</a>
                            </li>
                            <li>
                                <a href="#melhores-taxas">
                                    <?php _traduzir('Pricing', 'Preço')?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h2><?php _traduzir('Solutions for organizers', 'Soluções para organizadores')?>
                            </h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://lets.events/listas-de-convidados">
                                    <?php _traduzir('Guest list management', 'Gestão de listas de convidados')?>
                                </a>
                            </li>
                            <li>
                                <a href="https://lets.events">
                                    <?php _traduzir('Ticket Sales', 'Venda de ingressos')?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h2><?php _traduzir('Support', 'Suporte')?></h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://support.lets.events/">
                                    <?php _traduzir('Frequently Asked Questions', 'Dúvidas frequentes')?>
                                </a>
                            </li>
                            <li>
                                <a href="https://app.lets.events/terms-of-use">
                                    <?php _traduzir('Terms of use', 'Termos de Uso')?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </div>

    <?php include 'form.php'; ?>
</section>
<!-- #ainda-com-duvidas -->
