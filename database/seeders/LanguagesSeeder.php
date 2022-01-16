<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->truncate();

        $languages = array(
            array(
                "name" => "Afrikans",
                "code" => "AF"),
            array(
                "name" => "Albanés",
                "code" => "SQ"),
            array(
                "name" => "Árabe",
                "code" => "AR"),
            array(
                "name" => "Armenio",
                "code" => "HY"),
            array(
                "name" => "Vasco",
                "code" => "EU"),
            array(
                "name" => "Bengalí",
                "code" => "BN"),
            array(
                "name" => "Búlgaro",
                "code" => "BG"),
            array(
                "name" => "Catalán",
                "code" => "CA"),
            array(
                "name" => "Camboyano",
                "code" => "KM"),
            array(
                "name" => "Chino (Mandarín)",
                "code" => "ZH"),
            array(
                "name" => "Croata",
                "code" => "HR"),
            array(
                "name" => "Checo",
                "code" => "CS"),
            array(
                "name" => "Danés",
                "code" => "DA"),
            array(
                "name" => "Holandés",
                "code" => "NL"),
            array(
                "name" => "Inglés",
                "code" => "EN"),
            array(
                "name" => "Estonio",
                "code" => "ET"),
            array(
                "name" => "Fiji",
                "code" => "FJ"),
            array(
                "name" => "Finlandés",
                "code" => "FI"),
            array(
                "name" => "Francés",
                "code" => "FR"),
            array(
                "name" => "Georgiano",
                "code" => "KA"),
            array(
                "name" => "Alemán",
                "code" => "DE"),
            array(
                "name" => "Griego",
                "code" => "EL"),
            array(
                "name" => "Gujarati",
                "code" => "GU"),
            array(
                "name" => "Hebreo",
                "code" => "HE"),
            array(
                "name" => "Hindi",
                "code" => "HI"),
            array(
                "name" => "Húngaro",
                "code" => "HU"),
            array(
                "name" => "Islandés",
                "code" => "IS"),
            array(
                "name" => "Indonesio",
                "code" => "ID"),
            array(
                "name" => "Irlandés",
                "code" => "GA"),
            array(
                "name" => "Italiano",
                "code" => "IT"),
            array(
                "name" => "Japonés",
                "code" => "JA"),
            array(
                "name" => "Javanés",
                "code" => "JW"),
            array(
                "name" => "Coreano",
                "code" => "KO"),
            array(
                "name" => "Latino",
                "code" => "LA"),
            array(
                "name" => "Letón",
                "code" => "LV"),
            array(
                "name" => "Lituano",
                "code" => "LT"),
            array(
                "name" => "Macedonio",
                "code" => "MK"),
            array(
                "name" => "Malayo",
                "code" => "MS"),
            array(
                "name" => "Malayalam",
                "code" => "ML"),
            array(
                "name" => "Maltés",
                "code" => "MT"),
            array(
                "name" => "Maorí",
                "code" => "MI"),
            array(
                "name" => "Marathi",
                "code" => "MR"),
            array(
                "name" => "Mongol",
                "code" => "MN"),
            array(
                "name" => "Nepalí",
                "code" => "NE"),
            array(
                "name" => "Noruego",
                "code" => "NO"),
            array(
                "name" => "Persa",
                "code" => "FA"),
            array(
                "name" => "Polaco",
                "code" => "PL"),
            array(
                "name" => "Portugués",
                "code" => "PT"),
            array(
                "name" => "Punjabi",
                "code" => "PA"),
            array(
                "name" => "Quechua",
                "code" => "QU"),
            array(
                "name" => "Romanian",
                "code" => "RO"),
            array(
                "name" => "Ruso",
                "code" => "RU"),
            array(
                "name" => "Samoano",
                "code" => "SM"),
            array(
                "name" => "Serbio",
                "code" => "SR"),
            array(
                "name" => "Eslovaco",
                "code" => "SK"),
            array(
                "name" => "Esloveno",
                "code" => "SL"),
            array(
                "name" => "Español",
                "code" => "ES"),
            array(
                "name" => "Swahili",
                "code" => "SW"),
            array(
                "name" => "Sueco ",
                "code" => "SV"),
            array(
                "name" => "Tamil",
                "code" => "TA"),
            array(
                "name" => "Tártaro",
                "code" => "TT"),
            array(
                "name" => "Telugu",
                "code" => "TE"),
            array(
                "name" => "Tailandés",
                "code" => "TH"),
            array(
                "name" => "Tibetano",
                "code" => "BO"),
            array(
                "name" => "Tonga",
                "code" => "TO"),
            array(
                "name" => "Turco",
                "code" => "TR"),
            array(
                "name" => "Ucraniano",
                "code" => "UK"),
            array(
                "name" => "Urdu",
                "code" => "UR"),
            array(
                "name" => "Uzbek",
                "code" => "UZ"),
            array(
                "name" => "Vietnamita",
                "code" => "VI"),
            array(
                "name" => "Galés",
                "code" => "CY"),
            array(
                "name" => "Xhosa",
                "code" => "XH"),

        );

        DB::table('languages')->insert($languages);

    }
}
