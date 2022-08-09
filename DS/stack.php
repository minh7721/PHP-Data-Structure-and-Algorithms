<?php

// Ngan xep

class ReadingList
{
    protected $stack;
    protected $limit;
    
    public function __construct($limit = 10) {
        // Khoi tao ngan xep
        $this->stack = array();
        // Ngan xep chi co the chua toi da $limit phan tu
        $this->limit = $limit;
    }

    //Them mot gia tri vao dau ngan xep
    public function push($item) {
        // Kiem tra full ngan xep
        if (count($this->stack) < $this->limit) {
            // Them gia tri vao dau ngan xep
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Ngan xep da full!'); 
        }
    }

    //Loai bo gia tri cuoi cung duoc them vao ngan xep
    public function pop() {
        if ($this->isEmpty()) {
            // Kiem tra ngan xep co phan tu nao khong
	      throw new RunTimeException('Ngan xep khong co gi!');
	  } else {
            // Xoa phan tu cuoi cung cua ngan xep
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