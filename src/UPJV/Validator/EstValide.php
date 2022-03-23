<?php
/**
 * PHP version 8.0.1
 * This class is used to validate a string.
 *
 * @category Test
 * @package  UPJV/Validator
 * @author   UPJV <test@upjv.fr>
 * @license  https://www.gnu.org/licenses/agpl-3.0.fr.html AGPL V3
 * @link     https://github.com/HookWoods/QualiteCodeTU
 */

namespace UPJV\Validator;

/**
 * Classe EstValide
 *
 * @category Class
 * @package  UPJV\Validator
 * @author   UPJV <test@upjv.fr>
 * @license  https://www.gnu.org/licenses/agpl-3.0.fr.html AGPL V3
 * @version  Release: 1.0
 * @access   public
 * @link     https://github.com/HookWoods/QualiteCodeTU
 */
class EstValide implements ValidatorInterface
{
    /**
     * This method is used to validate a string.
     *
     * @param $param an array of string
     *
     * @return bool
     */
    public function build(array $param): object
    {
        return $this;
    }

    /**
     * This method is used to validate a string.
     *
     * @param $input The string to validate.
     *
     * @return bool
     */
    public function check($input): bool
    {
        return true;
    }
}
