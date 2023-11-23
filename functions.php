<?php 

function length ($string){
    $i = 0;
    while(isset($string[$i]))
         $i++;
    return $i;
}

function count_word($string){
    $count = 1;
    for ($i=0 ; $i< strlen($string) ; $i++ ){
        if($string[$i]== " "){
            if($i+1 != strlen($string) && $string[$i+1] != " " )
                $count ++;      
        }
    }
    return $count;
}

function reverse($string){
    $res="";
    for ($i= strlen($string) - 1; $i>= 0  ; $i-- ){
        $res .= $string[$i];
    }
    return $res;

}

function arr_length($arr){
    $count = 0;
    foreach($arr as $arr){
        if($arr){
            $count++;
        }
    }
    return $count ;
}

// function first_index($string,$tar){
//     for ($i= 0 ; $i < strlen($string) ; $i++ ){
//         if($string[$i] == $tar){
//             return $i;
//         }
//     }
//     return -1 ;
// }

function first_index($string,$target,$start=0){
    
    for ($i= $start ; $i < length($string) ; $i++ ){
        $symatric="";
        for($j=0; $j < length($target); $j++){
            if(isset($string[$i+$j])){
                $symatric .= $string[$i+$j];
            }
        }
        if($symatric == $target){
            return $i;
        }
    }
    return -1;
}

function string_pad($string, $length , $pad=" ",$pad_dir=1 ){
    if(length($string) < $length){
        if($pad_dir==1){
            for($i= length($string); $i<$length; $i++){
                $string .= $pad;
            }
        }
        else if($pad_dir==0){
            $temp = $string;
            $string = "";
            for($i= 0 ; $i < $length - length($temp); $i++){
                $string .= $pad;
            }
            $string .= $temp;
        }
        else if($pad_dir==2){
            $temp = $string;
            $string = "";
            for($i= 0 ; $i < (int)(($length - length($temp))/2) ; $i++){
                $string .= $pad;
            }
            $string .= $temp;
            for($i= 0 ; $i < ($length - length($temp))/2 ; $i++){
                $string .= $pad;
            }
        }
        return $string;
        
    }else{
        return $string ;
    }
    
}

$captel_ASCCi=[ 65 => "A", 66 => "B", 67 => "C", 68 => "D", 69 => "E", 70 => "F", 71 => "G", 72 => "H", 73 => "I", 74 => "J", 75 => "K", 76 => "L", 77 => "M", 78 => "N", 79 => "O", 80 => "P", 81 => "Q", 82 => "R", 83 => "S", 84 => "T", 85 => "U", 86 => "V", 87 => "W", 88 => "X", 89 => "Y", 90 => "Z" ];
$captel_num_ASCCi=["A" => 65 ,"B" => 66 ,"C" => 67 ,"D" => 68 ,"E" => 69 ,"F" => 70 ,"G" => 71 ,"H" => 72 ,"I" => 73 ,"J" => 74 ,"K" => 75 ,"L" => 76 ,"M" => 77 ,"N" => 78 ,"O" => 79 ,"P" => 80 ,"Q" => 81 ,"R" => 82 ,"S" => 83 ,"T" => 84 ,"U" => 85 ,"V" => 86 ,"W" => 87 ,"X" => 88 ,"Y" => 89 ,"Z" => 90 ];
$small_ASCCi= [97 => "a", 98 => "b", 99 => "c", 100 => "d", 101 => "e", 102 => "f", 103 => "g", 104 => "h", 105 => "i", 106 => "j", 107 => "k", 108 => "l", 109 => "m", 110 => "n", 111 => "o", 112 => "p", 113 => "q", 114 => "r", 115 => "s", 116 => "t", 117 => "u", 118 => "v", 119 => "w", 120 => "x", 121 => "y", 122 => "z"] ;
$small_ASCCi= ["a" => 97 ,"b" => 98 ,"c" => 99 ,"d" => 100 ,"e" => 101 ,"f" => 102 ,"g" => 103 ,"h" => 104 ,"i" => 105 ,"j" => 106 ,"k" => 107 ,"l" => 108 ,"m" => 109 ,"n" => 110 ,"o" => 111 ,"p" => 112 ,"q" => 113 ,"r" => 114 ,"s" => 115 ,"t" => 116 ,"u" => 117 ,"v" => 118 ,"w" => 119 ,"x" => 120 ,"y" => 121 ,"z" => 122] ;

