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

<!-- PDOを使った各種機能の呼び出し(実体化) -->
<?php 
	require_once("pdo_functions.php");
	$connectDB = new PDOfunctions();
	// var_dump($getTable);
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
				<?php $getTable111 = $connectDB->getTableAll("table111"); ?>
				<?php foreach ($getTable111 as $row) :?>
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

<!-- 編集フォーム部品 ここから-->
					<div class="form-wrap">
						<span class="add-button">行を追加</span>
						<form id="tableform-id1-1" class="add-form" action="">
							<table class="add-table" border="1" cellpadding="2">
								<tr>
									<td><input type="text" name="tag" value="" placeholder="タグ"></td>
									<td><input type="text" name="format" value="" placeholder="書式"></td>
									<td><input type="text" name="text" value="" placeholder="説明"></td>
									<td><input type="text" name="url" value="" placeholder="リンクURL"></td>
								</tr>
							</table>
							<!-- 送信ボタンのidを使って出力先のDBのテーブル名を指定 -->
							<input id="table111" class="add-form-submit" type="button" value="追加">
						</form>
					</div>

<!-- 編集フォーム部品 ここまで -->

</main>


<script src="js/jq.js"></script>

</body>

</html>