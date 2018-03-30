<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/23/2018
 * Time: 2:09 PM
 */

namespace Interactions\ValidationBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsName extends Constraint
{
    public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters and these characters:" -\'"';
}