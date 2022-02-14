<?php


namespace App\classes;
class Product
{

    protected $id;
    protected $result;
    protected $products = [];

    public function __construct($post=null)
    {
        $this->id = $post['search'];
    }

    public function getAllProduct()
    {
        return [
            0 =>[
                'id'=> 1,
                'title' => 'Blajer',
                'description' => 'Winter Product',
                'price' => 'Tk. 5000',
                'image'=> 's1.jpg'
            ],
            1 =>[
                'id'=> 2,
                'title' => 'T shirt',
                'description' => 'Half Sleev',
                'price' => 'Tk. 6000',
                'image'=> 's2.jpg'
            ],
            2 =>[
                'id'=> 3,
                'title' => 'Shirt',
                'description' => 'Full Hata',
                'price' => 'Tk. 1000',
                'image'=> 's3.jpg'
            ],
            3 =>[
                'id'=> 4,
                'title' => 'Pant',
                'description' => 'Full Pant',
                'price' => 'Tk. 2000',
                'image'=> 's4.jpg'
            ],
            4 =>[
                'id'=> 5,
                'title' => 'Pant Formal',
                'description' => 'Formal Pant',
                'price' => 'Tk. 4000',
                'image'=> 's5.jpg'
            ],
            5 =>[
                'id'=> 6,
                'title' => 'Shirt Formal',
                'description' => 'Shirt cotton',
                'price' => 'Tk. 1500',
                'image'=> 's6.jpg'
            ],

        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
    public function getProductBySearchId()
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($this->id == $product['id'])
            {
                $this->result = $product;
                break;
            }
        }
        return $this->result;
    }

}