<?php 
class Cms5c65e0d33bcec742048300_75b2ef45c9cb5b6d77f7bfa66a322eeaClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
