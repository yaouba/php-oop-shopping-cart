<?php

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function addProduct(Product $product, int $quantity)
    {
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null) {
            $cartItem = new CartItem($product, 0);
            $this->items[] = $cartItem;
        }

        $cartItem->increaseQuantity($quantity);
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
}
