<?php
session_start();
error_reporting(0);
// include_once "./inc/db_conf.php";
//include_once "./inc/mysql.php";
// include_once "./inc/pdo.php";
include_once "./inc/def.php";

include_once "./lib/phpmailer/config.php";
include_once "./lib/phpmailer/class.phpmailer.php";

include_once "./inc/functions.php";


if(isset($_POST['form_task'])){ $task = trim($_POST['form_task']);} else{
  echo "У Вас слишком медленный интернет либо Вы пытаетесь заполучить доступ к запрещенному файлу. Вернитесь на сайт и повторите попытку";
  die();
}


$admin_emails = Array("7iomka@gmail.com");

// $sql_emails = "SELECT `emails` FROM `admins` WHERE `id` =1 LIMIT 1 ";
// $row_emails = $DBH->query($sql_emails)->fetch();
// $admin_emails = explode(";", $row_emails['emails']);

// Получаем тему письма
$form_subject = trim($_POST['form_subject']);

switch($task){


  case "get_callback":

  $user_name = trim($_POST['user_name--callback']); //имя
  $user_phone = trim($_POST['user_phone--callback']); //тел
  break;


  case "get_gift":

  $user_name = trim($_POST['user_name--gift']); //имя
  $user_phone = trim($_POST['user_phone--gift']); //тел
  break;


  case "get_prices":

  $user_name = trim($_POST['user_name--prices']); //имя
  $user_phone = trim($_POST['user_phone--prices']); //тел
  break;


  case "get_consult":

  $user_name = trim($_POST['user_name--consult']); //имя
  $user_phone = trim($_POST['user_phone--consult']); //тел
  // $user_email = trim($_POST['user_email--consult']); //email
  // $user_site = trim($_POST['user_site--consult']); //сайт
  break;


  case "get_visit":

  $user_name = trim($_POST['user_name--visit']); //имя
  $user_phone = trim($_POST['user_phone--visit']); //тел
  break;


  case "get_install":

  $user_name = trim($_POST['user_name--install']); //имя
  $user_phone = trim($_POST['user_phone--install']); //тел
  break;


  case "get_album":

  $user_name = trim($_POST['user_name--album']); //имя
  $user_phone = trim($_POST['user_phone--album']); //тел
  break;


  case "get_order":

  $user_name = trim($_POST['user_name--order']); //имя
  $user_phone = trim($_POST['user_phone--order']); //тел
  break;

  // Форма с модалок - Заказ разных пакетных планов
  // case "get_order":
  // $tarif_number = intval(trim($_POST['tarif']));
  // if($tarif_number == 1) {
  //   $tarif = "Пакет «Начальный»";
  // } elseif($tarif_number == 2) {
  //   $tarif = "Пакет «Бизнес»";
  // } elseif($tarif_number == 3) {
  //   $tarif = "Пакет «Премиум»";
  // }
  // $user_name = trim($_POST['user_name--order']); //имя
  // $user_phone = trim($_POST['user_phone--order']); //тел
  // $task_name = "Заказ - " . $tarif;
  // break;
  //

}
  // turn on for bots with disabled javascript to prevent spambot actions
    // if($user_name == ""){
    //  $data['is_err'] = 1;
    //  $data['err'] = "Не указано имя";
    //  echo json_encode($data);
    //  exit;
    // }

    // if($user_phone == ""){
    //  $data['is_err'] = 1;
    //  $data['err'] = "Не указан телефон";
    //  echo json_encode($data);
    //  exit;
    // }
    // if($user_email == ""){
    //  $data['is_err'] = 1;
    //  $data['err'] = "Не указан email";
    //  echo json_encode($data);
    //  exit;
    // }

    $subj = "Сообщение с сайта ЩЛЗ - ".$form_subject;
    $mes = "";
    $mes .= "<html>
                      <head>
                        <title>Сообщение с сайта ЩЛЗ - ".$form_subject."</title>
                      </head>
                    <body>";
    $mes .= "<table>";
    $mes .= "<tr><th colspan='2'>Данные с формы</th></tr>";
    $mes .= "<tr><td>Имя:</td><td>".$user_name."</td></tr>";
    $mes .= "<tr><td>Тел.:</td><td>".$user_phone."</td></tr>";
    // if($user_email!=""){
    //     $mes .= "<tr><td>Вопрос:</td><td>".$user_email."</td></tr>";
    // }
    // if($user_site!=""){
    //     $mes .= "<tr><td>Сайт:</td><td>".$user_site."</td></tr>";
    // }
    // if($tarif!=""){
    //     $mes .= "<tr><td>Тариф:</td><td>".$tarif."</td></tr>";
    // }
    $mes .= "<tr><td>Цель:</td><td>".$form_subject."</td></tr>";

    $mes .= "</table>";
    $mes .= "</body></html>";

    foreach($admin_emails as $email){
     $email = trim($email);
     notify_admin($email,$subj,$mes);
    }
    $data['is_err'] = 0;
    echo json_encode($data);
    exit;





  ?>
