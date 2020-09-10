# Laravel packages

Laravel 7.x

+ https://laravel.com/docs/7.x/packages

### Running

```shell script
php artisan serve 
```

## Manual Local package

Manually added into composer

+ https://www.notion.so/andrelugomes/Local-package-5ca3d709d0a846928e60f0aca5006f89

## Package Discovery

Autoconfig Local package

[x] Using EXTRA.LARAVEL.PROVIDERS

+ https://laravel.com/docs/7.x/packages#package-discovery
+ https://www.notion.so/andrelugomes/Package-Discovery-cdd7d2c4051440bb81bb3c62c8f882dc

## External Package Discovery

Same as Package Discovery, but out from the main project

+ https://www.notion.so/andrelugomes/External-package-312c564390c64033a10ce8233d9d6a2e

## External Facade

Dicovering package then using Facades

```json
"andrelugomes/facade-package": "dev-master",
...
"repositories": {
        ...
        "facade": {
            "type": "path",
            "url": "../facade-package"
        }
    }
```
## Configurations

### Boot Publishes
Copy configuration file from package to main project

```shell script
php artisan vendor:publish                                                                                                  4.56G   23.51M  

 Which provider or tag's files would you like to publish?:
  [0 ] Publish files from all providers and tags listed below
  [1 ] Provider: Andrelugomes\Configuration\ConfigurationServiceProvider
 > 1

Copied File [/home/andregomes/workspace/hello-laravel/config-package/config/default-config.php] To [/config/default-config.php]
Publishing complete.

```
### Register Merge

Create an alias for original config access


```json
{
    "override": {
        "config-file": {
            "Foo": "Bazzz",
            "New": "new value merged"
        },
        "config-file.options": {
            "config['Foo']": "Bazzz",
            "config('config-file.New')": "new value merged"
        }
    },
    "original": {
        "config-from-alias": {
            "Foo": "Bar",
            "Default": "default-value"
        },
        "alias.options": {
            "alias['Foo']": "Bar",
            "config('alias.Foo')": "Bar",
            "config('alias.Default')": "default-value",
            "config('alias.New')": null
        }
    }
}
```

