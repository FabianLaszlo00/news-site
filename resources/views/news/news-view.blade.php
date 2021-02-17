<div class="row">
    <div class="col">
        <h2>{{$element->title}}</h2>
        <span>{{$element->user->name}} - {{$element->created_at->diffForHumans()}}</span>
        <p>{{$element->content}}</p>
    </div>
</div>
