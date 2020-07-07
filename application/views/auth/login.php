        <div class="container" style="padding-top:160px;">
            <div class="form-group col-md-2 col-lg-4 mx-auto" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px;  border-radius: 1rem; background-color: #fff;">
              <h3 class="login-heading mb-4"><img style="width:120px; center;" src="img/logo.png"/></h3>
              <?= $this->session->flashdata('message'); ?>
              <form style="box-sizing: content-box;" method="post" action="<?= base_url('auth'); ?>">
                <div class="form-label-group">
                  <input type="text" id="inputemail" name="inputemail" class="form-control" placeholder="Enter Email" value="<?= set_value('inputemail'); ?>"autofocus>
                  <?= form_error('inputemail','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="password" id="inputpassword" name="inputpassword" class="form-control" placeholder="Enter Password">
                  <?= form_error('inputpassword','<small class="text-danger">', '</small>'); ?> 
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="margin-top:10px;">Sign in</button>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/forget');?> ">Forgot password?</a></div>
                   <div class="text-center">
                  <a class="small" href="<?= base_url('auth/register');?> ">Create Account?</a></div>
              </form>
            </div>
        </div>