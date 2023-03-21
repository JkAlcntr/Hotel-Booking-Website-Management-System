<?php
  require('../inc/db_config.php');
  require('../inc/essentials.php');
  adminLogin();

  if(isset($_POST['add_room']))
  {
    $feature = filtration(json_decode($_POST['feature']));
    $addons = filtration(json_decode($_POST['addons']));

    $frm_data = filtration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO `rooms`(`name`, `area`, `price`, `quantity`, `adult`, `children`, `description`) VALUES (?,?,?,?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['area'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children'],$frm_data['description'],];

    if(insert($q1,$values,'siiiiis')){
      $flag = 1;  
    }

    $room_id = mysqli_insert_id($con);

    $q2 = "INSERT INTO `room_addons`(`room_id`, `addons_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q2))
    {
      foreach($addons as $f){
        
        mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
        mysqli_stmt_execute($stmt);
      }
      mysqli_stmt_close($stmt);
    }
    else{
      $flag = 0;
      die('query cannot be prepared - insert');
    }

    $q2 = "INSERT INTO `room_feature`(`room_id`, `feature_id`) VALUES (?,?)";

    if($stmt = mysqli_prepare($con,$q3))
    {
      foreach($feature as $f){
        
        mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
        mysqli_stmt_execute($stmt);
      }
      mysqli_stmt_close($stmt);
    }
    else{
      $flag = 0;
      die('query cannot be prepared - insert');
    }

    if($flag){
      echo 1;
    }
    else{
      echo 0;
    }

  }
?>