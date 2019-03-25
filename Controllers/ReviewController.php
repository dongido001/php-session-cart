<?php
namespace App\Controllers;

require_once 'Controller.php';

use App\Controllers\Controller;

class ReviewController extends Controller
{
    function addReview()
    {
        $product_id = $_POST['product_id'];
        $review = $_POST['review'];
        $session_id = session_id();

        if ($product_id) 
        {
            $sql = $sql = "SELECT * FROM reviews WHERE sess_id ='$session_id' AND product_id='$product_id'";
            $reviews = $this->runQuery($sql);

            if (!$reviews) 
            {
                $sql = "INSERT INTO reviews (product_id, sess_id, review) VALUES ('$product_id', '$session_id', '$review')";
                $result = $this->runQuery($sql);
            } 
            else 
            {
                $sql = $sql = "UPDATE reviews SET review='$review' WHERE sess_id='$session_id' AND product_id='$product_id'";
                $result = $this->runQuery($sql);
            }
        }

        echo $this->response->json([
            "status" => "success",
            "message" => "Updated"
        ]);
    }
}
