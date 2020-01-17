<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/note2.css">
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
				<h4><span class="spanh4">DDL(データ定義言語)</span></h4>
				<!-- タグ表 ==
				========================================================================-->
				<div class="table">
					<table class="csst" border="1" cellpadding="10">
						<tr >
							<td class="tag">CREATE DATABASE データベース名;</td>
							<td>「データベース名」というデータベースを作成</td>
							<td rowspan="8">
								<a class="pdf" href="redume/SQL/1：データベースの定義(DDL)入門.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr>
							<td class="tag">CREATE TABLE テーブル名(<br>
								　num INT(2) NOTNULL
								　code CHAR(4) NOT NULL<br>
								　name VARCHAR(20) NOT NULL<br>
								　PRIMARY KEY (code)<br>
								);</td>
								<td>「テーブル名」という表を作成（<br>
									「num」という列(2桁の数値、NULLを許さない) <br>
									「code」という列(固定長４文字)<br>
									「name」という列(可変長20文字)<br>
									nameを主キーに設定<br>
									)<br>

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
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>