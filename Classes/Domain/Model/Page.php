<?php
namespace SJBR\SrLanguageMenu\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013-2018 Stanislas Rolland <typo3(arobas)sjbr.ca>
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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * The Page model
 */
class Page extends AbstractEntity
{
	/**
	 * Parent
	 *
	 * @var integer
	 */
	protected $parent;	

	/**
	 * Language
	 *
	 * @var \SJBR\SrLanguageMenu\Domain\Model\SystemLanguage
	 */
	protected $language;
	
	/**
	 * l18n_cfg ("Hide default translation of page" and "Hide page if no translation for current language exists")
	 *
	 * @var integer
	 */
	protected $l18nCfg = 0;

	/**
	 * Returns the parent
	 *
	 * @return integer
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * Sets the language
	 *
	 * @param \SJBR\SrLanguageMenu\Domain\Model\SystemLanguage $language
	 * @return void
	 */
	public function setLanguage(\SJBR\SrLanguageMenu\Domain\Model\SystemLanguage $language)
	{
		$this->language = $language;
	}

	/**
	 * Returns the language
	 *
	 * @return \SJBR\SrLanguageMenu\Domain\Model\SystemLanguage
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * Returns the l18nCfg value
	 *
	 * @return integer
	 */
	public function getL18nCfg()
	{
		return $this->l18nCfg;
	}
}