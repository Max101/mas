<?php
namespace TYPO3\Myaudioshop\Controller;

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
class FeedbackController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * feedbackRepository
	 *
	 * @var \TYPO3\Myaudioshop\Domain\Repository\FeedbackRepository
	 * @inject
	 */
	protected $feedbackRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$feedbacks = $this->feedbackRepository->findAll();
		$this->view->assign('feedbacks', $feedbacks);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $feedback
	 * @return void
	 */
	public function showAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $feedback) {
		$this->view->assign('feedback', $feedback);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $newFeedback
	 * @dontvalidate $newFeedback
	 * @return void
	 */
	public function newAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $newFeedback = NULL) {
		if ($newFeedback == NULL) { // workaround for fluid bug ##5636
			$newFeedback = t3lib_div::makeInstance('');
		}
		$this->view->assign('newFeedback', $newFeedback);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $newFeedback
	 * @return void
	 */
	public function createAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $newFeedback) {
		$this->feedbackRepository->add($newFeedback);
		$this->flashMessageContainer->add('Your new Feedback was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $feedback
	 * @return void
	 */
	public function editAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $feedback) {
		$this->view->assign('feedback', $feedback);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $feedback
	 * @return void
	 */
	public function updateAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $feedback) {
		$this->feedbackRepository->update($feedback);
		$this->flashMessageContainer->add('Your Feedback was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Feedback $feedback
	 * @return void
	 */
	public function deleteAction(\TYPO3\Myaudioshop\Domain\Model\Feedback $feedback) {
		$this->feedbackRepository->remove($feedback);
		$this->flashMessageContainer->add('Your Feedback was removed.');
		$this->redirect('list');
	}

}
?>