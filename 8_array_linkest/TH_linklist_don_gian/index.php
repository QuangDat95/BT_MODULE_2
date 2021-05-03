<?php
include_once('Node.php');
include_once('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertFirst(44);

$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo "<br>";
echo implode('-',$linkData);
?>