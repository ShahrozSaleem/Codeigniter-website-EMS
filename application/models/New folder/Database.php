
<?php

	class Database{
		
		private $connection;
		Private $any;
		
		public function __construct()
		{		 
			$this->connection = mysqli_connect("localhost", "root", "", "e_m_s");
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
		}
		
		public function __destruct()
		{	 
			mysqli_close($this->connection);
		}
		
		public function GetData($Query) 
		{
			$exe = mysqli_query($this->connection, $Query);
			
			$result = mysqli_fetch_array($exe);	
			
			return $result;
		}
		
		public function GetAllData($Query) 
		{
			$exe = mysqli_query($this->connection, $Query);
			return $exe;
		}
		
		public function ReturnResult($col_name, $col_value, $table_name){
			
			$query = "Select * from $table_name where $col_name = $col_value";
			$exe = mysqli_query($this->connection, $query);	
			return $exe;
		}
		
		public function executeQuery($Query) 
		{
			mysqli_query($this->connection, $Query);
		}
		
	}

?>