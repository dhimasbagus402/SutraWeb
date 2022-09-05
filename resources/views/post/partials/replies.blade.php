
@foreach($comments as $comment)
<div class="d-flex mb-4" style="margin-top: 40px;">
    <img class="img-fluid3 rounded" style="width: 45px; height: 45px;" src="{{asset('/storage/userimg/'. ($comment->user->image ?? 'user.png'))}}" alt="profile_image">
    <div class="ps-3" id="commentview">
        <h6 style="color: purple;">{{ $comment->user?->name}}</h6>
        <p style="margin: 2px;">{{ $comment->comment }}</p>
    </div>
</div>
@endforeach 