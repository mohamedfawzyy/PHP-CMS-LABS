<?php 
    require "./layouts/header.php";
    require "./config.php";
    $selectUsers="select * from users";
    $result=mysqli_query($conn, $selectUsers);
    $usersBox="";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $usersBox .=
        "
            <table class='table table-striped mt-3'>
            <thaed>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Mail Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
        ";
        while($row = mysqli_fetch_assoc($result)) {
            $usersBox .="<tr>";
            foreach ($row as $key => $value) {
                $usersBox .="<td>$value</td>";
              
            }
            $usersBox.= "
            <td>
            <a href='view.php?user_id={$row['id']}' ><i  class='text-info fa-solid fa-eye'></i></a>
            <a href='edit.php?user_id={$row['id']}' ><i class='text-warning fa-solid fa-pen'></i></a>
            <a href='delete.php?user_id={$row['id']}' ><i class='text-danger fa-solid fa-trash-can'></i></a>
            </td>
            ";
            $usersBox.="</tr>";
        }
        $usersBox .= "
        </tbody>
        </table>
        ";

      } else {
        $usersBox="<div class='alert alert-warning text-center'>No users in your Data Base</div>";
      }

?>

    <div class="container">
        <div class="header d-flex justify-content-between p-2 mt-3 rounded-2">
            <h1>Manage Users system</h1>
            <a href="./addUser.php" class="btn btn-success align-content-center"><i class="fa-solid fa-plus"></i> Add New User</a>
        </div>
        <?= $usersBox;?>
    </div>
   <?php
    require "./layouts/footer.php";
   ?>