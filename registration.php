<?php include './theme/header.php'?>
<?php
    require('./include/db.php')
?>

<div class="w-75 container-sm mycontainer mw-75" id="bcentered">
    <h3 class="text-dark text-center">Sign up</h3>
<form>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullName" aria-describedby="emailHelp">
      </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p class="text-center">Already have an account? <a href="login.php">login here</a></p>
</form>
</div>
<!-- <?php //include './theme/footer.php'?> -->