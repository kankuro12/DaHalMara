<?php

namespace App\Http\Controllers;

use App\Game;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //

    public function create()
    {
        $game = new Game();
        $game->turn = 0;
        $game->user_id = Auth::user()->id;
        $game->save();
        $player = new Player();
        $player->game_id = $game->id;
        $player->user_id = Auth::user()->id;
        $player->team = 0;
        $player->pos = 0;
        $game->save();
        return redirect(url('game/' . $game->id));
    }

    public function game($id)
    {
    }
}
