<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food {
            private $name;
            private $price;  

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        $potato = new Food('potato', 250);
        $potato->show_price();
        print_r($potato);

        class Animal {
            private $name;
            private $height;
            private $weight;  

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        $dog = new Animal('dog', 60, 5000);
        echo '<br>';
        $dog->show_height();
        print_r($dog);
        ?>
    </p>
</body>
</html>
