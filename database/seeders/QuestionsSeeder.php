<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('questions')->delete();

        \DB::table('questions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'questions' => "Do you often find it difficult to pay attention to details or make careless mistakes in your work
                or other activities?",
                'type' => 'adhd',
                'value' => '5',
            ),
            1 =>
            array (
                'id' => 2,
                'questions' => "If a task or project requires a lot of thought I will often delay in getting it started",
                'type' => 'adhd',
                'value' => '5',
            ),
            2 =>
            array (
                'id' => 3,
                'questions' => "Do you frequently have trouble staying focused on tasks or activities, such as during
                conversations, reading, or completing assignments?
                ",
                'type' => 'adhd',
                'value' => '5',
            ),
            3 =>
            array (
                'id' => 4,
                'questions' => "Do you frequently feel restless or find yourself fidgeting with your hands or feet when you
                need to sit still (e.g., during meetings, in class)?
                ",
                'type' => 'adhd',
                'value' => '5',
            ),
            4 =>
            array (
                'id' => 5,
                'questions' =>"Do you often have difficulty staying seated in situations where it is expected (e.g., at school,
                in the office)?
                ",
                'type' => 'adhd',
                'value' => '5',
            ),
            5 =>
            array (
                'id' => 6,
                'questions' => "Do you frequently feel like you're on the go or act as if driven by a motor? ",
                'type' => 'adhd',
                'value' => '5',
            ),
            6 =>
            array (
                'id' => 7,
                'questions' =>  "Do you have difficulty waiting your turn, such as in lines or during games or group activities?",
                'type' => 'adhd',
                'value' => '5',
            ),
            7 =>
            array (
                'id' => 8,
                'questions' => "Do you frequently interrupt or intrude on others’ conversations or activities? ",
                'type' => 'adhd',
                'value' => '5',
            ),
            8 =>
            array (
                'id' => 9,
                'questions' => "Do you find it challenging to follow through on instructions or finish tasks, such as chores,
                homework, or work assignments?",
                'type' => 'adhd',
                'value' => '5',
            ),
            9 =>
            array (
                'id' => 10,
                'questions' => "Do you tend to act impulsively without considering the consequences of your actions?",
                'type' => 'adhd',
                'value' => '5',
            ),

            10 =>
            array (
                'id' => 11,
                'questions' => "Over the past two weeks, how often have you felt worried, nervous, or on edge?
                Do you often find yourself feeling restless or unable to relax?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            11 =>
            array (
                'id' => 12,
                'questions' => "How frequently do you experience sudden episodes of intense fear or panic, accompanied
                by physical symptoms like rapid heartbeat, sweating, trembling, or shortness of breath?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            12 =>
            array (
                'id' => 13,
                'questions' => "Have you noticed any changes in your sleep patterns, such as difficulty falling asleep,
                staying asleep, or experiencing restless sleep?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            13 =>
            array (
                'id' => 14,
                'questions' => "How often do you find yourself avoiding situations or activities due to feelings of fear or
                anxiety?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            14 =>
            array (
                'id' => 15,
                'questions' => "Do you frequently experience intrusive or racing thoughts that you find difficult to control or
                dismiss?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            15 =>
            array (
                'id' => 16,
                'questions' => "Have you noticed any physical symptoms such as muscle tension, headaches, stomach
                problems, or fatigue that may be related to anxiety?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            16 =>
            array (
                'id' => 17,
                'questions' => "Do you find it challenging to concentrate or focus on tasks due to worrying thoughts or
                feelings of tension?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            17 =>
            array (
                'id' => 18,
                'questions' => "
                Have you experienced any sudden or intense feelings of irritability or agitation that are
                difficult to explain?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            18 =>
            array (
                'id' => 19,
                'questions' => "How often do you engage in behaviors such as nail-biting, fidgeting, or other nervous habits as a way to cope with anxiety?",
                'type' => 'anxiety',
                'value' => '5',
            ),
            20 =>
            array (
                'id' => 21,
                'questions' => "Over the past two weeks, have you experienced periods of unusually elevated mood or energy, where you felt excessively happy, euphoric, or irritable?",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            21 =>
            array (
                'id' => 22,
                'questions' => "Have you noticed any significant changes in your sleep patterns, such as sleeping much less than usual during periods of elevated mood? ",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            22 =>
            array (
                'id' => 23,
                'questions' => "During these periods of elevated mood, do you find yourself engaging in impulsive or risky behaviors, such as excessive spending, reckless driving, or substance abuse? ",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            23 =>
            array (
                'id' => 24,
                'questions' => "Have you ever experienced periods of depression or low mood, lasting for at least two weeks, where you felt sad, hopeless, or lost interest in activities you once enjoyed? ",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            24 =>
            array (
                'id' => 25,
                'questions' => "Do you often experience rapid shifts in mood, where your mood swings from extreme highs to extreme lows within a short period? ",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            25 =>
            array (
                'id' => 26,
                'questions' => "Have you noticed any changes in your ability to concentrate or focus, particularly during periods of elevated mood or depression?",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            26 =>
            array (
                'id' => 27,
                'questions' => "How frequently do you experience racing thoughts, distractibility, or an increased need for stimulation during periods of elevated mood?",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            27 =>
            array (
                'id' => 28,
                'questions' => "Have you ever experienced symptoms of psychosis, such as hallucinations or delusions, during manic or depressive episodes?",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            28 =>
            array (
                'id' => 29,
                'questions' => "Do you find it challenging to maintain stable relationships or hold down a job due to your mood swings or erratic behavior? ",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            29 =>
            array (
                'id' => 30,
                'questions' => "Have you ever sought treatment or been diagnosed with bipolar-disorder disorder or another mood disorder by a mental health professional?",
                'type' => 'bipolar-disorder',
                'value' => '5',
            ),
            30 =>
            array (
                'id' => 31,
                'questions' => "Over the past two weeks, have you felt persistently sad, empty, or hopeless, even when there's no apparent reason for these feelings?",
                'type' => 'depression',
                'value' => '5',
            ),
            31 =>
            array (
                'id' => 32,
                'questions' => "How has your sleep been affected recently? Have you experienced changes in your sleep patterns, such as difficulty falling asleep, staying asleep, or sleeping too much?",
                'type' => 'depression',
                'value' => '5',
            ),
            32 =>
            array (
                'id' => 33,
                'questions' => "Have you noticed any changes in your appetite or weight recently, such as significant weight loss or gain, or changes in your eating habits?",
                'type' => 'depression',
                'value' => '5',
            ),
            33 =>
            array (
                'id' => 34,
                'questions' => "How often have you felt fatigued or had a lack of energy, even after getting enough sleep or rest? ",
                'type' => 'depression',
                'value' => '5',
            ),
            34 =>
            array (
                'id' => 35,
                'questions' => "Have you experienced feelings of worthlessness or excessive guilt, even when there's no rational cause for these feelings? ",
                'type' => 'depression',
                'value' => '5',
            ),
            35 =>
            array (
                'id' => 36,
                'questions' => "Do you find it challenging to concentrate, make decisions, or remember things, even with tasks that you used to handle easily?",
                'type' => 'depression',
                'value' => '5',
            ),
            36 =>
            array (
                'id' => 37,
                'questions' => "Have you had thoughts of death or suicide, or have you made any suicide attempts, even if you don't have a specific plan?",
                'type' => 'depression',
                'value' => '5',
            ),
            37 =>
            array (
                'id' => 38,
                'questions' => "How has your overall mood been lately? Have you been irritable, agitated, or easily annoyed by small things?",
                'type' => 'depression',
                'value' => '5',
            ),
            38 =>
            array (
                'id' => 39,
                'questions' => "How has your ability to function in daily life been affected by these symptoms? Have they interfered with your work, relationships, or other responsibilities? ",
                'type' => 'depression',
                'value' => '5',
            ),
            39 =>
            array (
                'id' => 40,
                'questions' => "Do you have difficulty understanding social cues, such as body language, facial expressions, or gestures? ",
                'type' => 'autism',
                'value' => '5',
            ),
            40 =>
            array (
                'id' => 41,
                'questions' => " Do you prefer routines and have difficulty with changes in your daily schedule or environment?",
                'type' => 'autism',
                'value' => '5',
            ),
            41 =>
            array (
                'id' => 42,
                'questions' => " How often do you engage in repetitive behaviors or movements, such as rocking, hand-flapping, or spinning objects?",
                'type' => 'autism',
                'value' => '5',
            ),
            42 =>
            array (
                'id' => 43,
                'questions' => "Do you have difficulty with communication, such as understanding sarcasm or taking things literally?",
                'type' => 'autism',
                'value' => '5',
            ),
            43 =>
            array (
                'id' => 44,
                'questions' => "Do you have intense interests in specific topics or hobbies, often to the exclusion of other activities?",
                'type' => 'autism',
                'value' => '5',
            ),
            44 =>
            array (
                'id' => 45,
                'questions' => "Do you have difficulty with sensory processing, such as being hypersensitive or hyposensitive to certain sounds, textures, tastes, or smells?",
                'type' => 'autism',
                'value' => '5',
            ),
            46 =>
            array (
                'id' => 47,
                'questions' => "Have you experienced delays in reaching developmental milestones, such as speaking your first words or making eye contact?",
                'type' => 'autism',
                'value' => '5',
            ),
            47 =>
            array (
                'id' => 48,
                'questions' => "Do you have difficulty with social interactions and making or maintaining friendships?",
                'type' => 'autism',
                'value' => '5',
            ),
            48 =>
            array (
                'id' => 49,
                'questions' => "How often do you engage in repetitive speech patterns or echolalia (repeating words or phrases)?",
                'type' => 'autism',
                'value' => '5',
            ),
            49 =>
            array (
                'id' => 50,
                'questions' => "Have you noticed a pattern of these symptoms occurring consistently across different situations and environments?",
                'type' => 'autism',
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
                'type' => 'binge-eating',
                'value' => '5',
            ),
            80 =>
            array (
                'id' => 81,
                'questions' => ". Do you feel a lack of control over your eating during these episodes, where you feel like you can't stop eating or control what or how much you're eating?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            81 =>
            array (
                'id' => 82,
                'questions' => " Do you eat when you're not physically hungry or continue eating even when you're full?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            82 =>
            array (
                'id' => 83,
                'questions' => " Do you eat much more rapidly than normal during binge episodes?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            83 =>
            array (
                'id' => 84,
                'questions' => "Do you feel ashamed, guilty, or disgusted with yourself after binge eating episodes?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            84 =>
            array (
                'id' => 85,
                'questions' => " Do you try to hide or conceal your eating habits from others?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            85 =>
            array (
                'id' => 86,
                'questions' => "Have you tried unsuccessfully to control or stop your binge eating episodes?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            86 =>
            array (
                'id' => 87,
                'questions' => "Do you frequently eat alone because you're embarrassed about the quantity of food you consume? ",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            87 =>
            array (
                'id' => 88,
                'questions' => " Do you experience distress or impairment in your daily life as a result of binge eating behaviors?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            88 =>
            array (
                'id' => 89,
                'questions' => "Have you noticed a pattern of binge eating occurring at least once a week for three months or longer?",
                'type' => 'binge-eating',
                'value' => '5',
            ),
            


        ));


    }
}
