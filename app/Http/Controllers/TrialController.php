<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trial;
use Faker\Generator as Faker;

class TrialController extends Controller
{
    public function index()
    {
        return Trial::all();
    }

    public function create(Faker $faker)
    {
        $trial = new Trial;
        $trial->name = $faker->name();
        $trial->email = $faker->unique()->safeEmail;
        $trial->country = $faker->country();
        $trial->postcode = $faker->postcode();
        $trial->address = $faker->address();
        $trial->company = $faker->company();
        $trial->jobTitle = $faker->jobTitle();
        $trial->phoneNumber = $faker->phoneNumber();
        $trial->URL = $faker->URL();
        $trial->ipv4 = $faker->ipv4();
        $trial->sentence = $faker->sentence();
        $trial->text = $faker->text();
        $trial->colorName = $faker->colorName();

        $trial->save();

        return Trial::all();
    }

    public function destroy()
    {
        Trial::query()->delete();
    
        return Trial::all();
    }    

}
