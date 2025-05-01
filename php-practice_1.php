<?php
// Q1 変数と文字列
$name = '「奈良」';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 5 * 4;
echo $num."\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は' . date("Y年m月d日 h時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows'){
  echo '使用OSは、' . $device . 'です。';
  return;
}if ($device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
  return;
}else {
  echo 'どちらでもありません';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$prefecture = [
  '茨城県', 
  '東京都', 
  '栃木県', 
  '千葉県', 
  '神奈川県', 
  '埼玉県'
];
echo $prefecture[2]. 'と' . $prefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$ward = [
  '東京都' => '新宿区', 
  '神奈川県' => '横浜市', 
  '千葉県' => '千葉市', 
  '埼玉県' => 'さいたま市', 
  '栃木県' => '宇都宮市', 
  '群馬県' => '前橋市', 
  '茨城県' => '水戸市',
];
foreach($ward as $result){
  echo $result . "\n";
}

// Q8 連想配列-2
$ward = [
  '東京都' => '新宿区', 
  '神奈川県' => '横浜市', 
  '千葉県' => '千葉市', 
  '埼玉県' => 'さいたま市', 
  '栃木県' => '宇都宮市', 
  '群馬県' => '前橋市', 
  '茨城県' => '水戸市',
];

foreach($ward as $key => $value){
  if ($key === '埼玉県'){
      echo $key . 'の県庁所在地は、' . $value . 'です。';
  }
}

// Q9 連想配列-3
$ward['愛知県'] = '名古屋市';
$ward['大阪府'] = '大阪市';
foreach($ward as $key => $value){
  if ($key === '愛知県' || $key === '大阪府'){
    echo $key . 'は関東地方ではありません。' . "\n";
  }else {
    echo $key . 'の県庁所在地は' . $value . 'です。' . "\n";
  }
}

// Q10 関数-1
function hello($name) {
  echo $name . 'さん、こんにちは。' . "\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price) {
  return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function  distinguishNum($number) {
  if ($number % 2 === 0) {
    echo $number . 'は偶数です。' . "\n";
  }else {
    echo $number . 'は奇数です。' . "\n";
    }
  }
  distinguishNum(11);
  distinguishNum(24);
  

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
    case 'A':
    case 'B':
      echo '合格です。' . "\n";
      break;

    case 'C':
      echo '合格ですが追加課題があります。' . "\n";
      break;

    case 'D':
      echo '不合格です。' . "\n";
      break;

    default:
      echo '判定不明です。講師に問い合わせてください。' . "\n";
      break;
  }
}
evaluateGrade('A');
evaluateGrade('E');

?>