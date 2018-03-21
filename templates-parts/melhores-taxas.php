<section id="melhores-taxas">
    <div class="container text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <a name="melhores-taxas"></a>
                <h1><?php echo get_field('melhores_taxas_titulo_1') ?></h1>
                <p class="desc">
                    <?php echo get_field('melhores_taxas_descricao') ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 ">
                <div class="tabela-lets tabela-pago">
                    <h2><?php echo get_field('melhores_taxas_titulo_2') ?></h2>

                    <div class="row">
                        <div class="col-sm-6">
                            <p class="taxa azul ">5,99
                                <span>%</span>
                            </p>
                            <p class="obs">
                                <?php echo get_field('no_boleto') ?>
                            </p>
                        </div>
                        <div class="col-sm-6 ">
                            <p class="taxa azul">8,99
                                <span> %</span>
                            </p>
                            <p class="obs">
                                <?php echo get_field('no_cartao') ?>
                            </p>
                        </div>
                    </div>
                </div>




                <ul class="credit-cards visible-xs visible-sm">
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Visa@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Master@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Elo@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Amex@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Diners@2x.png"', __FILE__) ?>" class="img-responsive" >
                    </li>
                </ul>
                <div class="cartoes visible-xs visible-sm ">
                    <?php echo get_field('melhores_taxas_cartoes') ?>
                </div>



            </div>

            <div class="col-sm-4">
                <div class="tabela-lets tabela-gratuito">
                    <h2>
                        <?php echo get_field('melhores_taxas_titulo_3') ?>
                    </h2>
                    <p class="taxa verde">
                        <span>R$ </span>0
                        <span>,00</span>
                    </p>
                    <p class="obs">
                        <?php echo get_field('gratis_de_verdade') ?>
                    </p>
                </div>

                <p class="info visible-xs visible-sm" >
                    <?php echo get_field('melhores_taxas_utilize_sem_pagar') ?>
                </p>

            </div>
        </div>
        <div class="row visible-md visible-lg">
            <div class="col-sm-8 info">
                <ul class="credit-cards">
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Visa@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Master@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Elo@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Amex@2x.png', __FILE__) ?>" class="img-responsive" >
                    </li>
                    <li>
                        <img data-src="<?php echo plugins_url('../img/Diners@2x.png"', __FILE__) ?>" class="img-responsive" >
                    </li>
                </ul>
                <div class="cartoes">
                    <?php echo get_field('melhores_taxas_cartoes') ?>
                </div>
            </div>
            <div class="col-sm-4 info">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p class="info">
                            <?php echo get_field('melhores_taxas_utilize_sem_pagar') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- melhores-taxas -->
