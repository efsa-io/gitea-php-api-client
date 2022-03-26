# # ContentsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Efsa\Client\Gitea\Model\FileLinksResponse**](FileLinksResponse.md) |  | [optional]
**content** | **string** | &#x60;content&#x60; is populated when &#x60;type&#x60; is &#x60;file&#x60;, otherwise null | [optional]
**download_url** | **string** |  | [optional]
**encoding** | **string** | &#x60;encoding&#x60; is populated when &#x60;type&#x60; is &#x60;file&#x60;, otherwise null | [optional]
**git_url** | **string** |  | [optional]
**html_url** | **string** |  | [optional]
**name** | **string** |  | [optional]
**path** | **string** |  | [optional]
**sha** | **string** |  | [optional]
**size** | **int** |  | [optional]
**submodule_git_url** | **string** | &#x60;submodule_git_url&#x60; is populated when &#x60;type&#x60; is &#x60;submodule&#x60;, otherwise null | [optional]
**target** | **string** | &#x60;target&#x60; is populated when &#x60;type&#x60; is &#x60;symlink&#x60;, otherwise null | [optional]
**type** | **string** | &#x60;type&#x60; will be &#x60;file&#x60;, &#x60;dir&#x60;, &#x60;symlink&#x60;, or &#x60;submodule&#x60; | [optional]
**url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
