<?php
    require $_SERVER["DOCUMENT_ROOT"]."/pj_1_travel/includes/config.inc.php";
echo "
    <head>
    <meta charset='UTF-8'>
    <meta name='keywords' content=
";
$key = implode(",", $keywords);
echo $key;
echo "
    >
    <base href='{$_SERVER['HTTP_HOST']}'>
    <link rel='shortcut icon' href='/pj_1_travel/favicon.png' type='image/png'>
    <link rel='stylesheet' href='/pj_1_travel/css/style.css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css'>
    <!--Подключение библиотеки иконок  -->
    <script src='/pj_1_travel/JQ.js' defer></script>
    <script src='/pj_1_travel/main.js' defer></script>
    <!-- Подключение JavaScript -->   
    <link rel='stylesheet' type='text/css' href='/pj_1_travel/slick/slick.css'/>
    <link rel='stylesheet' type='text/css' href='/pj_1_travel/slick/slick-theme.css'/>
    <script type='text/javascript' src='//code.jquery.com/jquery-1.11.0.min.js' defer></script>
    <script type='text/javascript' src='//code.jquery.com/jquery-migrate-1.2.1.min.js' defer></script>
    <script type='text/javascript' src='/pj_1_travel/slick/slick.min.js' defer></script> 
    <!-- Подключение слика -->
    <title> {$title} </title>
    </head>
";