<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\LotteryMatch;
use Symfony\Component\HttpFoundation\Response;

class CheckLotteryAvailability
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //dd("Middleware triggered"); // Add this line temporarily for debugging
        $now = Carbon::now('Asia/Yangon');
        $day = $now->dayOfWeek;

        // Define your working days: Monday is 1 and Friday is 5 in Carbon.
        $workingDays = [1, 2, 3, 4, 5];

        // Check if today is a working day.
        if (!in_array($day, $workingDays)) {
            return response()->json(['error' => 'Today is not a working day.']);
        }

        // Define the morning and evening close times.
        $morningCloseStart = Carbon::createFromTime(11, 30);
        $morningCloseEnd = Carbon::createFromTime(12, 0);
        $eveningCloseStart = Carbon::createFromTime(15, 45);
        $eveningCloseEnd = Carbon::createFromTime(21, 0);

        // for sunday and saturday
        // Check if current time falls within the close periods.
        if (($now->between($morningCloseStart, $morningCloseEnd)) || ($now->between($eveningCloseStart, $eveningCloseEnd))) {
            return response()->json(['error' => 'This session is closed. Please try again later.']);
        }

        // Check if the lottery match is active.
        $lotteryMatch = LotteryMatch::first(); // Adjust this to fetch the right lottery match.
        if (!$lotteryMatch || !$lotteryMatch->is_active) {
            return response()->json(['error' => 'The lottery is currently not active. Please try again later.']);
        }

        return $next($request);

    }
}