<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

//use Intervention\Image\Facades\Image as Image;
//use App\Models\User;

//use Auth;

use App\Models\User;

if ( ! function_exists('engToRusDate')) {
    function engToRusDate($date)
    {
        $ruMonths = array(
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        );
        $enMonths = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        );

        return str_replace($enMonths, $ruMonths, $date);
    }

} // if ( ! function_exists('engToRusDate')) {

if ( ! function_exists('isUserLogged')) {
    function isUserLogged()
    {
        return Auth::user();
    }
} // if ( ! function_exists('isUserLogged')) {

if ( ! function_exists('getLoggedUserPermissionsLabel')) {
    function getLoggedUserPermissionsLabel()
    {
        $ret= '';
        $loggedUser = \Auth::user();
        foreach ($loggedUser->permissions as $nextPermission) {
            $ret.= $nextPermission->name . ', ';
        }
        return trimRightSubString($ret, ', ');
    }
} // if ( ! function_exists('getLoggedUserPermissionsLabel')) {


////// USER BLOCK START /////

if ( ! function_exists('pluralize3')) {
    function pluralize3($itemsLength, $noItemsText, $singleItemText, $multiItemsText)
    {
        if (gettype($itemsLength) === 'undefined') {
            return '';
        }
        if (gettype($itemsLength) === 'integer' && $itemsLength <= 0) {
            return $noItemsText;
        }
        if (gettype($itemsLength) === 'integer' && $itemsLength === 1) {
            return $singleItemText;
        }
        if (gettype($itemsLength) === 'integer' && $itemsLength > 1) {
            return $multiItemsText;
        }

        return '';
    }
} // if ( ! function_exists('pluralize3')) {

if ( ! function_exists('getPaginationNextUrlLinks')) {
    function getPaginationNextUrlLinks($totalCategoriesCount, $itemsCount, $backendItemsPerPage, $page = 1)
    {
        $nextUrlLinks = [];
//        if($itemsCount>0){
        if ($itemsCount >= $backendItemsPerPage) {
            $MaxPage = floor($totalCategoriesCount / $backendItemsPerPage) + ($totalCategoriesCount % $backendItemsPerPage > 0 ? 1 : 0);
            for ($i = $page + 1; $i <= $MaxPage; $i++) {
                $nextUrlLinks[] = $i;
            }
        }

//        }
        return $nextUrlLinks;
    }
} // if ( ! function_exists('getPaginationNextUrlLinks')) {

if ( ! function_exists('getPaginationPrevUrlLinks')) {
    function getPaginationPrevUrlLinks($startRowsFrom, $backendItemsPerPage, $page = 1)
    {
        $prevUrlLinks = [];
        if ($startRowsFrom > 0) {
            $i          = $backendItemsPerPage;
            $pageNumber = 1;
            while ($i < $page * $backendItemsPerPage - 1) {
                $i              += $backendItemsPerPage;
                $prevUrlLinks[] = $pageNumber;
                $pageNumber++;
            }
        }

        return $prevUrlLinks;
    }
} // if ( ! function_exists('getPaginationPrevUrlLinks')) {

if ( ! function_exists('getLoggedUserDisplayName')) {
    function getLoggedUserDisplayName()
    {
        if ( ! Auth::check()) {
            return '';
        }
        $loggedUser = Auth::user();
        if ( ! empty($ret)) {
            return (isDeveloperComp() ? $loggedUser->id . ' : ' : '') . $ret;
        }

        return (isDeveloperComp() ? $loggedUser->id . ' : ' : '') . $loggedUser->name;
    }
} // if ( ! function_exists('getLoggedUserDisplayName')) {

