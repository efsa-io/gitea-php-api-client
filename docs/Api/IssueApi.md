# Efsa\Client\Gitea\IssueApi

All URIs are relative to http://localhost/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**issueAddLabel()**](IssueApi.md#issueAddLabel) | **POST** /repos/{owner}/{repo}/issues/{index}/labels | Add a label to an issue
[**issueAddSubscription()**](IssueApi.md#issueAddSubscription) | **PUT** /repos/{owner}/{repo}/issues/{index}/subscriptions/{user} | Subscribe user to issue
[**issueAddTime()**](IssueApi.md#issueAddTime) | **POST** /repos/{owner}/{repo}/issues/{index}/times | Add tracked time to a issue
[**issueCheckSubscription()**](IssueApi.md#issueCheckSubscription) | **GET** /repos/{owner}/{repo}/issues/{index}/subscriptions/check | Check if user is subscribed to an issue
[**issueClearLabels()**](IssueApi.md#issueClearLabels) | **DELETE** /repos/{owner}/{repo}/issues/{index}/labels | Remove all labels from an issue
[**issueCreateComment()**](IssueApi.md#issueCreateComment) | **POST** /repos/{owner}/{repo}/issues/{index}/comments | Add a comment to an issue
[**issueCreateIssue()**](IssueApi.md#issueCreateIssue) | **POST** /repos/{owner}/{repo}/issues | Create an issue. If using deadline only the date will be taken into account, and time of day ignored.
[**issueCreateLabel()**](IssueApi.md#issueCreateLabel) | **POST** /repos/{owner}/{repo}/labels | Create a label
[**issueCreateMilestone()**](IssueApi.md#issueCreateMilestone) | **POST** /repos/{owner}/{repo}/milestones | Create a milestone
[**issueDelete()**](IssueApi.md#issueDelete) | **DELETE** /repos/{owner}/{repo}/issues/{index} | Delete an issue
[**issueDeleteComment()**](IssueApi.md#issueDeleteComment) | **DELETE** /repos/{owner}/{repo}/issues/comments/{id} | Delete a comment
[**issueDeleteCommentDeprecated()**](IssueApi.md#issueDeleteCommentDeprecated) | **DELETE** /repos/{owner}/{repo}/issues/{index}/comments/{id} | Delete a comment
[**issueDeleteCommentReaction()**](IssueApi.md#issueDeleteCommentReaction) | **DELETE** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Remove a reaction from a comment of an issue
[**issueDeleteIssueReaction()**](IssueApi.md#issueDeleteIssueReaction) | **DELETE** /repos/{owner}/{repo}/issues/{index}/reactions | Remove a reaction from an issue
[**issueDeleteLabel()**](IssueApi.md#issueDeleteLabel) | **DELETE** /repos/{owner}/{repo}/labels/{id} | Delete a label
[**issueDeleteMilestone()**](IssueApi.md#issueDeleteMilestone) | **DELETE** /repos/{owner}/{repo}/milestones/{id} | Delete a milestone
[**issueDeleteStopWatch()**](IssueApi.md#issueDeleteStopWatch) | **DELETE** /repos/{owner}/{repo}/issues/{index}/stopwatch/delete | Delete an issue&#39;s existing stopwatch.
[**issueDeleteSubscription()**](IssueApi.md#issueDeleteSubscription) | **DELETE** /repos/{owner}/{repo}/issues/{index}/subscriptions/{user} | Unsubscribe user from issue
[**issueDeleteTime()**](IssueApi.md#issueDeleteTime) | **DELETE** /repos/{owner}/{repo}/issues/{index}/times/{id} | Delete specific tracked time
[**issueEditComment()**](IssueApi.md#issueEditComment) | **PATCH** /repos/{owner}/{repo}/issues/comments/{id} | Edit a comment
[**issueEditCommentDeprecated()**](IssueApi.md#issueEditCommentDeprecated) | **PATCH** /repos/{owner}/{repo}/issues/{index}/comments/{id} | Edit a comment
[**issueEditIssue()**](IssueApi.md#issueEditIssue) | **PATCH** /repos/{owner}/{repo}/issues/{index} | Edit an issue. If using deadline only the date will be taken into account, and time of day ignored.
[**issueEditIssueDeadline()**](IssueApi.md#issueEditIssueDeadline) | **POST** /repos/{owner}/{repo}/issues/{index}/deadline | Set an issue deadline. If set to null, the deadline is deleted. If using deadline only the date will be taken into account, and time of day ignored.
[**issueEditLabel()**](IssueApi.md#issueEditLabel) | **PATCH** /repos/{owner}/{repo}/labels/{id} | Update a label
[**issueEditMilestone()**](IssueApi.md#issueEditMilestone) | **PATCH** /repos/{owner}/{repo}/milestones/{id} | Update a milestone
[**issueGetComment()**](IssueApi.md#issueGetComment) | **GET** /repos/{owner}/{repo}/issues/comments/{id} | Get a comment
[**issueGetCommentReactions()**](IssueApi.md#issueGetCommentReactions) | **GET** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Get a list of reactions from a comment of an issue
[**issueGetComments()**](IssueApi.md#issueGetComments) | **GET** /repos/{owner}/{repo}/issues/{index}/comments | List all comments on an issue
[**issueGetCommentsAndTimeline()**](IssueApi.md#issueGetCommentsAndTimeline) | **GET** /repos/{owner}/{repo}/issues/{index}/timeline | List all comments and events on an issue
[**issueGetIssue()**](IssueApi.md#issueGetIssue) | **GET** /repos/{owner}/{repo}/issues/{index} | Get an issue
[**issueGetIssueReactions()**](IssueApi.md#issueGetIssueReactions) | **GET** /repos/{owner}/{repo}/issues/{index}/reactions | Get a list reactions of an issue
[**issueGetLabel()**](IssueApi.md#issueGetLabel) | **GET** /repos/{owner}/{repo}/labels/{id} | Get a single label
[**issueGetLabels()**](IssueApi.md#issueGetLabels) | **GET** /repos/{owner}/{repo}/issues/{index}/labels | Get an issue&#39;s labels
[**issueGetMilestone()**](IssueApi.md#issueGetMilestone) | **GET** /repos/{owner}/{repo}/milestones/{id} | Get a milestone
[**issueGetMilestonesList()**](IssueApi.md#issueGetMilestonesList) | **GET** /repos/{owner}/{repo}/milestones | Get all of a repository&#39;s opened milestones
[**issueGetRepoComments()**](IssueApi.md#issueGetRepoComments) | **GET** /repos/{owner}/{repo}/issues/comments | List all comments in a repository
[**issueListIssues()**](IssueApi.md#issueListIssues) | **GET** /repos/{owner}/{repo}/issues | List a repository&#39;s issues
[**issueListLabels()**](IssueApi.md#issueListLabels) | **GET** /repos/{owner}/{repo}/labels | Get all of a repository&#39;s labels
[**issuePostCommentReaction()**](IssueApi.md#issuePostCommentReaction) | **POST** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Add a reaction to a comment of an issue
[**issuePostIssueReaction()**](IssueApi.md#issuePostIssueReaction) | **POST** /repos/{owner}/{repo}/issues/{index}/reactions | Add a reaction to an issue
[**issueRemoveLabel()**](IssueApi.md#issueRemoveLabel) | **DELETE** /repos/{owner}/{repo}/issues/{index}/labels/{id} | Remove a label from an issue
[**issueReplaceLabels()**](IssueApi.md#issueReplaceLabels) | **PUT** /repos/{owner}/{repo}/issues/{index}/labels | Replace an issue&#39;s labels
[**issueResetTime()**](IssueApi.md#issueResetTime) | **DELETE** /repos/{owner}/{repo}/issues/{index}/times | Reset a tracked time of an issue
[**issueSearchIssues()**](IssueApi.md#issueSearchIssues) | **GET** /repos/issues/search | Search for issues across the repositories that the user has access to
[**issueStartStopWatch()**](IssueApi.md#issueStartStopWatch) | **POST** /repos/{owner}/{repo}/issues/{index}/stopwatch/start | Start stopwatch on an issue.
[**issueStopStopWatch()**](IssueApi.md#issueStopStopWatch) | **POST** /repos/{owner}/{repo}/issues/{index}/stopwatch/stop | Stop an issue&#39;s existing stopwatch.
[**issueSubscriptions()**](IssueApi.md#issueSubscriptions) | **GET** /repos/{owner}/{repo}/issues/{index}/subscriptions | Get users who subscribed on an issue.
[**issueTrackedTimes()**](IssueApi.md#issueTrackedTimes) | **GET** /repos/{owner}/{repo}/issues/{index}/times | List an issue&#39;s tracked times


## `issueAddLabel()`

```php
issueAddLabel($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\Label[]
```

Add a label to an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$body = new \Efsa\Client\Gitea\Model\IssueLabelsOption(); // \Efsa\Client\Gitea\Model\IssueLabelsOption

try {
    $result = $apiInstance->issueAddLabel($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueAddLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **body** | [**\Efsa\Client\Gitea\Model\IssueLabelsOption**](../Model/IssueLabelsOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Label[]**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueAddSubscription()`

```php
issueAddSubscription($owner, $repo, $index, $user)
```

Subscribe user to issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$user = 'user_example'; // string | user to subscribe

try {
    $apiInstance->issueAddSubscription($owner, $repo, $index, $user);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueAddSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **user** | **string**| user to subscribe |

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

## `issueAddTime()`

```php
issueAddTime($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\TrackedTime
```

Add tracked time to a issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$body = new \Efsa\Client\Gitea\Model\AddTimeOption(); // \Efsa\Client\Gitea\Model\AddTimeOption

try {
    $result = $apiInstance->issueAddTime($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueAddTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **body** | [**\Efsa\Client\Gitea\Model\AddTimeOption**](../Model/AddTimeOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\TrackedTime**](../Model/TrackedTime.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueCheckSubscription()`

```php
issueCheckSubscription($owner, $repo, $index): \Efsa\Client\Gitea\Model\WatchInfo
```

Check if user is subscribed to an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue

try {
    $result = $apiInstance->issueCheckSubscription($owner, $repo, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCheckSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |

### Return type

[**\Efsa\Client\Gitea\Model\WatchInfo**](../Model/WatchInfo.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueClearLabels()`

```php
issueClearLabels($owner, $repo, $index)
```

Remove all labels from an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue

try {
    $apiInstance->issueClearLabels($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueClearLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |

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

## `issueCreateComment()`

```php
issueCreateComment($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\Comment
```

Add a comment to an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$body = new \Efsa\Client\Gitea\Model\CreateIssueCommentOption(); // \Efsa\Client\Gitea\Model\CreateIssueCommentOption

try {
    $result = $apiInstance->issueCreateComment($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCreateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **body** | [**\Efsa\Client\Gitea\Model\CreateIssueCommentOption**](../Model/CreateIssueCommentOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Comment**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueCreateIssue()`

```php
issueCreateIssue($owner, $repo, $body): \Efsa\Client\Gitea\Model\Issue
```

Create an issue. If using deadline only the date will be taken into account, and time of day ignored.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$body = new \Efsa\Client\Gitea\Model\CreateIssueOption(); // \Efsa\Client\Gitea\Model\CreateIssueOption

try {
    $result = $apiInstance->issueCreateIssue($owner, $repo, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCreateIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **body** | [**\Efsa\Client\Gitea\Model\CreateIssueOption**](../Model/CreateIssueOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Issue**](../Model/Issue.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueCreateLabel()`

```php
issueCreateLabel($owner, $repo, $body): \Efsa\Client\Gitea\Model\Label
```

Create a label

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$body = new \Efsa\Client\Gitea\Model\CreateLabelOption(); // \Efsa\Client\Gitea\Model\CreateLabelOption

try {
    $result = $apiInstance->issueCreateLabel($owner, $repo, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCreateLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **body** | [**\Efsa\Client\Gitea\Model\CreateLabelOption**](../Model/CreateLabelOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Label**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueCreateMilestone()`

```php
issueCreateMilestone($owner, $repo, $body): \Efsa\Client\Gitea\Model\Milestone
```

Create a milestone

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$body = new \Efsa\Client\Gitea\Model\CreateMilestoneOption(); // \Efsa\Client\Gitea\Model\CreateMilestoneOption

try {
    $result = $apiInstance->issueCreateMilestone($owner, $repo, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCreateMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **body** | [**\Efsa\Client\Gitea\Model\CreateMilestoneOption**](../Model/CreateMilestoneOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Milestone**](../Model/Milestone.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueDelete()`

```php
issueDelete($owner, $repo, $index)
```

Delete an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of issue to delete

try {
    $apiInstance->issueDelete($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of issue to delete |

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

## `issueDeleteComment()`

```php
issueDeleteComment($owner, $repo, $id)
```

Delete a comment

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of comment to delete

try {
    $apiInstance->issueDeleteComment($owner, $repo, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of comment to delete |

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

## `issueDeleteCommentDeprecated()`

```php
issueDeleteCommentDeprecated($owner, $repo, $index, $id)
```

Delete a comment

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | this parameter is ignored
$id = 56; // int | id of comment to delete

try {
    $apiInstance->issueDeleteCommentDeprecated($owner, $repo, $index, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteCommentDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| this parameter is ignored |
 **id** | **int**| id of comment to delete |

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

## `issueDeleteCommentReaction()`

```php
issueDeleteCommentReaction($owner, $repo, $id, $content)
```

Remove a reaction from a comment of an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the comment to edit
$content = new \Efsa\Client\Gitea\Model\EditReactionOption(); // \Efsa\Client\Gitea\Model\EditReactionOption

try {
    $apiInstance->issueDeleteCommentReaction($owner, $repo, $id, $content);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteCommentReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the comment to edit |
 **content** | [**\Efsa\Client\Gitea\Model\EditReactionOption**](../Model/EditReactionOption.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueDeleteIssueReaction()`

```php
issueDeleteIssueReaction($owner, $repo, $index, $content)
```

Remove a reaction from an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$content = new \Efsa\Client\Gitea\Model\EditReactionOption(); // \Efsa\Client\Gitea\Model\EditReactionOption

try {
    $apiInstance->issueDeleteIssueReaction($owner, $repo, $index, $content);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteIssueReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **content** | [**\Efsa\Client\Gitea\Model\EditReactionOption**](../Model/EditReactionOption.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueDeleteLabel()`

```php
issueDeleteLabel($owner, $repo, $id)
```

Delete a label

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the label to delete

try {
    $apiInstance->issueDeleteLabel($owner, $repo, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the label to delete |

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

## `issueDeleteMilestone()`

```php
issueDeleteMilestone($owner, $repo, $id)
```

Delete a milestone

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 'id_example'; // string | the milestone to delete, identified by ID and if not available by name

try {
    $apiInstance->issueDeleteMilestone($owner, $repo, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **string**| the milestone to delete, identified by ID and if not available by name |

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

## `issueDeleteStopWatch()`

```php
issueDeleteStopWatch($owner, $repo, $index)
```

Delete an issue's existing stopwatch.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to stop the stopwatch on

try {
    $apiInstance->issueDeleteStopWatch($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteStopWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to stop the stopwatch on |

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

## `issueDeleteSubscription()`

```php
issueDeleteSubscription($owner, $repo, $index, $user)
```

Unsubscribe user from issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$user = 'user_example'; // string | user witch unsubscribe

try {
    $apiInstance->issueDeleteSubscription($owner, $repo, $index, $user);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **user** | **string**| user witch unsubscribe |

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

## `issueDeleteTime()`

```php
issueDeleteTime($owner, $repo, $index, $id)
```

Delete specific tracked time

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$id = 56; // int | id of time to delete

try {
    $apiInstance->issueDeleteTime($owner, $repo, $index, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueDeleteTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **id** | **int**| id of time to delete |

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

## `issueEditComment()`

```php
issueEditComment($owner, $repo, $id, $body): \Efsa\Client\Gitea\Model\Comment
```

Edit a comment

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the comment to edit
$body = new \Efsa\Client\Gitea\Model\EditIssueCommentOption(); // \Efsa\Client\Gitea\Model\EditIssueCommentOption

try {
    $result = $apiInstance->issueEditComment($owner, $repo, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the comment to edit |
 **body** | [**\Efsa\Client\Gitea\Model\EditIssueCommentOption**](../Model/EditIssueCommentOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Comment**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueEditCommentDeprecated()`

```php
issueEditCommentDeprecated($owner, $repo, $index, $id, $body): \Efsa\Client\Gitea\Model\Comment
```

Edit a comment

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | this parameter is ignored
$id = 56; // int | id of the comment to edit
$body = new \Efsa\Client\Gitea\Model\EditIssueCommentOption(); // \Efsa\Client\Gitea\Model\EditIssueCommentOption

try {
    $result = $apiInstance->issueEditCommentDeprecated($owner, $repo, $index, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditCommentDeprecated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| this parameter is ignored |
 **id** | **int**| id of the comment to edit |
 **body** | [**\Efsa\Client\Gitea\Model\EditIssueCommentOption**](../Model/EditIssueCommentOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Comment**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueEditIssue()`

```php
issueEditIssue($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\Issue
```

Edit an issue. If using deadline only the date will be taken into account, and time of day ignored.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to edit
$body = new \Efsa\Client\Gitea\Model\EditIssueOption(); // \Efsa\Client\Gitea\Model\EditIssueOption

try {
    $result = $apiInstance->issueEditIssue($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to edit |
 **body** | [**\Efsa\Client\Gitea\Model\EditIssueOption**](../Model/EditIssueOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Issue**](../Model/Issue.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueEditIssueDeadline()`

```php
issueEditIssueDeadline($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\IssueDeadline
```

Set an issue deadline. If set to null, the deadline is deleted. If using deadline only the date will be taken into account, and time of day ignored.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to create or update a deadline on
$body = new \Efsa\Client\Gitea\Model\EditDeadlineOption(); // \Efsa\Client\Gitea\Model\EditDeadlineOption

try {
    $result = $apiInstance->issueEditIssueDeadline($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditIssueDeadline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to create or update a deadline on |
 **body** | [**\Efsa\Client\Gitea\Model\EditDeadlineOption**](../Model/EditDeadlineOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\IssueDeadline**](../Model/IssueDeadline.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueEditLabel()`

```php
issueEditLabel($owner, $repo, $id, $body): \Efsa\Client\Gitea\Model\Label
```

Update a label

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the label to edit
$body = new \Efsa\Client\Gitea\Model\EditLabelOption(); // \Efsa\Client\Gitea\Model\EditLabelOption

try {
    $result = $apiInstance->issueEditLabel($owner, $repo, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the label to edit |
 **body** | [**\Efsa\Client\Gitea\Model\EditLabelOption**](../Model/EditLabelOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Label**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueEditMilestone()`

```php
issueEditMilestone($owner, $repo, $id, $body): \Efsa\Client\Gitea\Model\Milestone
```

Update a milestone

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 'id_example'; // string | the milestone to edit, identified by ID and if not available by name
$body = new \Efsa\Client\Gitea\Model\EditMilestoneOption(); // \Efsa\Client\Gitea\Model\EditMilestoneOption

try {
    $result = $apiInstance->issueEditMilestone($owner, $repo, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueEditMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **string**| the milestone to edit, identified by ID and if not available by name |
 **body** | [**\Efsa\Client\Gitea\Model\EditMilestoneOption**](../Model/EditMilestoneOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Milestone**](../Model/Milestone.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetComment()`

```php
issueGetComment($owner, $repo, $id): \Efsa\Client\Gitea\Model\Comment
```

Get a comment

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the comment

try {
    $result = $apiInstance->issueGetComment($owner, $repo, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the comment |

### Return type

[**\Efsa\Client\Gitea\Model\Comment**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetCommentReactions()`

```php
issueGetCommentReactions($owner, $repo, $id): \Efsa\Client\Gitea\Model\Reaction[]
```

Get a list of reactions from a comment of an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the comment to edit

try {
    $result = $apiInstance->issueGetCommentReactions($owner, $repo, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetCommentReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the comment to edit |

### Return type

[**\Efsa\Client\Gitea\Model\Reaction[]**](../Model/Reaction.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetComments()`

```php
issueGetComments($owner, $repo, $index, $since, $before): \Efsa\Client\Gitea\Model\Comment[]
```

List all comments on an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated since the specified time are returned.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated before the provided time are returned.

try {
    $result = $apiInstance->issueGetComments($owner, $repo, $index, $since, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **since** | **\DateTime**| if provided, only comments updated since the specified time are returned. | [optional]
 **before** | **\DateTime**| if provided, only comments updated before the provided time are returned. | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Comment[]**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetCommentsAndTimeline()`

```php
issueGetCommentsAndTimeline($owner, $repo, $index, $since, $page, $limit, $before): \Efsa\Client\Gitea\Model\TimelineComment[]
```

List all comments and events on an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated since the specified time are returned.
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated before the provided time are returned.

try {
    $result = $apiInstance->issueGetCommentsAndTimeline($owner, $repo, $index, $since, $page, $limit, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetCommentsAndTimeline: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **since** | **\DateTime**| if provided, only comments updated since the specified time are returned. | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]
 **before** | **\DateTime**| if provided, only comments updated before the provided time are returned. | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\TimelineComment[]**](../Model/TimelineComment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetIssue()`

```php
issueGetIssue($owner, $repo, $index): \Efsa\Client\Gitea\Model\Issue
```

Get an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to get

try {
    $result = $apiInstance->issueGetIssue($owner, $repo, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetIssue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to get |

### Return type

[**\Efsa\Client\Gitea\Model\Issue**](../Model/Issue.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetIssueReactions()`

```php
issueGetIssueReactions($owner, $repo, $index, $page, $limit): \Efsa\Client\Gitea\Model\Reaction[]
```

Get a list reactions of an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueGetIssueReactions($owner, $repo, $index, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetIssueReactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Reaction[]**](../Model/Reaction.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetLabel()`

```php
issueGetLabel($owner, $repo, $id): \Efsa\Client\Gitea\Model\Label
```

Get a single label

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the label to get

try {
    $result = $apiInstance->issueGetLabel($owner, $repo, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the label to get |

### Return type

[**\Efsa\Client\Gitea\Model\Label**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetLabels()`

```php
issueGetLabels($owner, $repo, $index): \Efsa\Client\Gitea\Model\Label[]
```

Get an issue's labels

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue

try {
    $result = $apiInstance->issueGetLabels($owner, $repo, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |

### Return type

[**\Efsa\Client\Gitea\Model\Label[]**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetMilestone()`

```php
issueGetMilestone($owner, $repo, $id): \Efsa\Client\Gitea\Model\Milestone
```

Get a milestone

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 'id_example'; // string | the milestone to get, identified by ID and if not available by name

try {
    $result = $apiInstance->issueGetMilestone($owner, $repo, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetMilestone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **string**| the milestone to get, identified by ID and if not available by name |

### Return type

[**\Efsa\Client\Gitea\Model\Milestone**](../Model/Milestone.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetMilestonesList()`

```php
issueGetMilestonesList($owner, $repo, $state, $name, $page, $limit): \Efsa\Client\Gitea\Model\Milestone[]
```

Get all of a repository's opened milestones

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$state = 'state_example'; // string | Milestone state, Recognised values are open, closed and all. Defaults to \"open\"
$name = 'name_example'; // string | filter by milestone name
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueGetMilestonesList($owner, $repo, $state, $name, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetMilestonesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **state** | **string**| Milestone state, Recognised values are open, closed and all. Defaults to \&quot;open\&quot; | [optional]
 **name** | **string**| filter by milestone name | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Milestone[]**](../Model/Milestone.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueGetRepoComments()`

```php
issueGetRepoComments($owner, $repo, $since, $before, $page, $limit): \Efsa\Client\Gitea\Model\Comment[]
```

List all comments in a repository

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated since the provided time are returned.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | if provided, only comments updated before the provided time are returned.
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueGetRepoComments($owner, $repo, $since, $before, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGetRepoComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **since** | **\DateTime**| if provided, only comments updated since the provided time are returned. | [optional]
 **before** | **\DateTime**| if provided, only comments updated before the provided time are returned. | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Comment[]**](../Model/Comment.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueListIssues()`

```php
issueListIssues($owner, $repo, $state, $labels, $q, $type, $milestones, $since, $before, $createdBy, $assignedBy, $mentionedBy, $page, $limit): \Efsa\Client\Gitea\Model\Issue[]
```

List a repository's issues

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$state = 'state_example'; // string | whether issue is open or closed
$labels = 'labels_example'; // string | comma separated list of labels. Fetch only issues that have any of this labels. Non existent labels are discarded
$q = 'q_example'; // string | search string
$type = 'type_example'; // string | filter by type (issues / pulls) if set
$milestones = 'milestones_example'; // string | comma separated list of milestone names or ids. It uses names and fall back to ids. Fetch only issues that have any of this milestones. Non existent milestones are discarded
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show items updated after the given time. This is a timestamp in RFC 3339 format
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show items updated before the given time. This is a timestamp in RFC 3339 format
$createdBy = 'createdBy_example'; // string | Only show items which were created by the the given user
$assignedBy = 'assignedBy_example'; // string | Only show items for which the given user is assigned
$mentionedBy = 'mentionedBy_example'; // string | Only show items in which the given user was mentioned
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueListIssues($owner, $repo, $state, $labels, $q, $type, $milestones, $since, $before, $createdBy, $assignedBy, $mentionedBy, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueListIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **state** | **string**| whether issue is open or closed | [optional]
 **labels** | **string**| comma separated list of labels. Fetch only issues that have any of this labels. Non existent labels are discarded | [optional]
 **q** | **string**| search string | [optional]
 **type** | **string**| filter by type (issues / pulls) if set | [optional]
 **milestones** | **string**| comma separated list of milestone names or ids. It uses names and fall back to ids. Fetch only issues that have any of this milestones. Non existent milestones are discarded | [optional]
 **since** | **\DateTime**| Only show items updated after the given time. This is a timestamp in RFC 3339 format | [optional]
 **before** | **\DateTime**| Only show items updated before the given time. This is a timestamp in RFC 3339 format | [optional]
 **createdBy** | **string**| Only show items which were created by the the given user | [optional]
 **assignedBy** | **string**| Only show items for which the given user is assigned | [optional]
 **mentionedBy** | **string**| Only show items in which the given user was mentioned | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Issue[]**](../Model/Issue.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueListLabels()`

```php
issueListLabels($owner, $repo, $page, $limit): \Efsa\Client\Gitea\Model\Label[]
```

Get all of a repository's labels

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueListLabels($owner, $repo, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueListLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Label[]**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issuePostCommentReaction()`

```php
issuePostCommentReaction($owner, $repo, $id, $content): \Efsa\Client\Gitea\Model\Reaction
```

Add a reaction to a comment of an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$id = 56; // int | id of the comment to edit
$content = new \Efsa\Client\Gitea\Model\EditReactionOption(); // \Efsa\Client\Gitea\Model\EditReactionOption

try {
    $result = $apiInstance->issuePostCommentReaction($owner, $repo, $id, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issuePostCommentReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **id** | **int**| id of the comment to edit |
 **content** | [**\Efsa\Client\Gitea\Model\EditReactionOption**](../Model/EditReactionOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Reaction**](../Model/Reaction.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issuePostIssueReaction()`

```php
issuePostIssueReaction($owner, $repo, $index, $content): \Efsa\Client\Gitea\Model\Reaction
```

Add a reaction to an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$content = new \Efsa\Client\Gitea\Model\EditReactionOption(); // \Efsa\Client\Gitea\Model\EditReactionOption

try {
    $result = $apiInstance->issuePostIssueReaction($owner, $repo, $index, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issuePostIssueReaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **content** | [**\Efsa\Client\Gitea\Model\EditReactionOption**](../Model/EditReactionOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Reaction**](../Model/Reaction.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueRemoveLabel()`

```php
issueRemoveLabel($owner, $repo, $index, $id)
```

Remove a label from an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$id = 56; // int | id of the label to remove

try {
    $apiInstance->issueRemoveLabel($owner, $repo, $index, $id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueRemoveLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **id** | **int**| id of the label to remove |

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

## `issueReplaceLabels()`

```php
issueReplaceLabels($owner, $repo, $index, $body): \Efsa\Client\Gitea\Model\Label[]
```

Replace an issue's labels

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$body = new \Efsa\Client\Gitea\Model\IssueLabelsOption(); // \Efsa\Client\Gitea\Model\IssueLabelsOption

try {
    $result = $apiInstance->issueReplaceLabels($owner, $repo, $index, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueReplaceLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **body** | [**\Efsa\Client\Gitea\Model\IssueLabelsOption**](../Model/IssueLabelsOption.md)|  | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Label[]**](../Model/Label.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueResetTime()`

```php
issueResetTime($owner, $repo, $index)
```

Reset a tracked time of an issue

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to add tracked time to

try {
    $apiInstance->issueResetTime($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueResetTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to add tracked time to |

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

## `issueSearchIssues()`

```php
issueSearchIssues($state, $labels, $milestones, $q, $priorityRepoId, $type, $since, $before, $assigned, $created, $mentioned, $reviewRequested, $owner, $team, $page, $limit): \Efsa\Client\Gitea\Model\Issue[]
```

Search for issues across the repositories that the user has access to

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string | whether issue is open or closed
$labels = 'labels_example'; // string | comma separated list of labels. Fetch only issues that have any of this labels. Non existent labels are discarded
$milestones = 'milestones_example'; // string | comma separated list of milestone names. Fetch only issues that have any of this milestones. Non existent are discarded
$q = 'q_example'; // string | search string
$priorityRepoId = 56; // int | repository to prioritize in the results
$type = 'type_example'; // string | filter by type (issues / pulls) if set
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated after the given time. This is a timestamp in RFC 3339 format
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show notifications updated before the given time. This is a timestamp in RFC 3339 format
$assigned = True; // bool | filter (issues / pulls) assigned to you, default is false
$created = True; // bool | filter (issues / pulls) created by you, default is false
$mentioned = True; // bool | filter (issues / pulls) mentioning you, default is false
$reviewRequested = True; // bool | filter pulls requesting your review, default is false
$owner = 'owner_example'; // string | filter by owner
$team = 'team_example'; // string | filter by team (requires organization owner parameter to be provided)
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueSearchIssues($state, $labels, $milestones, $q, $priorityRepoId, $type, $since, $before, $assigned, $created, $mentioned, $reviewRequested, $owner, $team, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueSearchIssues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state** | **string**| whether issue is open or closed | [optional]
 **labels** | **string**| comma separated list of labels. Fetch only issues that have any of this labels. Non existent labels are discarded | [optional]
 **milestones** | **string**| comma separated list of milestone names. Fetch only issues that have any of this milestones. Non existent are discarded | [optional]
 **q** | **string**| search string | [optional]
 **priorityRepoId** | **int**| repository to prioritize in the results | [optional]
 **type** | **string**| filter by type (issues / pulls) if set | [optional]
 **since** | **\DateTime**| Only show notifications updated after the given time. This is a timestamp in RFC 3339 format | [optional]
 **before** | **\DateTime**| Only show notifications updated before the given time. This is a timestamp in RFC 3339 format | [optional]
 **assigned** | **bool**| filter (issues / pulls) assigned to you, default is false | [optional]
 **created** | **bool**| filter (issues / pulls) created by you, default is false | [optional]
 **mentioned** | **bool**| filter (issues / pulls) mentioning you, default is false | [optional]
 **reviewRequested** | **bool**| filter pulls requesting your review, default is false | [optional]
 **owner** | **string**| filter by owner | [optional]
 **team** | **string**| filter by team (requires organization owner parameter to be provided) | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\Issue[]**](../Model/Issue.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issueStartStopWatch()`

```php
issueStartStopWatch($owner, $repo, $index)
```

Start stopwatch on an issue.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to create the stopwatch on

try {
    $apiInstance->issueStartStopWatch($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueStartStopWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to create the stopwatch on |

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

## `issueStopStopWatch()`

```php
issueStopStopWatch($owner, $repo, $index)
```

Stop an issue's existing stopwatch.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue to stop the stopwatch on

try {
    $apiInstance->issueStopStopWatch($owner, $repo, $index);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueStopStopWatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue to stop the stopwatch on |

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

## `issueSubscriptions()`

```php
issueSubscriptions($owner, $repo, $index, $page, $limit): \Efsa\Client\Gitea\Model\User[]
```

Get users who subscribed on an issue.

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueSubscriptions($owner, $repo, $index, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
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

## `issueTrackedTimes()`

```php
issueTrackedTimes($owner, $repo, $index, $user, $since, $before, $page, $limit): \Efsa\Client\Gitea\Model\TrackedTime[]
```

List an issue's tracked times

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


$apiInstance = new Efsa\Client\Gitea\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$owner = 'owner_example'; // string | owner of the repo
$repo = 'repo_example'; // string | name of the repo
$index = 56; // int | index of the issue
$user = 'user_example'; // string | optional filter by user (available for issue managers)
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show times updated after the given time. This is a timestamp in RFC 3339 format
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only show times updated before the given time. This is a timestamp in RFC 3339 format
$page = 56; // int | page number of results to return (1-based)
$limit = 56; // int | page size of results

try {
    $result = $apiInstance->issueTrackedTimes($owner, $repo, $index, $user, $since, $before, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueTrackedTimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **owner** | **string**| owner of the repo |
 **repo** | **string**| name of the repo |
 **index** | **int**| index of the issue |
 **user** | **string**| optional filter by user (available for issue managers) | [optional]
 **since** | **\DateTime**| Only show times updated after the given time. This is a timestamp in RFC 3339 format | [optional]
 **before** | **\DateTime**| Only show times updated before the given time. This is a timestamp in RFC 3339 format | [optional]
 **page** | **int**| page number of results to return (1-based) | [optional]
 **limit** | **int**| page size of results | [optional]

### Return type

[**\Efsa\Client\Gitea\Model\TrackedTime[]**](../Model/TrackedTime.md)

### Authorization

[AccessToken](../../README.md#AccessToken), [AuthorizationHeaderToken](../../README.md#AuthorizationHeaderToken), [BasicAuth](../../README.md#BasicAuth), [SudoHeader](../../README.md#SudoHeader), [SudoParam](../../README.md#SudoParam), [TOTPHeader](../../README.md#TOTPHeader), [Token](../../README.md#Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
