<section id="venda-mais" class="animacao">

    <div class="container">

        <div class="row equal ">

            <div class="col-xs-12 visible-xs visible-sm">
                <img data-src="<?php echo plugins_url('../img/ingresso@2x.png', __FILE__); ?>" alt="" class="img-responsive">
            </div>

            <div class="col-md-4 col-md-offset-7">
                <h2>
                    <?php echo get_field('vendas_mais_titulo') ?>
                </h2>
                <ul class="lista">
                    <li>
                        <i class="em em-rocket"></i>
                        <?php echo get_field('vendas_mais_lista_item_1')?>
                    </li>
                    <li>
                        <i class="em em-bar_chart"></i>
                        <?php echo get_field('vendas_mais_lista_item_2')?>
                    </li>
                    <li>
                        <i class="em em-money_mouth_face"></i>
                        <?php echo get_field('vendas_mais_lista_item_3')?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- venda-mais -->
