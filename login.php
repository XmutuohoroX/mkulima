<?php include './theme/header.php'?>
<div class="container-sm mycontainer" id="bcentered">
    <h3 class="text-dark text-center">Login</h3>
<form>
<div class="mb-3">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">enter email you registered with.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p class="text-center">Dont have an account? <a href="registration.php">sign up</a></p>
</form>
</div>
<!-- <?php include './theme/footer.php'?> -->