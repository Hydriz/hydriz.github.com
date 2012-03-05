<?php
/**
 *
 * 					host_stats.php
 *
 * This is a simple script to run some command line
 * queries regarding the server this file is being
 * hosted on. Usually used to ensure that disk usage
 * is below maximum level, and to ensure accidental
 * overuse of the free service provided.
 *
 */

?>
<html>
<head>
<title>Host statistics</title>
</head>
<body>
<?php

// Queries:
// Function to query how much disk space is available on the host
$df = shell_exec('df -kh');
$output = "<pre>$df</pre>";
echo $output;
?>
</body>
</html>
