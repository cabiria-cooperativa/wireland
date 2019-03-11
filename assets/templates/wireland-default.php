<?php 
/*
 * Template Name: Wireland default
 * Template Post Type: page
 */ 
?>
<!doctype html>
<html lang="it">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ?>../css/style.css?ver=<?php echo mt_rand() ?>">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 'PIXEL_ID_CODE'); // Insert your pixel ID here.
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=PIXEL_ID_CODE&ev=PageView&noscript=1"
        /></noscript>

        <!-- Facebook Pixel Code - tracciamento eventi sui pulsanti -->
        <script>
        jQuery('.cabi_block__cta').click(function() {
            fbq('trackCustom', 'EVENT_NAME', {
                id: 'cta_click',
                value: 0.5,
                currency: 'EUR'
            });
        });
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXX-X"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-XXXXXXXX-X', { 'anonymize_ip': true });
        </script>

        <title>Title</title>
    </head>

    <body>

        <section class="cabi_block cabi_block--hero" style="background: url('https://picsum.photos/1920/700') no-repeat center top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lorem ipsum dolor sit h1</h1>
                        <h2>Vel volutpat elit finibus a h2</h2>
                        <p>Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        <p>Epsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit</p>
                        <div class="cabi_block__button"><a href="#" class="cabi_block__link cabi_block__cta">Call to action</a></div>
                    </div>
                    <div class="cabi_block--form col-md-6">
                        <form method="post" action="thank-you.html">
                            <input class="cabi_block--input" placeholder="Il tuo nome" type="text" name="nome" id="nome">
                            <input class="cabi_block--input" placeholder="La tua email" type="email" name="email" id="email">
                            <p><input type="checkbox" name="privacy" id="privacy">Lorem ipsum dolor sit amet</a>, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor.</p>
                            <input class="cabi_block--submit" type="submit" value="Invia">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="cabi_block">
            <div class="container">
                <h1>Lorem ipsum dolor sit h1</h1>
                <p><a href="#">Lorem ipsum dolor sit amet</a>, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus. Nam laoreet enim turpis, vel volutpat elit finibus a. Nullam mi elit, molestie a feugiat at, ultrices at nulla.</p>
            </div>
        </section>

        <section class="cabi_block cabi_block--centered">
            <div class="container">
                <h1>Lorem ipsum dolor sit h1</h1>
                <h2>Etiam mollis lacinia libero ut congue h2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. <a href="#">Ut auctor quam</a> ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus. Nam laoreet enim turpis, vel volutpat elit finibus a. Nullam mi elit, molestie a feugiat at, ultrices at nulla.</p>
            </div>
        </section>

        <section class="cabi_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Etiam mollis lacinia libero ut congue h2</h2>
                        <h3>Sed vel porttitor urna h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus. Nam laoreet enim turpis, vel volutpat elit finibus a. Nullam mi elit, molestie a feugiat at, ultrices at nulla.</p>
                        <div class="cabi_block__button"><a href="#" class="cabi_block__link cabi_block__cta">Call to action</a></div>
                    </div>
                    <div class="col-md-6">
                        <h2>Etiam mollis lacinia libero ut congue h2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus. Nam laoreet enim turpis, vel volutpat elit finibus a. Nullam mi elit, molestie a feugiat at, ultrices at nulla.</p>
                        <div class="cabi_block__button cabi_block__button--right"><a href="#" class="cabi_block__link cabi_block__cta">Call to action</a></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cabi_block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2>Etiam mollis lacinia libero ut congue h2</h2>
                            <div class="cabi_block__video">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/w03-ddqY-AE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Etiam mollis lacinia libero h2</h2>
                            <ul>
                                <li>lorem ipsum</li>
                                <li>dolor sit amet</li>
                                <li>consectetur adipiscing</li>
                                <li>rutrum malesuada</li>
                            </ul>
                            <h3>Etiam mollis lacinia libero h2</h3>
                            <ul>
                                <li>lorem ipsum</li>
                                <li>dolor sit amet</li>
                                <li>consectetur adipiscing</li>
                                <li>rutrum malesuada</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cabi_block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Cover image</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        </div>
                        <div class="col-md-6 cabi_block__coverimage" style="background: url('https://picsum.photos/768/768') no-repeat center top">
                        </div>
                    </div>
                </div>
            </section>
            <section class="cabi_block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 cabi_block__coverimage">
                                <img class="cabi_block__image" src="https://picsum.photos/768/768">
                            </div>
                            <div class="col-md-6">
                                <h2>Simple image</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                            </div>
                        </div>
                    </div>
                </section>

            <section class="cabi_block">
                <div class="container">
                    <div class="row cabi_block__icons">
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                            <img src="https://picsum.photos/100/100">
                            <p>Icona</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <footer class="cabi_block cabi_block--footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Cabiria Soc. Coop.</h3>
                            <address>Via Minozzi 10/a - 43122 Parma (PR)</address>
                            <p>Tel. 0521 282278 | Email <a href="mailto:info@cabiria.net">info@cabiria.net</a></p>
                        </div>
                        <div class="col-md-6 cabi_block__social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

    </body>

</html>