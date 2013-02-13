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
	 * Type of payment accepted
	 *
	 * @var \integer
	 */
	protected $views;

	/**
	 * weight
	 *
	 * @var \float
	 */
	protected $weight;

	/**
	 * The category the ad belongs to
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\Category
	 */
	protected $category;

	/**
	 * Country of the ad
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\Country
	 */
	protected $location;

	/**
	 * User who created the ad
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\User
	 */
	protected $user;

	/**
	 * Product brand
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\Brand
	 */
	protected $brand;

	/**
	 * Feedback
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Feedback>
	 */
	protected $feedback;

	/**
	 * Payment types supported
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Payment>
	 */
	protected $payment;

	/**
	 * Shipment types supported
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Shipment>
	 */
	protected $shipment;

	/**
	 * Status of the product ( Available, Sold, Selling, ... )
	 *
	 * @var \integer
	 * @validate NotEmpty
	 */
	protected $status;

	/**
	 * Packaging of the product
	 *
	 * @var \integer
	 */
	protected $packaging;

	/**
	 * Build date or year
	 *
	 * @var \DateTime
	 */
	protected $buildDate;

	/**
	 * Quantity of product if more than one available
	 *
	 * @var \integer
	 */
	protected $quantity;

	/**
	 * Color of the product
	 *
	 * @var \string
	 */
	protected $color;

	/**
	 * Is this an editor pick product?
	 *
	 * @var boolean
	 */
	protected $editorPick = FALSE;

	/**
	 * Product serial number
	 *
	 * @var \string
	 */
	protected $serial;

	/**
	 * Who pays for shipping costs?
	 *
	 * @var \integer
	 */
	protected $shipmentPays;

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
	 * Returns the views
	 *
	 * @return \integer $views
	 */
	public function getViews() {
		return $this->views;
	}

	/**
	 * Sets the views
	 *
	 * @param \integer $views
	 * @return void
	 */
	public function setViews($views) {
		$this->views = $views;
	}

	/**
	 * Returns the weight
	 *
	 * @return \float $weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Sets the weight
	 *
	 * @param \float $weight
	 * @return void
	 */
	public function setWeight($weight) {
		$this->weight = $weight;
	}

	/**
	 * Returns the category
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Category $category
	 * @return void
	 */
	public function setCategory(\MORLIC\Myaudioshop\Domain\Model\Category $category) {
		$this->category = $category;
	}

	/**
	 * Returns the location
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\Country $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Country $location
	 * @return void
	 */
	public function setLocation(\MORLIC\Myaudioshop\Domain\Model\Country $location) {
		$this->location = $location;
	}

	/**
	 * Returns the user
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\User $user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * Sets the user
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $user
	 * @return void
	 */
	public function setUser(\MORLIC\Myaudioshop\Domain\Model\User $user) {
		$this->user = $user;
	}

	/**
	 * Returns the brand
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\Brand $brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Sets the brand
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Brand $brand
	 * @return void
	 */
	public function setBrand(\MORLIC\Myaudioshop\Domain\Model\Brand $brand) {
		$this->brand = $brand;
	}

	/**
	 * __construct
	 *
	 * @return MasAd
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
		$this->feedback = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->payment = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->shipment = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a Feedback
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Feedback $feedback
	 * @return void
	 */
	public function addFeedback(\MORLIC\Myaudioshop\Domain\Model\Feedback $feedback) {
		$this->feedback->attach($feedback);
	}

	/**
	 * Removes a Feedback
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Feedback $feedbackToRemove The Feedback to be removed
	 * @return void
	 */
	public function removeFeedback(\MORLIC\Myaudioshop\Domain\Model\Feedback $feedbackToRemove) {
		$this->feedback->detach($feedbackToRemove);
	}

	/**
	 * Returns the feedback
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Feedback> $feedback
	 */
	public function getFeedback() {
		return $this->feedback;
	}

	/**
	 * Sets the feedback
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Feedback> $feedback
	 * @return void
	 */
	public function setFeedback(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $feedback) {
		$this->feedback = $feedback;
	}

	/**
	 * Adds a Payment
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $payment
	 * @return void
	 */
	public function addPayment(\MORLIC\Myaudioshop\Domain\Model\Payment $payment) {
		$this->payment->attach($payment);
	}

	/**
	 * Removes a Payment
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $paymentToRemove The Payment to be removed
	 * @return void
	 */
	public function removePayment(\MORLIC\Myaudioshop\Domain\Model\Payment $paymentToRemove) {
		$this->payment->detach($paymentToRemove);
	}

	/**
	 * Returns the payment
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Payment> $payment
	 */
	public function getPayment() {
		return $this->payment;
	}

	/**
	 * Sets the payment
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Payment> $payment
	 * @return void
	 */
	public function setPayment(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $payment) {
		$this->payment = $payment;
	}

	/**
	 * Adds a Shipment
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Shipment $shipment
	 * @return void
	 */
	public function addShipment(\MORLIC\Myaudioshop\Domain\Model\Shipment $shipment) {
		$this->shipment->attach($shipment);
	}

	/**
	 * Removes a Shipment
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Shipment $shipmentToRemove The Shipment to be removed
	 * @return void
	 */
	public function removeShipment(\MORLIC\Myaudioshop\Domain\Model\Shipment $shipmentToRemove) {
		$this->shipment->detach($shipmentToRemove);
	}

	/**
	 * Returns the shipment
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Shipment> $shipment
	 */
	public function getShipment() {
		return $this->shipment;
	}

	/**
	 * Sets the shipment
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MORLIC\Myaudioshop\Domain\Model\Shipment> $shipment
	 * @return void
	 */
	public function setShipment(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $shipment) {
		$this->shipment = $shipment;
	}

	/**
	 * Returns the status
	 *
	 * @return \integer $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Sets the status
	 *
	 * @param \integer $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * Returns the packaging
	 *
	 * @return \integer $packaging
	 */
	public function getPackaging() {
		return $this->packaging;
	}

	/**
	 * Sets the packaging
	 *
	 * @param \integer $packaging
	 * @return void
	 */
	public function setPackaging($packaging) {
		$this->packaging = $packaging;
	}

	/**
	 * Returns the buildDate
	 *
	 * @return \DateTime $buildDate
	 */
	public function getBuildDate() {
		return $this->buildDate;
	}

	/**
	 * Sets the buildDate
	 *
	 * @param \DateTime $buildDate
	 * @return void
	 */
	public function setBuildDate($buildDate) {
		$this->buildDate = $buildDate;
	}

	/**
	 * Returns the quantity
	 *
	 * @return \integer $quantity
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Sets the quantity
	 *
	 * @param \integer $quantity
	 * @return void
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	/**
	 * Returns the color
	 *
	 * @return \string $color
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Sets the color
	 *
	 * @param \string $color
	 * @return void
	 */
	public function setColor($color) {
		$this->color = $color;
	}

	/**
	 * Returns the editorPick
	 *
	 * @return boolean $editorPick
	 */
	public function getEditorPick() {
		return $this->editorPick;
	}

	/**
	 * Sets the editorPick
	 *
	 * @param boolean $editorPick
	 * @return void
	 */
	public function setEditorPick($editorPick) {
		$this->editorPick = $editorPick;
	}

	/**
	 * Returns the boolean state of editorPick
	 *
	 * @return boolean
	 */
	public function isEditorPick() {
		return $this->getEditorPick();
	}

	/**
	 * Returns the serial
	 *
	 * @return \string $serial
	 */
	public function getSerial() {
		return $this->serial;
	}

	/**
	 * Sets the serial
	 *
	 * @param \string $serial
	 * @return void
	 */
	public function setSerial($serial) {
		$this->serial = $serial;
	}

	/**
	 * Returns the shipmentPays
	 *
	 * @return \integer $shipmentPays
	 */
	public function getShipmentPays() {
		return $this->shipmentPays;
	}

	/**
	 * Sets the shipmentPays
	 *
	 * @param \integer $shipmentPays
	 * @return void
	 */
	public function setShipmentPays($shipmentPays) {
		$this->shipmentPays = $shipmentPays;
	}

}
?>