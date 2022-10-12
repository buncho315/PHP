<?php
    echo "Hello paiza\n";
    echo "Hello paiza";
?>

<?php
    $greeting = "hello world";
    echo $greeting;
//変数
  $name = "paiza";
    echo $name. "さん、冒険へ行こう！"
    //変数と文字列の連結
?>

<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name;
    //fgets関数で入力タブから受け取ったデータを表示する
    $number = trim(fgets(STDIN));
    echo $number * 10 . "\n";
    echo "お小遣い：" . ($number * 10) . "円";
?>
<!--//else-->
<?php
    $name = trim(fgets(STDIN));
    echo "Hello " . $name . "\n";

    if ($name == "PHP") {
        echo "Welcome\n";
    } elseif ($name == "PHP") {
        echo "Good morning\n";
    } else {
        echo "Goodbye!\n";
    }
?>
