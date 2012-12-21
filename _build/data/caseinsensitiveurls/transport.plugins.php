<?php
/**
 * plugins transport file for CaseInsensitiveURLs extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 * Created on 12-20-2012
 *
 * @package caseinsensitiveurls
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $plugins */


$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1]->fromArray(array(
    'id' => '1',
    'property_preprocess' => '',
    'name' => 'CaseInsensitiveUrls',
    'description' => 'Converts URLs to lowercase when page is not found',
    'properties' => array(),
    'disabled' => '',
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/caseinsensitiveurls.plugin.php'));

return $plugins;
