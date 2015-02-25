<?php
#####################################################################################
# This file stores public configuration settings for the DF wiki.
# Note that changes made in this file are not automatically deployed to the wiki.
#####################################################################################

$wgExtraNamespaces[100] = "Bloodline";
$wgExtraNamespaces[101] = "Bloodline_Talk";
$wgExtraNamespaces[102] = "Utility";
$wgExtraNamespaces[103] = "Utility_Talk";
$wgExtraNamespaces[104] = "Modification";
$wgExtraNamespaces[105] = "Modification_Talk";
$wgExtraNamespaces[106] = "40d";
$wgExtraNamespaces[107] = "40d_Talk";
$wgExtraNamespaces[108] = "Unused";
$wgExtraNamespaces[109] = "Unused_Talk";
$wgExtraNamespaces[110] = "23a";
$wgExtraNamespaces[111] = "23a_Talk";
$wgExtraNamespaces[112] = "v0.31";
$wgExtraNamespaces[113] = "v0.31_Talk";
$wgExtraNamespaces[114] = "v0.34";
$wgExtraNamespaces[115] = "v0.34_Talk";
$wgExtraNamespaces[116] = "DF2014";
$wgExtraNamespaces[117] = "DF2014_Talk";
$wgExtraNamespaces[200] = "Tutorial";
$wgExtraNamespaces[201] = "Tutorial_Talk";
$wgExtraNamespaces[1000] = "Masterwork";
$wgExtraNamespaces[1001] = "Masterwork_Talk";

$wgNamespaceAliases['DF2010'] = 112;
$wgNamespaceAliases['DF2010_Talk'] = 113;

$wgNamespaceAliases['DF2012'] = 114;
$wgNamespaceAliases['DF2012_Talk'] = 115;

$wgNamespaceAliases['DF'] = 4;
$wgNamespaceAliases['DF_TALK'] = 5;

$wgNamespaceAliases['CV'] = 116;
$wgNamespaceAliases['CV_TALK'] = 117;

$wgNamespaceAliases['Mod'] = 104;
$wgNamespaceAliases['Mod_talk'] = 105;
$wgNamespaceAliases['MA'] = 1000;
$wgNamespaceAliases['MA_TALK'] = 1001;

$wgNamespaceAliases['MW'] = NS_MEDIAWIKI;
$wgNamespaceAliases['MW_TALK'] = NS_MEDIAWIKI_TALK;

$wgNamespaceAliases['Main'] = NS_MAIN;

$wgContentNamespaces = array(0, 102, 104, 106, 110, 112, 114, 116, 1000);
$wgNamespacesWithSubpages = array_fill(0, 2000, true);
$wgNamespacesToBeSearchedDefault = array( 0 => true, 102 => true, 104 => true, 106 => true, 110 => true, 112 => true, 114 => true, 116 => true);
