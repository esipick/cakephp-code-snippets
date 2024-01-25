// In your model's validation method
public function validationDefault(Validator $validator)
{
    $validator
        ->add('custom_field', 'custom', [
            'rule' => function ($value, $context) {
                // Custom validation logic
                return $value > 10;
            },
            'message' => 'Value must be greater than 10.'
        ]);

    return $validator;
}
