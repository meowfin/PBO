<?php
require_once 'CollectionInterface.php';

interface QueueInterface extends CollectionInterface {
    public function enqueue($element);
    public function dequeue();
}
?>
