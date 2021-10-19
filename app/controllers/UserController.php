<?php 

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new User();
        $product->read($id);

        // require_once APP_ROOT . '/views/product.php';
	}
}