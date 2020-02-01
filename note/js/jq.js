$(function(){

//タブ表示

    //htmlcss以外非表示
    $('main > div[id != "php"]').hide();
    
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


//アコーディオンパネル

    								
	$('.sample h4').click(function() {

		// var $codearea = $(this).find('.code-box2');
		// if($codearea.hasClass('open')) {
		// 	$codearea.removeClass('open');
	
	
		// } else {
		// 	$codearea.addClass('open');
	
        // }
        // 上をまとめると↓

        $(this).next().toggleClass('open');


	});
								

});