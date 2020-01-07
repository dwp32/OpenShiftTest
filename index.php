<?php
#  phpinfo();
#  die;
#var_dump($_POST);

if(isset($_POST['color']))
{
  $color = $_POST['color'];
}
else
{
  echo $color;
  echo "Color is null<br>";
  $color = substr(str_shuffle('ABCDEF0123456789'), 0, 6);
  echo "New color is: $color";
  echo "<form action='' method='POST'>";
  echo "   <input type='hidden' name='color' value='$color'>";
  echo "   <input type='submit'>";
  echo "</form>";
}
echo $color;
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
