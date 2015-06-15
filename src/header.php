<body class="">

	<!-- #HEADER -->
	<header id="header">
		<div id="logo-group">
			<!-- PLACE YOUR LOGO HERE -->
			<span id="logo"> <img src="https://app.abtasty.com/interface/img/logo_2014.png" alt="ABTasty"> </span>
			<!-- END LOGO PLACEHOLDER -->
			<span id="activity" class="activity-dropdown"> <i class="fa fa-newspaper-o"></i> <b class="badge"> 21 </b> </span>
		</div>

		<!-- #PROJECTS: projects dropdown -->
		<div class="project-context hidden-xs">

			<span class="label">Actu:</span>
			<span class="project-selector dropdown-toggle" data-toggle="dropdown">Dernières infos <i class="fa fa-angle-down"></i></span>

			<!-- Suggestion: populate this list with fetch and push technique -->
			<ul class="dropdown-menu">
				<li>
					<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
				</li>
				<li>
					<a href="javascript:void(0);">Notes on pipeline upgradee</a>
				</li>
				<li>
					<a href="javascript:void(0);">Assesment Report for merchant account</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
				</li>
			</ul>
			<!-- end dropdown-menu-->

		</div>
		<!-- end projects dropdown -->

		<!-- #TOGGLE LAYOUT BUTTONS -->
		<!-- pulled right: nav area -->
		<div class="pull-right">
			
			<!-- collapse menu button -->
			<div id="hide-menu" class="btn-header pull-right">
				<span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
			</div>
			<!-- end collapse menu -->

			<!-- logout button -->
			<div id="logout" class="btn-header transparent pull-right">
				<span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
			</div>
			<!-- end logout button -->

			<!-- search mobile button (this is hidden till mobile view port) -->
			<div id="search-mobile" class="btn-header transparent pull-right">
				<span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
			</div>
			<!-- end search mobile button -->
			
			<!-- #SEARCH -->
			<!-- input: search field -->
			<form action="search.html" class="header-search pull-right">
				<input id="search-fld" type="text" name="param" placeholder="Find ...">
				<button type="submit">
					<i class="fa fa-search"></i>
				</button>
				<a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
			</form>
			<!-- end input: search field -->

			<!-- multiple lang dropdown : find all flags in the flags page -->
			<ul class="header-dropdown-list hidden-xs">
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="img/blank.gif" class="flag flag-us" alt="United States"> <span> English (US) </span> <i class="fa fa-angle-down"></i> </a>
					<ul class="dropdown-menu pull-right">
						<li class="active">
							<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-us" alt="United States"> English (US)</a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-fr" alt="France"> Français</a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-es" alt="Spanish"> Español</a>
						</li>
						<li>
							<a href="javascript:void(0);"><img src="img/blank.gif" class="flag flag-de" alt="German"> Deutsch</a>
						</li>						
						
					</ul>
				</li>
			</ul>
			<!-- end multiple lang -->

		</div>
		<!-- end pulled right: nav area -->

	</header>
	<!-- END HEADER -->