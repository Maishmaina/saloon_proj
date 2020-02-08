<?php 
/*=======================================================
=            CONTROLLER FOR PRODUCT/SERVICES            =
=======================================================*/

class ProductController{
/*----------  function AddProduct  ----------*/
static public function ctrAddProduct () {


}
/*----------  function showProduct  ----------*/
static public function ctrShowProduct($item, $value) {

$table="products";
$response = ProductModel::mdlShowProduct($table,$item,$value);
return $response;

}
/*----------  function EditProduct  ----------*/
static public function ctrEditProduct () {

}
/*----------  function deleteProduct  ----------*/

static public function ctrDeleteProduct () {

}

}
 ?>