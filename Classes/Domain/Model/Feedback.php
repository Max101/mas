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
class Feedback extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * Who gives the ad feedback
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\User
	 */
	protected $giver;

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
	 * @return \MORLIC\Myaudioshop\Domain\Model\User $giver
	 */
	public function getGiver() {
		return $this->giver;
	}

	/**
	 * Sets the giver
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $giver
	 * @return void
	 */
	public function setGiver(\MORLIC\Myaudioshop\Domain\Model\User $giver) {
		$this->giver = $giver;
	}

}
?>