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
            return $this->price;
          }
         }
 
         // インスタンス化する
         $Food = new Food('potato', 250);
 
         // インスタンス$Foodの各プロパティの値を出力する
         print_r($Food);
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
            return $this->height;
          }
        }

        // インスタンス化する
        $Animal = new Animal('dog', 60, 5000);

        // インスタンス$Animalの各プロパティの値を出力する
        print_r($Animal);
        echo "<br>";

        echo $Food->show_price();
        echo "<br>";

        echo $Animal->show_height();
     ?>
    </p>
</body>

</html>