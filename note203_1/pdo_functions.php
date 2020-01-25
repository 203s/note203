<?php
//参考：https://dotinstall.com/lessons/todo_app_php_v3
//必要な知識：PHPの「クラス」に関する基礎知識・PDOクラスの扱い・トライキャッチ


class PDOfunctions{

	private $pdo;
	

	//PDOでデータベースに接続
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
	public function getTableAll(){
		$stmt = $this->pdo->query("SELECT * FROM note203_table1");
		return $stmt->fetchAll(\PDO::FETCH_OBJ);
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

		$tag = $_POST["tag"];
		$format = $_POST["format"];
		$text = $_POST["text"];
		$url = $_POST["url"];
		
		// SQL文を作る
		$sql = "INSERT INTO note203_table1 (id,tag,format,text,url) VALUES ('',:tag,:format,:text,:url)";
		// プリペアドステートメントを作る
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


