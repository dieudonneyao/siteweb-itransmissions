<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Sous_Categorie;
use Illuminate\Support\Facades\Validator;


class Sous_CategorieController extends Controller
{

    function index(){
        $categories      = Categorie::all();
        $sous_categories = Sous_Categorie::all();

        return view('admin.pages.sous_categorie.s_cat',compact('categories','sous_categories'));
    }


    function fetch_subcategories(){

        $s_categories = Sous_Categorie::orderBy('id','DESC')->get();
        //dd($s_categories);

    
        /* return response()->json([
            's_categories'=>$s_categories,
        ]); */

		$output = '';

		if ($s_categories->count() > 0) {
			$output .= '<table id="dom-jqry" class="table table-striped table-bordered nowrap" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>libelle</th>
                <th>Categorie</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($s_categories as $item) {
				$output .= '<tr>
                <td>' . $item->id . '</td>
                <td>' . $item->nom . '</td>

                <td>' . $item->categorie->libelle . '</td>

                <td>
                  <a href="#" id="' . $item->id . '" class="text-success  mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $item->id . '" class="text-danger  mx-1 deletedIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}

		/* if ($s_categories->count() > 0) {
			$output .= '<table id="dom-jqry" class="table table-striped table-bordered nowrap" style="width:100%"">
            <thead>
              <tr>
                <th>Id</th>
                <th>Sous_categorie</th>
                <th>categorie_id</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($s_categories as $item) {

                # code...
                $output .= '<tr>
                    <td>' . $item->id . '</td>
                    <td>' . $item->nom . '</td>
                    <td>' . $item->categorie_id . '</td>
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
		} */


        /* $sous_categories = Sous_Categorie::query()->with('categorie')->get();
        dd($sous_categories);
        $x = $sous_categories->categorie()->first();
        dd($x); */

    }


    function store(Request $request){

        $validator = Validator::make($request->all(), [
            'nom'          => 'required|max:191',
            'categorie_id' =>'required|max:50',
        ]);

        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->errors()
            ]);
        }
        else{
            $s_categories = new Sous_Categorie();
            $s_categories->nom = $request->input('nom');
            $s_categories->categorie_id  = $request->input('categorie_id');
            $s_categories->save();
            return response()->json([
                'status'=>200,
                'message'=>'Vous avez ajouté une sous-catégorie!'
            ]);
        }

    }



    function edit($id){
        $s_categorie = Sous_Categorie::find($id);
        if($s_categorie){
            return response()->json([
                'status'=>200,
                's_categorie'=> $s_categorie,
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
            'nom'=> 'required|max:191',
            'categorie_id'=>'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->errors()
            ]);
        }
        else{
            $s_categories = Sous_Categorie::find($id);
            if($s_categories)
            {
                $s_categories->nom = $request->input('nom');
                $s_categories->categorie_id = $request->input('categorie_id');
                $s_categories->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Subcategorie Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Aucun element trouvé.'
                ]);
            }

        }
    }



    public function destroy($id){

        $s_categories = Sous_Categorie::find($id);
        if($s_categories){
            $s_categories->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Suppression de la sous-Categorie effectuée avec succèss.'
            ]);
        }
        else{
            return response()->json([
                'status'=>404,
                'message'=>'Aucun element trouvé'
            ]);
        }

    }


}
