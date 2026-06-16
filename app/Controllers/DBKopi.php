<?php

namespace App\Controllers;

use App\Models\KopiModel;
use CodeIgniter\Controller;

class DBKopi extends Controller
{
    protected $db_kopi;
    protected $session;

    public function __construct() {
        $this->db_kopi = new KopiModel();
        $this->session = \Config\Services::session();
        $this->session->start();
    }

    public function index()
    {
        // Check for the request method
        $requestMethod = $this->request->getMethod(true);

        if ($requestMethod === 'POST') {
            $this->add();
        } elseif ($requestMethod === 'GET') {
            $action = $this->request->getGet('action');
            if ($action) {
                switch ($action) {
                    case "remove":
                        $this->remove();
                        break;
                    case "empty":
                        $this->empty();
                        break;
                }
            }

            $getData = $this->db_kopi->findAll();
            $data = [
                'data' => $getData,
                'cart' => $this->session->get('cart_item')
            ];

            return view('content/Kopi/Cart', $data);
        }
    }

    public function add() {
        $code = $this->request->getGet('code');
        $quantity = $this->request->getPost('quantity');

        if (!empty($quantity)) {
            $productByCode = $this->db_kopi->where('code', $code)->findAll();
            if ($productByCode) {
                $itemArray = array($productByCode[0]['code'] => array(
                    'name' => $productByCode[0]['name'],
                    'code' => $productByCode[0]['code'],
                    'quantity' => $quantity,
                    'price' => $productByCode[0]['price'],
                    'image' => $productByCode[0]['image']
                ));

                $cart = $this->session->get('cart_item');
                if (!empty($cart)) {
                    if (array_key_exists($productByCode[0]['code'], $cart)) {
                        $cart[$productByCode[0]['code']]['quantity'] += $quantity;
                    } else {
                        $cart = array_merge($cart, $itemArray);
                    }
                } else {
                    $cart = $itemArray;
                }

                $this->session->set('cart_item', $cart);
            }
        }

        // Redirect back to the index method to display the cart
        return redirect()->to(site_url('DBKopi'));
    }

    public function remove() {
        $code = $this->request->getGet('code');
        $cart = $this->session->get('cart_item');

        if (!empty($cart)) {
            unset($cart[$code]);
            if (empty($cart)) {
                $this->session->remove('cart_item');
            } else {
                $this->session->set('cart_item', $cart);
            }
        }

        // Redirect back to the index method to display the cart
        return redirect()->to(site_url('DBKopi'));
    }

    public function empty() {
        $this->session->remove('cart_item');

        // Redirect back to the index method to display the cart
        return redirect()->to(site_url('DBKopi'));
    }
    //Controller untuk menu pada website kopi
    public function Utama() {
        return view('content/Kopi/index');
    }

    public function Menu() {
        return view('content/Kopi/menu');
    }

    public function contact() {
        return view('content/Kopi/contact');
    }

    public function produk() {
        return view('content/Kopi/produk');
    }
}

