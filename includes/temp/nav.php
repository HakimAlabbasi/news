<?php @include('ini.php'); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="user_dash.php">Dashoard user</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user_dash.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">posts</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#">Contact </a>
      </li>

      

             <div class="move_login">
              <?php echo $_SESSION['Username']=$username; ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">my Profile</a>
          <a class="dropdown-item" href="#">my Account</a>
          <div class="dropdown-divider"></div>
           <a class="nav-link btn btn-danger Login" href="index.php">Logout</a>      
           </div>
      </li>
    </div>
         


    </ul>
  
  </div>
</nav>
