<?php
/**
 * Signup plugin for Craft CMS 3.x
 *
 * Sign customers up.
 *
 * @link      brett.a.wolverton@gmail.com
 * @copyright Copyright (c) 2019 Brett Wolverton
 */

namespace wolff\signup\utilities;

use wolff\signup\Signup;
use wolff\signup\assetbundles\signuputilityutility\SignupUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Signup Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Brett Wolverton
 * @package   Signup
 * @since     1.0.0
 */
class SignupUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('signup', 'SignupUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'signup-signup-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@wolff/signup/assetbundles/signuputilityutility/dist/img/SignupUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(SignupUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'signup/_components/utilities/SignupUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
