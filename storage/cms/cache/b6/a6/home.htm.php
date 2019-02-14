<?php 
class Cms5c65de4791118327170721_731702779bc56c620a6150a3dbf2fd36Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
