<?php
include('include/adminheader1.php');
include('../dbConnection.php');
?>

<?php
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
        $row = $result->num_rows;
?>

            <!-- cards -->
            <div class="col-sm-9 mt-5 custom-table">
                <div class="row mx-5 text-center">
                    <!-- card-1 -->
                    <div class="col-sm-4 mt-5">
                        <div class="cards text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Students</div>
                            <div class="card-body">
                                <?php
                                  echo '<h4 class="card-title">'.$row.'+</h4>'
                                ?>
                                <a href="admin_student.php" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- card-2 -->
                    <div class="col-sm-4 mt-5">
                        <div class="cards text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Notes Pending</div>
                            <div class="card-body">
                                <h4 class="card-title">5+</h4>
                                <a href="" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <!-- card-3 -->
                    <div class="col-sm-4 mt-5">
                        <div class="cards text-white bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Notes Approved</div>
                            <div class="card-body">
                                <h4 class="card-title">5+</h4>
                                <a href="" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            


<?php
include('include/adminfooter.php')
?>