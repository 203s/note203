<?php
//参考：https://dotinstall.com/lessons/todo_app_php_v3
//必要な知識：PHPの「クラス」に関する基礎知識・PDOクラスの扱い・トライキャッチ


class PDOfunctions{

	private $pdo;
	

	//PDOでデータベースに接続(実体化したときに実行される)
	public function __construct(){
		try{
			$this->pdo = new \PDO(DSN,DB_USER,DB_PASS);
			$this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
			$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		}catch (Exception $e){
			echo $e->getMessage();
			exit();
		}
	}

//DBからデータの取得
	public function getTableAll($tableName){
		// テーブル名にはbindValue出来ないのでswitch文で場合分け
		switch($tableName){
			//書式表
			case 'user001Tab01Table':
				$sql = "SELECT * FROM `user001Tab01Table` ORDER BY id;";
			break;
			//MEMO
			case 'user001Tab01Memo':
				$sql = "SELECT * FROM `user001Tab01Memo` ORDER BY id;";
			break;
			//CODE
			case 'user001Tab01Code':
				$sql = "SELECT * FROM `user001Tab01Code` ORDER BY id;";
			break;
			}
		$stm = $this->pdo->prepare($sql);
		$stm->execute();
		return $stm->fetchAll(\PDO::FETCH_ASSOC);
	}


//入力されたフォーム毎に処理の振り分け
public function post(){
	if(!isset($_POST['mode'])){
		throw new \Exception('mode not set!');
	}

	switch($_POST['mode']){
		//書式表
		case 'addTableRow':
			return $this->_addTableRow();

		case 'deleteRow':
			return $this->_deleteTableRow();

		case 'editTableRow':
			return $this->_editTableRow();

		case 'insertTableRow':
			return $this->_insertTableRow();
		//MEMO
		case 'deleteMemo':
			return $this->_deleteMemo();
		case 'editMemo':
			return $this->_editMemo();
		case 'insertMemo':
			return $this->_insertMemo();
		//CODE
		case 'updateSampleCode':
			return $this->_updateSampleCode();

		case 'deleteSampleCode':
			return $this-> _deleteSampleCode();

		case 'editSampleCode':
			return $this-> _editSampleCode();
			
		case 'insertSampleCode':
			return $this-> _insertSampleCode();

			
		}
}

	//書式表----------------------------------------------------------

	//テーブルの最下行に追加する機能
	private function _addTableRow(){
		if(!isset($_POST['format'])){
			throw new \Exception('format not set!');
		}

		$tableName = $_POST["tableName"];
		$tag = $_POST["tag"];
		$format = $_POST["format"];
		$text = $_POST["text"];
		$url = $_POST["url"];
		$id = $_POST["id"];

		// テーブル名にはbindValue出来ないのでswitch文で場合分け
		switch($tableName){
			case 'user001Tab01Table':
				$sql = "INSERT INTO user001Tab01Table (tag,format,text,url,id) VALUES (:tag,:format,:text,:url,:id)";
		}
		$stm = $this->pdo->prepare($sql);
		// プレースホルダに値をバインドする
		$stm->bindValue(':tag', es($tag), PDO::PARAM_STR);
		$stm->bindValue(':format', es($format), PDO::PARAM_STR);
		$stm->bindValue(':text', es($text), PDO::PARAM_STR);
		$stm->bindValue(':url', es($url), PDO::PARAM_STR);
		$stm->bindValue(':id', es($id+1), PDO::PARAM_INT);
		// SQL文を実行する
		$stm->execute();

	}

	//テーブルの行削除機能
	private function _deleteTableRow(){

		$tableName = $_POST["tableName"];
		$id = $_POST["id"];
		switch($tableName){
				case 'user001Tab01Table':
					$sql = "DELETE FROM user001Tab01Table WHERE id = :id;";
			}
		$stm = $this->pdo->prepare($sql);
		$stm->bindValue(':id', es($id), PDO::PARAM_INT);
		$stm->execute();
	}

	//テーブルの指定行編集
	private function _editTableRow(){

		$tableName = $_POST["tableName"];
		$id = $_POST["id"];

		$tag = $_POST["tag"];
		$format = $_POST["format"];
		$text = $_POST["text"];
		$url = $_POST["url"];

		switch($tableName){
				case 'user001Tab01Table':
					$sql = "UPDATE user001Tab01Table SET tag = :tag, format = :format, text = :text, url = :url WHERE id = :id;";
			}
		$stm = $this->pdo->prepare($sql);

		$stm->bindValue(':tag', es($tag), PDO::PARAM_STR);
		$stm->bindValue(':format', es($format), PDO::PARAM_STR);
		$stm->bindValue(':text', es($text), PDO::PARAM_STR);
		$stm->bindValue(':url', es($url), PDO::PARAM_STR);
		$stm->bindValue(':id', es($id), PDO::PARAM_INT);

		$stm->execute();
	}


