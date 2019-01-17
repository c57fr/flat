<?php 
class Cms5c4044b41c240045002489_544440edc6a967bf11541182a3f8d1a9Class extends Cms\Classes\PageCode
{
public function onStart()
{
    $filename = $this->param('filename', 'welcome');
    $this['filename'] = strtolower($filename);
}
}
