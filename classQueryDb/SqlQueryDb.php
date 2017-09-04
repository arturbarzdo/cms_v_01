<?php 
class SqlQueryDb{

	protected $id;
	protected $title;
	protected $text;
	protected $media;
	protected $date;
	protected $tableName;
	
	
	function __construct($id, $title, $text, $media, $date, $tableName){
			
			$this->id = $id;
			$this->title = $title;
			$this->text = $text;
			$this->media = $media;
			$this->date = $date;
			$this->tableName = $tableName;
			
			
	}
			
			public function inserting(){
				
				$stmt = $dbh->prepare("INSERT INTO `$this->tableName` (`id`,`title`, `text`, `media`, `date`, `tableName`) VALUES (?, ?, ?, ?, ?, ?)");
					$stmt->bindParam(1, $this->id );
					$stmt->bindParam(2, $this->title );
					$stmt->bindParam(3, $this->text);			
					$stmt->bindParam(4, $this->media);			
					$stmt->bindParam(5, $this->date);			
					$stmt->bindParam(6, $this->tableName);
					
					$stmt -> execute();			
			
			}
	
		


}


?>