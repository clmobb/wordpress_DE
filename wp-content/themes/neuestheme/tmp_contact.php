<?php

	/**
	 * Template Name: Mein neues Template
	 */

	get_header(); // Inkludiert header.php ?>

<div id="content_around">
	<div id="content_left">
		<?php
			// WORPRESS LOOP STARTEN
			if(have_posts())			// Wenn Inhalte vorhanden...
			{
				while(have_posts())		// Alle Artikel/Seiten iterieren
				{
					the_post();			// Inhalte des Artikels/Seite zur Verfügung stellen
					the_title('<h3>','</h3>');		// Gibt den Titel aus
					the_content();					// Gibt den Inhalt aus
				}
			}
		?>
		<h1>MEIN KONTAKT TEMPLATE</h1>
				<form>
					Name <input type="text"><br>
					Vorname <input type="text"><br>
					<input type="submit">
				</form>
	</div>
	<div id="content-right">
	</div>
	<div id="clear"></div>
</div>

<?php get_footer(); // Inkludiert footer.php ?>