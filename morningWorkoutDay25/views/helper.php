<?php

function printText($text) 
{
    return '<p>' . $text . '</p>';
}

// don't close the tag to avoid risk of having extra html elements when execute (spaces)