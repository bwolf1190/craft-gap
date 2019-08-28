<?php
/**
 * Signup plugin for Craft CMS 3.x
 *
 * Sign customers up.
 *
 * @link      brett.a.wolverton@gmail.com
 * @copyright Copyright (c) 2019 Brett Wolverton
 */

namespace wolff\signup\variables;

use wolff\signup\Signup;

use Craft;

/**
 * Signup Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.signup }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Brett Wolverton
 * @package   Signup
 * @since     1.0.0
 */
class SignupVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.signup.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.signup.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
