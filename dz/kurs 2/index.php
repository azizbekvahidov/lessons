<?php
// $somethig_arr = "hi453 Jerri0093";
// echo "$somethig_arr </br>";
// for($i = 0; $i < strlen($somethig_arr); $i++){
//     if(!intval($somethig_arr[$i]) && $somethig_arr[$i] !== "0"){
//     echo "$somethig_arr[$i]";
//     };
// };




$str = "aadbbbsss ";
$str .= " ";
$o = $str[0];
$num = 0;
$result = "";

for($i = 0; $i < strlen($str); $i++){
  if($o == $str[$i]){
    $num += 1;
  }else if($o !== $str[$i]){ 
    $result .= ($o .$num);
    $o = $str[$i];
    $num = 1;
  }
}
echo $result;




// $name = ["Peter", "Alex","Mark","Max"];
// $lng =  count($name);

// if ($lng == 0) {
//     echo 'no one likes this';
// } else if ($lng == 1) {
//     echo "$name[0] likes this";
// } else if ($lng == 2) {
//     echo "$name[0] and $name[1] like this";
// } else if ($lng == 3) {
//     echo "$name[0], $name[1] and ${names[2]} like this";
// } else if ($lng > 3) {
//     echo "$name[0], $name[1] and " .($lng-2) ." other like this";
// }
?>