<section id="sua-lista" class="animacao">

    <div class="container">
        <div class="row equal">

            <div class="col-xs-12 visible-xs visible-sm">
                <img src="img/lista@2x.png" alt="" class="img-responsive">
            </div>


            <div class="col-md-4 col-md-offset-7">
                <h2><?php echo get_field('sua_lista_titulo') ?></h2>
                <ul class="lista">
                    <li>
                        <i class="em em-balloon"></i>
                        <?php echo get_field('sua_lista_item_1') ?>
                    </li>
                    <li>
                        <i class="em em-zap"></i>
                        <?php echo get_field('sua_lista_item_2') ?>
                    </li>
                    <li>
                        <i class="em em-sunglasses"></i>
                        <?php echo get_field('sua_lista_item_3') ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- sua-lista -->
