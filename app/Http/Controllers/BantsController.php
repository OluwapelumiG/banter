<?php

namespace App\Http\Controllers;

use App\Models\Bants;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BantsController extends Controller
{
    //
    public function create(Request $request): RedirectResponse
    {

        $newBant = Bants::create([
            'title' => $request->title,
        ]);

        return redirect('bants/'.$newBant->id);

    }



}
