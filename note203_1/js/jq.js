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

    $('#form_id').on('click', '#table-form-submit1', function(){
        var tag = $(this).siblings().find('input[name="tag"]').val();
        var format = $(this).siblings().find('input[name="format"]').val();
        var text = $(this).siblings().find('input[name="text"]').val();
        var url = $(this).siblings().find('input[name="url"]').val();
        //ajax処理
        $.post(
            '_ajax/php',
            {tag: tag, format: format, text: text, url: url,
            mode: 'addTableRow'},
            function(res){
                window.location.reload();
                console.log('ajaxによるPOST成功')
            },
            // 'json'
        )
    });

});

// フォーム送信でテーブルを削除
// $(function(){
//     $('#table-form-submit').submit(function(){
//         // #table-form-submit
//         $('.table:first').hide();
//         // '.htnl > .table:first'
//     });
// });