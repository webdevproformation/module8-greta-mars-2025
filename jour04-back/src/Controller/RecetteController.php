<?php 

namespace App\Controller ;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RecetteController extends AbstractController{

    //  https://127.0.0.1:8000 
    //  https://127.0.0.1:8000?id=1 
    //  https://127.0.0.1:8000?id=2 
    #[Route("/", name: "json_all_recettes")]
    public function getAll(
        Request $request
    ){
        $recettes = [
            [ 
                "id" => 1,
                "nom" => "crêpe fromage",
                "prix" => 2,
                "ingredients" => [ "oeuf", "lait" , "beurre" ],
                "image" => "https://placehold.co/600x400?text=crêpe+fromage"
            ],
            [
                "id" => 2,
                "nom" => "pizza",
                "prix" => 5,
                "ingredients" => [ "tomate", "poivron" ],
                "image" => "https://placehold.co/600x400?text=pizza"
            ]
        ];
        $id = $request->query->get("id", null);
        if($id){
            $recettes = array_filter($recettes , function($recette) use ($id) {
                return $recette["id"] == $id; 
            });
        }
        return new JsonResponse($recettes , 200 , [
            'Access-Control-Allow-Origin'=> '*'
        ]); 
    }


}
