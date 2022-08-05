/*var c = [6,8,"s",11,"o","l",false]
var d = ""
for(var i = 0; i < c.length; i++){
    if( typeof c[i] == "string" ){
        d += c[i]
    }
}
console.log(d)
*/

/*
let n = [2,3,12,3,21,34,34,54,234,54,4657,234,76,23,7,9,45,897,5,8,90];

for (let i = 2; i <= n.length; i++) {
  for (let j = 2; j < n[i]; j++) { 
    if (i % j == 0) continue;
  }
 console.log( i );
}
*/

/*
let a  = [1,5,8,9,2,4]
let b = []
for(let i = a.length-1; i >= 0; i--){
  b.push(a[i])
}
console.log(b)





/*
let arr = [2,3,12,3,21,34,34,54,234,54,4657,234,76,23,7,9,45,897,5,8,90];
let a = 0
for( i = 0; i < arr.length; i++ ){
  if( arr[i] % 2 == 0 ){
    a += arr[i]
  }
}
console.log(a)
*/

/*let ins = [5,4,3,6,7]
for(let i = 0; i < ins.length; i++){
  let index = i
  for(let j = i + 1; j < ins.length; j++){
    if(ins[index] > ins[j]){
      index = j
    }
  }
  let temp = ins[i]
  ins[i] = ins[index]
  ins[index] = temp
}
console.log(ins);
*/

/*let n = prompt("name")
let s = prompt("surename")
let age = prompt("age")

let objeck = {
    "name": n,
    "surename": s,
    "age": age
}
console.log(objeck)*/



/*let b = function a(bub){
for (let i = 0; i < bub.length; i++) {
    for (let j = 0; j < bub.length; j++) {
        if(bub[j] > bub[j+1]){
            var temp = bub[j];
            bub[j] = bub[j+1];
            bub[j+1] = temp;
        }        
    }
    
}
return bub
}
console.log(bub([324, 2, 34,24,3,66,1]))
*/


// function star(n){
//   let a = ""
//   for(let i = 0; i < n; i++){
//     let b = ""
//     for(let j = 0; j < n-1-i; j++){
//       b += " "
//     }
//     a += "* "
//     console.log(b +a)
//   }
// }
// star(10)

// function a({n = 100, b = 0, d}){
//   let c = 0
//   for(let i = b;i <= b + n; i++){
//     if(i % d == 0){
//       c += i
//     } 
//   }
//   return c
// }
// console.log(a({d:2}))


// function f(n,i = 1){
//   var a  = 1
//   if(n >= i){
//     a *= i
//     i++
//     f(n,i)
//   }
//   return a
// }

// console.log(f(3))

/*
function exponenta(x,y){
  if(y == 0){
    return 1
  }else{
    return x *exponenta(x, y - 1)
  }
}
console.log(exponenta(2,3))*/






        //UFS

// var player1;
// var player2;
// var queuePLayer;
// function game(){
//   initialize();
//   console.log(player1,player2);
//   queue();
//   win();
// }
// function initialize(){
//   player1 = createPLayer();
//   player2 = createPLayer();
//   queuePLayer = getRandom(0,1);
// }
// function createPLayer(){
//   var nemePlayer = prompt("enter name")
//   return {
//     name : nemePlayer,
//     health : 100,
//     power: getRandom(30,50),
//   }
// }

// function queue(){
//   if(player1.health <= 0 || player2.health <= 0){ 
//     console.log("match is ended");
//   }
//   else{
//     if(queuePLayer == 0){
//       getPunch(player1,player2)
//       queuePLayer = 1
//       queue();
//     }
//     else{
//       getPunch(player2,player1)
//       queuePLayer = 0
//       queue();
//     }
//   }
// }
// function getPunch(obj1,obj2){
//   let punchpower = getRandom(1, obj1.power)
//   obj2.health -= getRandom(1, obj1.power);
//   console.log(obj1.name, `punched with power ${punchpower}`, `health ${obj2.name} is ${obj2.health}`)
// }
// function win(){
//   if(player1.health <= 0){
//     console.log(`${player2.name} is win`);
//   }
//   if(player2.health <= 0){
//     console.log(`${player1.name} is win`)
//   }
// }
// function getRandom(min,max){
//   return Math.floor(Math.random(min, max) * 10)
// }
// game()




        //CLASS

