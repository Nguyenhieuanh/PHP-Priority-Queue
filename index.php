<?php
include_once "Classes/PriorityQueue.php";

$priorityQueue = new PriorityQueue();
try {
    $priorityQueue->enqueue("Hieu", 1);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Hung", 1);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Dung", 2);
} catch (Exception $e) {
}
try {
    $priorityQueue->enqueue("Hoang", 5);
} catch (Exception $e) {
} 
try {
    $priorityQueue->enqueue("Nam", 2);
} catch (Exception $e) {
}

echo "<pre>";
print_r($priorityQueue->readQueue(1));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ưu tiên khám bệnh</title>
</head>
<body>

</body>
</html>
