<?php
class ReadingList extends SplQueue
{
}

$myBooks = new ReadingList();

$myBooks->enqueue('So 1');
$myBooks->enqueue('So 2');
$myBooks->enqueue('So 3');
$myBooks->enqueue('So 4');
$myBooks->enqueue('So 5');
$myBooks->enqueue('So 6');
$myBooks->enqueue('So 7');

echo $myBooks->dequeue();
echo "<br>";
echo $myBooks->dequeue(); 
echo "<br>";

echo "<pre>";
print_r($myBooks);
echo "</pre>";
// dd
?>
