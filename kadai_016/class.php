<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>
<body>
    <p>
        <?php
        // クラスを作成
        class Food {
            // プロパティを定義
            public $name;
            public $price;
            // メソッドを定義
            public function show_price() {
                $this->price = 250;
                echo $this->price . '<br>';
            }
            // コンストラクタを定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        // インスタンス化する
        $food = new Food('potato' ,250);
        print_r($food);
        echo '<br>';

        // クラスを作成する
        class Animal {
            // プロパティを定義
            public $name;
            public $height;
            public $weight;
            // メソッドを定義
            public function show_height() {
                $this->height = 60;
                echo $this->height . '<br>';
            }
            // コンストラクタを定義
            public function __construct(string $name, int $height, string $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        // インスタンス化
        $animal = new Animal('dog' ,60, 5000);
        print_r($animal);
        echo '<br>';
        
        // メソッドへアクセス
        $food->show_price();
        $animal->show_height();
        ?>
    </p>
</body>
</html>