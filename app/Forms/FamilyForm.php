<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class FamilyForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nama',
                'attr' => ['data-validation' => 'required']
            ]);
    }
}
