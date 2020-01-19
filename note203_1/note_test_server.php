<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/note2.css">
<link rel="stylesheet" href="css/add_form.css">
<link rel="stylesheet" href="css/prettify.css"><!-- ソースコードスタイル -->
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,700&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" href="img/icon/証明書アイコン.png">
<title>note</title>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> <!-- jQ本体 -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script><!-- ソースコードスタイル -->
</head>
<!--
リンクURL
<td><a class="kome" href="●" target="_blank">※</a></td>


PDF リンク
<td><a class="pdf" href="redume/ファイル名" target="_blank">PDF</a></td>

サンプルコード
						<li class="sample">
							<h4>サンプル名</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
									</code>
								</pre>
							</div>
						</li>
-->

<body>

<!-- エンコードチェックとエスケープ処理|ここから -->
	<?php
	require_once("es_cken/es_cken.php");
	if (!cken($_POST)) {
		$encoding = mb_internal_encoding();
		$err = "Encoding Error! The expected encoding is " . $encoding ;
		exit($err);
	}
	$_POST = es($_POST);
	?>
<!-- エンコードチェックとエスケープ処理|ここまで -->


<header>
<!-- データベースに接続する|ここから -->

	<?php 
	$user = 'bokunopo';
	$password = '203member';
	$dbName = 'bokunopo_note203';
	$host = '2001:e42:101:13:59:106:27:155';
	$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

	try {
		$pdo = new PDO($dsn,$user,$password);
		// プリペアドステートメントのエミュレーションを無効にする
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		//例外がスローされる設定にする
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo "<small>データベース{$dbName}に接続しました。</small>";
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
				<h4><span class="spanh4">DDL(データ定義言語)</span></h4>
				<div class="table">
					<table class="csst" border="1" cellpadding="10">
						<tr >
							<td class="tag">CREATE DATABASE データベース名;</td>
							<td>「データベース名」というデータベースを作成</td>
							<td rowspan="7">
								<a class="pdf" href="redume/SQL/1：データベースの定義(DDL)入門.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr>
							<td class="tag">USE データベース名;</td>
							<td>「データベース名」というデータベースを使用</td>
						</tr>
						<tr>
							<td class="tag">SHOW DATABASES;</td>
							<td>データベースを確認</td>
						</tr>
						<tr>
							<td class="tag">SHOW TABLES;</td>
							<td>テーブルを確認</td>
						</tr>
						<tr>
							<td class="tag">SHOW COLUMNS FROM テーブル名;</td>
							<td>テーブルの列の内容を確認</td>
						</tr>
						<tr>
							<td class="tag">ALTER TABLE テーブル名 ADD 列名 INT(データ型) DEFAULT 0;</td>
							<td>「テーブル名」に列「列名」を追加</td>
						</tr>
						<tr>
							<td class="tag">DROP TABLE テーブル名;</td>
							<td>テーブルの削除</td>
						</tr>

					</table>

<!-- 編集フォーム部品 ここから-->
					<div class="form-wrap">
						<span class="add-button">行を追加</span>
						<form class="add-form" method="POST" action="<?= es($_SERVER['PHP_SELF'])?>">
							<table class="add-table" border="1" cellpadding="2">
								<tr>
									<td><input type="text" name="tag" value="" placeholder="タグ"></td>
									<td><input type="text" name="format" value="" placeholder="書式" required></td>
									<td><input type="text" name="text" value="" placeholder="説明"></td>
									<td><input type="text" name="url" value="" placeholder="リンクURL"></td>
								</tr>
							</table>
							<input type="submit" value="追加">
						</form>
					</div>
<!-- 編集フォーム部品　ここまで -->

				</div>

</main>
<!--
リンクURL
<td><a class="kome" href="●" target="_blank">※</a></td>


PDF リンク
<td><a class="pdf" href="redume/ファイル名" target="_blank">PDF</a></td>

サンプルコード
						<li class="sample">
							<h4>サンプル名</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
									</code>
								</pre>
							</div>
						</li>
-->

<script src="js/jq.js"></script>
<!-- Code injected by live-server -->

</body>

</html>