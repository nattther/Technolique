<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'Titre vidéo',
                    'minLength' => '2',
                    'maxLength' => '32',
                ],
            ])
            ->add('description', TextareaType::class)
            ->add('timeCode')
            ->add('url', TextType::class, [
                'attr' => [
                    'placeholder' => 'Url de la vidéo Youtube',
                    'minLength' => '2',
                    'maxLength' => '255',
                ],
            ])
            ->add('thumbnail', TextType::class, [
                'attr' => [
                    'placeholder' => 'Image de la vidéo Youtube',
                    'minLength' => '2',
                    'maxLength' => '255',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
