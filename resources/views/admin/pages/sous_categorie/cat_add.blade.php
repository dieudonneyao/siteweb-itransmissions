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
                    <h5></h5>
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

    {{-- edit categorie modal start --}}
    <div class="modal fade" id="categorieModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Categorie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <input type="hidden" name="categorie_id" id="categorie_id">
                <div class="modal-body p-4 bg-light">

                    <div class="row">
                        <div class="col-lg">
                            <label for="fname">libelle</label>
                            <input type="text" name="libelle" id="libelle" class="form-control" placeholder="libelle" required>
                        </div>
                        <div class="col-lg">
                            <label for="lname">slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder="slug" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary edit_categorie_btn" class="btn btn-success">Modifier Categorie</button>
                </div>

            </div>
        </div>
    </div>
    {{-- edit employee modal end --}}

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
                    <div class="col-md-4">
                    </div>

                    <div class="col-md-6" style="margin-top: -6%" id="success_message"></div>
                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" id="AddStudentModalLabel" data-target="#small-Modal">Ajouter +</button>
                </div>
            </div>

            <div class="card-block"><!--dom-jqry-->
                <div class="table-responsive dt-responsive" id="show_all_categorie">
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

        // add new categorie ajax request
        /* $("#add_categorie_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_categorie_btn").text('Adding...');
            $.ajax({
                url: "/categories",
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Added!',
                            'Categorie ajoutée avec succès !',
                            'success'
                        )

                        fetchAllCategorie();
                    }

                    $("#add_categorie_btn").text('Ajout categorie');
                    $("#add_categorie_form")[0].reset();
                    $("#small-Modal").modal('hide');
                }
            });
        }); */

        // fetch all employees ajax request
        fetchAllCategorie();

        function fetchAllCategorie() {
            $.ajax({
                url: "/dashboard/fetch-categories",
                method: 'get',
                success: function(response) {
                        $("#show_all_categorie").html(response);
                        $("table").DataTable({
                            order: [0, 'desc']
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
                url: "/dashboard/categories",
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

                        Swal.fire(
                            'Added!',
                            'Employee Added Successfully!',
                            'success'
                        )
                        $('#save_msgList').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#small-Modal').find('input').val('');
                        $('.add_student').text('Save');
                        $('#small-Modal').modal('hide');
                        fetchAllCategorie();
                    }
                }
            });

        });


        // edit categorie ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            $('#categorieModal').modal('show');
            let categorie_id = $(this).attr('id');
            //alert(categorie_id)
            $.ajax({
                url: "/dashboard/edit-categorie/" + categorie_id,
                method: 'get',
                data: {
                id: categorie_id,
                _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#libelle").val(response.categorie.libelle);
                    $("#slug").val(response.categorie.slug);
                    $("#categorie_id").val(categorie_id);
                }
            });
        });

        // update employee ajax request
        $(document).on('click', '.edit_categorie_btn', function (e) {
            e.preventDefault();

            $(this).text('Updating..');
            var categorie_id = $('#categorie_id').val();
            alert(categorie_id);

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
                url: "/dashboard/update-categorie/" + categorie_id,
                data: data,
                dataType: "json",
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Updated!',
                            'Category Updated Successfully!',
                            'success'
                        )
                        fetchAllCategorie();
                    }
                    $("#edit_categorie_btn").text('Update Categorie');
                    //$("#edit_categorie_form")[0].reset();
                    $("#categorieModal").modal('hide');
                }
            });



        });

        // delete employee ajax request
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url: "dashboard/delete-categorie/" + id,
                method: 'delete',
                data: {
                    id: id,
                    _token: csrf
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    fetchAllCategorie();
                }
                });
            }
            })
        });


    });

</script>
