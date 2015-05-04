<?php
		//define errors array
		    $errors = array();
		//define variables
			$name = $email = $phone = $buns = $busadd = $address = $state = $pcode = $country = $date = $newsletter = "";
    	//on submit validation begins
    		if(isset($_POST['submit'])){
			
		//grab post variables
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
		//checks for HTML characters to prevent XSS attacks (see http://en.wikipedia.org/wiki/Cross-site_scripting )
    		function test_input($data) {
    		$data = trim($data);
    		$data = stripslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
			}
		//name
			//check for empty
			if (empty($_POST['dfirst'])){
			$errors[]="please enter your full name";
			} else {
			//test for html characters
			$name =test_input($_POST['dfirst']);
			}
	
		//email
			if (empty($_POST["email"])) {
    		$errors[] = "Email is required";
    		} else {
    		$email = test_input($_POST["email"]);
			// check if e-mail address is valid or not
    		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    		$errors[]= "Invalid email format";
    		} }
    	
    	//phone
			if (empty($_POST["phone"])) {
			$errors[]= "phone is required";
			} else {
			$phone = test_input($_POST["phone"]);
			//strips anything but numbers
			$phone = preg_replace('/\D/', '', $phone);
			// check if phone is number
			if (is_numeric($phone)===false){
			$errors[]= "Invalid phone number"; }
			//checks for 10 digits and first digit is 0		
			if (! preg_match('/^0\d{9}$/', $phone)){		
			$errors[]= "Invalid phone number";
			} }
	
		//number of buns
			if (empty($_POST["buns"])) {
			$errors[]= "number of buns is required";
			} else {
			$buns = test_input($_POST["buns"]);
    		//strips anything but numbers
    		$buns = preg_replace('/\D/', '', $buns);
    		// check if buns is a number
    		if (is_numeric($buns)===false){
    		$errors[]= "Invalid number of buns, must be a number";
    		} }
    	
    		//Address
    		//couldn't find any simple php validation for address but if t was super necessary I would use the whole address including postcode, state and country and then plug that into some js and send it to google maps to validate
    		if (empty($_POST['staddress'])) {
    		$errors[]= "address is required";
    		} else {
			$address=test_input($_POST['staddress']);
    		} 
    	
    	//state
    		if (empty($_POST['raddress'])) {
    		$errors[]= "state is required";
    		} else {
			$state=test_input($_POST['raddress']);
    		}
    	
		//post Code
			if (empty($_POST['pcode'])) {
			$errors[]= "postcode is required";
    		} else {
			$pcode=test_input($_POST['pcode']);
			// check if postcode is number
			if (is_numeric($pcode)===false){
    		$errors[]= "Invalid postcode, try a number";
    		//strips anything but numbers
			$pcode = preg_replace('/\D/', '', $pcode);
			//checks for 4 digits 
			//(http://stackoverflow.com/questions/1204844/php-regular-expression-to-check-whether-a-number-consists-of-5-digits)
    		if (! preg_match('/\d{4}$/', $pcode)) {
    		$errors[] = "a postcode must contain 4 numbers";
    		} } }
    	
		//country
			if (empty($_POST['country'])) {
    		$errors[]= "country is required";
    		} else {
			$country=test_input($_POST['country']);
    		}
    	
    	//date
    		if (empty($_POST['dateday'])) {
	    	$errors[]= "date is required";
	    	} else {
			if (empty($_POST['datemonth'])) {
			$errors[]= "date is required";
			} else {
			if (empty($_POST['dateyear'])) {
			$errors[]= "date is required";
			} } }
	    	//check date
	    	//if (checkdate('datemonth','dateday','dateyear')===false){
			if ('dateyear'>2016){
	        $errors[]="please enter valid date";
	        }
     
	
			if (empty($errors) === true) {
    	//redirect to display page
    		$post_url = 'success.php?';
			/* this code redirects the user to a success.php page so that they do not keep refreshing this page and resubmitting
			the same information.  It also allows us to redisplay the correctly submitted information.  It is not normally necessary to display 
			this information as it would usually be inserted into a database table!!! */
    		foreach ($_POST AS $key=>$value){
			$post_url .= $key.'='.$value.'&';
    		}
    		$post_url = rtrim($post_url, '&');
    		header('Location:' .$post_url);
			exit();
			}
    		 print_r($errors);
			}
			}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Hot cross bun order page</title>
