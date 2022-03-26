# Efsa\Client\Gitea\AdminApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**adminAdoptRepository()**](AdminApi.md#adminAdoptRepository) | **POST** /admin/unadopted/{owner}/{repo} | Adopt unadopted files as a repository
[**adminCreateOrg()**](AdminApi.md#adminCreateOrg) | **POST** /admin/users/{username}/orgs | Create an organization
[**adminCreatePublicKey()**](AdminApi.md#adminCreatePublicKey) | **POST** /admin/users/{username}/keys | Add a public key on behalf of a user
[**adminCreateRepo()**](AdminApi.md#adminCreateRepo) | **POST** /admin/users/{username}/repos | Create a repository on behalf of a user
[**adminCreateUser()**](AdminApi.md#adminCreateUser) | **POST** /admin/users | Create a user
[**adminCronList()**](AdminApi.md#adminCronList) | **GET** /admin/cron | List cron tasks
[**adminCronRun()**](AdminApi.md#adminCronRun) | **POST** /admin/cron/{task} | Run cron task
[**adminDeleteUnadoptedRepository()**](AdminApi.md#adminDeleteUnadoptedRepository) | **DELETE** /admin/unadopted/{owner}/{repo} | Delete unadopted files
[**adminDeleteUser()**](AdminApi.md#adminDeleteUser) | **DELETE** /admin/users/{username} | Delete a user
[**adminDeleteUserPublicKey()**](AdminApi.md#adminDeleteUserPublicKey) | **DELETE** /admin/users/{username}/keys/{id} | Delete a user&#39;s public key
[**adminEditUser()**](AdminApi.md#adminEditUser) | **PATCH** /admin/users/{username} | Edit an existing user
[**adminGetAllOrgs()**](AdminApi.md#adminGetAllOrgs) | **GET** /admin/orgs | List all organizations
[**adminGetAllUsers()**](AdminApi.md#adminGetAllUsers) | **GET** /admin/users | List all users
[**adminUnadoptedList()**](AdminApi.md#adminUnadoptedList) | **GET** /admin/unadopted | List unadopted repositories


## `adminAdoptRepository()`

```php
adminAdoptRepository($owner, $repo)
```

Adopt unadopted files as a repository

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo

try {
    $apiInstance->adminAdoptRepository($owner, $repo);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminAdoptRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateOrg()`

```php
adminCreateOrg($username, $organization): \Efsa\Client\Gitea\Model\Organization
```

Create an organization

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of the user that will own the created organization
$organization = new \Efsa\Client\Gitea\Model\CreateOrgOption(); // \Efsa\Client\Gitea\Model\CreateOrgOption

try {
    $result = $apiInstance->adminCreateOrg($username, $organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCreateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of the user that will own the created organization |
 **organization** | [**\Efsa\Client\Gitea\Model\CreateOrgOption**](../Model/CreateOrgOption.md)|  |

### Return type

[**\Efsa\Client\Gitea\Model\Organization**](../Model/Organization.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreatePublicKey()`

```php
adminCreatePublicKey($username, $key): \Efsa\Client\Gitea\Model\PublicKey
```

Add a public key on behalf of a user

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of the user
$key = new \Efsa\Client\Gitea\Model\CreateKeyOption(); // \Efsa\Client\Gitea\Model\CreateKeyOption

try {
    $result = $apiInstance->adminCreatePublicKey($username, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCreatePublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of the user |
 **key** | [**\Efsa\Client\Gitea\Model\CreateKeyOption**](../Model/CreateKeyOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\PublicKey**](../Model/PublicKey.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateRepo()`

```php
adminCreateRepo($username, $repository): \Efsa\Client\Gitea\Model\Repository
```

Create a repository on behalf of a user

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of the user. This user will own the created repository
$repository = new \Efsa\Client\Gitea\Model\CreateRepoOption(); // \Efsa\Client\Gitea\Model\CreateRepoOption

try {
    $result = $apiInstance->adminCreateRepo($username, $repository);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCreateRepo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of the user. This user will own the created repository |
 **repository** | [**\Efsa\Client\Gitea\Model\CreateRepoOption**](../Model/CreateRepoOption.md)|  |

### Return type

[**\Efsa\Client\Gitea\Model\Repository**](../Model/Repository.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCreateUser()`

```php
adminCreateUser($body): \Efsa\Client\Gitea\Model\User
```

Create a user

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Efsa\Client\Gitea\Model\CreateUserOption(); // \Efsa\Client\Gitea\Model\CreateUserOption

try {
    $result = $apiInstance->adminCreateUser($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCreateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\Client\Gitea\Model\CreateUserOption**](../Model/CreateUserOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\User**](../Model/User.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCronList()`

```php
adminCronList($page, $limit): \Efsa\Client\Gitea\Model\Cron[]
```

List cron tasks

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->adminCronList($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCronList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Cron[]**](../Model/Cron.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminCronRun()`

```php
adminCronRun($task)
```

Run cron task

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task = 'task_example'; // string | task to run

try {
    $apiInstance->adminCronRun($task);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminCronRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | **string**| task to run |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteUnadoptedRepository()`

```php
adminDeleteUnadoptedRepository($owner, $repo)
```

Delete unadopted files

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo

try {
    $apiInstance->adminDeleteUnadoptedRepository($owner, $repo);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminDeleteUnadoptedRepository: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteUser()`

```php
adminDeleteUser($username)
```

Delete a user

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of user to delete

try {
    $apiInstance->adminDeleteUser($username);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminDeleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of user to delete |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminDeleteUserPublicKey()`

```php
adminDeleteUserPublicKey($username, $id)
```

Delete a user's public key

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of user
$id = 56; // int | id of the key to delete

try {
    $apiInstance->adminDeleteUserPublicKey($username, $id);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminDeleteUserPublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of user |
 **id** | **int**| id of the key to delete |

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminEditUser()`

```php
adminEditUser($username, $body): \Efsa\Client\Gitea\Model\User
```

Edit an existing user

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | username of user to edit
$body = new \Efsa\Client\Gitea\Model\EditUserOption(); // \Efsa\Client\Gitea\Model\EditUserOption

try {
    $result = $apiInstance->adminEditUser($username, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminEditUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username of user to edit |
 **body** | [**\Efsa\Client\Gitea\Model\EditUserOption**](../Model/EditUserOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\User**](../Model/User.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetAllOrgs()`

```php
adminGetAllOrgs($page, $limit): \Efsa\Client\Gitea\Model\Organization[]
```

List all organizations

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->adminGetAllOrgs($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminGetAllOrgs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Organization[]**](../Model/Organization.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminGetAllUsers()`

```php
adminGetAllUsers($page, $limit): \Efsa\Client\Gitea\Model\User[]
```

List all users

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->adminGetAllUsers($page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminGetAllUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\User[]**](../Model/User.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminUnadoptedList()`

```php
adminUnadoptedList($page, $limit, $pattern): string[]
```

List unadopted repositories

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


$apiInstance = new Efsa\Client\Gitea\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results
$pattern = 'pattern_example'; // string | pattern of repositories to search for

try {
    $result = $apiInstance->adminUnadoptedList($page, $limit, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->adminUnadoptedList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]
 **pattern** | **string**| pattern of repositories to search for | [optional]

### Return type

**string[]**

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
