var index=0;
var addr = "https://royenheart.com/wp-content/uploads/phar-mc";
var scene=[addr+"/img/beauty01.png",addr+"/img/beauty02.png",addr+"/img/beauty03.png",
           addr+"/img/beauty04.png",addr+"/img/beauty05.png",addr+"/img/beauty06.png",
           addr+"/img/beauty07.png",addr+"/img/beauty08.png"];
var explain=["主城夜景","商店夜景","地牢夜景","头颅商店","商店","世界树","Cake_233之塔","Cake_233之塔"];

function re_size() {
    var height_pic = document.getElementById("b1sc").clientHeight;
    height_pic += "px";
    document.getElementById("img_container").style.height = height_pic;
}

window.onload = function() {
    re_size();
}
window.onresize = function() {
    re_size();
}

function des_switch(forward) {
    timer = null;
    index = index + forward;
    if(index<0) {
        index=7;
    } else if(index>=8) {
        index=0;
    }
    // 声明图片(img标签)
    var img_obj  = new Image();
    img_obj.alt = "图片显示错误";
    img_obj.id = "b1sc"
    img_obj.src = scene[index];
    document.getElementById("img").removeChild(document.getElementById("b1sc"));
    document.getElementById("img").appendChild(img_obj); // 转换完毕之后才能进行文字说明的切换
    document.getElementById("explain").innerHTML = "切换中......";
    timer = setInterval(function() {
        if(img_obj.complete) {
            document.getElementById("explain").innerHTML = explain[index];
            re_size();
            clearInterval(timer);
        }
    }, 100);
}
