@if (session('success'))

    <!--<div class="alert alert-success" role="alert">
         session('success') }}
    </div>-->

    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Héllo!</strong> {{ session('success') }}
    </div>

@endif


@if (session('danger'))

    <div class="alert alert-danger" role="alert">
        {{ session('danger') }}
    </div>

@endif
