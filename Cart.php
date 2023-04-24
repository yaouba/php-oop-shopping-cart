<?php

class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function addProduct(Product $product, int $quantity)
    {
        $cartItem = new CartItem($product, 0);

        // Find product in cart
        foreach ($this->items as $item) {
            if ($item->getProduct()->getId() == $product->getId()) {
                $cartItem = $item;
            }
        }
        $cartItem->increaseQuantity($quantity);
    }
}
