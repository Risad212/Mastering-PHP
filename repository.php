<?php

// Definition: 
// The Repository Pattern separates business logic from data logic, 
// making code more organized, flexible, and easy to maintain.

class Product {
    private $id;
    private $name;
    
    public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    
    public function getId() {
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
}

interface ProductRepositoryInterface {
    public function findById($id);
    public function save(Product $product): void;
}

class ProductRepository implements ProductRepositoryInterface {
    private $products = [];

    public function __construct() {
        $this->products[] = new Product(1, "Laptop");
        $this->products[] = new Product(2, "Phone");
    }

    public function findById($id): ?Product {
        foreach ($this->products as $product) {
            if ($product->getId() == $id) return $product;
        }
        return null;
    }

    public function save(Product $product): void {
        $this->products[] = $product;
    }
}

class ProductService {
    private $productRepo;

    public function __construct(ProductRepositoryInterface $productRepo) {
        $this->productRepo = $productRepo;
    }

    public function addProduct($id, $name) {
        $this->productRepo->save(new Product($id, $name));
    }

    public function getProductById($id) {
        return $this->productRepo->findById($id);
    }
}

// Example Usage
$productRepo = new ProductRepository();
$PdService = new ProductService($productRepo);

$PdService->addProduct(3, 'T-shirt');
$PdService->addProduct(9, 'Pant');

$product = $PdService->getProductById(9);
if ($product) {
    echo "Found Product: " . $product->getName();
} else {
    echo "Product not found.";
}

// Benefits:
// - Keeps business logic independent of data storage.
// - Makes code easier to test, modify, and scale.
// - Allows switching databases without changing business logic.

?>
