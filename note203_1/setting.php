<?php
	// PHPエラーチェック・出力(参考URL:https://www.sejuku.net/blog/77760)
	ini_set("display_errors", 1);
	error_reporting(E_ALL);

	// PDO接続に必要な情報を定数として設定
	define('DB_USER','bokunopo');//データベースログインネーム
	define('DB_PASS','n51290195');//データベースログインパス
	define('DB_NAME','bokunopo_note203');//データベース名
	define('HOST','mysql740.db.sakura.ne.jp');//確認 https://secure.sakura.ad.jp/rs/cp/sites/database/list
	define('DSN',"mysql:host=mysql740.db.sakura.ne.jp;dbname=bokunopo_note203;charset=utf8");
?>
