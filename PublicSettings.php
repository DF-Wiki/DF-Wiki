<?php
#####################################################################################
# This file stores public configuration settings for the DF wiki.
# Note that changes made in this file are not automatically deployed to the wiki.
#####################################################################################

/****** Namespaces ******/

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
$wgNamespaceAliases['MDF'] = 1000;
$wgNamespaceAliases['MDF_TALK'] = 1001;

$wgNamespaceAliases['MW'] = NS_MEDIAWIKI;
$wgNamespaceAliases['MW_TALK'] = NS_MEDIAWIKI_TALK;

$wgNamespaceAliases['Main'] = NS_MAIN;

$wgNamespaceAliases['U'] = 2;
$wgNamespaceAliases['F'] = 6;
$wgNamespaceAliases['T'] = 10;
$wgNamespaceAliases['H'] = 12;
$wgNamespaceAliases['C'] = $wgNamespaceAliases['CAT'] = 14;

// Generate v{1..5}, Rel{1..5}, r{1..5} namespaces for convenience
$DFReleases = array(
    1 => 110,
    2 => 106,
    3 => 112,
    4 => 114,
    5 => 116,
);
$DFReleaseAliases = array('Rel', 'V', 'R');

foreach ($DFReleases as $id => $ns) {
    foreach ($DFReleaseAliases as $a) {
        $wgNamespaceAliases[$a . $id] = $ns;
        $wgNamespaceAliases[$a . $id . '_talk'] = $ns + 1;
    }
}

// i.e. namespaces that show up in Special:(Random|Statistics) and NUMBEROFARTICLES
// https://www.mediawiki.org/wiki/Manual:$wgContentNamespaces
$wgContentNamespaces = array(0, 102, 104, 106, 110, 112, 114, 116, 1000);
// Makes subpage breadcrumbs show up everywhere
$wgNamespacesWithSubpages = array_fill(0, 2000, true);
$wgNamespacesToBeSearchedDefault = array(
    0 => true,
    102 => true,
    104 => true,
    106 => true,
    110 => true,
    112 => true,
    114 => true,
    116 => true,
);

/***** Parser settings ******/

// may or may not actually work
$wgMaxRedirects = 10;

$wgMaxTemplateDepth = 500;
$wgMaxPPExpandDepth = 400;

// allow magnet URLs
// See https://www.mediawiki.org/wiki/Manual:$wgUrlProtocols
$wgUrlProtocols[] = 'magnet:';

/****** Simple Hooks *******/

// Prevent /raw pages from showing up with Special:Random
function randtitle(&$randstr, &$isRedir, &$namespaces, &$extra, &$title){
  $extra[]='page_title NOT LIKE \'%/raw\'';
  return true;
}
$wgHooks['SpecialRandomGetRandomTitle'][] = 'randtitle';

// called by a MW core patch
// example: links within Help and Project namespaces stay within those namespaces
// unless told otherwise; anything else goes to NS_MAIN
$wgNamespaceLinkDest = array(
    106 => 106,     // 40d
    107 => 106,
    110 => 110,     // 23a
    111 => 110,
    112 => 112,     // v0.31
    113 => 112,
    114 => 114,     // v0.34
    115 => 114,
    116 => 116,     // DF2014
    117 => 116,
    1000 => 1000,   // Masterwork
    1001 => 1000,
);
function getNamespaceLinkDest ($ns)
{
    global $wgNamespaceLinkDest;
    if ( isset( $wgNamespaceLinkDest[$ns] ) ) {
        return $wgNamespaceLinkDest[$ns];
    }
    else {
        return NS_MAIN;
    }
}



/*******  Extension settings ******/

$wgAutoRedirectNamespaces = array(
    // mainspace: check all DF versions, in order
    '' => array('DF2014', 'v0.34', 'v0.31', '40d', '23a'),
);
$wgAutoRedirectChecks = array(
    'mb_strtolower',
);


$wgAutoWelcomeUserText = '{{subst:welcome user}}';
$wgAutoWelcomeUserAuthor = 'LethosorBot';

// let DFRawFunctions actually read raws from disk (this is important!)
$wgDFRawEnableDisk = true;

