<?php
namespace TYPO3\Myaudioshop\Domain\Model;

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
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User>
	 */
	protected $favoriteUser;

	/**
	 * favoriteAd
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\MasAd>
	 */
	protected $favoriteAd;

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
	 * @param \TYPO3\Myaudioshop\Domain\Model\User $favoriteUser
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User> favoriteUser
	 */
	public function addFavoriteUser(\TYPO3\Myaudioshop\Domain\Model\User $favoriteUser) {
		$this->favoriteUser->attach($favoriteUser);
	}

	/**
	 * Removes a User
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\User $favoriteUserToRemove The User to be removed
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User> favoriteUser
	 */
	public function removeFavoriteUser(\TYPO3\Myaudioshop\Domain\Model\User $favoriteUserToRemove) {
		$this->favoriteUser->detach($favoriteUserToRemove);
	}

	/**
	 * Returns the favoriteUser
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User> favoriteUser
	 */
	public function getFavoriteUser() {
		return $this->favoriteUser;
	}

	/**
	 * Sets the favoriteUser
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User> $favoriteUser
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\User> favoriteUser
	 */
	public function setFavoriteUser(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $favoriteUser) {
		$this->favoriteUser = $favoriteUser;
	}

	/**
	 * Adds a MasAd
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\MasAd $favoriteAd
	 * @return void
	 */
	public function addFavoriteAd(\TYPO3\Myaudioshop\Domain\Model\MasAd $favoriteAd) {
		$this->favoriteAd->attach($favoriteAd);
	}

	/**
	 * Removes a MasAd
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\MasAd $favoriteAdToRemove The MasAd to be removed
	 * @return void
	 */
	public function removeFavoriteAd(\TYPO3\Myaudioshop\Domain\Model\MasAd $favoriteAdToRemove) {
		$this->favoriteAd->detach($favoriteAdToRemove);
	}

	/**
	 * Returns the favoriteAd
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\MasAd> $favoriteAd
	 */
	public function getFavoriteAd() {
		return $this->favoriteAd;
	}

	/**
	 * Sets the favoriteAd
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\Myaudioshop\Domain\Model\MasAd> $favoriteAd
	 * @return void
	 */
	public function setFavoriteAd(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $favoriteAd) {
		$this->favoriteAd = $favoriteAd;
	}

}
?>