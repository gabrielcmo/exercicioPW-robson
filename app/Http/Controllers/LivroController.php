<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public function index(){
        $products = Livro::all();
        return view('produtos')->with('products', $products);
    }

    public function add(Request $request){
        $livro = new Livro();

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
        
        // Recupera a extensão do arquivo
        $extension = $request->image->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        $upload = $request->image->storeAs('images', $nameFile);

        $livro->image = $nameFile;

        $livro->name = $request->name;
        $livro->price = $request->price;
        $livro->save();

        return redirect('/produtos');
    }

    public function delete(Request $r){
        Livro::destroy($r->id);
        return redirect('/produtos');
    }

    public function formAdd(){
        return view('formAdd');
    }

    public function formRemove(){
        return view('formRemove')->with('products', Livro::all());
    }
}
