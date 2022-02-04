<form  action="route('scategorie.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="row">
        <div class="col-xl-6">
            <input type="text" name="libelle" required class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <div class="single-box">
                <select class="selectpicker" data-width="100%" id="categorie_id" name="categorie_id">
                    foreach ($categories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                    endforeach
                </select>
            </div>
        </div>
    </div>


    <button type="submit">Submit</button>

</form>
