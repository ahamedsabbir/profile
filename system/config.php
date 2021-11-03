<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache"); 
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
header("Cache-Control: max-age=2592000");
define("TITLE", "Blog Site");
define("DESCRIPTION", "sabbir Blog Site. ");
define("KEYWORDS", "Blog Site, java tutorial, css tutorial, php tutorial, ");
define("AUTHOR", "Israt Ahamed Sabbir");
define("DB_NAME", "mvc_profile");
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "1928374655");
define("BASE_URL", "index.php?url=");
define("CSS", "app/view/");
define("SCRIPT", "app/view/");
?>