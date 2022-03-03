<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="/">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">
    <title data-ng-bind="pageTitle + (pageTitle?' &mdash; ':'') + 'Boxete Kitchen Ordering Web & Editor v4'">Boxete Kitchen Ordering Web & Editor v4</title>

    <!-- Tags -->
    <?php
    require_once __DIR__.'/php/seo/tags.php';
    $tags = getTags();
    if ($tags) {
        echo '<meta name="title" content="'.$tags->title."\" />\n\t";
        echo '<meta name="description" content="'.$tags->description."\" />\n";
        echo '<meta property="og:title" content="'.$tags->title."\" />\n\t";
        echo '<meta property="og:description" content="'.$tags->description."\" />\n";
        echo '<meta property="og:type" content="'.$tags->type."\" />\n\t";
        echo '<meta property="og:url" content="'.$tags->url."\" />\n\t";
        echo '<meta property="og:image" content="'.$tags->image."\" />\n\t";
        echo '<meta name="twitter:title" content="'.$tags->title."\" />\n\t";
        echo '<meta name="twitter:description" content="'.$tags->description."\" />\n";
        echo '<meta name="twitter:image" content="'.$tags->image."\" />\n\t";
    }
    ?>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="author" content="Ordering.co">
    <meta name="generator" content="Ordering.co">
    <!-- End tags -->

    <link rel="stylesheet" type="text/css" href="assets/css/ionic.app.css">
    <script src="cordova.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/extensions.js?v=4.34.3"></script>
    <script src="assets/js/config.js?v=4.34.3"></script>
    <script src="assets/js/constants.js?v=4.34.3"></script>
    <script src="assets/js/socket.io.min.js"></script>
    <script src="assets/js/ua-parser.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="https://www.paypalobjects.com/api/checkout.min.js"></script>

    <!--<base href="/">-->
    <meta name="description" content="Boxete Kitchen Ordering Web & Editor v4"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body data-ng-controller="rootCtrl" data-ng-class="{'arabic_rtl': arabic_rtl}">
    <ion-nav-view id="mobile-view"></ion-nav-view>
    <div id="web-view">
        <ui-view data-ng-controller="editorRootCtrl"></ui-view>
    </div>
    
</body>
</html>
