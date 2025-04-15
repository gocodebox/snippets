<?php
// Log the backtrace of a warning instead of just the first line.

class WarningWithStacktrace extends ErrorException {}
set_error_handler(function($severity, $message, $file, $line) {
	if ((error_reporting() & $severity)) {
		if ($severity & (E_WARNING | E_NOTICE | E_USER_WARNING | E_USER_NOTICE | E_DEPRECATED)) {
			$ex = new WarningWithStacktrace($message, 0, $severity, $file, $line);
			error_log($ex);
			return true;
		} else {
			throw new ErrorException($message, 0, $severity, $file, $line);
		}
	}
});
