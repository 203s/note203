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
	<li class="tab" id="tab-htmlcss"><a href="#htmlcss" style="color: #00532a;">HTML/CSS</a></li>
	<li class="tab" id="tab-js"><a href="#js" style="color: #4c0053;">JavaScript</a></li>
	<li class="tab" id="tab-jq"><a href="#jq">jQuery</a></li>
	<li class="tab" id="tab-sql"><a href="#sql" style="color: #53001c;">SQL</a></li>
	<li class="tab current" id="tab-php"><a href="#php" style="color: #53001c;">PHP</a></li>
</ul>
</header>
<main>
<div id="htmlcss">
<section class="html">
<h1>HTML</h1>
		<h4><span class="spanh4">HTMLタグ</span></h4>
		<!-- HTMLタグ表 ==
		========================================================================-->
		<div class="table">
			<table class="htmlt" border="1">
				<tr>
					<th></th>
					<th>htmlタグ</th>
					<th></th>
					<th></th>
					<th colspan="2">参考</th>
					<th>よく使う属性</th>
				</tr>
				<tr><td>head内</td><td class="tag">&ltmeta&gt</td><td></td><td>htmlの基本的な設定</td><td></td><td></td><td>charset=""/name=""/content=""</td></tr>
				<tr><td rowspan="5">空箱系</td>
					<td class="tag">&ltsection&gt</td><td></td><td>階層構造を含むならこれ</td><td></td><td rowspan="5"><a class="kome" href="https://mdstage.com/html-css/html-intermediate/section-article" target="_blank">※</a></td><td></td></tr>
				<tr><td class="tag">&ltarticle&gt</td><td></td><td>sectionよりシンプル</td><td></td><td></td></tr>
				<tr><td class="tag">&ltaside&gt</td><td></td><td>脇役的コンテンツ</td><td></td><td></td></tr>
				<tr><td class="tag">&ltnav&gt</td><td></td><td>メニュー等</td><td></td><td></td></tr>
				<tr><td class="tag">&ltdiv&gt</td><td></td><td>汎用性高い箱</td><td></td><td></td></tr>

				<tr><td rowspan="7">文字スタイル系</td>
						<td class="tag">&ltem&gt</td><td>-</td><td>斜体になる</td><td></td><td></td><td></td></tr>
					<tr><td class="tag">&ltstrong&gt</td><td>-</td><td>強調表示　<small class="add">検索エンジンに検知される</small></td><td></td><td>&nbsp;</td><td></td></tr>
					<tr><td class="tag">&ltb&gt</td><td>-</td><td>太字　<small class="add">検索エンジンには検知されない</small></td><td></td><td>&nbsp;</td><td></td></tr>
					<tr><td class="tag">&ltsmall&gt</td><td>-</td><td>著作権・免責事項など</td><td></td><td>&nbsp;</td><td></td></tr>
					<tr><td class="tag">&ltbr&gt</td><td>-</td><td>改行　<small class="add">終了タグなし</small></td><td></td><td></td><td></td></tr>
					<tr><td class="tag">&lta&gt</td><td>-</td><td>リンク先の指定</td><td></td><td><a class="kome" href="https://saruwakakun.com/html-css/basic/a-link" target="_blank">※</a></td><td>href=""/ target="_blank"</td></tr>
					<tr><td class="tag">&ltspan&gt</td><td>-</td><td>汎用インライン要素</td><td></td><td></td><td></td></tr>
				<tr><td rowspan="9">要素追加系</td>
						<td class="tag">&ltul&gt&ltol&gt</td><td></td><td>リスト親要素</td><td></td><td><a class="kome" href="https://saruwakakun.com/html-css/basic/ul-ol-li#section2" target="_blank">※</a></td><td></td></tr>
					<tr><td class="tag">&ltimg&gt</td><td>-</td><td>画像の挿入</td><td><a href="sample/index.html" target="_blank">〇</a></td><td><a class="kome" href="http://www.htmq.com/html5/img.shtml" target="_blank">※</a></td><td>src=""/alt=""/width=""/height=""</td></tr>
					<tr><td class="tag">&ltvideo&gt</td><td></td><td>動画の挿入</td><td><a href="sample/pages/product.html" target="_blank">〇</a></td><td><a class="kome" href="https://webliker.info/52510/" target="_blank">※</a></td><td>src=""/autoplay/controls/muted/loop</td></tr>
					<tr><td class="tag">&lttable&gt</td><td></td><td>表の作成</td><td ><a href="sample/pages/service.html" target="_blank">〇</a></td><td><a class="kome" href="https://www.sejuku.net/blog/49377" target="_blank">※</a></td><td>border/rowspan/colspan</td></tr>
					<tr><td class="tag">&ltform&gt</td><td></td><td>フォームの作成</td><td rowspan="4"><a href="sample/pages/contact.html" target="_blank">〇</a></td><td rowspan="3"><a class="kome" href="https://proengineer.internous.co.jp/content/columnfeature/3941#1" target="_blank">※</a></td><td>action="遷移先"/method="post(DB更新)/get(DBから入手)"</td></tr>
					<tr><td class="tag">→&ltinput&gt</td><td></td><td>form部品・入力欄</td><td>type="text|submit|button"/pattern=""/autofocus/required</td></tr>
					<tr><td class="tag">→&lttextarea&gt</td><td></td><td>form部品・テキストエリア</td><td>cols="" rows=""/placeholder=""/name=""</td></tr>
					<tr><td class="tag">→&ltlabel&gt</td><td></td><td>form部品にラベル追加</td><td><a class="kome" href="https://www.tagindex.com/html5/form/label.html" target="_blank">※</a></td><td>for="部品の指定" </td></tr>
				<tr>
					<td class="tag">→&ltselect&gt<br>→→&ltoption&gt</td>
					<td></td>
					<td>セレクトボックス</td>
					<td ></td>
					<td ></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="3">引用</td>
					<td class="tag">&ltblockquote&gt</td>
					<td></td>
					<td>長文引用</td>
					<td rowspan="3"><a href="jtripsuit/index.html" target="_blank">〇</a></td>
					<td rowspan="3"><a href="https://techacademy.jp/magazine/5755" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">&ltq&gt</td>
					<td></td>
					<td>短文引用</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">&ltcite&gt</td>
					<td></td>
					<td>引用元表記</td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="3">定義リスト</td>
					<td class="tag">&ltdl&gt</td>
					<td></td>
					<td>定義リスト</td>
					<td rowspan="3"><a href="jtripsuit/index.html" target="_blank">〇</a></td>
					<td rowspan="3"><a href="https://webliker.info/13381/#toc_3" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">→&ltdt&gt</td>
					<td></td>
					<td>被定義</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">→&ltdd&gt</td>
					<td></td>
					<td>定義</td>
					<td></td>
				</tr>

				</table>
		</div>





		<!-- htmlメモ 
		===========================================-->




<div>
		<h4><span class="spanh4">MEMO.</span></h4>
			<ul>
				<li>「&+copy+;」で&copy;が表示される(＋は入力不要)</li>
				<li>「../」←ひとつ上のフォルダまでさかのぼってファイルパスを指定する　</li>
				<li><span class="bgw">&lta href="#()"&gt</span> でページ内リンク<a href="https://seolaboratory.jp/42119/#p05" class="kome" target="_blank">※</a></li>
				<li>地図リンクはGooglemapの「共有」から簡単にタグを取得できる</li>
				<li><b>&ltHR&gt</b>で水平線</li>
			</ul>
		</div>
</section>
















