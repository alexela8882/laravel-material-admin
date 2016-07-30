BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
	<div class="menubar-fixed-panel">
		<div>
			<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
				<i class="fa fa-bars"></i>
			</a>
		</div>
		<div class="expanded">
			<a href="../../html/dashboards/dashboard.html">
				<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
			</a>
		</div>
	</div>
	<div class="menubar-scroll-panel">

		<!-- BEGIN MAIN MENU -->
		<ul id="main-menu" class="gui-controls">

			<!-- BEGIN DASHBOARD -->
			<li class="active">
				<a href="{{ url('home') }}" >
					<div class="gui-icon"><i class="md md-home"></i></div>
					<span class="title">Dashboard</span>
				</a>
			</li><!--end /menu-li -->
			<!-- END DASHBOARD -->

			<!-- BEGIN USERS -->
			<li class="gui-folder">
				<a>
					<div class="gui-icon"><i class="md md-account-child"></i></div>
					<span class="title">Users</span>
				</a>
				<!--start submenu -->
				<ul>
					<li><a href="{{ url('users/create') }}" ><span class="title">Add</span></a></li>
					<li><a href="{{ url('users') }}" ><span class="title">View</span></a></li>
				</ul><!--end /submenu -->
			</li>
			<!-- END USERS -->
			<!-- END FORMS -->

		</ul><!--end .main-menu -->
		<!-- END MAIN MENU -->

		<div class="menubar-foot-panel">
			<small class="no-linebreak hidden-folded">
				<span class="opacity-75">Copyright &copy; <?php echo date('Y'); ?></span> <strong>MIS</strong>
			</small>
		</div>
	</div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR