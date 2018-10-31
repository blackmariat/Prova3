<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 dia (em segundos)
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "O cookie '" . $cookie_name . "' não existe!";
} else {
    echo "Cookie '" . $cookie_name . "' inserido!<br>";
    echo "O valor é: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

