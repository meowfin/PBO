<?php
require_once __DIR__ . '/../interfaces/CollectionInterface.php';

class Stack implements CollectionInterface {
    private $stack = [];

    public function add($element) {
        array_push($this->stack, $element);
    }

    public function remove($element) {
        $index = array_search($element, $this->stack);
        if ($index !== false) unset($this->stack[$index]);
    }

    public function size() {
        return count($this->stack);
    }

    public function getAll() {
        return $this->stack;
    }

    public function pop() {
        return array_pop($this->stack);
    }
}
?>
