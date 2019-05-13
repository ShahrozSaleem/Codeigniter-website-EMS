

<?php

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('user_model');
		
		$obj = $this->user_model->GetALLUser();
		
		foreach($obj as $ab){
			//echo $ab.result() . "<br>" . $ab.result() . "<br>";
		}
	}
	
}

?>