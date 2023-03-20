<?php
  require('../inc/db_config.php');
  require('../inc/essentials.php');
  adminLogin();

  if(isset($_POST['add_feature']))
  {
    $frm_data = filtration($_POST);

    $q = "INSERT INTO `feature`(`name`) VALUES (?)";
      $values = [$frm_data['name']];
      $res = insert($q, $values, 's');
      echo $res;
        
  }

  if(isset($_POST['get_feature']))
  {
    $res = selectAll('feature');
    $id = 1;

    while($row = mysqli_fetch_assoc($res))
    {
      echo <<<data
      <tr>
        <td>$id</td>
        <td>$row[name]</td>
        <td>
          <button type="button" onclick="rem_feature($row[id_no])" class="btn btn-danger btn-sm shadow-none">
            <i class="bi bi-trash"></i> Delete
          </button>        
        </td>
      </tr>        
      data;
      $id++;
    }
  }

  if(isset($_POST['rem_feature']))
  {
    $frm_data = filtration($_POST);
    $values = [$frm_data['rem_feature']];

    $q = "DELETE FROM `feature` WHERE `id_no`=?";
    $res = delete($q,$values,'i');
    echo $res;

    $pre_q = "SELECT * FROM `feature` WHERE `id_no`=? ";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

  }

  if(isset($_POST['add_facilities']))
  {
    $frm_data = filtration($_POST);

    $img_r = uploadImage($_FILES['picture'], FEATURES_FOLDER);

    if($img_r == 'inv_img'){
      echo $img_r;
    }
    else if($img_r == 'inv_size'){
      echo $img_r;
    }
    else if($img_r == 'upd_failed'){
      echo $img_r;
    }
    else {
      
      $q = "INSERT INTO `facilities`(`picture`, `name`, `description`)  VALUES (?,?,?)";
      $values = [$img_r,$frm_data['name'],$frm_data['description']];
      $res = insert($q, $values, 'sss');
      echo $res;
    }
    
  }

  if(isset($_POST['get_facilities']))
  {
    $res = selectAll('facilities');
    $id = 1;
    $path = FEATURES_IMG_PATH;

    while($row = mysqli_fetch_assoc($res))
    {
      echo <<<data
      <tr class="align-middle">
        <td>$id</td>
        <td><img src="$path$row[picture]" width="100px"></td>
        <td>$row[name]</td>
        <td>$row[description]</td>
        <td>
          <button type="button" onclick="rem_facilities($row[id_no])" class="btn btn-danger btn-sm shadow-none">
            <i class="bi bi-trash"></i> Delete
          </button>        
        </td>
      </tr>        
      data;
      $id++;
    }
  }

  if(isset($_POST['rem_facilities']))
  {
    $frm_data = filtration($_POST);
    $values = [$frm_data['rem_facilities']];

    $pre_q = "SELECT * FROM `facilities` WHERE `id_no`=? ";
    $res = select($pre_q,$values,'i');
    $img = mysqli_fetch_assoc($res);

    if(deleteImage($img['picture'],FEATURES_FOLDER)){
      $q = "DELETE FROM `facilities` WHERE `id_no`=?";
      $res = delete($q,$values,'i');
      echo $res;
    }
    else{
      echo 0;
    }
  }
?>