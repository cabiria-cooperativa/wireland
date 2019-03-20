jQuery(document).ready(function($) {
	
	/**
     * Smooth scroll
     * https://github.com/cferdinandi/smooth-scroll
     */
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 300,
        speedAsDuration: true
    });    

    /**
     * Validazione form per thank you page
     */

    $('#to-thank-you-page').submit(function(e){
        var error = false;
        var target;

        $(".cabi_block--form__error_message").remove();
        $("#privacy").parent().removeClass('cabi_block--form__error_warning');
        $("#to-thank-you-page input").each(function(index) {
            $(this).removeClass('cabi_block--form__error_warning');
        });

        target = $("#email");
        if ($(target).val() === "") {
            error = true;
            $(target).addClass('cabi_block--form__error_warning');
            $(target).attr('placeholder', 'Email: campo obbligatorio!');
        }

        /* rimuovo il messaggio di errore */
        $('.cabi_block--form__error_message').remove();

        /* accettazione privacy */
        target = $("#privacy");
        if (!$(target).is(':checked')) {
            error = true;
            $(target).parent().addClass('cabi_block--form__error_warning');
        }

        if (error) $("#to-thank-you-page").append("<div class='cabi_block--form__error_message'>Verifica i campi contrassegnati per proseguire!</div>");
        return !error;
    });
    
});