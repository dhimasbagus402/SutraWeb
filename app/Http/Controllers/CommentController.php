<?php
   
   namespace App\Http\Controllers;

   use App\Models\Blog;
   use App\Models\User;
   use App\Models\Comment;
   use Illuminate\Http\Request;
   
   class CommentController extends Controller
   {
       public function store(Request $request)
       {
        
        $request->validate([
            'comment' => 'required|max:255',
        ]);
            $comment = new Comment;
        
            $comment->comment = $request->comment;
    
            $comment->user()->associate($request->user());
    
            $blog = Blog::find($request->blog_id); 
    
            $blog->comments()->save($comment);
    
            return response()->json(['success'=>'Your comment is submitted!']);
        }
   
       public function replyStore(Request $request)
       {

        $request->validate([
            'comment' => 'required',
        ]);
            $reply = new Comment();
    
            $reply->comment = $request->get('comment');
    
            $reply->user()->associate($request->user());
    
            $reply->parent_id = $request->get('comment_id');
    
            $blog = Blog::find($request->get('blog_id'));
    
            $blog->comments()->save($reply);
    
            return response()->json(['success'=>'Your comment is submitted!']);
   
       }

       /*public function commntdestroy($id)
        {
            $user_id = Auth::id(); // 
            $replys = Comment::where('id', $id)
            ->where('user_id',$user_id)->first(); // you need to fetch the data
            //wrap if statement to check data exist or not
            if(!is_null($reply)){
                //execute if exist
                $replys->delete();
            }
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }*/

   }