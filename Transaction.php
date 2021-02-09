<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transactions</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="Table_Fixed_Header/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Fixed_Header/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver2 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
                                                                        <th class="cell100 column2">Transaction ID</th>
									<th class="cell100 column3">Mobile</th>
									<th class="cell100 column2">Operator</th>
									<th class="cell100 column2">Amount</th>
									<th class="cell100 column4">Transaction status</th>
                                                                        <th class="cell100 column1">Date and Time</th>
								</tr>
							</thead>
						</table>
					</div>
                                        <?php
                                        session_start();
                                if(!isset($_SESSION['Fname']))
                                {
                                    $_SESSION['nouser']="Access Denied!!";
                                    header("Location:index.php");
                                }
                                $mob2=$_SESSION['user_mobile'];
                                $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=urvish_php','root','');
                                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                $sql14=$dbhandler->query("select Transaction_ID,Mobile_number,Operator,Amount,Status,Time from transactions where User_Mobile='$mob2'");
                                echo '<div class="table100-body js-pscroll">';
                                echo '<table>';
				echo'<tbody>';
                                while($r=$sql14->fetch())
                                {
					
								echo '<tr class="row100 body">';
									echo '<td class="cell100 column2">'.$r['Transaction_ID'];
									echo '<td class="cell100 column3">'.$r['Mobile_number'];
									echo '<td class="cell100 column2">'.$r['Operator'];
									echo '<td class="cell100 column2">'.$r['Amount'];
									echo '<td class="cell100 column4">'.$r['Status'];
                                                                       echo '<td class="cell100 column1">'.$r['Time'];
								echo '</tr>';
                                }
                                echo '</tbody>';
				echo '</table>';
				echo '</div>';
				echo '</div>';?>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="Table_Fixed_Header/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Fixed_Header/vendor/bootstrap/js/popper.js"></script>
	<script src="Table_Fixed_Header/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Fixed_Header/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Fixed_Header/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="Table_Fixed_Header/js/main.js"></script>

</body>
</html>