<?php

/**
 * MvcCore
 *
 * This source file is subject to the BSD 3 License
 * For the full copyright and license information, please view
 * the LICENSE.md file that are distributed with this source code.
 *
 * @copyright	Copyright (c) 2016 Tom Flídr (https://github.com/mvccore/mvccore)
 * @license		https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md
 */

namespace MvcCore\Ext\Routers;

/**
 * Responsibility - recognize localizationn from URL or from http header or session and set 
 *					up request object, complete automatically rewritten URL with remembered 
 *					localization version. Redirect to proper localization by configuration.
 *					Than route request like parent class does.
 */
class		Localization 
extends		\MvcCore\Router
implements	\MvcCore\Ext\Routers\ILocalization,
			\MvcCore\Ext\Routers\IExtended
{
	use \MvcCore\Ext\Routers\Extended;

	use \MvcCore\Ext\Routers\Localization\Preparing;
	use \MvcCore\Ext\Routers\Localization\PreRouting;
	use \MvcCore\Ext\Routers\Localization\PropsGettersSetters;
	use \MvcCore\Ext\Routers\Localization\RedirectSections;
	use \MvcCore\Ext\Routers\Localization\RewriteRouting;
	use \MvcCore\Ext\Routers\Localization\RewriteRoutingChecks;
	use \MvcCore\Ext\Routers\Localization\Routing;
	use \MvcCore\Ext\Routers\Localization\UrlByRoute;
	use \MvcCore\Ext\Routers\Localization\UrlByRouteSections;
	use \MvcCore\Ext\Routers\Localization\UrlByRouteSectionsLocalization;
	
	/**
	 * MvcCore Extension - Router Lang - version:
	 * Comparison by PHP function version_compare();
	 * @see http://php.net/manual/en/function.version-compare.php
	 */
	const VERSION = '5.0.0-alpha';
}
