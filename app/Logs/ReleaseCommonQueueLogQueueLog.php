<?php
/**
 * Created by PhpStorm.
 * User: harlen
 * Date: 2019/4/27
 * Time: 10:30 PM
 */

namespace App\Logs;


use App\CustomLogger;
use App\Models\MiniProgram;

class ReleaseCommonQueueLogQueueLog
{
    public static function info(MiniProgram $miniProgram, $message, $data)
    {
        $message = "小程序 {$miniProgram->app_id}; ".$message;

        CustomLogger::info(CustomLogger::LOG_COMMON_QUEUE, $message, $data);
    }
}