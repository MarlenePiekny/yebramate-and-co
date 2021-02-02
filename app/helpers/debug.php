<?php
function debug($var) {
	highlight_string("<?php\n".var_export($var, true).";\n?>");
}
