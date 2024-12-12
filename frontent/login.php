<div class="login">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                <h1 class="title">Login</h1>
                </div>
                <div class="card-body">
                <form action="server/request.php" method="post">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingEmail">Email</label>
                </div>

        
                <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>

              
                </div>
                <div class="card-footer d-flex justify-content-center">
                <button type="submit" name="login" class="btn btn-primary custom-btn">Login</button>

                </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>
</div>
<?php

if(isset($_SESSION['error'])) {

?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php echo $_SESSION['error'];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 <?php
   }
?>