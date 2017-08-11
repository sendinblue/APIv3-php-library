## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');

$api_instance = new Swagger\Client\Api\AccountApi();

try {
    $result = $api_instance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.sendinblue.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get your account informations, plans and credits details
*AttributesApi* | [**createAttribute**](docs/Api/AttributesApi.md#createattribute) | **POST** /contacts/attributes | Creates contact attributes
*AttributesApi* | [**deleteAttribute**](docs/Api/AttributesApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeId} | Deletes an attribute
*AttributesApi* | [**getAttributes**](docs/Api/AttributesApi.md#getattributes) | **GET** /contacts/attributes | Lists all attributes
*ContactsApi* | [**addContactToList**](docs/Api/ContactsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ContactsApi* | [**createAttribute**](docs/Api/ContactsApi.md#createattribute) | **POST** /contacts/attributes | Creates contact attributes
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a contact
*ContactsApi* | [**createFolder**](docs/Api/ContactsApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*ContactsApi* | [**createList**](docs/Api/ContactsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ContactsApi* | [**deleteAttribute**](docs/Api/ContactsApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeId} | Deletes an attribute
*ContactsApi* | [**deleteFolder**](docs/Api/ContactsApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*ContactsApi* | [**deleteList**](docs/Api/ContactsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ContactsApi* | [**getAttributes**](docs/Api/ContactsApi.md#getattributes) | **GET** /contacts/attributes | Lists all attributes
*ContactsApi* | [**getContactInfo**](docs/Api/ContactsApi.md#getcontactinfo) | **GET** /contacts/{email} | Retrieves contact informations
*ContactsApi* | [**getContactStats**](docs/Api/ContactsApi.md#getcontactstats) | **GET** /contacts/{email}/campaignStats | Get the campaigns statistics for a contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Get all the contacts
*ContactsApi* | [**getContactsFromList**](docs/Api/ContactsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get the contacts in a list
*ContactsApi* | [**getFolder**](docs/Api/ContactsApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns folder details
*ContactsApi* | [**getFolderLists**](docs/Api/ContactsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*ContactsApi* | [**getFolders**](docs/Api/ContactsApi.md#getfolders) | **GET** /contacts/folders | Get all the folders
*ContactsApi* | [**getList**](docs/Api/ContactsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get the details of a list
*ContactsApi* | [**getLists**](docs/Api/ContactsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ContactsApi* | [**importContacts**](docs/Api/ContactsApi.md#importcontacts) | **POST** /contacts/import | Import contacts
*ContactsApi* | [**removeContactToList**](docs/Api/ContactsApi.md#removecontacttolist) | **POST** /contacts/lists/{listId}/contacts/remove | Remove existing contacts from a list
*ContactsApi* | [**requestContactExport**](docs/Api/ContactsApi.md#requestcontactexport) | **POST** /contacts/export | Export contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{email} | Updates a contact
*ContactsApi* | [**updateFolder**](docs/Api/ContactsApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a contact folder
*ContactsApi* | [**updateList**](docs/Api/ContactsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*EmailCampaignsApi* | [**createEmailCampaign**](docs/Api/EmailCampaignsApi.md#createemailcampaign) | **POST** /emailCampaigns | Create an email campaign
*EmailCampaignsApi* | [**deleteEmailCampaigns**](docs/Api/EmailCampaignsApi.md#deleteemailcampaigns) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
*EmailCampaignsApi* | [**emailExportRecipients**](docs/Api/EmailCampaignsApi.md#emailexportrecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of a campaign
*EmailCampaignsApi* | [**getEmailCampaign**](docs/Api/EmailCampaignsApi.md#getemailcampaign) | **GET** /emailCampaigns/{campaignId} | Get campaign informations
*EmailCampaignsApi* | [**getEmailCampaigns**](docs/Api/EmailCampaignsApi.md#getemailcampaigns) | **GET** /emailCampaigns | Return all your created campaigns
*EmailCampaignsApi* | [**sendEmailCampaignNow**](docs/Api/EmailCampaignsApi.md#sendemailcampaignnow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign id of the campaign immediately
*EmailCampaignsApi* | [**sendReport**](docs/Api/EmailCampaignsApi.md#sendreport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaigns
*EmailCampaignsApi* | [**sendTestEmail**](docs/Api/EmailCampaignsApi.md#sendtestemail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
*EmailCampaignsApi* | [**updateCampaignStatus**](docs/Api/EmailCampaignsApi.md#updatecampaignstatus) | **PUT** /emailCampaigns/{campaignId}/status | Update a campaign status
*EmailCampaignsApi* | [**updateEmailCampaigns**](docs/Api/EmailCampaignsApi.md#updateemailcampaigns) | **PUT** /emailCampaigns/{campaignId} | Update a campaign
*FoldersApi* | [**createFolder**](docs/Api/FoldersApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*FoldersApi* | [**deleteFolder**](docs/Api/FoldersApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*FoldersApi* | [**getFolder**](docs/Api/FoldersApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns folder details
*FoldersApi* | [**getFolderLists**](docs/Api/FoldersApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*FoldersApi* | [**getFolders**](docs/Api/FoldersApi.md#getfolders) | **GET** /contacts/folders | Get all the folders
*FoldersApi* | [**updateFolder**](docs/Api/FoldersApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a contact folder
*ListsApi* | [**addContactToList**](docs/Api/ListsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ListsApi* | [**createList**](docs/Api/ListsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ListsApi* | [**deleteList**](docs/Api/ListsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ListsApi* | [**getContactsFromList**](docs/Api/ListsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get the contacts in a list
*ListsApi* | [**getFolderLists**](docs/Api/ListsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get the lists in a folder
*ListsApi* | [**getList**](docs/Api/ListsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get the details of a list
*ListsApi* | [**getLists**](docs/Api/ListsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ListsApi* | [**removeContactToList**](docs/Api/ListsApi.md#removecontacttolist) | **POST** /contacts/lists/{listId}/contacts/remove | Remove existing contacts from a list
*ListsApi* | [**updateList**](docs/Api/ListsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*ProcessApi* | [**getProcess**](docs/Api/ProcessApi.md#getprocess) | **GET** /processes/{processId} | Return the informations for a process
*ProcessApi* | [**getProcesses**](docs/Api/ProcessApi.md#getprocesses) | **GET** /processes | Return all the processes for your account
*ResellerApi* | [**addCredits**](docs/Api/ResellerApi.md#addcredits) | **POST** /reseller/children/{childId}/credits/add | Add Email and/or SMS credits to a specific child account
*ResellerApi* | [**associateIpToChild**](docs/Api/ResellerApi.md#associateiptochild) | **POST** /reseller/children/{childId}/ips/associate | Associate a dedicated IP to the child
*ResellerApi* | [**createResellerChild**](docs/Api/ResellerApi.md#createresellerchild) | **POST** /reseller/children | Creates a reseller child
*ResellerApi* | [**deleteResellerChild**](docs/Api/ResellerApi.md#deleteresellerchild) | **DELETE** /reseller/children/{childId} | Deletes a single reseller child based on the childId supplied
*ResellerApi* | [**dissociateIpFromChild**](docs/Api/ResellerApi.md#dissociateipfromchild) | **POST** /reseller/children/{childId}/ips/dissociate | Dissociate a dedicated IP to the child
*ResellerApi* | [**getChildInfo**](docs/Api/ResellerApi.md#getchildinfo) | **GET** /reseller/children/{childId} | Gets the info about a specific child account
*ResellerApi* | [**getResellerChilds**](docs/Api/ResellerApi.md#getresellerchilds) | **GET** /reseller/children | Gets the list of all reseller&#39;s children accounts
*ResellerApi* | [**removeCredits**](docs/Api/ResellerApi.md#removecredits) | **POST** /reseller/children/{childId}/credits/remove | Remove Email and/or SMS credits from a specific child account
*ResellerApi* | [**updateResellerChild**](docs/Api/ResellerApi.md#updateresellerchild) | **PUT** /reseller/children/{childId} | Updates infos of reseller&#39;s child based on the childId supplied
*SMSCampaignsApi* | [**createSMSCampaign**](docs/Api/SMSCampaignsApi.md#createsmscampaign) | **POST** /smsCampaigns | Creates a SMS campaign
*SMSCampaignsApi* | [**deleteSMSCampaigns**](docs/Api/SMSCampaignsApi.md#deletesmscampaigns) | **DELETE** /smsCampaigns/{campaignId} | Delete the SMS campaign
*SMSCampaignsApi* | [**getSMSCampaigns**](docs/Api/SMSCampaignsApi.md#getsmscampaigns) | **GET** /smsCampaigns | Returns the informations for all your created SMS campaigns
*SMSCampaignsApi* | [**getSmsCampaign**](docs/Api/SMSCampaignsApi.md#getsmscampaign) | **GET** /smsCampaigns/{campaignId} | Get a SMS campaign
*SMSCampaignsApi* | [**requestSMSRecipientExport**](docs/Api/SMSCampaignsApi.md#requestsmsrecipientexport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Exports the recipients of the specified campaign.
*SMSCampaignsApi* | [**sendSMSCampaignNow**](docs/Api/SMSCampaignsApi.md#sendsmscampaignnow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
*SMSCampaignsApi* | [**sendSMSReport**](docs/Api/SMSCampaignsApi.md#sendsmsreport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send report of SMS campaigns
*SMSCampaignsApi* | [**sendTestSms**](docs/Api/SMSCampaignsApi.md#sendtestsms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send an SMS
*SMSCampaignsApi* | [**updateSMSCampaignStatus**](docs/Api/SMSCampaignsApi.md#updatesmscampaignstatus) | **PUT** /smsCampaigns/{campaignId}/status | Update the campaign status
*SMSCampaignsApi* | [**updateSmsCampaign**](docs/Api/SMSCampaignsApi.md#updatesmscampaign) | **PUT** /smsCampaigns/{campaignId} | Updates a SMS campaign
*SMTPApi* | [**createSmtpTemplate**](docs/Api/SMTPApi.md#createsmtptemplate) | **POST** /smtp/templates | Create an smtp template
*SMTPApi* | [**deleteHardbounces**](docs/Api/SMTPApi.md#deletehardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
*SMTPApi* | [**getAggregatedSmtpReport**](docs/Api/SMTPApi.md#getaggregatedsmtpreport) | **GET** /smtp/statistics/aggregatedReport | Get your SMTP activity aggregated over a period of time
*SMTPApi* | [**getEmailEventReport**](docs/Api/SMTPApi.md#getemaileventreport) | **GET** /smtp/statistics/events | Get all your SMTP activity (unaggregated events)
*SMTPApi* | [**getSmtpReport**](docs/Api/SMTPApi.md#getsmtpreport) | **GET** /smtp/statistics/reports | Get your SMTP activity aggregated per day
*SMTPApi* | [**getSmtpTemplate**](docs/Api/SMTPApi.md#getsmtptemplate) | **GET** /smtp/templates/{templateId} | Returns the template informations
*SMTPApi* | [**getSmtpTemplates**](docs/Api/SMTPApi.md#getsmtptemplates) | **GET** /smtp/templates | Get the list of SMTP templates
*SMTPApi* | [**sendTemplate**](docs/Api/SMTPApi.md#sendtemplate) | **POST** /smtp/templates/{templateId}/send | Send a template
*SMTPApi* | [**sendTestTemplate**](docs/Api/SMTPApi.md#sendtesttemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list
*SMTPApi* | [**sendTransacEmail**](docs/Api/SMTPApi.md#sendtransacemail) | **POST** /smtp/email | Send a transactional email
*SMTPApi* | [**updateSmtpTemplate**](docs/Api/SMTPApi.md#updatesmtptemplate) | **PUT** /smtp/templates/{templateId} | Updates an smtp templates
*SendersApi* | [**createSender**](docs/Api/SendersApi.md#createsender) | **POST** /senders | Create a new sender
*SendersApi* | [**deleteSender**](docs/Api/SendersApi.md#deletesender) | **DELETE** /senders/{senderId} | Delete a sender
*SendersApi* | [**getIps**](docs/Api/SendersApi.md#getips) | **GET** /senders/ips | Return all the dedicated IPs for your account
*SendersApi* | [**getIpsFromSender**](docs/Api/SendersApi.md#getipsfromsender) | **GET** /senders/{senderId}/ips | Return all the dedicated IPs for a sender
*SendersApi* | [**getSenders**](docs/Api/SendersApi.md#getsenders) | **GET** /senders | Get the list of all your senders
*SendersApi* | [**updateSender**](docs/Api/SendersApi.md#updatesender) | **PUT** /senders/{senderId} | Update a sender
*TransactionalSMSApi* | [**getSmsEvents**](docs/Api/TransactionalSMSApi.md#getsmsevents) | **GET** /transactionalSMS/statistics/events | Get all the SMS activity (unaggregated events)
*TransactionalSMSApi* | [**getTransacAggregatedSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacaggregatedsmsreport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
*TransactionalSMSApi* | [**getTransacSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacsmsreport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
*TransactionalSMSApi* | [**sendTransacSms**](docs/Api/TransactionalSMSApi.md#sendtransacsms) | **POST** /transactionalSMS/sms | Send the SMS campaign to the specified mobile number
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get a webhook details
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Get all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update a webhook


## Documentation For Models

 - [AddCredits](docs/Model/AddCredits.md)
 - [AddCredits1](docs/Model/AddCredits1.md)
 - [AddRemoveContactToList](docs/Model/AddRemoveContactToList.md)
 - [ContactEmails](docs/Model/ContactEmails.md)
 - [ContactEmails1](docs/Model/ContactEmails1.md)
 - [ContactsattributesEnumemaration](docs/Model/ContactsattributesEnumemaration.md)
 - [ContactsimportNewList](docs/Model/ContactsimportNewList.md)
 - [CreaUpdateFolder](docs/Model/CreaUpdateFolder.md)
 - [CreateAttribute](docs/Model/CreateAttribute.md)
 - [CreateAttribute1](docs/Model/CreateAttribute1.md)
 - [CreateChild](docs/Model/CreateChild.md)
 - [CreateContact](docs/Model/CreateContact.md)
 - [CreateContact1](docs/Model/CreateContact1.md)
 - [CreateEmailCampaign](docs/Model/CreateEmailCampaign.md)
 - [CreateList](docs/Model/CreateList.md)
 - [CreateList1](docs/Model/CreateList1.md)
 - [CreateModel](docs/Model/CreateModel.md)
 - [CreateSender](docs/Model/CreateSender.md)
 - [CreateSenderModel](docs/Model/CreateSenderModel.md)
 - [CreateSmsCampaign](docs/Model/CreateSmsCampaign.md)
 - [CreateSmsCampaign1](docs/Model/CreateSmsCampaign1.md)
 - [CreateSmtpEmail](docs/Model/CreateSmtpEmail.md)
 - [CreateSmtpTemplate](docs/Model/CreateSmtpTemplate.md)
 - [CreateWebhook](docs/Model/CreateWebhook.md)
 - [CreateWebhook1](docs/Model/CreateWebhook1.md)
 - [CreatedProcessId](docs/Model/CreatedProcessId.md)
 - [DeleteHardbounces](docs/Model/DeleteHardbounces.md)
 - [DeleteHardbounces1](docs/Model/DeleteHardbounces1.md)
 - [EmailCampaign](docs/Model/EmailCampaign.md)
 - [EmailCampaigns](docs/Model/EmailCampaigns.md)
 - [EmailCampaignsRecipients](docs/Model/EmailCampaignsRecipients.md)
 - [EmailCampaignsSender](docs/Model/EmailCampaignsSender.md)
 - [EmailCampaignscampaignIdRecipients](docs/Model/EmailCampaignscampaignIdRecipients.md)
 - [EmailCampaignscampaignIdSender](docs/Model/EmailCampaignscampaignIdSender.md)
 - [EmailCampaignscampaignIdsendReportEmail](docs/Model/EmailCampaignscampaignIdsendReportEmail.md)
 - [EmailExportRecipients](docs/Model/EmailExportRecipients.md)
 - [EmailTo](docs/Model/EmailTo.md)
 - [ErrorModel](docs/Model/ErrorModel.md)
 - [GetAccount](docs/Model/GetAccount.md)
 - [GetAggregatedReport](docs/Model/GetAggregatedReport.md)
 - [GetAttributes](docs/Model/GetAttributes.md)
 - [GetCampaignOverview](docs/Model/GetCampaignOverview.md)
 - [GetCampaignRecipients](docs/Model/GetCampaignRecipients.md)
 - [GetCampaignStats](docs/Model/GetCampaignStats.md)
 - [GetChildInfo](docs/Model/GetChildInfo.md)
 - [GetChildrenList](docs/Model/GetChildrenList.md)
 - [GetClient](docs/Model/GetClient.md)
 - [GetContactCampaignStats](docs/Model/GetContactCampaignStats.md)
 - [GetContactDetails](docs/Model/GetContactDetails.md)
 - [GetContacts](docs/Model/GetContacts.md)
 - [GetEmailCampaign](docs/Model/GetEmailCampaign.md)
 - [GetEmailCampaigns](docs/Model/GetEmailCampaigns.md)
 - [GetEmailEventReport](docs/Model/GetEmailEventReport.md)
 - [GetExtendedCampaignOverview](docs/Model/GetExtendedCampaignOverview.md)
 - [GetExtendedCampaignStats](docs/Model/GetExtendedCampaignStats.md)
 - [GetExtendedClient](docs/Model/GetExtendedClient.md)
 - [GetExtendedContactDetails](docs/Model/GetExtendedContactDetails.md)
 - [GetExtendedList](docs/Model/GetExtendedList.md)
 - [GetFolder](docs/Model/GetFolder.md)
 - [GetFolderLists](docs/Model/GetFolderLists.md)
 - [GetFolders](docs/Model/GetFolders.md)
 - [GetIp](docs/Model/GetIp.md)
 - [GetIpFromSender](docs/Model/GetIpFromSender.md)
 - [GetIps](docs/Model/GetIps.md)
 - [GetIpsFromSender](docs/Model/GetIpsFromSender.md)
 - [GetList](docs/Model/GetList.md)
 - [GetLists](docs/Model/GetLists.md)
 - [GetPlan](docs/Model/GetPlan.md)
 - [GetProcess](docs/Model/GetProcess.md)
 - [GetProcesses](docs/Model/GetProcesses.md)
 - [GetReports](docs/Model/GetReports.md)
 - [GetSendersList](docs/Model/GetSendersList.md)
 - [GetSmsCampaign](docs/Model/GetSmsCampaign.md)
 - [GetSmsCampaign1](docs/Model/GetSmsCampaign1.md)
 - [GetSmsCampaignOverview](docs/Model/GetSmsCampaignOverview.md)
 - [GetSmsCampaignStats](docs/Model/GetSmsCampaignStats.md)
 - [GetSmsCampaigns](docs/Model/GetSmsCampaigns.md)
 - [GetSmsEventReport](docs/Model/GetSmsEventReport.md)
 - [GetSmtpTemplateOverview](docs/Model/GetSmtpTemplateOverview.md)
 - [GetSmtpTemplates](docs/Model/GetSmtpTemplates.md)
 - [GetStatsByDomain](docs/Model/GetStatsByDomain.md)
 - [GetTransacAggregatedSmsReport](docs/Model/GetTransacAggregatedSmsReport.md)
 - [GetTransacSmsReport](docs/Model/GetTransacSmsReport.md)
 - [GetWebhook](docs/Model/GetWebhook.md)
 - [GetWebhooks](docs/Model/GetWebhooks.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Events](docs/Model/InlineResponse20011Events.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012Sender](docs/Model/InlineResponse20012Sender.md)
 - [InlineResponse20012Templates](docs/Model/InlineResponse20012Templates.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Webhooks](docs/Model/InlineResponse20013Webhooks.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Contacts](docs/Model/InlineResponse20014Contacts.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20015Clicked](docs/Model/InlineResponse20015Clicked.md)
 - [InlineResponse20015Links](docs/Model/InlineResponse20015Links.md)
 - [InlineResponse20015MessagesSent](docs/Model/InlineResponse20015MessagesSent.md)
 - [InlineResponse20015Opened](docs/Model/InlineResponse20015Opened.md)
 - [InlineResponse20015TransacAttributes](docs/Model/InlineResponse20015TransacAttributes.md)
 - [InlineResponse20015Unsubscriptions](docs/Model/InlineResponse20015Unsubscriptions.md)
 - [InlineResponse20015UnsubscriptionsAdminUnsubscription](docs/Model/InlineResponse20015UnsubscriptionsAdminUnsubscription.md)
 - [InlineResponse20015UnsubscriptionsUserUnsubscription](docs/Model/InlineResponse20015UnsubscriptionsUserUnsubscription.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Attributes](docs/Model/InlineResponse20016Attributes.md)
 - [InlineResponse20016Enumeration](docs/Model/InlineResponse20016Enumeration.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20017Folders](docs/Model/InlineResponse20017Folders.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20018Lists](docs/Model/InlineResponse20018Lists.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2001ApiKeys](docs/Model/InlineResponse2001ApiKeys.md)
 - [InlineResponse2001Children](docs/Model/InlineResponse2001Children.md)
 - [InlineResponse2001Credits](docs/Model/InlineResponse2001Credits.md)
 - [InlineResponse2001Ips](docs/Model/InlineResponse2001Ips.md)
 - [InlineResponse2001Statistics](docs/Model/InlineResponse2001Statistics.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20020CampaignStats](docs/Model/InlineResponse20020CampaignStats.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Campaigns](docs/Model/InlineResponse20021Campaigns.md)
 - [InlineResponse20021Statistics](docs/Model/InlineResponse20021Statistics.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Events](docs/Model/InlineResponse20022Events.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Reports](docs/Model/InlineResponse20024Reports.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2003Child](docs/Model/InlineResponse2003Child.md)
 - [InlineResponse2003Reseller](docs/Model/InlineResponse2003Reseller.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Ips](docs/Model/InlineResponse2004Ips.md)
 - [InlineResponse2004Senders](docs/Model/InlineResponse2004Senders.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Ips](docs/Model/InlineResponse2005Ips.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2006Ips](docs/Model/InlineResponse2006Ips.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Processes](docs/Model/InlineResponse2007Processes.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Campaigns](docs/Model/InlineResponse2008Campaigns.md)
 - [InlineResponse2008Recipients](docs/Model/InlineResponse2008Recipients.md)
 - [InlineResponse2008RecipientsExclusionLists](docs/Model/InlineResponse2008RecipientsExclusionLists.md)
 - [InlineResponse2008RecipientsLists](docs/Model/InlineResponse2008RecipientsLists.md)
 - [InlineResponse2008Sender](docs/Model/InlineResponse2008Sender.md)
 - [InlineResponse2008Statistics](docs/Model/InlineResponse2008Statistics.md)
 - [InlineResponse2008StatisticsCampaignStats](docs/Model/InlineResponse2008StatisticsCampaignStats.md)
 - [InlineResponse2008StatisticsLinksStats](docs/Model/InlineResponse2008StatisticsLinksStats.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Reports](docs/Model/InlineResponse2009Reports.md)
 - [InlineResponse200Address](docs/Model/InlineResponse200Address.md)
 - [InlineResponse200MarketingAutomation](docs/Model/InlineResponse200MarketingAutomation.md)
 - [InlineResponse200Plan](docs/Model/InlineResponse200Plan.md)
 - [InlineResponse200Relay](docs/Model/InlineResponse200Relay.md)
 - [InlineResponse200RelayData](docs/Model/InlineResponse200RelayData.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponse2014](docs/Model/InlineResponse2014.md)
 - [InlineResponse2014Contacts](docs/Model/InlineResponse2014Contacts.md)
 - [InlineResponse2015](docs/Model/InlineResponse2015.md)
 - [InlineResponse202](docs/Model/InlineResponse202.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse4001](docs/Model/InlineResponse4001.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [IpId](docs/Model/IpId.md)
 - [IpId1](docs/Model/IpId1.md)
 - [ManageIp](docs/Model/ManageIp.md)
 - [Name](docs/Model/Name.md)
 - [Name1](docs/Model/Name1.md)
 - [PostContactInfo](docs/Model/PostContactInfo.md)
 - [PostSendFailed](docs/Model/PostSendFailed.md)
 - [PostSendSmsTestFailed](docs/Model/PostSendSmsTestFailed.md)
 - [RecipientExport](docs/Model/RecipientExport.md)
 - [RecipientExport1](docs/Model/RecipientExport1.md)
 - [RemainingCreditModel](docs/Model/RemainingCreditModel.md)
 - [RemoveCredits](docs/Model/RemoveCredits.md)
 - [RemoveCredits1](docs/Model/RemoveCredits1.md)
 - [RequestContactExport](docs/Model/RequestContactExport.md)
 - [RequestContactExport1](docs/Model/RequestContactExport1.md)
 - [RequestContactImport](docs/Model/RequestContactImport.md)
 - [RequestContactImport1](docs/Model/RequestContactImport1.md)
 - [RequestSMSRecipientExport](docs/Model/RequestSMSRecipientExport.md)
 - [ResellerChild](docs/Model/ResellerChild.md)
 - [ResellerChild1](docs/Model/ResellerChild1.md)
 - [SendEmail](docs/Model/SendEmail.md)
 - [SendEmail1](docs/Model/SendEmail1.md)
 - [SendReport](docs/Model/SendReport.md)
 - [SendReport1](docs/Model/SendReport1.md)
 - [SendReport2](docs/Model/SendReport2.md)
 - [SendSms](docs/Model/SendSms.md)
 - [SendSmtpEmail](docs/Model/SendSmtpEmail.md)
 - [SendSmtpEmail1](docs/Model/SendSmtpEmail1.md)
 - [SendTemplateEmail](docs/Model/SendTemplateEmail.md)
 - [SendTestEmail](docs/Model/SendTestEmail.md)
 - [SendTestEmail1](docs/Model/SendTestEmail1.md)
 - [SendTestSms](docs/Model/SendTestSms.md)
 - [SendTestSms1](docs/Model/SendTestSms1.md)
 - [SendTransacSms](docs/Model/SendTransacSms.md)
 - [SendTransacSms1](docs/Model/SendTransacSms1.md)
 - [Sender](docs/Model/Sender.md)
 - [Sender1](docs/Model/Sender1.md)
 - [SendersIps](docs/Model/SendersIps.md)
 - [SmsCampaignsRecipients](docs/Model/SmsCampaignsRecipients.md)
 - [SmtpTemplate](docs/Model/SmtpTemplate.md)
 - [SmtpTemplate1](docs/Model/SmtpTemplate1.md)
 - [SmtpemailAttachment](docs/Model/SmtpemailAttachment.md)
 - [SmtpemailBcc](docs/Model/SmtpemailBcc.md)
 - [SmtpemailCc](docs/Model/SmtpemailCc.md)
 - [SmtpemailReplyTo](docs/Model/SmtpemailReplyTo.md)
 - [SmtpemailSender](docs/Model/SmtpemailSender.md)
 - [SmtpemailTo](docs/Model/SmtpemailTo.md)
 - [SmtptemplatesSender](docs/Model/SmtptemplatesSender.md)
 - [SmtptemplatestemplateIdSender](docs/Model/SmtptemplatestemplateIdSender.md)
 - [SmtptemplatestemplateIdsendAttachment](docs/Model/SmtptemplatestemplateIdsendAttachment.md)
 - [Status](docs/Model/Status.md)
 - [Status1](docs/Model/Status1.md)
 - [UpdateCampaignStatus](docs/Model/UpdateCampaignStatus.md)
 - [UpdateChild](docs/Model/UpdateChild.md)
 - [UpdateContact](docs/Model/UpdateContact.md)
 - [UpdateContact1](docs/Model/UpdateContact1.md)
 - [UpdateEmailCampaign](docs/Model/UpdateEmailCampaign.md)
 - [UpdateList](docs/Model/UpdateList.md)
 - [UpdateList1](docs/Model/UpdateList1.md)
 - [UpdateSender](docs/Model/UpdateSender.md)
 - [UpdateSmsCampaign](docs/Model/UpdateSmsCampaign.md)
 - [UpdateSmsCampaign1](docs/Model/UpdateSmsCampaign1.md)
 - [UpdateSmtpTemplate](docs/Model/UpdateSmtpTemplate.md)
 - [UpdateWebhook](docs/Model/UpdateWebhook.md)
 - [UpdateWebhook1](docs/Model/UpdateWebhook1.md)


## Documentation For Authorization


## api-key

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header
