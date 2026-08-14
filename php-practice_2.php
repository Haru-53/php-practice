<?php
// Q1 tic-tac問題
// 🔸問題
// 1から100までの数字について以下の条件に沿って表示してください。
// 🔸条件
// 1から100までの数字について処理を実行する。
// 4の倍数のときは tic を出力。
// 5の倍数のときは tac を出力。
// 4の倍数かつ5の倍数のときは tic-tac を出力。
// 上記以外の数のときはそのままその数字を出力する。
// 出力結果が以下の通り縦に並ぶようにしてください。
<?php
echo "1から100までのカウントを開始します。\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}
?>

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
// 上記の配列を用いて下記のように表示してください。
// 出力結果
// Bさんの電話番号は08033334444です。

<?php 
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

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";
?>
// 問題2

// foreachを用いて下記のように表示してください。(数字が1から始まっていることに注意しましょう)

// ー出力結果ー

// 1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
// 2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
// 3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。
<?php
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => ' aaa@mail.com',
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
foreach ($personalInfos as $index => $info) {
    $number = $index + 1;
    echo $number . "番目の" . $info['name'] . "のメールアドレスは" . $info['mail'] . "で、電話番号は" . $info['tel'] . "です。<br>";
}
?>  
// 問題3
// $ageList = [25, 30, 18];
// 上記の$ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。その際は、foreachを使用してください。
// 追加ができたらvar_dumpを使用して配列の中身を確認してください。下記のようになっていたらOKです。
<?php
// ↓多次元配列（０番から２番）
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
// ↓年齢の配列
$ageList = [25, 30, 18];

// ↓配列を直接変更して年齢を加えるために、foreachループを使用して$personalInfoする年齢をsの各要素に対応追加

foreach ($personalInfos as $index => &$person) {
    $person['age'] = $ageList[$index];
}
// ↓配列の中身を全部表示する
var_dump($personalInfos);

?>
// Q3 オブジェクト-1
// 問題

// 以下のクラスのプロパティを使って、条件に一致するような文章を表示してください。

// <?php

// class Student
// {
//     public $studentId;
//     public $studentName;

//     public function __construct($id, $name)
//     {
//         $this->studentId = $id;
//         $this->studentName = $name;
//     }

//     public function attend()
//     {
//         echo '授業に出席しました。';
//     }
// }
// 🔸条件
// studentIdプロパティは正の整数を設定してください。
// nameプロパティは任意の値を設定してください。
<?php

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

// Studentクラスのオブジェクトを作成
$student = new Student(120, "山田");

// プロパティを表示
echo "学籍番号" . $student->studentId . "番の生徒は" . $student->studentName . "です。";

?>
// Q4 オブジェクト-2
<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
  {
    echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
}
}
$yamada = new Student(120, "山田");
$yamada->attend("PHP"); 
?>

// Q5 定義済みクラス
// 問題１
// 1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力しましょう。
// -出力結果(2021年3月2日の場合)-
// 2021-02-02

// ↓インスタンスを作成して1ヶ月前に戻して、出力フォーマットを指定する

<?php
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');
?>

// 問題2
// 今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。
// -出力結果(2021年3月2日の場合)-
// あの日から10538日経過しました。

<?php
$today = new DateTime();
$birthday = new DateTime('1992-04-25');

$diff = $birthday->diff($today);

echo 'あの日から' . $diff->days . '日経過しました。';

?>

あ
