<?php
    use Illuminate\Support\Facades\Route;
?>

<div class="col-lg-3 according">

    @foreach ($categories as $item)

        <div class="hero__categories active">

            <div class="hero__categories__all">
                <span>
                    <i class="fa fa-bars"></i>
                    <a  style="color: white"  id="{{$item->id}}">{{$item->libelle}}</a>
                </span>
            </div>
           {{--  /product-itransmission/{{$item->libelle}}/{{$sub_item->libelle}} --}}
            <ul class="content" name="subcat">
                @foreach ($item['subcategory'] as $sub_item)
                    <li class="{{(Route::currentRouteName()=='itransmission')  ?  'active' : ''}} dropdown">
                        <a href="{{route('itransmission',[$item->libelle ,$sub_item->libelle])}}">
                            {{$sub_item->libelle}}
                        </a>
                    </li>
                @endforeach
            </ul>

        </div>

    @endforeach

    @include('layouts.script')

</div>
