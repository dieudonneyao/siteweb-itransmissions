@extends('layouts.base')

@section('content')

<div>
    <form  action="{{route('produits.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <input type="file" name="image" class="form-control">

        <div class="row">

            <div class="col-xl-6">
                <input type="text" name="libelle" class="form-control">
                <input type="text" name="description" class="form-control">
            </div>

            <div class="col-xl-6">
                <div class="single-box">
                    <select class="selectpicker" data-width="100%" id="categorie" name="categorie">
                        <option selected="selected">Categorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="single-box">
                    <select class="form-control select2" data-width="100%" id="subcat" name="subcat">
                        <option selected="selected">Sous-Categorie</option>
                        <option value=""></option>
                    </select>
                </div>
            </div>

        </div>

        <button type="submit">Submit</button>

    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script>

        $('#categorie').on('change',function(e){
            var cat_id = e.target.value;

            $.get('/ajax-subcat/'+cat_id,function(data){
                //console.log(data);

                $('#subcat').empty();
                $.each(data,function(index,areaObj){
                    $('#subcat').append('<option value="'+areaObj.id+'">'+areaObj.libelle+'</option>');
                });

            });

        });

    </script>

</div>

@endsection




