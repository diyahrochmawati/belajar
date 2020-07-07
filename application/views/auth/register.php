          <div class="container" style="padding-top:80px;">
            <div class="form-group col-md-2 col-lg-5 mx-auto" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px;  border-radius: 1rem; background-color: #fff;">
              <h3 class="login-heading mb-4"><img style="width:120px; center;" src="../img/logo.png"/></h3>
              
              <form style="box-sizing: content-box;" method="post" action="<?= base_url('auth/register'); ?>">
               
                <div class="form-label-group" style="margin-top:10px;">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" value="<?= set_value('name'); ?>" autofocus>
                  <?= form_error('name','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="text" id="nis" name="nis" class="form-control" placeholder="Enter NIS" value="<?= set_value('nis'); ?>" autofocus>
                  <?= form_error('nis','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Enter class" value="<?= set_value('kelas'); ?>" autofocus>
                  <?= form_error('kelas','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="text" id="motto" name="motto" class="form-control" placeholder="Enter your motivation" value="<?= set_value('motto'); ?>" autofocus>
                  <?= form_error('motto','<small class="text-danger">', '</small>'); ?> 
                </div>

               <div class="form-label-group" style="margin-top:10px;">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" value="<?= set_value('email'); ?>" autofocus>
                  <?= form_error('email','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="password" id="password1" name="password1" class="form-control" placeholder="Enter password"  autofocus>
                  <?= form_error('password1','<small class="text-danger">', '</small>'); ?> 
                </div>

                <div class="form-label-group" style="margin-top:10px;">
                  <input type="password" id="password2" name="password2" class="form-control" placeholder="Enter password again"  autofocus>
                  <?= form_error('password2','<small class="text-danger">', '</small>'); ?> 
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" style="margin-top:10px;">Register</button>
                <hr>
                   <div class="text-center">
                  <a class="small" href="<?= base_url('auth');?> ">Already have an account?</a></div>
              </form>
            </div>
        </div>