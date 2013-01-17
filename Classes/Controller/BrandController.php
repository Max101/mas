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
class BrandController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$brands = $this->brandRepository->findAll();
		$this->view->assign('brands', $brands);
	}

	/**
	 * action show
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $brand
	 * @return void
	 */
	public function showAction(\TYPO3\Myaudioshop\Domain\Model\Brand $brand) {
		$this->view->assign('brand', $brand);
	}

	/**
	 * action new
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $newBrand
	 * @dontvalidate $newBrand
	 * @return void
	 */
	public function newAction(\TYPO3\Myaudioshop\Domain\Model\Brand $newBrand = NULL) {
		$this->view->assign('newBrand', $newBrand);
	}

	/**
	 * action create
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $newBrand
	 * @return void
	 */
	public function createAction(\TYPO3\Myaudioshop\Domain\Model\Brand $newBrand) {
		$this->brandRepository->add($newBrand);
		$this->flashMessageContainer->add('Your new Brand was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $brand
	 * @return void
	 */
	public function editAction(\TYPO3\Myaudioshop\Domain\Model\Brand $brand) {
		$this->view->assign('brand', $brand);
	}

	/**
	 * action update
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $brand
	 * @return void
	 */
	public function updateAction(\TYPO3\Myaudioshop\Domain\Model\Brand $brand) {
		$this->brandRepository->update($brand);
		$this->flashMessageContainer->add('Your Brand was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \TYPO3\Myaudioshop\Domain\Model\Brand $brand
	 * @return void
	 */
	public function deleteAction(\TYPO3\Myaudioshop\Domain\Model\Brand $brand) {
		$this->brandRepository->remove($brand);
		$this->flashMessageContainer->add('Your Brand was removed.');
		$this->redirect('list');
	}

}
?>