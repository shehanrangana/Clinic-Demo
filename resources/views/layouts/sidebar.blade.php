<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>			
			<ul class="nav">
				<li><a href="/admin" {{(Request::is('admin') ? 'class=active' : '')}}><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
				<li><a href="/admin/newpatient" {{(Request::is('admin/newpatient') ? 'class=active' : '')}}><i class="lnr lnr-code"></i> <span>Register Patient</span></a></li>
				<li><a href="/admin/newuser" {{(Request::is('admin/newuser') ? 'class=active' : '')}}><i class="lnr lnr-chart-bars"></i> <span>Register User</span></a></li>		
				<li>
					<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Queue</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
					<div id="subPages" class="collapse ">
						<ul class="nav">
							<li><a href="page-profile.html" class="">9-10</a></li>
							<li><a href="page-login.html" class="">10-11</a></li>
							<li><a href="page-lockscreen.html" class="">11-12</a></li>
						</ul>
					</div>
				</li>		
			</ul>				
		</nav>
	</div>
</div>