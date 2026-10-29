<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionnaireVersion;
use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    public function run(): void
    {
        /*
         * ---------------------------------------------------------
         * Questionnaire version
         * ---------------------------------------------------------
         */

        $questionnaire = QuestionnaireVersion::updateOrCreate(
            [
<<<<<<< HEAD
                'nom' => 'Questionnaire du  caféiculteur - Version 1',
=======
                'nom' => 'Questionnaire ménage caféiculture - Version 1',
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],
            [
                'actif' => true,
            ]
        );

        /*
         * ---------------------------------------------------------
         * Questions
         * ---------------------------------------------------------
         */

        $questions = [
                [
                'code' => 'possede_vergers_cafe',

                'libelle' =>
                    'Possédez-vous des vergers de café ?',

                'section' => 'Exploitation caféicole',

                'type' => 'choix_unique',

                'options' => [
                    'Oui',
                    'Non',
                ],

                'obligatoire' => true,

                'autre_option' => false,

                'condition' => null,

                'termine_si' => 'Non',

                'ordre' => 1,
            ],
            [
                'code' => 'effectif_vergers',

                'libelle' =>
<<<<<<< HEAD
                    'Combien de vergers de café le Caféiculteur possède-t-il ?',
=======
                    'Combien de vergers de café le ménage possède-t-il ?',
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd

                'section' => 'Exploitation caféicole',

                'type' => 'numerique',

                'options' => null,

                'obligatoire' => true,

                'autre_option' => false,

                'condition' => null,

                'termine_si' => null,

                'ordre' => 2,
            ],

            [
<<<<<<< HEAD
                'code' => 'effectif_sous_vergers',

                'libelle' =>
                    'Combien de sous-vergers de café le Caféiculteur possède-t-il ?',

                'section' => 'Exploitation caféicole',

                'type' => 'numerique',

                'options' => null,

                'obligatoire' => true,

                'autre_option' => false,

                'condition' => null,

                'termine_si' => null,

                'ordre' => 3,
            ],

            [
=======
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
                'code' => 'pratiques_agricoles',

                'libelle' =>
                    'Quelles pratiques agricoles / traitements sont appliqués sur le café ?',

                'section' => 'Exploitation caféicole',

                'type' => 'choix_multiple',

                'options' => [
                    'Fertilisation organique',
                    'Fertilisation minérale',
                    'Traitements phytosanitaires',
                    'Taille des caféiers',
                    'Autres',
                ],

                'obligatoire' => true,

                'autre_option' => true,

                'condition' => null,

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 4,
=======
                'ordre' => 3,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],

            [
                'code' => 'cultures_associees',

                'libelle' =>
                    'Quelles cultures sont associées au café sur la parcelle, le cas échéant ?',

                'section' => 'Exploitation caféicole',

                'type' => 'choix_multiple',

                'options' => [
                    'Haricot',
                    'Maïs',
                    'Blé',
                    'Sorgho',
                    'Tabac',
                    'Gingembre',
                    'Igname',
                    'Petit pois',
                    'Colocase',
                    'Manioc',
                    'Patate douce',
                    'Niébé',
                    'Banane',
                    'Légumes',
                    'Canne à sucre',
                    'Autre',
                ],

                'obligatoire' => false,

                'autre_option' => true,

                'condition' => null,

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 5,
=======
                'ordre' => 4,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],

            [
                'code' => 'appartenance_cooperative',

                'libelle' =>
<<<<<<< HEAD
                    'Le Caféiculteur appartient-il à une coopérative café ou une association de caféiculteurs ?',
=======
                    'Le ménage appartient-il à une coopérative café ou une association de caféiculteurs ?',
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd

                'section' =>
                    'Appartenance associative et commercialisation',

                'type' => 'choix_unique',

                'options' => [
                    'Oui',
                    'Non',
                ],

                'obligatoire' => true,

                'autre_option' => false,

                'condition' => null,

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 6,
=======
                'ordre' => 5,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],

            [
                'code' => 'nom_cooperative',

                'libelle' =>
                    'Quel est le nom de la coopérative (ou autre association) ?',

                'section' =>
                    'Appartenance associative et commercialisation',

                'type' => 'texte',

                'options' => null,

                'obligatoire' => false,

                'autre_option' => false,

                /*
                 * Cette question n'est affichée que si
                 * appartenance_cooperative = Oui
                 */
                'condition' => [
                    'questionCode' => 'appartenance_cooperative',
                    'valeur' => 'Oui',
                ],

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 7,
=======
                'ordre' => 6,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],

            [
                'code' => 'lieux_vente',

                'libelle' =>
<<<<<<< HEAD
                    'Où le caféiculteur vend-il principalement son café ? (plusieurs choix possibles)',
=======
                    'Où le ménage vend-il principalement son café ? (plusieurs choix possibles)',
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd

                'section' =>
                    'Appartenance associative et commercialisation',

                'type' => 'choix_multiple',

                'options' => [
                    'Collecteur individuel (spéculateur)',
                    'Centre de collecte / centre de transit',
                    'Station de lavage (SDL)',
                    'Coopérative',
                    'Acheteur privé / collecteur',
                    'Marché local',
                    'Autres',
                ],

                'obligatoire' => true,

                'autre_option' => true,

                'condition' => null,

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 8,
=======
                'ordre' => 7,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],

            [
                'code' => 'connaissance_eudr',

                'libelle' =>
<<<<<<< HEAD
                    'Le Caféiculteur connaît-il le règlement européen EUDR interdisant la vente de café issu de la déforestation ?',
=======
                    'Le ménage connaît-il le règlement européen EUDR interdisant la vente de café issu de la déforestation ?',
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd

                'section' =>
                    'Appartenance associative et commercialisation',

                'type' => 'choix_unique',

                'options' => [
                    'Oui',
                    'Non',
                ],

                'obligatoire' => true,

                'autre_option' => false,

                'condition' => null,

                'termine_si' => null,

<<<<<<< HEAD
                'ordre' => 9,
=======
                'ordre' => 8,
>>>>>>> ae8f16f205eda2ec354ad5b108546b94a08545bd
            ],
        ];

        /*
         * ---------------------------------------------------------
         * Insert / update questions
         * ---------------------------------------------------------
         */

        foreach ($questions as $question) {
            Question::updateOrCreate(
                [
                    'code' => $question['code'],
                ],
                [
                    'questionnaire_version_id' => $questionnaire->id,
                    'libelle' => $question['libelle'],
                    'section' => $question['section'],
                    'type' => $question['type'],
                    'options' => $question['options'],
                    'obligatoire' => $question['obligatoire'],
                    'autre_option' => $question['autre_option'],
                    'condition' => $question['condition'],
                    'termine_si' => $question['termine_si'],
                    'ordre' => $question['ordre'],
                ]
            );
        }
    }
}
