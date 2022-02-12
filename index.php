    <? echo file_get_contents('basic.php'); // Стандартное оформление страницы ?>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/fonts/stylesheet.css">
</head>
<body>
    <div id="svgGradientFirst">
        <object type="image/svg+xml" data="gradientFirst.svg">
            <img src="/media/gradientFirst.svg">
        </object>
    </div>
    <div id="svgGradientSecond">
        <object type="image/svg+xml" data="gradientSecond.svg">
            <img src="/media/gradientSecond.svg">
        </object>
    </div>
    <div id="wrapper">
        <? echo file_get_contents('menu.php'); // Стандартное оформление меню ?>

        <section id="first" class="anchor">
            <div id="sign">
                <span>Assistment developent</span>
                <span id="border">for Telegram</span>
                <span id="thin">Bots & Automation</span>
            </div>
            <div id="image">
                <object type="image/svg+xml" data="logoBorder.svg"> 
                    <img src="/media/logoBorder.svg">
                </object>
            </div>
        </section>

        <section id="second" class="anchor">
            <span id="sectionHeader">About us</span>
            <div id="information">
                <div id="waw">
                    <span id="header">Who we are?</span>
                    <span>We are a group of people with a geniue interest in computer programming. We made this company to help small and big business companies to grow. All our products may have help your company in many spheres.</span>
                </div>
                <div id="waoi">
                    <span id="header">What are our interest?</span>
                    <span>We are interested in all things, that we can automatize. We have great experience in making bots.</span>
                </div>
                <div id="wyctu">
                    <span id="header">Why you can trust us?</span>
                    <span>We have small, but experienced team. Our motto is “practice makes perfect”. There are UI/UX designers, programmers, marketers in our team.</span>
                </div>
                <div id="subscribe">
                    <div id="subscribeWrapper">
                        <span id="header">Subscribe to us</span>
                        <form action="">
                            <input type="text" placeholder="Your e-mail">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="third" class="anchor">
            <span id="sectionHeader">Why Assidev?</span>
            <div id="information">
                <div id="sym">
                    <span id="header">Save your money</span>
                    <span>Intelligent automation has saved significant amounts of money for our customers.</span>
                </div>
                <div id="tsr">
                    <span id="header">The same results</span>
                    <span>The functions of bots can be the same as functions of apps.</span>
                </div>
                <div id="stu">
                    <span id="header">Simple to use</span>
                    <span>Our solutions are easy to use because most of our production solutions are code-less. </span>
                </div>
                <div id="fac">
                    <span id="header">Fast & cheap</span>
                    <span>Order a bot is the fastest way to get all functions of app faster and cheaper.</span>
                </div>
                <div id="subscribe">
                    <div id="subscribeWrapper">
                        <span id="header">Subscribe to us</span>
                        <form action="">
                            <input type="text" placeholder="Your e-mail">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div id="hyc">
                    <span id="header">Help your company</span>
                    <span>Some of our customers have been able to speed up their processes up and generate new profits.</span>
                </div>
            </div>
        </section>

        <section id="fourth" class="anchor">
            <span id="sectionHeader">Contact us</span>
            <div id="information">
                <div id="subscribe">
                    <div id="subscribeWrapper">
                        <span id="header">We`ll write you ASAP</span>
                        <form action="">
                            <input id="emailInput" type="text" placeholder="Your e-mail">
                            <input id="" type="text" placeholder="Message">
                            <input id="submitButton" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div id="waw">
                    <span id="header">Who we are?</span>
                    <span>We are a group of people with a geniue interest in computer programming. We made this company to help small and big business companies to grow. All our products may have help your company in many spheres.</span>
                </div>
                <div id="waoi">
                    <span id="header">What are our interest?</span>
                    <span>We are interested in all things, that we can automatize. We have great experience in making bots.</span>
                </div>
                <div id="wyctu">
                    <span id="header">Why you can trust us?</span>
                    <span>We have small, but experienced team. Our motto is “practice makes perfect”. There are UI/UX designers, programmers, marketers in our team.</span>
                </div>
            </div>
        </section>

        <!-- 
            TODO:
            > Скроллбар
            > Прокрутка градиента (паралакс)
            > Анимация на скролл
            > Доделать contact us на index.php

            Поблочная прокрутка*
            Страницы сайта
            Адаптировать под мобильные устройства
            Иллюстрация для about.php
        -->
    </div>
</body>
</html>