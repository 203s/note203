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
			<!-- 表の表示 ここから-->
				<table class="format-table" id="format-table1" border="1" cellpadding="5">
					<tr>
						<th>分類</th>
						<th>書式</th>
						<th>説明</th>
						<th></th>
						<th></th>
						<th>ID</th>
					</tr>
				<?php 
					$getTable111 = $connectDB->getTableAll("table111"); 
					// print_r($getTable111);
				?>
				<?php foreach ($getTable111 as $row) :?>
					<tr class="data-row">
						<td>
							<?= $row['tag'] ;?>
						</td>
						<td class='tag'>
							<?= $row['format'] ;?>
						</td>
						<td>
							<?= $row['text'] ;?>
						</td>
						<td class="url-cell">
							<a class='kome' href='<?= $row['url'];?>' target='_blank'><?php if($row['url'] != ''){echo ('<i class="fa fa-external-link fa-lg " title="別ウィンドウで参考ページを開く" aria-hidden="true"></i></i>');} ?></a>
						</td>
						<td class="edit-cell">
							<i class="fa fa-minus-square fa-lg " title="この行を削除" name="table111"aria-hidden="true"></i><i class="fa fa-pencil-square fa-lg" title="この行を編集" aria-hidden="true"></i><i class="fa fa-plus-square fa-lg" title="この下に1行追加" aria-hidden="true"></i>
						</td>
						<td class="id-cell"><?= $row['id'] ;?></td>
					</tr>
					<tr class="edit-row">
						<td colspan="5">
							<form class="add-form" action="">
								<span>↑上の行を書き換え</span>
								<input name="table111" class="edit-form-submit" type="button" value="実行">
								<ul class="form-list">
									<li><input type="text" name="tag" value="<?= $row['tag'] ;?>" onclick="this.select();"></li>
									<li><input type="text" name="format" value="<?= $row['format'] ;?>" onclick="this.select();"></li>
									<li><input type="text" name="text" value="<?= $row['text'] ;?>" onclick="this.select();"></li>
									<li><input type="text" name="url" value="<?= $row['url'];?>" onclick="this.select();"></li>
								</ul>
								
							</form>
						</td>
					</tr>
					<tr class="add-row">
						<td colspan="5">
							<form class="add-form" action="">
								<span>ここに1行追加</span>
								<input name="table111" class="insert-form-submit" type="button" value="実行">
								<ul class="form-list">
									<li><input type="text" name="tag" value="" placeholder="分類"></li>
									<li><input type="text" name="format" value="" placeholder="書式"></li>
									<li><input type="text" name="text" value="" placeholder="説明"></li>
									<li><input type="text" name="url" value="" placeholder="参考ページURL"></li>
								</ul>
								
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			
			<!-- 表の表示 ここまで-->
		</div>

<!-- 編集フォーム部品 ここから-->
		<div class="form-wrap">
			<span class="add-button">行を追加</span>
			<form id="tableform-id1-1" class="add-form" action="">
				<table class="add-table" border="1" cellpadding="2">
					<tr>
						<td><input type="text" name="tag" value="" placeholder="分類"></td>
						<td><input type="text" name="format" value="" placeholder="書式"></td>
						<td><input type="text" name="text" value="" placeholder="説明"></td>
						<td><input type="text" name="url" value="" placeholder="参考ページURL"></td>
					</tr>
				</table>
				<!-- 送信ボタンのnameを使って出力先のDBのテーブル名を指定 -->
				<input id="table111" name="table111" class="add-form-submit" type="button" value="追加">
			</form>
		</div>

<!-- 編集フォーム部品 ここまで -->
<div>
					<h2>サンプル</h2>
					<ol>
						<li class="sample">
							<h4>コロンで区切ったif構文</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code class="linenums">
&lt;?php $age = 25; ?&gt;

&lt;?php if ($age&lt;=15):?&gt;
15歳以下の料金は500円です。&lt;br&gt;
&lt;?php  elseif($age&lt;=19):?&gt;
16歳から19歳は2,000円です。&lt;br&gt;
&lt;?php else :?&gt;
20歳以上の大人は2,500円です。&lt;br&gt;
&lt;?php endif ; ?&gt;
									</code>
								</pre>
							</div>
						</li>
						</ol>
				</div>
		</section>
</div>zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
</main>


<script src="js/jq.js"></script>

</body>

</html>