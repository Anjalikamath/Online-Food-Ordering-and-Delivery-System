
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="../theStyle/theStyle.css">

			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
	</head>
	<body>

	<div class="main">

				<br><br>
				 <!--&nbsp; &nbsp; Name &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; &nbsp; <span id="uname"></span><br><br>-->
				 &nbsp; &nbsp; UserId &nbsp; &nbsp; : &nbsp; &nbsp; &nbsp; &nbsp; <span id="uid"></span><br><br>
				<script>

			function getCookie(cname) {
				var name = cname + "=";
				var ca = document.cookie.split(';');
				for(var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			function convName(uname) {
				var name = ""
				for (var i = 0; i < uname.length; i++) {
					if (uname[i]=='+') {
						name = name+' ';
					}
					else {
						name = name+uname[i];
					}
				}
				return name;
			}
					//uname = convName(getCookie("user_cat").toUpperCase());
					//dispName = document.getElementById('uname');
					//dispName.textContent = uname;
					uid = getCookie("user_id").replace('%40','@');
					dispId = document.getElementById('uid');
					dispId.textContent = uid;
				</script>
				<br>
			</div>


						<?php

						extract($_POST);
						$Id_req = $_COOKIE["user_id"];

						$conn = mysqli_connect("localhost","root","");
						mysqli_select_db($conn,"dbms_project");

						echo "
							<script>
							var h1 = document.querySelectorAll('#id_req_ip');
							for (i = 0, len = h1.length; i < len; i++) { 
							    h1[i].setAttribute('value','".$Id_req."');
							}
							</script>
							";
						$query = "SELECT Restaurant_Name as o from Restaurant WHERE Restaurant_FSSAI_No IN (SELECT Restaurant_FSSAI_No FROM foodorder WHERE Customer_Email_Id = '$Id_req');";
						
					    $res = mysqli_query($conn,$query);

					    while ($row = mysqli_fetch_assoc($res)) {
					    	echo "<p>".$row['o']."</p>";
					    }

/*
						$borr_b = array();
						$borr_r = array();
						while ($row = mysqli_fetch_assoc($res)) {
								$books_borr = array($row['book1'], $row['book2'], $row['book3']);
								$ret_borr = array($row['ret1'], $row['ret2'], $row['ret3']);
							if ($row['book1']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book1']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b1\' value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret1']."';
									</script>
									";
							}
							if ($row['book2']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book2']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b2\'  value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret2']."';
									</script>
									";
							}
							if ($row['book3']!='-') {
								echo "
									<script>
										var tab_retren = document.getElementById('retren');
										var trEl = document.createElement('tr');
										var td1El = document.createElement('td');
										var td2El = document.createElement('td');
										var td3El = document.createElement('td');
										tab_retren.appendChild(trEl);
										trEl.appendChild(td1El);
										trEl.appendChild(td2El);
										trEl.appendChild(td3El);
										td1El.textContent = '".$row['book3']."';
										td2El.innerHTML = '<label><input type=\'radio\' name=\'b3\' value=\'renew\'> Renew</label>';
										td3El.textContent = '".$row['ret3']."';
									</script>
									";
							}

						}
					?>
					<script>
						var elecnt = 1;
						var f1 = document.getElementById('returnRenew');
						var b1 = document.createElement('button');
						b1.setAttribute('type','submit');
						b1.setAttribute('style','width:20%; float:right;');
						b1.textContent = 'RENEW';
						f1.appendChild(b1);
						function pass_change() {
							if (elecnt) {
								var passFrm = document.getElementById('passChange');
								var inp1 = document.createElement('input');
								var inp2 = document.createElement('input');
								inp1.setAttribute('type','password');
								inp1.setAttribute('name','pwd');
								inp1.setAttribute('placeholder','Enter current password');
								inp2.setAttribute('type','password');
								inp2.setAttribute('name','npwd');
								inp2.setAttribute('placeholder','Enter new password');
								passFrm.appendChild(inp1);
								passFrm.appendChild(inp2);
								var b1 = document.createElement('button');
								b1.setAttribute('type','submit');
								b1.setAttribute('style','width:20%; float:right;');
								b1.textContent = 'CHANGE-PWD';
								passFrm.appendChild(b1);
								elecnt = 0
							}
						}
					</script>
				<br><br><br>

			</div>
		</div>
*/
?>