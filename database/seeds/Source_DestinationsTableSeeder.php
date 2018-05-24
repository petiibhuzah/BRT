<?php

use App\Source_Destination;
use Illuminate\Database\Seeder;

class Source_DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1=[
            'source_destination_id'=>'SD001',
            'source_destination_name'=>'Kimara-Kivukoni',
            'image'=>'uploads/routes/SD001.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r2=[
            'source_destination_id'=>'SD002',
            'source_destination_name'=>'Kimara-Morocco',
            'image'=>'uploads/routes/SD002.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r3=[
            'source_destination_id'=>'SD003',
            'source_destination_name'=>'Kimara-Gerezani',
            'image'=>'uploads/routes/SD003.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r4=[
            'source_destination_id'=>'SD004',
            'source_destination_name'=>'Morocco-Gerezani',
            'image'=>'uploads/routes/SD004.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r5=[
            'source_destination_id'=>'SD005',
            'source_destination_name'=>'Morocco-Kivukoni',
            'image'=>'uploads/routes/SD005.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r6=[
            'source_destination_id'=>'SD006',
            'source_destination_name'=>'Morocco-Ubungo',
            'image'=>'uploads/routes/SD006.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r7=[
            'source_destination_id'=>'SD007',
            'source_destination_name'=>'Ubungo-Gerezani',
            'image'=>'uploads/routes/SD007.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        $r8=[
            'source_destination_id'=>'SD008',
            'source_destination_name'=>'Ubungo-Kivukoni',
            'image'=>'uploads/routes/SD008.png',
            'price'=>650,
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ];
        Source_Destination::create($r1);
        Source_Destination::create($r2);
        Source_Destination::create($r3);
        Source_Destination::create($r4);
        Source_Destination::create($r5);
        Source_Destination::create($r6);
        Source_Destination::create($r7);
        Source_Destination::create($r8);
    }
}
