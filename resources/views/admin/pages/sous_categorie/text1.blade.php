@extends('admin.admin_app')

@section('content')

    <!-- Add Modal -->
    <div class="modal fade" id="small-Modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="width: 150%;">
                <div class="modal-header">
                    <h4 class="modal-title">Itransmissions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Nouvelle Catégorie</h5>
                    <ul id="save_msgList"></ul>

                    <div class="form-group mb-3">
                        <label for="">Libelle</label>
                        <input type="text" required class="libelle form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Slug</label>
                        <input type="text" required class="slug form-control">
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light add_student">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modifier la categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">

                    <ul id="update_msgList"></ul>

                    <input type="hidden" id="stud_id" />

                    <div class="form-group mb-3">
                        <label for="">Libelle Categorie</label>
                        <input type="text" id="libelle" required class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Slug</label>
                        <input type="text" id="slug" required class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary update_student">Modifier</button>
                </div>

            </div>
        </div>
    </div>
    {{-- Edn- Edit Modal --}}

    {{-- Delete Modal --}}
    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppression de la catégorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Etes vous sûre de vouloir supprimer cette categorie ?</h4>
                    <input type="hidden" id="deleteing_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary delete_student">Oui</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End - Delete Modal --}}


    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>itransmissions</h4>
                        <span>Liste des categories</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">Accueil</a></li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="card">

            <div class="card-header">
                <h5>Distribution-négoce et prestations</h5>
                <span>
                   Distribution-négoce et prestations
                </span>
                <div class="row">
                    <div class="col-md-4"></div>
                    
                    <div class="col-md-6" style="margin-top: -6%" id="success_message"></div>
    
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" id="AddStudentModalLabel" data-target="#small-Modal">Ajouter +</button>
                    </div>

                </div>
            </div>

            <div class="card-block"><!--dom-jqry-->
                <div class="table-responsive dt-responsive">
                    <table id="dom-jqry" class="table table-striped table-bordered nowrap" style="width: 100%;" >
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody></tbody>

                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>

                    </table>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>

    $(document).ready(function () {

        fetchstudent();

        function fetchstudent() {
            $.ajax({
                type: "GET",
                url: "/fetch-categories",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.categories, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>' + item.id + '</td>\
                            <td>' + item.libelle + '</td>\
                            <td>' + item.slug + '</td>\
                            \
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button> <button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                           \
                        \</tr>');
                    });
                }
            });
        }

        $(document).on('click', '.add_student', function (e) {
            e.preventDefault();

            $(this).text('Chargement...');

            var data = {
                'libelle': $('.libelle').val(),
                'slug': $('.slug').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                type: "POST",
                url: "/categories",
                data: data,
                dataType: "json",

                success: function (response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_student').text('Save');
                    } else {
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#small-Modal').find('input').val('');
                        $('.add_student').text('Save');
                        $('#small-Modal').modal('hide');
                        fetchstudent();
                    }
                }
            });

        });

        $(document).on('click', '.editbtn', function (e) {

            e.preventDefault();
            var stud_id = $(this).val();
            //alert(stud_id);
            $('#editModal').modal('show');
            $.ajax({
                type: "GET",
                url: "/edit-categorie/" + stud_id,
                success: function (response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                        //console.log(response.categorie.libelle);
                        $('#libelle').val(response.categorie.libelle);
                        $('#slug').val(response.categorie.slug);
                        $('#stud_id').val(stud_id);
                    }
                }
            });
            $('.btn-close').find('input').val('');

        });

        $(document).on('click', '.update_student', function (e) {
            e.preventDefault();

            $(this).text('Updating..');
            var id = $('#stud_id').val();
            // alert(id);

            var data = {
                'libelle': $('#libelle').val(),
                'slug': $('#slug').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update-categorie/" + id,
                data: data,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_student').text('Update');
                    } else {
                        $('#update_msgList').html("");

                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').find('input').val('');
                        $('.update_student').text('Update');
                        $('#editModal').modal('hide');
                        fetchstudent();
                    }
                }
            });

        });

        $(document).on('click', '.deletebtn', function () {
            var stud_id = $(this).val();
            $('#DeleteModal').modal('show');
            $('#deleteing_id').val(stud_id);
        });


        $(document).on('click', '.delete_student', function (e) {
            e.preventDefault();

            $(this).text('Suppression...');
            var id = $('#deleteing_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "DELETE",
                url: "/delete-categorie/" + id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        fetchstudent();
                    }
                }
            });
        });

    });

</script>





<!---categorie Controller--->


<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller
{

    
    function admin_index(){
        $cats = Categorie::all();
        return view('admin.pages.categorie.cat_add',compact('cats'));
    }


    public function fetchcategorie(){
        $categories = Categorie::orderBy('id','DESC')->get();
        return response()->json([
            'categories'=>$categories,
        ]);
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
            $categories->slug = $request->input('slug');
            $categories->save();
            return response()->json([
                'status'=>200,
                'message'=>'Categorie ajoutée avec success'
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

        if($validator->fails())
        {
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