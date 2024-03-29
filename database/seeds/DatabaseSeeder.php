<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Uncomment the below to wipe the table clean before populating
        DB::table('dose_units')->delete();

        $data = array(
            ['id' => 1, 'name' => 'mL', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'mg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'unit(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'tab(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'mcg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'dose(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('dose_units')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('mitte_units')->delete();

        $data = array(
            ['id' => 1, 'name' => 'mL', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'mg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'unit(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'tab(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'mcg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'dose(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'day(s)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'tri-pack', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('mitte_units')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('dose_routes')->delete();

        $data = array(
            ['id' => 1, 'name' => 'PO', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'IN', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'SC', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'IM', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'PV', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('dose_routes')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('ppo_sections')->delete();

        $data = array(
            ['id' => 1, 'name' => 'Rx', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Supportive Care Rx', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('ppo_sections')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('diagnosis_primary_categories')->delete();

        $data = array(
            ['id' => 1, 'name' => 'Adrenal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Breast', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Central Nervous System', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Gastrointestinal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Genitourinary', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Gynecological', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Head and Neck', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'Hematology', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'Lung', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'Neuroendocrine', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'Primary Unknown', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => 'Sarcoma', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => 'Skin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('diagnosis_primary_categories')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('diagnosis_secondary_categories')->delete();

        $data = array(
            ['id' => 1, 'name' => 'Adrenal', 'diagnosis_primary_category_id'=> 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Breast', 'diagnosis_primary_category_id'=> 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Central Nervous System', 'diagnosis_primary_category_id'=> 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Gastrointestinal', 'diagnosis_primary_category_id'=> 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'GIST', 'diagnosis_primary_category_id'=> 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Gynecological', 'diagnosis_primary_category_id'=> 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Head and Neck', 'diagnosis_primary_category_id'=> 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'Leukemia', 'diagnosis_primary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'Lung', 'diagnosis_primary_category_id'=> 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'Lymphoma', 'diagnosis_primary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'MDS', 'diagnosis_primary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => 'Myelofibrosis', 'diagnosis_primary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => 'Multiple Myeloma', 'diagnosis_primary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 14, 'name' => 'Neuroendocrine', 'diagnosis_primary_category_id'=> 10, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 15, 'name' => 'Primary Unknown', 'diagnosis_primary_category_id'=> 11, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 16, 'name' => 'Prostate', 'diagnosis_primary_category_id'=> 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 17, 'name' => 'Renal cell', 'diagnosis_primary_category_id'=> 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 18, 'name' => 'Sarcoma', 'diagnosis_primary_category_id'=> 12, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 19, 'name' => 'Skin', 'diagnosis_primary_category_id'=> 13, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('diagnosis_secondary_categories')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('dose_calculation_types')->delete();

        $data = array(
            ['id' => 1, 'name' => 'Percentage', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Percentage & BSA', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Fill in blank', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Fixed', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('dose_calculation_types')->insert($data);

        // Uncomment the below to wipe the table clean before populating
        DB::table('dose_modification_reasons')->delete();

        $data = array(
            ['id' => 1, 'name' => 'age/performance status', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'hematological toxicity', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'dermatological toxicity', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'liver function', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'renal function', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'diarrhea', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'fluid retention/effusion', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'CrCl', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'hypertension', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'proteinuria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'neurotoxicity', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('dose_modification_reasons')->insert($data);


                // Uncomment the below to wipe the table clean before populating
        DB::table('regimens')->delete();

        $tasks = array(
            ['id' => 1, 'name' => 'capecitabine , gemcitabine', 'code' => 'CAPEGEMC', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'mitotane', 'code' => 'MTTN', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'capecitabine', 'code' => 'CAPE', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'capecitabine , trastuzumab', 'code' => 'CAPE+TRAS', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'epirubicin, cisplatin, capecitabine', 'code' => 'ECX', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'imatinib', 'code' => 'IMAT', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'dexamethasone', 'code' => 'DEXA(HD)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        //// Uncomment the below to run the seeder
        DB::table('regimens')->insert($tasks);
        // Uncomment the below to wipe the table clean before populating
        DB::table('medications')->delete();

        $data = array(
            ['id' => 1, 'name' => 'capecitabine', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'prochlorperazine', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'loperamide', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'aprepitant', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'dexamethasone', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'goserelin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => '5-HT&#8323;', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 8, 'name' => 'calcium', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 9, 'name' => 'vitamin D', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 10, 'name' => 'imatinib', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 11, 'name' => 'mitotane', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 12, 'name' => 'glucocorticoid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 13, 'name' => 'fludrocortisone', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('medications')->insert($data);

        DB::table('diagnoses')->delete();

        $data = array(
            ['id' => 1, 'name' => 'Adrenal Cancer', 'diagnosis_secondary_category_id'=> 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Breast Cancer', 'diagnosis_secondary_category_id'=> 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Gastroesophageal Cancer', 'diagnosis_secondary_category_id'=> 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Gastrointestinal Stromal Tumour', 'diagnosis_secondary_category_id'=> 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Chronic Lymphocytic Leukemia', 'diagnosis_secondary_category_id'=> 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('diagnoses')->insert($data);


        Model::reguard();
    }
}
