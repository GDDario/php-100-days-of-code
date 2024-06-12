The CURL extension give us extensive communication resources, so we basically can build any request we want.

The CURL params can be defined individually or in the form of an array.

**Basic steps**

To initialize a CURL request, we use $curl = curl_init();

Then, we need to pass the parameters, as:
```php
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
```
Then, we execute and close the CURL client, treating an eventual error:
```php
$response = curl_exec($curl);

if ($response === false) {
    echo 'Curl error: ' . curl_error($curl);
}

curl_close($curl)
```

Link to documentation: https://www.php.net/manual/en/book.curl.php.