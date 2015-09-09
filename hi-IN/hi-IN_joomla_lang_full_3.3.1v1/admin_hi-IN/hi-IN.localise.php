<?php
/**
 * @package    Joomla.Language
 *
 * @copyright  Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * hi-IN localise class
 *
 * @package  Joomla.Language
 */
abstract class Hi_INLocalise
{
	/**
	 * Returns the potential suffixes for a specific number of items
	 *
	 * @param   integer  $count  The number of items.
	 *
	 * @return  array  An array of potential suffixes.
	 */
	public static function getPluralSuffixes($count)
	{
		if ($count == 0)
		{
			return array('0');
		}
		elseif ($count == 1)
		{
			return array('1');
		}
		else
		{
			return array('MORE');
		}
	}
	/**
	 * Returns the ignored search words
	 *
	 * @return  array  An array of ignored search words.
	 */
	public static function getIgnoredSearchWords()
	{
		return array('and', 'in', 'on');
	}
	/**
	 * Returns the lower length limit of search words
	 *
	 * @return  integer  The lower length limit of search words.
	 */
	public static function getLowerLimitSearchWord()
	{
		return 3;
	}
	/**
	 * Returns the upper length limit of search words
	 *
	 * @return  integer  The upper length limit of search words.
	 */
	public static function getUpperLimitSearchWord()
	{
		return 20;
	}
	/**
	 * Returns the number of chars to display when searching
	 *
	 * @return  integer  The number of chars to display when searching.
	 */
	public static function getSearchDisplayedCharactersNumber()
	{
		return 200;
	}
}
