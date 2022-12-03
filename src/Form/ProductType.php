<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => [
                    'placeholder' => 'Enter product name',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Enter product description',
                ],
            ])
            ->add('image', TextType::class, [
                'label' => 'Image link',
                'attr' => [
                    'placeholder' => 'Enter image link',
                ],
            ])
            ->add('quantity', NumberType::class, [
                'label' => 'Quantity',
                'attr' => [
                    'placeholder' => 'Quantity',
                ],
            ])
            ->add('brand', TextType::class, [
                'label' => 'Brand',
                'attr' => [
                    'placeholder' => 'Enter brand name',
                ],
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name',
                'choice_value' => 'id',
                'label' => 'Category',
                'attr' => [
                    'placeholder' => 'Select product category',
                ],
            ])
            ->add('isPublished', CheckboxType::class, [
                "label" => "Publish",
                "required" => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}