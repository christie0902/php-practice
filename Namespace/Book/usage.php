<?php

// namespace Christie\Bookshop;

use \XT\BookPreview\Page as WebPage;
use Christie\Bookshop\Page as BookPage; //the file should be in the same folder
// use Christie\Bookshop\Page >> import as Page

require_once 'Page.php';
require_once 'Page/Page.php'

$page = new BookPage;
// $page = new Page;
$home = new WebPage;
// $home = new \XT\BookPreview\Page;
// add \ if have namespace, the one not belong to this namespace, take it from the top

// USE FUNCTION
// use function foo\bar; // for function \foo\bar
// // or
// use const foo\BAR; // for constant \foo\BAR