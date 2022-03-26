# REST client for Gitea

This documentation describes the Gitea API.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/efsa-io/gitea-php-api-client.git"
    }
  ],
  "require": {
    "efsa-io/gitea-php-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/REST client for Gitea/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**adminAdoptRepository**](docs/Api/AdminApi.md#adminadoptrepository) | **POST** /admin/unadopted/{owner}/{repo} | Adopt unadopted files as a repository
*AdminApi* | [**adminCreateOrg**](docs/Api/AdminApi.md#admincreateorg) | **POST** /admin/users/{username}/orgs | Create an organization
*AdminApi* | [**adminCreatePublicKey**](docs/Api/AdminApi.md#admincreatepublickey) | **POST** /admin/users/{username}/keys | Add a public key on behalf of a user
*AdminApi* | [**adminCreateRepo**](docs/Api/AdminApi.md#admincreaterepo) | **POST** /admin/users/{username}/repos | Create a repository on behalf of a user
*AdminApi* | [**adminCreateUser**](docs/Api/AdminApi.md#admincreateuser) | **POST** /admin/users | Create a user
*AdminApi* | [**adminCronList**](docs/Api/AdminApi.md#admincronlist) | **GET** /admin/cron | List cron tasks
*AdminApi* | [**adminCronRun**](docs/Api/AdminApi.md#admincronrun) | **POST** /admin/cron/{task} | Run cron task
*AdminApi* | [**adminDeleteUnadoptedRepository**](docs/Api/AdminApi.md#admindeleteunadoptedrepository) | **DELETE** /admin/unadopted/{owner}/{repo} | Delete unadopted files
*AdminApi* | [**adminDeleteUser**](docs/Api/AdminApi.md#admindeleteuser) | **DELETE** /admin/users/{username} | Delete a user
*AdminApi* | [**adminDeleteUserPublicKey**](docs/Api/AdminApi.md#admindeleteuserpublickey) | **DELETE** /admin/users/{username}/keys/{id} | Delete a user&#39;s public key
*AdminApi* | [**adminEditUser**](docs/Api/AdminApi.md#adminedituser) | **PATCH** /admin/users/{username} | Edit an existing user
*AdminApi* | [**adminGetAllOrgs**](docs/Api/AdminApi.md#admingetallorgs) | **GET** /admin/orgs | List all organizations
*AdminApi* | [**adminGetAllUsers**](docs/Api/AdminApi.md#admingetallusers) | **GET** /admin/users | List all users
*AdminApi* | [**adminUnadoptedList**](docs/Api/AdminApi.md#adminunadoptedlist) | **GET** /admin/unadopted | List unadopted repositories
*IssueApi* | [**issueAddLabel**](docs/Api/IssueApi.md#issueaddlabel) | **POST** /repos/{owner}/{repo}/issues/{index}/labels | Add a label to an issue
*IssueApi* | [**issueAddSubscription**](docs/Api/IssueApi.md#issueaddsubscription) | **PUT** /repos/{owner}/{repo}/issues/{index}/subscriptions/{user} | Subscribe user to issue
*IssueApi* | [**issueAddTime**](docs/Api/IssueApi.md#issueaddtime) | **POST** /repos/{owner}/{repo}/issues/{index}/times | Add tracked time to a issue
*IssueApi* | [**issueCheckSubscription**](docs/Api/IssueApi.md#issuechecksubscription) | **GET** /repos/{owner}/{repo}/issues/{index}/subscriptions/check | Check if user is subscribed to an issue
*IssueApi* | [**issueClearLabels**](docs/Api/IssueApi.md#issueclearlabels) | **DELETE** /repos/{owner}/{repo}/issues/{index}/labels | Remove all labels from an issue
*IssueApi* | [**issueCreateComment**](docs/Api/IssueApi.md#issuecreatecomment) | **POST** /repos/{owner}/{repo}/issues/{index}/comments | Add a comment to an issue
*IssueApi* | [**issueCreateIssue**](docs/Api/IssueApi.md#issuecreateissue) | **POST** /repos/{owner}/{repo}/issues | Create an issue. If using deadline only the date will be taken into account, and time of day ignored.
*IssueApi* | [**issueCreateLabel**](docs/Api/IssueApi.md#issuecreatelabel) | **POST** /repos/{owner}/{repo}/labels | Create a label
*IssueApi* | [**issueCreateMilestone**](docs/Api/IssueApi.md#issuecreatemilestone) | **POST** /repos/{owner}/{repo}/milestones | Create a milestone
*IssueApi* | [**issueDelete**](docs/Api/IssueApi.md#issuedelete) | **DELETE** /repos/{owner}/{repo}/issues/{index} | Delete an issue
*IssueApi* | [**issueDeleteComment**](docs/Api/IssueApi.md#issuedeletecomment) | **DELETE** /repos/{owner}/{repo}/issues/comments/{id} | Delete a comment
*IssueApi* | [**issueDeleteCommentDeprecated**](docs/Api/IssueApi.md#issuedeletecommentdeprecated) | **DELETE** /repos/{owner}/{repo}/issues/{index}/comments/{id} | Delete a comment
*IssueApi* | [**issueDeleteCommentReaction**](docs/Api/IssueApi.md#issuedeletecommentreaction) | **DELETE** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Remove a reaction from a comment of an issue
*IssueApi* | [**issueDeleteIssueReaction**](docs/Api/IssueApi.md#issuedeleteissuereaction) | **DELETE** /repos/{owner}/{repo}/issues/{index}/reactions | Remove a reaction from an issue
*IssueApi* | [**issueDeleteLabel**](docs/Api/IssueApi.md#issuedeletelabel) | **DELETE** /repos/{owner}/{repo}/labels/{id} | Delete a label
*IssueApi* | [**issueDeleteMilestone**](docs/Api/IssueApi.md#issuedeletemilestone) | **DELETE** /repos/{owner}/{repo}/milestones/{id} | Delete a milestone
*IssueApi* | [**issueDeleteStopWatch**](docs/Api/IssueApi.md#issuedeletestopwatch) | **DELETE** /repos/{owner}/{repo}/issues/{index}/stopwatch/delete | Delete an issue&#39;s existing stopwatch.
*IssueApi* | [**issueDeleteSubscription**](docs/Api/IssueApi.md#issuedeletesubscription) | **DELETE** /repos/{owner}/{repo}/issues/{index}/subscriptions/{user} | Unsubscribe user from issue
*IssueApi* | [**issueDeleteTime**](docs/Api/IssueApi.md#issuedeletetime) | **DELETE** /repos/{owner}/{repo}/issues/{index}/times/{id} | Delete specific tracked time
*IssueApi* | [**issueEditComment**](docs/Api/IssueApi.md#issueeditcomment) | **PATCH** /repos/{owner}/{repo}/issues/comments/{id} | Edit a comment
*IssueApi* | [**issueEditCommentDeprecated**](docs/Api/IssueApi.md#issueeditcommentdeprecated) | **PATCH** /repos/{owner}/{repo}/issues/{index}/comments/{id} | Edit a comment
*IssueApi* | [**issueEditIssue**](docs/Api/IssueApi.md#issueeditissue) | **PATCH** /repos/{owner}/{repo}/issues/{index} | Edit an issue. If using deadline only the date will be taken into account, and time of day ignored.
*IssueApi* | [**issueEditIssueDeadline**](docs/Api/IssueApi.md#issueeditissuedeadline) | **POST** /repos/{owner}/{repo}/issues/{index}/deadline | Set an issue deadline. If set to null, the deadline is deleted. If using deadline only the date will be taken into account, and time of day ignored.
*IssueApi* | [**issueEditLabel**](docs/Api/IssueApi.md#issueeditlabel) | **PATCH** /repos/{owner}/{repo}/labels/{id} | Update a label
*IssueApi* | [**issueEditMilestone**](docs/Api/IssueApi.md#issueeditmilestone) | **PATCH** /repos/{owner}/{repo}/milestones/{id} | Update a milestone
*IssueApi* | [**issueGetComment**](docs/Api/IssueApi.md#issuegetcomment) | **GET** /repos/{owner}/{repo}/issues/comments/{id} | Get a comment
*IssueApi* | [**issueGetCommentReactions**](docs/Api/IssueApi.md#issuegetcommentreactions) | **GET** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Get a list of reactions from a comment of an issue
*IssueApi* | [**issueGetComments**](docs/Api/IssueApi.md#issuegetcomments) | **GET** /repos/{owner}/{repo}/issues/{index}/comments | List all comments on an issue
*IssueApi* | [**issueGetCommentsAndTimeline**](docs/Api/IssueApi.md#issuegetcommentsandtimeline) | **GET** /repos/{owner}/{repo}/issues/{index}/timeline | List all comments and events on an issue
*IssueApi* | [**issueGetIssue**](docs/Api/IssueApi.md#issuegetissue) | **GET** /repos/{owner}/{repo}/issues/{index} | Get an issue
*IssueApi* | [**issueGetIssueReactions**](docs/Api/IssueApi.md#issuegetissuereactions) | **GET** /repos/{owner}/{repo}/issues/{index}/reactions | Get a list reactions of an issue
*IssueApi* | [**issueGetLabel**](docs/Api/IssueApi.md#issuegetlabel) | **GET** /repos/{owner}/{repo}/labels/{id} | Get a single label
*IssueApi* | [**issueGetLabels**](docs/Api/IssueApi.md#issuegetlabels) | **GET** /repos/{owner}/{repo}/issues/{index}/labels | Get an issue&#39;s labels
*IssueApi* | [**issueGetMilestone**](docs/Api/IssueApi.md#issuegetmilestone) | **GET** /repos/{owner}/{repo}/milestones/{id} | Get a milestone
*IssueApi* | [**issueGetMilestonesList**](docs/Api/IssueApi.md#issuegetmilestoneslist) | **GET** /repos/{owner}/{repo}/milestones | Get all of a repository&#39;s opened milestones
*IssueApi* | [**issueGetRepoComments**](docs/Api/IssueApi.md#issuegetrepocomments) | **GET** /repos/{owner}/{repo}/issues/comments | List all comments in a repository
*IssueApi* | [**issueListIssues**](docs/Api/IssueApi.md#issuelistissues) | **GET** /repos/{owner}/{repo}/issues | List a repository&#39;s issues
*IssueApi* | [**issueListLabels**](docs/Api/IssueApi.md#issuelistlabels) | **GET** /repos/{owner}/{repo}/labels | Get all of a repository&#39;s labels
*IssueApi* | [**issuePostCommentReaction**](docs/Api/IssueApi.md#issuepostcommentreaction) | **POST** /repos/{owner}/{repo}/issues/comments/{id}/reactions | Add a reaction to a comment of an issue
*IssueApi* | [**issuePostIssueReaction**](docs/Api/IssueApi.md#issuepostissuereaction) | **POST** /repos/{owner}/{repo}/issues/{index}/reactions | Add a reaction to an issue
*IssueApi* | [**issueRemoveLabel**](docs/Api/IssueApi.md#issueremovelabel) | **DELETE** /repos/{owner}/{repo}/issues/{index}/labels/{id} | Remove a label from an issue
*IssueApi* | [**issueReplaceLabels**](docs/Api/IssueApi.md#issuereplacelabels) | **PUT** /repos/{owner}/{repo}/issues/{index}/labels | Replace an issue&#39;s labels
*IssueApi* | [**issueResetTime**](docs/Api/IssueApi.md#issueresettime) | **DELETE** /repos/{owner}/{repo}/issues/{index}/times | Reset a tracked time of an issue
*IssueApi* | [**issueSearchIssues**](docs/Api/IssueApi.md#issuesearchissues) | **GET** /repos/issues/search | Search for issues across the repositories that the user has access to
*IssueApi* | [**issueStartStopWatch**](docs/Api/IssueApi.md#issuestartstopwatch) | **POST** /repos/{owner}/{repo}/issues/{index}/stopwatch/start | Start stopwatch on an issue.
*IssueApi* | [**issueStopStopWatch**](docs/Api/IssueApi.md#issuestopstopwatch) | **POST** /repos/{owner}/{repo}/issues/{index}/stopwatch/stop | Stop an issue&#39;s existing stopwatch.
*IssueApi* | [**issueSubscriptions**](docs/Api/IssueApi.md#issuesubscriptions) | **GET** /repos/{owner}/{repo}/issues/{index}/subscriptions | Get users who subscribed on an issue.
*IssueApi* | [**issueTrackedTimes**](docs/Api/IssueApi.md#issuetrackedtimes) | **GET** /repos/{owner}/{repo}/issues/{index}/times | List an issue&#39;s tracked times
*MiscellaneousApi* | [**getNodeInfo**](docs/Api/MiscellaneousApi.md#getnodeinfo) | **GET** /nodeinfo | Returns the nodeinfo of the Gitea application
*MiscellaneousApi* | [**getSigningKey**](docs/Api/MiscellaneousApi.md#getsigningkey) | **GET** /signing-key.gpg | Get default signing-key.gpg
*MiscellaneousApi* | [**getVersion**](docs/Api/MiscellaneousApi.md#getversion) | **GET** /version | Returns the version of the Gitea application
*MiscellaneousApi* | [**renderMarkdown**](docs/Api/MiscellaneousApi.md#rendermarkdown) | **POST** /markdown | Render a markdown document as HTML
*MiscellaneousApi* | [**renderMarkdownRaw**](docs/Api/MiscellaneousApi.md#rendermarkdownraw) | **POST** /markdown/raw | Render raw markdown as HTML
*NotificationApi* | [**notifyGetList**](docs/Api/NotificationApi.md#notifygetlist) | **GET** /notifications | List users&#39;s notification threads
*NotificationApi* | [**notifyGetRepoList**](docs/Api/NotificationApi.md#notifygetrepolist) | **GET** /repos/{owner}/{repo}/notifications | List users&#39;s notification threads on a specific repo
*NotificationApi* | [**notifyGetThread**](docs/Api/NotificationApi.md#notifygetthread) | **GET** /notifications/threads/{id} | Get notification thread by ID
*NotificationApi* | [**notifyNewAvailable**](docs/Api/NotificationApi.md#notifynewavailable) | **GET** /notifications/new | Check if unread notifications exist
*NotificationApi* | [**notifyReadList**](docs/Api/NotificationApi.md#notifyreadlist) | **PUT** /notifications | Mark notification threads as read, pinned or unread
*NotificationApi* | [**notifyReadRepoList**](docs/Api/NotificationApi.md#notifyreadrepolist) | **PUT** /repos/{owner}/{repo}/notifications | Mark notification threads as read, pinned or unread on a specific repo
*NotificationApi* | [**notifyReadThread**](docs/Api/NotificationApi.md#notifyreadthread) | **PATCH** /notifications/threads/{id} | Mark notification thread as read by ID
*OrganizationApi* | [**createOrgRepo**](docs/Api/OrganizationApi.md#createorgrepo) | **POST** /orgs/{org}/repos | Create a repository in an organization
*OrganizationApi* | [**createOrgRepoDeprecated**](docs/Api/OrganizationApi.md#createorgrepodeprecated) | **POST** /org/{org}/repos | Create a repository in an organization
*OrganizationApi* | [**orgAddTeamMember**](docs/Api/OrganizationApi.md#orgaddteammember) | **PUT** /teams/{id}/members/{username} | Add a team member
*OrganizationApi* | [**orgAddTeamRepository**](docs/Api/OrganizationApi.md#orgaddteamrepository) | **PUT** /teams/{id}/repos/{org}/{repo} | Add a repository to a team
*OrganizationApi* | [**orgConcealMember**](docs/Api/OrganizationApi.md#orgconcealmember) | **DELETE** /orgs/{org}/public_members/{username} | Conceal a user&#39;s membership
*OrganizationApi* | [**orgCreate**](docs/Api/OrganizationApi.md#orgcreate) | **POST** /orgs | Create an organization
*OrganizationApi* | [**orgCreateHook**](docs/Api/OrganizationApi.md#orgcreatehook) | **POST** /orgs/{org}/hooks/ | Create a hook
*OrganizationApi* | [**orgCreateLabel**](docs/Api/OrganizationApi.md#orgcreatelabel) | **POST** /orgs/{org}/labels | Create a label for an organization
*OrganizationApi* | [**orgCreateTeam**](docs/Api/OrganizationApi.md#orgcreateteam) | **POST** /orgs/{org}/teams | Create a team
*OrganizationApi* | [**orgDelete**](docs/Api/OrganizationApi.md#orgdelete) | **DELETE** /orgs/{org} | Delete an organization
*OrganizationApi* | [**orgDeleteHook**](docs/Api/OrganizationApi.md#orgdeletehook) | **DELETE** /orgs/{org}/hooks/{id} | Delete a hook
*OrganizationApi* | [**orgDeleteLabel**](docs/Api/OrganizationApi.md#orgdeletelabel) | **DELETE** /orgs/{org}/labels/{id} | Delete a label
*OrganizationApi* | [**orgDeleteMember**](docs/Api/OrganizationApi.md#orgdeletemember) | **DELETE** /orgs/{org}/members/{username} | Remove a member from an organization
*OrganizationApi* | [**orgDeleteTeam**](docs/Api/OrganizationApi.md#orgdeleteteam) | **DELETE** /teams/{id} | Delete a team
*OrganizationApi* | [**orgEdit**](docs/Api/OrganizationApi.md#orgedit) | **PATCH** /orgs/{org} | Edit an organization
*OrganizationApi* | [**orgEditHook**](docs/Api/OrganizationApi.md#orgedithook) | **PATCH** /orgs/{org}/hooks/{id} | Update a hook
*OrganizationApi* | [**orgEditLabel**](docs/Api/OrganizationApi.md#orgeditlabel) | **PATCH** /orgs/{org}/labels/{id} | Update a label
*OrganizationApi* | [**orgEditTeam**](docs/Api/OrganizationApi.md#orgeditteam) | **PATCH** /teams/{id} | Edit a team
*OrganizationApi* | [**orgGet**](docs/Api/OrganizationApi.md#orgget) | **GET** /orgs/{org} | Get an organization
*OrganizationApi* | [**orgGetAll**](docs/Api/OrganizationApi.md#orggetall) | **GET** /orgs | Get list of organizations
*OrganizationApi* | [**orgGetHook**](docs/Api/OrganizationApi.md#orggethook) | **GET** /orgs/{org}/hooks/{id} | Get a hook
*OrganizationApi* | [**orgGetLabel**](docs/Api/OrganizationApi.md#orggetlabel) | **GET** /orgs/{org}/labels/{id} | Get a single label
*OrganizationApi* | [**orgGetTeam**](docs/Api/OrganizationApi.md#orggetteam) | **GET** /teams/{id} | Get a team
*OrganizationApi* | [**orgGetUserPermissions**](docs/Api/OrganizationApi.md#orggetuserpermissions) | **GET** /users/{username}/orgs/{org}/permissions | Get user permissions in organization
*OrganizationApi* | [**orgIsMember**](docs/Api/OrganizationApi.md#orgismember) | **GET** /orgs/{org}/members/{username} | Check if a user is a member of an organization
*OrganizationApi* | [**orgIsPublicMember**](docs/Api/OrganizationApi.md#orgispublicmember) | **GET** /orgs/{org}/public_members/{username} | Check if a user is a public member of an organization
*OrganizationApi* | [**orgListCurrentUserOrgs**](docs/Api/OrganizationApi.md#orglistcurrentuserorgs) | **GET** /user/orgs | List the current user&#39;s organizations
*OrganizationApi* | [**orgListHooks**](docs/Api/OrganizationApi.md#orglisthooks) | **GET** /orgs/{org}/hooks | List an organization&#39;s webhooks
*OrganizationApi* | [**orgListLabels**](docs/Api/OrganizationApi.md#orglistlabels) | **GET** /orgs/{org}/labels | List an organization&#39;s labels
*OrganizationApi* | [**orgListMembers**](docs/Api/OrganizationApi.md#orglistmembers) | **GET** /orgs/{org}/members | List an organization&#39;s members
*OrganizationApi* | [**orgListPublicMembers**](docs/Api/OrganizationApi.md#orglistpublicmembers) | **GET** /orgs/{org}/public_members | List an organization&#39;s public members
*OrganizationApi* | [**orgListRepos**](docs/Api/OrganizationApi.md#orglistrepos) | **GET** /orgs/{org}/repos | List an organization&#39;s repos
*OrganizationApi* | [**orgListTeamMember**](docs/Api/OrganizationApi.md#orglistteammember) | **GET** /teams/{id}/members/{username} | List a particular member of team
*OrganizationApi* | [**orgListTeamMembers**](docs/Api/OrganizationApi.md#orglistteammembers) | **GET** /teams/{id}/members | List a team&#39;s members
*OrganizationApi* | [**orgListTeamRepos**](docs/Api/OrganizationApi.md#orglistteamrepos) | **GET** /teams/{id}/repos | List a team&#39;s repos
*OrganizationApi* | [**orgListTeams**](docs/Api/OrganizationApi.md#orglistteams) | **GET** /orgs/{org}/teams | List an organization&#39;s teams
*OrganizationApi* | [**orgListUserOrgs**](docs/Api/OrganizationApi.md#orglistuserorgs) | **GET** /users/{username}/orgs | List a user&#39;s organizations
*OrganizationApi* | [**orgPublicizeMember**](docs/Api/OrganizationApi.md#orgpublicizemember) | **PUT** /orgs/{org}/public_members/{username} | Publicize a user&#39;s membership
*OrganizationApi* | [**orgRemoveTeamMember**](docs/Api/OrganizationApi.md#orgremoveteammember) | **DELETE** /teams/{id}/members/{username} | Remove a team member
*OrganizationApi* | [**orgRemoveTeamRepository**](docs/Api/OrganizationApi.md#orgremoveteamrepository) | **DELETE** /teams/{id}/repos/{org}/{repo} | Remove a repository from a team
*OrganizationApi* | [**teamSearch**](docs/Api/OrganizationApi.md#teamsearch) | **GET** /orgs/{org}/teams/search | Search for teams within an organization
*RepositoryApi* | [**acceptRepoTransfer**](docs/Api/RepositoryApi.md#acceptrepotransfer) | **POST** /repos/{owner}/{repo}/transfer/accept | Accept a repo transfer
*RepositoryApi* | [**createCurrentUserRepo**](docs/Api/RepositoryApi.md#createcurrentuserrepo) | **POST** /user/repos | Create a repository
*RepositoryApi* | [**createFork**](docs/Api/RepositoryApi.md#createfork) | **POST** /repos/{owner}/{repo}/forks | Fork a repository
*RepositoryApi* | [**generateRepo**](docs/Api/RepositoryApi.md#generaterepo) | **POST** /repos/{template_owner}/{template_repo}/generate | Create a repository using a template
*RepositoryApi* | [**getAnnotatedTag**](docs/Api/RepositoryApi.md#getannotatedtag) | **GET** /repos/{owner}/{repo}/git/tags/{sha} | Gets the tag object of an annotated tag (not lightweight tags)
*RepositoryApi* | [**getBlob**](docs/Api/RepositoryApi.md#getblob) | **GET** /repos/{owner}/{repo}/git/blobs/{sha} | Gets the blob of a repository.
*RepositoryApi* | [**getTree**](docs/Api/RepositoryApi.md#gettree) | **GET** /repos/{owner}/{repo}/git/trees/{sha} | Gets the tree of a repository.
*RepositoryApi* | [**listForks**](docs/Api/RepositoryApi.md#listforks) | **GET** /repos/{owner}/{repo}/forks | List a repository&#39;s forks
*RepositoryApi* | [**rejectRepoTransfer**](docs/Api/RepositoryApi.md#rejectrepotransfer) | **POST** /repos/{owner}/{repo}/transfer/reject | Reject a repo transfer
*RepositoryApi* | [**repoAddCollaborator**](docs/Api/RepositoryApi.md#repoaddcollaborator) | **PUT** /repos/{owner}/{repo}/collaborators/{collaborator} | Add a collaborator to a repository
*RepositoryApi* | [**repoAddTeam**](docs/Api/RepositoryApi.md#repoaddteam) | **PUT** /repos/{owner}/{repo}/teams/{team} | Add a team to a repository
*RepositoryApi* | [**repoAddTopic**](docs/Api/RepositoryApi.md#repoaddtopic) | **PUT** /repos/{owner}/{repo}/topics/{topic} | Add a topic to a repository
*RepositoryApi* | [**repoApplyDiffPatch**](docs/Api/RepositoryApi.md#repoapplydiffpatch) | **POST** /repos/{owner}/{repo}/diffpatch | Apply diff patch to repository
*RepositoryApi* | [**repoCheckCollaborator**](docs/Api/RepositoryApi.md#repocheckcollaborator) | **GET** /repos/{owner}/{repo}/collaborators/{collaborator} | Check if a user is a collaborator of a repository
*RepositoryApi* | [**repoCheckTeam**](docs/Api/RepositoryApi.md#repocheckteam) | **GET** /repos/{owner}/{repo}/teams/{team} | Check if a team is assigned to a repository
*RepositoryApi* | [**repoCreateBranch**](docs/Api/RepositoryApi.md#repocreatebranch) | **POST** /repos/{owner}/{repo}/branches | Create a branch
*RepositoryApi* | [**repoCreateBranchProtection**](docs/Api/RepositoryApi.md#repocreatebranchprotection) | **POST** /repos/{owner}/{repo}/branch_protections | Create a branch protections for a repository
*RepositoryApi* | [**repoCreateFile**](docs/Api/RepositoryApi.md#repocreatefile) | **POST** /repos/{owner}/{repo}/contents/{filepath} | Create a file in a repository
*RepositoryApi* | [**repoCreateHook**](docs/Api/RepositoryApi.md#repocreatehook) | **POST** /repos/{owner}/{repo}/hooks | Create a hook
*RepositoryApi* | [**repoCreateKey**](docs/Api/RepositoryApi.md#repocreatekey) | **POST** /repos/{owner}/{repo}/keys | Add a key to a repository
*RepositoryApi* | [**repoCreatePullRequest**](docs/Api/RepositoryApi.md#repocreatepullrequest) | **POST** /repos/{owner}/{repo}/pulls | Create a pull request
*RepositoryApi* | [**repoCreatePullReview**](docs/Api/RepositoryApi.md#repocreatepullreview) | **POST** /repos/{owner}/{repo}/pulls/{index}/reviews | Create a review to an pull request
*RepositoryApi* | [**repoCreatePullReviewRequests**](docs/Api/RepositoryApi.md#repocreatepullreviewrequests) | **POST** /repos/{owner}/{repo}/pulls/{index}/requested_reviewers | create review requests for a pull request
*RepositoryApi* | [**repoCreateRelease**](docs/Api/RepositoryApi.md#repocreaterelease) | **POST** /repos/{owner}/{repo}/releases | Create a release
*RepositoryApi* | [**repoCreateReleaseAttachment**](docs/Api/RepositoryApi.md#repocreatereleaseattachment) | **POST** /repos/{owner}/{repo}/releases/{id}/assets | Create a release attachment
*RepositoryApi* | [**repoCreateStatus**](docs/Api/RepositoryApi.md#repocreatestatus) | **POST** /repos/{owner}/{repo}/statuses/{sha} | Create a commit status
*RepositoryApi* | [**repoCreateTag**](docs/Api/RepositoryApi.md#repocreatetag) | **POST** /repos/{owner}/{repo}/tags | Create a new git tag in a repository
*RepositoryApi* | [**repoCreateWikiPage**](docs/Api/RepositoryApi.md#repocreatewikipage) | **POST** /repos/{owner}/{repo}/wiki/new | Create a wiki page
*RepositoryApi* | [**repoDelete**](docs/Api/RepositoryApi.md#repodelete) | **DELETE** /repos/{owner}/{repo} | Delete a repository
*RepositoryApi* | [**repoDeleteBranch**](docs/Api/RepositoryApi.md#repodeletebranch) | **DELETE** /repos/{owner}/{repo}/branches/{branch} | Delete a specific branch from a repository
*RepositoryApi* | [**repoDeleteBranchProtection**](docs/Api/RepositoryApi.md#repodeletebranchprotection) | **DELETE** /repos/{owner}/{repo}/branch_protections/{name} | Delete a specific branch protection for the repository
*RepositoryApi* | [**repoDeleteCollaborator**](docs/Api/RepositoryApi.md#repodeletecollaborator) | **DELETE** /repos/{owner}/{repo}/collaborators/{collaborator} | Delete a collaborator from a repository
*RepositoryApi* | [**repoDeleteFile**](docs/Api/RepositoryApi.md#repodeletefile) | **DELETE** /repos/{owner}/{repo}/contents/{filepath} | Delete a file in a repository
*RepositoryApi* | [**repoDeleteGitHook**](docs/Api/RepositoryApi.md#repodeletegithook) | **DELETE** /repos/{owner}/{repo}/hooks/git/{id} | Delete a Git hook in a repository
*RepositoryApi* | [**repoDeleteHook**](docs/Api/RepositoryApi.md#repodeletehook) | **DELETE** /repos/{owner}/{repo}/hooks/{id} | Delete a hook in a repository
*RepositoryApi* | [**repoDeleteKey**](docs/Api/RepositoryApi.md#repodeletekey) | **DELETE** /repos/{owner}/{repo}/keys/{id} | Delete a key from a repository
*RepositoryApi* | [**repoDeletePullReview**](docs/Api/RepositoryApi.md#repodeletepullreview) | **DELETE** /repos/{owner}/{repo}/pulls/{index}/reviews/{id} | Delete a specific review from a pull request
*RepositoryApi* | [**repoDeletePullReviewRequests**](docs/Api/RepositoryApi.md#repodeletepullreviewrequests) | **DELETE** /repos/{owner}/{repo}/pulls/{index}/requested_reviewers | cancel review requests for a pull request
*RepositoryApi* | [**repoDeleteRelease**](docs/Api/RepositoryApi.md#repodeleterelease) | **DELETE** /repos/{owner}/{repo}/releases/{id} | Delete a release
*RepositoryApi* | [**repoDeleteReleaseAttachment**](docs/Api/RepositoryApi.md#repodeletereleaseattachment) | **DELETE** /repos/{owner}/{repo}/releases/{id}/assets/{attachment_id} | Delete a release attachment
*RepositoryApi* | [**repoDeleteReleaseByTag**](docs/Api/RepositoryApi.md#repodeletereleasebytag) | **DELETE** /repos/{owner}/{repo}/releases/tags/{tag} | Delete a release by tag name
*RepositoryApi* | [**repoDeleteTag**](docs/Api/RepositoryApi.md#repodeletetag) | **DELETE** /repos/{owner}/{repo}/tags/{tag} | Delete a repository&#39;s tag by name
*RepositoryApi* | [**repoDeleteTeam**](docs/Api/RepositoryApi.md#repodeleteteam) | **DELETE** /repos/{owner}/{repo}/teams/{team} | Delete a team from a repository
*RepositoryApi* | [**repoDeleteTopic**](docs/Api/RepositoryApi.md#repodeletetopic) | **DELETE** /repos/{owner}/{repo}/topics/{topic} | Delete a topic from a repository
*RepositoryApi* | [**repoDeleteWikiPage**](docs/Api/RepositoryApi.md#repodeletewikipage) | **DELETE** /repos/{owner}/{repo}/wiki/page/{pageName} | Delete a wiki page
*RepositoryApi* | [**repoDismissPullReview**](docs/Api/RepositoryApi.md#repodismisspullreview) | **POST** /repos/{owner}/{repo}/pulls/{index}/reviews/{id}/dismissals | Dismiss a review for a pull request
*RepositoryApi* | [**repoDownloadCommitDiffOrPatch**](docs/Api/RepositoryApi.md#repodownloadcommitdifforpatch) | **GET** /repos/{owner}/{repo}/git/commits/{sha}.{diffType} | Get a commit&#39;s diff or patch
*RepositoryApi* | [**repoDownloadPullDiffOrPatch**](docs/Api/RepositoryApi.md#repodownloadpulldifforpatch) | **GET** /repos/{owner}/{repo}/pulls/{index}.{diffType} | Get a pull request diff or patch
*RepositoryApi* | [**repoEdit**](docs/Api/RepositoryApi.md#repoedit) | **PATCH** /repos/{owner}/{repo} | Edit a repository&#39;s properties. Only fields that are set will be changed.
*RepositoryApi* | [**repoEditBranchProtection**](docs/Api/RepositoryApi.md#repoeditbranchprotection) | **PATCH** /repos/{owner}/{repo}/branch_protections/{name} | Edit a branch protections for a repository. Only fields that are set will be changed
*RepositoryApi* | [**repoEditGitHook**](docs/Api/RepositoryApi.md#repoeditgithook) | **PATCH** /repos/{owner}/{repo}/hooks/git/{id} | Edit a Git hook in a repository
*RepositoryApi* | [**repoEditHook**](docs/Api/RepositoryApi.md#repoedithook) | **PATCH** /repos/{owner}/{repo}/hooks/{id} | Edit a hook in a repository
*RepositoryApi* | [**repoEditPullRequest**](docs/Api/RepositoryApi.md#repoeditpullrequest) | **PATCH** /repos/{owner}/{repo}/pulls/{index} | Update a pull request. If using deadline only the date will be taken into account, and time of day ignored.
*RepositoryApi* | [**repoEditRelease**](docs/Api/RepositoryApi.md#repoeditrelease) | **PATCH** /repos/{owner}/{repo}/releases/{id} | Update a release
*RepositoryApi* | [**repoEditReleaseAttachment**](docs/Api/RepositoryApi.md#repoeditreleaseattachment) | **PATCH** /repos/{owner}/{repo}/releases/{id}/assets/{attachment_id} | Edit a release attachment
*RepositoryApi* | [**repoEditWikiPage**](docs/Api/RepositoryApi.md#repoeditwikipage) | **PATCH** /repos/{owner}/{repo}/wiki/page/{pageName} | Edit a wiki page
*RepositoryApi* | [**repoGet**](docs/Api/RepositoryApi.md#repoget) | **GET** /repos/{owner}/{repo} | Get a repository
*RepositoryApi* | [**repoGetAllCommits**](docs/Api/RepositoryApi.md#repogetallcommits) | **GET** /repos/{owner}/{repo}/commits | Get a list of all commits from a repository
*RepositoryApi* | [**repoGetArchive**](docs/Api/RepositoryApi.md#repogetarchive) | **GET** /repos/{owner}/{repo}/archive/{archive} | Get an archive of a repository
*RepositoryApi* | [**repoGetAssignees**](docs/Api/RepositoryApi.md#repogetassignees) | **GET** /repos/{owner}/{repo}/assignees | Return all users that have write access and can be assigned to issues
*RepositoryApi* | [**repoGetBranch**](docs/Api/RepositoryApi.md#repogetbranch) | **GET** /repos/{owner}/{repo}/branches/{branch} | Retrieve a specific branch from a repository, including its effective branch protection
*RepositoryApi* | [**repoGetBranchProtection**](docs/Api/RepositoryApi.md#repogetbranchprotection) | **GET** /repos/{owner}/{repo}/branch_protections/{name} | Get a specific branch protection for the repository
*RepositoryApi* | [**repoGetByID**](docs/Api/RepositoryApi.md#repogetbyid) | **GET** /repositories/{id} | Get a repository by id
*RepositoryApi* | [**repoGetCombinedStatusByRef**](docs/Api/RepositoryApi.md#repogetcombinedstatusbyref) | **GET** /repos/{owner}/{repo}/commits/{ref}/status | Get a commit&#39;s combined status, by branch/tag/commit reference
*RepositoryApi* | [**repoGetContents**](docs/Api/RepositoryApi.md#repogetcontents) | **GET** /repos/{owner}/{repo}/contents/{filepath} | Gets the metadata and contents (if a file) of an entry in a repository, or a list of entries if a dir
*RepositoryApi* | [**repoGetContentsList**](docs/Api/RepositoryApi.md#repogetcontentslist) | **GET** /repos/{owner}/{repo}/contents | Gets the metadata of all the entries of the root dir
*RepositoryApi* | [**repoGetEditorConfig**](docs/Api/RepositoryApi.md#repogeteditorconfig) | **GET** /repos/{owner}/{repo}/editorconfig/{filepath} | Get the EditorConfig definitions of a file in a repository
*RepositoryApi* | [**repoGetGitHook**](docs/Api/RepositoryApi.md#repogetgithook) | **GET** /repos/{owner}/{repo}/hooks/git/{id} | Get a Git hook
*RepositoryApi* | [**repoGetHook**](docs/Api/RepositoryApi.md#repogethook) | **GET** /repos/{owner}/{repo}/hooks/{id} | Get a hook
*RepositoryApi* | [**repoGetIssueTemplates**](docs/Api/RepositoryApi.md#repogetissuetemplates) | **GET** /repos/{owner}/{repo}/issue_templates | Get available issue templates for a repository
*RepositoryApi* | [**repoGetKey**](docs/Api/RepositoryApi.md#repogetkey) | **GET** /repos/{owner}/{repo}/keys/{id} | Get a repository&#39;s key by id
*RepositoryApi* | [**repoGetLanguages**](docs/Api/RepositoryApi.md#repogetlanguages) | **GET** /repos/{owner}/{repo}/languages | Get languages and number of bytes of code written
*RepositoryApi* | [**repoGetNote**](docs/Api/RepositoryApi.md#repogetnote) | **GET** /repos/{owner}/{repo}/git/notes/{sha} | Get a note corresponding to a single commit from a repository
*RepositoryApi* | [**repoGetPullRequest**](docs/Api/RepositoryApi.md#repogetpullrequest) | **GET** /repos/{owner}/{repo}/pulls/{index} | Get a pull request
*RepositoryApi* | [**repoGetPullRequestCommits**](docs/Api/RepositoryApi.md#repogetpullrequestcommits) | **GET** /repos/{owner}/{repo}/pulls/{index}/commits | Get commits for a pull request
*RepositoryApi* | [**repoGetPullReview**](docs/Api/RepositoryApi.md#repogetpullreview) | **GET** /repos/{owner}/{repo}/pulls/{index}/reviews/{id} | Get a specific review for a pull request
*RepositoryApi* | [**repoGetPullReviewComments**](docs/Api/RepositoryApi.md#repogetpullreviewcomments) | **GET** /repos/{owner}/{repo}/pulls/{index}/reviews/{id}/comments | Get a specific review for a pull request
*RepositoryApi* | [**repoGetRawFile**](docs/Api/RepositoryApi.md#repogetrawfile) | **GET** /repos/{owner}/{repo}/raw/{filepath} | Get a file from a repository
*RepositoryApi* | [**repoGetRelease**](docs/Api/RepositoryApi.md#repogetrelease) | **GET** /repos/{owner}/{repo}/releases/{id} | Get a release
*RepositoryApi* | [**repoGetReleaseAttachment**](docs/Api/RepositoryApi.md#repogetreleaseattachment) | **GET** /repos/{owner}/{repo}/releases/{id}/assets/{attachment_id} | Get a release attachment
*RepositoryApi* | [**repoGetReleaseByTag**](docs/Api/RepositoryApi.md#repogetreleasebytag) | **GET** /repos/{owner}/{repo}/releases/tags/{tag} | Get a release by tag name
*RepositoryApi* | [**repoGetReviewers**](docs/Api/RepositoryApi.md#repogetreviewers) | **GET** /repos/{owner}/{repo}/reviewers | Return all users that can be requested to review in this repo
*RepositoryApi* | [**repoGetSingleCommit**](docs/Api/RepositoryApi.md#repogetsinglecommit) | **GET** /repos/{owner}/{repo}/git/commits/{sha} | Get a single commit from a repository
*RepositoryApi* | [**repoGetTag**](docs/Api/RepositoryApi.md#repogettag) | **GET** /repos/{owner}/{repo}/tags/{tag} | Get the tag of a repository by tag name
*RepositoryApi* | [**repoGetWikiPage**](docs/Api/RepositoryApi.md#repogetwikipage) | **GET** /repos/{owner}/{repo}/wiki/page/{pageName} | Get a wiki page
*RepositoryApi* | [**repoGetWikiPageRevisions**](docs/Api/RepositoryApi.md#repogetwikipagerevisions) | **GET** /repos/{owner}/{repo}/wiki/revisions/{pageName} | Get revisions of a wiki page
*RepositoryApi* | [**repoGetWikiPages**](docs/Api/RepositoryApi.md#repogetwikipages) | **GET** /repos/{owner}/{repo}/wiki/pages | Get all wiki pages
*RepositoryApi* | [**repoListAllGitRefs**](docs/Api/RepositoryApi.md#repolistallgitrefs) | **GET** /repos/{owner}/{repo}/git/refs | Get specified ref or filtered repository&#39;s refs
*RepositoryApi* | [**repoListBranchProtection**](docs/Api/RepositoryApi.md#repolistbranchprotection) | **GET** /repos/{owner}/{repo}/branch_protections | List branch protections for a repository
*RepositoryApi* | [**repoListBranches**](docs/Api/RepositoryApi.md#repolistbranches) | **GET** /repos/{owner}/{repo}/branches | List a repository&#39;s branches
*RepositoryApi* | [**repoListCollaborators**](docs/Api/RepositoryApi.md#repolistcollaborators) | **GET** /repos/{owner}/{repo}/collaborators | List a repository&#39;s collaborators
*RepositoryApi* | [**repoListGitHooks**](docs/Api/RepositoryApi.md#repolistgithooks) | **GET** /repos/{owner}/{repo}/hooks/git | List the Git hooks in a repository
*RepositoryApi* | [**repoListGitRefs**](docs/Api/RepositoryApi.md#repolistgitrefs) | **GET** /repos/{owner}/{repo}/git/refs/{ref} | Get specified ref or filtered repository&#39;s refs
*RepositoryApi* | [**repoListHooks**](docs/Api/RepositoryApi.md#repolisthooks) | **GET** /repos/{owner}/{repo}/hooks | List the hooks in a repository
*RepositoryApi* | [**repoListKeys**](docs/Api/RepositoryApi.md#repolistkeys) | **GET** /repos/{owner}/{repo}/keys | List a repository&#39;s keys
*RepositoryApi* | [**repoListPullRequests**](docs/Api/RepositoryApi.md#repolistpullrequests) | **GET** /repos/{owner}/{repo}/pulls | List a repo&#39;s pull requests
*RepositoryApi* | [**repoListPullReviews**](docs/Api/RepositoryApi.md#repolistpullreviews) | **GET** /repos/{owner}/{repo}/pulls/{index}/reviews | List all reviews for a pull request
*RepositoryApi* | [**repoListReleaseAttachments**](docs/Api/RepositoryApi.md#repolistreleaseattachments) | **GET** /repos/{owner}/{repo}/releases/{id}/assets | List release&#39;s attachments
*RepositoryApi* | [**repoListReleases**](docs/Api/RepositoryApi.md#repolistreleases) | **GET** /repos/{owner}/{repo}/releases | List a repo&#39;s releases
*RepositoryApi* | [**repoListStargazers**](docs/Api/RepositoryApi.md#repoliststargazers) | **GET** /repos/{owner}/{repo}/stargazers | List a repo&#39;s stargazers
*RepositoryApi* | [**repoListStatuses**](docs/Api/RepositoryApi.md#repoliststatuses) | **GET** /repos/{owner}/{repo}/statuses/{sha} | Get a commit&#39;s statuses
*RepositoryApi* | [**repoListStatusesByRef**](docs/Api/RepositoryApi.md#repoliststatusesbyref) | **GET** /repos/{owner}/{repo}/commits/{ref}/statuses | Get a commit&#39;s statuses, by branch/tag/commit reference
*RepositoryApi* | [**repoListSubscribers**](docs/Api/RepositoryApi.md#repolistsubscribers) | **GET** /repos/{owner}/{repo}/subscribers | List a repo&#39;s watchers
*RepositoryApi* | [**repoListTags**](docs/Api/RepositoryApi.md#repolisttags) | **GET** /repos/{owner}/{repo}/tags | List a repository&#39;s tags
*RepositoryApi* | [**repoListTeams**](docs/Api/RepositoryApi.md#repolistteams) | **GET** /repos/{owner}/{repo}/teams | List a repository&#39;s teams
*RepositoryApi* | [**repoListTopics**](docs/Api/RepositoryApi.md#repolisttopics) | **GET** /repos/{owner}/{repo}/topics | Get list of topics that a repository has
*RepositoryApi* | [**repoMergePullRequest**](docs/Api/RepositoryApi.md#repomergepullrequest) | **POST** /repos/{owner}/{repo}/pulls/{index}/merge | Merge a pull request
*RepositoryApi* | [**repoMigrate**](docs/Api/RepositoryApi.md#repomigrate) | **POST** /repos/migrate | Migrate a remote git repository
*RepositoryApi* | [**repoMirrorSync**](docs/Api/RepositoryApi.md#repomirrorsync) | **POST** /repos/{owner}/{repo}/mirror-sync | Sync a mirrored repository
*RepositoryApi* | [**repoPullRequestIsMerged**](docs/Api/RepositoryApi.md#repopullrequestismerged) | **GET** /repos/{owner}/{repo}/pulls/{index}/merge | Check if a pull request has been merged
*RepositoryApi* | [**repoSearch**](docs/Api/RepositoryApi.md#reposearch) | **GET** /repos/search | Search for repositories
*RepositoryApi* | [**repoSigningKey**](docs/Api/RepositoryApi.md#reposigningkey) | **GET** /repos/{owner}/{repo}/signing-key.gpg | Get signing-key.gpg for given repository
*RepositoryApi* | [**repoSubmitPullReview**](docs/Api/RepositoryApi.md#reposubmitpullreview) | **POST** /repos/{owner}/{repo}/pulls/{index}/reviews/{id} | Submit a pending review to an pull request
*RepositoryApi* | [**repoTestHook**](docs/Api/RepositoryApi.md#repotesthook) | **POST** /repos/{owner}/{repo}/hooks/{id}/tests | Test a push webhook
*RepositoryApi* | [**repoTrackedTimes**](docs/Api/RepositoryApi.md#repotrackedtimes) | **GET** /repos/{owner}/{repo}/times | List a repo&#39;s tracked times
*RepositoryApi* | [**repoTransfer**](docs/Api/RepositoryApi.md#repotransfer) | **POST** /repos/{owner}/{repo}/transfer | Transfer a repo ownership
*RepositoryApi* | [**repoUnDismissPullReview**](docs/Api/RepositoryApi.md#repoundismisspullreview) | **POST** /repos/{owner}/{repo}/pulls/{index}/reviews/{id}/undismissals | Cancel to dismiss a review for a pull request
*RepositoryApi* | [**repoUpdateFile**](docs/Api/RepositoryApi.md#repoupdatefile) | **PUT** /repos/{owner}/{repo}/contents/{filepath} | Update a file in a repository
*RepositoryApi* | [**repoUpdatePullRequest**](docs/Api/RepositoryApi.md#repoupdatepullrequest) | **POST** /repos/{owner}/{repo}/pulls/{index}/update | Merge PR&#39;s baseBranch into headBranch
*RepositoryApi* | [**repoUpdateTopics**](docs/Api/RepositoryApi.md#repoupdatetopics) | **PUT** /repos/{owner}/{repo}/topics | Replace list of topics for a repository
*RepositoryApi* | [**topicSearch**](docs/Api/RepositoryApi.md#topicsearch) | **GET** /topics/search | search topics via keyword
*RepositoryApi* | [**userCurrentCheckSubscription**](docs/Api/RepositoryApi.md#usercurrentchecksubscription) | **GET** /repos/{owner}/{repo}/subscription | Check if the current user is watching a repo
*RepositoryApi* | [**userCurrentDeleteSubscription**](docs/Api/RepositoryApi.md#usercurrentdeletesubscription) | **DELETE** /repos/{owner}/{repo}/subscription | Unwatch a repo
*RepositoryApi* | [**userCurrentPutSubscription**](docs/Api/RepositoryApi.md#usercurrentputsubscription) | **PUT** /repos/{owner}/{repo}/subscription | Watch a repo
*RepositoryApi* | [**userTrackedTimes**](docs/Api/RepositoryApi.md#usertrackedtimes) | **GET** /repos/{owner}/{repo}/times/{user} | List a user&#39;s tracked times in a repo
*SettingsApi* | [**getGeneralAPISettings**](docs/Api/SettingsApi.md#getgeneralapisettings) | **GET** /settings/api | Get instance&#39;s global settings for api
*SettingsApi* | [**getGeneralAttachmentSettings**](docs/Api/SettingsApi.md#getgeneralattachmentsettings) | **GET** /settings/attachment | Get instance&#39;s global settings for Attachment
*SettingsApi* | [**getGeneralRepositorySettings**](docs/Api/SettingsApi.md#getgeneralrepositorysettings) | **GET** /settings/repository | Get instance&#39;s global settings for repositories
*SettingsApi* | [**getGeneralUISettings**](docs/Api/SettingsApi.md#getgeneraluisettings) | **GET** /settings/ui | Get instance&#39;s global settings for ui
*UserApi* | [**createCurrentUserRepo**](docs/Api/UserApi.md#createcurrentuserrepo) | **POST** /user/repos | Create a repository
*UserApi* | [**getUserSettings**](docs/Api/UserApi.md#getusersettings) | **GET** /user/settings | Get user settings
*UserApi* | [**getVerificationToken**](docs/Api/UserApi.md#getverificationtoken) | **GET** /user/gpg_key_token | Get a Token to verify
*UserApi* | [**updateUserSettings**](docs/Api/UserApi.md#updateusersettings) | **PATCH** /user/settings | Update user settings
*UserApi* | [**userAddEmail**](docs/Api/UserApi.md#useraddemail) | **POST** /user/emails | Add email addresses
*UserApi* | [**userCheckFollowing**](docs/Api/UserApi.md#usercheckfollowing) | **GET** /users/{follower}/following/{followee} | Check if one user is following another user
*UserApi* | [**userCreateOAuth2Application**](docs/Api/UserApi.md#usercreateoauth2application) | **POST** /user/applications/oauth2 | creates a new OAuth2 application
*UserApi* | [**userCreateToken**](docs/Api/UserApi.md#usercreatetoken) | **POST** /users/{username}/tokens | Create an access token
*UserApi* | [**userCurrentCheckFollowing**](docs/Api/UserApi.md#usercurrentcheckfollowing) | **GET** /user/following/{username} | Check whether a user is followed by the authenticated user
*UserApi* | [**userCurrentCheckStarring**](docs/Api/UserApi.md#usercurrentcheckstarring) | **GET** /user/starred/{owner}/{repo} | Whether the authenticated is starring the repo
*UserApi* | [**userCurrentDeleteFollow**](docs/Api/UserApi.md#usercurrentdeletefollow) | **DELETE** /user/following/{username} | Unfollow a user
*UserApi* | [**userCurrentDeleteGPGKey**](docs/Api/UserApi.md#usercurrentdeletegpgkey) | **DELETE** /user/gpg_keys/{id} | Remove a GPG key
*UserApi* | [**userCurrentDeleteKey**](docs/Api/UserApi.md#usercurrentdeletekey) | **DELETE** /user/keys/{id} | Delete a public key
*UserApi* | [**userCurrentDeleteStar**](docs/Api/UserApi.md#usercurrentdeletestar) | **DELETE** /user/starred/{owner}/{repo} | Unstar the given repo
*UserApi* | [**userCurrentGetGPGKey**](docs/Api/UserApi.md#usercurrentgetgpgkey) | **GET** /user/gpg_keys/{id} | Get a GPG key
*UserApi* | [**userCurrentGetKey**](docs/Api/UserApi.md#usercurrentgetkey) | **GET** /user/keys/{id} | Get a public key
*UserApi* | [**userCurrentListFollowers**](docs/Api/UserApi.md#usercurrentlistfollowers) | **GET** /user/followers | List the authenticated user&#39;s followers
*UserApi* | [**userCurrentListFollowing**](docs/Api/UserApi.md#usercurrentlistfollowing) | **GET** /user/following | List the users that the authenticated user is following
*UserApi* | [**userCurrentListGPGKeys**](docs/Api/UserApi.md#usercurrentlistgpgkeys) | **GET** /user/gpg_keys | List the authenticated user&#39;s GPG keys
*UserApi* | [**userCurrentListKeys**](docs/Api/UserApi.md#usercurrentlistkeys) | **GET** /user/keys | List the authenticated user&#39;s public keys
*UserApi* | [**userCurrentListRepos**](docs/Api/UserApi.md#usercurrentlistrepos) | **GET** /user/repos | List the repos that the authenticated user owns
*UserApi* | [**userCurrentListStarred**](docs/Api/UserApi.md#usercurrentliststarred) | **GET** /user/starred | The repos that the authenticated user has starred
*UserApi* | [**userCurrentListSubscriptions**](docs/Api/UserApi.md#usercurrentlistsubscriptions) | **GET** /user/subscriptions | List repositories watched by the authenticated user
*UserApi* | [**userCurrentPostGPGKey**](docs/Api/UserApi.md#usercurrentpostgpgkey) | **POST** /user/gpg_keys | Create a GPG key
*UserApi* | [**userCurrentPostKey**](docs/Api/UserApi.md#usercurrentpostkey) | **POST** /user/keys | Create a public key
*UserApi* | [**userCurrentPutFollow**](docs/Api/UserApi.md#usercurrentputfollow) | **PUT** /user/following/{username} | Follow a user
*UserApi* | [**userCurrentPutStar**](docs/Api/UserApi.md#usercurrentputstar) | **PUT** /user/starred/{owner}/{repo} | Star the given repo
*UserApi* | [**userCurrentTrackedTimes**](docs/Api/UserApi.md#usercurrenttrackedtimes) | **GET** /user/times | List the current user&#39;s tracked times
*UserApi* | [**userDeleteAccessToken**](docs/Api/UserApi.md#userdeleteaccesstoken) | **DELETE** /users/{username}/tokens/{token} | delete an access token
*UserApi* | [**userDeleteEmail**](docs/Api/UserApi.md#userdeleteemail) | **DELETE** /user/emails | Delete email addresses
*UserApi* | [**userDeleteOAuth2Application**](docs/Api/UserApi.md#userdeleteoauth2application) | **DELETE** /user/applications/oauth2/{id} | delete an OAuth2 Application
*UserApi* | [**userGet**](docs/Api/UserApi.md#userget) | **GET** /users/{username} | Get a user
*UserApi* | [**userGetCurrent**](docs/Api/UserApi.md#usergetcurrent) | **GET** /user | Get the authenticated user
*UserApi* | [**userGetHeatmapData**](docs/Api/UserApi.md#usergetheatmapdata) | **GET** /users/{username}/heatmap | Get a user&#39;s heatmap
*UserApi* | [**userGetOAuth2Application**](docs/Api/UserApi.md#usergetoauth2application) | **GET** /user/applications/oauth2/{id} | get an OAuth2 Application
*UserApi* | [**userGetOauth2Application**](docs/Api/UserApi.md#usergetoauth2application) | **GET** /user/applications/oauth2 | List the authenticated user&#39;s oauth2 applications
*UserApi* | [**userGetStopWatches**](docs/Api/UserApi.md#usergetstopwatches) | **GET** /user/stopwatches | Get list of all existing stopwatches
*UserApi* | [**userGetTokens**](docs/Api/UserApi.md#usergettokens) | **GET** /users/{username}/tokens | List the authenticated user&#39;s access tokens
*UserApi* | [**userListEmails**](docs/Api/UserApi.md#userlistemails) | **GET** /user/emails | List the authenticated user&#39;s email addresses
*UserApi* | [**userListFollowers**](docs/Api/UserApi.md#userlistfollowers) | **GET** /users/{username}/followers | List the given user&#39;s followers
*UserApi* | [**userListFollowing**](docs/Api/UserApi.md#userlistfollowing) | **GET** /users/{username}/following | List the users that the given user is following
*UserApi* | [**userListGPGKeys**](docs/Api/UserApi.md#userlistgpgkeys) | **GET** /users/{username}/gpg_keys | List the given user&#39;s GPG keys
*UserApi* | [**userListKeys**](docs/Api/UserApi.md#userlistkeys) | **GET** /users/{username}/keys | List the given user&#39;s public keys
*UserApi* | [**userListRepos**](docs/Api/UserApi.md#userlistrepos) | **GET** /users/{username}/repos | List the repos owned by the given user
*UserApi* | [**userListStarred**](docs/Api/UserApi.md#userliststarred) | **GET** /users/{username}/starred | The repos that the given user has starred
*UserApi* | [**userListSubscriptions**](docs/Api/UserApi.md#userlistsubscriptions) | **GET** /users/{username}/subscriptions | List the repositories watched by a user
*UserApi* | [**userListTeams**](docs/Api/UserApi.md#userlistteams) | **GET** /user/teams | List all the teams a user belongs to
*UserApi* | [**userSearch**](docs/Api/UserApi.md#usersearch) | **GET** /users/search | Search for users
*UserApi* | [**userUpdateOAuth2Application**](docs/Api/UserApi.md#userupdateoauth2application) | **PATCH** /user/applications/oauth2/{id} | update an OAuth2 Application, this includes regenerating the client secret
*UserApi* | [**userVerifyGPGKey**](docs/Api/UserApi.md#userverifygpgkey) | **POST** /user/gpg_key_verify | Verify a GPG key

## Models

- [APIError](docs/Model/APIError.md)
- [AccessToken](docs/Model/AccessToken.md)
- [AddCollaboratorOption](docs/Model/AddCollaboratorOption.md)
- [AddTimeOption](docs/Model/AddTimeOption.md)
- [AnnotatedTag](docs/Model/AnnotatedTag.md)
- [AnnotatedTagObject](docs/Model/AnnotatedTagObject.md)
- [Attachment](docs/Model/Attachment.md)
- [Branch](docs/Model/Branch.md)
- [BranchProtection](docs/Model/BranchProtection.md)
- [CombinedStatus](docs/Model/CombinedStatus.md)
- [Comment](docs/Model/Comment.md)
- [Commit](docs/Model/Commit.md)
- [CommitAffectedFiles](docs/Model/CommitAffectedFiles.md)
- [CommitDateOptions](docs/Model/CommitDateOptions.md)
- [CommitMeta](docs/Model/CommitMeta.md)
- [CommitStatus](docs/Model/CommitStatus.md)
- [CommitUser](docs/Model/CommitUser.md)
- [ContentsResponse](docs/Model/ContentsResponse.md)
- [CreateAccessTokenOption](docs/Model/CreateAccessTokenOption.md)
- [CreateBranchProtectionOption](docs/Model/CreateBranchProtectionOption.md)
- [CreateBranchRepoOption](docs/Model/CreateBranchRepoOption.md)
- [CreateEmailOption](docs/Model/CreateEmailOption.md)
- [CreateFileOptions](docs/Model/CreateFileOptions.md)
- [CreateForkOption](docs/Model/CreateForkOption.md)
- [CreateGPGKeyOption](docs/Model/CreateGPGKeyOption.md)
- [CreateHookOption](docs/Model/CreateHookOption.md)
- [CreateIssueCommentOption](docs/Model/CreateIssueCommentOption.md)
- [CreateIssueOption](docs/Model/CreateIssueOption.md)
- [CreateKeyOption](docs/Model/CreateKeyOption.md)
- [CreateLabelOption](docs/Model/CreateLabelOption.md)
- [CreateMilestoneOption](docs/Model/CreateMilestoneOption.md)
- [CreateOAuth2ApplicationOptions](docs/Model/CreateOAuth2ApplicationOptions.md)
- [CreateOrgOption](docs/Model/CreateOrgOption.md)
- [CreatePullRequestOption](docs/Model/CreatePullRequestOption.md)
- [CreatePullReviewComment](docs/Model/CreatePullReviewComment.md)
- [CreatePullReviewOptions](docs/Model/CreatePullReviewOptions.md)
- [CreateReleaseOption](docs/Model/CreateReleaseOption.md)
- [CreateRepoOption](docs/Model/CreateRepoOption.md)
- [CreateStatusOption](docs/Model/CreateStatusOption.md)
- [CreateTagOption](docs/Model/CreateTagOption.md)
- [CreateTeamOption](docs/Model/CreateTeamOption.md)
- [CreateUserOption](docs/Model/CreateUserOption.md)
- [CreateWikiPageOptions](docs/Model/CreateWikiPageOptions.md)
- [Cron](docs/Model/Cron.md)
- [DeleteEmailOption](docs/Model/DeleteEmailOption.md)
- [DeleteFileOptions](docs/Model/DeleteFileOptions.md)
- [DeployKey](docs/Model/DeployKey.md)
- [DismissPullReviewOptions](docs/Model/DismissPullReviewOptions.md)
- [EditAttachmentOptions](docs/Model/EditAttachmentOptions.md)
- [EditBranchProtectionOption](docs/Model/EditBranchProtectionOption.md)
- [EditDeadlineOption](docs/Model/EditDeadlineOption.md)
- [EditGitHookOption](docs/Model/EditGitHookOption.md)
- [EditHookOption](docs/Model/EditHookOption.md)
- [EditIssueCommentOption](docs/Model/EditIssueCommentOption.md)
- [EditIssueOption](docs/Model/EditIssueOption.md)
- [EditLabelOption](docs/Model/EditLabelOption.md)
- [EditMilestoneOption](docs/Model/EditMilestoneOption.md)
- [EditOrgOption](docs/Model/EditOrgOption.md)
- [EditPullRequestOption](docs/Model/EditPullRequestOption.md)
- [EditReactionOption](docs/Model/EditReactionOption.md)
- [EditReleaseOption](docs/Model/EditReleaseOption.md)
- [EditRepoOption](docs/Model/EditRepoOption.md)
- [EditTeamOption](docs/Model/EditTeamOption.md)
- [EditUserOption](docs/Model/EditUserOption.md)
- [Email](docs/Model/Email.md)
- [ExternalTracker](docs/Model/ExternalTracker.md)
- [ExternalWiki](docs/Model/ExternalWiki.md)
- [FileCommitResponse](docs/Model/FileCommitResponse.md)
- [FileDeleteResponse](docs/Model/FileDeleteResponse.md)
- [FileLinksResponse](docs/Model/FileLinksResponse.md)
- [FileResponse](docs/Model/FileResponse.md)
- [GPGKey](docs/Model/GPGKey.md)
- [GPGKeyEmail](docs/Model/GPGKeyEmail.md)
- [GeneralAPISettings](docs/Model/GeneralAPISettings.md)
- [GeneralAttachmentSettings](docs/Model/GeneralAttachmentSettings.md)
- [GeneralRepoSettings](docs/Model/GeneralRepoSettings.md)
- [GeneralUISettings](docs/Model/GeneralUISettings.md)
- [GenerateRepoOption](docs/Model/GenerateRepoOption.md)
- [GitBlobResponse](docs/Model/GitBlobResponse.md)
- [GitEntry](docs/Model/GitEntry.md)
- [GitHook](docs/Model/GitHook.md)
- [GitObject](docs/Model/GitObject.md)
- [GitTreeResponse](docs/Model/GitTreeResponse.md)
- [Hook](docs/Model/Hook.md)
- [Identity](docs/Model/Identity.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InternalTracker](docs/Model/InternalTracker.md)
- [Issue](docs/Model/Issue.md)
- [IssueDeadline](docs/Model/IssueDeadline.md)
- [IssueLabelsOption](docs/Model/IssueLabelsOption.md)
- [IssueTemplate](docs/Model/IssueTemplate.md)
- [Label](docs/Model/Label.md)
- [MarkdownOption](docs/Model/MarkdownOption.md)
- [MergePullRequestOption](docs/Model/MergePullRequestOption.md)
- [MigrateRepoForm](docs/Model/MigrateRepoForm.md)
- [MigrateRepoOptions](docs/Model/MigrateRepoOptions.md)
- [Milestone](docs/Model/Milestone.md)
- [NodeInfo](docs/Model/NodeInfo.md)
- [NodeInfoServices](docs/Model/NodeInfoServices.md)
- [NodeInfoSoftware](docs/Model/NodeInfoSoftware.md)
- [NodeInfoUsage](docs/Model/NodeInfoUsage.md)
- [NodeInfoUsageUsers](docs/Model/NodeInfoUsageUsers.md)
- [Note](docs/Model/Note.md)
- [NotificationCount](docs/Model/NotificationCount.md)
- [NotificationSubject](docs/Model/NotificationSubject.md)
- [NotificationThread](docs/Model/NotificationThread.md)
- [OAuth2Application](docs/Model/OAuth2Application.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationPermissions](docs/Model/OrganizationPermissions.md)
- [PRBranchInfo](docs/Model/PRBranchInfo.md)
- [PayloadCommit](docs/Model/PayloadCommit.md)
- [PayloadCommitVerification](docs/Model/PayloadCommitVerification.md)
- [PayloadUser](docs/Model/PayloadUser.md)
- [Permission](docs/Model/Permission.md)
- [PublicKey](docs/Model/PublicKey.md)
- [PullRequest](docs/Model/PullRequest.md)
- [PullRequestMeta](docs/Model/PullRequestMeta.md)
- [PullReview](docs/Model/PullReview.md)
- [PullReviewComment](docs/Model/PullReviewComment.md)
- [PullReviewRequestOptions](docs/Model/PullReviewRequestOptions.md)
- [Reaction](docs/Model/Reaction.md)
- [Reference](docs/Model/Reference.md)
- [Release](docs/Model/Release.md)
- [RepoCommit](docs/Model/RepoCommit.md)
- [RepoTopicOptions](docs/Model/RepoTopicOptions.md)
- [RepoTransfer](docs/Model/RepoTransfer.md)
- [Repository](docs/Model/Repository.md)
- [RepositoryMeta](docs/Model/RepositoryMeta.md)
- [SearchResults](docs/Model/SearchResults.md)
- [ServerVersion](docs/Model/ServerVersion.md)
- [StopWatch](docs/Model/StopWatch.md)
- [SubmitPullReviewOptions](docs/Model/SubmitPullReviewOptions.md)
- [Tag](docs/Model/Tag.md)
- [Team](docs/Model/Team.md)
- [TimelineComment](docs/Model/TimelineComment.md)
- [TopicName](docs/Model/TopicName.md)
- [TopicResponse](docs/Model/TopicResponse.md)
- [TrackedTime](docs/Model/TrackedTime.md)
- [TransferRepoOption](docs/Model/TransferRepoOption.md)
- [UpdateFileOptions](docs/Model/UpdateFileOptions.md)
- [User](docs/Model/User.md)
- [UserHeatmapData](docs/Model/UserHeatmapData.md)
- [UserSettings](docs/Model/UserSettings.md)
- [UserSettingsOptions](docs/Model/UserSettingsOptions.md)
- [WatchInfo](docs/Model/WatchInfo.md)
- [WikiCommit](docs/Model/WikiCommit.md)
- [WikiCommitList](docs/Model/WikiCommitList.md)
- [WikiPage](docs/Model/WikiPage.md)
- [WikiPageMetaData](docs/Model/WikiPageMetaData.md)

## Authorization

### AccessToken

- **Type**: API key
- **API key parameter name**: access_token
- **Location**: URL query string



### AuthorizationHeaderToken

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### BasicAuth

- **Type**: HTTP basic authentication


### SudoHeader

- **Type**: API key
- **API key parameter name**: Sudo
- **Location**: HTTP header



### SudoParam

- **Type**: API key
- **API key parameter name**: sudo
- **Location**: URL query string



### TOTPHeader

- **Type**: API key
- **API key parameter name**: X-GITEA-OTP
- **Location**: HTTP header



### Token

- **Type**: API key
- **API key parameter name**: token
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.17.0+dev-334-gf36701c70`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
