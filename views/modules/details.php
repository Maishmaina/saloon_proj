<div class="container">
<?php 
if (isset($_GET["productId"])) {
	$productId=$_GET["productId"];
	
}
 ?>	
 <div class="card py-5 my-5 bg-secondary">
 <div class="card-body">
<div class="row">
<div class="col-6">
<img src="views/img/products/conditioning.jpg" alt="productDescription" height="380px" width="500px">
</div>
<div class="col-6">
<div class="card">
<div class="card-body">
<h3>Conditioning</h3>
<form method="post">

 <div class="form-group">
  <label class="form-control-label font-weight-bold">Quantity</label>
<input type="number" class="form-control" name="quantity">
 </div>
<div class="form-group">
 <label class="form-control-label font-weight-bold">Time</label>
 <input type="text" class="form-control" name="time" placeholder="10-02-2020 10:30:00">
 </div>	
 <p class="font-weight-bold">Kshs 1000</p>
 <div class="form-group">
 <label class="form-control-label font-weight-bold"></label>
 <input type="submit" class="form-control btn btn-success" name="submit">
 </div>	
</form>	
</div>
</div>	
</div>
</div>
</div>	
 </div>
 </div>
