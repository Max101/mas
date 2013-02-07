<?php
namespace MORLIC\Myaudioshop\Domain\Model;

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
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package myaudioshop
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * favoriteUser
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\User>
	 */
	protected $favoriteUser;

	/**
	 * favoriteAd
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\MasAd>
	 */
	protected $favoriteAd;

	/**
	 * country
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\Country
	 */
	protected $country;

	/**
	 * __construct
	 *
	 * @return User
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->favoriteUser = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->favoriteAd = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a User
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $favoriteUser
	 * @return void
	 */
	public function addFavoriteUser(\MORLIC\Myaudioshop\Domain\Model\User $favoriteUser) {
		$this->favoriteUser->attach($favoriteUser);
	}

	/**
	 * Removes a User
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $favoriteUserToRemove The User to be removed
	 * @return void
	 */
	public function removeFavoriteUser(\MORLIC\Myaudioshop\Domain\Model\User $favoriteUserToRemove) {
		$this->favoriteUser->detach($favoriteUserToRemove);
	}

	/**
	 * Returns the favoriteUser
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\User> $favoriteUser
	 */
	public function getFavoriteUser() {
		return $this->favoriteUser;
	}

	/**
	 * Sets the favoriteUser
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\User> $favoriteUser
	 * @return void
	 */
	public function setFavoriteUser(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $favoriteUser) {
		$this->favoriteUser = $favoriteUser;
	}

	/**
	 * Adds a MasAd
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\MasAd $favoriteAd
	 * @return void
	 */
	public function addFavoriteAd(\MORLIC\Myaudioshop\Domain\Model\MasAd $favoriteAd) {
		$this->favoriteAd->attach($favoriteAd);
	}

	/**
	 * Removes a MasAd
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\MasAd $favoriteAdToRemove The MasAd to be removed
	 * @return void
	 */
	public function removeFavoriteAd(\MORLIC\Myaudioshop\Domain\Model\MasAd $favoriteAdToRemove) {
		$this->favoriteAd->detach($favoriteAdToRemove);
	}

	/**
	 * Returns the favoriteAd
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\MasAd> $favoriteAd
	 */
	public function getFavoriteAd() {
		return $this->favoriteAd;
	}

	/**
	 * Sets the favoriteAd
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\MasAd> $favoriteAd
	 * @return void
	 */
	public function setFavoriteAd(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $favoriteAd) {
		$this->favoriteAd = $favoriteAd;
	}

	/**
	 * Returns the country
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\Country $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Country $country
	 * @return void
	 */
	public function setCountry(\MORLIC\Myaudioshop\Domain\Model\Country $country) {
		$this->country = $country;
	}

}
?>