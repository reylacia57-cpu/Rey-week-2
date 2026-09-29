<?php
 class Product {
	private $product;
 	private $price; 	
 	private $quantity;

	public function setDetails($product, $price, $quantity) {
		$this->product = $product;
		$this->price = $price;
		$this->quantity = $quantity;
	}

	public function getDetails() {
		return[
		    'product' => $this->product,
			'price' => $this->price,
			'quantity' => $this->quantity
		];
}
		
		public function calculateTotal() {
        return $this->price * $this->quantity;
    }
  }
?>
 <!DOCTYPE html>
<html>
 <head>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 	<title>Product Inventory</title>
	 	 </head>
 <body>
 	<h1>Product Inventory</h1>
 	<form method="POST">
 		<div>
		<label>Product:</label>
		<input type="txt" name="txtProduct" placeholder="Enter your Product">
		</div>
		<div>
 			<label>Price:</label>
			<input type="number" name="txtPrice" placeholder="Enter your Price">
		</div>
	<div>
		<label>Quantity:</label>
			<input type="number" name="txtQuantity" placeholder="Enter your Quantity">
	</div>
		<div>  
			<input type="submit" name="btnSubmit" value="Calculate Total">
		</div>
	</form>

 </body>
 </html>

 <?php
     if(isset($_POST['btnSubmit'])) {


     	$product1 = new Product();
     	$product1->setDetails($_POST['txtProduct'], $_POST['txtPrice'], $_POST['txtQuantity']);
     	$details = $product1->getDetails();
     	$total = $product1->calculateTotal();
  

     	echo "Product: " . $details['product'];
     	echo "<br>";
     	echo "Price: " . $details['price'];
     	echo "<br>";
     	echo "Quantity: " . $details['quantity'] . "<br>";
     	echo "Total Cost:" . $total;
     }
     ?>





