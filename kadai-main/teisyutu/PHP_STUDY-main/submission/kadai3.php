// Your code here!
<?php
//++++++++++++ここから+++++++++++++++++++++
$result = double(2);
echo $result; // 4が表示される
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数として受け取った数値を2倍にして返却する
**/
function double($x) {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    return $x*2;
}



//++++++++++++ここから+++++++++++++++++++++
$val = 100;
if (isNumber($val)) {
  echo "valは数字です";
} else {
  echo "valは数字ではありません";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数が数値が数値であるか判定する
**/
function isNumber($val) {
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    return $val;
}


$result = dubleArr(array(1,2,3));

// 引数に配列以外を渡した場合
if (!$result) {
    echo "引数が不正です!";
    return;
}

foreach ($result as $num) {
    echo $num;
    echo "\n";
}
//++++++++++++ここまでは変更しない+++++++++++++++++++++
/**
引数として受け取った配列の数値をすべて2倍にして返却する
**/







    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
    function dubleArr($g) {
        if (is_array($g) === true){
            $g == array();
            foreach ($g as $gv2){
             $gv3[] = $gv2*2;
            }
            return $gv3;
        }
        else {
            "false";
        }
    
    // TODO 引数が配列型であるか判定する
    // TODO 配列でなければfalseを返却し関数の処理を終える
    
    // TODO 結果返却用の空配列を定義する
    // TODO 配列の中身をループで１つずつ取り出し、２倍にして結果返却用に詰める
    
    // TODO 結果返却用をreturnする
    
}






//++++++++++++ここから+++++++++++++++++++++
$result = sum(1,2,3,4,5);
echo $result; // 15
//++++++++++++ここまでは変更しない+++++++++++++++++++++

function sum($y) {
    $y2 = array_sum($y);
    
    // ↑必要な引数は自身で定義すること↑
    //　ここから下に処理を記述する
}
?>