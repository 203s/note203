<!-- PHPエラーチェックとPDO接続設定情報の呼び出し -->
<?php require_once("setting.php");?>


<!-- エンコードチェックとエスケープ処理の呼び出し -->
<?php
	require_once("es_cken/es_cken.php");
	if (!cken($_POST)) {
		$encoding = mb_internal_encoding();
		$err = "Encoding Error! The expected encoding is " . $encoding ;
		exit($err);
	}
?>
<!-- エンコードチェックとエスケープ処理|ここまで -->

<?php 
	require("pdo_functions.php");
	$connectDB = new PDOfunctions();
	$getTable = $connectDB->getTableAll();
	// var_dump($getTable);
	// exit;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/note203.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/prettify.css"><!-- ソースコードスタイル -->
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,700&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" href="img/icon/証明書アイコン.png">
<title>note203_server</title>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> <!-- jQ本体 -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script><!-- ソースコードスタイル -->
</head>


<body>
<header>
<!-- データベースに接続する|ここから -->

<?php 

	try {
		$pdo = new PDO(DSN,DB_USER,DB_PASS);
		// プリペアドステートメントのエミュレーションを無効にする
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		//例外がスローされる設定にする
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo '<small>データベースに接続しました。</small>';
		//接続を解除する
		$pdo = NULL;
		// Exeption：例外オブジェクト(エラーに関する様々な情報をもつ) 別名$eに設定している
		} catch (Exception $e) {
		echo'<span class="error">エラーがありました。</span><br>';
		echo $e->getMessage();
		exit();
		}
	?>
<!-- データベースに接続する|ここまで -->

<ul class="tabs">
	<li class="tab current" id="tab-sql"><a href="#sql" style="color: #53001c;">SQL</a></li>
	<li class="tab" id="tab-php"><a href="#php" style="color: #53001c;">PHP</a></li>
</ul>
</header>
<main>
	<div id="sql">
		<section class="html">
		<h1 style="background-color: #5d1614;">SQL</h1>
		<div class="table">
			<h4><span class="spanh4">DDL(データ定義言語)</span></h4>
				<table class="format-table" id="format-table1" border="1" cellpadding="5">
					<tr>
						<th>タグ</th>
						<th>書式</th>
						<th>説明</th>
						<th>リンク</th>
						<th>ID</th>
					</tr>

				<?php foreach ($getTable as $row) :?>
					<tr>
						<td><?= $row->tag ;?></td>
						<td class='tag'><?= $row->format ;?></td>
						<td><?= $row->text ;?></td>
						<td><a class='kome' href='<?= $row->url;?>' target='_blank'>※</a></td>
						<td><?= $row->id ;?></td>
					</tr>
				<?php endforeach; ?>


			</table>
		</div>


<?php 
// require("pdo_functions.php");
 ?>


<?php
// フォームにレコードの追加  ここから
if(isset($_POST["format"])){
	$tag = $_POST["tag"];
	$format = $_POST["format"];
	$text = $_POST["text"];
	$url = $_POST["url"];
	//MySQLデータベースに接続する
	try {
		// SQL文を作る
		$sql = "INSERT INTO note203_table1 (id,tag,format,text,url) VALUES ('',:tag,:format,:text,:url)";
		// プリペアドステートメントを作る
		$stm = $pdo->prepare($sql);
		// プレースホルダに値をバインドする
		$stm->bindValue(':tag', es($tag), PDO::PARAM_STR);
		$stm->bindValue(':format', es($format), PDO::PARAM_STR);
		$stm->bindValue(':text', es($text), PDO::PARAM_STR);
		$stm->bindValue(':url', es($url), PDO::PARAM_STR);
		// SQL文を実行する
		$stm->execute();
		}catch(Exception $e){
		echo '<span class="error">エラーがありました。</span><br>';
		echo $e->getMessage();
		}

		// require("pdo_functions.php");
		
	}
// フォームにレコードの追加  ここまで

?>
<!-- 編集フォーム部品 ここから-->
					<div class="form-wrap">
						<span class="add-button">行を追加</span>
						<form id="form_id" class="add-form" action="">
							<table class="add-table" border="1" cellpadding="2">
								<tr>
									<td><input type="text" name="tag" value="" placeholder="タグ"></td>
									<td><input type="text" name="format" value="" placeholder="書式"></td>
									<td><input type="text" name="text" value="" placeholder="説明"></td>
									<td><input type="text" name="url" value="" placeholder="リンクURL"></td>
								</tr>
							</table>
							<input id="table-form-submit1" type="button" value="追加">
						</form>
					</div>
<!-- 編集フォーム部品 ここまで -->


</main>


<script src="js/jq.js"></script>

</body>

</html>