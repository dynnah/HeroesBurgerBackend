<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new Product;
        $products->nome = 'TONY - Ancho Burger';
        $products->descricao = 'Pão de batata artesanal, dois blends de carnes de costela (180g cada), geleia de bacon, queijo prato, picles e molho especial HEROES.';
        $products->preco = 23.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'PETER – The “Bronx” Skirt Steark';
        $products->descricao = 'Pão brioche artesanal para Hambúrguer, blend de fraldinha (200g), queijo prato, salada de alface e tomate verde e molho especial HEROES.';
        $products->preco = 19.50;
        $products->tipo = 'Burger';
        $products->save();

        $products = new Product;
        $products->nome = 'Batata-Frita';
        $products->descricao = 'Batata crinckle temperada com páprica e sal';
        $products->preco = 9.00;
        $products->tipo = 'Acompanhamento';
        $products->save();

        $products = new Product;
        $products->nome = 'Coca-Cola';
        $products->descricao = 'Lata de 350ml';
        $products->preco = 4.50;
        $products->tipo = 'Bebidas';
        $products->save();
    }
}
