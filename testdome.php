<?php

class TextInput
{

    public $text;

    public function add($text)
    {
        $this->text=$text;
    }
    public function getValue($text)
    {
        return $this->text->add($text);
    }
}
class NumericInput extends TextInput
{
    public function add($text)
    {
        if (is_string($this->text)) {
            return $this->text;
        } else {
            return 0;
        }
    }

}
$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');

echo $input->getValue('9');
var_dump($input);
