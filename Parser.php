<?php

require_once 'ParserInterface.php';
include '/simplehtmldom_1_5/simple_html_dom.php';

class Parser implements ParserInterface
{

    public function process(string $url = 'http://mintmanga.com/', string $tag = 'h1')
    {
        $html = file_get_html($url);
        
        foreach($html->find($tag) as $elem)
        {
            echo $elem->plaintext + '\n';
        }
        $html->clear();
        unset($html);
    }

}
