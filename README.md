# Wireland
Mini framework per velocizzare la creazione di landing page / thank you page con WordPress. Rimuove tutte le librerie e gli stili attivi e utilizza solo risorse da CDN, tra cui **Boostrap** per il layout delle griglie e **animate.css** per le animazioni. E' possibile creare le pagine da codice lavorando sui template forniti o utilizzare Elementor.

## Come si usa?

* si scarica il repo
* si installa e si attiva il plugin

### Landing page

* si crea una nuova pagina
* gli si assegna il template "**Wireland landing**"
* si modifica il template in `assets/templates/landing/template-parts` oppure lo si crea con l'editor visuale di Elementor

Da *Impostazioni > Wireland* è possibile inserire i *traking code* di **Analytics** e **Facebook Pixel**.

### Thank you page

Se nella landing page si prevede di utilizzare un form con relativa thank you page ecco i passi da seguire:

* si crea una nuova pagina
* gli si assegna il template "**Wireland thankyou**"
* si modifica il template in `assets/templates/thankyou` oppure lo si crea con l'editor visuale di Elementor
* se si è scelto di usare Elementor è necessario includere il form che rimanda alla thank you page con lo shortcode `[wireland-form]`
* in *Impostazioni > Wireland* si seleziona la thank you page creata e si inserisce la mail a cui inviare i dati del form di contatto

