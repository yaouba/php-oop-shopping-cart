<?php

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    public function increaseQuantity(int $amount = 1)
    {
        if (($this->getQuantity() + $amount) > $this->product->getAvailableQuantity()) {
            throw new Exception("Product quantity can not be more thant: " . $this->product->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity(int $amount = 1)
    {
        if (($this->getQuantity() - $amount) < 1) {
            throw new Exception("Product quantity can not be less thant 1");
        }
        $this->quantity -= $amount;
    }
}
