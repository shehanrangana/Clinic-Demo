<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>			
			<ul class="nav">
				<li><a href="/admin" {{(Request::is('admin') ? 'class=active' : '')}}><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li><a href="/admin/newpatient" {{(Request::is('admin/newpatient') ? 'class=active' : '')}}><i class="lnr lnr-code"></i> <span>Register Patient</span></a></li>
				<li><a href="/admin/newuser" {{(Request::is('admin/newuser') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Register User</span></a></li>
				<li><a href="/admin/appointments" {{(Request::is('admin/appointments') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Appointments</span></a></li>		
				<li><a href="/admin/patients" {{(Request::is('admin/patients') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Patients</span></a></li>		
				<li><a href="/admin/users" {{(Request::is('admin/users') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Users</span></a></li>		
				<li><a href="/admin/pharmacy" {{(Request::is('admin/pharmacy') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Pharmacy</span></a></li>		
				<li><a href="/admin/sms" {{(Request::is('admin/sms') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>SMS</span></a></li>		
				<li><a href="/admin/myaccount" {{(Request::is('admin/myaccount') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>My Account</span></a></li>		
				<li><a href="#" {{(Request::is('#') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Log Out</span></a></li>	
			</ul>	
		</nav>
	</div>
</div>