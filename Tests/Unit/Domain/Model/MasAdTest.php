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
	public function getShipmentTypeReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getShipmentType()
		);
	}

	/**
	 * @test
	 */
	public function setShipmentTypeForIntegerSetsShipmentType() { 
		$this->fixture->setShipmentType(12);

		$this->assertSame(
			12,
			$this->fixture->getShipmentType()
		);
	}
	
	/**
	 * @test
	 */
	public function getPaymentReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPayment()
		);
	}

	/**
	 * @test
	 */
	public function setPaymentForIntegerSetsPayment() { 
		$this->fixture->setPayment(12);

		$this->assertSame(
			12,
			$this->fixture->getPayment()
		);
	}
	
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
	
}
?>