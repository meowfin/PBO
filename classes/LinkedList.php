<?php
require_once __DIR__ . '/../interfaces/ListInterface.php';

class LinkedList implements ListInterface {
    private $nodes = [];

    public function add($element) {
        $this->nodes[] = $element;
    }

    public function remove($element) {
        $index = array_search($element, $this->nodes);
        if ($index !== false) unset($this->nodes[$index]);
    }

    public function size() {
        return count($this->nodes);
    }

    public function getAll() {
        return $this->nodes;
    }

    public function get($index) {
        return $this->nodes[$index] ?? null;
    }

    public function set($index, $value) {
        $this->nodes[$index] = $value;
    }
}
?>
