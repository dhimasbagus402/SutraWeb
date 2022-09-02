
@foreach($comments as $comment)
<div class="display-comment" id="commentview">
    <strong>{{ $comment->user->name }}</strong>
    <p style="margin: 2px;">{{ $comment->comment }}</p>
    
    <a href="" id="reply"></a>
    <form id="replyForm">
        @csrf
        <div class="form-group">
            <input type="text" name="comment" class="form-control" />
            <input type="hidden" name="blog_id" value="{{ $blog_id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-sm btn-light" style="font-size: 0.8em; margin-bottom: 10px;" value="Reply" />
        </div>
    </form>
    @include('post.partials.replies', ['comments' => $comment->replies])
</div>
@endforeach 