<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-3">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Please Sign In</h3>
        </div>
        <div class="panel-body">
          <form role="form" action="<?php echo URL; ?>user/login" method="POST">
            <input name="check_login" type="hidden" value="1">
			<fieldset>
              <div class="form-group">
                <input class="form-control" value="<?php echo htmlspecialchars($username,ENT_QUOTES); ?>" placeholder="Username" name="username" type="text" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
                <label>
                  <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
              </div>
              <!-- Change this to a button or input when using this as a form -->
              <button class="btn btn-lg btn-success btn-block">Login</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>