<?php
require_once 'classes/ArrayList.php';
require_once 'classes/LinkedList.php';
require_once 'classes/Stack.php';
require_once 'classes/Queue.php';
require_once 'classes/HashMap.php';

// Array utama berisi nama-nama koleksi
$collections = ["ArrayList", "LinkedList", "Stack", "Queue", "HashMap"];

echo "=== ARRAY OF COLLECTION CLASSES ===\n";
print_r($collections);

// Tes masing-masing implementasi
echo "\n=== TEST ARRAYLIST ===\n";
$list = new ArrayList();
$list->add("Satu");
$list->add("Dua");
$list->add("Tiga");
print_r($list->getAll());

echo "\n=== TEST STACK ===\n";
$stack = new Stack();
$stack->add("Pertama");
$stack->add("Kedua");
$stack->add("Ketiga");
echo "Pop: " . $stack->pop() . "\n";
print_r($stack->getAll());

echo "\n=== TEST QUEUE ===\n";
$q = new Queue();
$q->enqueue("A");
$q->enqueue("B");
$q->enqueue("C");
echo "Dequeue: " . $q->dequeue() . "\n";
print_r($q->getAll());

echo "\n=== TEST HASHMAP ===\n";
$map = new HashMap();
$map->put("Arifin", 100);
$map->put("Budi", 90);
print_r($map->getAll());
?>
