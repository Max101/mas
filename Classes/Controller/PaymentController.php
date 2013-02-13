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
class PaymentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * paymentRepository
	 *
	 * @var \MORLIC\Myaudioshop\Domain\Repository\PaymentRepository
	 * @inject
	 */
	protected $paymentRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$payments = $this->paymentRepository->findAll();
		$this->view->assign('payments', $payments);
	}

	/**
	 * action show
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $payment
	 * @return void
	 */
	public function showAction(\MORLIC\Myaudioshop\Domain\Model\Payment $payment) {
		$this->view->assign('payment', $payment);
	}

	/**
	 * action new
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $newPayment
	 * @dontvalidate $newPayment
	 * @return void
	 */
	public function newAction(\MORLIC\Myaudioshop\Domain\Model\Payment $newPayment = NULL) {
		$this->view->assign('newPayment', $newPayment);
	}

	/**
	 * action create
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $newPayment
	 * @return void
	 */
	public function createAction(\MORLIC\Myaudioshop\Domain\Model\Payment $newPayment) {
		$this->paymentRepository->add($newPayment);
		$this->flashMessageContainer->add('Your new Payment was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $payment
	 * @return void
	 */
	public function editAction(\MORLIC\Myaudioshop\Domain\Model\Payment $payment) {
		$this->view->assign('payment', $payment);
	}

	/**
	 * action update
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $payment
	 * @return void
	 */
	public function updateAction(\MORLIC\Myaudioshop\Domain\Model\Payment $payment) {
		$this->paymentRepository->update($payment);
		$this->flashMessageContainer->add('Your Payment was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \MORLIC\Myaudioshop\Domain\Model\Payment $payment
	 * @return void
	 */
	public function deleteAction(\MORLIC\Myaudioshop\Domain\Model\Payment $payment) {
		$this->paymentRepository->remove($payment);
		$this->flashMessageContainer->add('Your Payment was removed.');
		$this->redirect('list');
	}

}
?>