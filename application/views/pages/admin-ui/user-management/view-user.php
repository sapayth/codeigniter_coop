<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
  Users
  <small>View</small>
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
							<table class="table table-bordered table-hover dataTable table-view-user" role="grid">
								<thead>
									<tr role="row">
										<th></th>
										<th>Name</th>
										<th>Email</th>
										<th>Role</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$users_rs = $this->db->get('users');
										// $role_rs = $this->db->get('user_role');

										foreach ($users_rs->result() as $user) :
										?>
											<tr role="row" class="odd">
												<td class="user-img"><img src="<?php echo base_url(); ?>assets/img/avatars/<?php echo $user->avatar_name; ?>" alt=""></td>
												<td><?php echo $user->name; ?></td>
												<td><?php echo $user->email; ?></td>
												<td>
													<?php
													$role_rs = $this->db->get_where('user_role', array('id' => $user->role_id));
														// foreach ($role_rs->result() as $role) {
														// 	if($role->id == $user->role_id) {
														// 		echo "$role->name";
														// 	}
														// }
													// echo "<pre>";
													// print_r($role_rs);
													// echo "</pre>";
													$role_arr = $role_rs->row_array();
													echo $role_arr['name'];
													?>
												</td>
											</tr>
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
</div>