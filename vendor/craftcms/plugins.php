<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '5.0.0',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'rynpsc/craft-phone-number' => 
  array (
    'class' => 'rynpsc\\phonenumber\\PhoneNumber',
    'basePath' => $vendorDir . '/rynpsc/craft-phone-number/src',
    'handle' => 'phone-number',
    'aliases' => 
    array (
      '@rynpsc/phonenumber' => $vendorDir . '/rynpsc/craft-phone-number/src',
    ),
    'name' => 'Phone Number',
    'version' => '3.0.0',
    'description' => 'International phone number field.',
    'developer' => 'rynpsc',
    'developerUrl' => 'https://github.com/rynpsc',
    'documentationUrl' => 'https://github.com/rynpsc/craft-phone-number',
    'changelogUrl' => 'https://raw.githubusercontent.com/rynpsc/craft-phone-number/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/rynpsc/craft-phone-number/archive/master.zip',
  ),
  'craftpulse/craft-colour-swatches' => 
  array (
    'class' => 'percipiolondon\\colourswatches\\ColourSwatches',
    'basePath' => $vendorDir . '/craftpulse/craft-colour-swatches/src',
    'handle' => 'colour-swatches',
    'aliases' => 
    array (
      '@percipiolondon/colourswatches' => $vendorDir . '/craftpulse/craft-colour-swatches/src',
    ),
    'name' => 'Colour Swatches',
    'version' => '5.1.0',
    'description' => 'Adding custom selectable colour palettes, gradients, classes and more to your field types.',
    'developer' => 'craftpulse',
    'developerUrl' => 'https://github.com/craftpulse',
    'developerEmail' => 'support@percipio.london',
    'documentationUrl' => 'https://github.com/craftpulse/craft-colour-swatches/blob/v4/README.md',
    'changelogUrl' => 'https://github.com/craftpulse/craft-colour-swatches/blob/v4/CHANGELOG.md',
  ),
  'studioespresso/craft-splashingimages' => 
  array (
    'class' => 'studioespresso\\splashingimages\\SplashingImages',
    'basePath' => $vendorDir . '/studioespresso/craft-splashingimages/src',
    'handle' => 'splashing-images',
    'aliases' => 
    array (
      '@studioespresso/splashingimages' => $vendorDir . '/studioespresso/craft-splashingimages/src',
    ),
    'name' => 'Splashing Images',
    'version' => '5.0.4',
    'schemaVersion' => '1.2.0',
    'description' => 'unsplash.com integration for Craft CMS',
    'developer' => 'Studio Espresso',
    'developerUrl' => 'https://www.studioespresso.co',
    'documentationUrl' => 'https://github.com/studioespresso/craft3-unsplash/blob/develop/README.md',
    'changelogUrl' => 'https://github.com/studioespresso/craft3-unsplash/blob/develop/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
  'craftcms/webhooks' => 
  array (
    'class' => 'craft\\webhooks\\Plugin',
    'basePath' => $vendorDir . '/craftcms/webhooks/src',
    'handle' => 'webhooks',
    'aliases' => 
    array (
      '@craft/webhooks' => $vendorDir . '/craftcms/webhooks/src',
    ),
    'name' => 'Webhooks',
    'version' => '3.1.1',
    'description' => 'Post webhooks when events are triggered in Craft CMS.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/webhooks/blob/master/README.md',
  ),
  'digitale-jungle/craft-easy-gallery' => 
  array (
    'class' => 'digitalejungle\\crafteasygallery\\Gallery',
    'basePath' => $vendorDir . '/digitale-jungle/craft-easy-gallery/src',
    'handle' => 'easy-gallery',
    'aliases' => 
    array (
      '@digitalejungle/crafteasygallery' => $vendorDir . '/digitale-jungle/craft-easy-gallery/src',
    ),
    'name' => 'Easy Gallery',
    'version' => 'v1.2.4',
    'description' => 'This plugin provides a new field type and extra functionality to easily create galleries. Create beautiful galleries olders',
    'developer' => 'Digitale Jungle',
    'developerEmail' => 'info@digitalejungle.be',
    'documentationUrl' => 'https://github.com/DigitaleJungle/easy-gallery#readme',
  ),
  'putyourlightson/craft-sprig' => 
  array (
    'class' => 'putyourlightson\\sprig\\plugin\\Sprig',
    'basePath' => $vendorDir . '/putyourlightson/craft-sprig/src',
    'handle' => 'sprig',
    'aliases' => 
    array (
      '@putyourlightson/sprig/plugin' => $vendorDir . '/putyourlightson/craft-sprig/src',
    ),
    'name' => 'Sprig',
    'version' => '3.7.1',
    'description' => 'A reactive Twig component framework for Craft.',
    'developer' => 'PutYourLightsOn',
    'developerUrl' => 'https://putyourlightson.com/',
    'documentationUrl' => 'https://putyourlightson.com/plugins/sprig',
    'changelogUrl' => 'https://raw.githubusercontent.com/putyourlightson/craft-sprig/develop/CHANGELOG.md',
  ),
  'spicyweb/craft-odds-and-ends' => 
  array (
    'class' => 'spicyweb\\oddsandends\\Tools',
    'basePath' => $vendorDir . '/spicyweb/craft-odds-and-ends/src',
    'handle' => 'tools',
    'aliases' => 
    array (
      '@spicyweb/oddsandends' => $vendorDir . '/spicyweb/craft-odds-and-ends/src',
    ),
    'name' => 'Odds & Ends',
    'version' => '5.1.0',
    'schemaVersion' => '4.3.1',
    'description' => 'A collection of useful tools for Craft CMS websites',
    'developer' => 'Spicy Web',
    'developerUrl' => 'https://spicyweb.com.au',
    'documentationUrl' => 'https://github.com/spicywebau/craft-odds-and-ends/blob/5.1.0/README.md',
    'changelogUrl' => 'https://github.com/spicywebau/craft-odds-and-ends/blob/5.x/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'samuelreichor/craft-quick-edit' => 
  array (
    'class' => 'samuelreichor\\quickedit\\QuickEdit',
    'basePath' => $vendorDir . '/samuelreichor/craft-quick-edit/src',
    'handle' => 'quick-edit',
    'aliases' => 
    array (
      '@samuelreichor/quickedit' => $vendorDir . '/samuelreichor/craft-quick-edit/src',
    ),
    'name' => 'Quick Edit',
    'version' => '5.3.0',
    'description' => 'A plugin that adds a cp edit url to the frontend.',
    'developer' => 'Samuel Reichör',
    'developerUrl' => 'https://samuelreichor.at/libraries',
    'developerEmail' => 'samuelreichor@gmail.com',
    'documentationUrl' => 'https://samuelreichor.at/libraries/craft-quick-edit',
  ),
  'thomasvantuycom/craft-cloudinary' => 
  array (
    'class' => 'thomasvantuycom\\craftcloudinary\\Plugin',
    'basePath' => $vendorDir . '/thomasvantuycom/craft-cloudinary/src',
    'handle' => 'cloudinary',
    'aliases' => 
    array (
      '@thomasvantuycom/craftcloudinary' => $vendorDir . '/thomasvantuycom/craft-cloudinary/src',
    ),
    'name' => 'Cloudinary',
    'version' => '2.2.3',
    'description' => 'Cloudinary integration for Craft CMS.',
    'developer' => 'Thomas Vantuycom',
    'developerEmail' => 'thomasvantuycom@protonmail.com',
    'documentationUrl' => 'https://github.com/thomasvantuycom/craft-cloudinary',
  ),
  'spicyweb/craft-embedded-assets' => 
  array (
    'class' => 'spicyweb\\embeddedassets\\Plugin',
    'basePath' => $vendorDir . '/spicyweb/craft-embedded-assets/src',
    'handle' => 'embeddedassets',
    'aliases' => 
    array (
      '@spicyweb/embeddedassets' => $vendorDir . '/spicyweb/craft-embedded-assets/src',
    ),
    'name' => 'Embedded Assets',
    'version' => '5.4.9',
    'schemaVersion' => '1.0.0',
    'description' => 'Manage YouTube videos, Instagram photos and more as first class assets',
    'developer' => 'Spicy Web',
    'developerUrl' => 'https://spicyweb.com.au',
    'documentationUrl' => 'https://github.com/spicywebau/craft-embedded-assets/blob/5.4.9/README.md',
    'changelogUrl' => 'https://github.com/spicywebau/craft-embedded-assets/blob/5.x/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/spicywebau/craft-embedded-assets/archive/5.4.9.zip',
  ),
  'iwf/craft-control-panel-element-counter' => 
  array (
    'class' => 'cpelementcounter\\CpElementCounter',
    'basePath' => $vendorDir . '/iwf/craft-control-panel-element-counter/src',
    'handle' => 'control-panel-element-counter',
    'aliases' => 
    array (
      '@cpelementcounter' => $vendorDir . '/iwf/craft-control-panel-element-counter/src',
    ),
    'name' => 'Control Panel Element Counter',
    'version' => '5.1.1',
    'description' => 'Control Panel Element Counter',
    'developer' => 'IWF',
    'developerUrl' => 'https://www.iwf.ch/web-solutions',
    'developerEmail' => 's.friedrich@iwf.ch',
    'documentationUrl' => 'https://github.com/iwf-web/craft-cp-element-counter',
  ),
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '5.9.0',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor/blob/5.x/README.md',
  ),
  'webdna/qrcode' => 
  array (
    'class' => 'webdna\\qrcode\\QRCode',
    'basePath' => $vendorDir . '/webdna/qrcode/src',
    'handle' => 'qrcode',
    'aliases' => 
    array (
      '@webdna/qrcode' => $vendorDir . '/webdna/qrcode/src',
    ),
    'name' => 'QRCode',
    'version' => '3.0.3',
    'description' => 'Generate a QR code',
    'developer' => 'webdna',
    'developerUrl' => 'https://webdna.co.uk',
    'documentationUrl' => 'https://github.com/webdna/craft-qrcode/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/webdna/craft-qrcode/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'verbb/cp-nav' => 
  array (
    'class' => 'verbb\\cpnav\\CpNav',
    'basePath' => $vendorDir . '/verbb/cp-nav/src',
    'handle' => 'cp-nav',
    'aliases' => 
    array (
      '@verbb/cpnav' => $vendorDir . '/verbb/cp-nav/src',
    ),
    'name' => 'Control Panel Nav',
    'version' => '6.0.5',
    'description' => 'A Craft CMS plugin for managing control panel navigation by user group.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/cp-nav',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/cp-nav/craft-5/CHANGELOG.md',
  ),
  'verbb/expanded-singles' => 
  array (
    'class' => 'verbb\\expandedsingles\\ExpandedSingles',
    'basePath' => $vendorDir . '/verbb/expanded-singles/src',
    'handle' => 'expanded-singles',
    'aliases' => 
    array (
      '@verbb/expandedsingles' => $vendorDir . '/verbb/expanded-singles/src',
    ),
    'name' => 'Expanded Singles',
    'version' => '3.0.11',
    'description' => 'A Craft CMS plugin that lists Single sections individually in the Entries sidebar.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/expanded-singles',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/expanded-singles/craft-5/CHANGELOG.md',
  ),
  'verbb/buttonbox' => 
  array (
    'class' => 'verbb\\buttonbox\\ButtonBox',
    'basePath' => $vendorDir . '/verbb/buttonbox/src',
    'handle' => 'buttonbox',
    'aliases' => 
    array (
      '@verbb/buttonbox' => $vendorDir . '/verbb/buttonbox/src',
    ),
    'name' => 'Button Box',
    'version' => '5.1.0',
    'description' => 'Visual choice, position, width, rating and editor action fields for Craft CMS.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/buttonbox',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/buttonbox/craft-5/CHANGELOG.md',
  ),
  'verbb/formie' => 
  array (
    'class' => 'verbb\\formie\\Formie',
    'basePath' => $vendorDir . '/verbb/formie/src',
    'handle' => 'formie',
    'aliases' => 
    array (
      '@verbb/formie' => $vendorDir . '/verbb/formie/src',
    ),
    'name' => 'Formie',
    'version' => '4.0.10',
    'description' => 'The most user-friendly forms plugin for Craft.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/formie',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/formie/craft-5/CHANGELOG.md',
  ),
  'justinholtweb/craft-free-nav' => 
  array (
    'class' => 'justinholt\\freenav\\FreeNav',
    'basePath' => $vendorDir . '/justinholtweb/craft-free-nav/src',
    'handle' => 'free-nav',
    'aliases' => 
    array (
      '@justinholt/freenav' => $vendorDir . '/justinholtweb/craft-free-nav/src',
    ),
    'name' => 'FreeNav',
    'version' => '5.2.1',
    'description' => 'A free, full-featured navigation menu builder for Craft CMS',
    'developer' => 'Justin Holt',
    'developerUrl' => 'https://craft-freenav.com',
    'documentationUrl' => 'https://craft-freenav.com/docs',
  ),
  'johnfmorton/craft-llm-ready' => 
  array (
    'class' => 'johnfmorton\\llmready\\LlmReady',
    'basePath' => $vendorDir . '/johnfmorton/craft-llm-ready/src',
    'handle' => 'llm-ready',
    'aliases' => 
    array (
      '@johnfmorton/llmready' => $vendorDir . '/johnfmorton/craft-llm-ready/src',
    ),
    'name' => 'LLM Ready',
    'version' => '1.15.0',
    'description' => 'Serve Markdown versions of your Craft CMS pages to AI crawlers and LLMs via .md URLs, content negotiation, and user-agent detection.',
    'developer' => 'John F Morton',
    'developerUrl' => 'https://johnfmorton.com/',
    'documentationUrl' => 'https://github.com/johnfmorton/craft-llm-ready',
  ),
);
