<?php
$xml=simplexml_load_file("books.xml") or die("cant load string");
//print_r($xml);
//echo $xml->book[0]->title;
foreach($xml->children() as $node)
{
    echo "$node->title <br>";
    echo "$node->author <br>";
}

?>