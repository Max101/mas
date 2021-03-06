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
class Message extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Message title
	 *
	 * @var \string
	 */
	protected $title;

	/**
	 * The actual message
	 *
	 * @var \string
	 */
	protected $content;

	/**
	 * sender
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\User
	 */
	protected $sender;

	/**
	 * receiver
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Model\User
	 */
	protected $receiver;

	/**
	 * Returns the title
	 *
	 * @return \string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param \string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the content
	 *
	 * @return \string $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets the content
	 *
	 * @param \string $content
	 * @return void
	 */
	public function setContent($content) {
		$this->content = $content;
	}

	/**
	 * Returns the sender
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\User $sender
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Sets the sender
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $sender
	 * @return void
	 */
	public function setSender(\MORLIC\Myaudioshop\Domain\Model\User $sender) {
		$this->sender = $sender;
	}

	/**
	 * Returns the receiver
	 *
	 * @return \MORLIC\Myaudioshop\Domain\Model\User $receiver
	 */
	public function getReceiver() {
		return $this->receiver;
	}

	/**
	 * Sets the receiver
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\User $receiver
	 * @return void
	 */
	public function setReceiver(\MORLIC\Myaudioshop\Domain\Model\User $receiver) {
		$this->receiver = $receiver;
	}

}
?>