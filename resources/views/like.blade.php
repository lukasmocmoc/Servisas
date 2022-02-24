<?php
use App\Models\Post;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
?>

{{--{{ trans_choice('{0} no like|{1} :count like|[2,*] :count likes', count($model->likes), ['count' => count($model->likes)]) }}--}}

@can('')
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="likeable_type" value=""/>
        <input type="hidden" name="id" value=""/>
        <button>@lang('')</button>
    </form>
@endcan

@can('')
    <form action="" method="POST">
        @csrf
        <input type="hidden" name="likeable_type" value="}"/>
        <input type="hidden" name="id" value=""/>
        <button>@lang('')</button>
    </form>
@endcan
