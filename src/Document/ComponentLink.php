<?php
namespace ChapterThree\AppleNewsAPI\Document;

class ComponentLink extends Base
{
    protected $URL;
    protected $type = 'link';
 
    public function getType()
    {
        return $this->type;
    }

    public function getUrl()
    {
        return $this->URL;
    }

    public function setUrl($url)
    {
        $this->URL = $url;
        return $this;
    }
}
