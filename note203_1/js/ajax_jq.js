//==========================================================================
// ajaxでPOST通信
//==========================================================================


//書式表-------------------------------------------------------------------------
//'addTableRow'(表の最下行に一行追加)
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

        var id = $(this).parent().parent().prev().find('.id-cell:last').text();

        //ajax処理
        $.post(
            '_ajax/php',//送り先
            {
                mode: 'addTableRow',//処理の種類の分類
                tableName: tableName, //紐づけるDBのテーブル名
                tag: tag, format: format, text: text, url: url, id: id
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
    $('.minus1').on('click',function(){
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

//'editTableRow'(指定の行を編集)
$(function(){
    'use strict';
    $('.edit-form-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().prev().find('.id-cell').text();

            //入力内容を変数に代入
            var tag = $(this).siblings().find('input[name="tag"]').val();
            var format = $(this).siblings().find('input[name="format"]').val();
            var text = $(this).siblings().find('input[name="text"]').val();
            var url = $(this).siblings().find('input[name="url"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'editTableRow',
                    tableName: tableName,
                    id: id,

                    tag: tag, format: format, text: text, url: url

                },
                function(){
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(format);

                },
            );
    });
});

//'insertTableRow'(指定の行の下に一行追加)
$(function(){
    'use strict';
    $('.insert-form-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().prev().prev().find('.id-cell').text();

            //入力内容を変数に代入
            var tag = $(this).siblings().find('input[name="tag"]').val();
            var format = $(this).siblings().find('input[name="format"]').val();
            var text = $(this).siblings().find('input[name="text"]').val();
            var url = $(this).siblings().find('input[name="url"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'insertTableRow',
                    tableName: tableName,
                    id: id,

                    tag: tag, format: format, text: text, url: url

                },
                function(){
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(format);

                },
            );
    });
});



//サンプルコード-------------------------------------------------------------------------
//'updateSampleCode'(サンプルコード)
$(function(){
    'use strict';
    $('.code-form-submit').on('click',function(){
            
            var tableName = $(this).attr("name");
            var id = $(this).siblings().filter('.code-id').text();
            var title = $(this).prev().find('.code-title').text();
            var code = $(this).parent().next().find('.code-code').text();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'updateSampleCode',
                    tableName: tableName,
                    id: id,
                    title: title,
                    code: code
                },
                function(){
                    // window.location.reload();
                    console.log('ajaxによるPOST成功');
                    console.log(tableName);
                    console.log(id);
                    console.log(title);
                    console.log(code);

                },
            );
    });
});



