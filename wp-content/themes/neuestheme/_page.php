<?php get_header(); // Inkludiert header.php ?>

<div id="content_around">
	<div id="content_left">
		<?php
			// WORPRESS LOOP STARTEN
			if(have_posts())			// Wenn Inhalte vorhanden...
			{
				while(have_posts())		// Alle Artikel/Seiten iterieren
				{

					echo '<h1>Wir sind auf einer Unterseite</h1>';


					the_post();			// Inhalte des Artikels/Seite zur Verfügung stellen
					echo '<article>';
					the_title('<h3>','</h3>');		// Gibt den Titel aus
					the_content();					// Gibt den Inhalt aus
				}
			}
		?>
	</div>
	<div id="content-right">
	</div>
	<div id="clear"></div>
</div>

<?php get_footer(); // Inkludiert footer.php ?>