<?php
	class DataProvider
	{
		public static function ExecuteQuery($sql)
		{
			$connection = mysqli_connect('db4free.net', 'phamvan', '01051999Van', 'phamvanhcmus') or die('Không thể kết nối đến data');
			mysqli_query($connection, "set names 'utf8'");
			$result = mysqli_query($connection, $sql);
			mysqli_close($connection);
			return $result;
		}
		
		public static function ChangeURL($path)
		{
			echo '<script type = "text/javascript">';
			echo 'location = "'.$path.'";';
			echo '</script>';
		}
	}
?>