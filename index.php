<?php
echo "<h1>Hello OpenShift<h1>";
echo "Greetings:";
echo getenv("GREETINGS");

<br>

echo "Container Name: ";
echo gethostname();
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>
