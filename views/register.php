<h1>Create an account</h1>
<?php

?>
<form action="" method="post">
  <div class="row">
    <div class="col">
      <label class="form-label">First name</label>
      <input type="text" name="firstname" class="form-control">
    </div>
    <div class="col">
      <label class="form-label">Last name </label>
      <input type="text" name="lastname" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label class="form-label">Password</label>
    <textarea type="password" name="password" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label class="form-label"> Comfirm Password</label>
    <textarea type="password" name="comfirmPassword" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label class="form-label">Email</label>
    <textarea type="text" name="email" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>