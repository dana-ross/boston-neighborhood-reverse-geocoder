# Boston Neighborhood Reverse Geocoder
[![Latest Stable Version](https://poser.pugx.org/daveross/boston-neighborhood-reverse-geocoder/v/stable)](https://packagist.org/packages/daveross/boston-neighborhood-reverse-geocoder) [![License](https://poser.pugx.org/daveross/boston-neighborhood-reverse-geocoder/license)](https://packagist.org/packages/daveross/boston-neighborhood-reverse-geocoder) [![Build Status](https://travis-ci.org/daveross/boston-neighborhood-reverse-geocoder.svg?branch=master)](https://travis-ci.org/daveross/boston-neighborhood-reverse-geocoder)

Determines which Boston neighborhood a lat/long point falls in, and does it wicked fast without calling out to an external API.

## Installing

### With Composer [![Total Downloads](https://poser.pugx.org/daveross/boston-neighborhood-reverse-geocoder/downloads)](https://packagist.org/packages/daveross/boston-neighborhood-reverse-geocoder)

```
composer require daveross/boston-neighborhood-reverse-geocoder:~1.0.0
```

or add the dependency to your composer.json file manually:

```
"require": {
	"php": ">=5.3",
	"daveross/daveross/boston-neighborhood-reverse-geocoder": "~1.0.0"
}
```

### Without Composer

Copy this library's files to wherever you put third-party libraries in your application. Include `src/boston_neighborhoods.php` from this library.

## License

[MIT](http://daveross.mit-license.org/)

See [why I contribute to open source software](https://medium.com/@csixty4/why-i-write-open-source-software-6d3569c85e64).

## Examples

```
echo 'Boston City Hall is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0580, 42.3603 ) . "\n";
echo 'Massachusetts General Hospital is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0686, 42.3628 ) . "\n";
echo 'Faneuil Hall is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0568, 42.3600 ) . "\n";
```

## Thanks

Data from [Boston Neighborhood Map](http://bostonneighborhoodmap.com/) by [Cosmo Catalano](http://cosmocatalano.com/)
