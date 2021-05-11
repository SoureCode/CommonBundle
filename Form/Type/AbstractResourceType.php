<?php

namespace SoureCode\Bundle\Common\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @deprecated Deprecated since 0.2.0 and will be remove in 1.0.0
 */
abstract class AbstractResourceType extends AbstractType
{
    /**
     * @var class-string
     */
    protected string $class;

    /**
     * @param class-string $class
     */
    public function __construct(string $class)
    {
        $this->class = $class;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(
            [
                'data_class' => $this->class,
            ]
        );
    }
}
