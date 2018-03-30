<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/23/2018
 * Time: 2:11 PM
 */

namespace Interactions\ValidationBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsSpecialCharacterValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^[a-zA-Z0-9 -,.;\']+$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}