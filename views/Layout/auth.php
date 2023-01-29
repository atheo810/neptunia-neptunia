<?php include "../views/Component/header.php"; ?>
<?php /*
|--------------------------------------------------------------------------
| include_once __DIR__ . "/header.php"
|--------------------------------------------------------------------------
| we include the header.php which locate in views/Layout/header.php
| 
|
*/
?>

<?php include "../views/Component/navbar.php"; ?>
<?php /*
|--------------------------------------------------------------------------
| include_once __DIR__ . "/navbar.php"
|--------------------------------------------------------------------------
| we include the navbar.php which locate in views/Layout/navbar.php
| 
|
*/
?>

<div class="container">
	{{content}}
</div>
<?php /*
|--------------------------------------------------------------------------
| div class="container" {{content}}
|--------------------------------------------------------------------------
| it's where the content of views/Pages file belong
| 
|
*/
?>
<?php include "../views/Component/footer.php"; ?>
<?php /*
|--------------------------------------------------------------------------
| include_once __DIR__ . "/footer.php"
|--------------------------------------------------------------------------
| we include the footer.php which locate in views/Layout/footer.php
| 
|
*/
?>