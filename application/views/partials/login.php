<form class="form-horizontal" role="form" ng-if="!showForgetPassword && !showResetPassword" name="loginForm" ng-submit="loginSubmit(login)" novalidate>
<legend>Gautier :: Admin Login</legend>
  <div class="form-group">
    <input type="email" 
            class="form-control" 
            id="user_email" 
            name="user_email" 
            ng-model="login.user_email" 
            placeholder="Enter email"
            required>
</div>
<div class="form-group">
    <input type="password" 
            class="form-control" 
            id="user_password" 
            name="user_password" 
            ng-model="login.user_password" 
            placeholder="Password"
            minlength="8"
            required>
</div>
<div class="form-group">
    <a class="pull-left" href="<?php echo base_url(); ?>/login?forgotPassword=true" title="Forgot Password">Forgot Password</a>
    <!-- Submit will be disabled if any form input is invalid ($invalid) or form is untouched ($pristine) -->
    <button type="submit" class="btn btn-primary pull-right">Submit</button>
</div>
</form>
<form ng-if="showForgetPassword" name="forgotPasswordForm" ng-submit="forgotPasswordSubmit(forgotPassword)" role="form" novalidate>
    <div class="form-group">
        <legend>Forgot Password <small class="danger">Please provide email to recover password</small></legend>
    </div>
</form>