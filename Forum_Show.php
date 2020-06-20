<div class="container">

<div class="row">
<?php

require("db.php");
$formun = "SELECT * FROM `forums`";
$card= mysqli_query($result,$formun);
while ($all= mysqli_fetch_assoc($card)) 
{
    echo '
        <div class="col-md-4 sm-12  mt-4">
         <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/500x300/?Coding,'.$all['Name'].'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$all['Name'].'</h5>
            <p class="card-text">'.$all['Title'].'</p>
            <a href="check.php?ID='.$all['SR.NO'].'" class="btn btn-primary">Get Forums</a>
        </div>
        </div>
        </div>';
} 
?>
            <div class="col-md-4 mt-4">
            <div class="card" style="width: 18rem;">
                    <img src="Add.jpg"width="500px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#newforum">Add new Forums</button>
                    </div>
                    </div>
            </div>
            </div>
            </div>
</div>

        <!-- ADD FORUM -->
        <div class="modal fade" id="newforum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="addforums.php" method="post">
      <div class="modal-body">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="tetx" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" aria-multiline="true" class="form-control" name="desc" id="desc">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD FORUM</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>