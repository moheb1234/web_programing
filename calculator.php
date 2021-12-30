<?php
error_reporting(E_ALL ^ E_WARNING);
function calc($expression, $calcButton, $clearButton)
{
    if (isset($calcButton)) {
        try {
            $math = "print" . "(" . $expression . ")" . ";";
            return eval($math);
        } catch (Error $e) {
            return "please enter a valid math expression";
        }
    }
    if (isset($clearButton))
        return "";
    return "";
}

