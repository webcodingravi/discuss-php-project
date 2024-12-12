<div class="signup">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                <h1 class="title">SignUp</h1>
                </div>
                <div class="card-body">
                <form action="server/request.php" method="post">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="floatingName" placeholder="Name">
                <label for="floatingName">Name</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="email" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingEmail">Email</label>
                </div>

         
            
                <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="User Address">
                <label for="floatingAddress">Address</label>
                </div>

               
                </div>
                <div class="card-footer d-flex justify-content-center">
                <button type="submit" name="signup" class="btn btn-primary custom-btn">SignUp</button>

                </div>
                </form>
            </div>
      
        </div>
    </div>
    </div>
</div>


