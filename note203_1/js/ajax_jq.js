//==========================================================================
// ajaxでPOST通信
//==========================================================================

//部分的にリロード(ファンクションの定義)
// $(function(){
//     function doAjaxReload(content) {
    
//         // jQueryのajaxメソッドを使用しajax通信
//         $.ajax({
//             type: "GET", // GETメソッドで通信
    
//             url: "note_test_server_nono2.php", // 取得先のURL
    
//             cache: false, // キャッシュしないで読み込み
    
//             // 通信成功時に呼び出されるコールバック
//             success: function (data) {
    
//                 $(content).html(data);
    
//             },
//             // 通信エラー時に呼び出されるコールバック
//             error: function () {
    
//                 alert("Ajax通信エラー");
    
    
//             }
//         });
    
//     }
// });
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

//「MEMO」-------------------------------------------------------------------------
//'deleteMemo'
$(function(){
    'use strict';
    $('.minus-memo').on('click',function(){
        // 確認画面
        if(confirm('指定したMEMOを削除しますか？')){
            
            // 選択した行のname,idを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().find('.memo-id').text();
            // console.log(tableName);
            // console.log(id);

            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'deleteMemo',
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

//'editMemo'(指定のメモを編集)
$(function(){
    'use strict';
    $('.edit-memo-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().find('.memo-id').text();

            //入力内容を変数に代入
            var text = $(this).parent().parent().find('input[name="text"]').val();
            var url = $(this).parent().parent().find('input[name="url"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'editMemo',
                    tableName: tableName,
                    id: id,

                    text: text, url: url

                },
                function(){
                    // var contentRe = '.sample'
                    // doAjaxReload(contentRe)
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(text);
                    // console.log(url);

                },
            );
    });
});

//'insertMemo'(指定のメモの下に新規追加)
$(function(){
    'use strict';
    $('.insert-memo-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().find('.memo-id').text();

            //入力内容を変数に代入
            var text = $(this).parent().parent().find('input[name="text"]').val();
            var url = $(this).parent().parent().find('input[name="url"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'insertMemo',
                    tableName: tableName,
                    id: id,

                    text: text, url: url

                },
                function(){
                    // var contentRe = '.sample'
                    // doAjaxReload(contentRe)
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(text);
                    // console.log(url);

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

//'deleteSampleCode'(サンプルコード削除)
$(function(){
    'use strict';
    $('.minus2').on('click',function(){
        // 確認画面
        if(confirm('指定したサンプルを削除しますか？')){
            
            // 選択した行のname,idを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().find('.code-id').text();
            // console.log(tableName);
            // console.log(id);

            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'deleteSampleCode',
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

//'editSampleCode'(指定のサンプルコードを編集)
$(function(){
    'use strict';
    $('.edit-code-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().find('.code-id').text();

            //入力内容を変数に代入
            var title = $(this).parent().parent().find('input[name="title"]').val();
            var code = $(this).parent().parent().find('textarea[name="code"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'editSampleCode',
                    tableName: tableName,
                    id: id,

                    title: title, code: code

                },
                function(){
                    // var contentRe = '.sample'
                    // doAjaxReload(contentRe)
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(title);
                    // console.log(code);

                },
            );
    });
});

//'insertSampleCode'(指定のサンプルの下に新規追加)
$(function(){
    'use strict';
    $('.insert-code-submit').on('click',function(){
            // 選択した行のidを取得
            var tableName = $(this).attr("name");
            var id = $(this).parent().parent().parent().find('.code-id').text();

            //入力内容を変数に代入
            var title = $(this).parent().parent().find('input[name="title"]').val();
            var code = $(this).parent().parent().find('textarea[name="code"]').val();
            
            //ajax処理
            $.post(
                '_ajax/php',
                {
                    mode: 'insertSampleCode',
                    tableName: tableName,
                    id: id,

                    title: title, code: code

                },
                function(){
                    window.location.reload();
                    // console.log('ajaxによるPOST成功');
                    // console.log(tableName);
                    // console.log(id);
                    // console.log(title);
                    // console.log(code);

                },
            );
    });
});


