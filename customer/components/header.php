
<?php
    include '../db/dbCon.php';
    $error = "";
    $message = "";
      
    $user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
    $email_address = isset($_SESSION['email_address']) ? $_SESSION['email_address'] : '';
        
        $user_id = null;
        if (!empty($email_address)) {
            $sql = "SELECT id, profile_image FROM user WHERE email_address = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email_address);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $user_id = $row['id'];
                $profile_image = $row['profile_image'];
            } else {
                $error = "User not found.";
            }
            $stmt->close();
        }
		?>
		<div class="header">
          <div class="header-content">
            <nav class="navbar navbar-expand">
              <div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
				</div>
                <div class="header-right d-flex align-items-center">
				  <div class="input-group search-area">
				  </div>
				  <ul class="navbar-nav">
				   <li class="nav-item dropdown notification_dropdown">
					<a class="nav-link bell dz-theme-mode" href="javascript:void(0);">
					 <svg id="icon-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
					  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24"/>
						<path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" fill-rule="nonzero"/>
						<path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
					  </g>
					</svg>
					<svg id="icon-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
					  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="24" height="24"/>
						<path d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z" fill="#000000"/>
					  </g>
					</svg>	
									</a>
								</li>
								<li class="nav-item ps-3">
									<div class="dropdown header-profile2">
										<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											<div class="header-info2 d-flex align-items-center">
												<div class="header-media">
												<?php
												if (isset($_SESSION['userimage']) && !empty($_SESSION['userimage'])) {
													?>
													<img src="<?=$_SESSION['userimage'] ?>">
													<?php 
												} elseif (isset($profile_image) && !empty($profile_image)) {
													?>
													<img src="<?php echo $profile_image; ?>">
													<?php
												} else {
													?>
													<img src="../avater-client.png">
												<?php
												}
												?>
												</div>
											</div>
										</a>
										<div class="dropdown-menu dropdown-menu-end" style="">
											<div class="card border-0 mb-0">
												<div class="card-header py-2">
													<div class="products">
			
													<?php
													if (isset($_SESSION['userimage'])) {
													?>
														<img src="<?=$_SESSION['userimage'] ?>" height="30px" style="border-radius:50px">
													<?php 
													} elseif (!isset($_SESSION['userimage'])) {
													?>
														<img src="<?php echo $profile_image; ?>" style="border-radius:50%" class="header-media" alt="" >
													<?php
													}
													else {
														?>
														<img src="../../assets/images/icons/avater-client.png">
													<?php
													}
													?>
													<div>
													<?php
													if (isset($_SESSION['userimage']) && !empty($_SESSION['userimage'])) {
														echo $email_address;
													} else {
														echo $user_name;
													}
													?>
													<span></span>	
														</div>	
													</div>
											 </div>
												<div class="card-body px-0 py-2">
													<a href="./" class="dropdown-item ai-icon ">
														<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M17.9026 8.85114L13.4593 12.4642C12.6198 13.1302 11.4387 13.1302 10.5992 12.4642L6.11844 8.85114" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9089 21C19.9502 21.0084 22 18.5095 22 15.4384V8.57001C22 5.49883 19.9502 3 16.9089 3H7.09114C4.04979 3 2 5.49883 2 8.57001V15.4384C2 18.5095 4.04979 21.0084 7.09114 21H16.9089Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="ms-2">Message </span>
													</a>
													
														<?php
													if (isset($_SESSION['userimage'])) {
													?>
													<?php 
													} elseif (!isset($_SESSION['userimage'])) {
													?>
														<a href="./edit_profile" class="dropdown-item ai-icon ">
														<svg  width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														<path fill-rule="evenodd" clip-rule="evenodd" d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z" stroke="var(--primary)" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
														<span class="ms-2">Edit Profile </span>
													<?php
													}
													?>
													</a>
												</div>
												<div class="card-footer px-0 py-2">
													<form action="" method="POST">
													<a href="#" class="dropdown-item ai-icon" onclick="this.parentNode.submit();">
														<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
														<span class="ms-2">Logout</span>
													</a>
													<input type="hidden" name="logout" value="true">
												</form>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
                    </div>
				</nav>
			</div>
		</div>