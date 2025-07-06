<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_Price() {
                return $this->price;
            }
        }
        $food = new Food('potato', 250);

    
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            function show_Height() {
                return $this->height;
            }
        }
        $animal = new Animal('dog', 60, 5000);

         // クラスのプロパティにアクセス
        print_r($food);
        echo '<br>'; 
        print_r($animal);
        echo '<br>'; 
        echo $food->show_Price() . "<br>";
        echo $animal->show_Height();
        ?>
    </p>
</body>
</html>