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
            $html = '<h1>Listagem de produtos</h1>';
            $html .= '<ul>';

            $produtos = DB::select('select * from produtos');

            foreach($produtos as $p){
                $html .='<li>Nome: '. $p->nome .',
                            Descrição: '. $p->descricao.'</li>';
            }
            $html .='</ul>';

            return $html;
        }
    }