<?php include('partials/menu.php');?>

<div class="main-content">
  <div class="wrapper">
    <h1>Add Admin</h1>
    
    <br/> <br/>

    <form action="" method="POST">
        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
            </tr>

            <tr>
                <td>Username:</td>
                <td>
                    <input type="text" name="username" placeholder="Your Username">
                </td>
            </tr>

            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="password" placeholder="Your Password">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>
        </table>


    </form>
  </div>
</div>

<?php include('partials/footer.php');?>

<?php 
    //Process the value from for and save it in Database

    //Checking if Submit botton was clicked
    //it will check if submit was pushed using post method

    if(isset($_POST['submit']))//if value was passed
    {
        //Button clicked

        //Getting data from form
        $full_name=$_POST['full_name'];//using name property form font
        $username=$_POST['username'];
        $password=md5($_POST['password']);//MD5 is a way to encrypt password

        $sql="INSERT INTO `tbl_admin` (`id`, `ful_name`, `username`, `password`) VALUES (NULL, '$full_name', '$username','$password')";
        $res= mysqli_query($con, $sql) ;
       
       //Checking if data was inserted
       if($res==TRUE){
        //Data Inserted
        echo "Data Inserted";
    
       }
       else{
        //Failed to insert data
        echo "Failed to insert data";
        


    }
}
    
?>