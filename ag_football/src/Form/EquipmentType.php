<?php

namespace App\Form;

use App\Entity\Equipment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;


class EquipmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextType::class, [
                'required'=>false,
                'constraints'=>[
                    new NotBlank,                
                ]
            ])
            ->add('description', TextareaType::class, [
                'constraints'=>[
                    new NotBlank,                
                ]
            ])
            ->add('brand', TextType::class, [
                'constraints'=>[
                    new NotBlank,                
                ]
            ])
            ->add('price', MoneyType::class, [
                'currency'=>false,
                'constraints'=>[
                    new NotBlank,                
                ]
            ])
            ->add('quantity', NumberType::class, [
                'constraints'=>[
                    new NotBlank,                
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Equipment::class, 
        ]);
    }
}
