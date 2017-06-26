<?php

if (! function_exists('jscript')) {
    /**
     * Generate an asset path for the application.
     *
     * @param  string  $path
     * @param  bool    $secure
     * @return string
     */
    function jscript($path)
    {
        //return app('url')->asset($path, $secure);
        $app = app('url');
        $asset = $app->asset($path, false);
        return $asset;
    }
}


//$firstDT = DateTime::createFromFormat('Y-m-d g:i:s', $selectedTraining->first_session);
if (! function_exists('prettydate')) {
    /**
     * Generate an asset path for the application.
     *
     * @param $date
     * @return string
     * @internal param string $path
     * @internal param bool $secure
     */
    function prettydate($date)
    {
        return DateTime::createFromFormat('Y-m-d g:i:s', $date)->format("F jS, Y - g:ia");
    }
}



if (! function_exists('checkbox_boolean')) {
    function checkbox_boolean($parameter)
    {
        if (is_bool($parameter)) return $parameter;
        if (is_object($parameter)) return count(get_object_vars($parameter)) !== 0;
        if (is_array($parameter)) return count($parameter) !== 0;
        if (is_numeric($parameter)) {
            return (boolean)$parameter;
        }
        $p = is_string($parameter) ? strtolower($parameter) : $parameter;

        switch ($p) {
            case 'yes';
            case 'on';
            case 'true';
                return true;
                break;

            case null;
            case 'no';
            case 'off';
            case 'false';
                return false;
                break;
        }
        return false;
    }
}