//function checkLoggedUserHasImage() : bool {
//    if (!Auth::check()) return false;
//    $loggedUser= Auth::user();
//    if ( empty($loggedUser->avatar) ) return false;
//    $dir_path = \App\User::getUserAvatarPath($loggedUser->id, $loggedUser->avatar);
//    $file_exists    = Storage::disk('local')->exists('public/' . $dir_path);
//    return $file_exists;
//}
//
//function getLoggedUserImage() : string {
//    if (!Auth::check()) return '';
//    $loggedUser= Auth::user();
//    return '/storage/' . User::getUserAvatarPath($loggedUser->id, $loggedUser->avatar);
//}
//
//function getLoggedUserFullPhoto() : string {
//    if (!Auth::check()) return '';
//    $loggedUser= Auth::user();
//    return '/storage/' . User::getUserFullPhotoPath($loggedUser->id, $loggedUser->full_photo);
//}
//
//function getLoggedUserEmail() : string {
//    if (!Auth::check()) return '';
//    $loggedUser= Auth::user();
//    return ( $isDeveloperComp() ? $loggedUser->id.' : ' : '' ) . $loggedUser->email;
//}
//
//function getLoggedUserDisplayAccessGroupsName() : string {
//    if (!Auth::check()) return '';
//    $loggedUser= Auth::user();
//    return User::getUsersGroupsByUserId($loggedUser->id, true);
//}
//
//function loggedUserHasAdminAccess(): bool
//{
//    $has_access = false;
//    if (Auth::check()) {
//        $loggedUserAccessGroups = session('loggedUserAccessGroups');
////                $logged_user_ip = session('logged_user_ip');
//        if ( ! empty($loggedUserAccessGroups) and is_array($loggedUserAccessGroups)) {
//            foreach ($loggedUserAccessGroups as $next_key => $nextLoggedUserAccessGroup) {
//                if ($nextLoggedUserAccessGroup['group_id'] == USER_ACCESS_ADMIN) {
//                    $has_access = true;
//                }
//            }
//        } // if ( !empty($loggedUserAccessGroups) and is_array($loggedUserAccessGroups) ) {
//    }
//    return $has_access;
//} // function loggedUserHasAdminAccess() : bool {
//
//
//function getUserDisplayAccessGroupsName($user_id) : string
//{
//    if (empty($user_id)) {
//        return '';
//    }
//
//    return User::getUsersGroupsByUserId($user_id, true);
//}
//

////// USER BLOCK END /////

if ( ! function_exists('calcDiskSize')) {
    function calcDiskSize($disk = "/"): string
    {
        $diskTotalSpace = disk_total_space($disk);
        $info           = 'Server total space : ' . getNiceFileSize($diskTotalSpace);
        $diskFreeSpace  = disk_free_space("/"); // 300 10 = 10 /300 *100
        $info           .= ', ' . getNiceFileSize($diskFreeSpace) . ' free, ';

        $free_percent = $diskFreeSpace / $diskTotalSpace * 100;

        return $info . '(' . round($free_percent, 2) . ' % free )';
    }
} // if ( ! function_exists('calcDiskSize')) {

if ( ! function_exists('folderSize')) {
    function folderSize($dir)
    {
        $total_size = 0;
        $count      = 0;
        $dir_array  = scandir($dir);
        foreach ($dir_array as $key => $filename) {
            if ($filename != ".." && $filename != ".") {
                if (is_dir($dir . "/" . $filename)) {
                    $new_foldersize = foldersize($dir . "/" . $filename);
                    $total_size     = $total_size + $new_foldersize;
                } elseif (is_file($dir . "/" . $filename)) {
                    $total_size = $total_size + filesize($dir . "/" . $filename);
                    $count++;
                }
            }
        }

        return $total_size;
    }
} // if ( ! function_exists('folderSize')) {


if ( ! function_exists('crlf')) {
    function crlf(string $s): string
    {
        return str_replace(array("\r\n", "\r", "\n"), "<br />", $s);
    }
} // if ( ! function_exists('crlf')) {

if ( ! function_exists('checkValidImgName')) {
    function checkValidImgName(string $filename, int $max_length = 0, bool $check_valid_chars = false): string
    {
        $ret_str = $filename;
        if ( ! empty($max_length) and isPositiveNumeric($max_length)) {
            if (strlen($filename) > $max_length) {
//                echo '<pre>$filename::'.print_r($filename,true).'</pre>';
                $basename = getFilenameBasename($filename);
//                echo '<pre>$basename::'.print_r($basename,true).'</pre>';
                $extension = getFilenameExtension($filename);
//                echo '<pre>$extension::'.print_r($extension,true).'</pre>';
                $index = $max_length - strlen('.' . $extension);
//                echo '<pre>$index::'.print_r($index,true).'</pre>';
                $ret_str = substr($basename, 0, $index) . '.' . $extension;
            }
        }
        if ($check_valid_chars) {
            $ret_str = str_replace(' ', '_', $ret_str);
        }

        return $ret_str;
    }

} // if ( ! function_exists('checkValidImgName')) {

