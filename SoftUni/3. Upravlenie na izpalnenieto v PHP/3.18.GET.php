<form>
    <input type = "text" name = "user"/>
    <input type = "submit"/>
</form>
<?php

if (isset($_GET['user'])) {
    echo "Привет, ". $_GET['user'];
}

 ?>
