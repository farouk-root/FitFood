<!DOCTYPE html>
<html>
<head>
	<title>FitFood Ordering </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

<div class="container">
	<img src="download.jpg" class="logo">

	<h3>FitFood Ordering </h3>
	<h4>complete this form to purchase your order</h4>

	
	<form action="order_set.php" method="post" >
		
		<!-- Data inside table -->
		<table align="center" cellpadding="5">
			<tr>
				<td>
					<!-- Name -->
					
					<p>
						<label>*Name: </label>
						<input type="text" name="name" id="name">
					</p>
					<p id ="err" ></p>
				
					<!-- Email -->
					<p>
						<label>*Email: </label>
						<input type="email" name="email" id="email">
					</p>

					<!-- Address -->
					<p>
						<label>*Address: </label>
						<input type="text" name="address" id="address">
					</p>	
				</td>
				<td colspan="2">
					<!-- Telephone -->
					
					<p>
						<label>*Phone: </label>
						<input type="text" maxlength="8"  name="tel" id="tel">
						
					</p>
					<p id ="msg2" ></p>
					
					<!-- City -->
					<p>
						<label>*City: </label>
						<input type="text" name="city" id="city">
					</p>

					<!-- District -->
					<p>
						<label>*District: </label>
						<input type="text" name="dis" id="dis">
					</p>
				</td>
			</tr>
			<!-- Choics Options -->
			<tr>
				<th>Drinks</th>
				<th>Size</th>
			</tr>

			<!-- Row 1 -->
			<tr>
				<td><input type="radio" name="type" value="Apple Juice">Apple juice</td>
				<td><input type="radio" name="size" value="small" value="Small">Small</td>
				
			</tr>

			<!-- Row 2 -->
			<tr>
				<td><input type="radio" name="type" value="Lemonade">Lemonade</td>
				<td><input type="radio" name="size" value="Medium">Medium</td>
				
			</tr>

			<!-- Row 3 -->
			<tr>
				<td><input type="radio" name="type" value="Orange Juice">Orange Juice</td>
				<td><input type="radio" name="size" value="Large">Large</td>
				
			</tr>

			<!-- Row 4 -->
		

			<!-- Delivery Time -->
			<tr>
				<td>
					<label>Preffered Delivery Time: </label>
				</td>
				<td colspan="2">
					<input type="time" name="delivery_time" id="delivery_time">
				</td>
			</tr>

			<!-- Delivery Instruction -->
			<tr>
				<td>
					<label>Delivery Instructions: </label>
				</td>
				<td colspan="2">
					<textarea rows="5" cols="30" name="instuctions" id="instuctions"></textarea>
				</td>
			</tr>

			<!-- Submit Button -->
			<tr>
				<td colspan="3" align="center">
					<button type="submit" name="submit" id="submit"> Submit Order</button>
				</td>
			</tr>

		</table>
	</form>
</div>
<script src="script1.js" async></script>

</body>
</html>