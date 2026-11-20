<?php
/**
 * color-swatches plugin for Craft CMS 4.x.
 *
 * Let clients choose from a predefined set of colours.
 *
 * @link      https://percipio.london
 *
 * @copyright Copyright (c) 2020 Percipio.London
 */

/**
 * colour-swatches config.php.
 *
 * This file is multi-environment aware, so you can have different settings groups for each environment,
 * just as you do for 'general.php'
 * 
 */

function mixHex(string $baseHex, string $mixHex, float $ratio): string {
    if ($ratio < 0) $ratio = 0;
    if ($ratio > 1) $ratio = 1;

    $isHex = fn($h) => is_string($h) && strlen($h) === 7 && $h[0] === '#' && ctype_xdigit(substr($h,1));
    if (!$isHex($baseHex) || !$isHex($mixHex)) {
        throw new InvalidArgumentException('Colors must be in #RRGGBB format.');
    }

    $r1 = hexdec(substr($baseHex, 1, 2));
    $g1 = hexdec(substr($baseHex, 3, 2));
    $b1 = hexdec(substr($baseHex, 5, 2));

    $r2 = hexdec(substr($mixHex, 1, 2));
    $g2 = hexdec(substr($mixHex, 3, 2));
    $b2 = hexdec(substr($mixHex, 5, 2));

    // Linear blend
    $r = (int) round((1 - $ratio) * $r1 + $ratio * $r2);
    $g = (int) round((1 - $ratio) * $g1 + $ratio * $g2);
    $b = (int) round((1 - $ratio) * $b1 + $ratio * $b2);

    return sprintf('#%02X%02X%02X', $r, $g, $b);
}

return [

    // Custom  palettes, fixed options [label, default (boolean), class (string), colour (array(colour, customOptions)) ]
    'palettes' => [
        'Volle Kleuren' => [  // Default Pallet
            [
                'label' => 'Hoofdkleur',
                'default' => false,
                'class' => 'clr1', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra Kleur',
                'default' => false,
                'class' => 'clr2', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Wit',
                'default' => false,
                'class' => 'white', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_WHITE'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht',
                'default' => false,
                'class' => 'light', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Donker',
                'default' => false,
                'class' => 'dark', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Zwart',
                'default' => false,
                'class' => 'black', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_BLACK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ]
        ],
        'Tinten Hoofdkleuren' => [  // Pallet with shades
            [
                'label' => 'Hoofdkleur',
                'default' => false,
                'class' => 'clr1', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur',
                'default' => false,
                'class' => 'clr2', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht',
                'default' => false,
                'class' => 'light', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Donker',
                'default' => false,
                'class' => 'dark', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Geen',
                'default' => false,
                'class' => 'none', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => "#ffffff00",               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 200',
                'default' => false,
                'class' => 'clr1-200', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#ffffff", 0.60),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 300',
                'default' => false,
                'class' => 'clr1-300', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#ffffff", 0.40),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 400',
                'default' => false,
                'class' => 'clr1-400', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#ffffff", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 600',
                'default' => false,
                'class' => 'clr1-600', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#000000", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 700',
                'default' => false,
                'class' => 'clr1-700', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#000000", 0.40),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofdkleur 800',
                'default' => false,
                'class' => 'clr1-800', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR1'), "#000000", 0.60),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 200',
                'default' => false,
                'class' => 'clr2-200', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#ffffff", 0.60),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 300',
                'default' => false,
                'class' => 'clr2-300', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#ffffff", 0.40),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 400',
                'default' => false,
                'class' => 'clr2-400', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#ffffff", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 600',
                'default' => false,
                'class' => 'clr2-600', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#000000", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 700',
                'default' => false,
                'class' => 'clr2-700', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#000000", 0.40),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra kleur 800',
                'default' => false,
                'class' => 'clr2-800', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR2'), "#000000", 0.60),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Wit',
                'default' => false,
                'class' => 'white', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_WHITE'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht 200',
                'default' => false,
                'class' => 'light-200', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR_LIGHT'), "#ffffff", 0.60),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht 400',
                'default' => false,
                'class' => 'light-400', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR_LIGHT'), "#ffffff", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            
            [
                'label' => 'Donker 600',
                'default' => false,
                'class' => 'dark-600', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR_DARK'), "#000000", 0.20),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Donker 800',
                'default' => false,
                'class' => 'dark-800', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => mixHex(\Craft::parseEnv('$COLOR_DARK'), "#000000", 0.80),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Zwart',
                'default' => false,
                'class' => 'black', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_BLACK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ]
        ],
        'Combo' => [  // Combinations
            [
                'label' => 'Hoofd + Wit',
                'default' => false,
                'class' => 'clr1-white', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_WHITE'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofd + Licht',
                'default' => false,
                'class' => 'clr1-light', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofd + Donker',
                'default' => false,
                'class' => 'clr1-dark', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofd + Zwart',
                'default' => false,
                'class' => 'clr1-black', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_BLACK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],            
            [
                'label' => 'Extra + Wit',
                'default' => false,
                'class' => 'clr2-white', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_WHITE'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra + Licht',
                'default' => false,
                'class' => 'clr2-light', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra + Donker',
                'default' => false,
                'class' => 'clr2-dark', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra + Zwart',
                'default' => false,
                'class' => 'clr2-black', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_BLACK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Hoofd + Transparant',
                'default' => false,
                'class' => 'clr1-trans', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR1'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR1') . \Craft::parseEnv('$TRANS'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Extra + Transparant',
                'default' => false,
                'class' => 'clr2-trans', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR2'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR2') . \Craft::parseEnv('$TRANS'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht + Transparant',
                'default' => false,
                'class' => 'light-trans', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT') . \Craft::parseEnv('$TRANS'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Donker + Transparant',
                'default' => false,
                'class' => 'dark-trans', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK') . \Craft::parseEnv('$TRANS'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Licht + Wit',
                'default' => false,
                'class' => 'light-white', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_LIGHT'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_WHITE'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
            [
                'label' => 'Donker + Zwart',
                'default' => false,
                'class' => 'dark-black', // provide extra classes to go along with this palette
                'color' => [
                    [
                        'color' => \Craft::parseEnv('$COLOR_DARK'),               // the colour shown in the fieldtype (required)
                    ],
                    [
                        'color' => \Craft::parseEnv('$COLOR_BLACK'),               // the colour shown in the fieldtype (required)
                    ],
                ],
            ],
        ],
    ],

];
