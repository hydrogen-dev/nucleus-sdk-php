# nucleus-sdk-php
The Hydrogen Nucleus API

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.8.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.hydrogenplatform.com/contact](https://www.hydrogenplatform.com/contact)

## Requirements

PHP 5.5 and later

### Update Base Path 
Follow steps to verify the base URL path:
1. Go to Configuration file located under lib folder.
2.  Search for $host $adminHost and change/verify the URL according to the environment.
**Sandbox Base URL**
https://sandbox.hydrogenplatform.com/nucleus/v1
**Production Base URL**
https://api.hydrogenplatform.com/nucleus/v1
3. Search for $adminHost and change/verify the URL according to the environment.
**Sandbox Base URL**
https://sandbox.hydrogenplatform.com/admin/v1
**Production Base URL**
https://api.hydrogenplatform.com/admin/v1

## Installation & Usage
### Composer

Please run `composer require hydrogenplatform/nucleus`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once('../vendor/autoload.php');
try {
// Use one of the below method to generate oauth token
// 1) Generate Token for client credentials
$config =
        \com\hydrogen\nucleus\AuthApiClient::getDefaultConfiguration()
            ->createClientCredential("MYCLIENTID",
             "MYCLIENTSECRET");
// 2) Generate Token for password credentials
$config =
        \com\hydrogen\nucleus\AuthApiClient::
        getDefaultConfiguration()->createPasswordCredential("MYCLIENTID","MYCLIENTSECRET"
                      ,"MYUSERNAME", "MYPASSWORD");
// 3) Generate Token for client_token
$config = \com\hydrogen\nucleus\AuthApiClient::getDefaultConfiguration()
                ->createClientTokenCredential("MYCLIENTID","MYCLIENTSECRET", "CLIENT_TOKEN");
} catch (\com\hydrogen\nucleus\ApiException $e) {
    print_r($e);
}
$apiInstance = new com\hydrogen\nucleus\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alloc_request = new \com\hydrogen\nucleus\Model\AccountAllocationMapping(); // \com\hydrogen\nucleus\Model\AccountAllocationMapping | allocRequest

try {
    $result = $apiInstance->createAccountAllocationMappingUsingPost($alloc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createAccountAllocationMappingUsingPost: ', $e->getMessage(), PHP_EOL;
}

?>
```
**If you have any query related to api call, please refer our docs** https://www.hydrogenplatform.com/docs/nucleus/v1

## Author

info@hydrogenplatform.com

