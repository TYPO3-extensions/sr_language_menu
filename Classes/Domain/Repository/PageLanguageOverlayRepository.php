<?php
namespace SJBR\SrLanguageMenu\Domain\Repository;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013-2017 Stanislas Rolland <typo3@sjbr.ca>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use SJBR\SrLanguageMenu\Domain\Model\Page;
use TYPO3\CMS\Extbase\Object\ObjectManagerInterface;
use TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * The page language overlay repository
 */
class PageLanguageOverlayRepository extends Repository
{
	/**
	 * Initialize the repository for unrestricted access to page language overlays
	 *
	 * @param ObjectManagerInterface $objectManager
	 * @return void
	 */
	public function __construct(ObjectManagerInterface $objectManager)
	{
		parent::__construct($objectManager);
		$querySettings = $this->objectManager->get(Typo3QuerySettings::class);
		$querySettings->setRespectStoragePage(false);
		$querySettings->setRespectSysLanguage(false);
		$this->setDefaultQuerySettings($querySettings);
	}

	/**
	 *
	 *
	 * @param Page $page
	 * @return QueryResultInterface|array
	 */
	public function findByPage(Page $page)
	{
		$query = $this->createQuery();
		$query->matching(
			$query->equals('pid', $page->getUid())
		);
		return $query->execute();
	}
}