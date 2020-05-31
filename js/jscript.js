// 更多页开始
var typeWords = document.getElementById("typeWords");
var i = 0, j=0, timer, flag = 1;
var str2 = "12345";

function typing1(){
    if(flag){
            timer = setInterval(function(){
                    typeWords.innerHTML = str2.slice(0, i++) + "|";
                    if(i == str2.length+1){
                        clearInterval(timer);
                        flag = 0;
                    }
            }, 150)
    }
}
window.onload = typing1;
// 更多页结束
// 祝福页开始
(function ($) {

  var container;

  // 可选颜色
  var colors = ['#FFEB3B', '#FFC107', '#FF9800', '#FF5722', '#795548'];

  //创建许愿页
  var createItem = function(text){
    var color = colors[parseInt(Math.random() * 5, 15)];//生成一个1-10内随机的整数
    $('<div class="item"><p>'+ text +'</p><a href="#">关闭</a></div>').css({ 'background': color }).appendTo(container).drag(); //appendTo  把内容添加到containter中
  };

  // 定义拖拽函数
    $.fn.drag = function () {

        var $this = $(this);
        var parent = $this.parent();

        var pw = parent.width();
        var ph = parent.height();
        var thisWidth = $this.width() + parseInt($this.css('padding-left'), 10) + parseInt($this.css('padding-right'), 10);
        var thisHeight = $this.height() + parseInt($this.css('padding-top'), 10) + parseInt($this.css('padding-bottom'), 10);

        var x, y, positionX, positionY;
        var isDown = false;

        var randY = parseInt(Math.random() * (ph - thisHeight), 10);
        var randX = parseInt(Math.random() * (pw - thisWidth), 10);


        parent.css({
            "position": "relative",
            "overflow": "hidden"
        });

        $this.css({
            "cursor": "move",
            "position": "absolute"
        }).css({
            top: randY,
            left: randX
        }).mousedown(function (e) {
            parent.children().css({
                "zIndex": "0"
            });
            $this.css({
                "zIndex": "1"
            });
            isDown = true;
            x = e.pageX;
            y = e.pageY;
            positionX = $this.position().left;
            positionY = $this.position().top;
            return false;
        });


        $(document).mouseup(function (e) {
            isDown = false;
        }).mousemove(function (e) {
            var xPage = e.pageX;
            var moveX = positionX + xPage - x;

            var yPage = e.pageY;
            var moveY = positionY + yPage - y;

            if (isDown == true) {
                $this.css({
                    "left": moveX,
                    "top": moveY
                });
            } else {
                return;
            }
            if (moveX < 0) {
                $this.css({
                    "left": "0"
                });
            }
            if (moveX > (pw - thisWidth)) {
                $this.css({
                    "left": pw - thisWidth
                });
            }
            if (moveY < 0) {
                $this.css({
                    "top": "0"
                });
            }
            if (moveY > (ph - thisHeight)) {
                $this.css({
                    "top": ph - thisHeight
                });
            }
        });
    };

  // 初始化
  var init = function () {

    container = $('#container');
// 绑定关闭事件
    container.on('click','a',function () {
      $(this).parent().remove();
    }).height(($(window).height() -200) < 0? 500 : ($(window).height() -200))
                  .width(($(window).width() -200) < 0? '100%' : $(window).width());

    var tests = ['<?php ?>', '风雨同心，我们安危与共', '齐心协力，共抗病毒', '但行好事，莫问前程', '广东医的男人最棒！',"病毒退散","我想快点开学","期待春天与你相逢","希望医护人员平安归来","白衣天使们辛苦了!"];
    $.each(tests, function (i,v) {
      createItem(v);
    });

    // 绑定输入框
    $('#input').keydown(function (e) {
      var $this = $(this);
      if(e.keyCode == '13') {
        var value = $this.val();
        if(value) {
          createItem(value);
          $this.val('');
        }
      }
    });

  };
  $(function() {
    init();
  });
})(jQuery);
// 祝福页结束结束
// 登录页开始
$(function () {
        $('.msg button').click(function () {
            console.log("tt");
            $('#register-form').toggle(300);
            $('#login-form').toggle(300);
            return false;
        });
    });
function InputCheck(RegForm)
{
    if (RegForm.id.value == "")
    {
        alert("用户名不能为!");
        RegForm.id.focus();
        return(false);
    }
    if (RegForm.password.value == "")
    {
        alert("密码不能为空!");
        RegForm.password.focus();
        return(false);
    }
}
// 登录页结束

