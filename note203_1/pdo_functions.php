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
			case 'table111':
				$sql = "SELECT * FROM table111";
		}
		$stm = $this->pdo->prepare($sql);
		// $stm->bindValue(':tname', 'table111', PDO::PARAM_STR);
		// SQL文を実行する
		$stm->execute();
		return $stm->fetchAll(\PDO::FETCH_OBJ);
	}

	//入力されたフォーム毎の処理の振り分け
	public function post(){
		if(!isset($_POST['mode'])){
			throw new \Exception('mode not set!');
		}

		switch($_POST['mode']){
			case 'addTableRow':
				return $this->_addTableRow();
		}
	}

	//テーブルに行追加する機能
	private function _addTableRow(){
		if(!isset($_POST['format'])){
			throw new \Exception('format not set!');
		}

		$tableName = $_POST["tableName"];
		$tag = $_POST["tag"];
		$format = $_POST["format"];
		$text = $_POST["text"];
		$url = $_POST["url"];

		// テーブル名にはbindValue出来ないのでswitch文で場合分け
		switch($tableName){
		//下の「id」に対応する値はDBの設定でオートインクリメント(数値が自動で振られる)にしているので空白で送信する
			case 'table111':
				$sql = "INSERT INTO table111 (id,tag,format,text,url) VALUES ('',:tag,:format,:text,:url)";
		}
		$stm = $this->pdo->prepare($sql);
		// プレースホルダに値をバインドする
		$stm->bindValue(':tag', es($tag), PDO::PARAM_STR);
		$stm->bindValue(':format', es($format), PDO::PARAM_STR);
		$stm->bindValue(':text', es($text), PDO::PARAM_STR);
		$stm->bindValue(':url', es($url), PDO::PARAM_STR);
		// SQL文を実行する
		$stm->execute();

	}
}


