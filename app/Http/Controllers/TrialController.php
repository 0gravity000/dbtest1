<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trial;
use Faker\Generator as Faker;

class TrialController extends Controller
{
    public function index(Faker $faker)
    {
        $trial = new Trial;
        $trial->name = $faker->name();
        $trial->email = $faker->unique()->safeEmail;
        $trial->save();

        return Trial::all();
    }

    public function destroy()
    {
        Trial::query()->delete();
    
        return Trial::all();
    }    

}
