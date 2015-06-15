<?php 
//Controller
// ---------

	if(isset($_GET['page'])){
		$pageGroupe = 'Page ' ;
		$pageName   =  ucfirst($_GET['page']) ;
		$pagePath   =  '/src/pages/'.$_GET['page'].'.php';
	}
	elseif (isset($_GET['component'])) {
		$pageGroupe = 'UI Elements ' ;
		$pageName   =  ucfirst($_GET['component']) ;
		$pagePath   =  '/src/components/'.$_GET['component'].'.php';
	}
	else{
		$pageGroupe = 'Home';
		$pageName   = 'Dashboard';
		$pagePath   = '/src/pages/dashboard.php';
	}

?>
<!-- Template -->
<!-- -------- -->

	<!-- MAIN CONTENT -->
	<div id="content">
		<!-- row -->
		<div class="row">
			
			<!-- col -->
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-home"></i> 
						<?= $pageGroupe?>	
					<span>>  
						<?= $pageName?>
					</span>
				</h1>
			</div>
			<!-- end col -->
			
			<!-- right side of the page -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8"></div>
			<!-- end col -->
			
		</div>
		<!-- end row -->
		<?php
			if($pagePath){ require_once($pagePath);}
		?>

	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->