</head>
<body>
	<h1><a>Hot cross bun order</a></h1>	
<form id="hotbuns" class="hotbunsform"  method="post" action="/Vorp/Vorp/PHP/Assignments/rohan.php">
<h2>Hot cross bun order form</h2>	
<li id="name" >
	<label class="description" for="delivery">Name for delivery</label>
	<div>
		<input id="dfirst" name= "dfirst" class="element text" size="8" value="Name"/>
	</div>
</li>
<li id="email" >
	<label class="description" for="email">Email for delivery confirmation </label>
	<div>
		<input id="email" name="email" class="element text medium" type="text" maxlength="255" value="@"/> 
	</div> 
</li>
<li id="phone" >
	<label class="description" for="phone">Day-time phone </label>
	<div>
		<input id="phone" name="phone" class="element text medium" type="text" maxlength="13" value=""/> 
	</div> 
</li>
<li id="buns" >
	<label class="description" for="buns">How many buns did you require? </label>
	<div>
		<input id="buns" name="buns" class="element text small" type="text" maxlength="255" value=""/> 
	</div> 
</li>
<li id="busadd" >
	<label class="description" for="busadd"> </label>
	<span><input id="busadd" name="busadd" class="element checkbox" type="checkbox" value="1" />
	<label class="choice" for="busadd">Business address</label></span> 
</li>
<li id="address" >
	<label class="description" for="address">Address </label>
	<div>
		<input id="staddress" name="staddress" class="element text large" value="1 streetname street" type="text">
		<label for="staddress">Street Address</label>
	</div>
	<div>
		<input id="staddress2" name="staddress2" class="element text large" value="apartment 1" type="text">
		<label for="staddress2">Address Line 2</label>
	</div>
	<div class="left">
		<input id="caddress" name="caddress" class="element text medium" value="City" type="text">
		<label for="caddress">City</label>
	</div>
	<div class="right">
		<select class="element select medium" id="raddress" name="raddress"> 
			<option value="" selected="selected"></option>
			<option value="NSW" >New South Wales</option>
			<option value="QLD" >Queensland</option>
			<option value="SA" >South Australia</option>
			<option value="WA" >West Australia</option>
			<option value="VIC" >Victoria</option>
			<option value="NT" >Northern Territory</option>
			<option value="TAS" >Tasmania</option>
			<option value="ACT" >ACT</option>
		</select>
	<label for="raddress">State/Territory</label>
	</div>
	<div class="left">
		<input id="pcode" name="pcode" class="element text medium" maxlength="4" value="XXXX" type="text">
		<label for="pcode">Postal Code</label>
	</div>
	<div class="right">
		<label for="country">Country</label>
		<select class="element select medium" id="country" name="country"> 
			<option value="" selected="selected"></option>
			<option value="Australia" >Australia</option>
		</select>
	</div> 
</li>
<li id="date" >
	<label class="description" for="date">Delivery date? </label>
	<div>
		<span><label for="dateday">day</label>
		<input id="dateday" name="dateday" class="element text" size="2" maxlength="2" value="DD" type="text"> /
		</span>
		<span><label for="datemonth">month</label>
		<input id="date" name="datemonth" class="element text" size="2" maxlength="2" value="MM" type="text"> /
		</span>
		<span><label for="dateyear">year</label>
		<input id="dateyear" name="dateyear" class="element text" size="4" maxlength="4" value="YYYY" type="text">
		</span>
	</div>
</li>
<li id="newsletter" >
		<label class="description" for="newsletter">Would you like to sign up for our email newsletter? </label>
		<span><input id="newsletter" name="newsletter" class="element checkbox" type="checkbox" value="1" />
		<label class="choice" for="newsletter">yup</label>
		</span> 
</li>
<li class="submit">
	<input class="submit" type="submit" name="submit" value="Submit" />
</li>
</body>
</html>