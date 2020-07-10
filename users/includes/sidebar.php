<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile.php">Profile</a></li>
                          <li><a  href="change-password.php">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>Lodge Complaint</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Complaint History</span>
                      </a>
                      
                  </li>
                 
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Apply for Permission</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="register-application.php">Lodge Application</a></li>
                          <li><a  href="application-history.php">Application History</a></li>
                        
                      </ul>
                  </li>
				  
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Citizen Service Form</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Character_Certificate.php">CHARACTER CERTIFICATE</a></li>
                          <li><a  href="missing_person_report.php">MISSING PERSON REPORT						 </a></li>
						  <li><a  href="lostproperty.php">LOST PROPERTY REPORT </a></li>
						  <li><a  href="procession_request.php">PROCESSION REQUEST </a></li>
						  <li><a  href="protest_request.php"> PROTEST REQUEST</a></li>
                        
                      </ul>
                  </li>
				  
				   <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>CALL TOLL FREE No.</span>
                      </a>
					  <ul class="sub">
                          <li><a  href="Character_Certificate.php"> call +100</a></li></ul>
                      
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>