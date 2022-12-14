<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use App\SuperHero;

class SuperHerosController extends Controller
{
    
    public function show(Request $request)
    {
        $data = $request->all();
        if (count($data)>0) 
        {
            
            
            $superHeros = SuperHero::id($request->get('id'))
                                ->name($request->get('name'))
                                ->fullName($request->get('fullName'))
                                ->strength($request->get('strength'))
                                ->speed($request->get('speed'))
                                ->durability($request->get('durability'))
                                ->power($request->get('power'))
                                ->combat($request->get('combat'))
                                ->race($request->get('race'))
                                ->height_1($request->get('height_1'))
                                ->weight_1($request->get('weight_1'))
                                ->eyeColor($request->get('eyeColor'))
                                ->hairColor($request->get('hairColor'))
                                ->publisher($request->get('publisher'))
                                ->order($request->get('order'))
                                ->paginate($request->get('paginate'));
            return response($superHeros);

        }else
        {
       
            $superHeros     =  SuperHero::paginate(15);
            
             if(count($superHeros)<= 0){
                return response()->json(['error' => 'The SuperHeroes table is empty'], 404);

            }else{
                return response($superHeros);
            }
        }
    }

}