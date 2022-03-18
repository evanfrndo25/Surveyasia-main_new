<?php

namespace Database\Seeders;

use Database\Factories\ChartFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use stdClass;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = new ChartFactory();

        // chartJS specifications
        $charts = ['Line', 'Bar', 'Pie', 'Doughnut', 'Polar Area', 'Scatter', 'Bubble', 'Radar', 'Word Cloud'];
        $types = ['line', 'bar', 'pie', 'doughnut', 'polarArea', 'scatter', 'bubble', 'radar', 'wordCloud'];
        $supported = 'Multiple options'; // support for only multiple options question (text is excluded)

        // default configuration / blueprint for charts
        // prefer JSON (see chart-configuration.js)
        $config = new stdClass(); // creates a new object to convert to JSON
        $config->type = null; // defined later
        $config->data = null; // defined later
        $config->options = null; // defined later
        // $config->options->plugins->title->text = 'Basic Title';
        // $config->options->plugins->title->display = false;

        $configJSON = json_encode($config);

        for ($i = 0; $i < count($charts); $i++) {
            # code...
            $factory
                ->makeSeed([
                    'name' => $charts[$i],
                    'type' => $types[$i],
                    'library_from' => 'Chart JS',
                    'status' => 0,
                    'supported_questions' => $supported,
                    'default_configuration' => $configJSON
                ])
                ->create();
        }
    }
}
