<?php

	// Sidebar Funktion aktivieren
	register_sidebar();

	// Artikelbild Funktion aktiviern
	add_theme_support('post-thumbnails');

	// Dynamische Hintergründe erlauben
	add_theme_support('custom-background');

	// Eigene Shortcodes definieren
	function my_contact()
	{
		return '<form><input type="text"></form>';
	}
	add_shortcode('form','my_contact');