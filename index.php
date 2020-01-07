<?php
#  phpinfo();
#  die;

$color = substr(str_shuffle('ABCDEF0123456789'), 0, 6);
$colors[$color] = '#' . $color;

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<style>";
echo "body {";
echo "    background-color: #$color;";
echo "}";
echo "</style>";
echo "</head>";
echo "</html>";

?>
