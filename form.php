<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>CV Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header>
	
	</header>
	
	<section class="showcase">
		<div class="container">
			<div class="form">
				<form id="sform" name="sform"  method="post" action="insert.php" onsubmit="return valiform()">

					<div class="form-one">
						<h3>Personal Information</h3>
					<div class="form-control">
						<label>First Name</label>
						<input  type="text" name="fname" placeholder="Enter First Name" id="fname">
						
					</div>
					<div class="form-control">
						<label>Last Name</label>
						<input  type="text" name="lname" placeholder="Enter Last Name" id="lname" >
					</div>
					<div class="form-control">
						<label>Father’s Name</label>
						<span id="father_name"></span>
						<input type="text" name="father_name" placeholder="Enter Father’s Name">
					</div>
					<div class="form-control">
						<label>Mother’s Name</label>
						<input type="text" name="mother_name" placeholder="Enter First Name" id="mother_name">
					</div>
					<div class="form-control">
						<label>Date of Birth</label>
						<input type="date" name="dob" placeholder="Enter First Name">
					</div>
					<div class="form-control">
						<label>Blood Group	</label>
						<select type="text" name="blood" >
							<option>O+</option>
							<option>O-</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
						</select>
					</div>
					<div class="form-control">
						<label>Religion</label><br>
						<select type="text" name="religion" >
							<option>Islam</option>
							<option>Hinduism</option>
							<option>Buddhists</option>
							<option>Christianity</option>						
							<option>Other religions</option>
						</select>
					</div>
					<div class="form-control">
						<label>Gender</label><br/>
						<select name="gender">
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="u">Unknown</option>
						</select>
					</div>
					<div class="form-control">
						<label>Marital Status</label>
						<input type="text" name="marital" placeholder="Enter Status">
					</div>
					<div class="form-control">
						<label>National ID No</label>
						<input type="text" name="nid" id="nid"
						placeholder="Enter National ID">
					</div>
					<div class="form-control">
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter Email">
					</div>
					<div class="form-control">
						<label>Contact</label>
						<input type="text" name="contact" id="contact" placeholder="Enter Contact">
					</div>
              <div class="form-control">
						<label>Address</label>
						<textarea type="text" name="address"></textarea>
						
					</div>
					
						</div>
						<div class="form-two">
							<h3>Education Information</h3>
							<div class="form-control">
								<h4>Secondary School Certificate (SSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="s_institute" placeholder="Enter Institute Name">
					</div>
						<div class="form-control">
								
						<label>Group</label>
						<input type="text" name="s_group" placeholder="Enter Group">
					</div>
					<div class="form-control">
								
						<label>Passing Year</label>
						<select type="text" name="s_pass" >
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label>
						<input type="text" name="s_result" placeholder="Enter Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="s_board" >
							<option value="dha">Dhaka Board</option>
							<option value="bar">Barisal Board</option>
							<option value="syl">Sylhet Board</option>
							<option value="com">Comilla Board</option>
							<option value="chi">Chittagong Board</option>
							<option value="raj">Rajshahi Board</option>
							<option value="jes">Jessore   Board</option>
							<option value="din">Dinajpur Board</option>
							<option value="mad">Madrasah Board</option>

						</select>
					</div>
					<div class="form-control">
								<h4>Higher Secondary Certificate (HSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="h_institute" placeholder="Enter Institute">
					</div>
						<div class="form-control">
								
						<label>Group</label><br>
						<select type="text" name="h_group" >
							<option>Science</option>
							<option>ARS</option>
							<option>Commerce</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Passing Year</label><br>
							<select type="text" name="h_pass" >
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label><br>
						<input type="text" name="h_result" placeholder="Enter Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="h_board" >
							<option value="dha">Dhaka Board</option>
							<option value="bar">Barisal Board</option>
							<option value="syl">Sylhet Board</option>
							<option value="com">Comilla Board</option>
							<option value="chi">Chittagong Board</option>
							<option value="raj">Rajshahi Board</option>
							<option value="jes">Jessore   Board</option>
							<option value="din"> Dinajpur Board</option>
							<option value="mad">Madrasah Board</option>

						</select>

					</div>
					<div class="form-control">
						<label>Picture</label>
						<input type="file" name="pic" >
					</div>
						</div>

						<input type="submit" name="submit" value="register">
				</form>
				
			</div>
			
		</div>
	</section>
	<footer>
		<p>&copy;gmjahidhasan55@gmail.com</p>
	</footer>

</body>
</html>

<script>  
function valiform(){  
var fname=document.sform.fname.value;
var lname=document.sform.lname.value;
var nid=document.sform.nid.value;
var contact=document.sform.contact.value;      
var status=false;  
  
if(fname==null || fname==""){  
document.getElementById("fname").style.border=  
"2px solid #000";  
status=false;  
}else{  
document.getElementById("fname").style.border=  
"2px solid red";   
status=true;  
} 
if(lname=="" || lname==null){  
document.getElementById("lname").style.border=  
"1px solid #000"; 
status=false;  
}else{  
document.getElementById("lname").style.border=  
"1px solid red";
}  
 if(nid=="" || nid==null){  
document.getElementById("nid").style.border=  
"1px solid #000"; 
status=false;  
}else{  
document.getElementById("nid").style.border=  
"1px solid red";
} 
 if(contact=="" || contact==null){  
document.getElementById("contact").style.border=  
"1px solid red"; 
status=false;  
}else{  
document.getElementById("contact").style.border=  
"1px solid green";
} 

return status;  
}  
</script> 