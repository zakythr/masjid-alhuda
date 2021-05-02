<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ZakatmalForm extends Form
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
            ->add('jumlahuang', 'text', [
                'label' => 'Jumlah Uang',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('tanggalmal', 'text', [
                'label' => 'Tanggal Zakat Mal',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('alamat', 'text', [
                'label' => 'Alamat',
                'attr' => ['data-validation' => 'required']
            ]);
    }
}
