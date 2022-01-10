<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdImagesWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \Log::info('-1 AdImagesWithInitData::');

        \DB::table('ad_images')->delete();
        \Log::info('-2 AdImagesWithInitData::');

        \DB::table('ad_images')->insert(array(
            0 =>
                array(
                    'ad_id' => 1,
                    'image' => '61LaIRRF52LSL1500.jpg',
                    'main'  => true,
                    'info'  => 'Dell SE2416HX 23.8" Screen Lorem main image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
/*            1 =>
                array(
                    'ad_id' => 1,
                    'image' => '61cEZcXF8HLSL1200.jpg',
                    'main'  => false,
                    'info'  => 'Dell SE2416HX 23.8" Screen Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            2 =>
                array(
                    'ad_id' => 1,
                    'image' => '71I9WWCbYLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Dell SE2416HX 23.8" Screen Lorem one more image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            3 =>
                array(
                    'ad_id' => 1,
                    'image' => '71lwphN2TLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Dell SE2416HX 23.8" Screen Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            4 =>
                array(
                    'ad_id' => 1,
                    'image' => '71PcS5XdfSLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Lorem Dell SE2416HX 23.8" Screen amet, consectetur adipiscing elit, sed do eiusmod',
                ),*/




            5 =>
                array(
                    'ad_id' => 2,
                    'image' => '61utBFAUqzLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Dell S2415H 24-Inch Screen LED-Lit Monitor Lorem image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            6 =>
                array(
                    'ad_id' => 2,
                    'image' => '71PWoVj3lDLSL1500.jpg',
                    'main'  => true,
                    'info'  => 'Dell S2415H 24-Inch Screen LED-Lit Monitor Lorem one more image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            7 =>
                array(
                    'ad_id' => 2,
                    'image' => '71q8I2MzNGLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Lorem Dell S2415H 24-Inch Screen LED-Lit Monitor one more image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            8 =>
                array(
                    'ad_id' => 2,
                    'image' => '71QijU9YUcLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Dell S2415H 24-Inch Screen LED-Lit Monitor image amet, consectetur adipiscing elit, sed do eiusmod',
                ),




            10 =>
                array(
                    'ad_id' => 3,
                    'image' => '51t5p4hTuwLSL1000.jpg',
                    'main'  => false,
                    'info'  => 'Dell S2240M 21.5-Inch Screen LED-lit Monitor one more image Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

            11 =>
                array(
                    'ad_id' => 3,
                    'image' => '61utBFAUqzLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Dell S2240M 21.5-Inch Screen LED-lit Monitor Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            12 =>
                array(
                    'ad_id' => 3,
                    'image' => '61w8mbWY7DLSL1500.jpg',
                    'main'  => true,
                    'info'  => 'Dell S2240M 21.5-Inch Screen LED-lit Monitor Lorem image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            13 =>
                array(
                    'ad_id' => 3,
                    'image' => '61zSWxDfO4LSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Monitor Lorem Dell S2240M 21.5-Inch Screen LED-lit image amet, consectetur adipiscing elit, sed do eiusmod',
                ),




            14 =>
                array(
                    'ad_id' => 4,
                    'image' => '31A3-MdSqjL.jpg',
                    'main'  => false,
                    'info'  => 'Newest MSI 15.6" GP	P Monitor one more image Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

            15 =>
                array(
                    'ad_id' => 4,
                    'image' => '31Qnw7nURL.jpg',
                    'main'  => false,
                    'info'  => 'Newest MSI 15.6" GP	P Monitor Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            16 =>
                array(
                    'ad_id' => 4,
                    'image' => '31fzgzXsVTL.jpg',
                    'main'  => false,
                    'info'  => 'Newest MSI 15.6" GP	P Monitor Lorem image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            17 =>
                array(
                    'ad_id' => 4,
                    'image' => '41BOxOHSvxL.jpg',
                    'main'  => true,
                    'info'  => 'Newest MSI 15.6" GP	P image amet, consectetur adipiscing elit, sed do eiusmod',
                ),



            18 =>
                array(
                    'ad_id' => 5,
                    'image' => '41PoHJ1oWbL.jpg',
                    'main'  => true,
                    'info'  => 'MSI VR Ready GT83VR Titan SLI-024 18.4" Monitor one more image Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

            19 =>
                array(
                    'ad_id' => 5,
                    'image' => '41QT4QJwQxL.jpg',
                    'main'  => false,
                    'info'  => 'MSI VR Ready GT83VR Titan SLI-024 18.4" Monitor Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            20 =>
                array(
                    'ad_id' => 5,
                    'image' => '41lKt-nQbCL.jpg',
                    'main'  => false,
                    'info'  => 'MSI VR Ready GT83VR Titan SLI-024 18.4" Monitor Lorem image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            21 =>
                array(
                    'ad_id' => 5,
                    'image' => '71Txa1bbTrLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Monitor Lorem MSI VR Ready GT83VR Titan SLI-024 18.4" image amet, consectetur adipiscing elit, sed do eiusmod',
                ),




/*            22 =>
                array(
                    'ad_id' => 6,
                    'image' => '18oBWOUB3LSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Logitech C930e USB Desktop or Laptop Webcam Monitor one more image Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),*/

            23 =>
                array(
                    'ad_id' => 6,
                    'image' => '81X2u3AvlVLSL1500.jpg',
                    'main'  => true,
                    'info'  => 'Logitech C930e USB Desktop or Laptop Webcam Monitor Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),
/*            24 =>
                array(
                    'ad_id' => 6,
                    'image' => '81YjmtL2qPLSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Logitech C930e USB Desktop or Laptop Webcam Monitor Lorem image amet, consectetur adipiscing elit, sed do eiusmod',
                ),
            26 =>
                array(
                    'ad_id' => 6,
                    'image' => '81eMRmmlb9LSL1500.jpg',
                    'main'  => false,
                    'info'  => 'Monitor Lorem Logitech C930e USB Desktop or Laptop Webcam image amet, consectetur adipiscing elit, sed do eiusmod',
                ),*/




            27 =>
                array(
                    'ad_id' => 7,
                    'image' => 'racial-abuse-candidate.jpg',
                    'main'  => true,
                    'info'  => 'racial abuse candidate Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

            28 =>
                array(
                    'ad_id' => 8,
                    'image' => 'break-the-rule.jpg',
                    'main'  => true,
                    'info'  => 'Break the rule Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

            29 =>
                array(
                    'ad_id' => 9,
                    'image' => 'draft.webp',
                    'main'  => true,
                    'info'  => 'Draft Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),

        ));
        \Log::info('-3 AdImagesWithInitData::');

    }
}
