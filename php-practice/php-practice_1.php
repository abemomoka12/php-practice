<?php
// Q1 変数と文字列
$name = "阿部";
echo "私の名前は「" . $name . "」です。\n";


// Q2 四則演算
$num = 5;
$num *= 4;
echo "$num \n";
$num /= 2;
echo "$num \n";


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$date = date('Y年m月d日 H時i分s秒');
echo "現在時刻は、" . $date . "です。\n";


// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
    echo "使用OSは、". $device. "です。\n"; 
}else {
    echo "どちらでもありません。\n";
}


// Q5 条件分岐-2 三項演算子
$age = 26;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message. "\n";


// Q6 配列
$array = [
    '東京都',
    '埼玉県',
    '神奈川県',
    '栃木県',
    '千葉県',
    '茨城県',
    '山梨県',
    '群馬県'
];
echo $array[3]. "と". $array[4]. "は関東地方の都道府県です。\n";


// Q7 連想配列-1
$prefecture = [
    '東京都' => '新宿区', 
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
foreach ($prefecture as $ken => $shi){
    echo $shi. "\n";
}


// Q8 連想配列-2
$saitama = '埼玉県';
foreach ($prefecture as $ken => $shi){
    if ($ken === $saitama){
        echo $ken. "の県庁所在地は、". $shi. "です。\n";
    }
}


// Q9 連想配列-3
$prefecture['愛知県'] = '名古屋市';
$prefecture['大阪府'] = '大阪市';
$kanto = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($prefecture as $ken => $shi){
    if (in_array($ken, $kanto)){
        echo $ken. "の県庁所在地は、". $shi. "です。\n";
    }else{
        echo $ken. "は、関東地方ではありません。\n";
    }
}


// Q10 関数-1
function hello($name = "佐々木"){
    echo $name. "さん、こんにちは。\n";
}
hello();
hello("鈴木");


// Q11 関数-2
function calcTaxInPrice($price){
    $taxInPrice = $price * 1.1;
    echo $price. "円の商品の税込価格は". $taxInPrice. "円です。\n";
}
calcTaxInPrice(1000);


// Q12 関数とif文
function distinguishNum($num){
    if ($num % 2 === 0){
        return $num. "は偶数です。\n";
    }else{
        return $num. "は奇数です。\n";
    }
}
echo distinguishNum(56);
echo distinguishNum(77);


// Q13 関数とswitch文
function evaluateGrade($grades){
    switch ($grades) {
        case "A":
        case "B":
            return "合格です。\n";
            break;
        
        case "C":
            return "合格ですが追加課題があります。\n";
            break;
        
        case "D":
            return "不合格です。\n";
            break;
            
        default:
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}
echo evaluateGrade("A");
echo evaluateGrade("C");

?>