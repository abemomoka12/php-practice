<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++){

    if ($i % 4 === 0 && $i % 5 === 0){
        echo "tic-tac \n";
    }elseif ($i % 4 === 0){
        echo "tic \n";
    }elseif ($i % 5 === 0){
        echo "tac \n";
    }else{
        echo $i. "\n";
    }
}


// Q2 多次元連想配列
//問2-1
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

echo $personalInfos[1]['name']. "の電話番号は". $personalInfos[1]['tel']. "です。\n";

//問2-2
foreach ($personalInfos as $key => $vals){
    echo ($key +1). "番目の". $vals['name']. "のメールアドレスは". $vals['mail']. "で、電話番号は". $vals['tel']. "です。\n";
}

//問2-3
$ageList = [25, 30, 18];

foreach ($personalInfos as $key => $vals){
    $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);



// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo "学籍番号". $this->studentId. "番の生徒は". $this->studentName. "です。\n";
    }
}

$tanaka = new Student(100, "田中");
$tanaka->attend();


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($className)
    {
        echo $this->studentName. "は". $className. "の授業に参加しました。学籍番号：". $this->studentId. "\n";
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問5-1
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d'). "\n";

//問5-2
$time1 = new DateTime();
$time2 = new DateTime('1992-04-25');

$diff = $time1->diff($time2);
echo $diff->format('あの日から%a日経過しました。');


?>