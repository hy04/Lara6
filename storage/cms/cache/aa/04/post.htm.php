<?php 
class Cms5c65ebfdb3122486265747_792dba695efb075c88a69b20dc58e2ccClass extends Cms\Classes\PageCode
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
