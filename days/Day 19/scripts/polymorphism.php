<?php

interface Form {
    public function draw();
}

class Circle implements Form {
    public function draw() {
        echo "drawing a circle!\n";
    }
}

class Square implements Form {
    public function draw() {
        echo "Drawing a square!\n";
    }
}

function drawForm(Form $form) {
    $form->draw();
}

$circle = new Circle();
$square = new Square();

drawForm($circle);
drawForm($square);
