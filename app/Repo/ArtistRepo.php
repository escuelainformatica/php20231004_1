<?php
namespace App\Repo;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;


class ArtistRepo {
    public function listarTodo() {
        return Artist::all(); // Eloquent OOP
    }
    public function listarBase() {
        return DB::select("select * from Artist"); // database
    }
}