if ( ! function_exists('deleteFileByPath')) {
    function deleteFileByPath(string $filename_path, $delete_empty_directory = false): bool
    {
        Storage::delete($filename_path);
        $directory_path = pathinfo($filename_path);
//        \Log::info(  varDump($filename_path, ' -1 deleteFileByPath $filename_path::') );

        $file_exists = Storage::disk('local')->exists('public/' . $filename_path);
//        \Log::info(  varDump($file_exists, ' -1 deleteFileByPath $file_exists::') );

        Storage::disk('local')->delete('public/' . $filename_path);

        if ( ! empty($directory_path['dirname']) /* and $FileSystem->exists($base_path.$directory_path['dirname']) */) {
            $files = Storage::files('public/' . $directory_path['dirname']);
//            \Log::info(  varDump($files, ' -1 deleteFileByPath $files::') );
            if (empty($files)) {
//                with (new MyAppModel())->d( '<pre>deleteFileByPath DELETING $directory_path[\'dirname\']::' . print_r($directory_path['dirname'],true));
                Storage::deleteDirectory('public/' . $directory_path['dirname']);

                return true;
            }
        }

        return false;
    }
} // if ( ! function_exists('deleteFileByPath')) {


if ( ! function_exists('wrpGetUserStatusLabel')) {
    function wrpGetUserStatusLabel($status)
    {
        return User::getUserStatusLabel($status);
    }
} // if ( ! function_exists('wrpGetUserStatusLabel')) {


if ( ! function_exists('getSystemInfo')) {
    function getSystemInfo()
    {
        $DB_CONNECTION = config('database.default');
        $connections   = config('database.connections');
        $database_name = ! empty($connections[$DB_CONNECTION]['database']) ? $connections[$DB_CONNECTION]['database'] : '';

        $pdo           = DB::connection()->getPdo();
        $db_version    = $pdo->query('select version()')->fetchColumn();
        $tables_prefix = DB::getTablePrefix();

        ob_start();
        phpinfo();
        $phpinfo_str = ob_get_contents() . '<hr>';
        ob_end_clean();
        $server_info = '<hr><pre>' . print_r($_SERVER, true) . '</pre>';

        $app_version = '';
        if (file_exists(public_path('app_version.txt'))) {
            $app_version = File::get('app_version.txt');
            if ( ! empty($app_version)) {
                $app_version = ' app_version : <b> ' . $app_version . '</b><br>';
            }
        }

        $is_running_under_docker_text = '';
        if (isRunningUnderDocker()) {
            $is_running_under_docker_text = '<b>Running Under Docker</b><br>';
        }

        $runningUnderDocker = (isRunningUnderDocker() ? '<strong>UnderDocker</strong>' : 'No Docker');
        $string             = '<br><table style="border: 1px dotted red; width: 100% !important;" >' .
                              '<tr><td style="border: 2px dotted blue; width: 100% !important;">' .
                              ' Laravel:<b>' . app()::VERSION . '</b><br>' .
                              'PHP:<b>' . phpversion() . '</b><br>' .
                              'DEBUG:<b>' . config('app.debug') . '</b><br>' .
                              'PHP SAPI NAME:<b>' . php_sapi_name() . '</b><br>' .
                              'ENV:<b>' . config('app.env') . '</b><br>' .
                              'DB CONNECTION:<b> ' . $DB_CONNECTION . ' </b><br>' .
                              'DB VERSION:<b> ' . $db_version . '</b><br>' .
                              'DB DATABASE:<b> ' . $database_name . '</b><br>' .
                              'TABLES PREFIX:<b> ' . $tables_prefix . '</b><br>' .

                              '<hr>' .
                              'base_path: <b>' . base_path() . '</b><br>' .
                              'app_path: <b>' . app_path() . '</b><br>' .
                              'public_path: <b>' . public_path() . '</b><br>' .
                              'storage_path: <b>' . storage_path() . '</b><br>' .
                              'Path to the \'storage/app\' folder: <b>' . storage_path('app') . '</b><br>' .
                              $app_version .
                              $is_running_under_docker_text .
                              '<hr>' .

                              '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:500px; max-width:900px;">' . $phpinfo_str . '</div></div>' .
                              '<hr><div>' . $runningUnderDocker . '</div>' .
                              '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:500px; max-width:900px;">' . $server_info . '</div></div>' .
                              '</td></tr>' .
                              '</table>';
        '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:300px; max-width:600px;">' . $phpinfo_str . '</div></div>' .
        '<hr><div>' . $runningUnderDocker . '</div>' .
        '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:300px; max-width:600px;">' . $server_info . '</div></div>';

        return $string;
    }
} // if ( ! function_exists('getSystemInfo')) {


if ( ! function_exists('getLoggedUser')) {
    function getLoggedUser()
    {
        return Auth::user();
    }
} // if ( ! function_exists('getLoggedUser')) {


if ( ! function_exists('formatCurrencySum')) {
    function formatCurrencySum($currency_sum, $show_only_digits = false, $output_format = ''): string
    {
        $current_currency_short    = config('app.current_currency_short');
        $current_currency_position = config('app.current_currency_position'); // p-prefix , s-suffix

        if ($current_currency_position == 'p') {
            return ($show_only_digits ? '' : $current_currency_short) . getPriceFormat($currency_sum);
        }

        return getPriceFormat($currency_sum) . ($show_only_digits ? '' : $current_currency_short);
    }
} // if ( ! function_exists('formatCurrencySum')) {


