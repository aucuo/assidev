    <? echo file_get_contents('basic.php'); // Стандартное оформление страницы ?>

    <link rel="stylesheet" href="index.css">
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
            <div id="sign" data-aos="fade-right">
                <span>Assistment development</span>
                <span id="border">for Telegram</span>
                <span id="thin">Bots & Automation</span>
            </div>
            <div id="image" data-aos="zoom-out-left"> 
                <object type="image/svg+xml" data="logoBorder.svg"> 
                    <img src="/media/logoBorder.svg">
                </object>
            </div>
        </section>

        <section id="second" class="anchor"> 
            <span id="sectionHeader" data-aos="fade-right">About us</span>
            <div id="information">
                <div class="item" data-aos="fade-up">
                    <span id="header">Who we are?</span>
                    <span>We are a group of people with a geniue interest in computer programming. We made this company to help small and big business companies to grow. All our products may have help your company in many spheres.</span>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">What are our interest?</span>
                    <span>We are interested in all things, that we can automatize. We have great experience in making bots.</span>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">Why you can trust us?</span>
                    <span>We have small, but experienced team. Our motto is “practice makes perfect”. There are UI/UX designers, programmers, marketers in our team.</span>
                </div>
                <div id="subscribe" data-aos="fade-up">
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
            <span id="sectionHeader" data-aos="fade-right">Why Assidev?</span>
            <div id="information">
                <div class="item" data-aos="fade-up">
                    <span id="header">Save your money</span>
                    <span>Intelligent automation has saved significant amounts of money for our customers.</span>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">The same results</span>
                    <span>The functions of bots can be the same as functions of apps.</span>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">Simple to use</span>
                    <span>Our solutions are easy to use because most of our production solutions are code-less. </span>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">Fast & cheap</span>
                    <span>Order a bot is the fastest way to get all functions of app faster and cheaper.</span>
                </div>
                <div id="subscribe" data-aos="fade-up">
                    <div id="subscribeWrapper">
                        <span id="header">Subscribe to us</span>
                        <form action="">
                            <input type="text" placeholder="Your e-mail">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div class="item" data-aos="fade-up">
                    <span id="header">Help your company</span>
                    <span>Some of our customers have been able to speed up their processes up and generate new profits.</span>
                </div>
            </div>
        </section>

        <section id="fourth" class="anchor">
            <span id="sectionHeader" data-aos="fade-right">Contact us</span>
            <div id="information">
                <div id="contactForm" data-aos="fade-left">
                    <div id="contactWrapper">
                        <span id="header">We`ll write you ASAP</span>
                        <form action="">
                            <input id="emailInput" type="text" placeholder="Your e-mail">
                            <textarea id="messageInput" type="text" placeholder="Message" rows="4" cols="50"></textarea>
                            <input id="submitButton" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
                <div id="contacts" data-aos="fade-up">
                    <div class="item">
                        <span id="header">Our e-mail</span>
                        <span><a href="mailto:assidev.company@gmail.com">assidev.company@gmail.com</a></span>
                    </div>
                    <div class="item" id="iconsItemWrapper">
                        <span id="header">You can also see us in</span>
                        <div id="icons">
                        <a href="">
                            <object type="image/svg+xml" data="logoBorder.svg"> 
                                <img src="/media/iconmonstr-instagram.svg">
                            </object>
                        </a>
                        <a href="">
                            <object type="image/svg+xml" data="logoBorder.svg"> 
                                <img src="/media/iconmonstr-telegram.svg">
                            </object>
                        </a>
                        <a href="">
                            <object type="image/svg+xml" data="logoBorder.svg"> 
                                <img src="/media/iconmonstr-twitter.svg">
                            </object>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 
            TODO:
            > Страницы сайта
            > Адаптировать под мобильные устройства
        -->
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
        });
    </script>

</body>
</html>