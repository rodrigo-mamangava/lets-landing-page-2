<?php include_once 'functions.php';?>﻿
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo plugins_url('css/styles-ls2.css', __FILE__) ?>">
        <script src="<?php echo plugins_url('./js/jquery-2.2.0.min.js', __FILE__) ?>"></script>
        <title>
            <?php echo get_field('title')?>
        </title>
    </head>
    <body>
        <?php include 'templates-parts/ola-tecnologia.php'; ?>        
        <?php include 'templates-parts/mesma-plataforma.php'; ?>
        <?php include 'templates-parts/venda-mais.php'; ?>
        <?php include 'templates-parts/sua-lista.php'; ?>
        <?php include 'templates-parts/formidaveis.php'; ?>
        <?php include 'templates-parts/melhores-taxas.php'; ?>
        <?php include 'templates-parts/sua-audiencia.php'; ?>
        <?php include 'templates-parts/conheca-seu-publico.php'; ?>
        <?php include 'templates-parts/menos-fila.php'; ?>
        <?php include 'templates-parts/quem-ja-esta-usando.php'; ?>
        <?php include 'templates-parts/ainda-com-duvidas.php'; ?>
        <?php include 'templates-parts/form.php'; ?>
        <?php include 'templates-parts/lets-2-min.php'; ?>        
        <?php include 'templates-parts/modal.php'; ?>
        <?php include 'templates-parts/acabamento.php'; ?>
        <!-- Scripts -->
        
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.plugins.min.js"></script>
        <script src="<?php echo plugins_url('./js/bootstrap.min.js', __FILE__) ?>"></script>
        <script src="<?php echo plugins_url('./js/main.js', __FILE__) ?>"></script> 
    </body>
</html>