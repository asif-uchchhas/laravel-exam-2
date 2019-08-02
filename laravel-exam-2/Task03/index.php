
<?php
include_once('database.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <main role="main" class="container">
        
		<h1 style="text-align:center;">Search customer order</h1>
		<form action="" method="POST">
		<span style="text-align:center;"><input type="text" name="name"class="form-control"placeholder="Please input customer name" />
		<button type="submit" name="submit" style="float:right; margin: 20px;" class="btn btn-primary waves-effect waves-light">Submit</button>
		</form>
		
		

<div class="customerView" style="margin-top:50px">
<table class="table">
  <thead>
    <tr>
      <th scope="col">customer name</th>
      <th scope="col">product name</th>
      <th scope="col">price</th>
      <th scope="col">vat</th>
      <th scope="col">total bill</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	if(isset($_POST['submit'])){
		$customer_name= $_POST["name"];
	$sql = "SELECT * FROM tbl_customer_order where customer_name='$customer_name'";
			$result = $mysqli->query($sql);							
	  if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$product_price = $row['price'];
			 $product_vat = $row['vat'];
			  $total_bill = ($product_price+$product_vat);
			
			   echo	"<tr> 
					
					   <td> " . $row['customer_name'] . "</td>
						 <td> " . $row['product_name'] . "</td>
						 <td> " . $row['price'] . "</td>
						 <td> " . $row['vat'] . "</td>
						 <td> " . $total_bill. "</td>
			</tr>";
				}
					} else {
			echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
		}
		
		}
	?>
	
  </tbody>
</table>

</div>
				
    </main><!-- /.container -->

 </body>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
      </body>
    </html>
    