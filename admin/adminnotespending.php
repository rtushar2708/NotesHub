<?php
include('include/adminheader.php');
include('../dbConnection.php');
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">Notes Pending for Approva</p>
    <?php
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Student Id</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col" class="px-5">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                    echo '<th scope="row">'.$row['stu_id'].'</th>';
                    echo '<td>'.$row['stu_name'].'</td>';
                    echo '<td>'.$row['stu_email'].'</td>';
                    echo '<td>';
                    echo '<button type="submit" class="btn btn-success " name="check" value="Check">
                              <i class="fa-solid fa-square-check"></i>
                          </button>
                          <button type="submit" class="btn btn-info " name="view" value="View">
                            <i class="fas fa-pen"></i>
                          </button>
                        <form action="" class="d-inline" method="POST">
                            <input type="hidden" name="id" value='.$row["stu_id"].'>
                            <button type="submit" class="btn btn-dark" name="delete" value="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>';
                    echo '</td>';
                echo '</tr>';
             } ?>
        </tbody>
    </table>
<?php }else{
    echo '<small>No Record found</small>';
    }

    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        }
    }
 ?>



</div>







<?php
include('include/adminfooter.php')
?>