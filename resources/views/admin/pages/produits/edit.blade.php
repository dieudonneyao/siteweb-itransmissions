@extends('admin.admin_app')

@section('content')

<div class="col-sm-12">

    <!-- Basic Inputs Validation start -->
    <div class="card">
        <div class="card-header">
            @include('admin.layouts.message')
            <h5>tableau de bord i-transmission</h5>
            <span>Ajouter <code>un produit</code></span>
        </div>
        <div class="card-block">
            <form id="main" action="{{route('admin.update_product',$produit->id)}}" method="POST" enctype="multipart/form-data">

                @method('PUT')
                @csrf

                <div class="form-group row">

                    <div class="col-sm-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Libelle Produit</h4>
                        <input type="text" value="{{$produit->libelle}}" name ="libelle" class="form-control" placeholder="libellé produit">
                    </div>

                    <div class="col-sm-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Description Produit</h4>
                        <input type="text" value="{{$produit->description}}" name ="description" class="form-control" placeholder="description produit">
                    </div>

                    <div class="col-sm-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Categorie</h4>

                        <select class="form-control select2" id="categorie" name="categorie">
                            <option selected="selected" class="badge badge-danger" value="{{$prod_cat->id}}">{{$prod_cat->libelle}}</option>

                            @foreach ($categories as $categorie)
                                <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Sous-Catégorie</h4>
                        <select class="form-control select2" id="subcat" name="subcat" required>
                            <option selected="selected" class="badge badge-grey" value="{{$prod_sact}}">{{$name_scat}}</option>
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="col-sm-6 col-xl-4 m-b-30">
                        <h4 class="sub-title">Votre image ici</h4>
                        <input type="file" name="image" id="filetag">
                    </div>

                    <img id="preview" height="145" width="160" src="/uploads/shop/{{$produit->image}}" class="thumb-preview" alt="">


                    <!--display image javascript-->
                    <script type="text/javascript">

                        var fileTag = document.getElementById("filetag"),
                            preview = document.getElementById("preview");

                        fileTag.addEventListener("change", function() {
                            changeImage(this);
                        });

                        function changeImage(input) {

                            var reader;

                            if (input.files && input.files[0]) {
                            reader = new FileReader();

                            reader.onload = function(e) {
                                preview.setAttribute('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                            }
                        }

                    </script>

                </div>

                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <button type="submit"
                            class="btn btn-primary m-b-0">Soumettre</button>
                    </div>
                </div>

            </form>

            <!-- Basic Inputs Validation end -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


            <script>

                $('#categorie').on('change',function(e){
                    var cat_id = e.target.value;
                    //console.log(cat_id);

                    $.get('http://127.0.0.1:8000/dashboard/ajax-subcat/'+cat_id,function(data){
                        //console.log(data);

                        $('#subcat').empty();
                        $.each(data,function(index,areaObj){
                            $('#subcat').append('<option value="'+areaObj.id+'">'+areaObj.nom+'</option>');
                        });

                    });

                });

            </script>

        </div>
    </div>
</div>



@endsection
