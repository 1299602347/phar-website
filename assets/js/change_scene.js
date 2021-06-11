var index=0;
var addr = "https://royenheart.com/wp-content/uploads/phar-mc";
var scene=[addr+"/img/beauty01.png",addr+"/img/beauty02.png",addr+"/img/beauty03.png",
           addr+"/img/beauty04.png",addr+"/img/beauty05.png",addr+"/img/beauty06.png",
           addr+"/img/beauty07.png",addr+"/img/beauty08.png"];
var explain=["主城夜景","商店夜景","地牢夜景","头颅商店","商店","世界树","Cake_233之塔","Cake_233之塔"];
function scene_switch() {
    document.getElementById("b1sc").src = scene[index];
    document.getElementById("explain").innerHTML = explain[index];
    index++;
    if(index >= 8) {
        index=0;
    }
}

setInterval("scene_switch()",3000);

