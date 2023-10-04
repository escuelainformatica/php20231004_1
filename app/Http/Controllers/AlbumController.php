<?php

namespace App\Http\Controllers;

use App\Repo\AlbumRepo;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function __construct(public AlbumRepo $albumRepo) {

    }
    public function listar() {
        $albumes=$this->albumRepo->listarTodo();
        return view("album.listar",['albumes'=>$albumes]);
    }
}
