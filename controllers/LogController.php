<?php

namespace App\Controllers;

use App\Models\Log;
use App\Providers\View;

class LogController {
    public function show() {
        $logModel = new Log();
        $logs = $logModel->getAllLogs();
        return View::render('logs/logView', ['logs' => $logs]);
    }
}