<!-- CSS-->
<section class="css">
	<!-- css表
	================================================================================= -->
	<h1 class="h1css">CSS</h1>
		<div class="table">
			<table class="csst" border="1">
				<tr>
					<th></th>
					<th>セレクタ{プロパティ: 値;}</th>
					<th></th>
					<th colspan="2">参考</th>
				</tr>
				<tr>
					<td rowspan="7">Flexbox</td>
					<td class="tag">親 {display: flex;}</td>
					<td>子要素を横並びに</td>
					<td rowspan="6"><a name="kome" href="https://www.webcreatorbox.com/tech/css-flexbox-cheat-sheet" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">親 {align-items: flex-start/flex-end/center;}</td>
					<td>子要素の垂直方向揃え</td>
					<td></td>
				</tr>

				<tr>
					<td class="tag">親 {flex-direction: column;}</td>
					<td>子要素を縦並びに</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">親 {flex-wrap: wrap/nowrap;}</td>
					<td>子要素を折り返して並べる</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">親 {align-content:;}</td>
					<td>wrapした場合の子要素のそろえ方の指定</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">親 {justify-content: space-around/center/space-between;}</td>
					<td>子要素の水平方向揃え</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">子{flex: 整数/auto/initial/none}</td>
					<td></td>
					<td><a class="kome" target="_blank" href="https://developer.mozilla.org/ja/docs/Web/CSS/flex">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="tag">{box-sizing: border-box/content-box;}</td>
					<td>マージン(パディング)をコンテンツのサイズに含める</td>
					<td><a class="kome" target="_blank" href="https://pasonyu.com/css-box-sizing/">※</a></td>
					<td></td>

				</tr>
				<tr>
					<td rowspan="2">擬似クラス</td>
					<td class="tag">a:link {}<br>a:visited {}<br>a:hover {}<br>a:active {}</td>
					<td>未訪問リンクのスタイル指定(上から順に指定↓)<br>訪問済みリンクのスタイル指定<br>ホバー中のスタイル指定<br>クリック中のスタイル指定</td>
					<td></td>
					<td><a class="pdf" href="redume/05_疑似クラス.pdf" target="_blank">PDF</a></td>
				</tr>
				<tr>
					<td class="tag">〇:first-child{}<br>〇:last-child{}<br>〇:nth-child{}</td>
					<td>兄弟要素の中での位置に基づいて選択</td>
					<td></td>
					<td><a class="pdf" href="redume/10_セレクタ①.pdf" target="_blank">PDF</a></td>
				</tr>
					<tr>
					<td>擬似要素</td>
					<td class="tag">〇::before{content: '内容';}<br>〇::after{content: '内容';}</td>
					<td>〇の前後に'内容'を{}のスタイルで表示</td>
					<td><a class="pdf" href="https://saruwakakun.com/html-css/basic/before-after" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="6">整列配置</td>
					<td class="tag">{text-align: center;}</td>
					<td rowspan="2">左右中央揃え（インラインとブロックで使い分け）</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{margin: 0 auto;}</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{align-items: ;}</td>
					<td>flexbox設定後に</td>
					<td><a class="kome" target="_blank" href="https://developer.mozilla.org/ja/docs/Web/CSS/align-items">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{float: left;}</td>
					<td>左詰めで横並び</td>
					<td><a href="https://www.sejuku.net/blog/57897" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{position: fixed/relative/asbsolute;}</td>
					<td>固定/相対位置/絶対位置(親にrelative)</td>
					<td><a href="https://saruwakakun.com/html-css/basic/relative-absolute-fixed" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{z-index: 整数;}</td>
					<td>重ね順の指定(大きな数が上)</td>
					<td><a href="https://saruwakakun.com/html-css/basic/z-index" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="4">文字スタイル</td>
					<td class="tag">{text-decoration: none/underline/line-through;}</td>
					<td>文字の下線なし/あり/取消し線</td>
					<td></td>
					<td rowspan="2"><a class="pdf" href="redume/09_テキスト部分に使用されるプロパティ.pdf" target="_blank">PDF</a></td>
				</tr>
				<tr>
					<td class="tag">{line-height: 1.5;}</td>
					<td>行間が文字サイズの1.5倍</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{list-style: none/square/inside/;}</td>
					<td>リストのスタイルの設定</td>
					<td><a href="https://developer.mozilla.org/ja/docs/Web/CSS/list-style">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{list-style-image: url(ファイルパス);}</td>
					<td>リストの先頭に画像を指定</td>
					<td><a href="sample/index.html" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="2">装飾系</td>
					<td class="tag">{box-shadow: 10px 9px 8px 7px rgba(0,0,0,0.4);}</td>
					<td>影をつける:x y ぼかし 広がり　色(不透明度）;</td>
					<td><a class="kome" href="http://www.htmq.com/css3/box-shadow.shtml" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{background; linear-gradient(角度・方向, 開始色, 途中色, 終了色);}</td>
					<td>背景グラデーションの設定</td>
					<td><a class="kome" href="http://www.htmq.com/css3/linear-gradient.shtml" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="4">背景画像</td>
					<td class="tag">{background-image: url();}</td>
					<td>背景画像のリンク</td>
					<td><a class="kome" href="http://www.htmq.com/style/background-image.shtml" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{background-repeat: repeat/no-repeat/repeat-x/repeat-y;}</td>
					<td>背景画像のリピート</td>
					<td><a class="kome" href="http://www.htmq.com/style/background-repeat.shtml" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{background-position: center/left/20%/100px;}</td>
					<td>背景画像の表示位置</td>
					<td><a class="kome" href="http://www.htmq.com/style/background-position.shtml" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{background-size: auto/contain/cover/20%;}</td>
					<td>背景画像のサイズ</td>
					<td><a class="kome" href="https://www.nishishi.com/css/background-size-css3.html" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="2">サイズ指定</td>
					<td class="tag">{max-width:;}</td>
					<td>最大幅設定</td>
					<td rowspan="2"><a class="kome" target="_blank" href="https://saruwakakun.com/html-css/basic/max-min-width#section1">※</a>
				</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{min-width:;}</td>
					<td>最小幅設定</td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="3">非表示</td>
					<td class="tag">{display: none;}</td>
					<td rowspan="2">このふたつを使い分ける</td>
					<td rowspan="2"><a href="https://blog.keisuke11.com/webdesign/display-none-visibility-hidden/" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{visibility: hidden;}</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{overflow: hidden/scroll/auto;}</td>
					<td>コンテナからはみ出した子要素の処理</td>
					<td><a href="https://developer.mozilla.org/ja/docs/Web/CSS/overflow" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td rowspan="3">アニメーション</td>
					<td class="tag">{transition: ;}</td>
					<td rowspan="3">この３つを使い分ける</td>
					<td rowspan="2"><a href="https://qiita.com/soarflat/items/4a302e0cafa21477707f" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{animation: ;}</td>
					<td></td>
				</tr>
				<tr>
					<td class="tag">{transform: ;}</td>
					<td rowspan="2"><a href="https://creive.me/archives/16145/" class="kome" target="_blank">※</a></td>
					<td></td>
				</tr>

			</table>
		</div>










		<div>
			<h4><span class="spanh4">MEMO.</span></h4>
			<ul>
				<li><span class="bgw">html{font-size: 62.5%;}</span>を設定することで、1.5rem=15pxと計算しやすくなる</li>
				<li >セレクタは並列はカンマで<span class="bgw">.box,.boxg{}</span>、親子はスペースで区切る<span class="bgw">main ul{}</span><small><a class="kome" href="https://saruwakakun.com/html-css/reference/selector" target="_blank">※</a></small></li>
				<li ><b>CSSの適用３パターン</b><small><a href="redume/04.pdf" target="_blank">PDF</a></small>
					<ol>
						<li class="linum" style="list-style: decimal;"><b>外部ファイル</b>を指定する <span class="bgw">&ltlink rel="stylesheet" href="css/note.css"&gt</span></li>
						<li class="linum" style="list-style: decimal;">html上で<b>&ltstyle&gtタグの下</b>にCSSコード</li>
						<li class="linum" style="list-style: decimal;"><b>要素の中</b>に書いてしまう <span class="bgw">&lth2 style="color: black"&gt見出し&lt/h2&gt</span></li>

					</ol>
				</li>
				<li>line-heightの高さを親要素の高さと同じにすることで、上下中央配置ができる</li>
				<li>heightを「100vh」とすると「ディスプレイの高さ100％」<a class="kome" href="https://delaymania.com/201802/web/css-vh/" target="_blank">※</a></li>
			<li><span class="bgw">{padding-bottom: 56.25%}</span> 横幅に応じて縦も可変になる(％表示) 16:9は56.25% 4:3は75%</li>
		</ul>
		</div>
</section>








<!-- 用語
=========================================================== -->




<section class="others">
<section class="words">
	<h2>用語</h2>
		<div class="wordslist">
			<dl>
				<dt>DOM(Document Object Model)</dt>
				<dd>htmlのツリー構造のうちbody要素</dd>
			</dl>
		</div>
		<div>
			<dl>
				<dt>属性セレクタ</dt>
				<dd>属性によって要素を特定する <span class="bgw">a[href="https://example.org"] {	}</span></dd>
			</dl>
			<dl>
				<dt>URI(information)</dt>
				<dd>URL(location)とURN(name)のこと</dd>
			</dl>
		</div>
</section>
<section class="pdflink" >
	<h2>先生のPDF</h2>
		<div style="display: flex;">
			<ul>
				<li><a href="redume/01_ブロックレベル要素とインライン要素.pdf" class="link" target="_blank">ブロック要素とインライン要素</a></li>
				<li><a href="redume/02_ブロックレベル要素.pdf" class="link" target="_blank">ブロックレベル要素</a></li>
				<li><a href="redume/03_インライン要素.pdf" class="link" target="_blank">インライン要素</a></li>
				<li><a href="redume/05_疑似クラス.pdf" class="link" target="_blank">擬似クラス</a></li>
				<li><a href="redume/06_マージンとパディング.pdf" class="link" target="_blank">マージンとパディング</a></li>
				<li><a href="redume/07_ボーダー.pdf" class="link" target="_blank">ボーダー</a></li>
				<li><a href="redume/08_フォントサイズ.pdf" class="link" target="_blank">フォントサイズ</a></li>
				<li><a href="redume/09_テキスト部分に使用されるプロパティ.pdf" class="link" target="_blank">テキスト部分に使用されるプロパティ</a></li>
				<li><a href="redume/10_セレクタ①.pdf" class="link" target="_blank">セレクタ①</a></li>
				<li><a href="redume/10_セレクタ②.pdf" class="link" target="_blank">セレクタ②</a></li>
			</ul>
			<ul>
				<li><a href="redume/emmet/emmet_css①.pdf" class="link" target="_blank">emmet_css</a></li>
				<li><a href="redume/emmet/emmet_css②.pdf" class="link" target="_blank">emmet_cssショートカット</a></li>
				<li><a href="redume/emmet/emmet_html①.pdf" class="link" target="_blank">emmet_html</a></li>
				<li><a href="redume/emmet/emmet_html②.pdf" class="link" target="_blank">emmet_htmlショートカット</a></li>
				<li><a href="redume/emmet/emmet_ショートカット.pdf" class="link" target="_blank">emmet_ショートカット</a></li>
				<li><a href="redume/Sublime text 3 導入手順書.pdf" target="_blank">Sublime text 3 導入手順書</a></li>
			</ul>
		</div>
	</section>





<!-- ブックマーク
=========================================================================================== -->



<h2>ブックマーク</h2>
	<section class="bookmark">
		<div style="display: flex;">
			<ul>
				<li>東京フリ「30DAYS1st<a class="link" href="https://tokyofreelance.jp/30daystrial-coding-1st/" target="_blank">①</a><a class="link" href="https://tokyofreelance.jp/30daystrial-coding-2nd/" target="_blank">②</a><a class="link" href="https://tokyofreelance.jp/30daystrial-coding-3rd/" target="_blank">③</a>」</li>
				<li>東京フリ「30DAYS2st<a class="link" href="https://tokyofreelance.jp/30daystrial-coding-4th/" target="_blank">①</a><a class="link" href="https://tokyofreelance.jp/30daystrial-coding-5th/" target="_blank">②</a><a class="link" href="https://tokyofreelance.jp/30daystrial-coding-6th/" target="_blank">③</a>」</li>
				<li><a class="link" href="https://prog-8.com/settings">Progate</a></li>
				<li><a href="https://dotinstall.com/lessons">ドットインストール</a></li>
				<li><a target="_blank" href="https://w3g.jp/sample/css/font-family" class="link">フォント見本</a></li>
				<li><a target="_blank" href="https://arutega.jp/japanese-portfolio/" class="link">ポートフォリオ集①</a></li>
			</ul>

			<ul>
				<li><a class="link" href="https://docs.emmet.io/cheat-sheet/">Emmetチートシート</a></li>
				<li><a class="link" href="https://getbootstrap.jp/docs/4.2/components/alerts/">Bootstrapリファレンス</a></li>
				<li><a target="_blank" href="https://fonts.google.com/" class="link">Google Fonts</a></li>
				<li><a target="_blank" href="https://fontawesome.com/v4.7.0/get-started/" class="link">Font Awesome 4</a> <a target="_blank" href="https://saruwakakun.com/html-css/basic/font-awesome" class="link">使い方</a></li>
				<li><a target="_blank" href="https://fontawesome.com/" class="link">Font Awesome 5</a></li>
				<li><a target="_blank" href="http://www.netyasun.com/syntaxhighlighter/source-escape.html#REPLACE" class="link">自動エスケープ</a></li>

			</ul>
			
		</div>
</section>
</section><!-- /.others -->
</div>
<div id="js">
	<section class="html">
		<h1 style="background-color: #5d1445;">JavaScript</h1>
				<h4><span class="spanh4">JavaScriptリファレンス</span></h4>
				<!-- タグ表 ==
				========================================================================-->
				<div class="table">
					<table class="csst" border="1" cellpadding="4">
						<tr>
							<td rowspan="7">要素の参照</td>
							<td class="tag">.getElementById('id名')</td>
							<td>idをもとに参照</td>
							<td rowspan="6"><a name="kome" href="http://www.tohoho-web.com/js/dom.htm#getElementsByClassName" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.getElementsByClass('クラス名')</td>
							<td>クラスをもとに参照</td>
							<td></td>
						</tr>
								<tr>
									<td class="tag">.firstChild/.lastChild</td>
									<td>長子(末子)要素の参照</td>
									<td></td>
								</tr>
						<tr>
							<td class="tag">.childNodes</td>
							<td>子要素リストの参照</td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.parentNode</td>
							<td>親要素リストの参照</td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">→[0]/.id名/.item(0)/.item("id1")</td>
							<td>リストから各要素の参照</td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.querySelecter('CSSセレクタ')</td>
							<td>CSSセレクタで要素を取得する</td>
							<td></td>
							<td></td>
						</tr>
						<!-- <tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr> -->
						<!-- <tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr> -->
						<tr>
							<td rowspan="3">要素の作成</td>
							<td class="tag">.createElement('タグ名')</td>
							<td>要素を新たに作成</td>
							<td rowspan="2"><a name="kome" href="http://www.tohoho-web.com/js/dom.htm#getElementsByClassName" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.appendChild(要素)</td>
							<td>作成した要素を子要素として追記</td>
							<td></td>
						</tr>
						<tr>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td rowspan="3">コンテンツの作成(置換)</td>
							<td class="tag">.innerHTML = "&ltp&gtHello!&lt/p&gt"</td>
							<td>ブラウザには「Hello！」</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.insertAjacentHTML</td>
							<td>MEMOの画像参照</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">.textContent = "&ltp&gtHello!&lt/p&gt"</td>
							<td>ブラウザには「&ltp&gtHello!&lt/p&gt」</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td rowspan="3">出力</td>
							<td class="tag">console.log();</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">document.write();</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td rowspan="7">数値・計算</td>
							<td class="tag">parseInt("123")</td>
							<td>整数の123に変換</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">要素.length</td>
							<td>要素の長さを取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">Math.max()</td>
							<td>最大値を取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">Math.round()</td>
							<td>小数点以下四捨五入</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">Math.floor()</td>
							<td>小数点以下切り捨て</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">Math.random()</td>
							<td>0.0～0.9999からランダムな数値を返す</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td rowspan="3">ダイアログボックス</td>
							<td class="tag">window.confirm('メッセージ')</td>
							<td>確認ダイアログボックス</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">window.alert('メッセージ')</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">window.prompt('メッセージ')</td>
							<td>入力欄付き</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td rowspan="4">配列</td>
							<td class="tag">配列の変数名.pop()</td>
							<td>配列の最後のデータを削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">配列の変数名.push(データ)</td>
							<td>配列の最後にデータを追加</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">配列の変数名.shift()</td>
							<td>配列の最初のデータを削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">配列の変数名.push(データ1,データ2…)</td>
							<td>配列の最初にデータ1,データ2…を追加</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">event.preventDefault();</td>
							<td>HTMLの基本動作をキャンセル</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<!-- 
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						 -->
		
					</table>
				</div>
				<div>
					<h4><span class="spanh4">MEMO.</span></h4>
						<ul>
							<li>
								<b>insertAdjacentHTML(超万能)</b>
								<img src="img/insertAjacentHTML.jpg" style="width: 90%; max-width: 600px; display: block;">
							</li>
							<li><a class="kome" href="https://phpjavascriptroom.com/?t=js&p=event" target="_blank">イベントハンドラ※</a>
							</li>
							<li> <b>要素.イベントハンドラ = function(){処理内容};</b>で要素にイベントを設定</li>
							<li>テンプレートリテラル　<b>`モンスターに${attack}のダメージ！`</b></li>
							<li> <b>for(let 変数名(任意) of 配列名){}</b>　：配列のすべての要素に対して繰り返す</li>
							<li> <b>for(let 変数名(任意) in オブジェクト名){}</b>　：オブジェクトのすべての要素に対して繰り返す</li>
							<li>縦長の表→配列、横長の表→オブジェクト</li>
						</ul>
				</div>
	
				<section class="pdflink" >
					<h2>先生のPDF</h2>
						<div style="display: flex;">
							<ul>
								<li><a href="redume/javascript/JavaScriptとは.pdf" class="link" target="_blank">JavaScriptとは</a></li>
								<li><a href="redume/javascript/Javascriptの変数宣言について.pdf" class="link" target="_blank">Javascriptの変数宣言について</a></li>
								<li><a href="redume/javascript/四則演算子.pdf" class="link" target="_blank">演算子</a></li>
							</ul>
							<ul>
								<li><a href="redume/javascript/03_pre_条件分岐.pdf" class="link" target="_blank">条件分岐</a></li>
								<li><a href="redume/javascript/繰り返し.pdf" class="link" target="_blank">繰り返し</a></li>
							</ul>
						</div>
					</section>
						
		
		
		
		
				<h2>ブックマーク</h2>
				<section class="bookmark">
					<div style="display: flex;">
						<ul>
							<li><a class="link" href="https://prog-8.com/settings">Progate</a></li>
							<li><a href="https://dotinstall.com/lessons">ドットインストール</a></li>
						</ul>
			
						<ul>
							<li><a target="_blank" href="http://www.netyasun.com/syntaxhighlighter/source-escape.html#REPLACE" class="link">自動エスケープ</a></li>
							<li><a target="_blank" href="https://sbfl.net/blog/2019/02/01/javascript-error-messages/#Uncaught_TypeError_Cannot_read_property_82168217_of_null" class="link">JavaScriptでよく見るエラー</a></li>
			
						</ul>
						
					</div>
				</section>
					
		
		
				<div>
					<h2>サンプル</h2>
					<ul>
					<li class="sample">九九表(for文)
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
	&lt;!-- 九九表 --&gt;
		&lt;script&gt;
		// id tbのついている要素を取得
		var tb = document.getElementById(&#039;tb&#039;);

		for(var i = 1; i &lt;= 9; i++) {
			// 行を作成
			var tr = document.createElement(&quot;tr&quot;);

			for(var j = 1; j &lt;= 9; j++) {
			// 列を作成
			var td = document.createElement(&quot;td&quot;);

			// 計算結果値をコンテンツ部分に代入
			td.textContent = i * j

			// 作成したtdを子要素としてtrに追加
			tr.appendChild(td);

			}
			// 作成したtrをid tbに子要素として追加
			tb.appendChild(tr);
		}
		&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">数当てゲーム(if文・while文)
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
		&lt;script&gt;
		var number = Math.floor(Math.random() * 6);
		var message;
		while(answer !== number){
			var answer = parseInt(window.prompt(&#039;数当てゲーム、0～5の数字を入力してね！&#039;));

			if(answer === number) {
				message = &#039;あたり！&#039;;
			window.alert(message);
			break;
			}else if(answer &gt;= 6 ){
			message = &#039;0～5の数字を入力してね。&#039;;
			}else if(answer &lt; number){
				message = &#039;残念でした！もっと大きい。&#039;;
			}else if(answer &gt; number){
				message = &#039;残念でした！もっと小さい。&#039;;
			}else{
				message = &#039;0～5の数字を入力してね。&#039;;
			}
			window.alert(message);
		}
		&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">桁合わせ・配列
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
		&lt;section&gt;&lt;!-- html --&gt;
			&lt;h2&gt;Standard Revival MP3&lt;/h2&gt;
			&lt;div id=&quot;list&quot;&gt;&lt;/div&gt;
		&lt;/section&gt;
		
		&lt;script&gt;
		var addZero = function(num, digit) {
			var numString = String(num);
			while(numString.length &lt; digit) {
				numString = &#039;0&#039; + numString;
				//numString += &#039;0&#039;;
			}
			return numString;
		}
		
		var songs = [
			&#039;Stella By Starlight&#039;,
			&#039;Satin Doll&#039;,
			&#039;Caravan&#039;,
			&#039;Besame Mucho&#039;,
			&#039;My Favorite Things&#039;,
			&#039;Taking A Chance On Love&#039;,
			&#039;Fly Me To The Moon&#039;,
			&#039;Waltz For Debby&#039;,
			&#039;Willow Weep For Me&#039;,
			&#039;Bluesette&#039;
			];
		
		for(var i = 0; i &lt; songs.length; i++){
			var paragraph = document.createElement(&quot;p&quot;);
			paragraph.textContent = addZero(i + 1,2) +&quot;.&quot; + songs[i];
			document.getElementById(&#039;list&#039;).appendChild(paragraph);
		}
		&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">日時の表示(new)
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
	&lt;main&gt;
	&lt;section&gt;
		&lt;p&gt;最終アクセス日時：&lt;span id=&quot;time&quot;&gt;&lt;/span&gt;&lt;/p&gt;
	&lt;/section&gt;
	&lt;/main&gt;
	&lt;script&gt;
	&#039;use strict&#039;;
	
	const now = new Date();
	const year = now.getFullYear();
	const month = now.getMonth();
	const date = now.getDate();
	const hour = now.getHours();
	const min = now.getMinutes();
	
	let ampm =&#039;&#039;;
	if (hour &lt; 12){
		ampm = &#039;a.m.&#039;;
	}else{
		ampm = &#039;p.m.&#039;;
	}
	
	const output = `${year}/${month+1}/${date} ${hour % 12}:${min}${ampm}`
	document.getElementById(&#039;time&#039;).textContent = output;
	&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>

					<li class="sample">カウントダウン
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
		&lt;body&gt;
		&lt;header&gt;
		&lt;h1&gt;カウントダウンタイマー&lt;/h1&gt;
		&lt;h2&gt;1秒毎に表示を更新&lt;/h2&gt;
		&lt;/header&gt;
		&lt;section&gt;
			&lt;h2&gt;東京オリンピックまで&lt;/h2&gt;
			&lt;p class=&quot;timer&quot;&gt;あと&lt;span id=&quot;day&quot;&gt;&lt;/span&gt;日&lt;span id=&quot;hour&quot;&gt;&lt;/span&gt;時間&lt;span id=&quot;min&quot;&gt;&lt;/span&gt;分&lt;span id=&quot;sec&quot;&gt;&lt;/span&gt;秒&lt;/p&gt;
		&lt;/section&gt;
		&lt;script&gt;
			// due ・・・ 東京五輪開催日の日時情報
			var goal = new Date(2020, 6, 24);
			var countdown = function(due) {
				var now = new Date();
		
				var rest = due.getTime() - now.getTime();//東京五輪までの日時(ミリ秒)
			//getTime()...エポック秒(1970/1/1/0時からの経過ミリ秒
				var sec = Math.floor(rest / 1000) % 60;
				var min = Math.floor(rest / 1000 / 60) % 60;
				var hours = Math.floor(rest / 1000 / 60 / 60) % 24;
				var days = Math.floor(rest / 1000 / 60 / 60 / 24);
				var count = [days, hours, min, sec];
		
				return count;
			}
		
		
			var recalc = function() {
				var counter = countdown(goal);
				document.getElementById(&#039;day&#039;).textContent = counter[0];
				document.getElementById(&#039;hour&#039;).textContent = counter[1];
				document.getElementById(&#039;min&#039;).textContent = counter[2];
				document.getElementById(&#039;sec&#039;).textContent = counter[3];
				refresh();
			}
		
			var refresh = function() {
				setTimeout(recalc, 1000);
			}
			recalc();
		&lt;/script&gt;
		&lt;/body&gt;
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">
						イベント
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
		&lt;head&gt;
		&lt;script&gt;
		var imgChange = function (number){
			document.game.src = &quot;img/suika&quot; + number + &quot;.jpg&quot;/* ①画像ファイルパスを生成 */;
		}
		&lt;/script&gt;
		&lt;/head&gt;
		&lt;body&gt;
		&lt;h1&gt;イベントの練習&lt;/h1&gt;
		&lt;p&gt;&lt;a href=&quot;#&quot; id=&quot;suika&quot;&gt;
			&lt;img src=&quot;img/suika1.jpg&quot; name=&quot;game&quot; border=&quot;0&quot;&gt;
		&lt;/a&gt;&lt;/p&gt;
		&lt;script&gt;
			// ページ読み込み時
			window.onload = function(){
				window.alert(&#039;イラストの上にマウスポインタを乗せてみてください&#039;);
				//window.は省略可
			}
		
			// マウスホバー時
			document.getElementById(&quot;suika&quot;).onmouseover = function(){
				/* ②画像切り替え処理呼び出し(割れたスイカ) */
			imgChange(2)
			}
		
			// マウスが外れた時
			document.getElementById(&quot;suika&quot;).onmouseout = function(){
				/* ③画像切り替え処理呼び出し(丸いスイカ) */
			imgChange(1)
			}
		&lt;/script&gt;							
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">FizzBuzz!
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
	&lt;script&gt;
		&#039;use strict&#039;;
	
	function fb(num){
		if(num%3 === 0 &amp;&amp; num%5 === 0){
			return &#039;FizzBuzz!&#039;;
		}else if(num%3 === 0){
			return &#039;Fizz!&#039;;
		}else if(num%5 === 0){
			return &#039;Buzz!&#039;;
		}else{
			return num;
		}
	}
	// console.log(fb(15));
	for(let i = 1; i &lt;= 30; i ++){
		console.log(fb(i));
		
	}
	
	&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">ツールチップ
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
		&lt;!DOCTYPE html&gt;
		&lt;html&gt;
		&lt;head&gt;
			&lt;title&gt;&lt;/title&gt;
		&lt;style&gt;
		#tooltip li {
			position: relative;
		}
		
		/*マウスホバー時のli要素の背景色*/
		#tooltip li:hover {
			background: #deb3ba;
		}
		
		/*tooltipの形と色*/
		.tooltip-tooltips {
			display: block;
			position: absolute;
			bottom: -2.8em;
			left: 0.3em;
			z-index: 9999;
			width: auto;
			height: auto;
			padding: 0.3em 0.5em;
			color: #FFFFFF;
			background: #c72439;
			border-radius: 0.5em;    /*角丸*/
		}
		
		/*tooltipの吹き出し口*/
		.tooltip-tooltips:after {
			width: 100%;
			content: &quot;&quot;;
			display: block;
			position: absolute;
			left: 0.5em;
			top: -8px;
			border-top:8px solid transparent;    /*枠線上を透明に*/
			border-left:8px solid #c72439;
		}
		&lt;/style&gt;
		&lt;/head&gt;
		&lt;body&gt;
		&lt;ul id=&quot;tooltip&quot;&gt;
		&lt;li data-text=&quot;1&quot;&gt;サンプルのメニュー1&lt;/li&gt; &lt;!-- deta-（任意の名前） --&gt;
		&lt;li data-text=&quot;2&quot;&gt;サンプルのメニュー2&lt;/li&gt;
		&lt;li data-text=&quot;3&quot;&gt;サンプルのメニュー3&lt;/li&gt;
		&lt;li data-text=&quot;4&quot;&gt;サンプルのメニュー4&lt;/li&gt;
		&lt;/ul&gt;
		&lt;script&gt;
			var messArray = [
				&quot;メッセージ1&quot;,
				&quot;メッセージ2&quot;,
				&quot;メッセージ3&quot;,
				&quot;メッセージ4&quot;,
			]
		
			var message = &quot;&quot;;
		
			//#tooltip内のli要素を全て取得(liの配列オブジェクト)
			var obj = document.getElementById(&quot;tooltip&quot;).getElementsByTagName(&quot;li&quot;);
		
			//liの要素数分ループ
			for(var i = 0; i &lt; obj.length;i++) {
				//liのインデックス番号iの要素にマウスホバー時
				obj.item(i).onmouseover = function () {
					var element = document.createElement(&quot;div&quot;);    
					//tooltip用のdiv要素生成(&lt;div&gt;&lt;/div&gt;)
					var num = this.getAttribute(&#039;data-text&#039;);        
					//this:今まさにマウスが乗っている。data-text属性の属性値取得(番号)
					index = parseInt(num) - 1;                        
					//番号(文字) → 番号(整数) に変換
					message = messArray[index]                        
					//メッセージ配列から該当メッセージを取り出す
					element.innerHTML = message;                    
					//tooltip用のdiv要素のコンテンツ部にメッセージを代入。ここではtextContentでも
					element.className = &quot;tooltip-tooltips&quot;;            
					//tooltip用のdiv要素にクラス名を付与
					this.appendChild(element);                        
					//マウスホバー対象のli要素の子要素として
																	
					//tooltip用のdiv要素を追加
				}
		
				obj.item(i).onmouseout = function () {
						//tooltipを消す(子要素数は2、子要素[0]はtext、子要素[1]はdiv)
					this.removeChild(this.childNodes.item(this.childNodes.length - 1));
				}
			}
		&lt;/script&gt;
		&lt;/body&gt;
		&lt;/html&gt;							
								</code>
							</pre>
						</div>
					</li>
					<li class="sample">オブジェクトの記述
						<div class="code-box2">
							<pre class="prettyprint">
								<code>
	&lt;script&gt;
	&#039;use strict&#039;;
	// オブジェクトの記述(
	let jabook = {
		title: &#039;JavaScript入門&#039;,
		price: 2500,
		stock: 3
	}
	
	for (let p in jabook){
		let newTd = `&lt;td&gt;${jabook[p]}/&lt;/td&gt;`;
		// console.log(newTd);
		document.getElementById(&#039;bookinfo&#039;).insertAdjacentHTML(&#039;beforeend&#039;,newTd);
	}
	
	&lt;/script&gt;
								</code>
							</pre>
						</div>
					</li>
					<!-- <li class="sample">サンプル
						<div class="code-box2">
							<pre class="prettyprint">
								<code>

								</code>
							</pre>
						</div>
					</li> -->
					<!-- <li class="sample">サンプル
						<div class="code-box2">
							<pre class="prettyprint">
								<code>

								</code>
							</pre>
						</div>
					</li> -->

				</ul>
				</div>
		</section>
</div>
<div id="jq">
	<section class="html">
		<h1 style="background-color: #14425d;">jQuery</h1>
				<h4><span class="spanh4">$(セレクタ).メソッド(引数);</span></h4>
				<!-- タグ表 ==
				========================================================================-->
				<div class="table">
					<table class="csst" border="1" cellpadding="4">
						<tr>
							<td></td>
							<td class="tag">.css({
								'color', 'blue',...
							  });</td>
							<td>cssの追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.css('color');</td>
							<td>css情報の取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.text('テキスト')</td>
							<td>テキストの置換(タグは含めない)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.html('&lt;a href=&quot;#&quot;&gt;テキスト&lt;/a&gt;');</td>
							<td>コンテンツ(中身)をタグごと置換</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.replaceWith(&#039;&lt;p&gt;xxx&lt;/p&gt;&#039;)</td>
							<td>.htmlとの違いはタグの書き換えが可能(外のタグから)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.before('要素');</td>
							<td>先頭に追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('要素').insertBefore('セレクタ');</td>
							<td>上と記述の順序が逆</td>
							<td></td>
							<td></td>
						</tr>
					<tr>
							<td></td>
							<td class="tag">.after('要素');</td>
							<td>末尾に追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('要素').insertAfter('セレクタ');</td>
							<td>上と記述の順序が逆</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.prepend('要素');</td>
							<td>前に追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('要素').prependTo('セレクタ');</td>
							<td>上と記述の順序が逆</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.append('要素');</td>
							<td>後に追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('要素').appendTo('セレクタ');</td>
							<td>上と記述の順序が逆</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$(&#039;#id&#039;).wrap(&#039;&lt;div class=&quot;ccc&quot;&gt;&#039;);</td>
							<td>divで#idを囲む(個別)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$(&#039;.class&#039;).wrapAll(&#039;&lt;div class=&quot;ccc&quot;&gt;&#039;);</td>
							<td>divで.classをまとめて囲む(間に存在する要素ははじき出される)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$(&#039;.class&#039;).wrapInner(&#039;&lt;div class=&quot;ccc&quot;&gt;&#039;);</td>
							<td>.classの要素内に入り、テキスト要素をdivで囲む(子要素になる)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('#id').unwrap();</td>
							<td>#idの親要素を削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.attr('class', 'q24_a');</td>
							<td>属性の書き換え</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.removeAttr('href');</td>
							<td>属性の削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.addClass('aaa');</td>
							<td>クラスの追記</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.removeClass('aaa');</td>
							<td>クラスの削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.toggleClass('クラス名')</td>
							<td>クラスのつけ外し</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.attr('class', 'q27_b')</td>
							<td>クラスの書き換え</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('h1').toggle(2000)</td>
							<td>表示・非表示(2000ミリ秒で)</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.fadeToggle</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.remove();</td>
							<td>要素の削除</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">if($(this).hasClass('aaa'))</td>
							<td>クラスの有無を調べる</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('セレクタ').length</td>
							<td>要素の長さを取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">$('セレクタ').index(要素)</td>
							<td>要素のインデックス番号の取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.offset({
								top: 5430,
								left: 800
							});</td>
							<td>指定の位置に表示</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag">.on('イベント', function(){処理});</td>
							<td>イベントによる処理</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<!-- <tr>
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr> -->
					</table>
				</div>
				<div>
					<h4><span class="spanh4">MEMO.</span></h4>
						<ul>
							<li><a class="kome" href="https://qiita.com/temori1919/items/bcbfc4a93301ef902d1d" target="_blank">jQイベントハンドラ※</a>
							</li>
						</ul>
				</div>
	
				<section class="pdflink" >
					<h2>先生のPDF</h2>
						<div style="display: flex;">
							<ul>
								<li><a href="redume/jQueryテキスト/jQuery03.pdf" class="link" target="_blank">jQuery03</a></li>
								<li><a href="redume/jQueryテキスト/jQuery04.pdf" class="link" target="_blank">jQuery04</a></li>
							</ul>
							<ul>
								<li><a href="redume/jQueryテキスト/jQuery05.pdf" class="link" target="_blank">jQuery05</a></li>
								<li><a href="redume/jQueryテキスト/jQuery06.pdf" class="link" target="_blank">jQuery06</a></li>
							</ul>
						</div>
					</section>
						
		
		
		
		
				<h2>ブックマーク</h2>
				<section class="bookmark">
					<div style="display: flex;">
						<ul>
							<li><a class="link" href="https://prog-8.com/settings">Progate</a></li>
							<li><a href="https://dotinstall.com/lessons">ドットインストール</a></li>
							<li><a target="_blank" href="http://www.netyasun.com/syntaxhighlighter/source-escape.html#REPLACE" class="link">自動エスケープ</a></li>
						</ul>
			
						<ul>
							<li><a target="_blank" href="https://jquery.com/" class="link">jQuery</a></li>
			
						</ul>
						
					</div>
				</section>
					
		
		
				<div>
					<h2>サンプル</h2>
					<ul>
						<li class="sample">
							<h4>ハンバーガーメニュー(E:\203\41_JS Library\samples)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html &gt;
	&lt;head&gt;
		&lt;title&gt;hamburger&lt;/title&gt;
		&lt;style&gt;
			nav.NavMenu{
				position: fixed;    /*表示位置を固定*/
				z-index: 2;                /*重ね順を変更*/
				top: 0;                        /*表示位置を指定*/
				left: 0;                    /*表示位置を指定*/
				background: #fff;/*背景を白にする*/
				color: #000;        /*文字色を黒にする*/
				text-align: center;        /*テキストを中央揃え*/
				width: 100%;            /*全幅表示*/
				transform: translateY(-100%);    /*ナビを上に隠す*/
				transition: all 0.6s;    /*アニメーションの時間を指定*/
			}

			nav.NavMenu ul{
				background: #ccc;    /*背景をグレーにする*/

				width: 100%;
				margin: 0 auto;
				padding: 0;
			}

			nav.NavMenu ul li{
				font-size: 1.1em;
				list-style-type: none;
				padding: 0;
				width: 100%;
				border-bottom: 1px dotted #333;
			}

			nav.NavMenu ul li:last-child{
				padding-bottom: 0;

				/*最後のメニュー項目のみ下線を消す*/
				border-bottom: none;
			}

			nav.NavMenu ul li a{
				display: block;                /*クリックできる領域を広げる*/
				color: #000;
				padding: 1em 0;
			}

			nav.NavMenu.active{
				transform: translateY(0%);        /*ナビを表示する*/
			}

			.Toggle {
				display: block;
				position: fixed;    /* bodyに対しての絶対位置指定 */
				right: 13px;
				top: 12px;
				width: 42px;
				height: 42px;
				cursor: pointer;
				z-index: 3;
			}

			.Toggle span {
				display: block;
				position: absolute;
				width: 30px;
				border-bottom: solid 6px #000;/*線の太さ*/
				-webkit-transition: .35s ease-in-out;    /*変化の速度を指定*/
				-moz-transition: .35s ease-in-out;        /*変化の速度を指定*/
				transition: .35s ease-in-out;            /*変化の速度を指定*/
				left: 6px;
			}

			.Toggle span:nth-child(1) {
				top: 9px;
			}

			.Toggle span:nth-child(2) {
				top: 18px;
			}

			.Toggle span:nth-child(3) {
				top: 27px;
			}

			/* 最初のspanをマイナス45度に */
			.Toggle.active span:nth-child(1) {
				top: 18px;
				left: 6px;
				-webkit-transform: rotate(-45deg);
				-moz-transform: rotate(-45deg);
				transform: rotate(-45deg);
			}

			/* 2番目と3番目のspanを45度に */
			.Toggle.active span:nth-child(2),
			.Toggle.active span:nth-child(3) {
				top: 18px;
				-webkit-transform: rotate(45deg);
				-moz-transform: rotate(45deg);
				transform: rotate(45deg);
			}

			#fade{
				display: none;
			}
		&lt;/style&gt;
	&lt;/head&gt;
	&lt;body&gt;

	&lt;nav class=&quot;NavMenu&quot;&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu1&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu2&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu3&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu4&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Menu5&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/nav&gt;
	&lt;!--  --&gt;
	&lt;div class=&quot;Toggle&quot;&gt;
		&lt;span&gt;&lt;/span&gt;&lt;span&gt;&lt;/span&gt;&lt;span&gt;&lt;/span&gt;
	&lt;/div&gt;


	&lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js&quot;&gt;&lt;/script&gt;
	&lt;script type=&quot;text/javascript&quot;&gt;
	$(function() {
		$(&#039;.Toggle&#039;).click(function() {
			$(this).toggleClass(&#039;active&#039;);

			if ($(this).hasClass(&#039;active&#039;)) {
				$(&#039;.NavMenu&#039;).addClass(&#039;active&#039;);　        //クラスを付与
			} else {
				$(&#039;.NavMenu&#039;).removeClass(&#039;active&#039;);    //クラスを外す
			}
		});
	});
	&lt;/script&gt;
	&lt;/body&gt;
	&lt;/html&gt;							
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>アコーディオンパネル(jQuery標準デザイン講座 p174)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	$(&#039;.faq-list-item&#039;).click(function() {
		var $answer = $(this).find(&#039;.answer&#039;);
		if($answer.hasClass(&#039;open&#039;)) {
			$answer.removeClass(&#039;open&#039;);
			$answer.slideUp();
	
			$(this).find(&#039;span&#039;).text(&#039;+&#039;);
	
		} else {
			$answer.addClass(&#039;open&#039;);
			$answer.slideDown();
	
			$(this).find(&#039;span&#039;).text(&#039;-&#039;);
		}
									});
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>タブ表示</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	$(function(){

		//タブ表示
	
		//js以外非表示
		$(&#039;main &gt; div[id != &quot;js&quot;]&#039;).hide();
		
		//タブをクリック
		$(&#039;.tab&#039;).click(function(){
	
			//いったん全て非表示
			$(&#039;main &gt; div&#039;).hide();
	
			//(href属性を取得).表示
			$($(this).children(&#039;a&#039;).attr(&quot;href&quot;)).show();
	
			//現在のcurrentクラスを削除
			$(&#039;.current&#039;).removeClass(&#039;current&#039;);
	
			//選択されたタブにcurrentクラスを追加
			$(this).addClass(&#039;current&#039;);
	
			return false;
		});
									</code>
								</pre>
							</div>
						</li>

						<li class="sample">
							<h4>要素の追記使い分け</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	以下の使い分けに注意する
	この場合結果は同じ									
	$(function(){
		$(&#039;ul li&#039;).last().after(&#039;&lt;li&gt;ただの豚&lt;/li&gt;&#039;);

		//[参考]要素の &#039;末尾&#039; にコンテンツを挿入する
		$(&#039;ul&#039;).append(&#039;&lt;li&gt;ただの豚&lt;/li&gt;&#039;);

		//[参考]要素の &#039;後&#039; にコンテンツを挿入する－１
		$(&#039;ul&#039;).after(&#039;&lt;li&gt;ただの豚&lt;/li&gt;&#039;);

		//[参考]要素の &#039;後&#039; にコンテンツを挿入する－２
		$(&#039;ul li:last-child&#039;).after(&#039;&lt;li&gt;ただの豚&lt;/li&gt;&#039;);
		});
									</code>
								</pre>
							</div>
						</li>
						<!-- <li class="sample">
							<h4>タブ表示</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
									</code>
								</pre>
							</div>
						</li> -->
				</ul>
				</div>
		</section>
</div>
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
				<h4><span class="spanh4">DML(データ操作言語)</span></h4>

				<div class="table">
					<table class="csst" border="1" cellpadding="10">
						<tr >
							<td class="tag">SELECT 列1,列2 FROM テーブル名;</td>
							<td>テーブル名から列1,列2を表示</td>
							<td rowspan="5">
								<a class="pdf" href="redume/SQL/2：データの操作(DML)入門1.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr>
							<td class="tag">SELECT DISTINCT 列名  ...</td>
							<td>列名を重複を除いて表示</td>
						</tr>
						<tr>
							<td class="tag">
								…WHERE 列名='データ' (OR/AND);<br>
						　　　　　列名 LIKE 'A%(%A/%A%)' ;<br>
						　　　　　列名 IN ('a', 'b', 'c') ;
							</td>
							<td>
								条件(行を指定)<br>
								部分一致　Aで始まる(終わる/含む)「_」は任意の一字<br>
								列名のデータがa,b,cの行を指定<br>
							</td>
						</tr>
						<tr>
							<td class="tag">… LIMIT 行数 ;</td>
							<td>行数を制限</td>
						</tr>
						<tr>
							<td class="tag">… ORDER BY 列名 (DESC/ASC) ;</td>
							<td>列名を基準に並べ替え(降順/昇順)</td>
						</tr>
						<tr>
							<td class="tag">
								SELECT SUM(列名1) ... GROUP BY 列名2;<br>
								　　　　AVG(),MAX(),MIN(),COUNT()
							</td>
							<td>
								列名2ごとの列名1の合計 <br>
								　　　　平均,最大,最小,データ数

							</td>
							<td rowspan="5">
								<a class="pdf" href="redume/SQL/2：データの操作(DML)入門3.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr>
							<td class="tag">... HAVING 条件;</td>
							<td>GROUP BY を使った集計列の条件はWHEREでなくHAVINGで指定</td>
						</tr>
						<tr>
							<td class="tag">... 列名 AS 別名 ...;</td>
							<td>列名に別名を持たせる(asを省略して半角スペースも可)</td>
						</tr>
						<tr>
							<td class="tag">
								SELECT (テーブル名1.列名1,テーブル名2.列名2) <br>
								FROM  テーブル名1<br>
								INNER JOIN テーブル名2 <br>
								ON テーブル名1.列名a = テーブル名2.列名b ;
							</td>
							<td>テーブル名1とテーブル名2を列名1と列名2で内部結合(両方に存在するデータ)</td>
						</tr>
						<tr>
							<td class="tag">
								SELECT (テーブル名1.列名1,テーブル名2.列名2) <br>
								FROM  テーブル名1<br>
								LEFT(RIGHT) JOIN テーブル名2 <br>
								ON テーブル名1.列名a = テーブル名2.列名b ;
							</td>
							<td>テーブル名1とテーブル名2を列名1と列名2で左(右)外部結合</td>
						</tr>
						<tr>
							<td class="tag">UPDATE テーブル名 SET 列名 = 値 WHERE ... ;</td>
							<td>指定した行の値を更新する</td>
							<td rowspan="3">
								<a class="pdf" href="redume/SQL/2：データの操作(DML)入門2.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr>
							<td class="tag">INSERT INTO テーブル名 (列名1,列名2) VALUES ('値1','値2'),('値3','値4') ;</td>
							<td>新たに(値1,値2),(値3,値4)の2行を挿入する</td>
						</tr>
						<tr>
							<td class="tag">DELETE FROM テーブル名 WHERE ... ;</td>
							<td>WHEREで指定した行を削除する</td>
						</tr>
		
					</table>
				</div>
				<h4><span class="spanh4">DCL(トランザクション)</span></h4>

				<div class="table">
					<table class="csst" border="1" cellpadding="10">
						<tr >
							<td class="tag">START TRANSACTION ;</td>
							<td>トランザクション処理の開始</td>
							<td rowspan="5">
								<a class="pdf" href="redume/SQL/トランザクション.pdf" target="_blank">PDF</a>
							</td>
						</tr>
						<tr >
							<td class="tag">COMMIT ;</td>
							<td>トランザクションの確定</td>
						</tr>
						<tr>
							<td class="tag">ROLLBACK ;</td>
							<td>COMMIT直後まで戻す</td>
						</tr>
						<tr>
							<td class="tag">SAVEPOINT セーブポイント名 ;</td>
							<td>セーブポイントの作成</td>
						</tr>
						<tr>
							<td class="tag">ROLLBACK TO セーブポイント名 ;</td>
							<td>セーブポイント名に戻る</td>
						</tr>
					</table>
				</div>
				<div>
					<h4><span class="spanh4">MEMO.</span></h4>
						<ul>
							<li>
								MAMP/Open start page/tools/phpMyAdmin
							</li>
							<li>
								照合順序(collation)はutf8_general_ci
							</li>
							<li>
								処理の実行順序 <br>
								<img src="img/SQL実行順序.PNG" width="400px">
							</li>
						</ul>
				</div>
	
				<section class="pdflink" >
					<h2>先生のPDF</h2>
						<div style="display: flex;">
							<ul>
								<li><a href="redume/SQL/0：SQL_introduction.pdf" class="link" target="_blank">SQL_introduction</a></li>
								<li><a href="redume/SQL/SQLを用いたWebアプリケーション.pdf" class="link" target="_blank">SQLを用いたWebアプリケーション</a></li>
								<li><a href="redume/SQL/2：データの操作(DML)入門4.pdf" class="link" target="_blank">データの操作(DML)入門4</a></li>
							</ul>
							<ul>
								<li><a href="redume/SQL/2：データの操作(DML)入門4×_副問い合わせ.pdf" class="link" target="_blank">副問い合わせ・EXISTS・UNION・VIEW</a></li>
								<li><a href="redume/SQL/3：データの制御(DCL)入門×.pdf" class="link" target="_blank">データの制御(DCL)入門</a></li>
								<li><a href="redume/SQL/データベース作成手順（コマンド）.pdf" class="link" target="_blank">データベース作成手順</a></li>
							</ul>
						</div>
					</section>
						
		
		
		
		
				<h2>ブックマーク</h2>
				<section class="bookmark">
					<div style="display: flex;">
						<ul>
							<li><a class="link" href="https://prog-8.com/settings">Progate</a></li>
							<li><a href="https://dotinstall.com/lessons">ドットインストール</a></li>
							<li><a target="_blank" href="http://www.netyasun.com/syntaxhighlighter/source-escape.html#REPLACE" class="link">自動エスケープ</a></li>
						</ul>
			
						<ul>
							<a target="_blank" href="http://localhost/MAMP/" class="link">MAMP(MAMP起動後)</a>
			
						</ul>
						
					</div>
				</section>
					
		
		
				<div>
					<h2>サンプル</h2>
					<ul>
						<li class="sample">
							<h4>サンプル名</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
									</code>
								</pre>
							</div>
						</li>

					</ul>
				</div>
		</section>
</div>
<div id="php">
	<section class="html">
		<h1 style="background-color: #481466;">PHP</h1>
				<h4><span class="spanh4"></span></h4>
				<div class="table">
					<table class="csst" border="1" cellpadding="4">
						<tr >
							<td rowspan="5">スーパーグローバル変数</td>
							<td class="tag">$_GET[""]</td>
							<td>GET通信から渡された変数の連想配列</td>
							<td rowspan="5"><a class="kome" href="https://www.php.net/manual/ja/language.variables.superglobals.php" target="_blank" >※</a></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">$_POST[""]</td>
							<td>POST通信から渡された変数の連想配列</td>
							<td></td>
						</tr>
						<tr>
							<td class="tag">$_SERVER['PHP_SELF']</td>
							<td>自身のページのURL<br>form属性：action="&lt;?php echo es($_SERVER['PHP_SELF']); ?&gt;"</td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">$_COOKIE</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">$_SESSION</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="2">定数</td>
							<td class="tag">const 定数 = ...;</td>
							<td>狭い定数</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">define("TAX",0.08);</td>
							<td>広い定数</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="4">ブラウザに出力</td>
							<td class="tag">echo </td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">print_r()</td>
							<td>変数の内容を確認</td>
							<td rowspan="3"><a class="kome" href="https://qiita.com/yasumodev/items/4b0e5a0d2d1ec3b3177b" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">var_dump()</td>
							<td>変数の内容を確認</td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">var_export()</td>
							<td>変数の内容を確認</td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="6">数値</td>
							<td class="tag">number_format()</td>
							<td>3桁ごとにカンマを追加</td>
							<td><a class="kome" href="https://www.php.net/manual/ja/function.number-format.php" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">mt_rand(0,9)</td>
							<td>0～9から乱数を生成</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">ctype_digit()</td>
							<td>正の整数かどうか調べる</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">count()</td>
							<td>要素の数を取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">strlen()</td>
							<td>文字数を取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">array_sum($配列名)</td>
							<td>配列の値の合計を計算</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="4">真偽判定</td>
							<td class="tag">isset()</td>
							<td>フォーム等で情報がセットされているか(true,false)</td>
							<td rowspan="2"><a class="kome" href="https://qiita.com/shinichi-takii/items/00aed26f96cf6bb3fe62" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">empty()</td>
							<td>変数が空か調べる(true,false)</td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">is_numeric()</td>
							<td>数字または数値形式(+,-,=&gt;,.)か調べる(true,false)</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">is_array()</td>
							<td>()が配列かどうか(true,false)</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag">array_map(関数名,配列)</td>
							<td>配列の中各要素に対して関数を適用</td>
							<td><a class="kome" href="https://www.sejuku.net/blog/22549" target="_blank">※</a></td>					<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag">require_once("ファイルパス")</td>
							<td>ファイルを読み込む</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="3">エンコーディング</td>
							<td class="tag">mb_check_encoding()</td>
							<td>文字列が指定したエンコーディングで有効か調べる</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">mb_convert_encoding()</td>
							<td>文字エンコーディングを変換する</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">mb_internal_encoding()</td>
							<td>内部文字エンコーディングを設定あるいは取得</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td rowspan="3">変換</td>
							<td class="tag">implode()</td>
							<td>配列を文字列に変換</td>
							<td rowspan="2"><a class="kome" href="http://yadukkii.hateblo.jp/entry/2015/09/28/203533" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">explode</td>
							<td>文字列を配列に変換</td>
							<td></td>
						</tr>
						<tr >
							<td class="tag">htmlspecialchars()</td>
							<td>HTMLエスケープ</td>
							<td><a class="kome" href="https://www.flatflag.nir87.com/htmlspecialchars-555" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag">trim()</td>
							<td>文字列の先頭・末尾にある空白文字を取り除く</td>
							<td><a class="kome" href="https://blog.codecamp.jp/php-trim" target="_blank">※</a></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag">exit('メッセージ')</td>
							<td>エラーメッセージを出して、以下のコードをすべてキャンセル</td>
							<td></td>
							<td></td>
						</tr>
						<tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<!-- <tr >
							<td></td>
							<td class="tag"></td>
							<td></td>
							<td></td>
						</tr> -->
		
					</table>
				</div>
				<div>
					<h4><span class="spanh4">MEMO.</span></h4>
						<ul>
							<li><b>"{$age}歳なので{$price}円です。"</b>←JSにおけるテンプレートリテラル</li>
							<li><b>「.=」</b>は文字列における「+=」。代入ではなく追加</li>
							<li><b>continue;</b>　ループ中で現在の周だけをスキップ</li>
						</ul>
				</div>
	
				<section class="pdflink" >
					<h2>先生のPDF</h2>
						<div style="display: flex;">
							<ul>
								<li><a href="redume/PHP/php.ini設定内容.pdf" class="link" target="_blank">php.ini設定内容</a></li>
								<li><a href="redume/PHP/00_PHPを利用したWEBアプリケーション.pdf" class="link" target="_blank">PHPを利用したWEBアプリケーション</a></li>
								<li><a href="redume/PHP/01_データの送受信.pdf" class="link" target="_blank">データの送受信</a></li>
								<li><a href="redume/PHP/02_変数と定数.pdf" class="link" target="_blank">変数と定数</a></li>
								<li><a href="redume/PHP/03_条件分岐.pdf" class="link" target="_blank">条件分岐</a></li>
								<li><a href="redume/PHP/03_条件分岐②.pdf" class="link" target="_blank">条件分岐②</a></li>
								<li><a href="redume/PHP/03_条件分岐③.pdf" class="link" target="_blank">条件分岐③</a></li>
								<li><a href="redume/PHP/04_配列.pdf" class="link" target="_blank">配列</a></li>
								<li><a href="redume/PHP/04_配列②.pdf" class="link" target="_blank">配列②</a></li>
								<li><a href="redume/PHP/05_連想配列.pdf" class="link" target="_blank">連想配列</a></li>
								<li><a href="redume/PHP/06_関数.pdf" class="link" target="_blank">関数</a></li>
							</ul>
							<ul>
								<li><a href="redume/PHP/07_チェックボックス.pdf" class="link" target="_blank">チェックボックス</a></li>
								<li><a href="redume/PHP/08_ライブラリ.pdf" class="link" target="_blank">ライブラリ</a></li>
								<li><a href="redume/PHP/09_入力チェック.pdf" class="link" target="_blank">入力チェック</a></li>
								<li><a href="redume/PHP/10_サーバー変数.pdf" class="link" target="_blank">サーバー変数</a></li>
								<li><a href="redume/PHP/11_データベース連携.pdf" class="link" target="_blank">データベース連携</a></li>
								<li><a href="redume/PHP/ユーザーアカウント設定内容.pdf" class="link" target="_blank">ユーザーアカウント設定内容</a></li>
								<li><a href="redume/PHP/Appendix/Appendix01_変数.pdf" class="link" target="_blank">Appendix01_変数</a></li>
								<li><a href="redume/PHP/Appendix/Appendix02_条件分岐.pdf" class="link" target="_blank">Appendix02_条件分岐</a></li>
								<li><a href="redume/PHP/Appendix/Appendix03_配列.pdf" class="link" target="_blank">Appendix03_配列</a></li>
								<li><a href="redume/PHP/Appendix/Appendix04_連想配列.pdf" class="link" target="_blank">Appendix04_連想配列</a></li>
							</ul>
						</div>
					</section>




				<h2>ブックマーク</h2>
				<section class="bookmark">
					<div style="display: flex;">
						<ul>
							<li><a class="link" href="https://prog-8.com/settings">Progate</a></li>
							<li><a href="https://dotinstall.com/lessons">ドットインストール</a></li>
							<li><a target="_blank" href="http://www.netyasun.com/syntaxhighlighter/source-escape.html#REPLACE" class="link">自動エスケープ</a></li>
						</ul>

						<ul>
							<a target="_blank" href="https://www.php.net/manual/ja/reserved.keywords.php" class="link">PHPマニュアル</a>

						</ul>

					</div>
				</section>



				<div>
					<h2>サンプル</h2>
					<ul>
						<li class="sample">
							<h4>コロンで区切ったif構文</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;?php
    $age = 25;
  ?&gt;

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
						<li class="sample">
							<h4>配列</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	１．配列をarray()で作る
	&lt;pre&gt;
	&lt;?php
		$colors = array(&quot;赤&quot;,&quot;青&quot;,&quot;黄色&quot;);
		//デバッグ(以下2つを使い分け)
		print_r($colors);
		var_dump($colors);
	?&gt;
	&lt;/pre&gt;

	２．配列に値を追加していく
	&lt;pre&gt;
    	&lt;?php
		// 空の配列を用意する
		$colors = [];
		$colors[3] = &#039;赤&#039;;
		$colors[0] = &#039;青&#039;;
		$colors[1] = &#039;黄&#039;;
		$colors[2] = &#039;白&#039;;
		//確認する
		print_r($colors);
		var_dump($colors);
    	?&gt;
  	&lt;/pre&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>連想配列</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	１．
	&lt;pre&gt;
	&lt;?php
	// 連想配列を作る
	$goods = [
	&#039;id&#039; =&gt; &#039;R56&#039;,
	&#039;size&#039; =&gt; &#039;M&#039;,
	&#039;price&#039; =&gt; 2340
	];

	// priceキーの値を変更する
	$goods[&#039;price&#039;] = 3500;
	//表示する
	echo &quot;id:&quot;.$goods[&#039;id&#039;].&quot;\n&quot;;
	echo &quot;サイズ:&quot;.$goods[&#039;size&#039;].&quot;\n&quot;;
	echo &quot;価格:&quot;.number_format($goods[&#039;price&#039;]).&quot;円\n&quot;;
	?&gt;
	&lt;/pre&gt;

	&lt;?php

	//arrayでも作れる
	$goods = array(
		&#039;id&#039; =&gt; &#039;R56&#039;,
		&#039;size&#039; =&gt; &#039;M&#039;,
		&#039;price&#039; =&gt; 2340
	);

	$goods[&#039;a&#039;] = &#039;b&#039;;
	$goods[&#039;price&#039;] = 100;
	print_r($goods);

	?&gt;


	２．
	&lt;pre&gt;
	&lt;?php 
	$namelist = [&quot;赤井一郎&quot;,&quot;伊藤五郎&quot;,&quot;上野信二&quot;];
	echo &quot;&lt;ol&gt;&quot;,&quot;\n&quot;;
	//配列から順に値を取り出す
	foreach ($namelist as $key =&gt; $value) {
	echo&quot;&lt;li&gt;&quot;,$value,&quot;さん&lt;/li&gt;\n&quot;;
	}
	echo &quot;&lt;/ol&gt;&quot;;
	?&gt;
	&lt;/pre&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>練習問題(ex2)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html&gt;
	&lt;head&gt;
	  &lt;meta charset=&quot;utf-8&quot;&gt;
	  &lt;title&gt;ex2&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;

	Q1.xに10を代入し、それに５を３回足し結果を出力せよ。
	&lt;br&gt;
	  &lt;?php
	    $x = 10;
	    for($i = 1; $i &lt;= 3; $i++){
	    $x += 5;
	    }
	    echo &quot;Ans:{$x}&quot;;
	  ?&gt;
	&lt;br&gt;


	Q2.1～10の乱数を生成して、それが偶数か奇数かを判定
	&lt;br&gt;
	  &lt;?php
	    $ran = mt_rand(1,10);
	    if($ran%2 === 0){
	      echo &quot;{$ran}は偶数&quot;;
	    }else{
	      echo &quot;{$ran}は奇数&quot;;
	    }
	    //※別解(三項演算子)
	   // echo ($a %2 ===0)?&quot;{$a}は偶数&quot;:&quot;{$a}は奇数&quot;;

	   ?&gt;
	&lt;br&gt;


	Q3.変数bottomに4.3を代入、変数heightに5.4を代入して、三角形の面積を求めよ。
	&lt;br&gt;
	  &lt;?php
	    $bottom = 4.3;
	    $height = 5.4;

	    $area = $bottom*$height/2;

	    echo &quot;底辺:{$bottom},高さ:{$height},の三角形の面積は:{$area}&quot;;
	   ?&gt;
	&lt;br&gt;


	Q4.結婚しているかどうかを管理する変数isMarriedにtrueを代入する。&lt;br&gt;
	isMarriedがtrueならば「結婚しています。」&lt;br&gt;
	falseならば「結婚していません。」と出力する。&lt;br&gt;
	  &lt;?php
	    $isMarried = true;

	    if($isMarried){
	      echo &quot;結婚しています。&quot;;
	    }else{
	      echo &quot;結婚していません。&quot;;
	    }
	    //別解
	    // $isMarried = true;
	    // echo $isMarried ? &quot;結婚しています。&quot; : &quot;結婚していません。&quot;;
	    // $result = $isMarried ? &quot;結婚しています。&quot; : &quot;結婚していません。&quot;;
	    // echo $result;
	   ?&gt;
	&lt;br&gt;


	Q5.0～100の乱数を一つ生成し、それが80以上なら「Excellent！」,50以上なら「Good」,
	それ以外は「Bad」と表示する&lt;br&gt;
	  &lt;?php
	    $num = mt_rand(0,100);
	    echo &quot;Score:{$num}&quot;;
	    if($num &gt;= 80){
	      echo &quot;Excelent!&quot;;
	    }else if($num &gt;= 50){
	      echo &quot;Good&quot;;
	    }else{
	      echo &quot;Bad&quot;;
	    }
	   ?&gt;
	&lt;br&gt;


	Q6-1.0～9の乱数を5つ生成し、それの合計(sum)と平均(avg)を求める&lt;br&gt;
	  &lt;?php
	  $sum = 0;
	  $loop = 5;
	  for($i = 1; $i &lt;= $loop; $i++){
	    $num = mt_rand(0,9);
	    echo &quot;{$num},&quot;;
	    $sum += $num;
	  }
	  $avg = $sum/$loop;
	  echo &quot;の{$loop}個の数値の合計は{$sum}平均は{$avg}&quot;;
	  ?&gt;
	&lt;br&gt;

	  
	別解

	&lt;?php
	$sum = 0;
	$loop = 5;
	$nums = [];
	for($i = 1; $i &lt;= $loop; $i++){
	  $num = mt_rand(0,9);
	  $nums[$i] = $num;
	  $sum += $num;
	}
	$avg = $sum/$loop;
	$numbers = implode(&#039;,&#039;,$nums);
	echo &quot;{$numbers}の{$loop}個の数値の合計は{$sum}平均は{$avg}&quot;;
	?&gt;


	Q6-2.
	  &lt;?php
	  $numlist = array(mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9),mt_rand(0,9));
	  $ans1 = array_sum($numlist);
	  $ans2 = array_sum($numlist)/count($numlist);
	  echo &quot;5個の数値の合計は {$ans1} 平均は {$ans2}&quot;
	  ?&gt;
	&lt;br&gt;


	Q7-1.0～100の乱数を10個生成し、50以上の値の個数を求める。&lt;br&gt;
	  &lt;?php
	  $nums = [];
	  for($i = 1; $i &lt;= 10; $i++){
	    $nums[] = mt_rand(0,100);
	  }
	  // 確認
	  print_r($nums);

	  $count = 0;
	  foreach ($nums as $value) {
	    if($value &gt; 50){
	      $count ++;
	    }
	  }
	  echo &quot;50以上の値は{$count}個ありました。&quot;;
	  ?&gt;
	  &lt;!-- 別解
	  &lt;?php
	  $sum = 0;
	  $loop = 10;
	  for ($i=1; $i&lt;=$loop; $i++){
	    $rnd =  mt_rand(0,100);
	    if($rnd &gt;= 50){
	      $sum++;
	    }
	  }
	   // echo &quot;50以上の値は{$sum}個ありました&quot;;
	  ?&gt;
	 --&gt;
	&lt;br&gt;


	Q7-2.
	  &lt;?php
	  $nums = [];
	  $count = 0;
	  for($i = 0; $i &lt;= 9; $i++){
	    $nums[] = mt_rand(0,100);
	    if($nums[$i] &gt; 50){
	      $count ++;
	    }
	  }
	  // 確認
	  print_r($nums);
	  echo &quot;50以上の値は{$count}個ありました。&quot;;
	  ?&gt;
	&lt;br&gt;


	Q8-1.サイコロを２個ふって、２個の合計を点数とする。
	ただし、ゾロ目の場合は点数は２倍となる。
	サイコロの目と点数を表示せよ。&lt;br&gt;
	  &lt;?php
	    $dice1 = mt_rand(1,6);
	    $dice2 = mt_rand(1,6);
	    echo &quot;dice1は{$dice1},dice2は{$dice2},&quot;;

	    if($dice1 === $dice2){
	      $score = ($dice1 + $dice2)*2;
	    }else{
	      $score = $dice1 + $dice2;
	    }
	    echo &quot;Score:{$score}&quot;;
	  ?&gt;
	&lt;br&gt;


	Q8-2.サイコロをn個ふって、n個の合計を点数とする。
	ただし、ゾロ目の場合は点数はn倍となる。
	サイコロの目と点数を表示せよ。&lt;br&gt;

	  &lt;?php
	    $diceNumO = mt_rand(1,6);//まず一回振る
	    $countd = 100;//サイコロを振る回数
	    echo &quot;n={$countd}の場合: &quot;;
	    echo &quot;{$diceNumO},&quot;;
	    $sum = $diceNumO;//出た目の合計(この時点では1回振った分)
	    $zoro = 1;//ゾロ目の連続回数(この時点では1回)
	    for($i = 2; $i &lt;= $countd; $i++){
	      $diceNumI = mt_rand(1,6);//２回目以降のサイコロを振る
	      echo &quot;{$diceNumI},&quot;;
	      $sum += $diceNumI;//合計に足していく
	      if($diceNumI === $diceNumO){
	        $zoro ++;//ゾロ目の回数を足す
	      }
	    }
	    $point = 0;//得点
	    if($zoro === $countd){//ゾロ目の数がサイコロを振った数と同じならば、
	      $point = $sum*$countd;
	    }else{
	      $point = $sum;
	    }
	    echo &quot;{$point}点です。&quot;
	  ?&gt;
	&lt;br&gt;

	Q9.1～100までの和を求めよ。&lt;br&gt;
	  &lt;?php
	    $sum = 0;
	    $loop =100;
	    for($i = 1; $i &lt;=$loop; $i++){
	      $sum = $sum + $i;
	    }
	    echo &quot;1から100まで足すと{$sum}です.&quot;;
	  ?&gt;
	&lt;br&gt;


	Q10-1.1～4までの乱数を発生させ、
	1なら大吉、2なら中吉、3なら吉、4なら凶と表示するおみくじを作成せよ。&lt;br&gt;
	  &lt;?php
	  $ran = mt_rand(1,4);
	  switch($ran){
	    case 1:
	    echo &quot;大吉&quot;;
	    break;

	    case 2:
	    echo &quot;中吉&quot;;
	    break;

	    case 3:
	    echo &quot;小吉&quot;;
	    break;

	    case 4:
	    echo &quot;凶&quot;;
	    break;
	  }
	  ?&gt;
	&lt;br&gt;


	Q10-2.
	  &lt;?php
	  $ran = mt_rand(1,4);
	  $kuji = array(&quot;大吉&quot;,&quot;中吉&quot;,&quot;小吉&quot;,&quot;凶&quot;);
	  echo $kuji[$ran-1];
	  ?&gt;


	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>function(ex3)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	  &lt;meta charset=&quot;utf-8&quot;&gt;
	  &lt;title&gt;ex3q&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
	Q1.引数なしのユーザ定義関数helloWorld()を作成し、
こんにちは世界と表示する機能を作成せよ。

	&lt;?php
	function helloWorld(){
	  echo &quot;こんにちは世界&quot;;
	}

	helloWorld();
	?&gt;
	&lt;br&gt;
	Q2-1.引数を1つもち、引数に商品の金額$deptを受け取ることができる
ユーザ定義関数calcItem($dept)を作成し、金額を受け取った後、
消費税（８％）込みの金額を計算し返す機能を作成せよ。
	&lt;?php
	const TAX = 0.08;
	// define(&#039;TAX&#039;, &#039;0.08&#039;);
	function calcItem($dept){
	  $price = $dept*(1 + TAX);
	  return $price;
	}
	$includ = calcItem(1000);

	echo &quot;税込{$includ}円&quot;;
	?&gt;
	&lt;br&gt;
	Q2-2.引数を2つもち,引数に
財布の中身の金額$walletと、
消費税込みの金額$itemCostをうけることができる
ユーザ定義関数calcMyWallet($wallet,$itemCost)を作成し、
財布の中身と、商品の税込み金額を用いて、
財布の中身を計算し表示する機能を作成せよ。
	&lt;?php

	function calcMyWallet($wallet,$itemCost){
	  $amount = $wallet - calcItem($itemCost);
	  return $amount;
	}

	echo &quot;残額は&quot;.calcMyWallet(1000,500).&quot;円&quot;;
	?&gt;
	&lt;/body&gt;
	&lt;/html&gt;										
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>チェックボックス(sample07)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
		&lt;!--     &lt;label for=&quot;Q2&quot;&gt;問２.習得したいプログラム言語は？(複数選択可)&lt;/label&gt;
		&lt;input type=&quot;checkbox&quot; name=&quot;lang[]&quot; value=&quot;JavaScript&quot;&gt;JavaScript&lt;br&gt;
		&lt;input type=&quot;checkbox&quot; name=&quot;lang[]&quot; value=&quot;PHP&quot;&gt;PHP&lt;br&gt;
		&lt;input type=&quot;checkbox&quot; name=&quot;lang[]&quot; value=&quot;Java&quot;&gt;Java&lt;br&gt;
		&lt;input type=&quot;checkbox&quot; name=&quot;lang[]&quot; value=&quot;C#&quot;&gt;C#&lt;br&gt;
	
		↓↓↓↓↓↓↓↓↓↓
	
		lang[JavaScript,PHP,Java,C#]という配列からチェックが入ったものだけ取り出した配列
		--&gt;
	
	&lt;?php
	
	echo &quot;問１.&lt;br&gt;&quot;;
	echo $_GET[&quot;trigger&quot;].&quot;&lt;br&gt;&lt;br&gt;&quot;;
	echo &quot;問２.&lt;br&gt;&quot;;
	
	$result = &quot;&quot;;//空箱を用意
	
	
	
	// $selected = count($_GET[&quot;lang&quot;]);//配列の個数
	// for($i = 0; $i &lt; $selected; $i++){
	//   $result .= $_GET[&quot;lang&quot;][$i];//空箱に追記：配列&quot;lang[]
	//   if($i &lt; ($selected - 1)){
	//     $result .= &quot;,&quot;;
	//   }
	// }
	
	// ⇔　implodeで書き換えられる
	
	$result = implode(&quot;,&quot;,$_GET[&quot;lang&quot;]);
	
	
	
	echo $result;										
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>HTMLエスケープ・エンコードチェック(sample08)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;?php
	//XSS対策のためのHTMLエスケープ
	function es($data){
		//$dataが配列のとき
		if(is_array($data)){
			//return 再帰呼び出し
			// __METHOD__(マジック定数)は自自分自身のfunction()を指すここでは es
			//array_map()は指定した配列の要素にコールバック関数を適用
			return array_map(__METHOD__, $data);
		}else{
			//HTMLエスケープを行う
			// htmlspecialchars() htmlエスケープ処理を行う関数
			return htmlspecialchars($data,ENT_QUOTES,&#039;utf-8&#039;);
		}
	}
	
	//配列の文字エンコードのチェックを行う
	function cken(array $data){
		$result = true;
		foreach ($data as $key =&gt; $value) {
			if (is_array($value)) {
				//含まれている値が配列のとき、文字列に連結する
				//implode() 配列要素を文字列により連結する
				$value = implode(&quot;&quot;,$value);
			}
			//mb_check_encoding() 文字列が指定したエンコーディングで有効か調べる
			if(!mb_check_encoding($value)){
			//文字エンコードが一致しないとき
			$result = false;
			//foreachでの走査をブレイクする
			break;
			}
		}
		return $result;
	}
	//?&gt;									
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>HTMLエスケープのテスト(sample08)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;XSS対策 es()&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;?php
		//util.phpを読み込む
		require_once(&quot;lib/util.php&quot;);
		//HTMLタグの入ったデータを用意する
		$myCode = &quot;&lt;script&gt;alert(&#039;hello&#039;)&lt;/script&gt;&quot;;
		//es()でHTMLエスケープして表示する
		echo &#039;$myCodeの値:&#039;, es($myCode);
		?&gt;
	&lt;/body&gt;
	&lt;/html&gt;										
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>エンコードチェックのテスト(sample08)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;不正なエンコーディングによる攻撃対策 cken()&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;?php
	require_once(&quot;lib/util.php&quot;);
	//Shift-JISのデータを用意する
	$utf8_string = &quot;こんにちは&quot;;
	//mb_convert_encoding() 文字エンコーディングを変換する
	$sjis_string = mb_convert_encoding($utf8_string, &#039;Shift-JIS&#039;);
	//内部エンコーディングを調べる
	//mb_internal_encoding() 内部文字エンコーディングを設定あるいは取得（ここではutf-8）
	$encoding = mb_internal_encoding();
	// cken()でチェックする(trueかfalse)
	if (cken([$sjis_string])) {
		echo &#039;配列の値は、&#039;, $encoding, &#039;です。&#039;;
	}else{
		echo &#039;配列の値は、&#039;, $encoding, &#039;ではありません。&#039;;
	}
	?&gt;

	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>⇒nameCheck(sample09)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;フォーム入力&lt;/title&gt;
	&lt;link href=&quot;css/style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div&gt;
		&lt;form method=&quot;POST&quot; action=&quot;nameCheck.php&quot;&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;label&gt;名前：&lt;input type=&quot;text&quot; name=&quot;name&quot;&gt;&lt;/label&gt;&lt;/li&gt;
			&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;送信する&quot;&gt;&lt;/li&gt;
		&lt;/ul&gt;
		&lt;/form&gt;
	&lt;/div&gt;

	&lt;/body&gt;
	&lt;/html&gt;


	別ファイル


	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;フォーム入力チェック&lt;/title&gt;
	&lt;link href=&quot;css/style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div&gt;


		&lt;?php
		require_once(&quot;lib/util.php&quot;);
		//文字エンコードの検証
		if(!cken($_POST)){
		$encoding = mb_internal_encoding();
		$err = &quot;Encoding Error! The expected encoding is&quot;.$encoding ;
		//エラーメッセージを出して、以下のコードをすべてキャンセルする
		//exit():()の中のメッセージを最後にすべての処理を終える
		exit($err);
		}
		//HTMLエスケープ(XSS対策)
		$_POST = es($_POST);
		?&gt;

		&lt;?php
		// エラーフラグ
		$isError = false;//←ここでは正常な状態を意味する
		//名前を取り出す
		//isset() 空白以外はtrue
		if (isset($_POST[&#039;name&#039;])){
		// $name = trim($_POST[&#039;name&#039;]);
		//半角空白()、タブ()、改行()、キャリッジリターン、NUL、垂直タグ、全角空白
		$name = trim($_POST[&#039;name&#039;],&quot;\x20\t\n\r\0\v　&quot;);
		if($name === &quot;&quot;){
			//入力データが空白文字の時、trim結果が空文字となりエラー
			$isError = true;
		}
		}else{
			//未設定の時エラー
			$isError = true;
		}
		?&gt;

		&lt;?php if($isError): ?&gt;
		&lt;!-- エラーがあったとき --&gt;
		&lt;span class=&quot;error&quot;&gt;名前を入力してください&lt;/span&gt;
		&lt;form method=&quot;POST&quot; action=&quot;nameCheckForm.php&quot;&gt;
		&lt;input type=&quot;submit&quot; value=&quot;戻る&quot;&gt;
		&lt;/form&gt;
		&lt;?php else: ?&gt;
		&lt;!-- エラーがなかった時 --&gt;
		&lt;span&gt;
			こんにちは、 &lt;?php echo $name; ?&gt;さん
		&lt;/span&gt;
		&lt;?php endif; ?&gt;

	&lt;/div&gt;
	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>⇒割り勘(sample09)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;title&gt;割り勘フォーム&lt;/title&gt;
		&lt;link rel=&quot;stylesheet&quot; href=&quot;css/style.css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div&gt;
		&lt;form method=&quot;POST&quot; action=&quot;warikan.php&quot;&gt;
			&lt;ul&gt;
			&lt;li&gt;&lt;label&gt;合計金額：&lt;input type=&quot;number&quot; name=&quot;goukei&quot; &gt;&lt;/label&gt;&lt;/li&gt;
			&lt;li&gt;&lt;label&gt;人数：&lt;input type=&quot;number&quot; name=&quot;ninzu&quot; &gt;&lt;/label&gt;&lt;/li&gt;
			&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;割り勘する&quot;&gt;&lt;/li&gt;
			&lt;/ul&gt;
		&lt;/form&gt;
		&lt;/div&gt;
	
	&lt;/body&gt;
	&lt;/html&gt;					
	
	
	別ファイル

	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;割り勘計算&lt;/title&gt;
	&lt;link rel=&quot;stylesheet&quot; href=&quot;css/style.css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div&gt;
		&lt;?php
		require_once(&quot;lib/util.php&quot;);
		//文字エンコードの検証
		if (!cken($_POST)){
			$encoding = mb_internal_encoding();
			$err = &quot;Encoding Error! The expected encoding is &quot; . $encoding ;
			//エラーメッセージを出して、以下のコードをすべてキャンセル
			exit($err);
		}
		//HTMLエスケープ(XSS対策)
		$_POST = es($_POST);
		?&gt;

		&lt;?php
		// エラーメッセージを入れる配列
		$errors = [];
		?&gt;

		&lt;?php
		// 合計金額のチェック
		if (isset($_POST[&#039;goukei&#039;])){
			$goukei = $_POST[&#039;goukei&#039;];
			if (!ctype_digit($goukei)) {
			//0以上の整数でないときはエラー
			$errors[] = &quot;合計金額は整数で入力してください。&quot;;
			}
		}else{
			//未設定のエラー
			$errors[] = &quot;合計金額が未設定&quot;;
		}

		// 人数のチェック
		if (isset($_POST[&#039;ninzu&#039;])) {
			$ninzu = $_POST[&#039;ninzu&#039;];
			if (!ctype_digit($goukei)) {
			// 0以上の整数ではないときエラー
			$errors[] = &quot;人数を整数で入力してください。&quot;;
			}else if ($ninzu == 0) {
			// 0のときエラー
			$errors[] = &quot;0人では割れません。&quot;;
			}
		}else{
			//未設定エラー
			$errors[] = &quot;人数が未設定&quot;;
		}
		?&gt;

		&lt;?php
		if (count($errors) &gt; 0){
		//エラーがあったとき
		echo &#039;&lt;ol class=&quot;error&quot;&gt;&#039;;

		foreach ($errors as $value) {
		echo &quot;&lt;li&gt;{$value}&lt;/li&gt;&quot;;
		}
		echo &quot;&lt;/ol&gt;&quot;;
		?&gt;


	&lt;!-- 戻りボタンのフォーム --&gt;
	&lt;form method=&quot;POST&quot; action=&quot;warikanForm.php&quot;&gt;
		&lt;ul&gt;
		&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;戻る&quot;&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/form&gt;

		&lt;?php
		} else {
		// エラーがなかったとき
		$amari = $goukei % $ninzu;
		$price = ($goukei - $amari) / $ninzu;
		// ３桁位取り
		$goukei_fmt = number_format($goukei);
		$price_fmt = number_format($price);
		//表示する
		echo &quot;{$goukei_fmt}円を{$ninzu}人で割り勘します。&quot;, &quot;&lt;br&gt;&quot;;
		echo &quot;１人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です。&quot;;
		}
		?&gt;

	&lt;/div&gt;

	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>現在のページにPOSTする(sample10)</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;計算ページ&lt;/title&gt;
	&lt;link href=&quot;../css/style.css&quot; rel=&quot;stylesheet&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div&gt;
		&lt;?php
		require_once(&quot;../lib/util.php&quot;);
		//文字エンコードの検証
		if (!cken($_POST)) {
		$encoding = mb_internal_encoding();
		$err = &quot;Encoding Error! The expected encoding is &quot; . $encoding ;
		//エラーメッセージを出して、以下のコードをすべてキャンセルする
		exit($err);
		}
		//HTMLエスケープ(XSS対策)
		$_POST = es($_POST);
		?&gt;

		&lt;?php
		//POSTされた値を取り出す
		if (isset($_POST[&quot;mile&quot;])) {
		//数値かどうか確認する
		$isNum = is_numeric($_POST[&quot;mile&quot;]);
		if($isNum){
			//数値ならば計算式とフォームの表示の値で使う
			$mile = $_POST[&quot;mile&quot;];
			$error = &quot;&quot;;
		}else{
			$mile = &quot;&quot;;
			$error = &#039;&lt;span&gt;数値を入力してください&lt;/span&gt;&#039;;
		}
		}else{
			//POSTされた値がないとき(初回表示の時も)
			$isNum = false;
			$mile = &quot;&quot;;
			$error = &quot;&quot;;
		}
		?&gt;

		&lt;!-- 入力フォームを作る（現在のページにPOSTする） --&gt;
		&lt;!-- $_SERVER[&#039;PHP_SELF&#039;] = 自分自身のページのURL
		エスケープ処理もする --&gt;
		&lt;form method=&quot;POST&quot; action=&quot;&lt;?php echo es($_SERVER[&#039;PHP_SELF&#039;]); ?&gt;&quot;&gt;
		&lt;ul&gt;
			&lt;li&gt;
			&lt;label&gt;マイルをkmに換算：
				&lt;input type=&quot;text&quot; name=&quot;mile&quot; value=&quot;&lt;?php echo $mile; ?&gt;&quot;&gt;
			&lt;/label&gt;
			&lt;!-- エラー表示 --&gt;
			&lt;?php echo $error; ?&gt;
			&lt;/li&gt;
			&lt;li&gt;&lt;input type=&quot;submit&quot; value=&quot;計算する&quot;&gt;&lt;/li&gt;
		&lt;/ul&gt;
		&lt;/form&gt;

		&lt;?php
		//$mileが数値であれば計算結果を表示する
		if ($isNum) {
			echo &quot;&lt;HR&gt;&quot;;
			$kilometer = $mile * 1.609344;
			echo &quot;{$mile}マイルは{$kilometer}kmです。&quot;;
		}
		?&gt;

	&lt;/div&gt;

	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>
						<li class="sample">
							<h4>データベース連携</h4>
							<div class="code-box2">
								<pre class="prettyprint">
									<code>
	&lt;!DOCTYPE html&gt;
	&lt;html lang=&quot;ja&quot;&gt;
	&lt;head&gt;
	&lt;meta charset=&quot;utf-8&quot;&gt;
	&lt;title&gt;PDOでデータベースに接続する&lt;/title&gt;
	&lt;link rel=&quot;stylesheet&quot; href=&quot;../../css/style.css&quot;&gt;
	&lt;/head&gt;
	&lt;body&gt;
	&lt;div&gt;
		&lt;?php
		//データベースユーザ
		$user = &#039;testuser&#039;;
		$password = &#039;pw4testuser&#039;;
		//利用するデータベース
		$dbName = &#039;testdb&#039;;
		//MySQLサーバ(MAMPのPreferencesのPortから確認)
		$host = &#039;localhost:3306&#039;;
		// MySQLのDSN文字列(データのありかを文字列にしたもの)
		$dsn = &quot;mysql:host={$host};dbName={$dbName};charset=utf8&quot;;

		//MySQLデータベースに接続する
		try {
		$pdo = new PDO($dsn,$user,$password);
		// プリペアドステートメントのエミュレーションを無効にする
		$pdo-&gt;setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		//例外がスローされる設定にする
		$pdo-&gt;setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		echo &quot;データベース{$dbName}に接続しました。&quot;;
		//接続を解除する
		$pdo = NULL;
		// Exeption：例外オブジェクト(エラーに関する様々な情報をもつ) 別名$eに設定している
		} catch (Exception $e) {
		echo&#039;&lt;span class=&quot;error&quot;&gt;エラーがありました。&lt;/span&gt;&lt;br&gt;&#039;;
		echo $e-&gt;getMessage();
		exit();
		}

		?&gt;
	&lt;/div&gt;
	&lt;/body&gt;
	&lt;/html&gt;
									</code>
								</pre>
							</div>
						</li>


					</ul>
				</div>
		</section>
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