## Google Ads API for Phalcon

This project is an integration of [`googleads/googleads-php-lib`](https://github.com/googleads/googleads-php-lib) in Phalcon 1.3.

### Setup
- Run `$ composer require ntgiaphu/phalcon-google-ads`

#### Phalcon

- Add provider to config/app.php

```php
'providers' => [
    PhalconGoogleAds\PhalconGoogleAdsProvider::class,
],
```

```php
$app->register(PhalconGoogleAds\PhalconGoogleAdsProvider::class);
```

- Copy `vendor/ntgiaphu/Phalcon-google-ads/config/config.php` to `config/google-ads.php` and insert:
    - developerToken
    - clientId & clientSecret
    - refreshToken

- Add config to `bootstrap/app.php`

```php
$app->configure('google-ads');
```

### Generate refresh token
*This requires that the `clientId` and `clientSecret` is from a native application.*

Run `$ php artisan googleads:token:generate` and open the authorization url. Grant access to the app, and input the
access token in the console. Copy the refresh token into your configuration `config/google-ads.php`

### Basic usage

The following example is for AdWords, but the general code applies to all
products.

```php
<?php

namespace App\Services;

use Money;
use Budget;
use Campaign;
use CampaignService;
use CampaignOperation;
use BiddingStrategyConfiguration;
use PhalconGoogleAds\AdWords\AdWordsUser;

class Service
{
    public function foo()
    {
        $user = new AdWordsUser();

        // Optionally, enable logging to capture the content of SOAP requests and responses.
        $user->LogDefaults();

        /*
         * Instantiate the desired service class by calling $user->GetService([SERVICE], [VERSION])
         * Example:
         */

        /** @var CampaignService $campaignService */
        $campaignService = $user->GetService('CampaignService', 'v201609');

        /*
         * Create data objects and invoke methods on the service class instance. The
         * data objects and methods map directly to the data objects and requests for
         * the corresponding web service.
         */

        // Create new campaign structure
        $campaign = new Campaign();
        $campaign->name = 'Campaign #' . time();
        $campaign->status = 'ACTIVE';
        $campaign->biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $campaign->biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';
        $campaign->budget = new Budget('DAILY', new Money(50000000), 'STANDARD');

        $operation = new CampaignOperation();
        $operation->operand = $campaign;
        $operation->operator = 'ADD';
        $operations[] = $operation;

        // Add campaign
        $campaignReturnValue = $campaignService->mutate($operations);
    }

    public function bar()
    {
        // Create an AdWordsUser instance using the default constructor
        $user = new AdWordsUser();
        $user->SetClientCustomerId('INSERT_CLIENT_CUSTOMER_ID_HERE');
    }
}
```

### Best practices
[AdWords API Workshops Fall 2015](https://www.youtube.com/playlist?list=PLKByxjzUC-N8mEDQF9ARMMkSv0AmYbpsh)

### Features, requirements, support etc.
See [`googleads/googleads-php-lib`](https://github.com/googleads/googleads-php-lib/blob/master/README.md)

### Dependencies
- [`googleads/googleads-php-lib`](https://github.com/googleads/googleads-php-lib) hosts the PHP client library for the various SOAP-based Ads APIs (AdWords, AdExchange Buyer, and DFP) at Google.
