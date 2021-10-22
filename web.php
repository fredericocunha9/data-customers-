<?php
	include "conn.php";
	
	$sql= "SELECT * FROM customers";
	$query = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($query)){
		//echo $data["name"]." ";

		$item[] = array(
			'CustomerID'=>$data["CustomerID"],
			'CompanyName'=>$data["CompanyName"],
			'ContactTitle'=>$data["ContactTitle"],
			'Address'=>$data["Address"],
			'City'=>$data["City"],
			'PostalCode'=>$data["PostalCode"],
			'Country'=>$data["Country"],
			'Phone'=>$data["Phone"]
		);
	}

	$response = array(
		'took' => 1602573034.227,
		'code' => 200,
		'message'=>'Response Succesfully',
		'data'=>$item
	); 

	echo json_encode($response);
?>