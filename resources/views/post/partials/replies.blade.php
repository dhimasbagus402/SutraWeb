
@foreach($comments as $comment)

    <div class="d-flex" style="margin-top: 40px; margin-bottom: 7px;">
        <?php
            if(!file_exists('/storage/userimg/'. $comment->user->image))
                $fileName = $comment->user->image;
            else
                $fileName = "user.png";
        ?>
        <img class="img-fluid3 rounded" style="width: 48px; height: 48px;" src="{{asset('/storage/userimg/'. $fileName)}}" alt="profile_image">
        <div class="ps-3" id="commentview">
            <h6 style="color: purple;">{{ $comment->user?->name}}</h6>
            <p style="margin: 2px;">{{ $comment->comment }}</p>
        </div>
    </div>
    @if (Auth::user() && (Auth::user()->type == 'admin'))
        
        <form action="{{ route('comments.delete', $comment->id) }}" method="POST">   
        @csrf
        @method('DELETE')    
            <button style="padding:3px; font-size: 14px;" type="submit" class="btn btn-danger pull-right">Hapus</button>
        </form>

    @endif

@endforeach 