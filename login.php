<?php
require("db.php");
if ($_SERVER['REQUEST_METHOD']== 'POST')
    {
      session_start();
        $email = $_POST['email'];
        $password=$_POST['password'];
        // echo $email.$password;

        if(isset($_POST['email'])!="")
        {
            $check ="SELECT `SR.NO`, `Name`, `email`, `username`, `pass` FROM `data` WHERE `email`='$email' AND `pass`='$password'";
            $data = mysqli_query($result,$check);

            $count = mysqli_num_rows($data);
            if ($count==1)
            {
              while ($info= mysqli_fetch_assoc($data))
                {
                    // 
                    $_SESSION['user']= $info['username'];
                    header("Location:home.php");
                    // $id= $info['username'];
                    // echo $_SESSION['user'];
                    // echo "login done..";

                }

            }
            else
            {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Login Fail!</strong> Please check the username and password.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            }
        }
        else{
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Please fill the textboxes!</strong> Please check the username and password.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }


    }
?>
