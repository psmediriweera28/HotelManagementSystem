<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\FoodOrder;
use App\Models\Feedback;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $today        = Carbon::today();
        $startOfMonth = Carbon::now()->startOfMonth();

        // Bookings
        $totalBookings = Booking::count();
        $todayBookings = Booking::whereDate('created_at', $today)->count();
        $monthBookings = Booking::whereBetween('created_at', [$startOfMonth, now()])->count();

        // Food orders
        $totalFoodOrders = FoodOrder::count();
        $todayFoodOrders = FoodOrder::whereDate('created_at', $today)->count();

        // Feedbacks
        $totalFeedbacks = Feedback::count();
        $newFeedbacks   = Feedback::whereDate('created_at', '>=', now()->subDays(7))->count();

        // Rooms / occupancy
        $totalRooms     = Room::count();
        $occupiedRooms  = Booking::whereDate('check_in', '<=', today())
                                 ->whereDate('check_out', '>=', today())
                                 ->count();
        $availableRooms = max($totalRooms - $occupiedRooms, 0);

        $occupancyPercent = $totalRooms > 0
            ? round($occupiedRooms / $totalRooms * 100)
            : 0;

        // Payments / activity
        $pendingPayments   = Booking::where('payment_status', 'pending')->count();
        $todayCheckins     = Booking::whereDate('check_in', $today)->count();
        $cancelledBookings = Booking::where('status', 'cancelled')->count();

        return view('dashboard.admin', compact(
            'totalBookings',
            'todayBookings',
            'monthBookings',
            'totalFoodOrders',
            'todayFoodOrders',
            'totalFeedbacks',
            'newFeedbacks',
            'totalRooms',
            'occupiedRooms',
            'availableRooms',
            'occupancyPercent',
            'pendingPayments',
            'todayCheckins',
            'cancelledBookings'
        ));
    }
}
