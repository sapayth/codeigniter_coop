<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  User
  <small>Edit</small>
</h1>
</section>

<!-- Main content -->
<section class="content">
<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-bordered table-hover dataTable" role="grid">
								<thead>
									<tr role="row">
										<th>Name</th>
										<th>Email</th>
										<th>Role</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
										$users_rs = $this->db->get('users');
										// $role_rs = $this->db->get('user_role');

										foreach ($users_rs->result() as $user) :
										?>
											<?php echo form_open('user/manage_user'); ?>
											<tr role="row" class="odd">
												<td><?php echo $user->name; ?></td>
												<td><?php echo $user->email; ?></td>
												<td>
													<?php
													$role_rs = $this->db->get_where('user_role', array('id' => $user->role_id));
													$role_arr = $role_rs->row_array();
													echo $role_arr['name'];
													?>
												</td>
												<td>
													<input type="hidden" name="hdnId" value="<?php echo $user->id; ?>" />
													<input type="hidden" name="hdnName" value="<?php echo $user->name; ?>" />
													<input type="hidden" name="hdnEmail" value="<?php echo $user->email; ?>" />
													<input type="hidden" name="hdnRole" value="<?php echo $user->role_id; ?>" />
													<input type="hidden" name="hdnAvatar" value="<?php echo $user->avatar_name; ?>" />
													<button type="submit" name="btnEdit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
													<button type="submit" name="btnDelete" class="btn btn-danger" onclick="return confirm('Are you sure?');"><i class="fa fa-trash"></i> Delete</button>
												</td>
											</tr>
											<?php echo form_close(); ?>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div> <!-- end of col-sm -->
					</div> <!-- end of row -->
				</div> <!-- end of dataTables_wrapper -->
			</div> <!-- end of box-body -->
		</div> <!-- end of box -->
    </div>
</section>
<!-- /.content -->
</div>