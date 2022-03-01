<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CardTestimoni;
use App\Models\Project;
use App\Models\Saran;
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


    // Project
    public function Project(){
        $project = Project::paginate(10);

        return response()->json([
            'message' => 'Success',
            'data' => $project
        ], 200);
    }

    // create project
    public function CreateProject(Request $request){

        // rules
        $rules = array(
            'name' => 'required',
            'photo' => 'required',
            'description' => 'required',
            'tanggal_selesai' => 'required|date',
            'author' => 'required',
            'link_download' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $project = Project::create($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $project
        ], 200);

    }

    // edit project
    public function EditProject($id){
        $project = Project::find($id);

        return response()->json([
            'message' => 'Success',
            'data' => $project
        ], 200);
    }

    // update project
    public function UpdateProject(Request $request, $id){

        // dari data project berdasarkan id
        $project = Project::find($id);

        // rules
        $rules = array(
            'name' => 'required',
            'photo' => 'required',
            'description' => 'required',
            'tanggal_selesai' => 'required|date',
            'author' => 'required',
            'link_download' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        // update data
        $project->update($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $project
        ], 200);

    }

    // delete Project
    public function DeleteProject($id){

        // delete
        Project::find($id)->delete();

        // response json
        return response()->json([
            'messages' => 'Berhasil dihapus'
        ], 200);

    }


    // saran
    public function Saran(){
        $saran = Saran::paginate(10);

        return response()->json([
            'message' => 'Success',
            'data' => $saran
        ], 200);
    }
    
    // create saran
    public function CreateSaran(Request $request){

        // rules
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $saran = Saran::create($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $saran
        ], 200);

    }
}
