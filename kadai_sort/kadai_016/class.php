<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        $food = new Food('Apple', 100);

        // クラスのプロパティにアクセス
        print_r($food);

        class Animal {
            $public $name;
            $public $height;
            $public $weight;
        }
        ?>
    </p>
</body>
</html>