var index=0;
var addr = "https://royenheart.com/wp-content/themes/phar-mc";
var scene=[addr+"/img/beauty01.png",addr+"/img/beauty02.png",addr+"/img/beauty03.png"];

function scene_switch() {
    document.getElementById("b1sc").src = scene[index];
    index++;
    if(index > 2) {
        index=0;
    }
}

setInterval("scene_switch()",3000);

