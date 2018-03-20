<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="item <?php echo ($count == 0) ? 'active' : ''; ?>">

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="card-depoimento">
                <div class="row">
                    <div class="col-sm-4">
                        <img data-src="<?php echo get_field('foto') ?>" alt="<?php echo get_field('autor') ?>" class="img-responsive img-circle ">

                        <h2>
                            <?php echo get_field('autor') ?>
                        </h2>
                    </div>
                    <div class="col-sm-8">
                        <h3><?php echo get_field('titulo') ?></h3>
                        <p>
                            <?php echo get_field('depoimento') ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

