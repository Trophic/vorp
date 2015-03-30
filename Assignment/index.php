
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Hot cross bun order page</title>
</head>
<body>
<?php

?>
<div id="form_container">
	
		<h1><a>Hot cross bun order</a></h1>
		<form id="hotbuns" class="hotbunsform"  method="post" action="/vorp/success.php">
					<div class="form_description">
			<h2>Hot cross bun order form</h2>
		</div>						
			<ul >
		<li id="name" >
		<label class="description" for="delivery">Name for delivery
        </label>
        <div>
		<span>
			<input id="dfirst" name= "dfirst" class="element text" maxlength="255" size="8" value="First"/>
		</span>
		<span>
			<input id="dlast" name= "dlast" class="element text" maxlength="255" size="14" value="Last"/>
		</span> 
		</div>
		</li>
		<li id="email" >
		<label class="description" for="email">Email for delivery confirmation </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value="@"/> 
		</div> 
		</li>		<li id="phone" >
		<label class="description" for="phone">Day-time phone </label>
		<div>
			<input id="phone" name="phone" class="element text medium" type="text" maxlength="13" value=""/> 
		</div> 
		</li>		<li id="buns" >
		<label class="description" for="buns">How many buns did you require? </label>
		<div>
			<input id="buns" name="buns" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id= "busadd" >
		<label class="description" for="busadd"> </label>
		<span>
			<input id="busadd" name="busadd" class="element checkbox" type="checkbox" value="1" />
        <label class="choice" for="busadd">Business address</label>
		</span> 
		</li>		<li id="address" >
		<label class="description" for="address">Address </label>
		
		<div>
			<input id="staddress" name="staddress" class="element text large" value="" type="text">
			<label for="staddress">Street Address</label>
		</div>
	
		<div>
			<input id="staddress2" name="staddress2" class="element text large" value="" type="text">
			<label for="staddress2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="caddress" name="caddress" class="element text medium" value="City" type="text">
			<label for="caddress">City</label>
		</div>
	
		<div class="right">
			<input id="raddress" name="raddress" class="element text medium" value="" type="text">
			<label for="raddress">State</label>
		</div>
	
		<div class="left">
			<input id="pcode" name="pcode" class="element text medium" maxlength="4" value="XXXX" type="text">
			<label for="pcode">Postal Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="country" name="country"> 
			<option value="" selected="selected"></option>
<!--option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option-->
<option value="Australia" >Australia</option>
<!--option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="GuineaBissau" >GuineaBissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option-->
			</select>
		<label for="country">Country</label>
	</div> 
		</li>		<li id="date" >
		<label class="description" for="date">Delivery date? </label>
		<div>
		<span>
				<label for="dateday">day</label>
				<input id="dateday" name="dateday" class="element text" size="2" maxlength="2" value="DD" type="text"> /
		</span>
		<span>
			<label for="datemonth">month</label>
			<input id="date" name="datemonth" class="element text" size="2" maxlength="2" value="MM" type="text"> /
		</span>
		<span>
			<label for="dateyear">year</label>
	 		<input id="dateyear" name="dateyear" class="element text" size="4" maxlength="4" value="YYYY" type="text">
		</span>
		</div>
		</li>		<li id="newsletter" >
		<label class="description" for="newsletter">Would you like to sign up for our email newsletter? </label>
		<span>
			<input id="newsletter" name="newsletter" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="newslettery">yup</label>
<input id="newslettern" name="newslettern" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="newslettern">nope</label>

		</span> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="hotbuns" value="1" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>
	</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	//grab post variables
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name =test_input($_POST['dfirst'.' '.'dlast']);
	$email=test_input($_POST['email']);
	$phone=test_input($_POST['phone']);
	$buns=test_input($_POST['buns']);
	$busadd=test_input($_POST['busadd']);
	$address=test_input($_POST['staddress'.' '.'staddress2'.' '.'caddress']);
	$state=test_input($_POST['saddress']);
	$pcode=test_input($_POST['pcode']);
	$country=test_input($_POST['country']);
	$date=test_input($_POST['dateday'.' '.'datemonth'.' '.'dateyear']);
	$newsletter=test_input($_POST['newsletter']);
	}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}
	?>
	    
	</body>
</html>