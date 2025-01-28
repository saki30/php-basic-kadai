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

            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_name() {
                echo $this->name . '<br>';
            }

            public function get_price() {
                return $this->price;
            }
        }

        $potato = new Food('potato', 250);

        echo 'Food Price: ' . $potato->get_price() . '<br>';
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

            public function set_name(string $name) {
                $this->name = $name;
            }

            public function show_height() {
                echo $this->height . '<br>';
            }

            public function get_height() {
                return $this->height;
            }
        }

        $dog = new Animal('dog', 60, 5000);
        echo '<br>';

        echo 'Animal Height: ' . $dog->get_height() . '<br>';
        print_r($dog);
        ?>
    </p>
</body>
</html>