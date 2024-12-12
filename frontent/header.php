<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./">

      <img src="public/logo.png" class="img-fluid" style="width:120px;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Home</a>
        </li>
        <?php
         if(isset($_SESSION["user"]["username"])) {?>
        <li class="nav-item">
          <a class="nav-link" href="./server/request.php?logout=true">Logout (<span class="text-primary"><?php echo ucfirst($_SESSION['user']['username']); ?></span>)</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask A Question</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">My Questions</a>
        </li>
        <?php
          } ?>




         <?php
           if(!isset($_SESSION["user"]["username"])) {
        ?>
            <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
        </li>

        <?php
          }
        ?>


        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
     
      </ul>

      <div class="ms-auto">
      <form action="" class="d-flex" method="get">
        <input class="form-control me-2" name="search" type="search" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>
</div>