<?php
/**
 *
 *
 */

namespace CellaVita\Model\Entity;

use CellaVita\Model\Entity\Address;
use PHPUnit_Framework_TestCase;

class AddressTest extends PHPUnit_Framework_TestCase
{
	protected $test_data = array(
			'donor_id' => '..',
			'address_id' => '..',
			'address_line1' => '..',
			'address_line2' => '..',
			'address_state' => '..',
			'address_city' => '..',
			'address_zip' => '..');

	public function testAddressInitialState() {
		$address = new Address();
		$this->assertNull($address->donor_id, '"donor_id" should be initially null');
		$this->assertNull($address->address_id, '"address_id" should be initially null');
		$this->assertNull($address->address_line1, '"address_line1" should be initially null');
		$this->assertNull($address->address_line2, '"address_line2" should be initially null');
		$this->assertNull($address->address_state, '"address_state" should be initially null');
		$this->assertNull($address->address_city, '"address_city" should be initially null');
		$this->assertNull($address->address_zip, '"address_zip" should be initially null');
	}

	public function testExchangeArraySetsPropertiesCorrectly() {
		$address = new Address();
		$address->exchangeArray($this->test_data);
		$this->assertSame($this->test_data['donor_id'], $address->donor_id, '"donor_id" was not set correctly');
		$this->assertSame($this->test_data['address_id'], $address->address_id, '"address_id" was not set correctly');
		$this->assertSame($this->test_data['address_line1'], $address->address_line1, '"address_line1" was not set correctly');
		$this->assertSame($this->test_data['address_line2'], $address->address_line2, '"address_line2" was not set correctly');
		$this->assertSame($this->test_data['address_state'], $address->address_state, '"address_state" was not set correctly');
		$this->assertSame($this->test_data['address_city'], $address->address_city, '"address_city" was not set correctly');
		$this->assertSame($this->test_data['address_zip'], $address->address_zip, '"address_zip" was not set correctly');
	}

	public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent() {
		$address = new Address();
		$address->exchangeArray($this->test_data);
		$address->exchangeArray(array());
		$this->assertNull($address->donor_id, '"donor_id" should be null');
		$this->assertNull($address->address_id, '"address_id" should be null');
		$this->assertNull($address->address_line1, '"address_line1" should be null');
		$this->assertNull($address->address_line2, '"address_line2" should be null');
		$this->assertNull($address->address_state, '"address_state" should be null');
		$this->assertNull($address->address_city, '"address_city" should be null');
		$this->assertNull($address->address_zip, '"address_zip" should be null');
	}
}