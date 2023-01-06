<!-- <pre>
<?php var_dump($_SERVER); ?>
</pre>
 -->

 <?php

require "vendor/autoload.php";

use Neptunia\Config\Database\UserDatabase;

$db = new UserDatabase();

var_dump($db);

?>