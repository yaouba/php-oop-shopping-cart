<?php

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function addProduct(Product $product, int $quantity)
    {
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null) {
            $cartItem = new CartItem($product, 0);
            $this->items[] = $cartItem;
        }
        $cartItem->increaseQuantity($quantity);
        return $cartItem;
    }

    public function removeProduct(Product $product)
    {
        foreach ($this->items as $key => $item) {
            if ($item->getProduct()->getId() == $product->getId()) {
                unset($this->items[$key]);
                break;
            }
        }
    }

    private function findCartItem(int $productId)
    {
        foreach ($this->items as $item) {
            if ($item->getProduct()->getId() == $productId) {
                return $item;
            }
        }

        return null;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalPrice()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity() * $item->getProduct()->getPrice();
        }
        return $sum;
    }
}
