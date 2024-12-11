# WordPress eCommerce Shop

Welcome to the **WordPress eCommerce Shop** project! This is a demo site for a fully functional online shop built with WordPress.

## Table of Contents
- [About](#about)
- [Installation](#installation)
- [Usage](#usage)
- [Plugins and Themes](#plugins-and-themes)
- [Contributing](#contributing)
- [License](#license)

## About

This project is a WordPress-based eCommerce website designed to showcase products, accept orders, and integrate payment gateways. The site is fully responsive and features a custom theme designed to provide a seamless user experience.

## Features

This WordPress-based eCommerce shop includes the following key features:

### 1. **Custom eCommerce Setup**
   - Fully functional **WooCommerce** shop for selling products online.
   - Product catalog with categories, filters, and sorting.
   - User registration and login functionality.
   - Shopping cart and checkout process integrated with **Klarna Payments**.

### 2. **Product Management**
   - Easily add and manage products with custom attributes, images, and descriptions.
   - Support for variable products (e.g., different sizes, colors).
   - **Product Image Flipper** for displaying secondary product images on hover (perfect for showing different angles, such as front/back views of clothing).
   - **Product Slider** for showcasing featured products on the homepage or other pages.

### 3. **Page Building with Elementor**
   - Customizable, drag-and-drop page builder with **Elementor** for easy page design.
   - Pixel-perfect design for pages, mobile responsiveness, and advanced editing options.

### 4. **User Experience Enhancements**
   - **Sticky Menu** for easy navigation on scroll.
   - **Wishlist** functionality for customers using **TI WooCommerce Wishlist**.
   - Visual **TranslatePress** integration for translating your site into multiple languages.

### 5. **Security and Performance**
   - **Really Simple SSL** to enable SSL and enhance website security.
   - Optimized for speed and performance with secure payment gateways.

### 6. **Theme and Widget Customization**
   - Customizable WordPress theme using **OceanWP** with additional features via the **Ocean Extra** plugin.
   - **Classic Widgets** plugin to restore the classic widgets interface for easier sidebar and footer management.
   
### 7. **Order Management and Payment Integration**
   - **Klarna Payments** integrated as a payment method for WooCommerce.
   - **Klarna Order Management** plugin for managing orders processed through Klarna.

### 8. **Multilingual Support**
   - Fully compatible with **TranslatePress** for multilingual site translation. Visitors can seamlessly switch between languages.

### 9. **Enhanced Checkout and Payment Options**
   - Integrated **Klarna** checkout for flexible payment options, including Pay Later and Pay Now features.

### 10. **Admin Interface**
   - Easy-to-use WordPress dashboard with all the necessary tools for managing products, orders, and users.
   - View orders, manage inventory, and process payments all from a single interface.

## Screenshots

### Homepage
![Screenshot of the homepage](assets/screenshots/shop.png)

This is the screenshot of the homepage of the WordPress site.

### Product Page
![Product page view](assets/screenshots/shopcategory.png)

Here is how the product page looks when viewed by customers.

### Product Detail Page
![Checkout page view](assets/screenshots/shopdetails.png)

Here is how the product detail page looks when viewed by customers.

### Wishlist Page
![Checkout page view](assets/screenshots/shopwishlist.png)

This is the wishlist page where users can favorite their products.

### Checkout Page
![Checkout page view](assets/screenshots/shopcheckout.png)

This is the checkout page where users can complete their orders.

### Account Page
![Checkout page view](assets/screenshots/shopaccount.png)

This is the account page where users have complete control of their account.

## Plugins and Themes

### Active Plugins:
- **Classic Widgets**: Restores the classic widgets interface in Appearance > Widgets and the Customizer, disabling the block editor for widgets.

- **Elementor**: Drag-and-drop page builder for designing pages with pixel-perfect control.

- **Klarna Order Management for WooCommerce**: Provides order management for Klarna Payments and Klarna Checkout gateways.

- **Klarna Payments for WooCommerce**: Adds Klarna Payments as a payment method for WooCommerce.

- **Ocean Extra**: Adds extra features and flexibility to the OceanWP theme for a premium experience.

- **Product Slider for WooCommerce by PickPlugins**: Adds a fully responsive product slider for showcasing products.
- **Really Simple SSL**: Ensures SSL is enabled and improves site security.

- **Sticky Menu (or Anything!) on Scroll**: Makes any element, like a navigation menu, stick to the top as you scroll.

- **TI WooCommerce Wishlist**: Adds a wishlist feature to WooCommerce for users to save products for later.

- **TranslatePress - Multilingual**: A front-end translation editor for translating your WordPress site.

- **WooCommerce**: An eCommerce toolkit that helps you sell anything beautifully.

- **WooCommerce Product Image Flipper**: Shows a secondary product image when hovering over products.

- **WordPress Importer**: Import posts, pages, and media from a WordPress export file.

- **WP Migrate Lite**: Migrate your database, including media, themes, and plugins.

- **Yoast SEO**: Helps improve your site’s search engine optimization (SEO).

### Active Theme:
- **Shop Theme**: A custom-built WordPress theme designed for an eCommerce shop, fully responsive with custom styles for products and checkout.

---

### Highlights:
- It describes the main features your WordPress site offers.
- It includes the active plugins that make the site function as intended.
- Screenshots are embedded to visually showcase parts of the site.
  
Feel free to tweak the content if there are any other specific features or plugins you’d like to include!

## Installation

Follow these steps to set up the WordPress eCommerce shop on your local machine or server.

### Prerequisites:
- A server running PHP and MySQL (e.g., using MAMP, XAMPP, or any LAMP stack).
- WordPress installation.
- A MySQL database.

### Steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/Berger101/Wordpress-Ecommerce-Shop.git
    ```

2. Navigate to the project directory:
    ```bash
    cd your-repository-name
    ```

3. Set up the database:
    - Create a MySQL database.
    - Update the `wp-config.php` file with your database credentials:
    ```php
    define( 'DB_NAME', 'your_database_name' );
    define( 'DB_USER', 'root' );  // or your MySQL user
    define( 'DB_PASSWORD', '' );  // or your MySQL password
    define( 'DB_HOST', 'localhost' ); // add port used
    ```

4. Import the database dump (if provided) or set up your WordPress installation through the web interface.

5. Visit the website:
    - For local development: `http://localhost:8888/your-project-name`

## Usage

Once the installation is complete, you can begin using your WordPress eCommerce shop by following these steps:

