<?php

class BostonNeighborhoodsTest extends PHPUnit_Framework_TestCase {

	function test_get_neighborhood() {

		//Boston City Hall
		$this->assertEquals( 'Downtown', \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( - 71.0580, 42.3603 ) );

		// Massachusetts General Hospital
		$this->assertEquals('West End', \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood(-71.0686, 42.3628 ));

		// Faneuil Hall
		$this->assertEquals('Downtown', \DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( -71.0568, 42.3600));

	}

	function test_invalid_latlong() {

		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( 400, 38.9047 ) );
		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( - 77.0164, 400 ) );
		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( - 400, 38.9047 ) );
		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( - 77.0164, - 400 ) );
		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( 'ABC', 'DEF' ) );
		$this->assertEmpty( DaveRoss\BostonNeighborhoodReverseGeocoder\get_neighborhood( array(), array() ) );

	}

}