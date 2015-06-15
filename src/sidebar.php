<!-- #CONTROLLER -->
<?php
if (isset($_GET['page'])){
	$current = $_GET['page'];
}
elseif (isset($_GET['component'])) {
	$current = $_GET['component'];
}
else {
	$current = 'dashboard';
}


?>



<!-- #NAVIGATION -->
<!-- Left panel : Navigation area -->
<aside id="left-panel">

	<!-- User info -->
	<div class="login-info">
		<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
			
			<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
				<img src="img/avatars/mehdi.jpg" alt="me" class="online" /> 
				<span>
					mehdi.betari 
				</span>
			</a> 
			
		</span>
	</div>
	<!-- end user info -->
	<nav>
		<!-- NOTE: Notice the gaps after each icon usage <i></i>..
		Please note that these links work a bit different than
		traditional href="" links. See documentation for details.
		-->

		<ul>
			<li <?= ($current == 'dashboard')?'class="active"':''?>>
				<a href="index.php" title="dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
			</li>
			<li <?= ($current == 'inbox')?'class="active"':''?>>
				<a href="index.php?page=inbox"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
			</li>
			<li <?= ($current == 'tables')?'class="active"':''?>>
				<a href="index.php?component=tables"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
			</li>
			<li <?= ($current == 'buttons')?'class="active"':''?>>
				<a href="index.php?component=buttons"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Buttons</span></a>
			</li>
			<li <?= ($current == 'stylebox')?'class="active"':''?>>
				<a href="index.php?component=stylebox"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Stylebox</span></a>
			</li>
		</ul>
	</nav>
	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>
<!-- END NAVIGATION -->