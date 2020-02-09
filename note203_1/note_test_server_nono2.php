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
<!-- <link rel="stylesheet" href="css/prettify2.css"> -->
<!-- ソースコードスタイル -->
<link rel="stylesheet" href="css/desert.css">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,700&display=swap" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- <script src="https://kit.fontawesome.com/097e55a36d.js" crossorigin="anonymous"></script> -->
<link rel="icon" href="img/icon/証明書アイコン.png">
<title>note203_server</title>
<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script> <!-- jQ本体 -->
<!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>ソースコードスタイル -->
</head>

<?php 
//ページの生成に必要な情報
$username = "user001";
//各タブの生成に必要な情報
$tabArray = [
	["num" => "00", "color" => "", "" => ""],
	["num" => "01", "color" => "", "" => ""],
	["num" => "02", "color" => "", "" => ""],
	["num" => "03", "color" => "", "" => ""],
	["num" => "04", "color" => "", "" => ""],
	["num" => "05", "color" => "", "" => ""],
	["num" => "06", "color" => "", "" => ""],
	["num" => "07", "color" => "", "" => ""],
	["num" => "08", "color" => "", "" => ""],
	["num" => "09", "color" => "", "" => ""]
] ;
?>

<body onload="PR.prettyPrint()">
<header style="border-color: #004053">
<ul class="tabs">
	<li class="tab current" id="tab-sql" style="background-color: #004053;"><a href="#sql">Java</a></li>
	<li class="tab" id="tab-php"><a href="#php">PHP</a></li>
</ul>
</header>
<main>
	<div id="sql">
		<section class="html">
		<h1 style="background-color: #004053;">Java</h1>
		<div class="table">
			<!-- <h4><span class="spanh4">DDL(データ定義言語)</span></h4> -->
			<!-- 表の表示 ここから-->
				<table class="format-table" id="format-table1" border="1" cellpadding="5">
					<tr>
						<th>分類</th>
						<th>書式</th>
						<th>説明</th>
						<th></th>
						<th></th>
						<th class="id-cell">ID</th>
					</tr>
				<?php 
					$dbTableTable = "{$username}Tab01Table";
					// $dbTableTable = "{$username}Tab{$tab['num']}Table";
					$getAllTable = $connectDB->getTableAll($dbTableTable); 
					// print_r($getuser001Tab01Table);
				?>
				<?php foreach ($getAllTable as $row) :?>
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
							<i class="minus1 fa fa-minus-square fa-lg " title="この行を削除" name="user001Tab01Table"aria-hidden="true"></i><i class="pencil1 fa fa-pencil-square fa-lg" title="この行を編集" aria-hidden="true"></i><i class="plus1 fa fa-plus-square fa-lg" title="この下に1行追加" aria-hidden="true"></i>
						</td>
						<td class="id-cell"><?= $row['id'] ;?></td>
					</tr>
					<tr class="edit-row">
						<td colspan="5">
							<form class="add-form" action="">
								<span style="color: #74b690; font-weight: bold;">↑上の行を編集</span>
								<input name="user001Tab01Table" class="edit-form-submit" type="button" value="実行">
								<ul class="form-list">
									<li class="tag-input"><input type="text" name="tag" value="<?= $row['tag'] ;?>"placeholder="分類"></li>
									<li class="format-input"><input type="text" name="format" value="<?= $row['format'] ;?>" placeholder="書式"></li>
									<li class="text-input"><input type="text" name="text" value="<?= $row['text'] ;?>" placeholder="説明"></li>
									<li class="url-input"><input type="text" name="url" value="<?= $row['url'];?>" placeholder="参考ページURL" onclick="this.select();"></li>
								</ul>
								
							</form>
						</td>
					</tr>
					<tr class="add-row">
						<td colspan="5">
							<form class="add-form" action="">
								<span style="color: #5b8bc2; font-weight: bold;">ここに1行追加</span>
								<input name="user001Tab01Table" class="insert-form-submit" type="button" value="実行">
								<ul class="form-list">
									<li class="tag-input"><input type="text" name="tag" value="" placeholder="分類"></li>
									<li class="format-input"><input type="text" name="format" value="" placeholder="書式"></li>
									<li class="text-input"><input type="text" name="text" value="" placeholder="説明"></li>
									<li class="url-input"><input type="text"name="url" value="" placeholder="参考ページURL"></li>
								</ul>
								
							</form>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
			
			
		</div>
<!-- 表の表示 ここまで-->
<hr>
<!-- MEMOの表示 ここから-->
<?php 
	$dbMemoTable = "{$username}Tab01Memo";
	// $dbMemoTable = "{$username}Tab{$tab['num']}Table";
	$getAllMemo = $connectDB->getTableAll($dbMemoTable); 
	// print_r($getSampleCodeAll110);
