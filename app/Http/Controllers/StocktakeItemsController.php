<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

use App\Http\Controllers\Controller;
use App\Models\StocktakeItems;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class StocktakeItemsController extends Controller
{
    //
    public function store(Request $request): RedirectResponse
    {
        /*
        ---
        STOCKTAKE *ITEM* SECTION
        ---
        */

        ////
        //  Get logged in user email
        /////
        $email = auth()->user()->email;

        ////
        //  Get the category of items being stored
        ////
        $request->validate([
            'category'=>['required', 'string', 'max:100'],
        ]);

        $category = $request->category;

        ////
        //  Get stocktake items and store each item
        ////
        //Loop through every stocktake item that needs to be stored
        for($i=0; $i<10 ; $i++){

            $currentItemName = 'item_name'.$i;
            $currentNoOfItems = 'no_of_items'.$i;
            $currentAmountOfItems = 'amount_of_item'.$i;
            $currentUnits = 'units'.$i;

            //If there is no input, stop looping
            if($request->$currentItemName==null){
                break;
            }

            //Validate input
            $request->validate([
                $currentItemName=>['required','string', 'max:100'],
                $currentNoOfItems=>['required', 'max:100'],
                $currentAmountOfItems=>['required', 'max:100'],
                $currentUnits=>['required','string', 'max:100'],
            ]);

            //Create new StocktakeItems object and save it
            $stocktakeItem = StocktakeItems::create([
                'category'=> $category,
                'companyemail'=>$email,

                'item_name' => $request->$currentItemName,
                'no_of_items'=> $request->$currentNoOfItems,
                'amount_of_item'=>$request->$currentAmountOfItems,
                'units'=>$request->$currentUnits
            ]);

            event(new Registered($stocktakeItem));

        }

        ////
        //  Redirect
        ////
        $messageArray = array("mesage"=>"Successfully saved 10 items.");

        return redirect()->route('kitchen')->with($messageArray);
    }
}
