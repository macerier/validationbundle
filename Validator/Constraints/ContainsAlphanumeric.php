<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/22/2018
 * Time: 5:34 PM
 */

namespace Interactions\ValidationBundle\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsAlphanumeric extends Constraint
{
    public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters or numbers.';

}

