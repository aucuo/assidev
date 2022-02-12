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
        $( window ).ready(function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos <= 0) {
                $('menu').addClass('top-of-page');
            } else {
                $('menu').removeClass('top-of-page');
            }
        });
        $(window).on("scroll", function() {
            var scrollPos = $(window).scrollTop();
            if (scrollPos <= 0) {
                $('menu').addClass('top-of-page');
            } else {
                $('menu').removeClass('top-of-page');
            }
        });

        // var anchors = [];
        // var currentAnchor = -1;
        // var isAnimating  = false;
        // $(function(){
        //     function updateAnchors() {
        //         anchors = [];
        //         $('.anchor').each(function(i, element){
        //             anchors.push( $(element).offset().top );
        //         });
        //     }
        //     $('body').on('mousewheel', function(e){
        //         e.preventDefault();
        //         e.stopPropagation();
        //         if( isAnimating ) {
        //             return false;
        //         }
        //         isAnimating  = true;
        //         if( e.originalEvent.wheelDelta >= 0 ) {
        //             currentAnchor--;
        //         }else{
        //             currentAnchor++;
        //         }
        //         if( currentAnchor > (anchors.length - 1) 
        //            || currentAnchor < 0 ) {
        //             currentAnchor = 0;
        //         }
        //         isAnimating  = true;
        //         $('html, body').animate({
        //             scrollTop: parseInt( anchors[currentAnchor] )
        //         }, 500, 'swing', function(){
        //             isAnimating  = false;
        //         });
        //     });
        //     updateAnchors();   
        // });
    </script>

    <link rel="stylesheet" href="basic.css">