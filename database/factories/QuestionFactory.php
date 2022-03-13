<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use stdClass;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'survey_id' => null,
            // 'question_bank_id' => null,
            'question' => $this->faker->word(),
            'configuration' => 'override',
            'from_question_bank' => null
        ];
    }

    /**
     * Create a textBox question
     */
    public function textBox($question, $inputType = null, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'textBox',
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'input_type' => $inputType ?: 'text',
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function multipleChoice($question, $options, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'multipleChoice',
            'options' => $options,
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function multiOptions($question, $options, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'multiOptions',
            'options' => $options,
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function dropDown($question, $options, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'dropdown',
            'options' => $options,
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function fileUpload($question, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'fileUpload',
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function scale($question, $minVal, $maxVal, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...

        $options = [];

        for ($i = $maxVal; $i >= $minVal; $i--) {
            # code...
            array_push($options, $i);
        }

        $configurations = [
            'question' => $question,
            'component_name' => 'scale',
            'min_value' => $minVal,
            'max_value' => $maxVal,
            'options' => $options,
            'survey_id' => $surveyId ?: null,
            'question_bank_id' => $questionBankId ?: null,
            'validations' => $validations ?: null
        ];

        return $this->state($this->toConfig($configurations));
    }

    public function ratingStar($question, $minVal, $maxVal, $validations = null, $surveyId = null, $questionBankId = null)
    {
        # code...
        $configurations = [
            'question' => $question,
            'component_name' => 'ratingStar',
            'min_value' => $minVal,
            'max_value' => $maxVal,
            'survey_id' => $surveyId,
            'question_bank_id' => $questionBankId,
            'validations' => $validations
        ];

        return $this->state($this->toConfig($configurations));
    }

    /**
     * Convenient way to create a question configuration seeder.
     * for more info see componentConfigurations.js
     *
     * @return array
     */
    public function toConfig($configurations = [])
    {
        # code...
        // must have value
        $question = $configurations['question'];
        $componentName = $configurations['component_name'];

        // optional
        $surveyId = array_key_exists('survey_id', $configurations) ? $configurations['survey_id'] : null;
        $from_question_bank = array_key_exists('from_question_bank', $configurations) ? $configurations['from_question_bank'] : null;
        $questionBankId = array_key_exists('question_bank_id', $configurations) ? $configurations['question_bank_id'] : null;

        // common nullable value
        $options = array_key_exists('options', $configurations) ? $configurations['options'] : null;
        $label = array_key_exists('label', $configurations) ? $configurations['label'] : null;
        $inputType = array_key_exists('input_type', $configurations) ? $configurations['input_type'] : null;

        // for scale and rating only
        $maxVal = array_key_exists('max_value', $configurations) ? $configurations['max_value'] : null;
        $minVal = array_key_exists('min_value', $configurations) ? $configurations['min_value'] : null;

        $config = new stdClass();
        $config->question = $question;
        $config->componentName = $componentName;

        if ($options != null && count($options) > 0) {
            $config->options = $options;
        }

        $inputConfig = new stdClass();
        if ($componentName == "textBox") {
            $inputConfig->inputType = $inputType ?: 'text';
            $inputConfig->style = "form-control";
            $inputConfig->label = $label;
        } elseif ($componentName == "multiOptions") {
            $inputConfig->inputType = 'checkbox';
            $inputConfig->style = "form-check-input";
            $inputConfig->label = $label;
        } elseif ($componentName == "multipleChoice") {
            $inputConfig->inputType = 'radio';
            $inputConfig->style = "form-check-input";
            $inputConfig->label = $label;
        } elseif ($componentName == "dropdown") {
            $inputConfig->inputType = 'select';
            $inputConfig->style = "form-check-input";
            $inputConfig->label = $label;
        } elseif ($componentName == "scale") {
            $inputConfig->inputType = 'radio';
            $inputConfig->style = "scale";
            $inputConfig->label = $label;
            $inputConfig->maxVal = $maxVal;
            $inputConfig->minVal = $minVal;
        } elseif ($componentName == "ratingStar") {
            $inputConfig->inputType = 'radio';
            $inputConfig->style = "star-rating";
            $inputConfig->label = $label;
            $inputConfig->maxVal = $maxVal;
            $inputConfig->minVal = $minVal;
        } elseif ($componentName == "fileUpload") {
            $inputConfig->inputType = 'file';
            $inputConfig->style = "form-control";
            $inputConfig->label = $label;
        }

        $config->configuration = $inputConfig;


        // validations
        // the array should be nested array
        if (array_key_exists('validations', $configurations) && $configurations['validations'] != null) {
            /* $validations = [];
            foreach ($configurations['validations'] as $value) {
                # code...
                // $validationRule = new stdClass();
                // $validationRule->rule = $value['rule'];
                // $validationRule->value = $value['value'];
                // $validationRule->message = $value['message'];

                array_push($validations, $value);
            } */
            $config->validations = $configurations['validations'];
        }

        $transformed = [
            'survey_id' => $surveyId,
            'question_bank_id' => $questionBankId,
            'from_question_bank' => $from_question_bank,
            'question' => $question,
            'configuration' => json_encode($config)
        ];

        return $transformed;
    }
}