if ( ! function_exists('varDump')) {
    function varDump($var, $descr = '', bool $return_string = true)
    {
        if (is_null($var)) {
            $output_str = 'NULL :' . (! empty($descr) ? $descr . ' : ' : '') . 'NULL';
            if ($return_string) {
                return $output_str;
            }
            \Log::info($output_str);

            return;
        }
        if (is_scalar($var)) {
            $output_str = 'scalar => (' . gettype($var) . ') :' . (! empty($descr) ? $descr . ' : ' : '') . $var;
            if ($return_string) {
                return $output_str;
            }
            \Log::info($output_str);

            return;
        }
        if (is_array($var)) {
            $output_str = '[]';
            if (isset($var[0])) {
                if (is_subclass_of($var[0], 'Illuminate\Database\Eloquent\Model')) {
                    $collectionClassBasename = class_basename($var[0]);
                    $output_str              = ' Array(' . count(collect($var)->toArray()) . ' of ' . $collectionClassBasename . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r(collect($var)->toArray(),
                            true);
                } else {
                    $output_str = 'Array(' . count($var) . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r($var,
                            true);
                }
            } else {
                $output_str = 'Array(' . count($var) . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r($var,
                        true);
            }
            if ($return_string) {
                return $output_str;
            }

            return;
        }

        if (class_basename($var) === 'Request' or class_basename($var) === 'LoginRequest') {
            $request     = request();
            $requestData = $request->all();
            $output_str  = 'Request:' . (! empty($descr) ? $descr . ' : ' : '') . print_r($requestData, true);
            if ($return_string) {
                return $output_str;
            }
            \Log::info($output_str);

            return;
        }

        if (class_basename($var) === 'LengthAwarePaginator' or class_basename($var) === 'Collection') {
            $collectionClassBasename = '';
            if (isset($var[0])) {
                $collectionClassBasename = class_basename($var[0]);
            }
            $output_str = ' Collection(' . count($var->toArray()) . ' of ' . $collectionClassBasename . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r($var->toArray(),
                    true);
            if ($return_string) {
                return $output_str;
            }
            \Log::info($output_str);

            return;
        }

        if (gettype($var) === 'object') {
            if (is_subclass_of($var, 'Illuminate\Database\Eloquent\Model')) {
                $output_str = ' (Model Object of ' . get_class($var) . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r($var/*->getAttributes()*/ ->toArray(),
                        true);
                if ($return_string) {
                    return $output_str;
                }
                \Log::info($output_str);

                return;
            }
            $output_str = ' (Object of ' . get_class($var) . ') :' . (! empty($descr) ? $descr . ' : ' : '') . print_r((array)$var,
                    true);
            if ($return_string) {
                return $output_str;
            }
            \Log::info($output_str);

            return;
        }
    }
} // if ( ! function_exists('varDump')) {


if ( ! function_exists('prefixHttpProtocol')) {
    function prefixHttpProtocol($url)
    {
//        return $url;
//        }
        if ( ! (strpos('http://', $url) === false) or ! (strpos('https://', $url) === false)) {
            return $url;
        }
        $request = request();
        if ($request->secure()) {
            return 'https://' . $url;
        }

        return 'http://' . $url;
    }
} // if ( ! function_exists('prefixHttpProtocol')) {

if ( ! function_exists('getConcatStrMaxLength')) {
    function getConcatStrMaxLength(): int
    {
        return 50;
    }
} // if (! function_exists('getConcatStrMaxLength')) {


if ( ! function_exists('safeFilename')) {
    function safeFilename(string $filename): string
    {
        return preg_replace("/[^A-Za-z ]/", '', $filename);
    }
} // if (! function_exists('safeFilename')) {

if ( ! function_exists('isValidBool')) {
    function isValidBool($val): bool
    {
        if (in_array($val, ["Y", "N"])) {
            return true;
        } else {
            return false;
        }
    }
} // if (! function_exists('isValidBool')) {

if ( ! function_exists('isValidInteger')) {
    function isValidInteger($val): bool
    {
        if (preg_match('/^[1-9][0-9]*$/', $val)) {
            return true;
        } else {
            return false;
        }
    }
} // if (! function_exists('isValidInteger')) {

if ( ! function_exists('isValidFloat')) {
    function isValidFloat($val): bool
    {
        if (preg_match('/^[+-]?([0-9]*[.])?[0-9]+$/', $val)) {
            return true;
        } else {
            return false;
        }
    }
} // if (! function_exists('isValidFloat')) {


