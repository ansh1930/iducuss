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
    // session_start();
    if(isset($_SESSION['user'])){
       show();
      //  echo "ank";
    }
    else{
      echo "please login first";
      // echo $_SESSION['user'];
    }
    ?>

    
  <?php
  function show(){
    include("nav.php");

  } 
   ?>

  <div class="container mt-5">
            <?php
            if ($_SERVER['REQUEST_METHOD']  == 'GET') {
              $forumid= $_GET['ID'];
              // echo $forumid;
              # code...
            }

          require("db.php");
          $formun = "SELECT * FROM `forums` WHERE `SR.NO`='$forumid'";
          $card= mysqli_query($result,$formun);
          while ($all= mysqli_fetch_assoc($card)) 
          {
            echo '<div class="jumbotron">
                  <h1 id="forum_name" class="display-4">'.$all['Name'].'</h1>
                  <p class="lead">'.$all['Title'].'</p>
                  <hr class="my-4">
                  <p>'.$all['Description'].'</p>
                  <a class="btn btn-primary btn-lg" href="#" role="button" onclick="demo()">Learn more</a>
                  </div>';
          }
          ?>
  </div>

  <div class="container">
    <div class="row">
          <div class="col-md-12">
              <h4><span class="badge badge-pill badge-primary">Comments</span></h4>
              <form action="comments/comments.php" method="post">
                <div class="form-group">
                  <input type="hidden" name="id"  value="<?php echo $forumid; ?>">
                  <input type="hidden" id="Post_name" name="Post_name" value="">
                  <label>Question</label>
                  <textarea name="Question" id="Question" class="form-control" cols="20" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-warning">POST</button>
                </div>
              </form>
           </div>
    </div>
    <?php  

    require("db.php");
      $show ="SELECT `Q_NO`, `Question`, `forum_name`, `DataTime` FROM `comment` WHERE `forum_ID`= $forumid";
      $comm= mysqli_query($result,$show);
      $coun = mysqli_num_rows($comm);
      if ($coun>0) {
        while($row=mysqli_fetch_assoc($comm)){
          echo '  <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                      <div class="media mt-4">
                          <img src="person.png" width="50px" height="50px" class="mr-3" alt="...">
                          <div class="media-body">
                            <h5 class="mt-0">'.$row['forum_name'].'</h5>
                            <p>'.$row['Question'].'</p>
                      </div>
                </div>
          </div>
        </div>
        </div>';
      }

      }
      else{
        echo '<b>Please enter post</b>';
      }


    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      function demo()
      {
        window.print();
      }
      let h1_name=document.getElementById('forum_name').innerText;
      // console.log(h1_name);
      let post_name= document.getElementById('Post_name').value=h1_name;
      // console.log(post_name);

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>