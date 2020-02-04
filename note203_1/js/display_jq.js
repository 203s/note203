//==============================================================
//タブ・アコーディオン機能・表示非表示切り替え等
//==============================================================

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


//「書式表編集行」の表示
$(function(){
    'use strict';

    //デフォルトは非表示
    $('.edit-row').hide();
    $('.add-row').hide();

    $('.pencil1').click(function(){
        $('.add-row').hide();      
        $(this).closest('.data-row').next().toggle();
        $(this).togglec
    });
    $('.plus1').click(function(){
        $('.edit-row').hide();
        $(this).closest('.data-row').next().next().toggle();
    });

    //「編集行」以外をクリックしたら非表示
    $(document).on('click touchend', function(event) {
        if (!$(event.target).closest('.pencil1, .plus1, .edit-row, .add-row').length) {
            $('.edit-row').hide();
            $('.add-row').hide();
        }
      });
});




//「サンプル」アコーディオンパネル
    $('.code-form-submit, .code-close').hide();
    								
	$('.title-title').click(function() {

        $(this).parent().next().slideToggle(50);
    });

    // $('.title-title, .code-close').click(function() {

    //     $(this).parent().next().slideUp(50);
    //     $('.code-form-submit, .code-close').hide();
    // });



});

//「サンプル編集アイコン」の表示
// $(function(){
//     'use strict';
    
//     //デフォルトは非表示
//     $('.minus2, .pencil2, .plus2').hide();

//     $('.sample-title').mouseover(function(){
//         $('.minus2, .pencil2, .plus2').show();      
//     });
//     $('.sample-title').mouseout(function(){
//         $('.minus2, .pencil2, .plus2').hide();      
//     });

//     // if ($('.edit-code-wrap').is(':visible')) {
//     //     $('.minus2, .pencil2, .plus2').show();      
//     // } 
//     // if ($('.add-code-wrap').is(':visible')) {
//     //     $('.minus2, .pencil2, .plus2').show();      
//     // } 
//     // if ($('.code-box').is(':visible')) {
//     //     $('.minus2, .pencil2, .plus2').show();      
//     // } 
// });


//「サンプル編集エリア」の表示
$(function(){
    'use strict';

    //デフォルトは非表示
    $('.edit-code-wrap').hide();
    $('.add-code-wrap').hide();

    $('.pencil2').click(function(){
        $('.add-code-wrap').hide();      
        $(this).parent().parent().next().filter('.edit-code-wrap').toggle();
    });
    $('.plus2').click(function(){
        $('.edit-code-wrap').hide();
        $(this).parent().parent().next().next().filter('.add-code-wrap').toggle();
    });

    //「サンプル編集エリア」以外をクリックしたら非表示
    $(document).on('click touchend', function(event) {
        if (!$(event.target).closest('.pencil2, .plus2, .edit-code-wrap, .add-code-wrap').length) {
            $('.edit-code-wrap').hide();
            $('.add-code-wrap').hide();
        }
      });
});




