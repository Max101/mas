<?php
namespace MORLIC\Myaudioshop\Controller;

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
class QuestionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$questions = $this->questionRepository->findAll();
		$this->view->assign('questions', $questions);
	}

	/**
	 * action show
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $question
	 * @return void
	 */
	public function showAction(\MORLIC\Myaudioshop\Domain\Model\Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * action new
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $newQuestion
	 * @dontvalidate $newQuestion
	 * @return void
	 */
	public function newAction(\MORLIC\Myaudioshop\Domain\Model\Question $newQuestion = NULL) {
		$this->view->assign('newQuestion', $newQuestion);
	}

	/**
	 * action create
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $newQuestion
	 * @return void
	 */
	public function createAction(\MORLIC\Myaudioshop\Domain\Model\Question $newQuestion) {
		$this->questionRepository->add($newQuestion);
		$this->flashMessageContainer->add('Your new Question was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $question
	 * @return void
	 */
	public function editAction(\MORLIC\Myaudioshop\Domain\Model\Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * action update
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $question
	 * @return void
	 */
	public function updateAction(\MORLIC\Myaudioshop\Domain\Model\Question $question) {
		$this->questionRepository->update($question);
		$this->flashMessageContainer->add('Your Question was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Question $question
	 * @return void
	 */
	public function deleteAction(\MORLIC\Myaudioshop\Domain\Model\Question $question) {
		$this->questionRepository->remove($question);
		$this->flashMessageContainer->add('Your Question was removed.');
		$this->redirect('list');
	}

}
?>