<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostTrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trashedPosts = Post::onlyTrashed()->get();
        return view('admin.posts.trash', compact('trashedPosts'));
    }

    /**
     * Restore form post table.
     */
    public function restore($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('trash.index')->with('success', 'The post has been restored successfully.');
    }

    /**
     * forceDelete post form table.
     */
    public function forceDelete($id)
    {

        $post = Post::onlyTrashed()->findOrFail($id);
        if ($post->image && Storage::exists('public/' . $post->image)) {
            Storage::delete('public/' . $post->image);
        }
        $post->forceDelete();

        return redirect()->route('trash.index')->with('success', 'The post has force Deleted successfully.');
    }
}