if ( ! function_exists('getFilenameBasename')) {
    function getFilenameBasename($file)
    {
        return File::name($file);
    }
} // if (! function_exists('getFilenameBasename')) {

if ( ! function_exists('getFilenameExtension')) {
    function getFilenameExtension($file)
    {
        return File::extension($file);
    }
} // if (! function_exists('getFilenameExtension')) {

if ( ! function_exists('trimRightSubString')) {
    function trimRightSubString(
        string $s,
        string $substr
    ): string {
        $res = preg_match('/(.*?)(' . preg_quote($substr, "/") . ')$/si', $s, $A);
        if ( ! empty($A[1])) {
            return $A[1];
        }

        return $s;
    }

} // if (! function_exists('trimRightSubString')) {

if ( ! function_exists('makeAddHttpPrefix')) {
    function makeAddHttpPrefix(string $url): string
    {
        if (empty($url)) {
            return '';
        }
        $url = trim($url);
        $ret = checkRegexpHttpPrefix($url);
        if ( ! $ret) {
            return 'http://' . $url;
        }

        return $url;
    }
} // if (! function_exists('makeAddHttpPrefix')) {

if ( ! function_exists('checkRegexpHttpPrefix')) {
    function checkRegexpHttpPrefix($str)
    {
        $pattern = "~^http(s)?:\/\/~i";
        $res     = preg_match($pattern, $str);

        return $res;
    }
} // if (! function_exists('checkRegexpHttpPrefix')) {

if ( ! function_exists('capitalize')) {
    function capitalize($str)
    {
        return ucfirst($str);
    }

} // if (! function_exists('capitalize')) {


if ( ! function_exists('getNiceFileSize')) {
    function getNiceFileSize(
        $bytes,
        $binaryPrefix = true
    ) {
        if ($binaryPrefix) {
            $unit = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB');
            if ($bytes == 0) {
                return '0 ' . $unit[0];
            }

            return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))),
                    2) . ' ' . (isset($unit[$i]) ? $unit[$i] : 'B');
        } else {
            $unit = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
            if ($bytes == 0) {
                return '0 ' . $unit[0];
            }

            return @round($bytes / pow(1000, ($i = floor(log($bytes, 1000)))),
                    2) . ' ' . (isset($unit[$i]) ? $unit[$i] : 'B');
        }
    }

} // if (! function_exists('getNiceFileSize')) {


if ( ! function_exists('concatStr')) {
    function concatStr(
        string $str,
        int $max_length = 0,
        string $add_str = ' ...',
        $show_help = false,
        $strip_tags = true,
        $additive_code = ''
    ): string {
        if ($strip_tags) {
            $str = strip_tags($str);
        }
        $ret_html = limitChars($str, (! empty($max_length) ? $max_length : getConcatStrMaxLength()), $add_str);
        if ($show_help and strlen($str) > $max_length) {
            $ret_html .= '<i class=" a_link fa bars" style="font-size:larger;" hidden ' . $additive_code . ' ></i>';
        }

        return $ret_html;
    }
} // if (! function_exists('concatStr')) {


if ( ! function_exists('limitChars')) {
    function limitChars(
        $str,
        $limit = 100,
        $end_char = null,
        $preserve_words = false
    ) {
        $end_char = ($end_char === null) ? '&#8230;' : $end_char;

        $limit = (int)$limit;

        if (trim($str) === '' or strlen($str) <= $limit) {
            return $str;
        }

        if ($limit <= 0) {
            return $end_char;
        }

        if ($preserve_words == false) {
            return rtrim(substr($str, 0, $limit)) . $end_char;
        }
        // TO FIX AND DELETE SPACE BELOW
        preg_match('/^.{' . ($limit - 1) . '}\S* /us', $str, $matches);

        return rtrim($matches[0]) . (strlen($matches[0]) == strlen($str) ? '' : $end_char);
    }

} // if (! function_exists('limitChars')) {


if ( ! function_exists('limitWords')) {
    /**
     * Limits a phrase to a given number of words.
     *
     * @param string   phrase to limit words of
     * @param integer  number of words to limit to
     * @param string   end character or entity
     *
     * @return  string
     */
    function limitWords(
        $str,
        $limit = 100,
        $end_char = null
    ) {
        $limit    = (int)$limit;
        $end_char = ($end_char === null) ? '&#8230;' : $end_char;

        if (trim($str) === '') {
            return $str;
        }

        if ($limit <= 0) {
            return $end_char;
        }

        preg_match('/^\s*+(?:\S++\s*+){1,' . $limit . '}/u', $str, $matches);

        // Only attach the end character if the matched string is shorter
        // than the starting string.
        return rtrim($matches[0]) . (strlen($matches[0]) === strlen($str) ? '' : $end_char);
    }
} // if (! function_exists('limitWords')) {