/*class Abc{
  constructor(a,b,c){
    this.a = a
    this.b = b
    this.c = c
  }
  calculate(){
    return this.a + this.b + this.c
  }
}


var c = new Abc(2,4,5)*/





// class Animal {
//   constructor(name){
//     this.name = name;
//   }
// }

// class Rabbit extends Animal{
//   constructor(name){
//     super(name)
//     this.created = Date.now();
//   }
// }


// let rabbit = new Rabbit("White Rabbit")
// alert(rabbit.name)




// class Clock{
//   constructor({template}){
//     this.template = template
//   }
//   render() {
//     let date = new Date();

//     let hours = date.getHours();
//     if (hours < 10) hours = '0' + hours;

//     let mins = date.getMinutes();
//     if (mins < 10) mins = '0' + mins;

//     let secs = date.getSeconds();
//     if (secs < 10) secs = '0' + secs;

//     let output = this.template
//       .replace('h', hours)
//       .replace('m', mins)
//       .replace('s', secs);

//     console.log(output);
//   }

//   stop(){
//     clearInterval(this.timer);
//   };

//   start(){
//     this.render();
//     this.timer = setInterval(() => this.render(), 1000)
//   };


// }

// class ExtendedClock extends Clock{
//   constructor({template, precision}){
//     super ({template})
//     this.precision = precision
//   }
//   start(){
//     this.render();
//     this.timer = setInterval(() => this.render(), this.precision)
//   }
// }


// let clock = new ExtendedClock({template: "h:m:s", precision: 1500});










// let num = document.querySelectorAll('.elem')
// num.forEach((e) => e.addEventListener("click", function(e){
//     this.remove("active")
//     this.add("active")
//     console.log(this.textContent)
// }))





//Calculator




//apach


// function str(a){
//   let b = a.split(" ")
//   let c =  b[0].length
//   for(let  i = 0; i < b.length; i++){
//     if(c > b[i].length){
//       c = b[i].length
//     }
//   }
//   console.log(c)
// }

// str("my name is farrukh")



// let str = "aadbbbsss"
// str += " "
// let o = str[0]
// let num = 0
// let result = ""

// for(let i = 0; i < str.length; i++){
//   if(o == str[i]){
//     num += 1
//   }else if(o !== str[i]){ 
//     result += (o + (num))
//     o = str[i]
//     num = 1
//   }
// }
// console.log(result)




//!


// function persistence(num) {
//   let result = 1
//   let res = 0
//   num = num.toString()

//   for(let i = 0; i < num.length; i++){
//     result *= num[i]
//   }

//   if(result.toString().length > 1){
//     res = persistence(result)
//   }else res = result;
//   return res
// }

// console.log(persistence(4))


// let somethig_arr = [4,3,9,7,2,1]
// let result = []

// somethig_arr.forEach(function(e){
//   let square =  Math.sqrt(e)
//   if(square % 1 == 0){
//     result.push(square)
//   }else{
//     result.push(e*e)
//   }
// })
// console.log(result)


    // PHP
// let somethig_arr = "hi453 Jeraaari0093"
// console.log(somethig_arr.replace(/[0-9]/g, "")) 


// function noSpace(x){
//   let a = x.split(" ")
//   let b = ""
//   for(let i = 0 ; i < a.length; i++){
//     b += a[i]
//   }
//   return b
// }
// console.log(noSpace('8 j 8   mBliB8g  imjB8B8  jl  B'))


// function isNarcissistic(n){
//   let a = n.toString()
//   let c = a.length
//   let d = 0
//   let e = 0
//   for(let i = 0; i < c; i++){
//     d += c
//     e += Number(a[i])
//   }
//   if(d == e){
//     return true
//   }return false
// }
// console.log(isNarcissistic(1))



// function toCamelCase(str){
//   for(let i = 0; i < str.length; i++){
//     console.log(str[i])
//   }
// }
// console.log(toCamelCase("the_stealth_warrior"))




// let somethig_arr = "hi453 Jerri0093"
// let str = ""
// for(let i = 0; i < somethig_arr.length; i++){
//   if(!Number(somethig_arr[i]) && somethig_arr[i] !== "0"){
//     str += somethig_arr[i]
//   }
// }
// console.log(str)