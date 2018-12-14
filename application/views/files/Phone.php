<div class="container">
<h1>Phone Module </h1>
<div class="col-md-4">	
<form class="form-horizontal" action="<?php echo base_url('index.php/Home/phoneForm'); ?>" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Phone Name</label>
    <div class="col-sm-9">
      <input name="product_name" type="text" class="form-control" id="inputEmail3" placeholder="product_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Model</label>
    <div class="col-sm-9">
      <input name="model_name" type="text" class="form-control" id="inputPassword3" placeholder="model">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-3 control-label">Details</label>
    <div class="col-sm-9">
    	<textarea name="product_details" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>
</div>
<div class="col-md-8">
<table class="table table-bordered table-striped">
  <tr>
  		<th>SL</th>
		<th>NAME</th>
		<th>MODEL</th>
		<th>ACTION</th>
  </tr>

<?php 
foreach ($phone_lists as $phone_list){
?>
  <tr>
  		<td><?php echo $phone_list->id; ?></td>
		<td><?php echo $phone_list->product_name; ?></td>
		<td><?php echo $phone_list->model_name; ?></td>
		<td>
			<a href="" class="btn btn-sm btn-primary">View</a>
			<a href="" class="btn btn-sm btn-warning">Update</a>
			<a href="<?php echo base_url('index.php/Home/phoneDelete/'); ?><?php echo $phone_list->id; ?>" class="btn btn-sm btn-danger">Remove</a>
		</td>
  </tr>
<?php 
}
?>
</table>
</div>
</div>