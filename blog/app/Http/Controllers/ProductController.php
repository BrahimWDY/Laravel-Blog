<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        return view('accueil',[
            "Products" => Products::all()
        ]);
    }

    public function create(){
        $name = request("name");
        $description = request("description");
        $price = request("price");

        if ((!empty($name)) or (!empty($description)) or (!empty($price))){

            $NewArticle = new Products();
            $NewArticle->name = $name;
            $NewArticle->description = $description;
            $NewArticle->price = $price;
            $NewArticle->save();
            return redirect("/");
        }
        return view ('post');
    }

    public function view($id){
        return view("Article", [
            "Product"=>Products::find($id),
        ]);
    }

    public function edit($id){

        $name = request("name");
        $description = request("description");
        $price = request("price");

        $error = "";

        if ((!empty($name)) or (!empty($description)) or (!empty($price))){

            if( empty($name) ){
                $error = "Erreur : Veuillez saisir un titre !";
                return view('edit', [
                    'produit' => Products::find($id),
                    'error' => $error,
                ]);
            }
            if( empty($description) ){
                $error = "Erreur : Veuillez saisir une description !";
                return view('edit', [
                    'produit' => Products::find($id),
                    'error' => $error,
                ]);
            }
            if( empty($price) ){
                $error = "Erreur : Veuillez saisir un prix !";
                return view('edit', [
                    'produit' => Products::find($id),
                    'error' => $error,
                ]);
            }

            $produit = Products::find($id);
            $produit->name = request("name");
            $produit->description = request("description");
            $produit->price = request("price");
            $produit->save();

            return redirect()->Route('article',[$id]);

        }
        return view('edit',[
            'produit' => Products::find($id),
            'error' => $error,
        ]);

    }

    public function delete($id){
        $produitdel = Products::find($id);
        $produitdel->delete();
        return redirect("/");
    }

}
