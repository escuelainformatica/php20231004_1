<?php
namespace App\Repo;
use App\Models\Album;
use Illuminate\Support\Facades\DB;

class AlbumRepo {
    public function listarTodo() {
        return Album::all(); // Eloquent OOP
    }
    public function listarConArtista() {
        return Album
            ::with(["artist"]) // incluir la funcion
            ->get(); // Eloquent OOP
    }
    public function listarOrdenados() {
        return Album::orderBy("Title")->get();
    }
    public function listarFiltrado($numArtista) {
        return Album::where('ArtistId',$numArtista)->get();
    }
    public function listarFiltradoLike($texto) {
        // select * from album where title like '%Symphony%'
        return Album::where('Title','like','%'.$texto.'%')->get();
    }
    public function listarBase() {
        return DB::select("select * from Album"); // database
    }
    public function listarconArtistaBase() {
        return DB::select("select * from Album
                          inner join 
                            Artist on Album.ArtistId=Artist.ArtistId "); // database
    }
    public function listarFiltradoBase($numArtista) {
        return DB::select(
            "select * from Album where ArtistId=:ArtistId"
            ,['ArtistId'=>$numArtista]); // database
    }
}