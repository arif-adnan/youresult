<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $rollno=$_POST['rollno'];
    $bangla1=$_POST['bangla1'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $physics1=$_POST['physics1'];
    $chemistry1=$_POST['chemistry1'];
    $bangla2=$_POST['bangla2'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $physics2=$_POST['physics2'];
    $chemistry2=$_POST['chemistry2'];
    
    $sql="UPDATE `user_mark` SET  `u_bangla1` = '$bangla1', `u_english1` = '$english1', `u_math1` = '$math1', `u_physics1` = '$physics1', `u_chemistry1` = '$chemistry1', `u_bangla2` = '$bangla2', `u_english2` = '$english2', `u_math2` = '$math2', `u_physics2` = '$physics2', `u_chemistry2` = '$chemistry2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>