<?php
/**
 * PiruWamp Debug Dump Helper
 * Permite enviar volcados de variables a la Consola de Depuración de PiruWamp en tiempo real.
 */

if (!function_exists("piru_dump")) {
    function piru_dump(...$vars) {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        $caller = isset($trace[0]) ? $trace[0] : array("file" => "desconocido", "line" => 0);
        $file_name = isset($caller["file"]) ? basename($caller["file"]) : "script.php";
        $line_num = isset($caller["line"]) ? $caller["line"] : 0;

        $dumps = array();
        foreach ($vars as $v) {
            ob_start();
            var_dump($v);
            $dumps[] = ob_get_clean();
        }

        $payload = array(
            "type" => "DUMP",
            "time" => date("H:i:s"),
            "file" => $file_name . ":" . $line_num,
            "full_path" => isset($caller["file"]) ? $caller["file"] : "",
            "content" => implode("\n---\n", $dumps)
        );

        $json = json_encode($payload);
        $fp = @fsockopen("127.0.0.1", 9912, $errno, $errstr, 0.08);
        if ($fp) {
            @fwrite($fp, $json . "\n");
            @fclose($fp);
        }
    }
}

if (!function_exists("dump")) {
    function dump(...$vars) {
        piru_dump(...$vars);
    }
}