?>

			<div class="memo-wrap">
				<h2 style="border-left: 10px solid #004053">MEMO</h2>
						<?php foreach ($getAllMemo as $row) :?>
							<div class="memo">
								<div class="memo-line">
									<div class="memo-text-wrap">
										<?php if($row['text'] != ''){echo ('<img class="mark2" src="img/icon/mark2.png">');} ?>
										<span class="memo-text"><?= $row['text'] ;?></span>
									</div>

									<a class='kome' href='<?= $row['url'];?>' target='_blank'><?php if($row['url'] != ''){echo ('<i class="link-memo fa fa-external-link" title="別ウィンドウで参考ページを開く" aria-hidden="true"></i>');} ?></a>

									<i class="minus-memo fa fa-minus-square" title="このメモを削除" name="user001Tab01Memo" aria-hidden="true"></i>
									<i class="pencil-memo fa fa-pencil-square" title="このメモを編集" name="user001Tab01Memo" aria-hidden="true"></i>
									<i class="plus-memo fa fa-plus-square" title="この下にメモを新規追加" name="user001Tab01Memo"  aria-hidden="true"></i>
									<span class="memo-id"><?= $row['id'] ;?></span>
								</div>

	<!-- MEMO編集フォーム ここから -->
								<div class="edit-memo-wrap">
									<form class="add-memo" action="">
										<span style="color: #74b690; font-weight: bold; line-height:2.5;">
											↑このサンプルを編集
										</span>
										<input name="user001Tab01Memo" class="edit-memo-submit" type="button" value="実行">
										<br>
										<input class="memo-text-form" type="text" name="text" placeholder="メモ" value="<?= $row['text'] ;?>">
										<input class="memo-url-form" type="text" name="url" placeholder="参考URL" value="<?= $row['url'] ;?>" onclick="this.select();">
									</form>
								</div>
								<div class="add-memo-wrap">
									<form class="add-memo" action="">
										<span style="color: #5b8bc2; font-weight: bold; line-height:2.5;">
										<img class="mark2" src="img/icon/mark2.png">ここにサンプルを新規追加
										</span>
										<input name="user001Tab01Memo" class="insert-memo-submit" type="button" value="実行"><input type="hidden" name="scroll_top" value="" class="st">
										<br>
										<input class="memo-text-form" type="text" name="text" placeholder="メモ">
										<input class="memo-url-form" type="text" name="url" placeholder="参考URL">
									</form>
								</div>
							</div><!-- "sample" -->
					<?php endforeach; ?>

			</div>

<hr>

<!-- サンプルコード ここから -->
<?php 	
	$dbCodeTable = "{$username}Tab01Code";
	// $dbCodeTable = "{$username}Tab{$tab['num']}Code";
	$getAllCode = $connectDB->getTableAll($dbCodeTable); 
	// print_r($getSampleCodeAll110);
?>

			<div class="sample-wrap">
				<h2 style="border-left: 10px solid #004053">CODE</h2>
						<?php foreach ($getAllCode as $row) :?>
							<div class="sample">
								<div class="sample-title">
									<div class="title-title">
										<?php if($row['title'] != ''){echo ('<img class="mark1" src="img/icon/mark1.png" width="10px">');} ?>
										<span class="code-title"><?= $row['title'] ;?></span>
									</div>
									<i class="minus2 fa fa-minus-square" title="このサンプルを削除" name="user001Tab01Code"aria-hidden="true"></i><i class="pencil2 fa fa-pencil-square" title="このサンプルを編集" class="user001Tab01Code" aria-hidden="true"></i><i class="plus2 fa fa-plus-square" title="このコードの下にサンプルを新規追加" class="user001Tab01Code"  aria-hidden="true"></i>
									<span class="code-id"><?= $row['id'] ;?></span>
								</div>
								<div class="code-box">
									<pre class="prettyprint linenums">
<code class="code-code"><?= $row['code'] ;?></code>
									</pre>
								</div><!-- "code-box" -->
	<!-- サンプルコード ここまで -->

	<!-- サンプルコード編集フォーム ここから -->
								<div class="edit-code-wrap">
									<form class="add-code" action="">
										<span style="color: #74b690; font-weight: bold; line-height:2.5;">
											↑このサンプルを編集
										</span>
											<input name="user001Tab01Code" class="edit-code-submit" type="button" value="実行">
										<br>
										<input class="code-title-form" type="text" name="title" placeholder="タイトル" value="<?= $row['title'] ;?>">
										<br>
										<textarea name="code" rows="16" placeholder="コードをペースト"	cols="40" >
<?= $row['code'] ;?></textarea>
									</form>
								</div>
								<div class="add-code-wrap">
									<form class="add-code" action="">
										<span style="color: #5b8bc2; font-weight: bold; line-height:2.5;">
										<img clas="mark1" src="img/icon/mark1.png" width="10px"> ここにサンプルを新規追加
										</span>
										<input name="user001Tab01Code" class="insert-code-submit" type="button" value="実行">
										<br>
										<input class="code-title-form" type="text" name="title" placeholder="タイトル" >
										<br>
										<textarea name="code" rows="8" placeholder="コードをペースト"	cols="40"></textarea>
									</form>
								</div>
							</div><!-- "sample" -->
					<?php endforeach; ?>
			</div><!-- "sample-warap" -->
	<!-- サンプルコード編集フォーム ここまで -->
	</div><!-- "sql" -->
</main>


<script src="js/display_jq.js"></script>
<script src="js/ajax_jq.js"></script>
<script src="js/prettify.js"></script>
<!-- <script src="js/textWithLF.js"></script> -->

</body>

</html>