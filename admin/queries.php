<?php
  require('inc/essentials.php');
  require('inc/db_config.php');
  adminLogin();

  if(isset($_GET['seen']))
  {
    $frm_data = filtration($_GET);

    if($frm_data['seen']=='all'){
        $q = "UPDATE `user_queries` SET `seen`=?";
        $values = [1];
        if(update($q,$values,'i')){
            alert('success', 'Marked all as read');
        }
        else{
            alert('error','Operation Failed');
        }
    }
    else{
        $q = "UPDATE `user_queries` SET `seen`=? WHERE `id_no`=?";
        $values = [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success', 'Marked as read');
        }
        else{
            alert('error','Operation Failed');
        }
    }
  }

  if(isset($_GET['del']))
  {
    $frm_data = filtration($_GET);

    if($frm_data['del']=='all'){
        $q = "DELETE FROM `user_queries`";
        if(mysqli_query($con,$q)){
            alert('success', 'All Query Deleted!');
        }
        else{
            alert('error','Operation Failed');
        }

    }
    else{
        $q = "DELETE FROM `user_queries` WHERE `id_no`=?";
        $values = [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success', 'Query Deleted!');
        }
        else{
            alert('error','Operation Failed');
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - User Queries</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
    
    <?php require('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overfow-hidden">
          <h3 class="mb-3"><i class="bi bi-database-fill-add"></i> QUERIES</h3>

          <!-- user queries section -->

          <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">

                <div class="text-end mb-4">
                    <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none bt-sm">
                    <i class="bi bi-book"></i> Mark all as read
                    </a>
                    <a href="?del=all" class="btn btn-danger rounded-pill shadow-none bt-sm">
                    <i class="bi bi-trash"></i> Delete all
                    </a>
                </div>

                <div class="table-responsive-mb" style="height: 450px; overflow-y: scroll;">
                    <table class="table table-hover border">
                        <thead class="sticky-top ">
                            <tr class="bg-dark text-light">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" width="20%">Subject</th>
                            <th scope="col" width="30%">Message</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                                $q = "SELECT * FROM `user_queries` ORDER BY `id_no` DESC";
                                $data = mysqli_query($con,$q);
                                $i=1;

                                while($row = mysqli_fetch_assoc($data))
                                {
                                    $seen = '';
                                    if($row['seen']!=1){
                                        $seen = "<a href='?seen=$row[id_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a> <br>";
                                    }

                                    $seen.="<a href='?del=$row[id_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                    echo<<<query
                                      <tr>
                                        <td>$i</td>
                                        <td>$row[name]</td>
                                        <td>$row[email]</td>
                                        <td>$row[subject]</td>
                                        <td>$row[message]</td>
                                        <td>$row[date]</td>
                                        <td>$seen</td>
                                      </tr>
                                    query;
                                    $i++;
                                }
                           ?>
                        </tbody>
                    </table>
                </div>    

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php require('inc/scripts.php'); ?>

</body>
</html>