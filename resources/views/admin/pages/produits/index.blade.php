@extends('admin.admin_app')

@section('content')

    <div class="page-header">

        <div class="row align-items-end">

            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Tous nos produits</h4>
                        <span>Tous nos produits</span>
                        @include('layouts.alert_message')
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item"  style="float: left;">
                            <a href="https://demo.dashboardpack.com/adminty-html/index.html"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"  style="float: left;"><a href="{{route('admin.index')}}">Accueil</a>
                        </li>
                        <li class="breadcrumb-item"  style="float: left;"><a href="">nos-produits</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <!-- DOM/Jquery table start -->
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div><h5>i-transmissions</h5> <br></div>


                        <div>
                            <button  class="btn btn-primary waves-effect" ><a href="{{route('admin.add_products')}}" style="color:white">Ajouter +</a> </button>
                        </div>


                </div>
                <span></span>
            </div>

            <div class="card-block">
                <div class="table-responsive dt-responsive">
                    <table id="dom-jqry"
                        class="table table-striped table-bordered nowrap"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Categorie</th>
                                <th>Sous-categorie</th>

                                <th>Action</th>


                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($produits as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->image}}</td>
                                    <td>{{$item->categorie->libelle}}</td>
                                    <td>{{$item->sous_categorie_id}}</td>

                                    <td>
                                        <a class="text-success mr-2" href="{{route('admin.edit_product',$item->id)}}">
                                            <i class="bi-pencil-square h4"></i>
                                        </a>

                                        <button type="button" style="border: none;background-color:initial"><a id="{{$item->id}}" class="deleteIcon text-danger mr-2 " href="">
                                            <i class="bi-trash h4" style="color:red"></i>
                                        </a></button>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Categorie</th>
                                <th>Sous-categorie</th>

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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>


<script>

    $(document).ready(function() {

        // delete employee ajax request
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            //alert(id)
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
            title: 'Voulez vous supprimer ce produit ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Confirmer!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/dashboard/delete_products/" + id,
                    method: 'delete',

                    data: {
                        id: id,
                        _token: csrf
                    },

                    success: function(response) {
                        console.log(response);
                        window.location.href = "/dashboard/products";

                        Swal.fire(
                        'Supprimer!',
                        'Votre produit a éte supprimé avec succès.',
                        'success'
                        )

                    }

                });
            }
            })
        });


    });


</script>