if ( ! function_exists('isCliCommand')) {
    function isCliCommand()
    {
        if (strpos(php_sapi_name(), 'cli') !== false) {
            return true;
        }

        return false;
    }
} // if (! function_exists('isCliCommand')) {


if ( ! function_exists('isHttpsProtocol')) {
    function isHttpsProtocol()
    {
        if (empty($_SERVER['HTTP_HOST'])) {
            return false;
        }
        if ( ! (strpos($_SERVER['HTTP_HOST'], 'votes.my-demo-apps')) === false) {
            return true;
        }

        return false;
    }
} // if (! function_exists('isHttpsProtocol')) {

if ( ! function_exists('isDeveloperComp')) {
    function isDeveloperComp($check_debug = false)
    {
        if ( ! empty($_SERVER['HTTP_HOST'])) {
            $pos = strpos($_SERVER['HTTP_HOST'], 'local-backend8.com');
            if ( ! ($pos === false)) {
                return true;
            }
        }
        if (isRunningUnderDocker()) {
            return true;
        }
        $app_developers_mode = Session::get('app_developers_mode', '');

        return ! empty($app_developers_mode);
    }
} // if (! function_exists('isDeveloperComp')) {

if ( ! function_exists('clearEmptyArrayItems')) {
    function clearEmptyArrayItems($arr): array
    {
        if (empty($arr)) {
            return [];
        }
        foreach ($arr as $next_key => $next_value) {
            if (empty($next_value)) {
                unset($arr[$next_key]);
            }
        }

        return $arr;
    }
} // if (! function_exists('clearEmptyArrayItems')) {

if ( ! function_exists('removeMore1Space')) {
    function removeMore1Space($str)
    {
        $res = preg_replace('/\s\s+/', ' ', $str);

        return $res;
    }
} // if (! function_exists('removeMore1Space')) {

if ( ! function_exists('getRightSubstring')) {
    function getRightSubstring(string $S, $count): string
    {
        return substr($S, strlen($S) - $count, $count);
    }
} // if (! function_exists('getRightSubstring')) {

if ( ! function_exists('getFormattedDate')) {
    function getFormattedDate($date, $date_format = 'mysql', $output_format = ''): string
    {
        if (empty($date)) {
            return '';
        }
        $date_carbon_format = config('app.date_carbon_format');
        if ($date_format == 'mysql' /*and ! isValidTimeStamp($date)*/) {
            $date_format = getDateFormat("astext");
            $date        = Carbon::createFromTimestamp(strtotime($date))->format($date_format);

            return $date;
        }


        if (isCFValidTimeStamp($date)) {
            if (strtolower($output_format) == 'astext') {
                $date_carbon_format_as_text = config('app.date_carbon_format_as_text', '%d %B, %Y');

                return Carbon::createFromTimestamp($date,
                    Config::get('app.timezone'))->formatLocalized($date_carbon_format_as_text);
            }
            if (strtolower($output_format) == 'pickdate') {
                $date_carbon_format_as_pickdate = config('app.pickdate_format_submit');

                return Carbon::createFromTimestamp($date,
                    Config::get('app.timezone'))->format($date_carbon_format_as_pickdate);
            }

            return Carbon::createFromTimestamp($date, Config::get('app.timezone'))->format($date_carbon_format);
        }
        $A = preg_split("/ /", $date);
        if (count($A) == 2) {
            $date = $A[0];
        }
        $a = Carbon::createFromFormat($date_carbon_format, $date);
        $b = $a->format(getDateFormat("astext"));

        return $a->format(getDateFormat("astext"));
    }
} // if (! function_exists('getFormattedDate')) {



if ( ! function_exists('isCFValidTimeStamp')) {
    function isCFValidTimeStamp($timestamp)
    {
        if (gettype($timestamp) == "object") {
            return false;
        }

        return ((string)(int)$timestamp === (string)$timestamp)
               && ($timestamp <= PHP_INT_MAX)
               && ($timestamp >= ~PHP_INT_MAX);
    }
} // if (! function_exists('isCFValidTimeStamp')) {


