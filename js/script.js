let text = document.querySelector("#result");
var isOperator = false;
var isEqual = false;
var isDot = false;

let action = document.querySelectorAll(".operator");
action.forEach((i) => i.addEventListener('click',function(){
    if(!isOperator){
        setValue({inputValue:this.value});
    }
    else{
        backspace();
        setValue({inputValue:this.value});
    }
    isOperator = true;
    isDot = false;
}));

let number = document.querySelectorAll(".number");
number.forEach((i) => i.addEventListener('click',function(){
    if(isEqual){
        clear();
        setValue({inputValue:this.value});
    }
    else{
        setValue({inputValue:this.value});
    }
    isOperator = false;
    isEqual = false;
}));

let dotElement = document.querySelector("#dot");
dotElement.addEventListener('click',function(){
    if(!isDot){
        if(isEqual){
            clear();
            setValue({inputValue:this.value});
        }
        else{
            setValue({inputValue:this.value});
        }
        isOperator = false;
        isEqual = false;
        isDot = true;
    }
});

let clearBtn = document.querySelector("#clear");
clearBtn.addEventListener("click", clear);

let backspaceBtn = document.querySelector("#backspace");
backspaceBtn.addEventListener("click", backspace);

let equalBtn = document.querySelector("#equal");
equalBtn.addEventListener("click", function(){
    text.value = eval(text.value);
    isEqual = true;
    isDot = false;
});

function setValue({inputValue}){
    text.value += inputValue;
    isEqual = false;
}

function backspace(){
    text.value = text.value.substring(0, text.value.length - 1)   
}

function clear(){
    text.value = "";
    isOperator = false;
    isEqual = false;
    isDot = false;
}



 var testBtn = document.querySelector(".number");
//  testBtn.addEventListener("click");
 var testBtns = document.querySelectorAll(".number");
 testBtns.forEach(function(item){
    item.addEventListener("click",function(){
        console.log(item.value);
    });
 });


 M0stbyteTeam