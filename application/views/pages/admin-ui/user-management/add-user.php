<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  User
  <small>Add</small>
</h1>
</section>
<!-- Main content -->
<section class="content">
<div class="box box-info">
    <!-- form start -->
    <?php
    	$attributes = array('class' => 'form-horizontal');
    	echo form_open_multipart('user/save_user', $attributes);
    ?>
      <div class="box-body">
      	<div class="col-md-8">
           <div class="form-group">
            <label class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" name="txtName" class="form-control" placeholder="Name" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="txtEmail" class="form-control" placeholder="Email" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Role</label>
            <div class="col-sm-10">
              <select name="cmbRole" class="form-control">
                <?php
                  foreach($role_arr as $role) : ?>
                    <option value="<?php echo $role['id']; ?>"><?php echo $role['name']; ?></option>
                  }
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="pwdPass" class="form-control" placeholder="Password" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Retype Password</label>
            <div class="col-sm-10">
              <input type="password" name="pwdRePass" class="form-control" placeholder="Retype Password" />
            </div>
          </div>
        </div> <!-- end of col-md -->
        <div class="col-md-4">
          <div class="form-group">
            <label class="col-sm-3 control-label">Upload Avatar</label>
            <div class="col-sm-9">
              <input type="file" name="fileUserAvatar" size="200" />
            </div>
          </div>
        </div>
      </div> <!-- end of box-body -->
      <div class="box-footer">
        <?php
        	echo form_submit('btnSave', 'Save User', "class='btn btn-info'");
        ?>
      </div>
      <!-- /.box-footer -->
    <?php echo form_close(); ?>
  </div>
</section>
<!-- /.content -->
</div>