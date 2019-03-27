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
                    <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php 
    // per usare Elementor nel backend ho bisogno di wp_footer
    if (Wireland::isElementorActive() && Wireland::isMadeWithElementor()) wp_footer();
    ?>
</footer>