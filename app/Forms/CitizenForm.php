<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Model\Religion;
use App\Model\Job;
use App\Model\MaritalStatus;
use App\Model\FamilyStatus;
use App\Model\Country;
use App\Model\Education;

class CitizenForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nama Lengkap',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('kk_number', 'text', [
                'label' => 'Nomor KK',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('nik', 'text', [
                'label' => 'NIK',
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
            ->add('birth_place', 'text', [
                'label' => 'Tempat Lahir',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('birth_date', 'text', [
                'label' => 'Tanggal Lahir',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('religion_id', 'select', [
                'choices' => Religion::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Agama',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('education_id', 'select', [
                'choices' => Education::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Pendidikan',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('job_id', 'select', [
                'choices' => Job::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Pekerjaan',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('marital_status_id', 'select', [
                'choices' => MaritalStatus::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Status Perkawinan',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('family_status_id', 'select', [
                'choices' => FamilyStatus::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Status Dalam Keluarga',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('country_id', 'select', [
                'choices' => Country::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Kewarganegaraan',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'form-class select2'
                ]
            ])
            ->add('passport_number', 'text', [
                'label' => 'Nomor Paspor',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('kitas_number', 'text', [
                'label' => 'Nomor KITAS/KITAP',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('father_name', 'text', [
                'label' => 'Nama Ayah',
                'attr' => ['data-validation' => 'required']
            ])
            ->add('mother_name', 'text', [
                'label' => 'Nama Ibu',
                'attr' => ['data-validation' => 'required']
            ]);
    }
}
