<?php 
/*
 * Template Name: Wireland default
 * Template Post Type: page
 */ 
?>

<?php include_once(dirname(__FILE__) . '/../inc/head.php') ?>

    <body>

        <section class="cabi_block cabi_block--hero" style="background: url('https://picsum.photos/1920/700') no-repeat center top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lorem ipsum dolor sit h1</h1>
                        <h2>Vel volutpat elit finibus a h2</h2>
                        <p>Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        <p>Epsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit</p>
                        <div class="cabi_block__button"><a data-scroll href="#neartofooter" class="cabi_block__link cabi_block__cta">Call to action</a></div>
                    </div>
                    <div class="cabi_block--form col-md-6">
                        <form id="to-thank-you-page" method="post" action="<?php echo Wireland::getThankYouPageUrl() ?>">
                            <?php wp_nonce_field('to_thank_you_page', 'to_thank_you_page_nonce') ?>
                            <input class="cabi_block--input" placeholder="Il tuo nome" type="text" name="nome" id="nome">
                            <input class="cabi_block--input" placeholder="La tua email" type="email" name="email" id="email">
                            <small><span class="privacy_container"><input type="checkbox" name="privacy" id="privacy"></span><a href="" target="_blank">Ho preso atto dell'informativa</a> e acconsento, ai sensi dell’art. 13 del D.Lgs. n. 196/2003, al trattamento ed alla comunicazione dei miei dati personali ad opera dei soggetti indicati nella predetta informativa e nei limiti di cui alla stessa. Rimane fermo che tale consenso è condizionato al rispetto delle disposizioni della vigente informativa.</small>
                            <input class="cabi_block--submit" type="submit" name="submit" value="Invia">
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

        <section class="cabi_block cabi_block--chequered cabi-block--cover">
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
        
        <section class="cabi_block cabi_block--chequered">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 cabi_block__coverimage" style="background: url('https://picsum.photos/768/768') no-repeat center top">
                    </div>
                    <div class="col-md-6">
                        <h2>Cover image</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="cabi_block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
							<img alt="" class="cabi_block__image" src="<?php echo Wireland::getImgPath() ?>pollon.jpg">
                        </div>
                        <div class="col-md-6">
                            <h2>Simple image</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut consectetur turpis, sit amet aliquam nulla. Ut auctor quam ac quam semper porttitor. Etiam mollis lacinia libero ut congue. Vestibulum facilisis ipsum vitae risus elementum condimentum quis a elit. Suspendisse diam ipsum, congue sit amet dapibus et, rutrum malesuada elit. Sed vel porttitor urna. Phasellus placerat ornare cursus.</p>
                        </div>
                    </div>
                </div>
            </section>

        <section id="neartofooter" class="cabi_block">
            <div class="container">
                <div class="row cabi_block__icons">
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                    <div class="col-12 col-sm-4 col-lg-2 cabi_block__icon">
                        <img alt="" src="https://picsum.photos/100/100">
                        <p>Icona</p>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once(dirname(__FILE__) . '/../inc/footer.php') ?>

    </body>

</html>