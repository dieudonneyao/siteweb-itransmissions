<form  action="{{route('categorie.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="row">
        <div class="col-xl-6">
            <input type="text" name="libelle" required class="form-control">
            <input type="text" name="slug" required class="form-control">
        </div>
    </div>


    <button type="submit">Submit</button>

</form>
