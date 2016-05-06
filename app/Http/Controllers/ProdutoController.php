<?php namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

/**
 * Created by PhpStorm.
 * User: Lucca
 * Date: 05/05/2016
 * Time: 14:10
 */

    class ProdutoController extends Controller{
        public function lista(){

            $produtos = DB::select('SELECT * FROM produtos');

            /*return view('listagem')->with('produtos', $produtos);*/
            /*return view('listagem')->withProdutos($produtos);*/
            $data = ['produtos' => $produtos];
            return view('listagem', $data);


           /*if(view()->exists('listagem')){
               return view('listagem');
           }*/
        }
        public function mostra(){
            $id = Request::input('id', '0');
            $resposta = DB::select('SELECT * FROM produtos WHERE id = ?',[$id]);
            if(empty($resposta)){
                return"Esse produto não existe";
            }
            return view('detalhes')->with('p', $resposta[0]);
        }
    }