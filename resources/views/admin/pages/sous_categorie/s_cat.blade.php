@extends('admin.admin_app')

@section('content')


    <!-- Add s_cat Modal -->
    {{-- <div class="modal fade" id="s_categorieModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout sous_categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body p-4 bg-light">

                    <ul id="save_msgList"></ul>

                    <div class="row">
                        <div class="col-lg">
                            <label for="lname">Sous-Categorie</label>
                            <input type="text" class="nom form-control" placeholder="sous_categorie" required>
                        </div>
                        <div class="col-lg">
                            <label for="lname">Categorie</label>
                            <select class="categorie_id form-control" required>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary " class="btn btn-success add_subcategorie">Soumettre</button>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- Add s_cat Modal -->

    <div class="modal fade" id="s_categorieModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="width: 150%;">
                <div class="modal-header">
                    <h4 class="modal-title">Itransmissions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5></h5>
                    <ul id="save_msgList"></ul>

                    <div class="form-group mb-3">
                        <label for="">Libelle</label>
                        <input type="text" required class="nom form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="lname">Categorie</label>
                        <select class="categorie_id form-control" required>
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light add_subcategorie">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div class="modal fade" id="s_editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit & Update Student Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <input type="hidden" name="s_categorie_id" id="s_categorie_id">


                <div class="modal-body">
                    <ul id="update_msgList"></ul>

                    <div class="form-group mb-3">
                        <label for="">Libelle Sous-Categorie</label>
                        <input type="text" name="nom" id="nom" placeholder="nom"  class="form-control">
                    </div>

                    {{--  <div class="form-group mb-3">
                        <label for="">Categorie</label>
                        <input type="text" name="categorie_id" id="categorie_id" required class="form-control">
                    </div> --}}

                    <select class="form-control" required name="categorie_id" id="categorie_id">
                        @foreach ($categories as $item)
                            <option value="{{$item->id}}" selected>{{$item->libelle}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary update_s_cat">Modifier</button>
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
            <div class="col-lg-6">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>itransmissions</h4>
                        <span>Liste des sous-categories</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item" style="float: left;">
                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item" style="float: left;"><a href="{{route('scat')}}">Accueil</a></li>
                        <li class="breadcrumb-item" style="float: left;"><a href="#!">sous-categories</a></li>
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
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-6" style="margin-top: -6%" id="success_message"></div>
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" id="AddStudentModalLabel" data-target="#s_categorieModal">Ajouter +</button>
                </div>
            </div>

            <div class="card-block"><!--dom-jqry-->
                <div class="table-responsive dt-responsive" id="show_all_s_categorie">
                    <table id="dom-jqry" class="table table-striped table-bordered nowrap" style="width:100%"></table>
                    <h1 class="text-center text-secondary my-5">Loading...</h1>
                </div>
            </div>

        </div>

    </div>


@endsection


@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>


<script>

    $(document).ready(function() {

        // fetch all sous_categories ajax request
        fetchAllSous_Categorie();

        function fetchAllSous_Categorie(){
            $.ajax({
                url: "/fetch-subcategories",
                method: 'get',
                success: function(response) {
                    $("#show_all_s_categorie").html(response);
                    $("table").DataTable({
                        order: [0, 'desc']
                    });
                }
            });
        }


        $(document).on('click', '.add_subcategorie', function (e) {

            e.preventDefault();

            $(this).text('Chargement...');

            var data = {
                'nom': $('.nom').val(),
                'categorie_id': $('.categorie_id').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/sous_categories",
                data: data,
                dataType: "json",

                success: function (response) {
                    //console.log(response);
                    if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_subcategorie').text('Save');
                    } else {

                        Swal.fire(
                            'Ajouté !',
                            'Vous avez ajouté une sous-catégorie!',
                            'success'
                        )
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#s_categorieModal').find('input').val('');
                        $('.add_subcategorie').text('Save');
                        $('#s_categorieModal').modal('hide');
                        fetchAllSous_Categorie();
                    }
                }
            });

        });


        // edit sous-categorie ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            $('#s_editModal').modal('show');
            let s_categorie_id = $(this).attr('id');
            //alert(s_categorie_id)
            $.ajax({
                url: "/edit_sous_categorie/" + s_categorie_id,
                method: 'get',
                data: {
                id: s_categorie_id,
                _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#nom").val(response.s_categorie.nom);
                    $("#categorie_id").val(response.s_categorie.categorie_id);
                    $("#s_categorie_id").val(s_categorie_id);
                }
            });
        });

        // update employee ajax request
        $(document).on('click', '.update_s_cat', function (e) {
            e.preventDefault();

            $(this).text('Updating..');
            var s_categorie_id = $('#s_categorie_id').val();
            //alert(s_categorie_id);

            var data = {
                'nom': $('#nom').val(),
                'categorie_id': $('#categorie_id').val(),
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "PUT",
                url: "/update_sous_categorie/" + s_categorie_id,
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Updated!',
                            'Sous categorie modifiée avec succès!',
                            'success'
                        )
                        fetchAllSous_Categorie();
                    }
                    $("#update_s_cat").text('Update Categorie');
                    //$("#edit_categorie_form")[0].reset();
                    $("#s_editModal").modal('hide');
                }
            });



        });

        //delete sous_categorie ajax request
        $(document).on('click', '.deletedIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
            title: 'Etes vous sûre?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Supprimer!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url: "/delete_sous_categorie/" + id,
                method: 'delete',
                data: {
                    id: id,
                    _token: csrf
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire(
                    'Deleted!',
                    'cette sous categorie a été supprimer.',
                    'success'
                    )
                    fetchAllSous_Categorie();
                }
                });
            }
            })
        });


    });

</script>
