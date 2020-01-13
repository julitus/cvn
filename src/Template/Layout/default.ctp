<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        Comunicados CV
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--?= $this->Html->css('base.css') ?-->
    <!--?= $this->Html->css('cake.css') ?-->

    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('ionicons.min.css') ?>
    <?= $this->Html->css('AdminLTE.min.css') ?>
    <?= $this->Html->css('_all-skins.min.css') ?>

    <?= $this->Html->css('bootstrap-datepicker.min.css') ?>
    <?= $this->Html->css('daterangepicker.css') ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?= $this->Html->css('custom.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    
    <div class="wrapper">

        <?= $this->element('header') ?>
        <?= $this->element('sidebar') ?>

        <div class="content-wrapper">
            <?= $this->Flash->render() ?>
            
            <?= $this->fetch('content') ?>
        </div>

        <?= $this->element('footer') ?>

    </div>

    <footer>
    </footer>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('jquery-ui.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->Html->script('moment.min.js') ?>
    <?= $this->Html->script('daterangepicker.js') ?>
    <?= $this->Html->script('bootstrap-datepicker.min.js') ?>

    <?= $this->Html->script('adminlte.min.js') ?>
    <?= $this->Html->script('dashboard.js') ?>
    <?= $this->Html->script('demo.js') ?>

</body>
</html>