# RequestContactExportCustomContactFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actionForContacts** | **string** | Mandatory if neither actionForEmailCampaigns nor actionForSmsCampaigns is passed. This will export the contacts on the basis of provided action applied on contacts as per the list id. * allContacts - Fetch the list of all contacts for a particular list. * subscribed &amp; unsubscribed - Fetch the list of subscribed / unsubscribed (blacklisted via any means) contacts for a particular list. * unsubscribedPerList - Fetch the list of contacts that are unsubscribed from a particular list only. | [optional] 
**actionForEmailCampaigns** | **string** | Mandatory if neither actionForContacts nor actionForSmsCampaigns is passed. This will export the contacts on the basis of provided action applied on email campaigns. * openers &amp; nonOpeners - emailCampaignId is mandatory. Fetch the list of readers / non-readers for a particular email campaign. * clickers &amp; nonClickers - emailCampaignId is mandatory. Fetch the list of clickers / non-clickers for a particular email campaign. * unsubscribed - emailCampaignId is mandatory. Fetch the list of all unsubscribed (blacklisted via any means) contacts for a particular email campaign. * hardBounces &amp; softBounces - emailCampaignId is optional. Fetch the list of hard bounces / soft bounces for a particular / all email campaign(s). | [optional] 
**actionForSmsCampaigns** | **string** | Mandatory if neither actionForContacts nor actionForEmailCampaigns is passed. This will export the contacts on the basis of provided action applied on sms campaigns. * unsubscribed - Fetch the list of all unsubscribed (blacklisted via any means) contacts for all / particular sms campaigns. * hardBounces &amp; softBounces - Fetch the list of hard bounces / soft bounces for all / particular sms campaigns. | [optional] 
**listId** | **int** | Mandatory if actionForContacts is passed, ignored otherwise. Id of the list for which the corresponding action shall be applied in the filter. | [optional] 
**emailCampaignId** | **int** | Considered only if actionForEmailCampaigns is passed, ignored otherwise. Mandatory if action is one of the following - openers, nonOpeners, clickers, nonClickers, unsubscribed. The id of the email campaign for which the corresponding action shall be applied in the filter. | [optional] 
**smsCampaignId** | **int** | Considered only if actionForSmsCampaigns is passed, ignored otherwise. The id of sms campaign for which the corresponding action shall be applied in the filter. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


