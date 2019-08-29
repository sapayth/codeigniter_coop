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
							<table class="table table-bordered table-hover dataTable" role="grid">
								<thead>
									<tr role="row">
										<th>Name</th>
										<th>Email</th>
										<th>Role</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$users_rs = $this->db->get('users');
										foreach ($users_rs->result() as $user) :
										?>

										<tr role="row" class="odd">
										<td><?php echo $user->name; ?></td>
										<td><?php echo $user->email; ?></td>
										<td><?php echo $user->role_id; ?></td>
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