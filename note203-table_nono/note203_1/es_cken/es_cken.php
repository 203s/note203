<?php
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
      return htmlspecialchars($data,ENT_QUOTES,'utf-8');
    }
  }

  //配列の文字エンコードのチェックを行う
  function cken(array $data){
    $result = true;
    foreach ($data as $key => $value) {
      if (is_array($value)) {
        //含まれている値が配列のとき、文字列に連結する
        //implode() 配列要素を文字列により連結する
        $value = implode("",$value);
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
  //?>