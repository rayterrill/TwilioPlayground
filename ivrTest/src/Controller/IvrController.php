<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class IvrController extends AppController {
    public function index() {
        //get the From url parameter and pass it to our view
        $from = $this->request->query('From');
        $this->set('from', $from);

        //render the view in src/Template/Ivr/index.ctp
        $this->render();
    }

    public function gather() {
        //get the Digits url parameter and pass it to our view
        $digits = $this->request->query('Digits');
        $this->set('digits', $digits);

        //render the view in src/Template/Ivr/gather.ctp
        $this->render();
    }
}
