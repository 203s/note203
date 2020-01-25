<?php
// レコードリストを取得して表示		
try {
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// SQL文を作る
	$sql = "SELECT * FROM note203_table1";
	$stm = $pdo->prepare($sql);
	$stm->execute();//実行
	//結果の取得(連想配列で受け取る)
	$result = $stm->fetchAll(PDO::FETCH_ASSOC);
	// print_r($result);
	}catch(Exception $e){
 	echo '<span class="error">エラーがありました。</span><br>';
 	echo $e->getMessage();
}
?>

		<div class="table">
			<h4><span class="spanh4">DDL(データ定義言語)</span></h4>
				<table class="format-table" border="1" cellpadding="5">
					<tr>
						<th>ID</th>
						<th>タグ</th>
						<th>書式</th>
						<th>説明</th>
						<th>リンク</th>
					</tr>

				<?php foreach ($result as $row) :?>
					<tr>
						<td><?= $row['id'] ;?></td>
						<td><?= $row['tag'] ;?></td>
						<td class='tag'><?= $row['format'] ;?></td>
						<td><?= $row['text'] ;?></td>
						<td><a class='kome' href='<?= $row['url'] ;?>' target='_blank'>※</a></td>
					</tr>
				<?php endforeach; ?>


			</table>
		</div>

