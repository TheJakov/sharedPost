<div class="panel panel-default" style="width: 600px;">

    <div class="panel-heading">
        <h3 class="panel-title">User Login</h3>
    </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" />
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" />
        </div>

        <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>">Cancel</a>

    </form>
  </div>
</div>