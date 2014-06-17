<?php get_header(); // Inkludiert header.php ?>

<div id="content_around">
	<div id="content_left">
		<?php
			// WORPRESS LOOP STARTEN
			if(have_posts())			// Wenn Inhalte vorhanden...
			{
				while(have_posts())		// Alle Artikel/Seiten iterieren
				{
					if(is_page())		// Nur wenn wir uns auf einer Seite befinden
					{
						echo '<p>Wir sind auf einer Unterseite</p>';
					}

					the_post();			// Inhalte des Artikels/Seite zur Verfügung stellen
					echo '<article>';
					the_title('<h3>','</h3>');		// Gibt den Titel aus
					the_content();					// Gibt den Inhalt aus

					if(is_home() || is_single())		// Nur auf der Startseite oder auf einer Artikelseite
					{
						echo "<div class='the_time'>";
						echo "geschrieben von ";
								the_author();			// Gibt den Autorennamen aus
						echo " am ";
								the_time('d.m.Y');		// Gibt das Datum aus
						echo "</div>";
						echo '</article>';

						if(has_Tag())
						{
							echo 'Tags: '; the_tags();						// Gibt Schlagwörter aus
						}

						the_category(' - ');
					}
				}
			}
		?>
	</div>
	<div id="content-right">
		<?php
			get_sidebar();
		?>
	</div>
	<div id="clear"></div>
</div>

<?php get_footer(); // Inkludiert footer.php ?>