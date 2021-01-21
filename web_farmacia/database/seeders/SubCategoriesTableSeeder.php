<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subcategoria;
use App\Models\Categoria;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new Subcategoria();
        $subcategory->nombre = 'Cabello';
        $subcategory->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory->save();

        $subcategory2 = new Subcategoria();
        $subcategory2->nombre = 'Cicatrices';
        $subcategory2->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory2->save();

        $subcategory3 = new Subcategoria();
        $subcategory3->nombre = 'Corporal';
        $subcategory3->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory3->save();

        $subcategory4 = new Subcategoria();
        $subcategory4->nombre = 'Cosmética Natural';
        $subcategory4->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory4->save();

        $subcategory5 = new Subcategoria();
        $subcategory5->nombre = 'Facial';
        $subcategory5->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory5->save();

        $subcategory6 = new Subcategoria();
        $subcategory6->nombre = 'Hombres';
        $subcategory6->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory6->save();

        $subcategory7 = new Subcategoria();
        $subcategory7->nombre = 'Labial';
        $subcategory7->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory7->save();

        $subcategory8 = new Subcategoria();
        $subcategory8->nombre = 'Manos';
        $subcategory8->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory8->save();

        $subcategory9 = new Subcategoria();
        $subcategory9->nombre = 'Nutricosméticos';
        $subcategory9->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory9->save();

        $subcategory10 = new Subcategoria();
        $subcategory10->nombre = 'Ojos';
        $subcategory10->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory10->save();

        $subcategory11 = new Subcategoria();
        $subcategory11->nombre = 'Pies';
        $subcategory11->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory11->save();

        $subcategory12 = new Subcategoria();
        $subcategory12->nombre = 'Sol';
        $subcategory12->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory12->save();

        $subcategory13 = new Subcategoria();
        $subcategory13->nombre = 'Uñas';
        $subcategory13->categoria_id = Categoria::where('nombreCategoria', 'Cosmética y Belleza')->first()->id;
        $subcategory13->save();

        $subcategory14 = new Subcategoria();
        $subcategory14->nombre = 'Bebé';
        $subcategory14->categoria_id = Categoria::where('nombreCategoria', 'Perfumería')->first()->id;
        $subcategory14->save();

        $subcategory15 = new Subcategoria();
        $subcategory15->nombre = 'Hombre';
        $subcategory15->categoria_id = Categoria::where('nombreCategoria', 'Perfumería')->first()->id;
        $subcategory15->save();

        $subcategory16 = new Subcategoria();
        $subcategory16->nombre = 'Mujer';
        $subcategory16->categoria_id = Categoria::where('nombreCategoria', 'Perfumería')->first()->id;
        $subcategory16->save();

        $subcategory17 = new Subcategoria();
        $subcategory17->nombre = 'Antimosquitos';
        $subcategory17->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory17->save();

        $subcategory18 = new Subcategoria();
        $subcategory18->nombre = 'Botiquín';
        $subcategory18->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory18->save();

        $subcategory19 = new Subcategoria();
        $subcategory19->nombre = 'Pelo';
        $subcategory19->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory19->save();

        $subcategory20 = new Subcategoria();
        $subcategory20->nombre = 'Cuerpo';
        $subcategory20->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory20->save();

        $subcategory21 = new Subcategoria();
        $subcategory21->nombre = 'Cara';
        $subcategory21->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory21->save();

        $subcategory22 = new Subcategoria();
        $subcategory22->nombre = 'Geles';
        $subcategory22->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory22->save();

        $subcategory23 = new Subcategoria();
        $subcategory23->nombre = 'Íntima';
        $subcategory23->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory23->save();

        $subcategory24 = new Subcategoria();
        $subcategory24->nombre = 'Nasal';
        $subcategory24->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory24->save();

        $subcategory25 = new Subcategoria();
        $subcategory25->nombre = 'Ocular';
        $subcategory25->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory25->save();

        $subcategory26 = new Subcategoria();
        $subcategory26->nombre = 'Oídos';
        $subcategory26->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory26->save();

        $subcategory27 = new Subcategoria();
        $subcategory27->nombre = 'Óptica';
        $subcategory27->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory27->save();

        $subcategory28 = new Subcategoria();
        $subcategory28->nombre = 'Toallitas';
        $subcategory28->categoria_id = Categoria::where('nombreCategoria', 'Higiene y salud')->first()->id;
        $subcategory28->save();

        $subcategory29 = new Subcategoria();
        $subcategory29->nombre = 'Alimentación Ecológica BIO';
        $subcategory29->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory29->save();

        $subcategory30 = new Subcategoria();
        $subcategory30->nombre = 'Cuida Tu Cuerpo';
        $subcategory30->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory30->save();

        $subcategory31 = new Subcategoria();
        $subcategory31->nombre = 'Cuídate';
        $subcategory31->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory31->save();

        $subcategory32 = new Subcategoria();
        $subcategory32->nombre = 'Jalea Real';
        $subcategory32->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory32->save();

        $subcategory33 = new Subcategoria();
        $subcategory33->nombre = 'Niños';
        $subcategory33->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory33->save();

        $subcategory34 = new Subcategoria();
        $subcategory34->nombre = 'Nutrición Deportiva';
        $subcategory34->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory34->save();

        $subcategory35 = new Subcategoria();
        $subcategory35->nombre = 'Vitaminas y Minerales';
        $subcategory35->categoria_id = Categoria::where('nombreCategoria', 'Nutrición')->first()->id;
        $subcategory35->save();

        $subcategory36 = new Subcategoria();
        $subcategory36->nombre = 'Accesorios Infantiles';
        $subcategory36->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory36->save();

        $subcategory37 = new Subcategoria();
        $subcategory37->nombre = 'Alimentación';
        $subcategory37->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory37->save();

        $subcategory38 = new Subcategoria();
        $subcategory38->nombre = 'Aseo';
        $subcategory38->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory38->save();

        $subcategory39 = new Subcategoria();
        $subcategory39->nombre = 'Biberones';
        $subcategory39->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory39->save();

        $subcategory40 = new Subcategoria();
        $subcategory40->nombre = 'Chupetes';
        $subcategory40->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory40->save();

        $subcategory41 = new Subcategoria();
        $subcategory41->nombre = 'Esterilización y Limpieza';
        $subcategory41->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory41->save();

        $subcategory42 = new Subcategoria();
        $subcategory42->nombre = 'Higiene';
        $subcategory42->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory42->save();

        $subcategory43 = new Subcategoria();
        $subcategory43->nombre = 'Hora de comer';
        $subcategory43->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory43->save();

        $subcategory44 = new Subcategoria();
        $subcategory44->nombre = 'Juguetes';
        $subcategory44->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory44->save();

        $subcategory45 = new Subcategoria();
        $subcategory45->nombre = 'Pañales';
        $subcategory45->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory45->save();

        $subcategory46 = new Subcategoria();
        $subcategory46->nombre = 'Para mi mamá';
        $subcategory46->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory46->save();

        $subcategory47 = new Subcategoria();
        $subcategory47->nombre = 'Tetinas';
        $subcategory47->categoria_id = Categoria::where('nombreCategoria', 'Infantil')->first()->id;
        $subcategory47->save();

        $subcategory48 = new Subcategoria();
        $subcategory48->nombre = 'Gafas';
        $subcategory48->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory48->save();

        $subcategory49 = new Subcategoria();
        $subcategory49->nombre = 'Hidratación';
        $subcategory49->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory49->save();

        $subcategory50 = new Subcategoria();
        $subcategory50->nombre = 'Higiene Ocular';
        $subcategory50->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory50->save();

        $subcategory51 = new Subcategoria();
        $subcategory51->nombre = 'Lentes de Contacto';
        $subcategory51->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory51->save();

        $subcategory52 = new Subcategoria();
        $subcategory52->nombre = 'Ojos Cansados';
        $subcategory52->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory52->save();

        $subcategory53 = new Subcategoria();
        $subcategory53->nombre = 'Parches';
        $subcategory53->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory53->save();

        $subcategory54 = new Subcategoria();
        $subcategory54->nombre = 'Picores';
        $subcategory54->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory54->save();

        $subcategory55 = new Subcategoria();
        $subcategory55->nombre = 'Protectores Oculares';
        $subcategory55->categoria_id = Categoria::where('nombreCategoria', 'Óptica')->first()->id;
        $subcategory55->save();

        $subcategory56 = new Subcategoria();
        $subcategory56->nombre = 'Almohadillas';
        $subcategory56->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory56->save();

        $subcategory57 = new Subcategoria();
        $subcategory57->nombre = 'Apósitos';
        $subcategory57->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory57->save();

        $subcategory58 = new Subcategoria();
        $subcategory58->nombre = 'Bolsas de Frío';
        $subcategory58->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory58->save();

        $subcategory59 = new Subcategoria();
        $subcategory59->nombre = 'Cámaras de Inhalación';
        $subcategory59->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory59->save();

        $subcategory60 = new Subcategoria();
        $subcategory60->nombre = 'Guantes';
        $subcategory60->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory60->save();

        $subcategory61 = new Subcategoria();
        $subcategory61->nombre = 'Lesiones';
        $subcategory61->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory61->save();

        $subcategory62 = new Subcategoria();
        $subcategory62->nombre = 'Plantillas';
        $subcategory62->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory62->save();

        $subcategory63 = new Subcategoria();
        $subcategory63->nombre = 'Pulseras Antimareo';
        $subcategory63->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory63->save();

        $subcategory64 = new Subcategoria();
        $subcategory64->nombre = 'Tapones de Oídos';
        $subcategory64->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory64->save();

        $subcategory65 = new Subcategoria();
        $subcategory65->nombre = 'Tensiómetros';
        $subcategory65->categoria_id = Categoria::where('nombreCategoria', 'Ortopedia')->first()->id;
        $subcategory65->save();

        $subcategory66 = new Subcategoria();
        $subcategory66->nombre = 'Aceites Esenciales';
        $subcategory66->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory66->save();

        $subcategory67 = new Subcategoria();
        $subcategory67->nombre = 'Aparato Respiratorio';
        $subcategory67->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory67->save();

        $subcategory68 = new Subcategoria();
        $subcategory68->nombre = 'Aparato Urinario';
        $subcategory68->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory68->save();

        $subcategory69 = new Subcategoria();
        $subcategory69->nombre = 'Aumentar las Defensas';
        $subcategory69->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory69->save();

        $subcategory70 = new Subcategoria();
        $subcategory70->nombre = 'Belleza';
        $subcategory70->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory70->save();

        $subcategory71 = new Subcategoria();
        $subcategory71->nombre = 'Cansancio';
        $subcategory71->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory71->save();

        $subcategory72 = new Subcategoria();
        $subcategory72->nombre = 'Circulación';
        $subcategory72->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory72->save();

        $subcategory73 = new Subcategoria();
        $subcategory73->nombre = 'Cuida tu Línea';
        $subcategory73->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory73->save();

        $subcategory74 = new Subcategoria();
        $subcategory74->nombre = 'Golpes - Hematomas';
        $subcategory74->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory74->save();

        $subcategory75 = new Subcategoria();
        $subcategory75->nombre = 'Huesos - Articulaciones';
        $subcategory75->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory75->save();

        $subcategory76 = new Subcategoria();
        $subcategory76->nombre = 'Insomnio - Nerviosismo';
        $subcategory76->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory76->save();

        $subcategory77 = new Subcategoria();
        $subcategory77->nombre = 'Chica';
        $subcategory77->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory77->save();

        $subcategory78 = new Subcategoria();
        $subcategory78->nombre = 'Musculares';
        $subcategory78->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory78->save();

        $subcategory79 = new Subcategoria();
        $subcategory79->nombre = 'Procesos Infecciosos';
        $subcategory79->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory79->save();

        $subcategory80 = new Subcategoria();
        $subcategory80->nombre = 'Trastornos Digestivos';
        $subcategory80->categoria_id = Categoria::where('nombreCategoria', 'Herbolario')->first()->id;
        $subcategory80->save();

        $subcategory81 = new Subcategoria();
        $subcategory81->nombre = 'Descongestivos nasales';
        $subcategory81->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory81->save();

        $subcategory82 = new Subcategoria();
        $subcategory82->nombre = 'Fiebre y malestar';
        $subcategory82->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory82->save();

        $subcategory83 = new Subcategoria();
        $subcategory83->nombre = 'Mucosidad';
        $subcategory83->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory83->save();

        $subcategory84 = new Subcategoria();
        $subcategory84->nombre = 'Tos';
        $subcategory84->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory84->save();

        $subcategory85 = new Subcategoria();
        $subcategory85->nombre = 'Analgésicos';
        $subcategory85->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory85->save();

        $subcategory86 = new Subcategoria();
        $subcategory86->nombre = 'Antiinflamatorios';
        $subcategory86->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory86->save();

        $subcategory87 = new Subcategoria();
        $subcategory87->nombre = 'Suplementos Vitamínicos y Minerales';
        $subcategory87->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory87->save();

        $subcategory88 = new Subcategoria();
        $subcategory88->nombre = 'Mareos';
        $subcategory88->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory88->save();

        $subcategory89 = new Subcategoria();
        $subcategory89->nombre = 'Analgésicos y Antisépticos Bucales';
        $subcategory89->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory89->save();

        $subcategory90 = new Subcategoria();
        $subcategory90->nombre = 'Dolor/Irritación Garganta';
        $subcategory90->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory90->save();

        $subcategory91 = new Subcategoria();
        $subcategory91->nombre = 'Antisépticos piel';
        $subcategory91->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory91->save();

        $subcategory92 = new Subcategoria();
        $subcategory92->nombre = 'Antiverrugas';
        $subcategory92->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory92->save();

        $subcategory93 = new Subcategoria();
        $subcategory93->nombre = 'Emolientes y Protectores';
        $subcategory93->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory93->save();

        $subcategory94 = new Subcategoria();
        $subcategory94->nombre = 'Hongos y Herpes';
        $subcategory94->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory94->save();

        $subcategory95 = new Subcategoria();
        $subcategory95->nombre = 'Picaduras e Irritación';
        $subcategory95->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory95->save();

        $subcategory96 = new Subcategoria();
        $subcategory96->nombre = 'Alopecia';
        $subcategory96->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory96->save();

        $subcategory97 = new Subcategoria();
        $subcategory97->nombre = 'Ginecológicos';
        $subcategory97->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory97->save();

        $subcategory98 = new Subcategoria();
        $subcategory98->nombre = 'Antihistamínicos';
        $subcategory98->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory98->save();

        $subcategory99 = new Subcategoria();
        $subcategory99->nombre = 'Oído';
        $subcategory99->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory99->save();

        $subcategory100 = new Subcategoria();
        $subcategory100->nombre = 'Insomnio y Nervios';
        $subcategory100->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory100->save();

        $subcategory101 = new Subcategoria();
        $subcategory101->nombre = 'Dejar de Fumar';
        $subcategory101->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory101->save();

        $subcategory103 = new Subcategoria();
        $subcategory103->nombre = 'Ojo';
        $subcategory103->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory103->save();

        $subcategory104 = new Subcategoria();
        $subcategory104->nombre = 'Antihemorroidal';
        $subcategory104->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory104->save();

        $subcategory105 = new Subcategoria();
        $subcategory105->nombre = 'Antidiarreicos';
        $subcategory105->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory105->save();

        $subcategory106 = new Subcategoria();
        $subcategory106->nombre = 'Enema, laxante y supositorio';
        $subcategory106->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory106->save();

        $subcategory107 = new Subcategoria();
        $subcategory107->nombre = 'Acidez de estómago';
        $subcategory107->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory107->save();

        $subcategory108 = new Subcategoria();
        $subcategory108->nombre = 'Medicamento para los gases';
        $subcategory108->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory108->save();

        $subcategory109 = new Subcategoria();
        $subcategory109->nombre = 'Quemadores de grasa y nutrición';
        $subcategory109->categoria_id = Categoria::where('nombreCategoria', 'Medicamentos')->first()->id;
        $subcategory109->save();

        $subcategory110 = new Subcategoria();
        $subcategory110->nombre = 'Blanqueamiento Dental';
        $subcategory110->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory110->save();

        $subcategory111 = new Subcategoria();
        $subcategory111->nombre = 'Cepillos';
        $subcategory111->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory111->save();

        $subcategory112 = new Subcategoria();
        $subcategory112->nombre = 'Cepillos Eléctricos';
        $subcategory112->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory112->save();

        $subcategory113 = new Subcategoria();
        $subcategory113->nombre = 'Cepillos Interdentales';
        $subcategory113->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory113->save();

        $subcategory114 = new Subcategoria();
        $subcategory114->nombre = 'Colutorios';
        $subcategory114->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory114->save();

        $subcategory115 = new Subcategoria();
        $subcategory115->nombre = 'Cuidados Especiales';
        $subcategory115->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory115->save();

        $subcategory116 = new Subcategoria();
        $subcategory116->nombre = 'Dentífricos';
        $subcategory116->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory116->save();

        $subcategory117 = new Subcategoria();
        $subcategory117->nombre = 'Hilo Dental';
        $subcategory117->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory117->save();

        $subcategory118 = new Subcategoria();
        $subcategory118->nombre = 'Irrigadores Bucales';
        $subcategory118->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory118->save();

        $subcategory119 = new Subcategoria();
        $subcategory119->nombre = 'Ortodoncia';
        $subcategory119->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory119->save();

        $subcategory120 = new Subcategoria();
        $subcategory120->nombre = 'Prótesis Dentales';
        $subcategory120->categoria_id = Categoria::where('nombreCategoria', 'Dental')->first()->id;
        $subcategory120->save();

        $subcategory121 = new Subcategoria();
        $subcategory121->nombre = 'Accesorios';
        $subcategory121->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory121->save();

        $subcategory122 = new Subcategoria();
        $subcategory122->nombre = 'Falta de Deseo';
        $subcategory122->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory122->save();

        $subcategory123 = new Subcategoria();
        $subcategory123->nombre = 'Fertilidad';
        $subcategory123->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory123->save();

        $subcategory124 = new Subcategoria();
        $subcategory124->nombre = 'Lubricantes';
        $subcategory124->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory124->save();

        $subcategory125 = new Subcategoria();
        $subcategory125->nombre = 'Preservativos';
        $subcategory125->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory125->save();

        $subcategory126 = new Subcategoria();
        $subcategory126->nombre = 'Test Ovulación';
        $subcategory126->categoria_id = Categoria::where('nombreCategoria', 'Vida íntima')->first()->id;
        $subcategory126->save();

        $subcategory127 = new Subcategoria();
        $subcategory127->nombre = 'Botiquín y Productos Sanitarios';
        $subcategory127->categoria_id = Categoria::where('nombreCategoria', 'Parafarmacia')->first()->id;
        $subcategory127->save();

        $subcategory128 = new Subcategoria();
        $subcategory128->nombre = 'Higiene Bucal';
        $subcategory128->categoria_id = Categoria::where('nombreCategoria', 'Parafarmacia')->first()->id;
        $subcategory128->save();

        $subcategory130 = new Subcategoria();
        $subcategory130->nombre = 'Salud Sexual y Fertilidad';
        $subcategory130->categoria_id = Categoria::where('nombreCategoria', 'Parafarmacia')->first()->id;
        $subcategory130->save();

        $subcategory131 = new Subcategoria();
        $subcategory131->nombre = 'Aparatos Eléctricos';
        $subcategory131->categoria_id = Categoria::where('nombreCategoria', 'Parafarmacia')->first()->id;
        $subcategory131->save();
    }
}
