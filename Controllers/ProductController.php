<?php
namespace App\Controllers;

require_once 'Controller.php';

use App\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        $session_id = session_id();
        $sql = "SELECT products.*, 
                      (SUM(reviews.review)/COUNT(reviews.review)) AS review,
                      (SELECT COUNT(reviews.id) 
                       FROM reviews WHERE sess_id = '$session_id' 
                       AND product_id = products.id) as has_review
               FROM products 
               LEFT JOIN reviews 
               ON products.id = reviews.product_id
               GROUP BY products.id";
        $products = $this->runQuery($sql);

        return $this->twig()->render('index.html', [
            'products' => $products,
            'cart_item' => $_SESSION['cart_item'],
        ]);
    }

    public function addToCart()
    {
        $product_quantity = (int) $_POST["quantity"];
        $product_id = (int) $_POST["id"];
        $sql = "SELECT * FROM products WHERE id='" . $product_id . "'";

        if ($product_quantity AND $productByCode = $this->runQuery($sql)) 
        {
            $itemArray = [
                'code' => $productByCode[0]["id"],
                'name' => $productByCode[0]["name"],
                'description' => $productByCode[0]["description"],
                'quantity' => $product_quantity,
                'price' => $productByCode[0]["price"],
                'image' => $productByCode[0]["image"],
            ];

            if (!empty($_SESSION["cart_item"])) 
            {
                if (in_array($product_id, array_keys($_SESSION["cart_item"]))) 
                {
                    $_SESSION["cart_item"][$product_id]['quantity'] += $product_quantity;
                } 
                else 
                {
                    $_SESSION["cart_item"][$productByCode[0]["id"]] = $itemArray;
                }
            } 
            else 
            {
                $_SESSION["cart_item"][$productByCode[0]["id"]] = $itemArray;
            }
        }

        $this->response->redirect('/', 200);
    }

    public function removeFromCart()
    {
        $product_quantity = (int) $_POST["quantity"];
        $product_id = (int) $_POST["id"];

        if (!$product_quantity OR !$product_id) return $this->response->redirect('/?');

        if (!empty($_SESSION["cart_item"])) 
        {
            if (in_array($product_id, array_keys($_SESSION["cart_item"]))) 
            {
                $cart_quantity = $_SESSION["cart_item"][$product_id]['quantity'];
                
                if ($cart_quantity > $product_quantity) 
                {
                    $_SESSION["cart_item"][$product_id]['quantity'] -= $product_quantity;
                } 
                else if ($cart_quantity == $product_quantity) 
                {
                    unset($_SESSION["cart_item"][$product_id]);
                }// Else alert invalid input...
            } 
        }

        $this->response->redirect('/');
    }
}