function _ascci($char){
    $ASCCi=[0 => 48, 1 => 49, 2 => 50, 3 => 51, 4 => 52, 5 => 53, 6 => 54, 7 =>55, 8 => 56, 9 => 57
            ,"A" => 65 ,"B" => 66 ,"C" => 67 ,"D" => 68 ,"E" => 69 ,"F" => 70 ,"G" => 71 ,"H" => 72 ,"I" => 73 ,"J" => 74 ,"K" => 75 ,"L" => 76 ,"M" => 77 ,"N" => 78 ,"O" => 79 ,"P" => 80 ,"Q" => 81 ,"R" => 82 ,"S" => 83 ,"T" => 84 ,"U" => 85 ,"V" => 86 ,"W" => 87 ,"X" => 88 ,"Y" => 89 ,"Z" => 90 
            ,"a" => 97 ,"b" => 98 ,"c" => 99 ,"d" => 100 ,"e" => 101 ,"f" => 102 ,"g" => 103 ,"h" => 104 ,"i" => 105 ,"j" => 106 ,"k" => 107 ,"l" => 108 ,"m" => 109 ,"n" => 110 ,"o" => 111 ,"p" => 112 ,"q" => 113 ,"r" => 114 ,"s" => 115 ,"t" => 116 ,"u" => 117 ,"v" => 118 ,"w" => 119 ,"x" => 120 ,"y" => 121 ,"z" => 122
            ];
        if(isset($ASCCi[$char]))
            return $ASCCi[$char];

    return -1 ;
}

function char($ascci){
    $char = [ 48 => 0, 49 => 1, 50 => 2, 51 => 3, 52 => 4, 53 => 5, 54 => 6, 55 => 7, 56 => 8, 57 => 9
         ,65 => "A", 66 => "B", 67 => "C", 68 => "D", 69 => "E", 70 => "F", 71 => "G", 72 => "H", 73 => "I", 74 => "J", 75 => "K", 76 => "L", 77 => "M", 78 => "N", 79 => "O", 80 => "P", 81 => "Q", 82 => "R", 83 => "S", 84 => "T", 85 => "U", 86 => "V", 87 => "W", 88 => "X", 89 => "Y", 90 => "Z" 
        ,97 => "a", 98 => "b", 99 => "c", 100 => "d", 101 => "e", 102 => "f", 103 => "g", 104 => "h", 105 => "i", 106 => "j", 107 => "k", 108 => "l", 109 => "m", 110 => "n", 111 => "o", 112 => "p", 113 => "q", 114 => "r", 115 => "s", 116 => "t", 117 => "u", 118 => "v", 119 => "w", 120 => "x", 121 => "y", 122 => "z"
    ];
    if(isset($char[$ascci]))
        return $char[$ascci];

    return -1;
}

function spilte($string ,$length=1) :array{
    $arr=[];
    for($i=0; $i<length($string); $i+=$length){
        $concat="";
        for($j=0; $j < $length; $j++){
            if(isset($string[$i+$j])){
                $concat .= $string[$i+$j];
            }
        }
        $arr += [$i/$length => $concat];
    }
    return $arr ;
}

function toUpper ($string){
    for($i=0; $i<length($string); $i++){
        if($string[$i] >= 'a' && $string[$i] <= 'z'){
            $convert = (_ascci($string[$i]) -32);
            $string[$i] = char($convert);
        }
    }
    return $string ;
}

function toLower ($string){
    for($i=0; $i<length($string); $i++){
         if($string[$i] >= 'A' && $string[$i] <= 'Z'){
            $convert = (_ascci($string[$i]) + 32);
            $string[$i] = char($convert);
        }
    }
    return $string ;
}

function slice($string, $start=0, $end=0){
    if($end==0)
        $end = length($string);

    $newString = "";
    for($i=$start; $i <= $end ; $i++){
        $newString .=$string[$i];
    }
    return $newString;

}

function _join($arr, $seprator=""):string {
    $newString="";
    foreach($arr as $array){
        $newString .=$array;
        if(!($arr[arr_length($arr)] === $array))
            $newString .=$seprator;
    }
    return $newString;
}

function UCfirst_word ($string, $separetor=" "):string{
    $count = 1;
    $string[0]=toUpper($string[0]);
    for ($i=0 ; $i< length($string) ; $i++ ){
        if($string[$i]== $separetor){
            if($i+1 != length($string) && $string[$i+1] != $separetor )
                $string[$i+1]=toUpper($string[$i+1]);     
        }
    }

    return $string;
}

function LCfirst_word ($string, $separetor=" "):string{
    $count = 1;
    $string[0]=toLower($string[0]);
    for ($i=0 ; $i< length($string) ; $i++ ){
        if($string[$i]== $separetor){
            if($i+1 != length($string) && $string[$i+1] != $separetor )
                $string[$i+1]=toLower($string[$i+1]);     
        }
    }

    return $string;
}

function _UCfirst ($string, $separetor=" "):string{
    $count = 1;
    $string[0]=toUpper($string[0]);
    return $string;
}

function _LCfirst ($string, $separetor=" "):string{
    $count = 1;
    $string[0]=toLower($string[0]);
    return $string;
}

function _isset($string){
    if($string === null)  
        return false;
    return true;
}

function _isnull($value){
    if($value === null)
        return true ;
    return false;
}

function _min(){
    $min=func_get_arg(0);
    for($i=1; $i < func_num_args(); $i++){
        if(func_get_arg($i) < $min ){
            $min=func_get_arg($i);
        }
    }
    return $min ;
} 

function _max(){
    $max=func_get_arg(0);
    for($i=1; $i < func_num_args(); $i++){
        if(func_get_arg($i) > $max ){
            $max=func_get_arg($i);
        }
    }
    return $max ;
} 

function _sum (){
    $sumation = 0;
    for($i=0; $i < func_num_args(); $i++)
        $sumation += func_get_arg($i);

    return $sumation ;
    
}

function _str_repeat ($string , $times=1):string {
    $newString = "";
    for($i=0; $i < $times; $i++)
        $newString .= $string;

        return $newString ;
}

function _is_nan($value):bool {
    $value = +$value;
    if(gettype($value) == 'float'|| gettype($value) == 'double' || gettype($value) == 'integer' )
        return false;

    return true ;
  }

  function _array_key_first($string){
    foreach($string as $key => $value)
        return $key ;
}

function _array_keys($arr):array{
    $newArr=[];
    $i=0;
    foreach($arr as $key => $value){
        $newArr[$i] =$key;
        $i++;
    }
    return $newArr;
}

function _array_pop(&$arr){
    $_pop=0;
    $newvalue =[];
    $newKey = [];
    $i=0;
    foreach($arr as $key => $value){
        $newvalue[$i] = $value ;
        $newKey[$i] = $key;
        $_pop = $value;
        $i++;
    }
    $newArr=[];
    for($i=0; $i<arr_length($arr)-1; $i++){
        $newArr[$newKey[$i]]= $newvalue[$i] ;
    }

    $arr=$newArr;
    return $_pop ;
}

function _array_push(&$arr,...$value){
    $count = func_num_args() - 1;
    // echo "$i : $j : ".func_get_arg($j)." ";
    for($i=1; $i <= $count; $i++){
        echo"<br>".func_get_arg($i);
        $arr[]=func_get_arg($i);
    }
    return $arr;

}

function _array_shift(array &$arr){
    $newarray=[];
    $shifVal[]=$arr[0];
    for($i=1; $i<length($arr); $i++){
        $newarray[]=$arr[$i];
    }
    $arr = $newarray;
    return $shifVal ;
}

function _array_kshift(array &$arr):array{
    $shiftVal=0;
    $newarr=[];

    foreach( $arr as $key => $value){
        if($shiftVal===0)
            $shiftVal=[$key => $value];

        else
            $newarr +=[$key => $value];
    }
    $arr = $newarr;
    return $shiftVal ;
}

function _array_unshift(array &$arr,$value):array{
    $newarr =[0 => $value];
    $unshiftVal=$newarr;
    for($i=0; $i < length($arr); $i++)
        $newarr[$i+1]= $arr[$i];
    
    $arr = $newarr;
    return $unshiftVal ;
}

