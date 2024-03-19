<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Questions2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \DB::table('questions')->delete();

        \DB::table('questions')->insert(array (
            40 =>
            array (
                'id' => 41,
                'questions' => " Do you prefer routines and have difficulty with changes in your daily schedule or environment?",
                'type' => 'autims',
                'value' => '5',
            ),
            41 =>
            array (
                'id' => 42,
                'questions' => " How often do you engage in repetitive behaviors or movements, such as rocking, hand-flapping, or spinning objects?",
                'type' => 'autims',
                'value' => '5',
            ),
            42 =>
            array (
                'id' => 43,
                'questions' => "Do you have difficulty with communication, such as understanding sarcasm or taking things literally?",
                'type' => 'autims',
                'value' => '5',
            ),
            43 =>
            array (
                'id' => 44,
                'questions' => "Do you have intense interests in specific topics or hobbies, often to the exclusion of other activities?",
                'type' => 'autims',
                'value' => '5',
            ),
            44 =>
            array (
                'id' => 45,
                'questions' => "Do you have difficulty with sensory processing, such as being hypersensitive or hyposensitive to certain sounds, textures, tastes, or smells?",
                'type' => 'autims',
                'value' => '5',
            ),
            90 =>
            array (
                'id' => 91,
                'questions' => "Have you ever sought treatment or been diagnosed with bipolar disorder or another mood disorder by a mental health professional?",
                'type' => 'autims',
                'value' => '5',
            ),
            46 =>
            array (
                'id' => 47,
                'questions' => "Have you experienced delays in reaching developmental milestones, such as speaking your first words or making eye contact?",
                'type' => 'autims',
                'value' => '5',
            ),
            47 =>
            array (
                'id' => 48,
                'questions' => "Do you have difficulty with social interactions and making or maintaining friendships?",
                'type' => 'autims',
                'value' => '5',
            ),
            48 =>
            array (
                'id' => 49,
                'questions' => "How often do you engage in repetitive speech patterns or echolalia (repeating words or phrases)?",
                'type' => 'autims',
                'value' => '5',
            ),
            49 =>
            array (
                'id' => 50,
                'questions' => "Have you noticed a pattern of these symptoms occurring consistently across different situations and environments?",
                'type' => 'autims',
                'value' => '5',
            ),
            50 =>
            array (
                'id' => 51,
                'questions' => " Do you experience intrusive, unwanted thoughts, images, or urges that cause you distress or anxiety?",
                'type' => 'ocd',
                'value' => '5',
            ),
            51 =>
            array (
                'id' => 52,
                'questions' => "Do you engage in repetitive behaviors or rituals in an attempt to reduce the anxiety caused by these intrusive thoughts?",
                'type' => 'ocd',
                'value' => '5',
            ),
            52 =>
            array (
                'id' => 53,
                'questions' => "How often do you experience these intrusive thoughts or engage in these repetitive behaviors? ",
                'type' => 'ocd',
                'value' => '5',
            ),
            53 =>
            array (
                'id' => 54,
                'questions' => "Do you feel driven to perform these rituals or behaviors, even if you know they are excessive or irrational?",
                'type' => 'ocd',
                'value' => '5',
            ),
            54 =>
            array (
                'id' => 55,
                'questions' => " Do you experience significant distress or impairment in your daily life as a result of these thoughts and behaviors?",
                'type' => 'ocd',
                'value' => '5',
            ),
            55 =>
            array (
                'id' => 56,
                'questions' => "Have you tried to resist or control these thoughts or behaviors, but found it difficult or impossible to do so?",
                'type' => 'ocd',
                'value' => '5',
            ),
            56 =>
            array (
                'id' => 57,
                'questions' => "Do these symptoms interfere with your ability to work, socialize, or maintain relationships?",
                'type' => 'ocd',
                'value' => '5',
            ),
            57 =>
            array (
                'id' => 58,
                'questions' => "Have you noticed a pattern of these symptoms lasting for an extended period, such as more than an hour each day or for more than a month?",
                'type' => 'ocd',
                'value' => '5',
            ),

            58 =>
            array (
                'id' => 59,
                'questions' => " Have you sought help or treatment for these symptoms before?",
                'type' => 'ocd',
                'value' => '5',
            ),
            59 =>
            array (
                'id' => 60,
                'questions' => "Have you experienced or witnessed a traumatic event that involved actual or threatened death, serious injury, or sexual violence?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            60 =>
            array (
                'id' => 61,
                'questions' => "Do you experience intrusive memories of the traumatic event, such as flashbacks, nightmares, or distressing thoughts?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            61 =>
            array (
                'id' => 62,
                'questions' => "Do you avoid reminders of the traumatic event, such as places, people, or activities that remind you of what happened?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            62 =>
            array (
                'id' => 63,
                'questions' => "Do you experience negative changes in your thoughts or mood, such as persistent negative beliefs about yourself or the world, feelings of detachment from others, or a persistent inability to experience positive emotions?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            64 =>
            array (
                'id' => 65,
                'questions' => "Do you experience changes in arousal and reactivity, such as being easily startled, feeling on edge, having difficulty sleeping, or engaging in reckless or self-destructive behavior?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            65 =>
            array (
                'id' => 66,
                'questions' => " How often do you experience these symptoms?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            66 =>
            array (
                'id' => 67,
                'questions' => "Have these symptoms caused significant distress or impairment in your daily life, such as in your relationships, work, or ability to function normally?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            67 =>
            array (
                'id' => 68,
                'questions' => " Do you have a history of exposure to other traumatic events or experiences?",
                'type' => 'ptsd',
                'value' => '5',
            ),
            68 =>
            array (
                'id' => 69,
                'questions' => "How often do you feel overwhelmed by your daily responsibilities and tasks?",
                'type' => 'stress',
                'value' => '5',
            ),
            69 =>
            array (
                'id' => 70,
                'questions' => " Do you frequently experience physical symptoms of stress, such as headaches, muscle tension, or stomach problems?",
                'type' => 'stress',
                'value' => '5',
            ),
            70 =>
            array (
                'id' => 71,
                'questions' => " How often do you have trouble sleeping due to stress or worry?",
                'type' => 'stress',
                'value' => '5',
            ),
            71 =>
            array (
                'id' => 72,
                'questions' => " Do you find it difficult to relax or unwind, even when you have free time?",
                'type' => 'stress',
                'value' => '5',
            ),
            72 =>
            array (
                'id' => 73,
                'questions' => "How often do you feel irritable or easily angered?",
                'type' => 'stress',
                'value' => '5',
            ),
            73 =>
            array (
                'id' => 74,
                'questions' => " Do you often feel anxious or worried about the future?",
                'type' => 'stress',
                'value' => '5',
            ),
            74 =>
            array (
                'id' => 75,
                'questions' => " How often do you use unhealthy coping mechanisms, such as overeating, smoking, or drinking alcohol, to deal with stress?",
                'type' => 'stress',
                'value' => '5',
            ),
            75 =>
            array (
                'id' => 76,
                'questions' => "Do you frequently feel exhausted or burnt out, even after a full night's sleep?",
                'type' => 'stress',
                'value' => '5',
            ),
            76 =>
            array (
                'id' => 77,
                'questions' => "How often do you feel like you don't have enough time to get everything done?",
                'type' => 'stress',
                'value' => '5',
            ),
            77 =>
            array (
                'id' => 78,
                'questions' => ". Do you feel like your stress levels are affecting your physical health, relationships, or work performance?",
                'type' => 'stress',
                'value' => '5',
            ),
            79 =>
            array (
                'id' => 80,
                'questions' => "Do you often eat large amounts of food in a short period, such as within a two-hour period? ",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            80 =>
            array (
                'id' => 81,
                'questions' => ". Do you feel a lack of control over your eating during these episodes, where you feel like you can't stop eating or control what or how much you're eating?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            81 =>
            array (
                'id' => 82,
                'questions' => " Do you eat when you're not physically hungry or continue eating even when you're full?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            82 =>
            array (
                'id' => 83,
                'questions' => " Do you eat much more rapidly than normal during binge episodes?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            83 =>
            array (
                'id' => 84,
                'questions' => "Do you feel ashamed, guilty, or disgusted with yourself after binge eating episodes?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            84 =>
            array (
                'id' => 85,
                'questions' => " Do you try to hide or conceal your eating habits from others?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            85 =>
            array (
                'id' => 86,
                'questions' => "Have you tried unsuccessfully to control or stop your binge eating episodes?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            86 =>
            array (
                'id' => 87,
                'questions' => "Do you frequently eat alone because you're embarrassed about the quantity of food you consume? ",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            87 =>
            array (
                'id' => 88,
                'questions' => " Do you experience distress or impairment in your daily life as a result of binge eating behaviors?",
                'type' => 'binge eating ',
                'value' => '5',
            ),
            88 =>
            array (
                'id' => 89,
                'questions' => "Have you noticed a pattern of binge eating occurring at least once a week for three months or longer?",
                'type' => 'binge eating ',
                'value' => '5',
            ),

        ));


    }
}
