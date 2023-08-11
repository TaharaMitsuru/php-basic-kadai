<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

        class Food {

            private $name;
            private $price;

            public function __construct(string $name, int $price){
            
                $this->name = $name;
                $this->price = $price;

            }

            public function show_price(){
            echo $this->price;
            }
        }
        
        class Animal{

            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight)
            {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height;
            }
        }

        $food = new Food('スイカ', 450);  
        $animal = new Animal('ねこ', 30, 6);  

        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        $food->show_price();
        echo '<br>';
        $animal->show_height();
        echo '<br>';
        ?>
    </body>
</html>
