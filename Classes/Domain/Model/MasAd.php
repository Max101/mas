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
class MasAd extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * description
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * Images
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $images;

	/**
	 * Price
	 *
	 * @var \float
	 */
	protected $price;

	/**
	 * newPrice
	 *
	 * @var \float
	 */
	protected $newPrice;

	/**
	 * Owners manual provided?
	 *
	 * @var boolean
	 */
	protected $manual = FALSE;

	/**
	 * Remote control provided?
	 *
	 * @var boolean
	 */
	protected $remote = FALSE;

	/**
	 * Type of shipment provided
	 *
	 * @var \integer
	 */
	protected $shipmentType;

	/**
	 * Type of payment accepted
	 *
	 * @var \integer
	 */
	protected $payment;

	/**
	 * The category the ad belongs to
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Model\Category
	 */
	protected $hasCategory;

	/**
	 * Country of the ad
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Model\Country
	 */
	protected $hasCountry;

	/**
	 * User who created the ad
	 *
	 * @var
	 */
	protected $userCreated;

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the description
	 *
	 * @return \string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param \string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the hasCategory
	 *
	 * @return \TYPO3\Myaudioshop\Domain\Model\Category $hasCategory
	 */
	public function getHasCategory() {
		return $this->hasCategory;
	}

	/**
	 * Sets the hasCategory
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Category $hasCategory
	 * @return void
	 */
	public function setHasCategory(\TYPO3\Myaudioshop\Domain\Model\Category $hasCategory) {
		$this->hasCategory = $hasCategory;
	}

	/**
	 * Returns the price
	 *
	 * @return \float $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param \float $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the newPrice
	 *
	 * @return \float $newPrice
	 */
	public function getNewPrice() {
		return $this->newPrice;
	}

	/**
	 * Sets the newPrice
	 *
	 * @param \float $newPrice
	 * @return void
	 */
	public function setNewPrice($newPrice) {
		$this->newPrice = $newPrice;
	}

	/**
	 * Returns the manual
	 *
	 * @return boolean $manual
	 */
	public function getManual() {
		return $this->manual;
	}

	/**
	 * Sets the manual
	 *
	 * @param boolean $manual
	 * @return void
	 */
	public function setManual($manual) {
		$this->manual = $manual;
	}

	/**
	 * Returns the boolean state of manual
	 *
	 * @return boolean
	 */
	public function isManual() {
		return $this->getManual();
	}

	/**
	 * Returns the remote
	 *
	 * @return boolean $remote
	 */
	public function getRemote() {
		return $this->remote;
	}

	/**
	 * Sets the remote
	 *
	 * @param boolean $remote
	 * @return void
	 */
	public function setRemote($remote) {
		$this->remote = $remote;
	}

	/**
	 * Returns the boolean state of remote
	 *
	 * @return boolean
	 */
	public function isRemote() {
		return $this->getRemote();
	}

	/**
	 * Returns the shipmentType
	 *
	 * @return \integer $shipmentType
	 */
	public function getShipmentType() {
		return $this->shipmentType;
	}

	/**
	 * Sets the shipmentType
	 *
	 * @param \integer $shipmentType
	 * @return void
	 */
	public function setShipmentType($shipmentType) {
		$this->shipmentType = $shipmentType;
	}

	/**
	 * Returns the hasCountry
	 *
	 * @return \TYPO3\Myaudioshop\Domain\Model\Country hasCountry
	 */
	public function getHasCountry() {
		return $this->hasCountry;
	}

	/**
	 * Sets the hasCountry
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Country $hasCountry
	 * @return \TYPO3\Myaudioshop\Domain\Model\Country hasCountry
	 */
	public function setHasCountry(\TYPO3\Myaudioshop\Domain\Model\Country $hasCountry) {
		$this->hasCountry = $hasCountry;
	}

	/**
	 * Returns the images
	 *
	 * @return \string $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param \string $images
	 * @return void
	 */
	public function setImages($images) {
		$this->images = $images;
	}

	/**
	 * Returns the payment
	 *
	 * @return \integer $payment
	 */
	public function getPayment() {
		return $this->payment;
	}

	/**
	 * Sets the payment
	 *
	 * @param \integer $payment
	 * @return void
	 */
	public function setPayment($payment) {
		$this->payment = $payment;
	}

	/**
	 * Returns the userCreated
	 *
	 * @return  userCreated
	 */
	public function getUserCreated() {
		return $this->userCreated;
	}

	/**
	 * Sets the userCreated
	 *
	 * @param  $userCreated
	 * @return  userCreated
	 */
	public function setUserCreated($userCreated) {
		$this->userCreated = $userCreated;
	}

}
?>