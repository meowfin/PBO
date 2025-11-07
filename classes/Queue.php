<?php
require_once __DIR__ . '/../interfaces/QueueInterface.php';

class Queue implements QueueInterface {
    private $queue = [];

    public function add($element) {
        $this->enqueue($element);
    }

    public function remove($element) {
        $index = array_search($element, $this->queue);
        if ($index !== false) unset($this->queue[$index]);
    }

    public function size() {
        return count($this->queue);
    }

    public function getAll() {
        return $this->queue;
    }

    public function enqueue($element) {
        array_push($this->queue, $element);
    }

    public function dequeue() {
        return array_shift($this->queue);
    }
}
?>