if ( ! function_exists('getFormattedDateTime')) {
    function getFormattedDateTime($datetime, $to_rus= true, $output_format = ''): string
    {
        if (empty($datetime)) {
            return false;
        }
        $datetime_format = config('app.datetime_format', 'd F Y H:i');
        if (!isValidTimeStamp($datetime)) {
            if ($output_format == 'ago_format') {
                return Carbon::createFromTimestamp(strtotime($datetime))->diffForHumans();
            }
            $ret             = Carbon::createFromTimestamp(strtotime($datetime))->format($datetime_format);
            return $to_rus ? engToRusDate($ret): $ret;
        }

        if (isValidTimeStamp($datetime)) {
            $ret             = Carbon::createFromTimestamp($datetime)->format($datetime_format);
            return $to_rus ? engToRusDate($ret): $ret;
        }


        return false;

    }

} // if (! function_exists('getFormattedDateTime')) {


if ( ! function_exists('isValidTimeStamp')) {
    function isValidTimeStamp($timestamp)
    {
        if (empty($timestamp)) {
            return false;
        }
        if (gettype($timestamp) == 'object') {
            $timestamp = $timestamp->toDateTimeString();
        }

        return ((string)(int)$timestamp === (string)$timestamp)
               && ($timestamp <= PHP_INT_MAX)
               && ($timestamp >= ~PHP_INT_MAX);
    }
} // if (! function_exists('isValidTimeStamp')) {

if ( ! function_exists('getCFFileSizeAsString')) {
    function getCFFileSizeAsString(string $file_size): string
    {
        if ((int)$file_size < 1024) {
            return $file_size . 'b';
        }
        if ((int)$file_size < 1024 * 1024) {
            return floor($file_size / 1024) . 'kb';
        }

        return floor($file_size / (1024 * 1024)) . 'mb';
    }
} // if (! function_exists('getCFFileSizeAsString')) {


if ( ! function_exists('getSystemInfo')) {
    function getSystemInfo()
    {

        $DB_CONNECTION = config('database.default');
        $connections   = config('database.connections');
        $database_name = ! empty($connections[$DB_CONNECTION]['database']) ? $connections[$DB_CONNECTION]['database'] : '';

        $pdo           = DB::connection()->getPdo();
        $db_version    = $pdo->query('select version()')->fetchColumn();
        $tables_prefix = DB::getTablePrefix();

        ob_start();
        phpinfo();
        $phpinfo_str = ob_get_contents() . '<hr><pre>' . print_r($_SERVER, true) . '</pre>';
        ob_end_clean();
        $server_info = '<hr><pre>' . print_r($_SERVER, true) . '</pre>';

        $app_version = '';
        if (file_exists(public_path('app_version.txt'))) {
            $app_version = File::get('app_version.txt');
            if ( ! empty($app_version)) {
                $app_version = ' app_version : <b> ' . $app_version . '</b><br>';
            }
        }

        $is_running_under_docker_text = '';
        if (isRunningUnderDocker()) {
            $is_running_under_docker_text = '<b>Running Under Docker</b><br>';
        }

        $runningUnderDocker = (isRunningUnderDocker() ? '<strong>UnderDocker</strong>' : 'No Docker');
        $string             = ' Laravel:<b>' . app()::VERSION . '</b><br>' .
                              'PHP:<b>' . phpversion() . '</b><br>' .
                              'DEBUG:<b>' . config('app.debug') . '</b><br>' .
                              'PHP SAPI NAME:<b>' . php_sapi_name() . '</b><br>' .
                              'ENV:<b>' . config('app.env') . '</b><br>' .
                              'DB CONNECTION:<b> ' . $DB_CONNECTION . ' </b><br>' .
                              'DB VERSION:<b> ' . $db_version . '</b><br>' .
                              'DB DATABASE:<b> ' . $database_name . '</b><br>' .
                              'TABLES PREFIX:<b> ' . $tables_prefix . '</b><br>' .

                              '<hr>' .
                              'base_path:<b>' . base_path() . '</b><br>' .
                              'app_path:<b>' . app_path() . '</b><br>' .
                              'public_path:<b>' . public_path() . '</b><br>' .
                              'storage_path:<b>' . storage_path() . '</b><br>' .
                              'Path to the \'storage/app\' folder:<b>' . storage_path('app') . '</b><br>' .
                              $app_version .
                              $is_running_under_docker_text .
                              '<hr>' .

                              $mail_chimp_api_text . '</b><br>' .
                              '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:300px; max-width:600px;">' . $phpinfo_str . '</div></div>' .
                              '<hr><div>' . $runningUnderDocker . '</div>' .
                              '<hr><div> <div style="overflow-x:scroll; overflow-y:scroll; max-height:300px; max-width:600px;">' . $server_info . '</div></div>';

        return $string;
    }
} // if (! function_exists('getSystemInfo')) {

if ( ! function_exists('isPositiveNumeric')) {
    function isPositiveNumeric(int $str): bool
    {
        if (empty($str)) {
            return false;
        }

        return (is_numeric($str) && $str > 0 && $str == round($str));
    }
} // if (! function_exists('isPositiveNumeric')) {

