
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
		                    <img src="images/banner-garantia.jpg" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/noso2.jpg" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/Comprar-de-forma-segura-en-internet.jpg" alt="Third slide">
		                  </div>
						</div>
						
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
                    <DIV ALIGN="center">
                    <body>
                       <h1 style="color:black;">PeruvianShop</h1>
					
					</DIV>
						<div>
						<h3>
							
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">PeruvianShop S.A. somos&nbsp;una empresa pionera integrada por una diversidad de talentos con la finalidad de ofrecer servicios de primerísima calidad y alto valor agregado en el campo de las soluciones virtuales comerciales.</span></p>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">Nos caracterizamos por ofrecer una diversa gama de estrategias y herramientas tecnológicas de vanguardia, dirigidas a comerciantes y empresarios del mercado global contemporáneo.</span></p>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">PeruvianShop S.A. es fundada en la ciudad de Lima -Perú &nbsp;por un consolidado y selecto grupo de profesionales, perfectamente calificados y preparados para llevar a cabo los más avanzados proyectos del sector tecnológico y de negocios, totalmente comprometidos con la idea de satisfacer las más exigentes necesidades de nuestros clientes bajo la responsabilidad de aportar más y mejores beneficios al mundo comercial, produciendo resultados positivos ante las dinámicas del mercado internacional.</span></p>
								<h4><span style="font-family:verdana, geneva;color:#6aa8bf;"><strong>Misión </strong></span></h4>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">La misión primordial de la empresa consiste en asegurar a la gran diversidad de comercios, empresas, proveedores y almacenes, una entrada al mercado global, aplicando y ejecutando iniciativas tecnológicas de alto valor estratégico. Bajo esta perspectiva, nuestro grupo de expertos ha tenido la visión de diseñar, constituir, gerenciar y poner en marcha un gran mall virtual, denominado <strong>PeruvianShop.com, “El Mall Virtual de la Región de Lima”</strong>va con el firme objetivo de alojar y gestionar sucursales virtuales a miles de negocios, cuyos productos y servicios puedan ser posicionados en otros mercados, más allá de sus fronteras comerciales actuales,&nbsp;y ser despachados a una amplia red de clientes y compradores en todas partes del mundo.</span></p>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">Comenzaremos nuestra labor en Perú, incorporando negocios al mall virtual y continuaremos extendiendo y fortaleciendo nuestras estructuras en toda las regiones del Perú.</span></p>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">He aquí una gran oportunidad para que los negocios en cada plaza, en cada país, puedan colocar sus productos y servicios en una vitrina de alcance global para poder mostrarlos, venderlos y entregarlos en&nbsp;cualquier parte del planeta.</span></p>
								<h4><span style="font-family:verdana, geneva;color:#6aa8bf;"><strong>Visión</strong></span></h4>
								<p><span style="font-size:14px;line-height:150%;color:#404040;font-family:Verdana, Geneva, sans-serif;">Queremos llegar a ser una de las empresas líderes en comercialización electrónica y distribución de productos y servicios, trascendiendo las fronteras con una plataforma digital única, en un contexto virtual y por medio de herramientas tecnológicas que logren competir eficientemente en los más diversos y altamente competitivos mercados nacionales e internacionales.</span></p></div>
	        			</div>
						</body>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
