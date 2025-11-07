<?php
interface CollectionInterface {
    public function add($element);
    public function remove($element);
    public function size();
    public function getAll();
}
?>