if ( ! function_exists('replaceSpaces')) {
    function replaceSpaces($S)
    {
        $Pattern = '/([\s])/xsi';
        $S       = preg_replace($Pattern, '&nbsp;', $S);

        return $S;
    }
} // if (! function_exists('replaceSpaces')) {

if ( ! function_exists('createDir')) {
    function createDir(array $directoriesList = [], $mode = 0777)
    {
        foreach ($directoriesList as $dir) {
            if ( ! file_exists($dir)) {
                mkdir($dir, $mode);
            }
        }
    }
} // if (! function_exists('createDir')) {

if ( ! function_exists('deleteEmptyDirectory')) {
    function deleteEmptyDirectory(string $directory_name)
    {
        if ( ! file_exists($directory_name) or ! is_dir($directory_name)) {
            return true;
        }
        $H = OpenDir($directory_name);
        while ($nextFile = readdir($H)) { // All files in dir
            if ($nextFile == "." or $nextFile == "..") {
                continue;
            }
            closedir($H);

            return false; // if there are files can not delete files
        }
        closedir($H);

        return rmdir($directory_name);
    }

} // if (! function_exists('deleteEmptyDirectory')) {

if ( ! function_exists('deleteDirectory')) {
    function deleteDirectory(
        string $directory_name
    ) {
        if ( ! file_exists($directory_name) or ! is_dir($directory_name)) {
            return true;
        }

        $H = OpenDir($directory_name);
        while ($nextFile = readdir($H)) { // All files in dir
            if ($nextFile == "." or $nextFile == "..") {
                continue;
            }
            unlink($directory_name . DIRECTORY_SEPARATOR . $nextFile);
        }
        closedir($H);

        return rmdir($directory_name);
    }


} // if (! function_exists('deleteDirectory')) {

if ( ! function_exists('pregSplit')) {
    function pregSplit(
        string $splitter,
        string $string_items,
        bool $skip_empty = true,
        $to_lower = false
    ): array {
        $retArray = [];
        $a        = preg_split(($splitter), $string_items);
        foreach ($a as $next_key => $next_value) {
            if ($skip_empty and ( ! isset($next_value) or empty($next_value))) {
                continue;
            }
            $retArray[] = ($to_lower ? strtolower(trim($next_value)) : trim($next_value));
        }

        return $retArray;
    }

} // if (! function_exists('pregSplit')) {


if ( ! function_exists('makeStripTags')) {
    function makeStripTags(string $str)
    {
        return strip_tags($str);
    }
} // if (! function_exists('makeStripTags')) {


if ( ! function_exists('myGetType')) {
    function myGetType($var)
    {
        if (is_array($var)) {
            return "array";
        }
        if (is_bool($var)) {
            return "boolean";
        }
        if (is_float($var)) {
            return "float";
        }
        if (is_int($var)) {
            return "integer";
        }
        if (is_null($var)) {
            return "NULL";
        }
        if (is_numeric($var)) {
            return "numeric";
        }
        if (is_object($var)) {
            return "object";
        }
        if (is_resource($var)) {
            return "resource";
        }
        if (is_string($var)) {
            return "string";
        }

        return "unknown type";
    }
} // if (! function_exists('myGetType')) {


if ( ! function_exists('makeClearDoubledSpaces')) {
    function makeClearDoubledSpaces(string $str): string
    {
        return preg_replace("/(\s{2,})/ms", " ", $str);
    }
} // if (! function_exists('makeClearDoubledSpaces')) {


if ( ! function_exists('makeStripslashes')) {
    function makeStripslashes(string $str): string
    {
        return stripslashes($str);
    }
} // if (! function_exists('makeStripslashes')) {


if ( ! function_exists('workTextString')) {
    function workTextString($str, $skip_strip_tags = false)
    {
        if (is_string($str) and ! $skip_strip_tags) {
            $str = makeStripTags($str);
        }
        if (is_string($str)) {
            $str = makeStripslashes($str);
        }
        if (is_string($str)) {
            $str = makeClearDoubledSpaces($str);
        }

        return is_string($str) ? trim($str) : '';
    }

} // if (! function_exists('workTextString')) {

if ( ! function_exists('getValueLabelKeys')) {
    function getValueLabelKeys(array $arr): string
    {
        $keys    = array_keys($arr);
        $ret_str = '';
        foreach ($keys as $next_key) {
            $ret_str .= $next_key . ',';
        }

        return trimRightSubString($ret_str, ',');
    }

} // if ( ! function_exists('getValueLabelKeys')) {


