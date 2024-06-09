<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Club;
use App\Models\Country;
use App\Models\Game;
use App\Models\Goal;
use App\Models\Player;
use App\Models\Position;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
        $i = Player::find(1);
        dd($i->club->games);
    }
}
