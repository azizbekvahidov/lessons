// Examples (input -> output)
// '! !'                 -> '! !'
// '123456789'           -> ''
// 'This looks5 grea8t!' -> 'This looks great!'

var a='! !';
a = a.replace(/\s/,'');
console.log(a);

var stroka='This looks5 grea8t!'
str = stroka.replace(/[0-9]/g, '');
console.log(str);

var number='123456789';
string = number.replace(/[^a-z]/g,'');
console.log(string);