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
class Feedback extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * If feedback is for seller than true, else false
	 *
	 * @var boolean
	 */
	protected $type = FALSE;

	/**
	 * rating
	 *
	 * @var \integer
	 */
	protected $rating;

	/**
	 * message
	 *
	 * @var \string
	 */
	protected $message;

	/**
	 * Who gives the ad
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Model\User
	 */
	protected $giver;

	/**
	 * Who receives the ad
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Model\User
	 */
	protected $receiver;

	/**
	 * The ad the feedback is for
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Model\MasAd
	 */
	protected $masAd;

	/**
	 * Returns the type
	 *
	 * @return boolean $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param boolean $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the boolean state of type
	 *
	 * @return boolean
	 */
	public function isType() {
		return $this->getType();
	}

	/**
	 * Returns the rating
	 *
	 * @return \integer $rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Sets the rating
	 *
	 * @param \integer $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

	/**
	 * Returns the message
	 *
	 * @return \string $message
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Sets the message
	 *
	 * @param \string $message
	 * @return void
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

	/**
	 * Returns the giver
	 *
	 * @return \TYPO3\Myaudioshop\Domain\Model\User $giver
	 */
	public function getGiver() {
		return $this->giver;
	}

	/**
	 * Sets the giver
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\User $giver
	 * @return void
	 */
	public function setGiver(\TYPO3\Myaudioshop\Domain\Model\User $giver) {
		$this->giver = $giver;
	}

	/**
	 * Returns the receiver
	 *
	 * @return \TYPO3\Myaudioshop\Domain\Model\User $receiver
	 */
	public function getReceiver() {
		return $this->receiver;
	}

	/**
	 * Sets the receiver
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\User $receiver
	 * @return void
	 */
	public function setReceiver(\TYPO3\Myaudioshop\Domain\Model\User $receiver) {
		$this->receiver = $receiver;
	}

	/**
	 * Returns the masAd
	 *
	 * @return \TYPO3\Myaudioshop\Domain\Model\MasAd masAd
	 */
	public function getMasAd() {
		return $this->masAd;
	}

	/**
	 * Sets the masAd
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\MasAd $masAd
	 * @return \TYPO3\Myaudioshop\Domain\Model\MasAd masAd
	 */
	public function setMasAd(\TYPO3\Myaudioshop\Domain\Model\MasAd $masAd) {
		$this->masAd = $masAd;
	}

}
?>