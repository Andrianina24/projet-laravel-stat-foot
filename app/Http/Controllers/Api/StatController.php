<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StatsAttaqueDomicile;
use App\Models\StatsAttaqueExterieur;
use App\Models\StatsAttaqueGeneral;
use App\Models\StatsDefenseDomicile;
use App\Models\StatsDefenseExterieur;
use App\Models\StatsDefenseGeneral;
use App\Models\StatsGeneralDomicile;
use App\Models\StatsGeneralExterieur;
use App\Models\StatsGeneralGeneral;
use Illuminate\Http\Request;

class StatController extends Controller
{
    public function showGenDom()
    {
        $stats = StatsGeneralDomicile::all();

        return response()->json($stats);
    }
    public function showGenExt()
    {
        $stats = StatsGeneralExterieur::all();

        return response()->json($stats);
    }
    public function showGenGen()
    {
        $stats = StatsGeneralGeneral::all();

        return response()->json($stats);
    }
    public function showAttDom()
    {
        $stats = StatsAttaqueDomicile::all();

        return response()->json($stats);
    }
    public function showAttExt()
    {
        $stats = StatsAttaqueExterieur::all();

        return response()->json($stats);
    }
    public function showAttGen()
    {
        $stats = StatsAttaqueGeneral::all();

        return response()->json($stats);
    }
    public function showDefDom()
    {
        $stats = StatsDefenseDomicile::all();

        return response()->json($stats);
    }
    public function showDefExt()
    {
        $stats = StatsDefenseExterieur::all();

        return response()->json($stats);
    }
    public function showDefGen()
    {
        $stats = StatsDefenseGeneral::all();

        return response()->json($stats);
    }
}
