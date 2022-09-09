<?php 
require_once('database/Database.php');
$db = new Database();
$sql = "SELECT *
		FROM item_type
		ORDER BY item_type_desc ASC";
$types = $db->getRows($sql);
// echo '<pre>';
// 	print_r($types);
// echo '</pre>';
 ?>
<div class="modal fade" id="modal-supplier">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-suppliers">
				<input type="hidden" id="suppliersid">
				<div class="form-group">
				    <label class="control-label col-sm-3" for=""> FirstName:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="firstname" placeholder="Enter FirstName" required="" autofocus="">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">LastName:</label>
				    <div class="col-sm-9"> 
				      <input type="text" min="0.1" step="any" class="form-control" id="lastname" placeholder="Enter LastName" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Email:</label>
				    <div class="col-sm-9">
				      <input type="email" maxlength="50" class="form-control" id="email" placeholder="xyz@gmail.com" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Phone:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="phone" placeholder="" required="" autofocus="">
				    </div>

					<div class="form-group">&nbsp;</div>

					<div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" id="submit-suppliers" value="add" class="btn btn-default">Save
				      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>


				  
				  </div>
				</form>
				
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php 
$db->Disconnect();
 ?>