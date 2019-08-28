<?php
/**
 * Signup module for Craft CMS 3.x
 *
 * Sign up customers.
 *
 * @link      brettwolverton.com
 * @copyright Copyright (c) 2019 Brett Wolverton
 */

namespace modules\signupmodule\controllers;

use modules\signupmodule\SignupModule;

use Craft;
use craft\web\Controller;

/**
 * Enrollment Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your module’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Brett Wolverton
 * @package   SignupModule
 * @since     1.0.0
 */
class EnrollmentController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our module's index action URL,
     * e.g.: actions/signup-module/enrollment
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the EnrollmentController actionIndex() method';

        return $result;
    }

    /**
     * Handle a request going to our module's actionDoSomething URL,
     * e.g.: actions/signup-module/enrollment/do-something
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        dd('hit');
        $result = 'Welcome to the EnrollmentController actionDoSomething() method';

        return $result;
    }
}
