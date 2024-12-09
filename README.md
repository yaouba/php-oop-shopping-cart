
# PHP OOP Shopping Cart

A simple and flexible shopping cart implementation in PHP using Object-Oriented Programming (OOP) principles. This project demonstrates clean code architecture and is designed to be easily extendable for real-world applications.

## Features

- **Add, update, and remove items** from the shopping cart.
- **Item quantity management** to reflect user requirements.
- **Cart total calculation** based on item prices and quantities.
- **Object-Oriented Design** for clean, maintainable, and reusable code.

## Installation

### Prerequisites
- PHP 7.4 or later
- A web server (e.g., Apache, Nginx)
- Composer (optional for dependency management)

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yaouba/php-oop-shopping-cart.git
   cd php-oop-shopping-cart
   ```

2. **Configure your server**:
   Ensure your web server is pointing to the project directory.

3. **Run the application**:
   Open your web browser and navigate to `http://localhost/php-oop-shopping-cart` or your server URL.

## Usage

### Adding Items to the Cart
Use the `Cart` class to add items by specifying the item details (e.g., ID, name, price, and quantity).

```php
$cart = new Cart();
$cart->addItem(new Item(1, 'Apple', 2.99, 3));
```

### Viewing Cart Items
You can retrieve and display all items in the cart:

```php
foreach ($cart->getItems() as $item) {
    echo $item->getName() . " - " . $item->getPrice();
}
```

### Calculating the Total
Get the total cost of items in the cart:

```php
echo "Total: " . $cart->getTotal();
```

### Removing Items
Remove items from the cart by their ID:

```php
$cart->removeItem(1);
```

## Project Structure

- **`Cart.php`**: The main class managing cart operations.
- **`Item.php`**: A class representing individual cart items.
- **`index.php`**: Example usage and testing of the shopping cart functionality.

## Contributing

Contributions are welcome! Feel free to open issues or submit pull requests to improve the project.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

This project was developed as a demonstration of OOP principles in PHP.
