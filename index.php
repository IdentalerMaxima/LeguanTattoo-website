</html>

<head>
    <title>Leguan Tattoo</title>

    <link rel="stylesheet" href="res\style.css">
    <link rel="stylesheet" href="css\all.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;1,300&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Aboreto&family=Girassol&family=IM+Fell+French+Canon+SC&family=Jim+Nightshade&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&family=Spectral:ital,wght@1,200&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</head>

<body>
    <!-- Main Page -->
    <section id="banner">
        <div class="banner-text">
            <h1 id="mainTitle">Leguan Tattoo</h1>
            <h2 id="quote">"A testem a naplóm, a tetoválásaim pedig az én történetem."</h2>
        </div>
        <div class="container">
            <a href="#rolunk" class="btn">
                <i class="fa-solid fa-arrow-down fa-3x"></i>
            </a>
        </div>
    </section>

    <!-- Menu -->
    <input type="checkbox" class="toggler" id="toggle">
    <div class="hamburger">
        <div></div>
    </div>
    <div class="menu">
        <div>
            <ul>
                <a href='#rolunk' ><li>Rólunk</li></a>
                <a href='#szolgaltatasok'><li>Szolgáltatások</li></a>
                <a href='#info'><li>A tetoválasról</li></a>
                <a href='#galeria'><li>Galéria</li></a>
                <a href='#elerhetoseg'><li>Elérhetőség</li></a>
            </ul>
        </div>
    </div>

    <script>
        const toggle = document.getElementById('toggle');

        document.onclick = function(e){
        
            if(e.target.id !== 'menu' && e.target.id !== 'toggle'){
                toggle.checked = false;
            }

        }
    </script>

    <!-- Rolunk -->

    <section id="rolunk">
        <div class="title-text">
            <p>ROLUNK</p>
            <h1>Miért válassz minket</h1>
        </div>
        <div class="feature-box">
            <div class="features">
                <h1>Tapasztalat</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa-solid fa-shield-halved"></i></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
                    </div>

                </div>
                <h1>Precíz munka</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
                    </div>

                </div>
                <h1>Kifizethető árak</h1>
                <div class="features-desc">
                    <div class="feature-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <div class="feature-text">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

            <div class="features-img">
                <img src="res\tetovalas.jpg">
            </div>
        </div>
    </section>

    <!-- Szolgaltatasok -->

    <section id="szolgaltatasok">
        <div class="title-text">
            <p>SZOLGÁLTATÁSOK</p>
            <h1>Lorem ipsum dolor sit.</h1>
            <div class="service-box">
                <div class="single-service">
                    <img src="res\piercing-alap.png">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Piercing</h3>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, iste?</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="res\koponya.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Takarás</h3>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, iste?</p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="res\modern.jpg">
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Tattoo</h3>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, iste?</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- A tetovalasrol -->
    <section id="info">
        <div class="title-text">
            <p>A TETOVÁLÁSRÓL</p>
            <h1>Bőr és tinta</h1>
        </div>
        <div class="tattoo-box">
            <div class="tattoo-img">
                <img src="res\process.jpg">
            </div>  
            <div class="tattoo1">
            <p>A legfontosabb tudnivaló az, hogy a bőr nem papír.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita minima laborum dolorum quidem qui dignissimos.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Est sunt dolore odit dolorum vitae. 
            </p>

            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="galeria">
        <div class="title-text">
            <p>GALÉRIA</p>
            <h1>Munkáim</h1>
        </div>
        <div class="gallery-box">
            <div class="row">
                <a data-fancybox="gallery" href="res\tattoos\t1.jpg"><img src="res\tattoos\t1.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t2.jpg"><img src="res\tattoos\t2.jpg"></a>
                
            </div>
            <div class="row">
                <a data-fancybox="gallery" href="res\tattoos\t4.jpg"><img src="res\tattoos\t4.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t5.jpg"><img src="res\tattoos\t5.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t7.jpg"><img src="res\tattoos\t6.jpg"></a>
            </div>
            <div class="row">
                <a data-fancybox="gallery" href="res\tattoos\t7.jpg"><img src="res\tattoos\t7.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t8.jpg"><img src="res\tattoos\t8.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t9.jpg"><img src="res\tattoos\t9.jpg"></a>
                <a data-fancybox="gallery" href="res\tattoos\t3.jpg"><img src="res\tattoos\t3.jpg"></a>
            </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <section id="elerhetoseg">
        <img src="res\tattoom.png" class="footer-img">
        <div class="title-text">
            <p>ELÉRHETŐSÉGEK</p>
            <h1>Látogass el hozzánk ma!</h1>
        </div>
    <div class="footer-row">
        <div class="footer-left">
            <h1>Nyitvatartás</h1>
            <p>
                <i class="fa-regular fa-clock"></i>
                Nyitvatartás&nbsp<br> Hetfo-Pentek 10:00 - 17:00 <br>
                <i class="fa-regular fa-clock"></i>
                Szombati napok :<br> elozetes megbeszelessel.
            </p>
        </div>
        <div class="footer-right">
            <h1>Elérhetőségeink</h1>
            <p>+36 30 155 91 75 <i class="fa-solid fa-phone"></i></p>
            <p>Szombathely, Uránia udvar 11<i class="fa-solid fa-location-dot"></i> </p>
            <p>leguan.tattoo@gmail.com <i class="fa-solid fa-at"></i></p>
        </div>
    </div>    
    </section>

<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 600
    })
    var scroll = null;
    $.fancybox.defaults.hash = false;

</script>

</body>

</html>