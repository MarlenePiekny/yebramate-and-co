<?php
function debug($var) {
	highlight_string("<?php\n".var_export($var, true).";\n?>");
}

//Afficher les erreurs php
error_reporting(E_ALL);
ini_set("display_errors", 1);
