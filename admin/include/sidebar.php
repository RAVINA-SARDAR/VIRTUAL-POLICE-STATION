<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage Complaint
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
								<a class="collapsed" data-toggle="collapse" href="#togglePages1">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Manage Application
								</a>
								<ul id="togglePages1" class="collapse unstyled">
									<li>
										<a href="notprocess-application.php">
											<i class="icon-tasks"></i>
											Not Process Yet Application
											<?php
$rt = mysqli_query($con,"SELECT * FROM tblapplication where status is null");
$num1 = mysqli_num_rows($rt);
{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-application.php">
											<i class="icon-tasks"></i>
											Pending Application
                   <?php 
  $status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblapplication where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="closed-application.php">
											<i class="icon-inbox"></i>
											Closed Application
	     <?php 
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblapplication where status='$status'");
$num1 = mysqli_num_rows($rt);
{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
								</ul>
							</li>
							
							
						</ul>
						
						
						

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages2">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Trace Call
								</a>
								<ul id="togglePages2" class="collapse unstyled">
									<li>
										<a href="reqisp.php">
											<i class="icon-tasks"></i>
										Request to Cyber Cell
											
		
											
										</a>
									</li>
									<li>
										<a href="viewisp.php">
											<i class="icon-tasks"></i>
										View  Cyber Cell Information
                   
										</a>
									</li>
									<li>
										<a href="https://www.findandtrace.com/trace-mobile-number-location">
											<i class="icon-tasks"></i>
										Temperory Trace Call 
											
		
											
										</a>
									</li>
									
								</ul>
							</li>
							
							
						</ul>
						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages7">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Trace Location
								</a>
								<ul id="togglePages7" class="collapse unstyled">
									<li>
										<a href="reqisp.php">
											<i class="icon-tasks"></i>
										Request to  Cyber Cell
											
		
											
										</a>
									</li>
									<li>
										<a href="viewisp.php">
											<i class="icon-tasks"></i>
										View Cyber Cell Information
                   
										</a>
									</li>
									<li>
										<a href="https://www.gadgetcouncil.com/mobile-tracker/">
											<i class="icon-tasks"></i>
										Temperory Trace Location
											
		
											
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
								<a class="collapsed" data-toggle="collapse" href="#togglePages11">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									CRIMINAL MEDICAL REPORT
								</a>
								<ul id="togglePages11" class="collapse unstyled">
									<li>
										<a href="reqmed.php">
											<i class="icon-tasks"></i>
										Request For Medical Report
											
		
											
										</a>
									</li>
									<li>
										<a href="viewmed.php">
											<i class="icon-tasks"></i>
										View Medical Report
                   
										</a>
									</li>
									
								</ul>
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
										<a href="videochat/videochat/index.php">
											<i class="icon-tasks"></i>
								Do Video Chat
											
		
											
										</a>
									</li>
									
									
								</ul>
							</li>
							
							
						</ul>
						

						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Locations of Crime </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Add Type of Crime </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>Add State</a></li>
                          
                        
                            </ul><!--/.widget-nav-->

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
