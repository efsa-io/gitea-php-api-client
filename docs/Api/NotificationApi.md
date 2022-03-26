# Efsa\Client\Gitea\NotificationApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**notifyGetList()**](NotificationApi.md#notifyGetList) | **GET** /notifications | List users&#39;s notification threads
[**notifyGetRepoList()**](NotificationApi.md#notifyGetRepoList) | **GET** /repos/{owner}/{repo}/notifications | List users&#39;s notification threads on a specific repo
[**notifyGetThread()**](NotificationApi.md#notifyGetThread) | **GET** /notifications/threads/{id} | Get notification thread by ID
[**notifyNewAvailable()**](NotificationApi.md#notifyNewAvailable) | **GET** /notifications/new | Check if unread notifications exist
[**notifyReadList()**](NotificationApi.md#notifyReadList) | **PUT** /notifications | Mark notification threads as read, pinned or unread
[**notifyReadRepoList()**](NotificationApi.md#notifyReadRepoList) | **PUT** /repos/{owner}/{repo}/notifications | Mark notification threads as read, pinned or unread on a specific repo
[**notifyReadThread()**](NotificationApi.md#notifyReadThread) | **PATCH** /notifications/threads/{id} | Mark notification thread as read by ID


## `notifyGetList()`

```php
notifyGetList($all, $statusTypes, $subjectType, $since, $before, $page, $limit): \Efsa\Client\Gitea\Model\NotificationThread[]
```

List users's notification threads

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = True; // bool | If true, show notifications marked as read. Default value is false
$statusTypes = array('statusTypes_example'); // string[] | Show notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread & pinned.
$subjectType = array('subjectType_example'); // string[] | filter notifications by subject type
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated after the given time. This is a timestamp in RFC 3339 format
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated before the given time. This is a timestamp in RFC 3339 format
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->notifyGetList($all, $statusTypes, $subjectType, $since, $before, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| If true, show notifications marked as read. Default value is false | [optional]
 **statusTypes** | [**string[]**](../Model/string.md)| Show notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread &amp; pinned. | [optional]
 **subjectType** | [**string[]**](../Model/string.md)| filter notifications by subject type | [optional]
 **since** | **\DateTime**| Only show notifications updated after the given time. This is a timestamp in RFC 3339 format | [optional]
 **before** | **\DateTime**| Only show notifications updated before the given time. This is a timestamp in RFC 3339 format | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread[]**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyGetRepoList()`

```php
notifyGetRepoList($owner, $repo, $all, $statusTypes, $subjectType, $since, $before, $page, $limit): \Efsa\Client\Gitea\Model\NotificationThread[]
```

List users's notification threads on a specific repo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$all = True; // bool | If true, show notifications marked as read. Default value is false
$statusTypes = array('statusTypes_example'); // string[] | Show notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread & pinned
$subjectType = array('subjectType_example'); // string[] | filter notifications by subject type
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated after the given time. This is a timestamp in RFC 3339 format
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated before the given time. This is a timestamp in RFC 3339 format
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->notifyGetRepoList($owner, $repo, $all, $statusTypes, $subjectType, $since, $before, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyGetRepoList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **all** | **bool**| If true, show notifications marked as read. Default value is false | [optional]
 **statusTypes** | [**string[]**](../Model/string.md)| Show notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread &amp; pinned | [optional]
 **subjectType** | [**string[]**](../Model/string.md)| filter notifications by subject type | [optional]
 **since** | **\DateTime**| Only show notifications updated after the given time. This is a timestamp in RFC 3339 format | [optional]
 **before** | **\DateTime**| Only show notifications updated before the given time. This is a timestamp in RFC 3339 format | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread[]**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyGetThread()`

```php
notifyGetThread($id): \Efsa\Client\Gitea\Model\NotificationThread
```

Get notification thread by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of notification thread

try {
    $result = $apiInstance->notifyGetThread($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyGetThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of notification thread |

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyNewAvailable()`

```php
notifyNewAvailable(): \Efsa\Client\Gitea\Model\NotificationCount
```

Check if unread notifications exist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->notifyNewAvailable();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyNewAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\Client\Gitea\Model\NotificationCount**](../Model/NotificationCount.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyReadList()`

```php
notifyReadList($lastReadAt, $all, $statusTypes, $toStatus): \Efsa\Client\Gitea\Model\NotificationThread[]
```

Mark notification threads as read, pinned or unread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lastReadAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Describes the last point that notifications were checked. Anything updated since this time will not be updated.
$all = 'all_example'; // string | If true, mark all notifications on this repo. Default value is false
$statusTypes = array('statusTypes_example'); // string[] | Mark notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread.
$toStatus = 'toStatus_example'; // string | Status to mark notifications as, Defaults to read.

try {
    $result = $apiInstance->notifyReadList($lastReadAt, $all, $statusTypes, $toStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyReadList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lastReadAt** | **\DateTime**| Describes the last point that notifications were checked. Anything updated since this time will not be updated. | [optional]
 **all** | **string**| If true, mark all notifications on this repo. Default value is false | [optional]
 **statusTypes** | [**string[]**](../Model/string.md)| Mark notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread. | [optional]
 **toStatus** | **string**| Status to mark notifications as, Defaults to read. | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread[]**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyReadRepoList()`

```php
notifyReadRepoList($owner, $repo, $all, $statusTypes, $toStatus, $lastReadAt): \Efsa\Client\Gitea\Model\NotificationThread[]
```

Mark notification threads as read, pinned or unread on a specific repo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$all = 'all_example'; // string | If true, mark all notifications on this repo. Default value is false
$statusTypes = array('statusTypes_example'); // string[] | Mark notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread.
$toStatus = 'toStatus_example'; // string | Status to mark notifications as. Defaults to read.
$lastReadAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Describes the last point that notifications were checked. Anything updated since this time will not be updated.

try {
    $result = $apiInstance->notifyReadRepoList($owner, $repo, $all, $statusTypes, $toStatus, $lastReadAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyReadRepoList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **all** | **string**| If true, mark all notifications on this repo. Default value is false | [optional]
 **statusTypes** | [**string[]**](../Model/string.md)| Mark notifications with the provided status types. Options are: unread, read and/or pinned. Defaults to unread. | [optional]
 **toStatus** | **string**| Status to mark notifications as. Defaults to read. | [optional]
 **lastReadAt** | **\DateTime**| Describes the last point that notifications were checked. Anything updated since this time will not be updated. | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread[]**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notifyReadThread()`

```php
notifyReadThread($id, $toStatus): \Efsa\Client\Gitea\Model\NotificationThread
```

Mark notification thread as read by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AccessToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

// Configure API key authorization: AuthorizationHeaderToken
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure HTTP basic authorization: BasicAuth
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: SudoHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('Sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Sudo', 'Bearer');

// Configure API key authorization: SudoParam
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('sudo', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('sudo', 'Bearer');

// Configure API key authorization: TOTPHeader
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('X-GITEA-OTP', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-GITEA-OTP', 'Bearer');

// Configure API key authorization: Token
$config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Efsa\Client\Gitea\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new Efsa\Client\Gitea\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | id of notification thread
$toStatus = 'read'; // string | Status to mark notifications as

try {
    $result = $apiInstance->notifyReadThread($id, $toStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notifyReadThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of notification thread |
 **toStatus** | **string**| Status to mark notifications as | [optional] [default to &#39;read&#39;]

### Return type

[**\Efsa\Client\Gitea\Model\NotificationThread**](../Model/NotificationThread.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
