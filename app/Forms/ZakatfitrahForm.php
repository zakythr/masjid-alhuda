<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Model\Jeniszakatfitrah;

class ZakatfitrahForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nama', 'text', [
                'label' => 'Nama Lengkap',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('sex_id', 'choice', [
                'label' => 'Jenis Kelamin',
                'choices' => [1 => 'Laki - laki', 2 => 'Perempuan'],
                'choice_options' => [
                    'wrapper' => ['class' => 'radio sex-radio'],
                    'label_attr' => ['class' => ''],
                ],
                'attr' => ['data-validation' => 'required'],
                'selected' => [1],
                'expanded' => true,
                'multiple' => false
            ])
            // ->add('jeniszakat_id', 'choice', [
            //     'label' => 'Jenis Zakat Fitrah',
            //     'choices' => [1 => 'Uang Tunai', 2 => 'Beras'],
            //     'choice_options' => [
            //         'wrapper' => ['class' => 'radio sex-radio'],
            //         'label_attr' => ['class' => ''],
            //     ],
            //     'attr' => ['data-validation' => 'required'],
            //     'selected' => [1],
            //     'expanded' => true,
            //     'multiple' => false
            // ])
            ->add('jeniszakat_id', 'select', [
                'choices' => Jeniszakatfitrah::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Jenis Zakat Fitrah',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('jumlahberas', 'text', [
                'label' => 'Jumlah Beras',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('jumlahuang', 'text', [
                'label' => 'Jumlah Uang',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('tanggalfitrah', 'text', [
                'label' => 'Tanggal Zakat Fitrah',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('alamat', 'text', [
                'label' => 'Alamat',
                'attr' => ['data-validation' => 'required']
            ]);
    }
}
