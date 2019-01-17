<?php 
class Cms5c404cc9749fb257700306_da8882d7b7ad3371c52291f0d245218cClass extends Cms\Classes\PageCode
{
public function onStart()
{
    $filename = $this->param('filename', 'welcome');
    $filename = strtolower($filename);

    if ($filename !== 'welcome') {
        return Redirect::to('/404');
    }

    $this['filename'] = $filename;
}
}
