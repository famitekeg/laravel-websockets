<?php

namespace Famitekeg\LaravelWebSockets\Dashboard\Http\Controllers;

use Famitekeg\LaravelWebSockets\Contracts\AppManager;
use Famitekeg\LaravelWebSockets\DashboardLogger;
use Illuminate\Http\Request;

class ShowDashboard
{
    /**
     * Show the dashboard.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Famitekeg\LaravelWebSockets\Contracts\AppManager  $apps
     * @return void
     */
    public function __invoke(Request $request, AppManager $apps)
    {
        return view('websockets::websocket_dashboard', [
            'apps' => $apps->all(),
            'port' => config('websockets.dashboard.port', 6001),
            'channels' => DashboardLogger::$channels,
            'logPrefix' => DashboardLogger::LOG_CHANNEL_PREFIX,
            'refreshInterval' => config('websockets.statistics.interval_in_seconds'),
        ]);
    }
}
