<?php
class Product {
    public string $name = "jeric";
    public int $stock = 0;
    public function describe(): string {
        return $this ->name . ":" . $this->stock;
    }
}



                                                                                                           
?>  