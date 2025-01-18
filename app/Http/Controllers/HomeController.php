<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Music;
use App\Models\Playlist;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $artists = Artist::get();

        return [
            'categories' => $categories,
            'artists' => $artists,
        ];
    }

    public function category($slug)
    {
        $category = Category::firstWhere('slug', $slug);

        $music = Music::where('category_id', $category->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return [
            'category' => $category,
            'music' => $music,
        ];
    }

    public function artist($id)
    {
        $artist = Artist::findOrFail($id);

        $music = Music::where('artist_id', $artist->id)
            ->orderBy('downloads', 'desc')
            ->get();

        return [
            'artist' => $artist,
            'music' => $music,
        ];
    }

    public function user($id)
    {
        $user = User::findOrFail($id);

        $playlist = Playlist::where('user_id', $user->id)
            ->get();

        return [
            'user' => $user,
            'playlist' => $playlist
        ];
    }

    public function album($id)
    {
        $album = Album::findOrFail($id);

        return [
            'album' => $album,
        ];
    }

    public function playlist($slug)
    {
        $playlist = Playlist::firstWhere('slug', $slug);

        return [
            'playlist' => $playlist,
        ];
    }
}
