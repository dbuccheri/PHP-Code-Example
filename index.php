<!DOCTYPE html>



<html>
<head>
    <link rel="stylesheet" href="css/Task2.css">
    <title>Task 2 - RSS Feed Reader</title>
</head>

<body>

<div id="wrapper">
    
<h1>Headlines</h1>

<?PHP

// Author Daniele Buccheri
// Task 2

// Load in to $rss the feed using simple xml
$rss = simplexml_load_file('http://www.gallenauniversity.com/_resources/rss/news.xml');

foreach ($rss->channel->item as $item)
{
?>    
    
<div id="feedWrapper">
    <a href="<?php  echo $item->link;?>" target="_blank"><h2><?php  echo $item->title; ?></h2></a>
    <?php
   // I use the namespase to access the attribute of media to get the thumbnail url
    $thumbAttr = $item->children('media', true)->content->thumbnail->attributes();
    ?>

    <p><img  alt="<?php echo $item->title; ?  >"  src="<?php echo $thumbAttr['url'];?>" id="thumb"><?php  echo $item->description; ?><br></p>

</div>
<?php

}
    
?>

</div>



</body>
</html>


 