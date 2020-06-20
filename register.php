<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <?php


$server= "localhost";
$user="root";
$pass="";
$DB="iducuss";


if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $Name= $_POST['name'];
    $username= $_POST['user'];
    $email= $_POST['email'];
    $password= $_POST['pass'];
    $cpassword=$_POST['cpass'];

    if ($password == $cpassword) {

      
      
      $result= mysqli_connect($server,$user,$pass,$DB);

        $query ="INSERT INTO `data` (`SR.NO`, `Name`, `email`, `username`, `pass`) VALUES (NULL, '$Name', '$email', '$username', '$password')";

        $inser= mysqli_query($result,$query);
        if ($inser)
         {

          echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
          <strong>Signup Sucessfully done  please login!</strong> Please check the username and password.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
            
            header("Location:index.php");

            
        }

        else {
            echo "insert not done";
        }
    }
    else {
        echo "PASSWOWRD not same";
    }
    
}

?>

<script>
// $('#staticBackdrop').modal(options)
$('#staticBackdrop').modal('toggle')
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>