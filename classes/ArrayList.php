<?php
require_once __DIR__ . '/../interfaces/ListInterface.php';

class ArrayList implements ListInterface {
    private $items = [];

    public function add($element) {
        $this->items[] = $element;
    }

    public function remove($element) {
        $index = array_search($element, $this->items);
        if ($index !== false) unset($this->items[$index]);
    }

    public function size() {
        return count($this->items);
    }

    public function getAll() {
        return $this->items;
    }

    public function get($index) {
        return $this->items[$index] ?? null;
    }

    public function set($index, $value) {
        $this->items[$index] = $value;
    }
}
?>
