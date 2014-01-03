<?php //echo base_url(); exit;  ?>
<?php //require_once("config.php");  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?= $meta['name']; ?></title>
        <!--頁面基本資訊-->
        <meta property="og:title" content="<?= $meta['name']; ?>"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="<?= current_url(); ?>"/>
        <meta property="og:image" content="<?= base_url() . 'image/' . $meta['image']; ?>"/>
        <meta property="og:description" content="<?= $meta['description']; ?>"/>
        <meta name="description" content="<?= $meta['description']; ?>" />
        <meta name="author" content="redmaplewing" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />

        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <!--頁面圖示-->
        <link rel="shortcut icon" href="" />
        <link rel="apple-touch-icon" href="" />

        <!--css重置歸零-->
        <link rel="stylesheet" href="<?= base_url(); ?>lib/css/reset.css"/>       
        <!--預設css-->        
        <link rel="stylesheet" href="<?= base_url(); ?>lib/css/jquery-ui-1.10.3.custom.min.css"/>
        <link rel="stylesheet" href="<?= base_url(); ?>lib/css/jquery.lightbox-0.5.css"/><!--圖片展示示窗-->
        <link rel="stylesheet" href="<?= base_url(); ?>lib/css/jquery.mCustomScrollbar.css"/><!--美化拖拉把-->
        <link rel="stylesheet" href="<?= base_url(); ?>lib/css/bootstrap.min.css"/><!--bootStrap-->
        <!--美化下拉條<link rel="stylesheet" href="<?= base_url(); ?>lib/css/heapbox/dark/css/dark.css"/>-->
        <!--美化警告示窗<link rel="stylesheet" href="<?= base_url(); ?>lib/css/apprise-v2.css"/>-->

        <!--自行開發的js-->
        <!--CSS-->
        <style type="text/css"></style>
    </head>
    <body>
        <!--loading pic-->

        <div id="loading">
            <div id="loadImg">
                <img src="images/ajax-loader.gif" alt="" />
            </div>
        </div>
        <div id="showWindow">
