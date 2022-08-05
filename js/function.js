// var str = "Lorem ipsum dolor sit ai amet consectetur adipisicing elit Vero culpa";

// var words = str.split(" ");
// var elemLength = words[0].length; //5

// words.forEach(function(elem){
//      if(elem.length < elemLength){ 
//           elemLength = elem.length
//      }
// });

// console.log(elemLength);


// function bubleSort(arr){
//      for(let i = 0; i < arr.length; i++){
//           for(let j = 0; j < arr.length - 1; j++){
//                if(arr[j] > arr[j + 1]){ // 93 > 23
//                     var temp = arr[j]; // temp = 93
//                     arr[j] = arr[j + 1];// 93 = 3
//                     arr[j + 1] = temp; //3 = temp
//                }
//           }
//      }
//      return arr;
// }

// console.log(bubleSort([93,3,23,5,43,2,123,5,3,1,49,90]));  //8


// function selectionSort(parametr){
//      for(let i= 0; i < parametr.length - 1; i++){
//          let minIndex = i
//          for(let j=i + 1; j< parametr.length; j++ ){
//              if(parametr[j] < parametr[minIndex]){
//                  minIndex = j
//              }
//          }
//          const temp = parametr[i];
//          parametr[i] = parametr[minIndex];
//          parametr[minIndex] = temp;
//      }
//   return parametr;
//  };

//  function likes(names){
//      switch(names.length){
//           case 0:
//                return "no one likes this";
//           case 1:
//                return `${names[0]} likes this`;
//           case 2:
//                return `${names[0]} and ${names[1]} like this`;
//           case 3:
//                return `${names[0]}, ${names[1]} and ${names[2]} like this`;
//           default:
//                return `${names[0]}, ${names[0]} and ${names.length - 2} others like this`
//      }
//  }

// function temp(){
//      switch(names.length){
//           case 0:
//                temp += "no one likes this";
//                break;
//           case 1:
//                temp += `${names[0]} likes this`;
//                break;
//           case 2:
//                temp += `${names[0]} and ${names[1]} like this`;
//                break;
//           case 3:
//                temp += `${names[0]}, ${names[1]} and ${names[2]} like this`;
//                break;
//           default:
//                temp += `${names[0]}, ${names[0]} and ${names.length - 2} others like this`
//                break;
//      }
//      var res = temp.length + 34 / 43;
//      if(res < 0) return;
//      else return res;
// }


// for (let i = 0; true; i++) {
//      console.log(i);
//      if(i == 1000){
//           break;
//      }
     
// }

// function factorial(n){
//      if(n == 1) return n;
//      return n * factorial(n - 1);
// }

// console.log(factorial(5));





function fibonaci(n,currentValue = 0, nextValue = 1){
     if(n != 1){
          var temp = currentValue;
          currentValue = nextValue;
          nextValue += temp;
          var res = [];
          res = fibonaci(n-1, currentValue,nextValue); //res = [0].push([1]) => [0,[1]]
          res.unshift(temp);
          return res;
     }
     return [currentValue];
}

// var fNum = fibonaci(5);
// console.log(fNum);


// function like_system(names){
//      if(names.length===0){
//          return 'no likes';
//      }else if(names.length===1){
//          return `${names[0]} likes this`;
//      }else if(names.length===2){
//          return `${names[0]} and ${names[1]} like this`;
//      }else if(names.length===3){
//          return `${names[0]}, ${names[1]} and ${names[2]} like this`;
//      }if(names>3){
//          return`${names[0]},${names[1]} and ${names[2]} and ${names[3]} 2 others like this`;
//      }
//  }e_system(names){
//      if(names.length===0){
//          return 'no likes';
//      }else if(names.length===1){
//          return `${names[0]} likes this`;
//      }else if(names.length===2){
//          return `${names[0]} and ${names[1]} like this`;
//      }else if(names.length===3){
//          return `${names[0]}, ${names[1]} and ${names[2]} like this`;
//      }if(names>3){
//          return`${names[0]},${names[1]} and ${names[2]} and ${names[3]} 2 others like this`;
//      }
//  }
 
//  console.log(like_system(["Alex","Bart","Artue","Artue","Artue"]));


     ["Aziz",32,"programmer","footbal"];

     var person = {
          name : "Aziz",
          age : 32,
          profession: "programmer",
          hobbies : {
               some: [
               "football",
               "valleyball"
          ],},
          action: function(){
               return this.age;
          }
          
     };

     // var list = document.getElementById("lists");
     // var li = document.getElementsByClassName("elem");
     // var li2 = document.getElementsByTagName("ul");

     var qList = document.querySelector("#lists");
     // var txt = document.querySelector("#txt");
     // var qLi = document.querySelectorAll(".elem");
     var btn = document.querySelector("#btn");
     var inputVal = document.querySelector("#name");

     btn.addEventListener("click",function(){
          inputVal.value = "some text";
          qList.innerHTML = "<li>34</li><li>4</li><li>343</li>";
     });

var obj = {
     name: "name1",
     item: {
          name: "name2",
          item: {
               name: "name3",
               item: {
                    name: "name4",
                    item: {
                         name: "name5",
                         item: {
                              name: "name2",
                              item: {
                                   name: "name3",
                                   item: {
                                        name: "name4",
                                        item: null
                                   }
                              } 
                         },  
                    }    
               }
          } 
     }
};

function objCounter(o){
     var res = 1;
     if(o.item != null){
         res += objCounter(o.item)
     }
     return res;
 }

