<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">

<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	  <div class="content-wrapper" style="background: white;">
	   <div class="container">
            <div class="row">
            <div class="col-8 col-sm-6">
				    <div class="container" id="advanced-search-form" style="float: left; display: contents;">
        <h2 style="border-bottom: 1px solid #959595!important;padding-bottom: 15px; margin: 0 0 40px!important;">Detallar Información</h2>
        <form action="verifyprov.php" method="POST">
            <div class="form-group">
                <label for="first-name">Nombres</label>
                <input type="text" class="form-control" placeholder="Ingrese su nombre" id="first-name">
            </div>
            <div class="form-group">
                <label for="last-name">Apellidos</label>
                <input type="text" class="form-control" placeholder="Ingrese su apellido" id="last-name">
            </div>
            <div class="form-group">
                <label for="country">País</label>
                <input type="text" class="form-control" placeholder="País" id="country">
            </div>
            <div class="form-group">
                <label for="number">Telefono</label>
                <input type="text" class="form-control" placeholder="Número telefónico" id="number">
            </div>
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="text" class="form-control" placeholder="Edad" id="age">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email">
            </div>
            <div class="form-group">
                <label for="category">Direccion</label>
                <input type="text" class="form-control" placeholder="Dirección" id="category">
            </div>
            
            
        </form>
    </div>
 
            </div>
            <div class="col-4 col-sm-6">
            <h2 style="border-bottom: 1px solid #959595!important;padding-bottom: 15px; margin: 0 0 40px!important;">Resumen de tu compra</h2>
            <table class="table table-bordered">
		        			<thead>
                  <th></th><th></th>
		        				<th>Nombre</th>
		        				<th>Precio</th>
		        				<th width="20%">Cantidad</th>
		        				<th>Subtotal</th>
		        			</thead>
		        			<tbody id="tbody">
		        			</tbody>
		        		</table>
                <section class="content">	
                  
                  <div id='paypal-button' style="margin-bottom: 20px;" >
                  
                  <a href="TCPDF-main/examples/example_001.php"><button  type="button" class="btn btn-primary" style="background-color: #RED;color: #000000cf;font-weight: 700;border-color: #f1ac0a;border-radius: 15px">COMPRAR</button></a>
                  </div>
    		    	</section>
                <?php include 'includes/scripts.php'; ?>
<script>
var total = 0;
$(function(){
	$(document).on('click', '.cart_delete', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		$.ajax({
			type: 'POST',
			url: 'cart_delete.php',
			data: {id:id},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.minus', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		if(qty>1){
			qty--;
		}
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	$(document).on('click', '.add', function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var qty = $('#qty_'+id).val();
		qty++;
		$('#qty_'+id).val(qty);
		$.ajax({
			type: 'POST',
			url: 'cart_update.php',
			data: {
				id: id,
				qty: qty,
			},
			dataType: 'json',
			success: function(response){
				if(!response.error){
					getDetails();
					getCart();
					getTotal();
				}
			}
		});
	});

	getDetails();
	getTotal();

});

function getDetails(){
	$.ajax({
		type: 'POST',
		url: 'cart_details.php',
		dataType: 'json',
		success: function(response){
			$('#tbody').html(response);
			getCart();
		}
	});
}

function getTotal(){
	$.ajax({
		type: 'POST',
		url: 'cart_total.php',
		dataType: 'json',
		success:function(response){
			total = response;
		} 
	}); 
} 
</script> 
<!-- Paypal Express --> 

<?php include 'includes/scripts.php'; ?> 