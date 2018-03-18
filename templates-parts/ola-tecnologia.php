
<section id="ola-tecnologia" class="lazy" data-src="<?php echo get_field('background_ola_tecnologia')?>"   >

    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <?php echo get_field('saudacao')?>
                    <span id="areas-atuacao"></span>
                </h1>
                <p>
                    <?php echo get_field('paragrafo_ola_tecnologia')?>
                </p>

                <button class="btn-verde uppercase"> <?php echo get_field('botao-ola-tecnologia')?></button>
            </div>
        </div>
    </div>

    <a href="#mesma-plataforma" class="role">
        <p>
            <?php echo get_field('role_para_ver_mais')?>
            <br/>
            <i class="fas fa-chevron-down"></i>
        </p>
    </a>



</section><!-- ola-tecnologia -->


<script>
$(function () {
    var areas = $("#areas-atuacao").html();
    console.log(areas);
    var palavras = "<?php echo get_field('areas-atuacao')?>"  ;   
    var listaPalavras = palavras.split(',');
    changeWords(listaPalavras, 2000);
});
</script>