function _array_fill(int $start, int $count, mixed $value):array{
    for($i=$start; $i < $start+$count; $i++)
        $arr[$i]=$value;
    return $arr;
}

function _array_fill_keys(array $keys, mixed $value): array{
    foreach($keys as $key)
        $arr[$key]=$value;
    return $arr ;
}

function _array_combine(array $keys, array $values): array{
    for($i=0; $i<length($keys); $i++)
        $arr[$keys[$i]] = $values[$i];

    return $arr ;
}

function _array_values(array $array): array{
    foreach($array as $value)
        $newArr[]=$value;

    return $newArr ;
}

function _array_key_last(array $array): int|string|null{
    foreach($array as $key => $value)
            $target=$key;
    return $target ;
}

function _array_key_exists(string|int $key, array $array): bool{
    foreach($array as $_key => $value){
        if($_key === $key)
            return true;
    }
    return false;
}

function _in_array(mixed $search, array $array, bool $typeStrict = false): bool{
    foreach($array as $value){
        if($value == $search && $typeStrict == false)
            return true ; 
        else if($value === $search && $typeStrict == true)
            return true;
    }
    return false ; 
}

function _array_merge(array ...$arrays): array{
    $newarr=[];
    for($i=0; $i < func_num_args(); $i++){
        foreach(func_get_arg($i) as $key => $value){
            if(gettype($key) == 'integer') 
                $newarr[]=$value;

            $newarr +=[$key => $value];
        }
    }
    return $newarr;
}

function _is_bool($value):bool{
    if($value === true || $value === false)
        return true;

    return false;
}

function _explode(string $separator, string $string, int $limit = 0): array {
  
    function func($start, $end, $separator, $string){
        $newArr=[];
        // $string .= " ";
        $newString="";
        
        for($i=$start; $i < $end; $i++){
            if($string[$i] != $separator){
                $newString .=$string[$i];
            }else if($string[$i] == $separator || $i == $end-1){
                $newArr []= $newString;
                $newString= ""; 
            }
        }
        return $newArr;
    } 

     if($limit >= 0)
        return func($limit,length($string),$separator, $string);
    else if($limit < 0)
         return func(length($string)-$limit,length($string),$separator, $string);

}

function _is_int($value):bool{

    function check_digit_int($value){
        if($value >= 10)
            $temp = (int)($value /10);
        else
            $temp = $value ; 

        $temp = _ascci($temp);
        $value= $value % 10;
        if($temp >= 48 && $temp <= 57)
            return $value;
    }

    if($value === (int)$value ){

        if($value >1000 && $value <= 10000)
        $value = check_digit_int($value);
        if($value >100 && $value <= 1000)
            $value = check_digit_int($value);
        if($value >10 && $value <= 100)
            $value = check_digit_int($value);
        if($value <= 10){
            $value = check_digit_int($value);
            return true ;
        }

    }

   


    return false ;
}

function _is_float($value):bool{

    function check_digit_float($value){
        if($value >= 10)
            $temp = (int)($value /10);
        else
            $temp = $value ; 

        $temp = _ascci($temp);
        $value= $value % 10;
        if($temp >= 48 && $temp <= 57)
            return $value;
    }

    if(!is_numeric($value))
        return false ;

    if($value === +$value && $value > (int)$value){

        if($value >1000 && $value <= 10000)
        $value = check_digit_float($value);
        if($value >100 && $value <= 1000)
            $value = check_digit_float($value);
        if($value >10 && $value <= 100)
            $value = check_digit_float($value);
        if($value <= 10){
            $value = check_digit_float($value);
            return true ;
        }
    }
    return false ;
}

function _abs(int|float $value){
    if($value < 0)
        return ($value * -1);
    return $value;
}

function _array_sum(array $array): int|float{
    $sum=0;
    foreach($array as $value)
        $sum += $value ;
    return $sum;
}

function _array_change_key_case(array &$array, int $case = 0): array{
    $newArr = $array;
    $array =[];
    if($case == 0){
        foreach($newArr as $key => $value)
            $array += [toLower($key) => $value ] ;   
        return $array;
    }
    elseif($case == 1){
        foreach($newArr as $key => $value)
            $array += [toUpper($key) => $value ] ;
        return $array;
    }
}

