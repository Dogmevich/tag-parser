<?php

require_once 'ParserInterface.php';
include '/simplehtmldom_1_5/simple_html_dom.php';

class Parser implements ParserInterface
{

    public function process(string $url, string $tag)
    {
        $html = file_get_html($url);
        $tagsTextList = array();
        foreach($html->find($tag) as $elem)
        {
            $tagsTextList[] = $elem->innertext;
        }
        $html->clear();
        unset($html);
        
        echo '<pre>';
        print_r($tagsTextList);
        echo '</pre>';
        
        return $tagsTextList;
    }

}