<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
{
    $userCount = User::count();
    $eventCount = Event::count();
    $reservationCount = Reservation::count();

    // Initialiser un tableau avec 12 mois remplis de 0
    $userStats = array_fill(1, 12, 0);
    $reservationStats = array_fill(1, 12, 0);

    // Remplir les données des utilisateurs par mois
    $usersByMonth = User::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    foreach ($usersByMonth as $month => $count) {
        $userStats[$month] = $count;
    }

    // Remplir les données des réservations par mois
    $reservationsByMonth = Reservation::select(DB::raw('COUNT(*) as count'), DB::raw('MONTH(created_at) as month'))
        ->groupBy('month')
        ->pluck('count', 'month')
        ->toArray();

    foreach ($reservationsByMonth as $month => $count) {
        $reservationStats[$month] = $count;
    }

    return view('welcome', compact('userCount', 'eventCount', 'reservationCount', 'userStats', 'reservationStats'));
}

}
