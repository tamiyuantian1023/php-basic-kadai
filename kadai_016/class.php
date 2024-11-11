<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
         // クラスを定義する
         class Food {
          // プロパティを定義する                        
          private $name;
          private $price;

          // コンストラクタを定義する
          public function __construct(string $name, int $price) {
              $this->name = $name;
              $this->price = $price;
          }

          // メソッドを定義する
          public function show_price(){
            echo $this->price;
          }
         }
 
         // インスタンス化する
         $Food = new Food('potato', 250);
 
         // インスタンス$Foodの各プロパティの値を出力する
         print_r($Food);
         echo "<br>";
         // メソッドを実行する
         $Food->show_price();
         echo "<br>";


         class Animal {
          // プロパティを定義する                        
          private $name;
          private $height;
          private $weight;

          // コンストラクタを定義する
          public function __construct(string $name, int $height, string $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
          }

          // メソッドを定義する
          public function show_height(){
            echo $this->height;
          }
        }

        // インスタンス化する
        $Animal = new Animal('dog', 60, 5000);

        // インスタンス$Animalの各プロパティの値を出力する
        print_r($Animal);
        echo "<br>";

        // メソッドを実行する
        $Animal->show_height();
        echo "<br>";
     ?>
    </p>
</body>

</html>