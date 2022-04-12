<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategorieController extends Controller{


    function admin_index(){
        return view('admin.pages.categorie.cat_add');
    }


    public function fetchcategorie(){

        /* $categories = Categorie::orderBy('id','DESC')->get();
        return response()->json([
            'categories'=>$categories,
        ]); */

        $categories = Categorie::query()->where('libelle','!=' , 'categorie')->get();
        //dd($categories);
		$output = '';
		if ($categories->count() > 0) {
			$output .= '<table id="dom-jqry"  class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>libelle</th>
                <th>slug</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
                foreach ($categories as $item) {
                    $output .= '<tr>
                    <td>' . $item->id . '</td>
                    <td>' . $item->libelle . '</td>
                    <td>' . $item->slug . '</td>
                    <td>
                    <a href="#" id="' . $item->id . '" class="text-success  mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                    <a href="#" id="' . $item->id . '" class="text-danger  mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                </tr>';
                }
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}


    }


    function add_cat(Request $request){

        $validator = Validator::make($request->all(), [
            'libelle'=> 'required|max:191',
            'slug'   =>'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->errors()
            ]);
        }
        else{
            $categories = new Categorie;
            $categories->libelle = $request->input('libelle');
            $categories->slug    = $request->input('slug');
            $categories->save();
            return response()->json([
                'status'=>200,
                'message'=>'Vous avez ajouté une catégorie!'
            ]);
        }

    }


    public function edit($id){
        $categorie = Categorie::find($id);
        if($categorie)
        {
            return response()->json([
                'status'=>200,
                'categorie'=> $categorie,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }

    }


    public function update(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'libelle'=> 'required|max:191',
            'slug'=>'required|max:191',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->errors()
            ]);
        }
        else{
            $categories = Categorie::find($id);
            if($categories)
            {
                $categories->libelle = $request->input('libelle');
                $categories->slug = $request->input('slug');
                $categories->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Student Found.'
                ]);
            }

        }
    }


    public function destroy($id){
        $categories = Categorie::find($id);
        if($categories)
        {
            $categories->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Suppression de la Categorie effctuée avec succèss.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }
    }


    public function autosearch(Request $request)
    {
        if ($request->ajax()) {
            $data = Categorie::where('libelle','LIKE',$request->libelle.'%')->get();
            $output = '';
            if (count($data)>0) {
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                foreach ($data as $row) {
                    $output .= '<li class="list-group-item">'.$row->name.'</li>';
                }
                $output .= '</ul>';
            }else {
                $output .= '<li class="list-group-item">'.'Aucune donnée trouvée'.'</li>';
            }
            return $output;
        }
        return view('autosearch');
    }


}
