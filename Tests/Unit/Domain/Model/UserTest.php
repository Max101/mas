<?php

namespace TYPO3\Myaudioshop\Tests;
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
 * Test case for class \TYPO3\Myaudioshop\Domain\Model\User.
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
class UserTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Myaudioshop\Domain\Model\User
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Myaudioshop\Domain\Model\User();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFavoriteUserReturnsInitialValueForUser() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFavoriteUser()
		);
	}

	/**
	 * @test
	 */
	public function setFavoriteUserForObjectStorageContainingUserSetsFavoriteUser() { 
		$favoriteUser = new \TYPO3\Myaudioshop\Domain\Model\User();
		$objectStorageHoldingExactlyOneFavoriteUser = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFavoriteUser->attach($favoriteUser);
		$this->fixture->setFavoriteUser($objectStorageHoldingExactlyOneFavoriteUser);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFavoriteUser,
			$this->fixture->getFavoriteUser()
		);
	}
	
	/**
	 * @test
	 */
	public function addFavoriteUserToObjectStorageHoldingFavoriteUser() {
		$favoriteUser = new \TYPO3\Myaudioshop\Domain\Model\User();
		$objectStorageHoldingExactlyOneFavoriteUser = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFavoriteUser->attach($favoriteUser);
		$this->fixture->addFavoriteUser($favoriteUser);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFavoriteUser,
			$this->fixture->getFavoriteUser()
		);
	}

	/**
	 * @test
	 */
	public function removeFavoriteUserFromObjectStorageHoldingFavoriteUser() {
		$favoriteUser = new \TYPO3\Myaudioshop\Domain\Model\User();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($favoriteUser);
		$localObjectStorage->detach($favoriteUser);
		$this->fixture->addFavoriteUser($favoriteUser);
		$this->fixture->removeFavoriteUser($favoriteUser);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFavoriteUser()
		);
	}
	
	/**
	 * @test
	 */
	public function getFavoriteAdReturnsInitialValueForMasAd() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFavoriteAd()
		);
	}

	/**
	 * @test
	 */
	public function setFavoriteAdForObjectStorageContainingMasAdSetsFavoriteAd() { 
		$favoriteAd = new \TYPO3\Myaudioshop\Domain\Model\MasAd();
		$objectStorageHoldingExactlyOneFavoriteAd = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFavoriteAd->attach($favoriteAd);
		$this->fixture->setFavoriteAd($objectStorageHoldingExactlyOneFavoriteAd);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFavoriteAd,
			$this->fixture->getFavoriteAd()
		);
	}
	
	/**
	 * @test
	 */
	public function addFavoriteAdToObjectStorageHoldingFavoriteAd() {
		$favoriteAd = new \TYPO3\Myaudioshop\Domain\Model\MasAd();
		$objectStorageHoldingExactlyOneFavoriteAd = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneFavoriteAd->attach($favoriteAd);
		$this->fixture->addFavoriteAd($favoriteAd);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFavoriteAd,
			$this->fixture->getFavoriteAd()
		);
	}

	/**
	 * @test
	 */
	public function removeFavoriteAdFromObjectStorageHoldingFavoriteAd() {
		$favoriteAd = new \TYPO3\Myaudioshop\Domain\Model\MasAd();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($favoriteAd);
		$localObjectStorage->detach($favoriteAd);
		$this->fixture->addFavoriteAd($favoriteAd);
		$this->fixture->removeFavoriteAd($favoriteAd);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFavoriteAd()
		);
	}
	
}
?>