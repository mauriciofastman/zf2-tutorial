<?php
namespace Categoria\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;

/**
 * Description of CategoryFilter
 *
 * @author mauricioschmitz
 */
class CategoryFilter extends InputFilter {
    
    public function __construct() {
        $nome = new Input('nome');
        $nome->setRequired(true)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        
        $nome->getValidatorChain()->attach(new NotEmpty());
        $this->add($nome);
    }
}