	//テーブルの指定行の下に一行追加
	private function _insertTableRow(){

		$tableName = $_POST["tableName"];
		$id = $_POST["id"];

		$tag = $_POST["tag"];
		$format = $_POST["format"];
		$text = $_POST["text"];
		$url = $_POST["url"];

		switch($tableName){
				case 'user001Tab01Table':
					$sql1 = "UPDATE user001Tab01Table SET id = id+1 WHERE id >:id;";
					$sql2 = "INSERT INTO user001Tab01Table (tag,format,text,url,id) VALUES (:tag,:format,:text,:url,:idPlus1);";
			}
		$stm1 = $this->pdo->prepare($sql1);
		$stm2 = $this->pdo->prepare($sql2);

		$stm1->bindValue(':id', es($id), PDO::PARAM_INT);

		$stm2->bindValue(':tag', es($tag), PDO::PARAM_STR);
		$stm2->bindValue(':format', es($format), PDO::PARAM_STR);
		$stm2->bindValue(':text', es($text), PDO::PARAM_STR);
		$stm2->bindValue(':url', es($url), PDO::PARAM_STR);
		$stm2->bindValue(':idPlus1', es($id+1), PDO::PARAM_INT);

		$stm1->execute();
		$stm2->execute();
	}
	
	
	//MEMO----------------------------------------------------------
		//MEMOの削除機能
		private function _deleteMemo(){

			$tableName = $_POST["tableName"];
			$id = $_POST["id"];
			switch($tableName){
					case 'user001Tab01Memo':
						$sql = "DELETE FROM `user001Tab01Memo` WHERE id = :id;";
				}
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(':id', es($id), PDO::PARAM_INT);
			$stm->execute();
		}
	
		//MEMOの編集
		private function _editMemo(){

			$tableName = $_POST["tableName"];
			$id = $_POST["id"];

			$text = $_POST["text"];
			$url = $_POST["url"];

			switch($tableName){
					case 'user001Tab01Memo':
						$sql = "UPDATE `user001Tab01Memo` SET text = :text, url = :url WHERE id = :id;";
				}
			$stm = $this->pdo->prepare($sql);

			$stm->bindValue(':id', es($id), PDO::PARAM_INT);
			$stm->bindValue(':text', es($text), PDO::PARAM_STR);
			$stm->bindValue(':url', es($url), PDO::PARAM_STR);

			$stm->execute();
		}
		//MEMOの追加
		private function _insertMemo(){

			$tableName = $_POST["tableName"];
			$id = $_POST["id"];

			$text = $_POST["text"];
			$url = $_POST["url"];

			switch($tableName){
				case 'user001Tab01Memo':
					$sql1 = "UPDATE `user001Tab01Memo` SET id = id+1 WHERE id >:id;";
					$sql2 = "INSERT INTO `user001Tab01Memo` (text, url, id) VALUES (:text,:url, :idPlus1);";
			}
			$stm1 = $this->pdo->prepare($sql1);
			$stm2 = $this->pdo->prepare($sql2);

			$stm1->bindValue(':id', es($id), PDO::PARAM_INT);

			$stm2->bindValue(':text', es($text), PDO::PARAM_STR);
			$stm2->bindValue(':url', es($url), PDO::PARAM_STR);
			$stm2->bindValue(':idPlus1', es($id+1), PDO::PARAM_INT);

			$stm1->execute();
			$stm2->execute();
		}
	//サンプルコード----------------------------------------------------------

	private function _updateSampleCode(){

		$tableName = $_POST["tableName"];
		$id = $_POST["id"];

		$title = $_POST["title"];
		$code = $_POST["code"];

		switch($tableName){
				case 'user001Tab01Code':
					$sql = "UPDATE `user001Tab01Code` SET title = :title, code = :code WHERE id =:id;";
			}
		$stm = $this->pdo->prepare($sql);

		$stm->bindValue(':id', es($id), PDO::PARAM_INT);
		$stm->bindValue(':title', es($title), PDO::PARAM_STR);
		$stm->bindValue(':code', es($code), PDO::PARAM_STR);

		$stm->execute();
	}

		//サンプルコードの削除機能
		private function _deleteSampleCode(){

			$tableName = $_POST["tableName"];
			$id = $_POST["id"];
			switch($tableName){
					case 'user001Tab01Code':
						$sql = "DELETE FROM `user001Tab01Code` WHERE id = :id;";
				}
			$stm = $this->pdo->prepare($sql);
			$stm->bindValue(':id', es($id), PDO::PARAM_INT);
			$stm->execute();
		}


		//サンプルコードの編集
		private function _editSampleCode(){

			$tableName = $_POST["tableName"];
			$id = $_POST["id"];

			$title = $_POST["title"];
			$code = $_POST["code"];

			switch($tableName){
					case 'user001Tab01Code':
						$sql = "UPDATE `user001Tab01Code` SET title = :title, code = :code WHERE id = :id;";
				}
			$stm = $this->pdo->prepare($sql);

			$stm->bindValue(':id', es($id), PDO::PARAM_INT);
			$stm->bindValue(':title', es($title), PDO::PARAM_STR);
			$stm->bindValue(':code', es($code), PDO::PARAM_STR);

			$stm->execute();
		}

		//サンプルコードを下に追加
		private function _insertSampleCode(){

		$tableName = $_POST["tableName"];
		$id = $_POST["id"];

		$title = $_POST["title"];
		$code = $_POST["code"];

		switch($tableName){
				case 'user001Tab01Code':
					$sql1 = "UPDATE `user001Tab01Code` SET id = id+1 WHERE id >:id;";
					$sql2 = "INSERT INTO `user001Tab01Code` (title, code, id) VALUES (:title,:code, :idPlus1);";
			}
		$stm1 = $this->pdo->prepare($sql1);
		$stm2 = $this->pdo->prepare($sql2);

		$stm1->bindValue(':id', es($id), PDO::PARAM_INT);

		$stm2->bindValue(':title', es($title), PDO::PARAM_STR);
		$stm2->bindValue(':code', es($code), PDO::PARAM_STR);
		$stm2->bindValue(':idPlus1', es($id+1), PDO::PARAM_INT);

		$stm1->execute();
		$stm2->execute();
	}

}


