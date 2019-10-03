# Development environment

Add the following to the main `composer.json`

```json
"repositories": [
    {
        "type": "path",
        "version": "dev-master",
        "url": "/doveport/geoip"
    }
],
"require": [
    "rajesh-kc/doveport-geoip": "dev-master",
]

```
Then
```sh
rm -fr vendor/rajesh-kc
php composer.phar require rajesh-kc/doveport-geoip "dev-master"
```

# Production environment

Add the following to the main `composer.json`

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/rajesh-kc/doveport-geoip"
    }
],
"require": [
    "rajesh-kc/doveport-geoip": "1.0",
]

```
Then
```sh
rm -fr vendor/rajesh-kc
php composer.phar require rajesh-kc/doveport-geoip "1.0"
```
