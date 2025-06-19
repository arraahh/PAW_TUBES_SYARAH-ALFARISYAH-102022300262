<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        // Sample data for the dashboard
        $data = [
            'monthlyEarnings' => 40000,
            'annualEarnings' => 215000,
            'taskProgress' => 50,
            'pendingRequests' => 18,
            'recentAlerts' => [
                [
                    'type' => 'primary',
                    'icon' => 'fas fa-file-alt',
                    'date' => 'December 12, 2024',
                    'message' => 'A new monthly report is ready to download!'
                ],
                [
                    'type' => 'success',
                    'icon' => 'fas fa-donate',
                    'date' => 'December 7, 2024',
                    'message' => '$290.29 has been deposited into your account!'
                ],
                [
                    'type' => 'warning',
                    'icon' => 'fas fa-exclamation-triangle',
                    'date' => 'December 2, 2024',
                    'message' => 'Spending Alert: We\'ve noticed unusually high spending for your account.'
                ]
            ],
            'projects' => [
                ['name' => 'Server Migration', 'progress' => 20, 'color' => 'danger'],
                ['name' => 'Sales Tracking', 'progress' => 40, 'color' => 'warning'],
                ['name' => 'Customer Database', 'progress' => 60, 'color' => 'primary'],
                ['name' => 'Payout Details', 'progress' => 80, 'color' => 'info'],
                ['name' => 'Account Setup', 'progress' => 100, 'color' => 'success', 'complete' => true]
            ]
        ];

        return view('pages.dashboard', $data);
    }
}
