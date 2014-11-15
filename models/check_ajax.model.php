<?php
	class check_ajaxModel extends db{
		private static $conn=null;
		public function check_thumuc($name){
			if(empty(self::$conn)){
				self::$conn=$this->connect_pdo();
			}
			$sql="SELECT name FROM thumuc WHERE name=?";
			$stmt=self::$conn->prepare($sql);

			$stmt->bindParam(1,$name);
			$stmt->execute();
			$num_row=$stmt->rowCount();
			if($num_row>0){
				return true;
			}else{
				return false;
			}
		}
	}
?>