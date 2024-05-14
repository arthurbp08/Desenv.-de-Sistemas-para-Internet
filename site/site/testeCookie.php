<?php

//Uma forma de criar um cookie na máquina do usuário.
$cookie_name = 'user';
$cookie_value = 'John Doe';
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/'); // 86400 = 1 day

//Outra forma de criar o coockie na máquina do usuário.
setcookie('email', 'a@a', time() + (86400 * 30), '/'); // 86400 = 1 day


?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo 'Cookie named ' . $cookie_name . ' is not set!';
} else {
  echo 'Cookie ' . @$cookie_name . ' is set!<br>';
  echo 'Value is: ' . @$_COOKIE[$cookie_name];
  //Imprime o e-mail.
  echo '<br>Email = '. @$_COOKIE['email'];
  //<p>Email:<input type="email" value="a@a"></p>
  echo '<p>E-mail: <input type="email" value="'.@$_COOKIE['email'].'"></p>';
}
?>

</body>
</html>