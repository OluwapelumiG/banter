<?php

namespace App\Http\Controllers;

use App\Models\Bants;
use Illuminate\Http\RedirectResponse;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // view messages
    public function view(Request $request, $bant)
    {
        $data['bants'] = $bants = Bants::where('id', $bant)
                        ->first();

        $data['messages'] = $messages = Messages::where('bant', $bant)
                                                    ->where('type', 'message')->get();

    //    print_r($data);
        return view('messages', $data);
    }

    // Create message
    public function create(Request $request): RedirectResponse
    {

        Messages::create([
            'bant' => $request->bant,
            'type' => $request->type,
            'ref' => $request->ref,
            'message' => $request->message,
        ]);

        return redirect('bants/'.$request->bant);

    }
}
