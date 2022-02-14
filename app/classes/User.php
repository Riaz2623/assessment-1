<?php


namespace App\classes;
class User
{
    public function getAllUser()
    {
        return [
            0 => [
                'id'=> 1,
                'name' => 'Riaz',
                'email' => 'r@gmail.com',
                'password'=> '1234567'
            ],
            1 => [
                'id'=> 2,
                'name' => 'Rahat',
                'email' => 'ra@gmail.com',
                'password'=> '12345678'
            ],
            2 => [
                'id'=> 3,
                'name' => 'Riaj',
                'email' => 'ri@gmail.com',
                'password'=> '123456789'
            ],
            3 => [
                'id'=> 4,
                'name' => 'Rauf',
                'email' => 'rau@gmail.com',
                'password'=> '1234567890'
            ],
        ];
    }

}