<?php
// Q1 tic-tac問題
$number = range(1, 100);
echo '1から100までのカウントを開始します' . "\n";
for ($i = 1; $i < 101; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac';
  }elseif ($i % 5 === 0){
    echo 'tac';
  }elseif ($i % 4 === 0){
    echo 'tic';
  }else {
      echo $i;
  }
  echo "\n";
}

// Q2 多次元連想配列
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

// 問題1
echo 'Bさんの電話番号は' . $personalInfos[1]['tel'] . 'です。'; 

// 問題2
foreach($personalInfos as $x => $y){
 $num = $x + 1;
 echo $num . '番目の' . $y['name'] . 'さんのメールアドレスは' . $y['mail'] . 'で、電話番号は' . $y['tel'] . 'です。' . "\n";
}

// 問題3
$ageList = [25, 30, 18];
$i = 0; 
foreach($personalInfos as &$age){
  $age['age'] = $ageList[$i];
  $i++
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
        echo '授業に出席しました。';
    }
}
$yamada = new Student(120, '山田');
echo '学籍番号' . $yamada -> studentId . 'の生徒は' . $yamada->studentName . 'です。';


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

    public function attend($lesson)
    {
        echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題1
date_default_timezone_set('Asia/Tokyo'); 
$date = new dateTime(); 

$date->modify('-1 months'); 
echo $date->format('Y-m-d');  

// 問題2
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime('2025-04-30'); 
$date1 = new Datetime('1992-04-25');
$diff = $date->diff($date1);
echo 'あの日から' . $diff->days. '日経過しました。';

?>