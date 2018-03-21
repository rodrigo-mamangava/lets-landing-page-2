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
            <div class="col-sm-6 col-md-3">
                <h2 class="hidden-xs hidden-sm" >Lets.events</h2>
                <ul class="list-inline social">
                    <li>
                        <a href="">
                            <img data-src="<?php echo plugins_url('../img/Facebook@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img data-src="<?php echo plugins_url('../img/Twitter@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img data-src="<?php echo plugins_url('../img/Instagram@2x.png', __FILE__) ?>" alt="" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2><?php _traduzir('Talk to a consultant', 'Fale com um consultor')?></h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="">Blog</a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Price', 'Preço')?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2><?php _traduzir('Solutions for organizers', 'Soluções para organizadores')?>
                    </h2>
                <ul class="list-unstyled">
                    <li>
                        <a href="">
                            <?php _traduzir('Manage multiple lists', 'Gerencie múltiplas listas')?>
                            </a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Performance of your event', 'Performance do seu evento')?>
                            </a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Agility in your concierge', 'Agilidade na sua portaria')?>
                            </a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Sale of tickets', 'Venda de ingressos')?>
                            </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3">
                <h2>Suporte</h2>
                <ul class="list-unstyled ultima-lista">
                    <li>
                        <a href="">
                            <?php _traduzir('Frequently Asked Questions', 'Dúvidas frequentes')?>
                            </a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Terms and conditions', 'Termos e condições')?>
                            </a>
                    </li>
                    <li>
                        <a href="">
                            <?php _traduzir('Agility in your concierge', 'Agilidade na sua portaria')?>
                            </a>
                    </li>
                    <li>
                        <a href="">equipe@lets.events</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- #ainda-com-duvidas -->
