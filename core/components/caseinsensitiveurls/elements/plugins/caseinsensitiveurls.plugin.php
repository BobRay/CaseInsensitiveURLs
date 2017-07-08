<?php
/**
 * CaseInsensitiveURLs snippet for CaseInsensitiveURLs extra
 *
 * Copyright 2012-2017 Bob Ray <https://bobsguides.com>
 * Created on 12-20-2012
 *
 * CaseInsensitiveURLs is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * CaseInsensitiveURLs is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * CaseInsensitiveURLs; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package caseinsensitiveurls
 */

/**
 * Description
 * -----------
 * Show any TV, anywhere
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package caseinsensitiveurls
 **/

/* @var $modx modX */
$url = $_SERVER['REQUEST_URI'];
$pieces = explode('?', $url);
 
if (preg_match('~[A-Z]~', $pieces[0])) {
    $pieces[0] = strtolower($pieces[0]);
    $url = $pieces[0];
    $url  .= isset($pieces[1])? '?' . $pieces[1] : '';
    $modx->sendRedirect($url);
}
return '';