function _array_chunk(array $array, int $length, bool $preserve_keys = false): array{
    $newArr=[];
    $subArr=[];
    $k=0;
    if($preserve_keys == false){
        for($i=0; $i< arr_length($array); $i+=$length){
        
            for($j=0; $j<$length; $j++){
                if($k == arr_length($array) )
                    continue;
                $subArr +=[$j => $array[$k]];
                $k++;
            }
    
            $newArr[]=$subArr;
            $subArr =[];
                
        }
    }
    else if($preserve_keys == true){
        for($i=0; $i< arr_length($array); ){
    
            for($j=0; $j<$length; $j++){
                if($i <= arr_length($array)-1 ){
                    $subArr +=[$i => $array[$k]];
                    $i++;
                    $k++;
                }
            }

            $newArr[]=$subArr;
            $subArr =[];
        }
    }
    
    return $newArr ;
}

function _array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array{
    $newArr=[];
    $newvalue=[];
    $newKey=[];
    for($i=0; $i<arr_length($array); $i++){
        $newvalue +=$array[$i][$column_key];
    }

    if($index_key != null){
        for($i=0; $i<arr_length($array); $i++){
            $newKey +=$array[$i][$index_key];
        }
        for($i=0; $i<arr_length($array); $i++){
            $newArr +=[$newKey[$i] => $newvalue[$i]];
        }
        return $newArr ;
    }

    return $newvalue;
}

function _array_flip(array $array): array{
    $newarr=[];
    foreach($array as $key => $value)
        $newarr[$value] = $key;
    return $newarr ;
}

function _array_reverse(array $array, bool $preserve_keys = false): array{
    $newArr=[];
    $help = arr_length($array)-1;
    if($preserve_keys == false){
        for($i=0; $i < arr_length($array); $i++){
            $newArr[$i]=$array[$help - $i];
        }
        return $newArr;
    }else{
        $newvalue=[];
        $newkey=[];
        foreach($array as $key => $value ){
            $newvalue +=[$value];
            $newkey +=[$key];
        }
        for($i=arr_length($newvalue)-1; $i>=0;$i--){
            $newArr[$newkey[$i]]=$newvalue[$i];
        }
        return $newArr;
    }

}

function _array_slice(array $array,int $offset,?int $length = null,bool $preserve_keys = false){
    $newArr=[];
    $offset = $offset > 0 ? $offset :count($array) + $offset ; 
    if($length != null){
        $length = $length > 0 ? $length :count($array) + $length ; 
    }

    for($i=$offset; $i < $length = $length == null? arr_length($array) : $length; $i++ ){
        $newArr +=$array[$i];
    }
    echo"<br> offse = $offset <br>";
    return $newArr;
} 

function _pow(mixed $num, mixed $exponent): int|float|object{
    $newNum=1;
    
   if($num < 0 && _is_float($exponent))
        return NAN ; 
    else if($num == 1 || $exponent === 0){
            return 1;
    } else if($num == -1 ){
        if( $exponent % 2 == 0)
            return -1;
        return 1;
    }  
    else if( _is_int($exponent) && $exponent > 0){
        for($i =0; $i < $exponent; $i++ ) 
            $newNum *= $num;
        return $newNum ;
    }else{
        // stil two status so i do this temporory
        return $num ** $exponent;
    }
    // else  if( _is_int($exponent) && $exponent < 0){
    //     for($i =0; $i < -$exponent; $i++ ) 
    //         $newNum *= $num;

    //     $newNum = (1/$newNum);
    //     return $newNum ;
    // }

    // else if(_is_float($exponent) && $exponent > 0){
        
    //     $_int = (int)($exponent);
    //     $_mod = $exponent - (int)($exponent);
    //     echo"hello..$_mod => ";
    //     for($i =0; $i < $_int; $i++ ) 
    //         $newNum *= $num;
    //     return ($newNum * $_mod);
    // } 
} 

function _avg(...$num){
    $_sum = _sum(...$num);
    return ($_sum / func_num_args());
}

function _str_increment(string $value){
    if($value[length($value)-1] === "Z" || $value[length($value)-1 ] == 'z'){
        $str=_ascci($value[length($value)-2]) ;
        $str++ ;
        $value[length($value)-2]=char($str) ;
        return $value ;
    }
    else{
        $str=_ascci($value[length($value)-1]) ;
        $str++ ;
        $value[length($value)-1]=char($str) ;
        return $value ;
    }
}

