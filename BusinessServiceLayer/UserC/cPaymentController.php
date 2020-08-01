<?php
//include class model user
require_once '../../BusinessServiceLayer/UserM/cPaymentRecord.php';

/**
 * 
 */
class paymentController
{

	public function operator()
	{
		//check if data is submitted
		//check data from form 

		//create new object user
		$value= new paymentRecord();
		
		//pass form data to model	
		//set user attributes
		$value->shows = $_POST['$shows'];

		$value->save();
			

	}
	
	public function getValue()
	{
		// assign the returned values(array of user object) to variable users
		$shows = paymentRecord::getData(); // we use the static method All() that we
							  // created in user model to retrieve all 
							  // data for user
		return $shows;
	}
	
	public function destroy()
	{
		$delete = new paymentRecord();
		$delete->deleteData();

	}

	

	
}
?>