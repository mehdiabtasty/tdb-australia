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

		<ul>
			<li <?= ($current == 'dashboard')?'class="active"':''?>>
				<a href="index.php" title="dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
			</li>
			<li <?= ($current == 'knowledge')?'class="active"':''?>>
				<a href="index.php?page=knowledge"><i class="fa fa-lg fa-fw fa-cloud"></i> <span class="menu-item-parent">Knowledge</span></a>
			</li>
			<li <?= ($current == 'clientStats')?'class="active"':''?>>
				<a href="index.php?page=clientStats"><i class="fa fa-lg fa-fw fa-bar-chart"></i> <span class="menu-item-parent">Client stats</span></a>
			</li>
			<li <?= ($current == 'pendingTests')?'class="active"':''?>>
				<a href="index.php?page=pendingTests"><i class="fa fa-lg fa-fw fa-play-circle"></i> <span class="menu-item-parent">Pending tests</span></a>
			</li>
			<li <?= ($current == 'translations')?'class="active"':''?>>
				<a href="index.php?page=translations"><i class="fa fa-lg fa-fw fa-comments-o"></i> <span class="menu-item-parent">Translations</span></a>
			</li>
			<li <?= ($current == 'validatePlugins')?'class="active"':''?>>
				<a href="index.php?page=validatePlugins"><i class="fa fa-lg fa-fw fa-plug"></i> <span class="menu-item-parent">Validate plugins</span></a>
			</li>
			<li <?= ($current == 'translatePlugins')?'class="active"':''?>>
				<a href="index.php?page=translatePlugins"><i class="fa fa-lg fa-fw fa-comment-o"></i> <span class="menu-item-parent">Translate plugins</span></a>
			</li>
			<li <?= ($current == 'lastTestsRanking')?'class="active"':''?>>
				<a href="index.php?page=lastTestsRanking"><i class="fa fa-lg fa-fw fa-signal"></i> <span class="menu-item-parent">Last 24h tests ranking</span></a>
			</li>
			<li <?= ($current == 'webinar')?'class="active"':''?>>
				<a href="index.php?page=webinar"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Webinar management</span></a>
			</li>
			<li <?= ($current == 'tables')?'class="active"':''?>>
				<a href="index.php?component=tables"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">UI : Tables</span></a>
			</li>
			<li <?= ($current == 'dataTables')?'class="active"':''?>>
				<a href="index.php?page=dataTables"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">UI : DataTables</span><span class="badge pull-right inbox-badge">new</span></a>
			</li>
			<li <?= ($current == 'buttons')?'class="active"':''?>>
				<a href="index.php?component=buttons"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI : Buttons</span></a>
			</li>
		</ul>
	</nav>
	<span class="minifyme" data-action="minifyMenu"> 
		<i class="fa fa-arrow-circle-left hit"></i> 
	</span>

</aside>
<!-- END NAVIGATION -->