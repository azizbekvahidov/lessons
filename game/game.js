var player1 = {}, player2 = {};
var pName = document.querySelector(".player_name");
var pAge = document.querySelector(".player_age");
var pTitle = document.querySelector("#player_title");
var pForm = document.querySelector("#player_form");
var log = document.querySelector("#log");
var isValid = true;

function createPlayer(){
    var player = {
        health: 100,
        power: randomNumber(1,10),
    };
    if(pName.value == ""){
        isValid = false;
        alert("vvedite name");
        return {};
    }else{
        isValid = true;
        player["name"] = pName.value;
    }
    if(pAge.value == ""){
        isValid = false;
        alert("vvedite age");
        return {};
    }else{
        isValid = true;
        player["age"] = pAge.value;
    }
    return player;
}

var saveBtn = document.querySelector("#saveBtn");
saveBtn.addEventListener("click", function(){
    if(Object.keys(player1).length === 0){
        let p = document.createElement("br");
        log.append("button pressed",p);
        player1 = createPlayer();
        if(isValid){
            pName.value = "";
            pAge.value = "";
            pTitle.innerText = "Player 2";
        }
    }
    else if(Object.keys(player2).length === 0){
        let p = document.createElement("p");
        p.innerText = "second button pressed";
        p.style.marginLeft = "30px";
        log.prepend(p);
        player2 = createPlayer();
        if(isValid)
            pForm.style.display = "none";
    }
    
});

function randomNumber(min,max) {
    return Math.floor(Math.random() * max) + min;
}
