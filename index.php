<!DOCTYPE html>
<html>

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/banner1.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner2.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/banner3.jpg" alt="Third slide">
		                  </div>
						</div>
			
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
					
					<div class="home-services services-four" style="margin-bottom: 35px;">
            <ul class="garantia">
                <li>
                    <a href="#">
                            <span class="service-icon">
                                <img src="http://magento2.magentech.com/themes/sm_marketnew/pub/media/wysiwyg/icon-image/icon-1.png" alt="Servicio" width="60" height="60">
                            </span>

                        <span class="service-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ENVÍO RÁPIDO Y GRATUITO EN TODOS LOS PEDIDOS</font></font></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <span class="service-icon">
                                <img src="http://magento2.magentech.com/themes/sm_marketnew/pub/media/wysiwyg/icon-image/icon-2.png" alt="Servicio" width="60" height="60">
                            </span>

                        <span class="service-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GARANTÍA DE DEVOLUCIÓN DE DINERO DE 30 DÍAS</font></font></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <span class="service-icon">
                                <img src="http://magento2.magentech.com/themes/sm_marketnew/pub/media/wysiwyg/icon-image/icon-3.png" alt="Servicio" width="60" height="60">
                            </span>

                        <span class="service-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">GARANTÍA DE COMPRAS SEGURAS</font></font></span>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <span class="service-icon">
                                <img src="http://magento2.magentech.com/themes/sm_marketnew/pub/media/wysiwyg/icon-image/icon-15.png" alt="Servicio" width="60" height="60">
                            </span>

                        <span class="service-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SOPORTE ONLINE LAS 24H DEL DÍA</font></font></span>
                    </a>
                </li>
            </ul>
        </div>
<style>
	.home-services ul li {
    margin: 0;
    width: 33.3333333333%;
    padding: 12px 0;
}
.home-services.services-four>ul>li {
    width: 25%;
}
.home-services ul li span {
    display: block;
}
.home-services ul li:not(:last-child) a {
    border-right: 1px solid #e5e5e5;
}
.home-services .service-icon {
    width: 60px;
    float: left;
}
.home-services {
    clear: both;
    border: 1px solid #e5e5e5;
}
.home-services.services-four>ul>li {
    width: 25%;
}
.home-services.services-four {
    background: bisque;
    margin-top: 1em;
}
ul.garantia {
    display: flex;
    list-style: none;
}
</style>
		            <h2>Sweater</h2>
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id LIKE '4' LIMIT 0, 3");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>S/ ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "Hay algún problema en la conexión: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 
					   
					<h2>Deportivos</h2>
		       		<?php
		       			$month = date('m');
		       			$conn = $pdo->open();

		       			try{
		       			 	$inc = 3;	
						    $stmt = $conn->prepare("SELECT * FROM products WHERE category_id LIKE '10' LIMIT 0, 3");
						    $stmt->execute();
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
						    	$inc = ($inc == 3) ? 1 : $inc + 1;
	       						if($inc == 1) echo "<div class='row'>";
	       						echo "
	       							<div class='col-sm-4'>
	       								<div class='box box-solid'>
		       								<div class='box-body prod-body'>
		       									<img src='".$image."' width='100%' height='230px' class='thumbnail'>
		       									<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
		       								</div>
		       								<div class='box-footer'>
		       									<b>S/ ".number_format($row['price'], 2)."</b>
		       								</div>
	       								</div>
	       							</div>
	       						";
	       						if($inc == 3) echo "</div>";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "Hay algún problema en la conexión: " . $e->getMessage();
						}

						$pdo->close();

		       		?> 

					
	        	</div>
				<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        	</div>
				
	        	
	        </div>
			
	      </section>
	     
	    </div>
	  </div>
	  <script src="//code.jivosite.com/widget/tl7HjxOf2B" async></script>

  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

</body>
</html>