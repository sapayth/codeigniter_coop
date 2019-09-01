<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  Single User
  <small>Edit</small>
</h1>
</section>

<!-- Main content -->
<section class="content">
<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
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
			              <input type="text" name="txtName" class="form-control" value="<?php echo $name; ?>" />
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-2 control-label">Email</label>
			            <div class="col-sm-10">
			              <input type="email" name="txtEmail" class="form-control" value="<?php echo $email; ?>" />
			            </div>
			          </div>
			          <div class="form-group">
			            <label class="col-sm-2 control-label">Role</label>
			            <?php

			            // echo "<pre>";
			            // print_r($role_arr);
			            // echo "</pre>";

			            ?>
			            <div class="col-sm-10">
			              <select name="cmbRole" class="form-control">
			                <?php
			                  foreach($role_arr as $srole) : ?>
			                  	<?php if($srole['id'] == $role) : ?>
			                  		<option value="<?php echo $srole['id'] ?>" selected="selected"><?php echo $srole['name']; ?></option>
			                    <?php else : ?>
			                    	<option value="<?php echo $srole['id'] ?>"><?php echo $srole['name']; ?></option>
			                    <?php endif; ?>
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
			            <input type="hidden" name="hdnId" value="<?php echo $user_id; ?>" />
			              <input type="password" name="pwdRePass" class="form-control" placeholder="Retype Password" />
			            </div>
			          </div>
			        </div> <!-- end of col-md -->
			        <div class="col-md-4">
			          <div class="form-group">
			            <label class="col-sm-3 control-label">Upload Avatar</label>
			            <div class="col-sm-9">
			              <input type="file" name="fileUserAvatar" onchange="imagePreview(this);" size="200" accept="image/png, image/jpeg" />
			            </div>
			            <br>
			            <div class="col-sm-9" id="avatar-img">
			            	<?php if($avatar != null) : ?>
								<img src="<?php echo base_url(); ?>assets/img/avatars/<?php echo $avatar ?>" alt="">
			            	<?php endif; ?>
			            </div>
			            </div>
			        </div>
			        </div>
			    </div> <!-- end of box-body -->
			    <div class="box-footer">
			        <?php
			        	echo form_submit('btnUpdateUser', 'Update User', "class='btn btn-info'");
			        ?>
		    	</div>
			    <!-- /.box-footer -->
			    <?php echo form_close(); ?>
			</div> <!-- end of box-body -->
		</div> <!-- end of box -->
    </div>
</section>
<!-- /.content -->
</div>
<script>
  // image preview in browser
    var imagePreview = function(input) {
    	$("#avatar-img").empty();

        if (input.files) {
			var reader = new FileReader();
			reader.onload = function(event) {
			  $($.parseHTML('<img>'))
			  .attr('src', event.target.result)
			  .width(100)
			  .height(100)
			  .appendTo('#avatar-img');
			}
			reader.readAsDataURL(input.files[0]);
        }
    };
</script>