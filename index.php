<?php

	//Dyanamic form field creation. 
	
	$items 		=	array(	
							array('id'=>1, 'name'=>'Field1','require'=>true,'validation_rules'=>array()),
							array('id'=>2, 'name'=>'Field2','require'=>false,'validation_rules'=>array()),
							array('id'=>3, 'name'=>'Field3','require'=>true,'validation_rules'=>array()),
							array('id'=>4, 'name'=>'Field4','require'=>true,'validation_rules'=>array()),
							array('id'=>5, 'name'=>'Field5','require'=>false,'validation_rules'=>array()),
							array('id'=>6, 'name'=>'Field6','require'=>true,'validation_rules'=>array())
	);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
		
		$( '#Save' ).click(function() {
			
			var items 			=	{};
			
			$( ".myinputbox" ).each(function( index ) {
				
				items[index]			=	{'id':$(this).attr('id'),'filedName':$(this).attr('filedName'),'fieldValue':$(this).val()};
			});
			
			var myJSON = JSON.stringify(items);
			$('#debug').html(myJSON);
			
			///send it to the server and  (you can  check  validation on the server for each fields); 
		
		});
});

</script>
<div class="container well">
	
	<div class="row well-sm">
		
	</div>
	<div class="row">

	<form  method="post" name ="myform" class="form" >

		<input type="hidden" name="sb" value="1">

			<ul class="list-group">
										 
						 <?php foreach($items as $spec_attr_key) { ?>
						  <li class="list-group-item">
							<label for="checkbox-1" class="checkbox-custom-label"><?php echo $spec_attr_key['name']; ?></label>
							
							<input type="text"  class="myinputbox" filedName="<?php echo $spec_attr_key['name']; ?>" id="<?php  echo $spec_attr_key['id']; ?>" name="attr_key_value[]" value="" class="atr_vlu">
							
						 </li>
						<?php  } ?>
			</ul>
			
			<input  class="btm btn-primary" type="button" id="Save" value="submit">
			<div class="well" >
				<p  id="debug"></p>
			</div>
		</form>
	</div>
