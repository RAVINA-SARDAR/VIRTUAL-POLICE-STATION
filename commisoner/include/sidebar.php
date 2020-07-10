<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									VIEW FIR
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint
											<?php
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											Pending Complaint
                   <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="closed-complaint.php">
											<i class="icon-inbox"></i>
											Closed Complaints
	     <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>


						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages9">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
								 Complaint Status
								</a>
								<ul id="togglePages9" class="collapse unstyled">
									<li>
										<a href="checkstat.php">
											<i class="icon-tasks"></i>
						Check
											
		
											
										</a>
									</li>
									
									
								</ul>
							</li>
							
							
						</ul>


						
						
						
							<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages3">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
								 Crime Details
								</a>
								<ul id="togglePages3" class="collapse unstyled">
									<li>
										<a href="add_data.php">
											<i class="icon-tasks"></i>
									Add Todays Crime
											
		
											
										</a>
									</li>
									<li>
										<a href="view_crime.php">
											<i class="icon-tasks"></i>
										View Crime Information
                   
										</a>
									</li>
									
								</ul>
							</li>
							
							
						</ul>
						
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages4">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
								 VIDEO CHAT
								</a>
								<ul id="togglePages4" class="collapse unstyled">
									<li>
										<a href="videochatinfo.php">
											<i class="icon-tasks"></i>
								Do Video Chat
											
		
											
										</a>
									</li>
									
									
								</ul>
							</li>
							
							
						</ul>
						

						

						<ul class="widget widget-menu unstyled">
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>User Login Log </a></li>
							
							<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
