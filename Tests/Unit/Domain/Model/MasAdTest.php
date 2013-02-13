<?php

namespace MORLIC\Myaudioshop\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Mitja Orlić <mitja_max@yahoo.com>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \MORLIC\Myaudioshop\Domain\Model\MasAd.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage MyAudioShop
 *
 * @author Mitja Orlić <mitja_max@yahoo.com>
 */
class MasAdTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \MORLIC\Myaudioshop\Domain\Model\MasAd
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \MORLIC\Myaudioshop\Domain\Model\MasAd();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImagesForStringSetsImages() { 
		$this->fixture->setImages('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImages()
		);
	}
	
	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForFloatSetsPrice() { 
		$this->fixture->setPrice(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getPrice()
		);
	}
	
	/**
	 * @test
	 */
	public function getNewPriceReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getNewPrice()
		);
	}

	/**
	 * @test
	 */
	public function setNewPriceForFloatSetsNewPrice() { 
		$this->fixture->setNewPrice(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getNewPrice()
		);
	}
	
	/**
	 * @test
	 */
	public function getManualReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setManualForOoleanSetsManual() { }
	
	/**
	 * @test
	 */
	public function getRemoteReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setRemoteForOoleanSetsRemote() { }
	
	/**
	 * @test
	 */
	public function getViewsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getViews()
		);
	}

	/**
	 * @test
	 */
	public function setViewsForIntegerSetsViews() { 
		$this->fixture->setViews(12);

		$this->assertSame(
			12,
			$this->fixture->getViews()
		);
	}
	
	/**
	 * @test
	 */
	public function getWeightReturnsInitialValueForFloat() { 
		$this->assertSame(
			0.0,
			$this->fixture->getWeight()
		);
	}

	/**
	 * @test
	 */
	public function setWeightForFloatSetsWeight() { 
		$this->fixture->setWeight(3.14159265);

		$this->assertSame(
			3.14159265,
			$this->fixture->getWeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getStatusReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getStatus()
		);
	}

	/**
	 * @test
	 */
	public function setStatusForIntegerSetsStatus() { 
		$this->fixture->setStatus(12);

		$this->assertSame(
			12,
			$this->fixture->getStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getPackagingReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPackaging()
		);
	}

	/**
	 * @test
	 */
	public function setPackagingForIntegerSetsPackaging() { 
		$this->fixture->setPackaging(12);

		$this->assertSame(
			12,
			$this->fixture->getPackaging()
		);
	}
	
	/**
	 * @test
	 */
	public function getBuildDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setBuildDateForDateTimeSetsBuildDate() { }
	
	/**
	 * @test
	 */
	public function getQuantityReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getQuantity()
		);
	}

	/**
	 * @test
	 */
	public function setQuantityForIntegerSetsQuantity() { 
		$this->fixture->setQuantity(12);

		$this->assertSame(
			12,
			$this->fixture->getQuantity()
		);
	}
	
	/**
	 * @test
	 */
	public function getColorReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setColorForStringSetsColor() { 
		$this->fixture->setColor('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getColor()
		);
	}
	
	/**
	 * @test
	 */
	public function getEditorPickReturnsInitialValueForOolean() { }

	/**
	 * @test
	 */
	public function setEditorPickForOoleanSetsEditorPick() { }
	
	/**
	 * @test
	 */
	public function getSerialReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSerialForStringSetsSerial() { 
		$this->fixture->setSerial('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSerial()
		);
	}
	
	/**
	 * @test
	 */
	public function getShipmentPaysReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getShipmentPays()
		);
	}

	/**
	 * @test
	 */
	public function setShipmentPaysForIntegerSetsShipmentPays() { 
		$this->fixture->setShipmentPays(12);

		$this->assertSame(
			12,
			$this->fixture->getShipmentPays()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory() { }

	/**
	 * @test
	 */
	public function setCategoryForCategorySetsCategory() { }
	
	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForCountry() { }

	/**
	 * @test
	 */
	public function setLocationForCountrySetsLocation() { }
	
	/**
	 * @test
	 */
	public function getUserReturnsInitialValueForUser() { }

	/**
	 * @test
	 */
	public function setUserForUserSetsUser() { }
	
	/**
	 * @test
	 */
	public function getBrandReturnsInitialValueForBrand() { }

	/**
	 * @test
	 */
	public function setBrandForBrandSetsBrand() { }
	
	/**
	 * @test
	 */
	public function getFeedbackReturnsInitialValueForFeedback() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFeedback()
		);
	}

	/**
	 * @test
	 */
	public function setFeedbackForObjectStorageContainingFeedbackSetsFeedback() { 
		$feedback = new \MORLIC\Myaudioshop\Domain\Model\Feedback();
		$objectStorageHoldingExactlyOneFeedback = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFeedback->attach($feedback);
		$this->fixture->setFeedback($objectStorageHoldingExactlyOneFeedback);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFeedback,
			$this->fixture->getFeedback()
		);
	}
	
	/**
	 * @test
	 */
	public function addFeedbackToObjectStorageHoldingFeedback() {
		$feedback = new \MORLIC\Myaudioshop\Domain\Model\Feedback();
		$objectStorageHoldingExactlyOneFeedback = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFeedback->attach($feedback);
		$this->fixture->addFeedback($feedback);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFeedback,
			$this->fixture->getFeedback()
		);
	}

	/**
	 * @test
	 */
	public function removeFeedbackFromObjectStorageHoldingFeedback() {
		$feedback = new \MORLIC\Myaudioshop\Domain\Model\Feedback();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($feedback);
		$localObjectStorage->detach($feedback);
		$this->fixture->addFeedback($feedback);
		$this->fixture->removeFeedback($feedback);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFeedback()
		);
	}
	
	/**
	 * @test
	 */
	public function getPaymentReturnsInitialValueForPayment() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPayment()
		);
	}

	/**
	 * @test
	 */
	public function setPaymentForObjectStorageContainingPaymentSetsPayment() { 
		$payment = new \MORLIC\Myaudioshop\Domain\Model\Payment();
		$objectStorageHoldingExactlyOnePayment = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePayment->attach($payment);
		$this->fixture->setPayment($objectStorageHoldingExactlyOnePayment);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePayment,
			$this->fixture->getPayment()
		);
	}
	
	/**
	 * @test
	 */
	public function addPaymentToObjectStorageHoldingPayment() {
		$payment = new \MORLIC\Myaudioshop\Domain\Model\Payment();
		$objectStorageHoldingExactlyOnePayment = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOnePayment->attach($payment);
		$this->fixture->addPayment($payment);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePayment,
			$this->fixture->getPayment()
		);
	}

	/**
	 * @test
	 */
	public function removePaymentFromObjectStorageHoldingPayment() {
		$payment = new \MORLIC\Myaudioshop\Domain\Model\Payment();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($payment);
		$localObjectStorage->detach($payment);
		$this->fixture->addPayment($payment);
		$this->fixture->removePayment($payment);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPayment()
		);
	}
	
	/**
	 * @test
	 */
	public function getShipmentReturnsInitialValueForShipment() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getShipment()
		);
	}

	/**
	 * @test
	 */
	public function setShipmentForObjectStorageContainingShipmentSetsShipment() { 
		$shipment = new \MORLIC\Myaudioshop\Domain\Model\Shipment();
		$objectStorageHoldingExactlyOneShipment = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneShipment->attach($shipment);
		$this->fixture->setShipment($objectStorageHoldingExactlyOneShipment);

		$this->assertSame(
			$objectStorageHoldingExactlyOneShipment,
			$this->fixture->getShipment()
		);
	}
	
	/**
	 * @test
	 */
	public function addShipmentToObjectStorageHoldingShipment() {
		$shipment = new \MORLIC\Myaudioshop\Domain\Model\Shipment();
		$objectStorageHoldingExactlyOneShipment = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneShipment->attach($shipment);
		$this->fixture->addShipment($shipment);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneShipment,
			$this->fixture->getShipment()
		);
	}

	/**
	 * @test
	 */
	public function removeShipmentFromObjectStorageHoldingShipment() {
		$shipment = new \MORLIC\Myaudioshop\Domain\Model\Shipment();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($shipment);
		$localObjectStorage->detach($shipment);
		$this->fixture->addShipment($shipment);
		$this->fixture->removeShipment($shipment);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getShipment()
		);
	}
	
}
?>