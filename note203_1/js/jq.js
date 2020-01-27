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

// //URLリンク(※)の表示非表示
// $(function(){
//     'use strict';

//     var url = $('.kome').attr('href');
//     // $("h4").html(url);
//     if(url === ""){
//         $('.kome').addClass('hide');
//     }
// });


//===============================================================
// ajaxでPOST通信
//===============================================================

//'addTableRow'(表に一行追加)
$(function(){
    'use strict';

    $('.add-form').on('click', '.add-form-submit', function(){
        //idより変更するDBのテーブル名を取得(ボタンのid名は送信したいテーブル名にしておく)
        var tableName = $(this).attr("name");
        // 入力フォームそれぞれのvalueの値を取得
        var tag = $(this).siblings().find('input[name="tag"]').val();
        var format = $(this).siblings().find('input[name="format"]').val();
        var text = $(this).siblings().find('input[name="text"]').val();
        var url = $(this).siblings().find('input[name="url"]').val();

        //ajax処理
        $.post(
            '_ajax/php',//送り先
            {
                mode: 'addTableRow',//処理の種類の分類
                tableName: tableName, //紐づけるDBのテーブル名
                tag: tag, format: format, text: text, url: url,
            },
            function(){
                window.location.reload();
                // console.log('ajaxによるPOST成功');
                // console.log(tableName);
            },
            // 'json'
        );
    });
});


//'deleteRow'(表から指定の行削除)
$(function(){
    'use strict';
    $('.fa-times-circle').on('click',function(){
        // 確認画面
        if(confirm('指定した行を削除しますか？')){
            
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().next().text();

            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'deleteRow',
                    tableName: tableName,
                    id: id
                },
                function(){
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);

                },
            );
           
        }

    });
});

