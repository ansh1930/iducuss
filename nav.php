
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Iducuss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Forums
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php 
          require("db.php");
          $show ="SELECT `Name` FROM `forums`";
          $comm= mysqli_query($result,$show);
          while($nav=mysqli_fetch_assoc($comm)){
            echo '<a class="dropdown-item" href="#">'.$nav['Name'].'</a>';
          }
        ?>
          <!-- <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
      </li>
    </ul>
    <?php
        if(isset($_SESSION['user'])){
          echo '<form class="form-inline my-2 my-lg-0">
          <button class="btn btn-outline-success my-2 my-sm-0" id="loginout" type="button">
            <a href="logout.php">Logout</a>
          </button>
        </form>';
        }
        else
        {
        echo '
        <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0 mr-2" id="login" data-toggle="modal" data-target="#LOGIN" type="button">Login</button>
        <button class="btn btn-outline-success my-2 my-sm-0 mr-2" id="login" data-toggle="modal" data-target="#SIGNUP" type="button">Signup</button>
        </form>';
        }

    ?>

  </div>
  <input type="hidden" id="sys" value="<?php echo $_SESSION['user'];  ?>">
  <script>
    const id= document.getElementById('sys').value;
    console.log(id);
    const logout = document.getElementById('loginout');
    const login = document.getElementById('login');
    
  </script>
</nav>


<!-- Lofin Modal -->
<div class="modal fade" id="LOGIN" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
                <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                        <form action="login.php" method="post">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-outline-warning">Login</button>
                        </div>
                      </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>


        <!-- Signup Modal -->

        <div class="modal fade" id="SIGNUP" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/ank/register.php" method="post">
      <div class="modal-body">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="pass" id="pass">
    </div>
    <div class="form-group">
        <label>Conform Password</label>
        <input type="password" class="form-control" name="cpass" id="cpass">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">REGister</button>
      </div>
      </form>
    </div>
  </div>
</div>