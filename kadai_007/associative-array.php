<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>連想配列を作ってキーと値を出力しよう</title>
 </head>
 
 <body>
     <p>
        <?php
         // 連想配列に値を代入する
         $vegetables = ['name' => 'onion', 'price' => 200, 'weight' => '160'];

         // 連想配列の値を出力する
         print_r($vegetables);
        ?>
     </p>
 </body>
 
 </html>