<?php

setcookie("InfoUser-Login", 0, time()-3600, "/");
header('Location: index.html');

?>