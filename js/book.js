
$(function() {
    var $mybook         = $('#mybook');
    var $bttn_next      = $('#next_page_button');
    var $bttn_prev      = $('#prev_page_button');
    var $loading        = $('#loading');
    var $mybook_images  = $mybook.find('img');
    var cnt_images      = $mybook_images.length;
    var loaded          = 0;
//预装书中的所有图片，

//然后调用手册插件

    $mybook_images.each(function(){
        var $img    = $(this);
        var source  = $img.attr('src');
        $('<img/>').load(function(){
            ++loaded;
            if(loaded == cnt_images){
                $loading.hide();
                $bttn_next.show();
                $bttn_prev.show();
                $mybook.show().booklet({
                    name:               null,                            //  要在文档标题中显示的小册子的名称
                    width:              800,
                    height:             500,
                    speed:              600,                             // 翻页速度
                    direction:          'LTR',                           // 方向
                    startingPage:       0,                               // 要显示的第一页索引
                    easing:             'easeInOutQuad',
                    easeIn:             'easeInQuad',
                    easeOut:            'easeOutQuad',

                    closed:             true,
                    closedFrontTitle:   null,
                    closedFrontChapter: null,
                    closedBackTitle:    null,
                    closedBackChapter:  null,
                    covers:             false,
                    pagePadding:        10,
                    pageNumbers:        true,
                    hovers:             false,
                    overlays:           false,
                    tabs:               false,
                    tabWidth:           60,
                    tabHeight:          20,
                    arrows:             false,
                    cursor:             'pointer',
                    hash:               false,
                    keyboard:           true,
                    next:               $bttn_next,
                    prev:               $bttn_prev,
                    menu:               null,
                    pageSelector:       false,
                    chapterSelector:    false,
                    shadows:            true,
                    shadowTopFwdWidth:  166,
                    shadowTopBackWidth: 166,
                    shadowBtmWidth:     50,
                    before:             function(){},
                    after:              function(){}
                });
            }
        }).attr('src',source);
    });

});