function _str_decrement(string $value){
    if($value[length($value)-1] === "A" || $value[length($value)-1 ] == 'A'){
        $str=_ascci($value[length($value)-2]) ;
        $str-- ;
        $value[length($value)-2]=char($str) ;
        return $value ;
    }
    else{
        $str=_ascci($value[length($value)-1]) ;
        $str-- ;
        $value[length($value)-1]=char($str) ;
        return $value ;
    }
}

function _array_map(?callable $callback, array $array):array{
    $result =[];
    foreach($array as $key => $value){
        $result[$key] = $callback($value);
    }
    return $result;
}

function _array_filter(array $array, ?callable $callback = null, int $mode = 0): array{
    $result =[];
    $test='';
    foreach($array as $key => $value){
        $test = $callback($value);
        if($test){
            $result[$key] = $value;
        }
    }
    return $result;
}

function _array_diff(array $arr, array $array): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $v) {
            if ($value === $v) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

function _array_count_values(array $array): array{
    $newArr=[];
    foreach($array as $key => $value){
        $count=0;
        for($i=0; $i < arr_length($array); $i++){
            if($value == $array[$i]){
                $count++;
            }
        }
        $newArr[$value]=$count;
    }
    return $newArr;
}

function _array_diff_key(array $arr, array $array): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $k => $v) {
            if ($key === $k) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

function _array_diff_assoc(array $arr, array $array): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $k => $v) {
            if ($key === $k && $value === $v) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

function _array_diff_uassoc(array $arr, array $array, callable $key_compare_func): array{
    $diff = [];
    foreach ($arr as $key => $value) {
        $found = false;
        foreach ($array as $k => $v) {
            if ($key_compare_func($key, $k) === 0 && $value === $v) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            $diff[$key] = $value;
        }
    }
    return $diff;
}

function _array_intersect(array $array, array ...$arrays): array{
    function _2_array_intersect(array $arr, array $array): array{
        $intersec=[];
            foreach($arr as $key => $value){
                foreach($array as $k => $v){
                    if($value == $v){
                        $intersec[$key]=$value;
                        break;
                    }
                }
            }
        
    
        return $intersec;
    }
  
    _array_unshift($arrays, $array);
    $intersection = $array;
    foreach ($arrays as $arr) {
        // intersection of the current array with the previous intersection
        $intersection = _2_array_intersect($intersection, $arr);
    }

    return $intersection;
}

function _array_intersect_key(array $arr, array $array): array{
    $intersec=[];
        foreach($arr as $key => $value){
            foreach($array as $k => $v){
                if($key == $k){
                    $intersec[$key]=$value;
                    break;
                }
            }
        }

    return $intersec;
}

function _array_intersect_assoc(array $arr, array $array): array{
    $intersec=[];
    foreach($arr as $key => $value){
        foreach($array as $k => $v){
            if($value === $v && $key === $k){
                $intersec[$key]=$value;
            }
            continue;
        }
    }

    return $intersec;
}

function _array_is_list(array $array): bool{
    $i=0;
    foreach($array as $key => $value){
        if($key != $i){
            return false;
        }
    $i++;
    }
    return true;
}

function _array_search(mixed $search, array $array, bool $strict = false): int|string|false{
    foreach($array as $key => $value){
        if($value == $search){
            return $key;
        }
    }
    return false ;
}

function _array_unique(array $array): array{
    $newArr=[];
    foreach($array as $key => $value){
        $newArr[$key] +=$value;
    }
    return $newArr;
}

function _is_array( $array):bool{
    if($array === (array)$array)
        return true;
    return false;
}

function _is_numeric(mixed $value): bool{
    if((int) $value){
        if(@+$value)
            return true;
        return false;
    }
    return false;
}

function _gettype(mixed $value): string{
    if($value === (int)$value)
        return "integer";
    elseif($value === (float)$value)
        return "double";
    elseif($value === (string)$value)
        return "string";
    elseif($value === (array)$value)
        return "array";
    elseif($value === (object)$value)
        return "object";
    elseif($value === (bool)$value)
        return "boolean";
    elseif($value === null)
        return null;
}

function _empty(mixed $var): bool{
    if($var===null || $var==='')
        return true;
    return false;
}

function _is_string(mixed $value): bool{
    if($value === (string) $value)
        return true ;
    return false;
}

function _settype(mixed &$var, string $type): bool{
    if($type=='integer' || $type=='int'){
        (int) $var ;
        return true;
    }
    else if($type=='float' || $type=='double'){
        (float) $var ;
        return true;
    }
    else if($type=='boolean' || $type=='bool'){
        (bool) $var ;
        return true;
    }
    else if($type=='string'){
        (string) $var ;
        return true;
    }
    else if($type=='array' ){
        (array) $var ;
        return true;
    }
    else if($type=='object'){
        (object) $var ;
        return true;
    }
    else if($type=='null'){
         $var=null ;
        return true;
    }
    else{
        return false;
    }
    return false;
}

function _boolval(mixed $value): bool{
    return (bool) $value;
}

function _floatval(mixed $value): float{
    return (float)$value;
}

function _str_contains(string $string, string $needle): bool{
    $test='';
    for($i=0; $i<length($string); $i++){
        if($string[$i] == $needle[0]){
            $k=1;
            for ($j=$i+1; $j < length($needle); $j++) { 
                if($string[$j]==$needle[$k]){
                    $test +=$string[$j];
                }
                else{
                    $test='';
                    continue;
                }
            }
        }
    }
    return $test != ''? true :false ;
}

function _str_starts_with(string $string, string $needle): bool{
    $test='';
    for ($i=0; $i < length($needle) ; $i++) 
        $test +=$string[$i]; 
    
    return $test == $needle ? true : false;
}

function _str_ends_with(string $string, string $needle): bool{
    $test='';
    $countNeeded =length($needle);
    for ($i=length($string)-($countNeeded+1); $i < $countNeeded ; $i++) 
        $test +=$string[$i]; 
    
    return $test == $needle ? true : false;
}

function _strpos(string $string, string $needle, int $offset = 0): int|false{
    $test='';
    $index=0;
    for($i=$offset; $i<length($string); $i++){
        if($string[$i] == $needle[0]){
            $k=0;
            for ($j=$i; $j < $i + length($needle) ; $j++) { 
                if($string[$j]==$needle[$k]){
                    $test .=$string[$j];
                    $index = $i;
                    $k++;

                    if($test == $needle){
                        return $index;
                    }
                }
                else{
                    $test='';
                }
            }
        }
    }
    return false ;
}

function _ltrim(string $string, string $character = " "): string{
    $newstring='';
    $index=0;
    for ($i=0; $i < length($string); $i++) { 
        if($string[$i]==$character){
            continue;
        }
        $index =$i;
        break;
    }

    for ($i=$index; $i < length($string); $i++) { 
        $newstring .=$string[$i];
    }

    return $newstring;

}

function _rtrim(string $string, string $character = " "): string{
    $newstring='';
    $index=0;
    for ($i=length($string)-1; $i <= 0 ; $i--) { 
        if($string[$i]==$character){
            continue;
        }
        $index =$i;
        break;
    }

    for ($i=0 ;$i < $index; $i++) { 
        $newstring .=$string[$i];
    }

    return $newstring;

}

function _trim(string $string, string $character = " "): string{

    $newstring=_ltrim($string,$character);
    $newstring=_rtrim($newstring,$character);
   
    return $newstring;

}

function _strstr(string $string, string $needle, bool $before_needle = false): string|false{
    $newstring='';
    $index = _strpos($string,$needle);
    if($index === false){
        return false;
    }
    else if($before_needle == false){
        for($i=$index; $i < length($string); $i++){
            $newstring .=$string[$i];
        }
    }
    elseif($before_needle != false){
        for($i=0; $i < $index; $i++){
            $newstring .=$string[$i];
        }
    }

    return $newstring !=='' ? $newstring : $newstring ;
}

function _substr(string $string, int $offset, int $len = null): string{
    $newstring='';
    if($len === null){
        if($offset >= 0){
            for ($i=$offset; $i < length($string) ; $i++) { 
                $newstring .=$string[$i];
            }
        }
        else{
            for ($i=(length($string) + $offset); $i < length($string) ; $i++) { 
                $newstring .=$string[$i];
            }
        }
    }
    elseif($len >= 0){
        if($offset >= 0){
            for ($i=$offset; $i < $offset + $len; $i++) { 
                $newstring .=$string[$i];
            }
        }
        else{
            for ($i=(length($string) + $offset); $i < (length($string) + $offset + $len) ; $i++) { 
                $newstring .=$string[$i];
            }
        }
    }
    elseif($len < 0){
        if($offset >= 0){
            for ($i=$offset; $i < length($string) + $len; $i++) { 
                $newstring .=$string[$i];
            }
        }
        else{
            for ($i=(length($string) + $offset); $i < (length($string) + $len) ; $i++) { 
                $newstring .=$string[$i];
            }
        }
    }

    return $newstring ;
}

function _array_replace(array $array, array ...$replacements): array{
    foreach($array as $key => $value){
        foreach ($replacements as $k => $v){
            if($key == $k){
                $array[$key]=$v;
            }
        }
    }
    return $array;
}

function _get_date($date){
    $newDate = _explode(' ', $date);
    return $newDate[0] ;
}

function _get_year($date){
    $newDate = _explode('-', $date);
    return $newDate[0] ;
}

function _get_month($date){
    $newDate = _explode('-', $date);
    return $newDate[1] ;
}

function _get_date_day($date){
    $newDate = explode(' ', $date);
    $onlyDate = explode('-', $newDate[0]);
    return $onlyDate[2] ;
}

function _get_time($date){
    $newDate = explode(' ', $date);
    return $newDate[1] ;
}

function _get_hour($date){
    $newtime = explode(' ', $date);
    $hour = explode(':', $newtime[1]);
    return $hour[0] ;
}

function _get_minute($date){
    $newtime = explode(' ', $date);
    $minute = explode(':', $newtime[1]);
    return $minute[1] ;
}

function _get_second($date){
    $newtime = explode(' ', $date);
    $second = explode(':', $newtime[1]);
    return $second[2] ;
}

function _get_date_time( $city=false,$flags=0){
    if($city){
        date_default_timezone_set("$city");
    }
    if($flags==0){
        return date(" Y-m-j h:i:s A l");
    }elseif($flags== 1){
            return date(" Y-F-j h:i:s A l");
    }
}

function _is_morning():bool{
    if(date('A') == 'AM')
        return true;
    return false;
}

function _strrpos(string $string, string $needle, int $offset = 0): int|false{
    $test='';
    $index=null;
    for($i=$offset; $i<length($string); $i++){
        if($string[$i] == $needle[0]){
            $k=0;
            for ($j=$i; $j < $i + length($needle) ; $j++) { 
                if($string[$j]==$needle[$k]){
                    $test .=$string[$j];
                    $k++;

                    if($test == $needle){
                         $index = $i;
                    }

                }else{
                    $test='';
                }
            }
        }
    }
    return $index !== null ? $index : false ;
}

function _strcmp(string $string1, string $string2): int{
    if($string1 === $string2)
        return 0;
    else
        return -1;
}

function _array_product(array $array): int|float{
    $result=1;
    foreach($array as $key => $value){
        $result *= $value;
    }
    return $result;
}

function _strncmp(string $string1, string $string2, int $length): int{
    for ($i=0; $i < $length; $i++) { 
        if($string1[$i] === $string2[$i])
            continue;
        else
            return -1;
    }
    return 0;
}

function _strcasecmp(string $string1, string $string2): int{
    $newString1=toUpper($string1);
    $newString2=toUpper($string2);
    if($newString1 == $newString2)
        return 0;
    return -1;
}

static $POINTER=0;
function _current(array|object $array): mixed{
    global $POINTER;
    return $array[$POINTER];
}

function _next(array|object $array): mixed{
    global $POINTER;
    $POINTER++;
    return $array[$POINTER];
}

function _prev(array|object $array): mixed{
    global $POINTER;
    $POINTER--;
    return $array[$POINTER];
}

function _reset(array|object $array): mixed{
    global $POINTER;
    $POINTER=0;
    return $array[$POINTER];
}

function _end(array|object $array): mixed{
    global $POINTER;
    $POINTER=length($array)-1;
    return $array[$POINTER];
}

