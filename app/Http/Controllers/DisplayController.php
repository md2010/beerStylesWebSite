<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beer;
use App\Models\Article;

class DisplayController extends Controller
{
    
    public function showHomeIntro()
    {
        $data = Article::all()->pluck('text')->toArray();
        return view('pages/home', compact('data'));
    }

    public function showAle()
    {
        $data = Article::where('id', '13')->get();
        return view('pages/ale', compact('data'));
    }

    public function showLager()
    {
        $data = Article::where('id', '14')->get();
        return view('pages/lager', compact('data'));
    }

    public function showCharacteristics() 
    {
        $data = Article::all()->pluck('text')->toArray();
        return view('pages/characteristics', compact('data'));
    }

    public function showPaleAle()
    {
        $data = Beer::where('styleFamily', 'Pale Ale')->get();
        return view('pages/paleAle', compact('data'));
    }

    public function showStout()
    {
        $data = Beer::where('styleFamily', 'Stout')->get();
        return view('pages/paleAle', compact('data'));
    }
  
    public function showBelgian()
    {
        $data = Beer::where('styleFamily', 'Belgian Style')->get();
        return view('pages/belgianStyle', compact('data'));
    }

    public function showStrongAle()
    {
        $data = Beer::where('styleFamily', 'Strong Ale')->get();
        return view('pages/strongAle', compact('data'));
    }

    public function showPorter()
    {
        $data = Beer::where('styleFamily', 'Porter')->get();
        return view('pages/porter', compact('data'));
    }

    public function showIPA()
    {
        $data = Beer::where('styleFamily', 'India Pale Ale')->get();
        return view('pages/IPA', compact('data'));
    }

    public function showDarkLager()
    {
        $data = Beer::where('styleFamily', 'Dark Lager')->get();
        return view('pages/darkLager', compact('data'));
    }

    public function showScotishStyle()
    {
        $data = Beer::where('styleFamily', 'Scottish-Style Ale')->get();
        return view('pages/scotishStyle', compact('data'));
    }

    public function showBock()
    {
        $data = Beer::where('styleFamily', 'Bock')->get();
        return view('pages/bock', compact('data'));
    }

    public function showPilsnersAndPaleLager()
    {
        $data = Beer::where('styleFamily', 'Pilsners and Pale Lager')->get();
        return view('pages/pilsnersAndPaleLager', compact('data'));
    }

    public function showSpecialty()
    {
        $data = Beer::where('styleFamily', 'Specialty Beer')->get();
        return view('pages/specialty', compact('data'));
    }

    public function showBrownAle()
    {
        $data = Beer::where('styleFamily', 'Brown Ale')->get();
        return view('pages/brownAle', compact('data'));
    }

    public function showWheatBeer()
    {
        $data = Beer::where('styleFamily', 'Wheat Beer')->get();
        return view('pages/wheatBeer', compact('data'));
    }

    public function showWildAle()
    {
        $data = Beer::where('styleFamily', 'Wild/Sour Beer')->get();
        return view('pages/wildAle', compact('data'));
    }

    
}
