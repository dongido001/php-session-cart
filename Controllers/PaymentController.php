<?php
namespace App\Controllers;

require_once 'Controller.php';

use App\Controllers\Controller;

class PaymentController extends Controller
{

   private $transport = [ 
        [ 'id' => 0, 'name' => 'pick up', 'price' => 0], 
        [ 'id' => 1, 'name' => 'UPS', 'price' => 5], 
   ];

    public function showBuyPage()
    {
        return $this->twig()->render('buy.html', [
            'cart_item' => $_SESSION['cart_item'],
            'transports' => $this->transport,
            'credit' => $_SESSION['credit'],
        ]);
    }

    public function makePayment() {
        $transport_id = $_POST['transport'];
        $items = $_SESSION['cart_item'];
        $balance = $_SESSION['credit'];
        
        // Get the transport type selected 
        $trans = array_values(array_filter($this->transport, function ($data) use($transport_id) {
            return $data['id'] == (int) $transport_id;
        }));


        if (isset($transport_id) && is_array($trans[0]) ) 
        { 
            $total_price = 0;
            foreach ($items as $item) 
            {
                $total_price += $item['price'] * $item['quantity'];
            }
          
            $total_price += $trans[0]['price'];
            
            if ( $balance >= $total_price) {
               $_SESSION['credit'] = $balance - $total_price;
               $_SESSION['cart_item'] = null;
               // Alert the user of sucessfull payment
            }
            else 
            {
                // Alert the user!
            }
        }

        $this->response->redirect('/', 200);
    }
}
