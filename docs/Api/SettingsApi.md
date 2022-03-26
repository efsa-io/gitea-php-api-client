# Efsa\Client\SettingsApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeneralAPISettings()**](SettingsApi.md#getGeneralAPISettings) | **GET** /settings/api | Get instance&#39;s global settings for api
[**getGeneralAttachmentSettings()**](SettingsApi.md#getGeneralAttachmentSettings) | **GET** /settings/attachment | Get instance&#39;s global settings for Attachment
[**getGeneralRepositorySettings()**](SettingsApi.md#getGeneralRepositorySettings) | **GET** /settings/repository | Get instance&#39;s global settings for repositories
[**getGeneralUISettings()**](SettingsApi.md#getGeneralUISettings) | **GET** /settings/ui | Get instance&#39;s global settings for ui


## `getGeneralAPISettings()`

```php
getGeneralAPISettings(): \Efsa\Client\Model\GeneralAPISettings
```

Get instance's global settings for api

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeneralAPISettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getGeneralAPISettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\Client\Model\GeneralAPISettings**](../Model/GeneralAPISettings.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeneralAttachmentSettings()`

```php
getGeneralAttachmentSettings(): \Efsa\Client\Model\GeneralAttachmentSettings
```

Get instance's global settings for Attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeneralAttachmentSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getGeneralAttachmentSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\Client\Model\GeneralAttachmentSettings**](../Model/GeneralAttachmentSettings.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeneralRepositorySettings()`

```php
getGeneralRepositorySettings(): \Efsa\Client\Model\GeneralRepoSettings
```

Get instance's global settings for repositories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeneralRepositorySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getGeneralRepositorySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\Client\Model\GeneralRepoSettings**](../Model/GeneralRepoSettings.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeneralUISettings()`

```php
getGeneralUISettings(): \Efsa\Client\Model\GeneralUISettings
```

Get instance's global settings for ui

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeneralUISettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getGeneralUISettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\Client\Model\GeneralUISettings**](../Model/GeneralUISettings.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
