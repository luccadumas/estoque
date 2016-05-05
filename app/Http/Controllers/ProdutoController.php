<?php namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
/**
 * Created by PhpStorm.
 * User: Lucca
 * Date: 05/05/2016
 * Time: 14:10
 */
    class ProdutoController extends Controller{
        public function lista(){

            $produtos = DB::select('SELECT * FROM produtos');

            return view('listagem')->with('produtos', $produtos);
            /*return view('listagem')->withProdutos($produtos);*/
        }
    }