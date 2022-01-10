<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

if ( ! defined("HTTP_RESPONSE_OK")) {
    define("HTTP_RESPONSE_OK", 200); // https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
}
if ( ! defined("HTTP_RESPONSE_OK_RESOURCE_CREATED")) {
    define("HTTP_RESPONSE_OK_RESOURCE_CREATED", 201);
}
if ( ! defined("HTTP_RESPONSE_OK_RESOURCE_DELETED")) {
    define("HTTP_RESPONSE_OK_RESOURCE_DELETED", 204);
}
if ( ! defined("HTTP_RESPONSE_OK_RESOURCE_UPDATED")) {
    define("HTTP_RESPONSE_OK_RESOURCE_UPDATED", 205);
}
if ( ! defined("HTTP_RESPONSE_BAD_REQUEST")) {
    define("HTTP_RESPONSE_BAD_REQUEST", 400);
}
if ( ! defined("HTTP_RESPONSE_NOT_FOUND")) {
    define("HTTP_RESPONSE_NOT_FOUND", 404);
}

if ( ! defined("HTTP_RESPONSE_UNAUTHORIZED")) {
    define("HTTP_RESPONSE_UNAUTHORIZED", 401);
}
if ( ! defined("HTTP_RESPONSE_SERVICE_FORBIDDEN")) {
    define("HTTP_RESPONSE_SERVICE_FORBIDDEN", 403);
}

if ( ! defined("HTTP_RESPONSE_INTERNAL_SERVER_ERROR")) {
    define("HTTP_RESPONSE_INTERNAL_SERVER_ERROR", 500);
}
if ( ! defined("HTTP_RESPONSE_NOT_IMPLEMENTED")) {
    define("HTTP_RESPONSE_NOT_IMPLEMENTED", 501);
}



if ( ! defined("ROLE_ADMIN")) {
    define("ROLE_ADMIN", "Admin");
}
if ( ! defined("ROLE_ADS_EDITOR")) {
    define("ROLE_ADS_EDITOR", "Ads Editor");
}
if ( ! defined("ROLE_CONTENT_EDITOR")) {
    define("ROLE_CONTENT_EDITOR", "Content Editor");
}

if ( ! defined("ROLE_CUSTOMER")) {
    define("ROLE_CUSTOMER", "Customer");
}

if ( ! defined("ACCESS_ROLE_ADMIN")) {
    define("ACCESS_ROLE_ADMIN", 1);  // Admin
}
if ( ! defined("ACCESS_ROLE_ADMIN_LABEL")) { // Admin
    define("ACCESS_ROLE_ADMIN_LABEL", ROLE_ADMIN);
}


if ( ! defined("ACCESS_ADS_EDITOR")) {  // Ads Editor
    define("ACCESS_ADS_EDITOR", 2);
}
if ( ! defined("ACCESS_ADS_EDITOR_LABEL")) {
    define("ACCESS_ADS_EDITOR_LABEL", ROLE_ADS_EDITOR);
}


if ( ! defined("ACCESS_ROLE_CONTENT_EDITOR")) {  // Content Editor
    define("ACCESS_ROLE_CONTENT_EDITOR", 3);
}
if ( ! defined("ACCESS_ROLE_CONTENT_EDITOR_LABEL")) {
    define("ACCESS_ROLE_CONTENT_EDITOR_LABEL", ROLE_CONTENT_EDITOR);
}


if ( ! defined("ACCESS_ROLE_CUSTOMER")) {  // Customer
    define("ACCESS_ROLE_CUSTOMER", 4);
}
if ( ! defined("ACCESS_ROLE_CUSTOMER_LABEL")) {
    define("ACCESS_ROLE_CUSTOMER_LABEL", ROLE_CUSTOMER);
}


if ( ! defined("PERMISSION_APP_ADMIN")) {
    define("PERMISSION_APP_ADMIN", 'App admin');
}


//// AD ROLE  BLOCK BEGIN
if ( ! defined("PERMISSION_ADD_AD")) {
    define("PERMISSION_ADD_AD", 'Add ad');
}
if ( ! defined("PERMISSION_EDIT_AD")) {
    define("PERMISSION_EDIT_AD", 'Edit ad');
}
if ( ! defined("PERMISSION_DELETE_AD")) {
    define("PERMISSION_DELETE_AD", 'Delete ad');
}
//// AD ROLE  BLOCK END


//// CONTENT EDITOR ROLE BLOCK BEGIN
if ( ! defined("PERMISSION_ADD_PAGE")) {
    define("PERMISSION_ADD_PAGE", 'Add page');
}
if ( ! defined("PERMISSION_EDIT_PAGE")) {
    define("PERMISSION_EDIT_PAGE", 'Edit page');
}
if ( ! defined("PERMISSION_DELETE_PAGE")) {
    define("PERMISSION_DELETE_PAGE", 'Delete page');
}
//// CONTENT EDITOR ROLE BLOCK END


//// CUSTOMER ROLE BLOCK BEGIN
if ( ! defined("PERMISSION_USE_SERVICES")) {
    define("PERMISSION_USE_SERVICES", 'Use services');
}

if ( ! defined("CAN_USE_ADS_SERVICES")) {
    define("CAN_USE_ADS_SERVICES", 'ads_services');
}
if ( ! defined("SERVICE_CAN_READ_SELL_ADS")) {
    define("SERVICE_CAN_READ_SELL_ADS", 'can_read_sell_ads');
}
if ( ! defined("SERVICE_CAN_READ_BUY_ADS")) {
    define("SERVICE_CAN_READ_BUY_ADS", 'can_read_buy_ads');
}
if ( ! defined("SERVICE_CAN_ADD_BUY_ADS")) {
    define("SERVICE_CAN_ADD_BUY_ADS", 'can_add_buy_ads');
}
if ( ! defined("SERVICE_CAN_ADD_SELL_ADS")) {
    define("SERVICE_CAN_ADD_SELL_ADS", 'can_add_sell_ads');
}
//// CUSTOMER ROLE BLOCK END

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
