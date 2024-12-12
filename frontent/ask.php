<div class="login">
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                <h1 class="title">Ask A Question</h1>
                </div>
                <div class="card-body">
                <form action="server/request.php" method="post">
                <div class="form-floating mb-3">
                <input type="text" class="form-control" name="title" id="floatingTitle" placeholder="Enter Question">
                <label for="floatingTitle">Title</label>
                </div>
                <div class="mb-3">
                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>

                <div class="mb-3">
                <label for="">Category</label>

                  <?php

                    include("frontent/category.php");
                  ?>
                </div>
    
                </div>
                <div class="card-footer d-flex justify-content-center">
                <button type="submit" name="ask" class="btn btn-primary custom-btn">Ask Question</button>

                </div>
                </form>
            </div>
            
        </div>
    </div>
    </div>
</div>