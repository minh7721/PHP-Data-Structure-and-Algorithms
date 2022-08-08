<?php
class ReadingList
{
    protected $stack;
    protected $limit;
    
    public function __construct($limit = 10) {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }

    //Them mot gia tri vao dau ngan xep
    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!'); 
        }
    }

    //Loai bo gia tri cuoi cung duoc them vao ngan xep
    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
	      throw new RunTimeException('Stack is empty!');
	  } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    //Tra ve gia tri tren cung cua ngan xep
    public function top() {
        return current($this->stack);
    }

    
    public function isEmpty() {
        return empty($this->stack);
    }
}



$myBooks = new ReadingList();


$myBooks->push('So 1');
$myBooks->push('So 2');
$myBooks->push('So 3 ');
$myBooks->push('So 4');
$myBooks->push('So 5'); 
$myBooks->push('So 6');
$myBooks->push('So 7');
$myBooks->push('So 8');
$myBooks->push('So 9');

//Xoa 3 gia tri vao cuoi cung cua ngan xep
$myBooks->pop();
$myBooks->pop();
$myBooks->pop();

echo "<pre>";
print_r($myBooks);
echo "</pre>";

echo "<br>";
echo $myBooks->top();
?>