<!DOCTYPE html>
<html lang="ja"><head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="https://html5shiv.goo
glecode.com/svn/trunk/html5.js"></script>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>
    <header class="globalHeader">
        <div class="inner">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo01.png" height="40" width="300" alt="ホテル・技評リゾート石垣島"></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <form action="" method="get" class="searchform">
                <input type="text" value="" name="s" id="s" placeholder="サイト内検索">
                <input type="submit" id="searchSubmit" value="">
            </form>
        </div>
    </header><!-- /.globalHeader -->