<?php
<<<<<<< HEAD

    // include '../connection.php';
=======
ini_set('display_errors','1');
    include '../connection.php';
>>>>>>> 62c2c783c9683aa8bf3ebeaf4522a9c8329c5767

    $tag_name = $_POST['datapost'];
    $query = "select * from doctor_data where tag_name= '$tag_name'";

    $fire_query = mysqli_query($con, $query);
    // if($fire_query){
    //     echo " ";
    // }  

    $no_of_selected_rows = mysqli_num_rows($fire_query);   // it will returns the number rows are selected by $query
    if ($no_of_selected_rows) {
            ?>
                <option class="hidden" value="" selected disabled>Select Doctor</option>
            <?php
            while ($rows = mysqli_fetch_array($fire_query)) {
            ?>
                <option value="<?php echo $rows['doctor_id']; ?>"><?php echo $rows['doctor_name'] . " (" . $rows['degree'] . ")";  ?></option>
            <?php
            }
        } 
    else {
        ?>
            <option class="hidden" value="" selected disabled>Doctors are Not Available</option>
        <?php
    }

?>
