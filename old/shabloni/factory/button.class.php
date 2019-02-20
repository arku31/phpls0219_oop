<?php

abstract class Button
{
    protected $html;

    public function getHtml()
    {
        return $this->html;
    }

    public function __toString()
    {
        return $this->getHtml();
    }
}

class RedButton extends Button
{
    protected $html = "<input type='button' value='click' class='red'>"; // HTML-код кнопки-картинки
}

class BlueButton extends Button
{
    protected $html = "<input type='button' value='click' class='blue'>"; // HTML-код обычной кнопки
}

class GreenButton extends Button
{
    protected $html = "<input type='button' value='click' class='green'>"; // HTML-код Flash
}