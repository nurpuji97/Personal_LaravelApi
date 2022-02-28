<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CardTestimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    // read card testimoni
    public function Testimoni(){
        $cardTestimoni = CardTestimoni::all();
        
        return response()->json([
            'message' => 'Success',
            'data' => $cardTestimoni
        ], 200);
    }

    // create card testimoni
    public function CreateTestimoni(Request $request){

        // rules
        $rules = array(
            'nama' => 'required',
            'photo' => 'required',
            'jabatan' => 'required|max:15',
            'description' => 'required|max:100',
            'rating' => 'max:5'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $card_testimoni = CardTestimoni::create($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $card_testimoni
        ], 200);

    }

    // delete testimoni
    public function DeleteTestimoni($id){

        // hapus
        CardTestimoni::find($id)->delete();

        // response json
        return response()->json([
            'messages' => 'Berhasil dihapus'
        ], 200);

    }
}
