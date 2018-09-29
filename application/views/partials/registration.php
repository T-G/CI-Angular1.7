<!-- <div class="button-group" role="group" aria-label="..." ng-click="facebookRegistration()">
        <button type="button" class="btn" style="background-color:#4864b3; color:#ffffff;">
        <i class="fa fa-facebook"></i> | Login with Facebook
</button>
</div> -->
<form role="form" name="registrationForm" ng-submit="registrationSubmit(registration)" novalidate>
<legend>Sing Up for Free</legend>
<div class="form-group">
    <label for="user_name">Name *</label>
    <!-- if any form input is invalid ($invalid) or input is touched and still invalid ($dirty) -->
    <input type="text" 
            class="form-control" 
            id="user_name" 
            name="user_name" 
            ng-model="registration.user_name" 
            placeholder="Enter Name"
            required>
          <small id="user_name" 
                  class="form-text text-danger"
                  ng-if="registrationForm.user_name.$invalid && registrationForm.user_name.$dirty">
                  Required
          </small>
  </div>
  <div class="form-group">
    <label for="user_email">Email *</label>
    <input type="email" 
            class="form-control" 
            id="user_email" 
            name="user_email" 
            ng-model="registration.user_email" 
            placeholder="Enter email"
            required>
            <small id="user_email" 
                    class="form-text text-danger"
                    ng-if="registrationForm.user_email.$invalid && registrationForm.user_email.$dirty">
                    Required. Please enter a valid email.
            </small>
  </div>
  <div class="form-group">
    <label for="user_phone">Phone</label>
    <input type="text" 
            class="form-control" 
            id="user_phone" 
            name="user_phone" 
            ng-model="registration.user_phone" 
            placeholder="Enter Phone"
            required>
            <small id="user_phone" 
                    class="form-text text-danger"
                    ng-if="registrationForm.user_phone.$invalid && registrationForm.user_phone.$dirty">
                    Required
            </small>
  </div>
  <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" 
            class="form-control" 
            id="user_password" 
            name="user_password" 
            ng-model="registration.user_password" 
            placeholder="Password"
            minlength="8"
            required>
            <small id="user_password" 
                    class="form-text text-danger text-danger"
                    ng-if="registrationForm.user_password.$invalid && registrationForm.user_password.$dirty">
                    Required
            </small>
  </div>
  <!-- Submit will be disabled if any form input is invalid ($invalid) or form is untouched ($pristine) -->
  <button type="submit" class="btn btn-primary" 
          ng-disabled="registrationForm.$invalid || registrationForm.$pristine">
          Submit
  </button>
</form>