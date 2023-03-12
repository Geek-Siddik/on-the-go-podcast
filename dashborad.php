<?php
	session_start();
	$title = "Dashboard";
	include "./includes/header.php";
?>


	<style>
		.center {
			margin: auto;
			width: 60%;
			border: 3px solid #73AD21;
			padding: 10px;
		}
	</style>


	<?php
		if (isset($_SESSION['username'])) {
		} else {
			header("location:login.php");
		}
	?>


	<div>
		<fieldset>
			<form>
				<div>
					<table>
						<tr>
							<td style="width: 300px;">
								<label><b>Account</b></label>
								<hr> <br>
								<ul>
									<li><a href="dashboard.php">Dashboard</a></li>
									<li><a href="viewprofile.php">View Profile</a></li>
									<li><a href="editprofile.php">Edit Profile</a></li>
									<li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
									<li><a href="changepassword.php">Change Password</a></li>
									<li><a href="Logout.php">Logout</a></li>
								</ul>
							</td>
							<td class="center" style="width: 1000px; font-size: 30px; text-align: center; vertical-align: text-top;">Welcome to FAITH IT <b><?php echo $_SESSION['username']; ?></b><br><br><img src="<?= $_SESSION['data']['profilepicpath'] ?>" height="155" width="155"></td>
						</tr>
					</table>
				</div>
			</form>
		</fieldset>
	</div>

	<br>

<?php
	include "./includes/footer.php";
?>