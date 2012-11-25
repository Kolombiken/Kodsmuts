<?php
/* Welcome to kodsmuts :)
Thanks to the fantastic work by kodsmuts users, we've now
the ability to translate kodsmuts into different languages.

Developed by: Eddie Machado
URL: http://themble.com/kodsmuts/
*/



// Adding Translation Option
load_theme_textdomain( 'kodsmutstheme', get_template_directory() .'/library/translation' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/library/translation/$locale.php";
if ( is_readable($locale_file) ) require_once($locale_file);








?>