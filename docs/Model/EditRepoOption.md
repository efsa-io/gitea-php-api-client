# # EditRepoOption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowManualMerge** | **bool** | either &#x60;true&#x60; to allow mark pr as merged manually, or &#x60;false&#x60; to prevent it. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**allowMergeCommits** | **bool** | either &#x60;true&#x60; to allow merging pull requests with a merge commit, or &#x60;false&#x60; to prevent merging pull requests with merge commits. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**allowRebase** | **bool** | either &#x60;true&#x60; to allow rebase-merging pull requests, or &#x60;false&#x60; to prevent rebase-merging. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**allowRebaseExplicit** | **bool** | either &#x60;true&#x60; to allow rebase with explicit merge commits (--no-ff), or &#x60;false&#x60; to prevent rebase with explicit merge commits. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**allowRebaseUpdate** | **bool** | either &#x60;true&#x60; to allow updating pull request branch by rebase, or &#x60;false&#x60; to prevent it. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**allowSquashMerge** | **bool** | either &#x60;true&#x60; to allow squash-merging pull requests, or &#x60;false&#x60; to prevent squash-merging. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**archived** | **bool** | set to &#x60;true&#x60; to archive this repository. | [optional]
**autodetectManualMerge** | **bool** | either &#x60;true&#x60; to enable AutodetectManualMerge, or &#x60;false&#x60; to prevent it. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;, Note: In some special cases, misjudgments can occur. | [optional]
**defaultBranch** | **string** | sets the default branch for this repository. | [optional]
**defaultDeleteBranchAfterMerge** | **bool** | set to &#x60;true&#x60; to delete pr branch after merge by default | [optional]
**defaultMergeStyle** | **string** | set to a merge style to be used by this repository: \&quot;merge\&quot;, \&quot;rebase\&quot;, \&quot;rebase-merge\&quot;, or \&quot;squash\&quot;. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**description** | **string** | a short description of the repository. | [optional]
**externalTracker** | [**\Efsa\Client\Gitea\Model\ExternalTracker**](ExternalTracker.md) |  | [optional]
**externalWiki** | [**\Efsa\Client\Gitea\Model\ExternalWiki**](ExternalWiki.md) |  | [optional]
**hasIssues** | **bool** | either &#x60;true&#x60; to enable issues for this repository or &#x60;false&#x60; to disable them. | [optional]
**hasProjects** | **bool** | either &#x60;true&#x60; to enable project unit, or &#x60;false&#x60; to disable them. | [optional]
**hasPullRequests** | **bool** | either &#x60;true&#x60; to allow pull requests, or &#x60;false&#x60; to prevent pull request. | [optional]
**hasWiki** | **bool** | either &#x60;true&#x60; to enable the wiki for this repository or &#x60;false&#x60; to disable it. | [optional]
**ignoreWhitespaceConflicts** | **bool** | either &#x60;true&#x60; to ignore whitespace for conflicts, or &#x60;false&#x60; to not ignore whitespace. &#x60;has_pull_requests&#x60; must be &#x60;true&#x60;. | [optional]
**internalTracker** | [**\Efsa\Client\Gitea\Model\InternalTracker**](InternalTracker.md) |  | [optional]
**mirrorInterval** | **string** | set to a string like &#x60;8h30m0s&#x60; to set the mirror interval time | [optional]
**name** | **string** | name of the repository | [optional]
**private** | **bool** | either &#x60;true&#x60; to make the repository private or &#x60;false&#x60; to make it public. Note: you will get a 422 error if the organization restricts changing repository visibility to organization owners and a non-owner tries to change the value of private. | [optional]
**template** | **bool** | either &#x60;true&#x60; to make this repository a template or &#x60;false&#x60; to make it a normal repository | [optional]
**website** | **string** | a URL with more information about the repository. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
