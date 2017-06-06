<?php

	//  table name + variable  /////////////////////////////////////////////////
		$test_tb = 'test_tb';
		$project_info_tb = 'project_info_tb';

		$NI     = 'NI';
		$Admin  = 'Admin';
		$Sales  = 'Sales';
		$typeNI     = array('หน่วยงาน', 'ชุมชน');
		$typeAdmin  = array('คอนโด');
		$typeSales  = array('ที่พัก', 'หมู่บ้าน');
	///////////////////////////////////////////////////////////////////////////

	session_start();
	$_SESSION['userType'] = $NI;
	//$_SESSION['userType'] = $Admin;
	//$_SESSION['userType'] = $Sales;

	if (isset($_GET['do'])) {

		if ($_GET['do'] == 'loaddata'){
			include 'config/dbconnect.php';

			$permission = '';
			$json_data = array();

			if($_SESSION['userType'] == $NI)
				$permission = $typeNI;
			else if($_SESSION['userType'] == $Admin)
				$permission = $typeAdmin;
			else if($_SESSION['userType'] == $Sales)
				$permission = $typeSales;

			if($permission != '') {

				////// query command 'SELECT * FROM _tb WHERE clause (OR clause)'
				$sql = 'SELECT * FROM '.$project_info_tb;
				$sql.= ' WHERE';

				foreach ($permission as $key => $value) {
					if ($key != 0)
							$sql .= ' or';
					$sql .= ' lot_type = "';
					$sql .= $value.'"';
				}
				////// query command ////////////////////////////////////////////

				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					while ($output = $result->fetch_array(MYSQLI_ASSOC)) {
						$nestedData   = array();
						$nestedData[] = $output['lot'];
						$nestedData[] = $output['number'];
						$nestedData[] = $output['lot_name'];
						$nestedData[] = $output['location_code'];
						$nestedData[] = $output['lot_address'];
						$nestedData[] = $output['contact_name'];
						$nestedData[] = $output['contact_tel'];
						$nestedData[] = $output['lot_district'];
						$nestedData[] = $output['status'];
						$nestedData[] = $output['lot_type'];
						$json_data[]  = $nestedData;
					}
				}
			}
			echo json_encode ([
				'data'  => $json_data
			]);
			$mysqli->close();
		}
	}
?>