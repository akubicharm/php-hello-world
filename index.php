<?php
echo "<h1>Hello OpenShift 2017-01-20<h1>";
echo "Greetings:";
echo getenv("GREETINGS");
echo "<br>";

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
