<?php
	require_once 'utils.php';
	/**
	 * 
	 */
	class Scores
	{
		//Db DETAILS
		private $server = "127.0.0.1";
		private $username = "root";
		private $password = "password";
		private $db = "golf";

		private $conn;


		public function __construct()
		{
			$this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
		}

		//Show a HTML form for filling out data. This could be used for editing too.
		public function showAdd(){
			$date = date("Y-m-d");
			echo '
				<form method="POST">
					Date: <input type="text" name="date" value="'.$date.'">
					Score: <input type="number" name="score">
					Handicap: <input type="number" name="handicap">
					<button type="submit">Submit</button
				</form>
			';
		}

		//Take data off a post request, past in from $_POST as $data,
		//Then we pull of the bits we need and build a sql insert.
		public function addScore($data){
			//Pull of date, score and handicap.
			$date = $data["date"];
			$score = $data["score"];
			$handicap = $data["handicap"];

			//Probably do some error handling here first...
			$sql = "INSERT INTO scores (date, score, handicap)
					VALUES ('$date', '$score', '$handicap')";

			if (mysqli_query($this->conn, $sql)) {
				echo "New record created successfully";
				$goto = $_SERVER["SERVER_NAME"]. ":". $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"] . "?success=true";
				header('Location: '."http://".$goto, true, 303);
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
			}

		}

		//Output HTML table of scores
		public function showScores($id = null){
			renderTable($this->getScores($id));
		}

		// Get all scores from table scores and return array of data.
		public function getScores($id = null){

			$myArray = array();
			if ($result = $this->conn->query("select * from scores")) {
				$data = $result->fetch_all(MYSQLI_ASSOC);
				return $data;
			}else{
				echo "Could not run Query";
			}
		}

		// TODO : delete a score
		public function delete($id = null){
			echo "<h2> I Should delete $id </h2>";
		}


		// TODO : delete a score
		public function update($id = null){
			echo "<h2> I Should update $id </h2>";
		}

	}