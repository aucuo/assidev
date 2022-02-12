<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="Cache-Control" content="private">
    <meta name="format-detection" content="telephone=no">

    <meta name="theme-color" content="#161616">
    <meta name="description" content="Just developing bots for Telegram">
    <meta name="keywords" content="Bots, Telegram, Development, IT">

    <meta name="Author" content="Jahor Šykaviec">
    <meta name="Copyright" content="Jahor Šykaviec">
    <meta name="Adress" content="Belarus, Minsk">

    <title>Assidev</title>

    <script src="https://kit.fontawesome.com/48a36d81b9.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        // Menu top page position
        $( window ).ready(function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos <= 200) {
                $('menu').addClass('top-of-page');
            } else {
                $('menu').removeClass('top-of-page');
            }
        });
        $(window).on("scroll", function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos <= 200) {
                $('menu').addClass('top-of-page');
            } else {
                $('menu').removeClass('top-of-page');
            }
        });

        // Preloader
        function loadData() {
            return new Promise((resolve, reject) => {
                // setTimeout не является частью решения
                // Код ниже должен быть заменен на логику подходящую для решения вашей задачи
                setTimeout(resolve, 200);
            })
        }

        loadData()
        .then(() => {
            let body = document.body;
            body.classList.add("ready");
        });
    </script>

    <!-- Animation JS library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 

    <link rel="stylesheet" href="basic.css">
    