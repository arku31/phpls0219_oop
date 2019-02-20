<?php
/**
 * Краткая суть: каждый объект гарантировано может выполнять некую работу.
 * Иными словами, Если это фигура, то мы ее можем нарисовать.
 * Если это тарелка, то ее можно наполнить. И разбить. Таким образом абстрактный класс
 * Тарелка будет иметь два абстрактных метода - наполнить и разбить.
 */
abstract class Figure
{
    abstract public function draw(); // абстрактный метод «Нарисовать фигуру»     }
}


class Triangle extends Figure
{
    public function draw()
    {
        echo 'рисуем треугольник';
    }
}


class Circle extends Figure
{
    public function draw()
    {
        echo 'рисуем круг';
    }
}


function drawFigure($fig)
{
    if ($fig instanceof Figure) {
        $fig->draw();
    } else {
        echo 'Неизвестная фигура';
    }
    echo PHP_EOL;
}

$triangle = new Triangle();
$circle = new Auto();
drawFigure(new Triangle());
drawFigure($circle);



