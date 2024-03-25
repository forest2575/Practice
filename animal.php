<?php
    // クラスの宣言
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }
    class Dog extends Animal {
        public $cry = "わんわん！";
    }

    // インスタンスの生成
    $animal_1 = new Dog();
    // インスタンスの使用
    $animal_1->bow();
