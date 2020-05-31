window.onload = () => {
    // 获取各个节点
    var body = document.getElementsByTagName("body")[0];
    var banner = document.getElementsByClassName("banner");
    var span = document.getElementsByClassName("tab")[0].getElementsByTagName("span");
    var next = document.getElementsByClassName("next")[0];
    var prev = document.getElementsByClassName("prev")[0];

    // 初始化,num表示当前第几张图（数组以0开始）
    banner[0].style.opacity = "1";
    span[0].className = "on";
    var num = 0;

    // 小圆点绑定点击事件，先循环一遍，给每个圆点的下标值赋值，使得每个圆点对应一张图片，
    // 再将所有小圆点样式置空，再设置当前被点击小圆点的样式（this.index代表当前点击圆点下标）
    for (let i = 0; i < span.length; i++) {
      span[i].index = i;
      span[i].onclick = function () {
        for (let j = 0; j < span.length; j++) {
          num = this.index;
          span[j].className = "";
          banner[j].style.opacity = "0";
        }
        span[num].className = "on";
        banner[num].style.opacity = "1";
      }
    }

    // 下一张图标绑定点击事件，临界值控制（最后的小圆点值为4，大于4时，需要回到第一张）
    next.onclick = function () {
      for (let j = 0; j < span.length; j++) {
        if (span[j].className == "on") {
          span[j].className = "";
          banner[j].style.opacity = "0";
          j++;
          num++;
          if (j > 4) {
            j = 0;
            num = 0;
          }
          span[j].className = "on";
          banner[j].style.opacity = "1";
        }
      }
    }

    // 上一张图标绑定点击事件
    prev.onclick = function () {
      for (let j = 0; j < span.length; j++) {
        if (span[j].className == "on") {
          span[j].className = "";
          banner[j].style.opacity = "0";
          j--;
          num--;
          if (j < 0) {
            j = 4;
            num = 4;
          }
          span[j].className = "on";
          banner[j].style.opacity = "1";
        }
      }
    }

    function Time() {
      num++;
      if (num < 5) {
        for (let j = 0; j < span.length; j++) {
          span[j].className = "";
          banner[j].style.opacity = "0";
        }
        span[num].className = "on";
        banner[num].style.opacity = "1";
        if (num == 4) {
          num = -1;
        }
      } else {
        num = -1;
      }
    }

    clearInterval(timer);
    var timer = setInterval(Time, 3000);

    // 鼠标引入，清除定时器，轮播图停止
    body.onmouseover = function () {
      clearInterval(timer);
    }

    //鼠标移出，重新调用定时器，轮播图开始
    body.onmouseout = function () {
      clearInterval(timer);
      timer = setInterval(Time, 3000);
    }
  }
