<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\EmailCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailCampaigns = new \SendinBlue\Client\Model\CreateEmailCampaign(); // \SendinBlue\Client\Model\CreateEmailCampaign | Values to create a campaign




$emailCampaigns["name"] = "dasda";
$emailCampaigns["subject"] = "SIB php wrap TestSubject {{params.subject}}";
$emailCampaigns["sender"] = array("name"=> "Shubham Upadhyay", "email"=>"shubham.upadhyay@sendinblue.com");
$emailCampaigns["type"] = "classic";


$emailCampaigns["1htmlContent"] = " dgdg gdhjas dakhd ";


$emailCampaigns["recipients"] = array("listIds"=>[291]);


$emailCampaigns["scheduledAt"] = "2019-09-04 00:00:01";
$emailCampaigns["templateId"] = 750;
$emailCampaigns["params"] = array("subject"=>"xyz" , "email"=>"example@abc.com", "value"=> array("test"=>"test"), "NAME"=>"QWERTY");


try {
    $result = $apiInstance->createEmailCampaign($emailCampaigns);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}

exit;
?>