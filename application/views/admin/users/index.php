<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

			<div class="content-wrapper">
				<section class="content-header">
					<?php echo $pagetitle; ?>
					<?php echo $breadcrumb; ?>
				</section>

				<section class="content">
					<div class="row">
						<div class="col-md-12">
							 <div class="box">
								<div class="box-header with-border">
                  <div style="display:flex">
                    <div>
                      <h3 class="box-title"><?php echo anchor('admin/users/create', '<i class="fa fa-plus"></i> '. lang('users_create_user'), array('class' => 'btn btn-block btn-primary btn-flat')); ?></h3>
                    </div>
                    <div><input type="text"></div>
                  </div>
								</div>
								<div class="box-body">
                  <div class="table-responsive">
									<table class="table table-striped table-hover">
										<thead>
											<tr>
												<th><?php echo lang('users_firstname');?></th>
												<th><?php echo lang('users_lastname');?></th>
												<th><?php echo lang('users_email');?></th>
												<th><?php echo lang('users_status');?></th>
												<th><?php echo lang('users_action');?></th>
											</tr>
										</thead>
										<tbody>
                        <?php foreach ($users as $user):?>
                        											<tr>
                        												<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
                        												<td><?php echo htmlspecialchars($user->last_name, ENT_QUOTES, 'UTF-8'); ?></td>
                        												<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
                        												<td>
                        <?php


                        ?>
												</td>
												<td><?php echo ($user->active) ? anchor('admin/users/deactivate/'.$user->id, '<span class="label label-success">'.lang('users_active').'</span>') : anchor('admin/users/activate/'. $user->id, '<span class="label label-default">'.lang('users_inactive').'</span>'); ?></td>
												<td>
                          <a href="<?php echo 'users/edit/'.$user->id ?>" class="btn btn-sm btn-success">Edit</a>
                          <a href="<?php echo 'users/profile/'.$user->id ?>" class="btn btn-sm btn-success">See</a>
												</td>
											</tr>
                            <?php endforeach;?>
										</tbody>
									</table>
                </div>
                    <br>
                  <div class="text-right"><?php echo $this->pagination->create_links(); ?></div>
								</div>
							</div>
						 </div>
					</div>

				</section>
			</div>
