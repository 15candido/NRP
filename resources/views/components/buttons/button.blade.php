@props(['string' => null, 'url' => null ])
@if($string & $url)
    <button type="button" class="read-me">
        <a href="{{$url}}">{{$string}}</a>
    </button>
@elseif($string)
    <button type="button" class="read-me">
        <a href="#">{{$string}}</a>
    </button>
@else
    <button type="button" class="read-me">
        <a href="#">{{$slot}}</a>
    </button>
@endif