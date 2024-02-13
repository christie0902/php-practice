<?php

require_once 'DBBlackbox.php';

class Comment {
    public ?int $id = null;
    public ?string $nickname=null;
    public ?string $text = null;
}