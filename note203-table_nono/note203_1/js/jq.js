$(function(){

//タブ表示

    //htmlcss以外非表示
    $('main > div[id != "sql"]').hide();
    
    //タブをクリック
    $('.tab').click(function(){

        //いったん全て非表示
        $('main > div').hide();

        //(href属性を取得).表示
        $($(this).children('a').attr("href")).show();

        //現在のcurrentクラスを削除
        $('.current').removeClass('current');

        //選択されたタブにcurrentクラスを追加
        $(this).addClass('current');

        return false;
    });



});

// ajaxでフォームの入力内容をPOST通信
$(function(){
    'use strict';

    $('.add-form').on('click', '.add-form-submit', function(){
        //idより変更するDBのテーブル名を取得(ボタンのid名は送信したいテーブル名にしておく)
        var tableName = $(this).attr("id");
        // 入力フォームそれぞれのvalueの値を取得
        var tag = $(this).siblings().find('input[name="tag"]').val();
        var format = $(this).siblings().find('input[name="format"]').val();
        var text = $(this).siblings().find('input[name="text"]').val();
        var url = $(this).siblings().find('input[name="url"]').val();

        //ajax処理
        $.post(
            '_ajax/php',
            {
            mode: 'addTableRow',//処理の種類の分類
            tableName: tableName, //紐づけるDBのテーブル名
            tag: tag, format: format, text: text, url: url,
            },
            function(res){
                window.location.reload();
                // console.log('ajaxによるPOST成功');
                // console.log(tableName);
            },
            // 'json'
        )
    });

});

