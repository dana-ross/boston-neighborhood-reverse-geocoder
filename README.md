# Boston Neighborhood Locator [![Build Status](https://travis-ci.org/daveross/boston-neighborhood-locator.svg?branch=master)](https://travis-ci.org/daveross/boston-neighborhood-locator)

Determine which Boston neighborhood a lat/long point falls in, and does it wicked fast without calling out to an external API.

## License

[MIT](http://daveross.mit-license.org/)

See [why I contribute to open source software](https://davidmichaelross.com/blog/contribute-open-source-software/).

## Examples

```
echo 'Boston City Hall is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0580, 42.3603 ) . "\n";
echo 'Massachusetts General Hospital is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\boston_neighborhoods\get_neighborhood( -71.0686, 42.3628 ) . "\n";
echo 'Faneuil Hall is in ' . \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0568, 42.3600 ) . "\n";
```

## Thanks

Data from [Boston Neighborhood Map](http://bostonneighborhoodmap.com/) by [Cosmo Catalano](http://cosmocatalano.com/)
