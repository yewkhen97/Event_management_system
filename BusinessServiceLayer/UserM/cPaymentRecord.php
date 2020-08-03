<?php
require_once '../../libs/dbs.php';
/**
 * 
 */
class paymentRecord
{
	//attributes
	//if private need to use setter/getter
	public $output;


	
	public function save()
	{
		// insert query         
		$query = "INSERT INTO payment_record ('P_paymentID', 'eventPrice', 'P_paymentDate', 'P_paymentTime', 'P_verificationStatus', 'C_customerID', 'E_eventID', 'B_bookingID') VALUES (".P_paymentID.", ".eventPrice.", ".P_paymentDate.", ".P_paymentTime.", ".P_verificationStatus.", ".C_customerID.",".E_eventID.", ".B_bookingID.")";
		$parameter = [//bind parameter :name and :email to this class attributes
				':shows' => $this->shows,
		]; //[] means array
		//execute query
		$stmt = dbs::Run($query, $parameter);
	}
	
	
	public function deleteData()
	{
		$query = "DELETE * FROM booking";
		try {
			// use static method run() from class DB
			if ($stmt = dbs::Run($query)) { // we dont use fetch() or fetchAll() here
												   // because no data will be return when we
				                                   // perform delete operation
				return true;
			}
		} catch (PDOException $e) {
			return $e->getMessage();
		}
	}
	
	public static function getData($value='')
	{
		$query = "SELECT * FROM booking as bk INNER JOIN venue as v ON bk.V_venueID = v.V_venueID 
				  INNER JOIN equipment_order as eo ON eo.EOd_orderID = bk.EOd_orderID 
				  INNER JOIN event_package as ep ON ep.EP_packageID = bk.EP_packageID 
				  INNER JOIN equipment as e ON eo.EQ_equipmentID = e.EQ_equipmentID";

		//DB::Run will execute query and FetchAll will retrieve All data
		//use fetch to retrieve only 1 data
		$shows = dbs::Run($query)->fetchAll(PDO::FETCH_ASSOC);

		return $shows;
	}

	

}
?>
	
