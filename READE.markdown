# Dirty piece of code

Dirty example of `Facade` and `Adapter` patterns.

## API classes

`horoscope.php` and `infoclimat.php` exposes two API wrappers.

## Adapter

`adapter.php` exposes a simple adapter class parsing XML flow to JSON.

## Facade

`facade.php` exposes a simple facade class handling both `InfoClimat` and `Horoscope` class in order to gives access to data from a single entry-point.

## Example

`example.php` is the entry-point of the script, the file that should be executed by PHP.

# Todo

 + Chose 2 or 3 APIs from [this Github's list](https://github.com/toddmotto/public-apis)
 + Implement APIs wrapper for chosen APIs.
 + Create an Adapter parsing API's natural format in another one.
 + Create a Facade handling both APIs and, if possible, restrict user on the APIs usage.


