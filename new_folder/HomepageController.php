<?php include 'connection.php'; ?>
<?php
	class HomepageController{
		$snippets = array();
		public function __construct()
		{
			all_snippets();
		}

		public static function all_snippets()
		{
			if($con->connect_error){
				echo 'could not connect to database';
			}else{
				$result = mysqli_query($con, "select snippets.content from snippets where username='$username' order by snippets.time_created");
				foreach ($result->fetchAll() as $snippet)
				{
					$this->snippets[] = new SnippetModel($snippet['id'], $snippet['username'], $snippet['content']);
				}
			}
		}
	}
?>