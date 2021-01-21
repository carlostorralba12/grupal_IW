<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DB;

use App\Models\Producto;
use App\Models\Subcategoria;

use Illuminate\Database\Eloquent\Collection;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Borramos los datos de la tabla
        //DB::table('productos')->delete();
        $producto1 = new Producto();
        $producto1->nombre = 'Vichy Dercos Champú Estimulante Anticaída (200 ml)';
        $producto1->pvp = '8.62';
        $producto1->descripcionCorta = 'Champú Estimulante Anticaída';
        $producto1->descripcionLarga = 'Champú con Aminexil, molécula cosmética anti caída cuyo objetivo es conseguir cabellos más fuertes y vigorosos. Para hombres y mujeres con caída de cabello de mínima a moderada';
        $producto1->referencia = '00000';
        $producto1->imagen = 'Cabello_1.PNG';
        $producto1->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto1->save();

        $producto2 = new Producto();
        $producto2->nombre = 'Ducray Anaphase Champu Crema Estimulante (150 ml)';
        $producto2->pvp = '11.80';
        $producto2->descripcionCorta = 'Champú Crema Estimulante';
        $producto2->descripcionLarga = 'Ducray Anaphase es un champú en crema ideal como complemento de los tratamientso anticaída. Preparar el cabello y le aporta vollumen fuerza y vigor. Activa la microcirculación, nutre el bulbo y favorece el masaje. Ducray Anaphase fortalece el cabello y lo preparar para los tratamientos anticaída';
        $producto2->referencia = '00001';
        $producto2->imagen = 'Cabello_2.PNG';
        $producto2->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre = 'Just for Men Colorante en Champú H-25 Castaño Claro (30 ml)';
        $producto3->pvp = '7.30';
        $producto3->descripcionCorta = 'Colorante en Champú';
        $producto3->descripcionLarga = 'Especialmente diseñado para cubrir las canas con resultados profesionales. Es fácil y rápido de aplicar y dura hasta 8 semanas o hasta que las canas vuelvan a crecer. Tono castaño claro';
        $producto3->referencia = '00002';
        $producto3->imagen = 'Cabello_3.PNG';
        $producto3->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre = 'Bioderma Nodé DS+ Champú Anticaspa (150 ml)';
        $producto4->pvp = '13.31';
        $producto4->descripcionCorta = 'Champú Anticaspa';
        $producto4->descripcionLarga = 'Champú anticaspa intensivo que ayuda a prevenir las recidivas de la caspa persistente y a aliviar los picores. Además, también ofrece una acción reforzada contra los estados descamativos graves';
        $producto4->referencia = '00003';
        $producto4->imagen = 'Cabello_4.PNG';
        $producto4->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->nombre = 'LetiAT4 Champú Piel Atópica (250 ml)';
        $producto5->pvp = '9.19';
        $producto5->descripcionCorta = 'Champú Piel Atópica';
        $producto5->descripcionLarga = 'Champú diseñado con una formula específica para la higiene diaria del cabello y cuero cabelludo con tendencia atópica. Ayuda a calmar la irritación, protege y calma el cuero cabelludo seco y además, proporciona brillo al cabello';
        $producto5->referencia = '00004';
        $producto5->imagen = 'Cabello_5.PNG';
        $producto5->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto5->save();

        $producto6 = new Producto();
        $producto6->nombre = 'Pilexil Champú Anticaída (300 ml)';
        $producto6->pvp = '8.86';
        $producto6->descripcionCorta = 'Champú Anticaída';
        $producto6->descripcionLarga = 'Champú de uso frecuente especialmente indicado para frenar la caída del cabello como tratamiento único o como complemento a otros tratamientos anticaída. Frena la ciada del cabello y también estimula su crecimiento';
        $producto6->referencia = '00005';
        $producto6->imagen = 'Cabello_6.PNG';
        $producto6->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto6->save();

        $producto7 = new Producto();
        $producto7->nombre = 'Complidermol Cabello Piel y Uñas – 50 Cápsulas';
        $producto7->pvp = '16.24';
        $producto7->descripcionCorta = 'Cabello Piel y Uñas';
        $producto7->descripcionLarga = 'Complemento nutricional con una formulación especialmente diseñada para aportar todos los elementos esenciales y nutrientes necesarios para que el metabolismo de la piel, el cabello y las uñas, se realice de la forma correcta';
        $producto7->referencia = '00006';
        $producto7->imagen = 'Cabello_7.PNG';
        $producto7->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto7->save();
 
        $producto8 = new Producto();
        $producto8->nombre = 'Klorane Bálsamo Fortificante y Estimulante con Quinina (200 ml)';
        $producto8->pvp = '11.88';
        $producto8->descripcionCorta = 'Bálsamo Fortificante y Estimulante';
        $producto8->descripcionLarga = 'Bálsamo especialmente formulado para cabellos fatigados o como complemento a los tratamientos anticaída. Con quinina y un conjunto vitamínico del grupo B,  refuerza la estructura del cabello y estimula su crecimiento';
        $producto8->referencia = '00007';
        $producto8->imagen = 'Cabello_8.PNG';
        $producto8->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto8->save();

        $producto9 = new Producto();
        $producto9->nombre = 'Blue Cap Champú (400 ml)';
        $producto9->pvp = '26.66';
        $producto9->descripcionCorta = 'Champú';
        $producto9->descripcionLarga = 'Champú especialmente elaborado para el tratamiento del cuero cabelludo afectado por caspa, disminuyendo el picor y la descamación. También ayuda en casos de  seborrea seca o seborrea grasa';
        $producto9->referencia = '00008';
        $producto9->imagen = 'Cabello_9.PNG';
        $producto9->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto9->save();

        $producto10 = new Producto();
        $producto10->nombre = 'Just for Men Colorante en Champú H-30 Castaño Medio';
        $producto10->pvp = '7.79';
        $producto10->descripcionCorta = 'Champú Colorante Men';
        $producto10->descripcionLarga = 'Especialmente diseñado para cubrir las canas con resultados profesionales. Es fácil y rápido de aplicar y dura hasta 8 semanas o hasta que las canas vuelvan a crecer. Tono castaño medio';
        $producto10->referencia = '00009';
        $producto10->imagen = 'Cabello_10.PNG';
        $producto10->subcategoria_id = Subcategoria::where('nombre', 'Cabello')->first()->id;
        $producto10->save();

        $producto11 = new Producto();
        $producto11->nombre = 'Trofolastin Reductor de Cicatrices Parche de (4 x 30) cm – 5 Unidades';
        $producto11->pvp = '63.23';
        $producto11->descripcionCorta = 'Reductor de Cicatrices Parche';
        $producto11->descripcionLarga = 'Parches para el tratamiento reductor de cicatrices hipertróficas y queloides. Ayuda a reducir tanto el relieve como la coloración de las cicatrices. También, protege las cicatrices de los rayos solares y son resistentes al agua';
        $producto11->referencia = '00010';
        $producto11->imagen = 'Cicatrices_1.PNG';
        $producto11->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto11->save();

        $producto12 = new Producto();
        $producto12->nombre = 'A-Derma Epitheliale AH Duo Crema Reparadora (40 ml)';
        $producto12->pvp = '10.64';
        $producto12->descripcionCorta = 'Crema Reparadora';
        $producto12->descripcionLarga = 'Crema reparadora que ayuda en el tratamiento de la piel sensible, frágil y quebradiza. Su formulación contiene Avena Rhealba que, junto con sus demás compuestos activos, actúa como cicatrizantes y regenera la piel';
        $producto12->referencia = '00011';
        $producto12->imagen = 'Cicatrices_2.PNG';
        $producto12->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto12->save();

        $producto13 = new Producto();
        $producto13->nombre = 'Indas Cicactiv Gel Cicatrizante (15 gr)';
        $producto13->pvp = '7.34';
        $producto13->descripcionCorta = 'Gel Cicatrizante';
        $producto13->descripcionLarga = 'Gel cicatrizante con Hialuronato de Zinc para el uso general como cicatrizante de heridas, rozaduras, cortes quemaduras. Además, protege contra las infecciones';
        $producto13->referencia = '00012';
        $producto13->imagen = 'Cicatrices_3.PNG';
        $producto13->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto13->save();

        $producto14 = new Producto();
        $producto14->nombre = 'Dermatix Gel de Silicona para Cicatrices (15 gr)';
        $producto14->pvp = '34.67';
        $producto14->descripcionCorta = 'Gel de Silicona para Cicatrices';
        $producto14->descripcionLarga = 'Dermatix es un gel transparente de uso tópico y secado rápido, que ayuda a prevenir la aparición de cicatrices en heridas recientes y a reducir cicatrices inmaduras prominentes. Clínicamente probado que suaviza, aplana, y reduce la cicatriz y además, alivia el dolor, picor y molestias';
        $producto14->referencia = '00013';
        $producto14->imagen = 'Cicatrices_4.PNG';
        $producto14->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto14->save();

        $producto15 = new Producto();
        $producto15->nombre = 'Kelador Crema Monodosis Estéril (5×5 ml)';
        $producto15->pvp = '32.97';
        $producto15->descripcionCorta = 'Crema Monodosis Estéril';
        $producto15->descripcionLarga = 'Crema para reducir la equimosis postquirúrgica. Ayuda a acelerar de manera intensa los procesos de reparación tisular y favorece la cicatrización. Se aplica directamente en el área lesionada y es adecuada para lesiones cutáneas';
        $producto15->referencia = '00014';
        $producto15->imagen = 'Cicatrices_5.PNG';
        $producto15->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto15->save();

        $producto16 = new Producto();
        $producto16->nombre = 'Urgo Apósito en Spray Filmogel (40 ml)';
        $producto16->pvp = '7.16';
        $producto16->descripcionCorta = 'Apósito en Spray';
        $producto16->descripcionLarga = 'Apósito en spray indicado en caso de heridas superficiales, cortes y arañazos. Se puede utilizar en todas las zonas del cuerpo, en especial en zonas complicadas como rodillas, codos o dedos. Apto para toda la familia y niños a partir de 3 años';
        $producto16->referencia = '00015';
        $producto16->imagen = 'Cicatrices_6.PNG';
        $producto16->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto16->save();

        $producto17 = new Producto();
        $producto17->nombre = 'LETI Stratamed Película Protectora (5 g)';
        $producto17->pvp = '22.21';
        $producto17->descripcionCorta = 'Película Protectora';
        $producto17->descripcionLarga = 'Gel semi-oclusivo, auto secante y transparente, que forma al secarse una película protectora para el cuidado avanzado de heridas. Es impermeable y además, hidrata y protege las zonas comprometidas de la piel';
        $producto17->referencia = '00016';
        $producto17->imagen = 'Cicatrices_7.PNG';
        $producto17->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto17->save();

        $producto18 = new Producto();
        $producto18->nombre = 'Halibut Cicatrices Pomada (50 g)';
        $producto18->pvp = '6.07';
        $producto18->descripcionCorta = 'Pomada para cicatrices';
        $producto18->descripcionLarga = 'Pomada cicatrizante que ayuda a cuidar, hidratar y reparar la piel en caso de cicatrices, tratamientos dermatológicos y tatuajes. Elaborada con vitamina A, centella asiática y pantenol';
        $producto18->referencia = '00017';
        $producto18->imagen = 'Cicatrices_8.PNG';
        $producto18->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto18->save();

        $producto19 = new Producto();
        $producto19->nombre = 'Bio-Oil Aceite Cicatrizante Antiestrías y Antimanchas (125 ml)';
        $producto19->pvp = '15.71';
        $producto19->descripcionCorta = 'Aceite cicatrizante antiestrías y antimanchas';
        $producto19->descripcionLarga = 'Aceite para el cuidado de la piel elaborado a base de extractos vegetales y vitaminas. Especialmente indicado para el tratamiento de cicatrices, estrías y manchas';
        $producto19->referencia = '00018';
        $producto19->imagen = 'Cicatrices_9.PNG';
        $producto19->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto19->save();

        $producto20 = new Producto();
        $producto20->nombre = 'Avène Cicalfate Emulsión Reparadora Post-Acto (40 ml)';
        $producto20->pvp = '9.99';
        $producto20->descripcionCorta = 'Avène Cicalfate Emulsión Reparadora';
        $producto20->descripcionLarga = 'Emulsión reparadora ligera con textura no grasa y de fácil aplicación. Ideal para aliviar la piel irritada después de un acto dermatológico superficial como un tratamiento con láser o peeling';
        $producto20->referencia = '00019';
        $producto20->imagen = 'Cicatrices_10.PNG';
        $producto20->subcategoria_id = Subcategoria::where('nombre', 'Cicatrices')->first()->id;
        $producto20->save();

        $producto21 = new Producto();
        $producto21->nombre = 'Eucerin pH5 Loción Enriquecida Piel Seca y Sensible (1000 ml)';
        $producto21->pvp = '24.56';
        $producto21->descripcionCorta = 'Loción piel seca y sensible';
        $producto21->descripcionLarga = 'Loción corporal enriquecida que aporta una hidratación duradera para pieles sensibles y muy secas. Además, mejora la resiliencia de la piel y reduce la sensibilidad';
        $producto21->referencia = '00020';
        $producto21->imagen = 'Corporal_1.PNG';
        $producto21->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto21->save();

        $producto22 = new Producto();
        $producto22->nombre = 'A-Derma Exomega Control Leche Emoliente (400 ml)';
        $producto22->pvp = '18.56';
        $producto22->descripcionCorta = 'Leche emoliente';
        $producto22->descripcionLarga = 'Leche emoliente que ayuda a aliviar la irritación y picor de la piel seca con tendencias atópicas. Ofrece hidratación al instante que calma y suaviza la piel. Adecuado para toda la familia: bebés, niños y adultos';
        $producto22->referencia = '00021';
        $producto22->imagen = 'Corporal_2.PNG';
        $producto22->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto22->save();

        $producto23 = new Producto();
        $producto23->nombre = 'Bepanthol Crema (30 gr)';
        $producto23->pvp = '6.62';
        $producto23->descripcionCorta = 'Crema';
        $producto23->descripcionLarga = 'Emulsión acuosa con un alto contenido de Pantenol, que favorece la regeneración de la piel y estabiliza la función barrera de la misma. Recomendada para personas de piel seca y con tendencia a la irritación por diversos factores como: tratamientos de estética, el frío, sustancias irritantes, etc';
        $producto23->referencia = '00022';
        $producto23->imagen = 'Corporal_3.PNG';
        $producto23->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto23->save();

        $producto24 = new Producto();
        $producto24->nombre = 'Weleda Aceite Corporal Suavizante de Rosa Mosqueta (100 ml)';
        $producto24->pvp = '19.36';
        $producto24->descripcionCorta = 'Aceite corporal suavizante';
        $producto24->descripcionLarga = 'Aceite corporal suavizante de rápida absorción, 100% natural, elaborado con aceite de semillas de rosa mosqueta y aceite de jojoba. Ayuda a combatir la sequedad, suaviza y alisa la piel, manteniendo la tonicidad de la piel';
        $producto24->referencia = '00023';
        $producto24->imagen = 'Corporal_4.PNG';
        $producto24->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto24->save();

        $producto25 = new Producto();
        $producto25->nombre = 'Sebamed Loción Enriquecida Piel Sensible (400 ml)';
        $producto25->pvp = '15.37';
        $producto25->descripcionCorta = 'Loción piel sensible';
        $producto25->descripcionLarga = 'Emulsión de aceite en agua que aporta humectación y protección. Es de fácil absorción y ayuda a nutrir la piel al restaurar el equilibrio hidrolipídico. También reduce la irritación y regenera y calma la piel seca y sensible al aumentar su elasticidad';
        $producto25->referencia = '00024';
        $producto25->imagen = 'Corporal_5.PNG';
        $producto25->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto25->save();

        $producto26 = new Producto();
        $producto26->nombre = 'Uriage Bariéderm Ungüento Aislante y Reparador (40 gr)';
        $producto26->pvp = '17.09';
        $producto26->descripcionCorta = 'Ungüento aislante y reparador';
        $producto26->descripcionLarga = 'Ungüento de textura flexible y maleable, que permite aislar, repara o suavizar las fisuras y grietas en la piel, tanto recientes como antiguas. Actúa como barrera, regenera a profundidad, suaviza y calma rápidamente';
        $producto26->referencia = '00025';
        $producto26->imagen = 'Corporal_6.PNG';
        $producto26->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto26->save();

        $producto27 = new Producto();
        $producto27->nombre = 'A-Derma Exomega Control Baño Calmante Anti-Rascado (250 ml)';
        $producto27->pvp = '12.86';
        $producto27->descripcionCorta = 'Control de baño calmante';
        $producto27->descripcionLarga = 'Tratamiento calmante para la piel irritada y sensible con tendencia atópica y/o muy secas. Actúa como complemento del producto de higiene, proporcionando relajación y limpieza';
        $producto27->referencia = '00026';
        $producto27->imagen = 'Corporal_7.PNG';
        $producto27->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto27->save();

        $producto28 = new Producto();
        $producto28->nombre = 'Weleda Crema Protectora Cara y Cuerpo BIO de Caléndula – Niños y Adultos (75 ml)';
        $producto28->pvp = '8.62';
        $producto28->descripcionCorta = 'Crema protectora cara y cuerpo';
        $producto28->descripcionLarga = 'Crema protectora para el cuidado diario de la cara y el cuerpo. Indicada para todo tipo de pieles, incluso para pieles sensibles. Su fórmula combina la caléndula con las virtudes nutritivas y protectoras del aceite de almendra dulce y la cera de abeja';
        $producto28->referencia = '00027';
        $producto28->imagen = 'Corporal_8.PNG';
        $producto28->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto28->save();

        $producto29 = new Producto();
        $producto29->nombre = 'Weleda Leche Corporal Suavizante de Rosa Mosqueta (100 ml)';
        $producto29->pvp = '11.79';
        $producto29->descripcionCorta = 'Leche corporal';
        $producto29->descripcionLarga = 'Leche corporal ligera elaborada a base de aceite de rosa mosqueta, que aporta hidratación inmediata y ayuda a mantener la elasticidad de la piel. Ofrece una hidratación intensiva, suaviza y alisa la piel';
        $producto29->referencia = '00028';
        $producto29->imagen = 'Corporal_9.PNG';
        $producto29->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto29->save();

        $producto30 = new Producto();
        $producto30->nombre = 'Mepentol Solución con Pulverizador (100 ml)';
        $producto30->pvp = '34.67';
        $producto30->descripcionCorta = 'Solución con pulverizador';
        $producto30->descripcionLarga = 'Especialmente indicado para la prevención y tratamiento de úlceras por presión de estadio I y II';
        $producto30->referencia = '00029';
        $producto30->imagen = 'Corporal_10.PNG';
        $producto30->subcategoria_id = Subcategoria::where('nombre', 'Corporal')->first()->id;
        $producto30->save();

        $producto31 = new Producto();
        $producto31->nombre = 'Weleda Bálsamo para el Afeitado (100 ml)';
        $producto31->pvp = '13.34';
        $producto31->descripcionCorta = 'Bálsamo para el afeitado';
        $producto31->descripcionLarga = 'Bálsamo ligero para el afeitado con efecto calmante para pieles normales, secas y sensibles. Es de rápida absorción y ofrece un fresco y suave acabado a un afeitado húmedo o seco. Con manteca de karité y extractos de manzanilla y mirra';
        $producto31->referencia = '00030';
        $producto31->imagen = 'Cosmetica_1.PNG';
        $producto31->subcategoria_id = Subcategoria::where('nombre', 'Cosmética Natural')->first()->id;
        $producto31->save();

        $producto32 = new Producto();
        $producto32->nombre = 'Weleda Gel de Ducha Cremoso de Citrus Limone (200 ml)';
        $producto32->pvp = '5.87';
        $producto32->descripcionCorta = 'Gel de ducha cremoso';
        $producto32->descripcionLarga = 'Gel de ducha cremoso con limón, ideal para piles normales, que aporta energía, frescor y suavidad para la piel. También, ofrece una limpieza suave, sin jabón y es 100% biodegradable';
        $producto32->referencia = '00031';
        $producto32->imagen = 'Cosmetica_2.PNG';
        $producto32->subcategoria_id = Subcategoria::where('nombre', 'Cosmética Natural')->first()->id;
        $producto32->save();

        $producto33 = new Producto();
        $producto33->nombre = 'Weleda Jabón Vegetal de Caléndula (100 gr)';
        $producto33->pvp = '4.44';
        $producto33->descripcionCorta = 'Jabón vegetal';
        $producto33->descripcionLarga = 'Jabón vegetal que limpia suavemente sin resecar la piel y preserva sus funciones naturales. Ideal par pieles sensibles y delicadas, así como para el aseo de niños. Con extractos de caléndula y manzanilla';
        $producto33->referencia = '00032';
        $producto33->imagen = 'Cosmetica_3.PNG';
        $producto33->subcategoria_id = Subcategoria::where('nombre', 'Cosmética Natural')->first()->id;
        $producto33->save();

        $producto34 = new Producto();
        $producto34->nombre = 'Weleda Desodorante Spray de Citrus (100 ml)';
        $producto34->pvp = '10.47';
        $producto34->descripcionCorta = 'Desodorante spray';
        $producto34->descripcionLarga = 'Desodorante en spray que neutraliza los olores corporales desagradables por 24 horas sin alterar las funciones de regulación natural de la piel. Es 100% natural, no contiene sales de aluminio y su aroma cítrico refrescante lo hace ideal para hombres y mujeres';
        $producto34->referencia = '00033';
        $producto34->imagen = 'Cosmetica_4.PNG';
        $producto34->subcategoria_id = Subcategoria::where('nombre', 'Cosmética Natural')->first()->id;
        $producto34->save();

        $producto35 = new Producto();
        $producto35->nombre = 'Martiderm Pigment Zero DSP-Crema FPS 50+ (40 ml)';
        $producto35->pvp = '23.72';
        $producto35->descripcionCorta = 'Pigment zero';
        $producto35->descripcionLarga = 'Crema despigmentante que ayuda a reducir y prevenir las hiperpigmentaciones. Elaborada con un elevado facto de protección solar y “Film Forming” para manchas generalizadas';
        $producto35->referencia = '00034';
        $producto35->imagen = 'Facial_1.PNG';
        $producto35->subcategoria_id = Subcategoria::where('nombre', 'Facial')->first()->id;
        $producto35->save();

        $producto36 = new Producto();
        $producto36->nombre = 'Germinal Acción Inmediata Efecto Flash – 5 Ampollas';
        $producto36->pvp = '10.64';
        $producto36->descripcionCorta = 'Ampollas acción inmediata';
        $producto36->descripcionLarga = 'Ampollas de acción inmediata que ofrecen un efecto lifting instantáneo durante al menos 8 horas. Son un poderoso vitalizador de tejidos que combate las huellas de la fatiga en el rostro';
        $producto36->referencia = '00035';
        $producto36->imagen = 'Facial_2.PNG';
        $producto36->subcategoria_id = Subcategoria::where('nombre', 'Facial')->first()->id;
        $producto36->save();

        $producto37 = new Producto();
        $producto37->nombre = 'Martiderm The Originals Proteos Liposome – 30 Ampollas';
        $producto37->pvp = '32.56';
        $producto37->descripcionCorta = 'Ampollas proteos';
        $producto37->descripcionLarga = 'Ampolla especialmente formulada con proteoglicanos, vitamina C y libre de aceites, que ayuda a hidratar y reafirmar las pieles mixtas, grasas, sensibles y reactivas. Además, también ayuda a disminuir las arrugas y le proporciona luminosidad';
        $producto37->referencia = '00036';
        $producto37->imagen = 'Facial_3.PNG';
        $producto37->subcategoria_id = Subcategoria::where('nombre', 'Facial')->first()->id;
        $producto37->save();

        $producto38 = new Producto();
        $producto38->nombre = 'Avène Men Bálsamo para Después del Afeitado (75 ml)';
        $producto38->pvp = '16.22';
        $producto38->descripcionCorta = 'Bálsamo para después del afeitado';
        $producto38->descripcionLarga = 'Bálsamo hidratante y reparador que alivia de forma inmediata las irritaciones y previene el riesgo bacteriano asociado a mini cortes que pueden ocurrir durante el afeitado. No contiene alcohol, ni parabenos';
        $producto38->referencia = '00037';
        $producto38->imagen = 'Hombres_1.PNG';
        $producto38->subcategoria_id = Subcategoria::where('nombre', 'Hombres')->first()->id;
        $producto38->save();

        $producto39 = new Producto();
        $producto39->nombre = 'Vichy Homme Desodorante Roll-On Piel Sensible (50 ml)';
        $producto39->pvp = '8.28';
        $producto39->descripcionCorta = 'Desodorante Roll-On';
        $producto39->descripcionLarga = 'Desodorante anti-transpirante 72H especialmente formulado para hombres con piel sensible que buscan un producto eficaz y de larga duración';
        $producto39->referencia = '00038';
        $producto39->imagen = 'Hombres_2.PNG';
        $producto39->subcategoria_id = Subcategoria::where('nombre', 'Hombres')->first()->id;
        $producto39->save();

        $producto40 = new Producto();
        $producto40->nombre = 'Just for Men Colorante en Champú H-25 Castaño Claro';
        $producto40->pvp = '7.30';
        $producto40->descripcionCorta = 'Champú colorante castaño claro';
        $producto40->descripcionLarga = 'Especialmente diseñado para cubrir las canas con resultados profesionales. Es fácil y rápido de aplicar y dura hasta 8 semanas o hasta que las canas vuelvan a crecer. Tono castaño claro';
        $producto40->referencia = '00039';
        $producto40->imagen = 'Hombres_3.PNG';
        $producto40->subcategoria_id = Subcategoria::where('nombre', 'Hombres')->first()->id;
        $producto40->save();

        $producto41 = new Producto();
        $producto41->nombre = 'Neutrogena Fórmula Noruega Protector Labial SPF 20 (4,8 gr)';
        $producto41->pvp = '3.12';
        $producto41->descripcionCorta = 'Protector labial';
        $producto41->descripcionLarga = 'Protector labial incoloro, adecuado para toda la familia. Protege los labios del Sol y ofrece excelentes resultados contra la sequedad y la formación de grietas';
        $producto41->referencia = '00040';
        $producto41->imagen = 'Labial_1.PNG';
        $producto41->subcategoria_id = Subcategoria::where('nombre', 'Labial')->first()->id;
        $producto41->save();

        $producto42 = new Producto();
        $producto42->nombre = 'Carmex Bálsamo Hidratante en Tarro Sabor a Cereza (7,5 gr)';
        $producto42->pvp = '3.84';
        $producto42->descripcionCorta = 'Bálsamo hidratante';
        $producto42->descripcionLarga = 'Bálsamo de labios elaborado con manteca de cacao y la lanolina, humectantes naturales que ayudan a recuperar la hidratación perdida en los labios y a prevenir la sequedad y las grietas. Con un agradable sabor a cereza';
        $producto42->referencia = '00041';
        $producto42->imagen = 'Labial_2.PNG';
        $producto42->subcategoria_id = Subcategoria::where('nombre', 'Labial')->first()->id;
        $producto42->save();

        $producto43 = new Producto();
        $producto43->nombre = 'LETIbalm Stick Reparador Nariz y Labios (4 gr)';
        $producto43->pvp = '4.23';
        $producto43->descripcionCorta = 'Stick reparador nariz y labios';
        $producto43->descripcionLarga = 'Bálsamo reparador con una formula única para el cuidado de la piel de la nariz y los labios en formato stick grueso. Ayuda a calmar, regenerar y reparar los labios secos y agrietados y las irritaciones causadas al sonarse la nariz';
        $producto43->referencia = '00042';
        $producto43->imagen = 'Labial_3.PNG';
        $producto43->subcategoria_id = Subcategoria::where('nombre', 'Labial')->first()->id;
        $producto43->save();

        $producto44 = new Producto();
        $producto44->nombre = 'Neutrogena Fórmula Noruega Crema de Manos Concentrada Sin Perfume (50 ml)';
        $producto44->pvp = '5.65';
        $producto44->descripcionCorta = 'Crema de manos concentrada';
        $producto44->descripcionLarga = 'Crema de manos concentrada, con la misma eficacia y las mismas aplicaciones que la versión clásica, pero sin perfume. Ideal para las pieles más sensibles, ya que ofrece una mayor tolerancia';
        $producto44->referencia = '00043';
        $producto44->imagen = 'Manos_1.PNG';
        $producto44->subcategoria_id = Subcategoria::where('nombre', 'Manos')->first()->id;
        $producto44->save();

        $producto45 = new Producto();
        $producto45->nombre = 'Heliocare Ultra D Cápsulas Oral – 30 Cápsulas';
        $producto45->pvp = '23.35';
        $producto45->descripcionCorta = 'Cápsulas de fotoprotección oral';
        $producto45->descripcionLarga = 'Cápsulas de fotoprotección oral, antioxidantes y reparadoras del daño solar. Su fórmula combina un ingrediente especial patentado de la marca, con vitamina D, C y E, licopeno y luteína';
        $producto45->referencia = '00044';
        $producto45->imagen = 'Nutricosmeticos_1.PNG';
        $producto45->subcategoria_id = Subcategoria::where('nombre', 'Nutricosméticos')->first()->id;
        $producto45->save();

        $producto46 = new Producto();
        $producto46->nombre = 'Thea Lephasol Loción Limpiadora (100 ml)';
        $producto46->pvp = '11.53';
        $producto46->descripcionCorta = 'Loción limpiadora';
        $producto46->descripcionLarga = 'Loción limpiadora de uso externo para la higiene diaria de párpados, pestañas y borde palpebral.  Puede ser utilizada con o sin aclarado';
        $producto46->referencia = '00045';
        $producto46->imagen = 'Ojos_1.PNG';
        $producto46->subcategoria_id = Subcategoria::where('nombre', 'Ojos')->first()->id;
        $producto46->save();

        $producto47 = new Producto();
        $producto47->nombre = 'Dr. Scholl Crema Dureza Piel Endurecida (60 ml)';
        $producto47->pvp = '8.37';
        $producto47->descripcionCorta = 'Crema durezas pies';
        $producto47->descripcionLarga = 'Crema de absorción rápida y clínicamente probada, que ayuda a reducir la piel endurecida de los pies en 7 días. Con textura no grasa y sin perfume';
        $producto47->referencia = '00046';
        $producto47->imagen = 'Pies_1.PNG';
        $producto47->subcategoria_id = Subcategoria::where('nombre', 'Pies')->first()->id;
        $producto47->save();

        $producto48 = new Producto();
        $producto48->nombre = 'Comodynes Self-Tanning Natural Toallitas Autobronceadoras – 8 Unidades';
        $producto48->pvp = '8.81';
        $producto48->descripcionCorta = 'Toallitas autobronceadoras';
        $producto48->descripcionLarga = 'Toallitas autobronceadoras que proporcionan un bronceado natural y duradero en tan solo 3 horas. Ayuda a broncear de forma natural y uniforme, la piel de la cara, cuello y escote de forma segura y limpia';
        $producto48->referencia = '00047';
        $producto48->imagen = 'Sol_1.PNG';
        $producto48->subcategoria_id = Subcategoria::where('nombre', 'Sol')->first()->id;
        $producto48->save();

        $producto49 = new Producto();
        $producto49->nombre = 'NUK Tijeras para Bebé';
        $producto49->pvp = '4.24';
        $producto49->descripcionCorta = 'Tijeras para bebé';
        $producto49->descripcionLarga = 'Tijeras con hojas de acero inoxidable que garantizan la máxima higiene y precisión para cortar las uñas del bebé de manera segura y precisa. Con puntas redondeadas y tapa protectora';
        $producto49->referencia = '00048';
        $producto49->imagen = 'Uñas_1.PNG';
        $producto49->subcategoria_id = Subcategoria::where('nombre', 'Uñas')->first()->id;
        $producto49->save();

        $producto50 = new Producto();
        $producto50->nombre = 'Suavinex Baby Cologne Colonia Infantil (100 ml)';
        $producto50->pvp = '9.10';
        $producto50->descripcionCorta = 'Colonia infantil';
        $producto50->descripcionLarga = 'Colonia unisex para bebés, con una composición baja en alcohol, que perfuma y refresca la piel del bebé con notas de frutos cítricos, flores blancas y almizcles';
        $producto50->referencia = '00049';
        $producto50->imagen = 'Bebe_1.PNG';
        $producto50->subcategoria_id = Subcategoria::where('nombre', 'Bebé')->first()->id;
        $producto50->save();

        $producto51 = new Producto();
        $producto51->nombre = 'IAP Pharma Perfume para Hombre Nº 65 (150 ml)';
        $producto51->pvp = '8.86';
        $producto51->descripcionCorta = 'Perfume para hombre';
        $producto51->descripcionLarga = 'Fragancia masculina ambarada que ofrece un aroma fresco que transmite energía y vitalidad';
        $producto51->referencia = '00050';
        $producto51->imagen = 'Hombre_1.PNG';
        $producto51->subcategoria_id = Subcategoria::where('nombre', 'Hombre')->first()->id;
        $producto51->save();

        $producto52 = new Producto();
        $producto52->nombre = 'IAP Pharma Perfume para Mujer Nº 30 (150 ml)';
        $producto52->pvp = '8.86';
        $producto52->descripcionCorta = 'Perfume para mujer';
        $producto52->descripcionLarga = 'Perfume femenino de la familia Chipre con nota de fondo cálida, erógena y rica; con acordes frescos y afrutados que despiertan la energía positiva';
        $producto52->referencia = '00051';
        $producto52->imagen = 'Mujer_1.PNG';
        $producto52->subcategoria_id = Subcategoria::where('nombre', 'Mujer')->first()->id;
        $producto52->save();

        $producto53 = new Producto();
        $producto53->nombre = 'AntiMosquitos ISDIN Xtrem Repelente de Insectos (75 ml)';
        $producto53->pvp = '9.67';
        $producto53->descripcionCorta = 'Repelente de insectos';
        $producto53->descripcionLarga = 'Repelente de insectos especialmente indicado para los viajes a zonas tropicales y subtropicales, así como en zonas con plagas de mosquitos. Con excelente perfil de eficacia y seguridad y un aroma suave';
        $producto53->referencia = '00052';
        $producto53->imagen = 'Antimosquitos_1.PNG';
        $producto53->subcategoria_id = Subcategoria::where('nombre', 'Antimosquitos')->first()->id;
        $producto53->save();

        $producto54 = new Producto();
        $producto54->nombre = 'Salvelox Easy To Go Resistente al Agua -12 Unidades';
        $producto54->pvp = '2.23';
        $producto54->descripcionCorta = 'Apósito liso y flexible';
        $producto54->descripcionLarga = 'Apósito liso y flexible, resiste al agua y a la suciedad, fáciles de llevar a cualquier lugar. Permite la transpiración de la piel y tiene una excelente adhesión';
        $producto54->referencia = '00053';
        $producto54->imagen = 'Botiquin_1.PNG';
        $producto54->subcategoria_id = Subcategoria::where('nombre', 'Botiquin')->first()->id;
        $producto54->save();

        $producto55 = new Producto();
        $producto55->nombre = 'Nosa Attack Loción Desprende Liendres (150 ml)';
        $producto55->pvp = '9.75';
        $producto55->descripcionCorta = 'Loción antipiojos';
        $producto55->descripcionLarga = 'Loción especialmente formulada para ayudar a desprender las liendres adheridas al cabello y peinarlo con facilidad. Contiene Vinagre de Quassia y Dimeticona, que impiden que la liendre se pegue al pelo y a su vez, lo protege y aporta suavidad';
        $producto55->referencia = '00054';
        $producto55->imagen = 'Pelo_1.PNG';
        $producto55->subcategoria_id = Subcategoria::where('nombre', 'Pelo')->first()->id;
        $producto55->save();

        $producto56 = new Producto();
        $producto56->nombre = 'Halley Repelente de Insectos en Spray (150 ml)';
        $producto56->pvp = '6.61';
        $producto56->descripcionCorta = 'Repelente de insectos';
        $producto56->descripcionLarga = 'Repelente de insectos en spray. Es segur y uy eficaz frente a todo tipo de insectos; mosquitos tropicales (incluido el mosquito Tigre), avispas, tábanos, moscas, garrapatas y chinches';
        $producto56->referencia = '00055';
        $producto56->imagen = 'Cuerpo_1.PNG';
        $producto56->subcategoria_id = Subcategoria::where('nombre', 'Cuerpo')->first()->id;
        $producto56->save();

        $producto57 = new Producto();
        $producto57->nombre = 'Bioderma Sensibio H2O Solución Micelar para Piel Sensible (250 ml)';
        $producto57->pvp = '8.89';
        $producto57->descripcionCorta = 'Agua micelar para piel sensible';
        $producto57->descripcionLarga = 'Agua Micelar dermatológica especialmente diseñada para limpiar, desmaquillar y calmar las pieles sensibles. Ademas, ayuda a limitar la aparición de imperfecciones y previene la acumulación de sebo';
        $producto57->referencia = '00056';
        $producto57->imagen = 'Cara_1.PNG';
        $producto57->subcategoria_id = Subcategoria::where('nombre', 'Cara')->first()->id;
        $producto57->save();

        $producto58 = new Producto();
        $producto58->nombre = 'CeraVe Gel Limpiador Espumoso para Piel Normal a Grasa (473 ml)';
        $producto58->pvp = '10.14';
        $producto58->descripcionCorta = 'Gel limpiador para piel normal a grasa';
        $producto58->descripcionLarga = 'Gel espumoso que crea una espuma suave para limpiar profundamente la piel del rostro y el cuerpo. Elaborada con 3 ceramidas esenciales y ácido hialurónico, elimina de forma eficaz el exceso de grasa, la suciedad y el maquillaje';
        $producto58->referencia = '00057';
        $producto58->imagen = 'Geles_1.PNG';
        $producto58->subcategoria_id = Subcategoria::where('nombre', 'Geles')->first()->id;
        $producto58->save();

        $producto59 = new Producto();
        $producto59->nombre = 'Indasec Discreet Normal Compresas – 24 Unidades';
        $producto59->pvp = '4.39';
        $producto59->descripcionCorta = 'Compresas normales';
        $producto59->descripcionLarga = 'Compresas ultra finas y discretas para pérdidas moderadas de orina, con doble barrera antiescapes, canales exclusivos y lámina de rápida difusión para mayor comodidad y seguridad';
        $producto59->referencia = '00058';
        $producto59->imagen = 'Intima_1.PNG';
        $producto59->subcategoria_id = Subcategoria::where('nombre', 'Íntima')->first()->id;
        $producto59->save();

        $producto60 = new Producto();
        $producto60->nombre = 'Nasalmer Hipertónico Adultos (125 ml)';
        $producto60->pvp = '5.79';
        $producto60->descripcionCorta = 'Spray nasal';
        $producto60->descripcionLarga = 'Spray nasal para adultos y niños mayores de 12 años. Ayuda a descongestionar las fosas nasales y restaurar la respiración, a recudir la inflamación mediante su efecto osmótico y regenerar la mucosa nasal';
        $producto60->referencia = '00059';
        $producto60->imagen = 'Nasal_1.PNG';
        $producto60->subcategoria_id = Subcategoria::where('nombre', 'Nasal')->first()->id;
        $producto60->save();

        $producto61 = new Producto();
        $producto61->nombre = 'Aquoral Noche pomada Ocular Lubricante (5 gr)';
        $producto61->pvp = '10.71';
        $producto61->descripcionCorta = 'Pomada ocular';
        $producto61->descripcionLarga = 'Pomada ocular con vitamina A, que proporciona un alivio duradero a la sequedad ocular causada por la irritación, quemazón y enrojecimiento debido a diversos factores como: ambientales, al esfuerzo visual prolongado o el uso de lentes de contacto';
        $producto61->referencia = '00060';
        $producto61->imagen = 'Ocular_1.PNG';
        $producto61->subcategoria_id = Subcategoria::where('nombre', 'Ocular')->first()->id;
        $producto61->save();

        $producto62 = new Producto();
        $producto62->nombre = 'Dryotix Spray para el Oído (30 ml)';
        $producto62->pvp = '9.17';
        $producto62->descripcionCorta = 'Spray para el oído';
        $producto62->descripcionLarga = 'Spray específicamente indicado para secar y eliminar el exceso de humedad en el oído. Además, ayuda a prevenir infecciones y molestias como la otitis. Es eficaz, fácil de usar y apto para niños y adultos';
        $producto62->referencia = '00061';
        $producto62->imagen = 'Oidos_1.PNG';
        $producto62->subcategoria_id = Subcategoria::where('nombre', 'Oídos')->first()->id;
        $producto62->save();

        $producto63 = new Producto();
        $producto63->nombre = 'Belcils Med Gotas Oftálmicas Hidratantes (10 ml)';
        $producto63->pvp = '7.60';
        $producto63->descripcionCorta = 'Gotas oftálmicas hidratantes';
        $producto63->descripcionLarga = 'Solución oftálmica que hidrata, previene la sequedad y alivia las molestias e irritaciones en el ojo de forma rápida y efectiva';
        $producto63->referencia = '00062';
        $producto63->imagen = 'Optica_1.PNG';
        $producto63->subcategoria_id = Subcategoria::where('nombre', 'Óptica')->first()->id;
        $producto63->save();

        $producto64 = new Producto();
        $producto64->nombre = 'Suavinex Toallitas Higienizantes para Manos – 10 Unidades';
        $producto64->pvp = '1.57';
        $producto64->descripcionCorta = 'Toallitas higienizantes para manos';
        $producto64->descripcionLarga = 'Estas son toallitas que limpian eficazmente las manos, ideal para padres que requieren soluciones versátiles. Su efectividad está asegurada gracias a su fórmula que incluye Clorhexidina y cloruro de benzalconio, activos que desnaturalizan las proteínas de los virus';
        $producto64->referencia = '00063';
        $producto64->imagen = 'Toallitas_1.PNG';
        $producto64->subcategoria_id = Subcategoria::where('nombre', 'Toallitas')->first()->id;
        $producto64->save();

        $producto65 = new Producto();
        $producto65->nombre = 'Cuajo Líquido Natural (50 cc)';
        $producto65->pvp = '2.89';
        $producto65->descripcionCorta = 'Cuajo natural';
        $producto65->descripcionLarga = 'Cuajo líquido con un alto contenido de quimosina ideal para obtener un cuajado rápido y consistente y hacer queso fresco u otros tipos de quesos';
        $producto65->referencia = '00064';
        $producto65->imagen = 'Alimentacion_1.PNG';
        $producto65->subcategoria_id = Subcategoria::where('nombre', 'Alimentación Ecológica BIO')->first()->id;
        $producto65->save();

        $producto66 = new Producto();
        $producto66->nombre = 'Pharma Nord ActiveComplex Q10 Gold 100 mg – 60 Cápsulas';
        $producto66->pvp = '46.77';
        $producto66->descripcionCorta = 'Complemento alimenticio';
        $producto66->descripcionLarga = 'Complemento alimenticio elaborado con coenzima Q10 y vitamina B2, que contribuye a la reducción del cansancio y la fatiga, ademas de ayudar al buen funcionamiento del metabolismo energético';
        $producto66->referencia = '00065';
        $producto66->imagen = 'Cuida_1.PNG';
        $producto66->subcategoria_id = Subcategoria::where('nombre', 'Cuida Tu Cuerpo')->first()->id;
        $producto66->save();

        $producto67 = new Producto();
        $producto67->nombre = 'Mayla Omega 3 Krill Oil Corazón y Colesterol – 30 Cápsulas';
        $producto67->pvp = '8.59';
        $producto67->descripcionCorta = 'Complemento natural';
        $producto67->descripcionLarga = 'Complemento natural elaborado a base de aceite de Krill que favorece el cuidado y buen funcionamiento del sistema cardiovascular, en especial cuando aparecen niveles altos de colesterol';
        $producto67->referencia = '00066';
        $producto67->imagen = 'Cuidate_1.PNG';
        $producto67->subcategoria_id = Subcategoria::where('nombre', 'Cuídate')->first()->id;
        $producto67->save();

        $producto68 = new Producto();
        $producto68->nombre = 'ARKOREAL Jalea Real Fresca Junior – Energía (20 Ampollas)';
        $producto68->pvp = '9.58';
        $producto68->descripcionCorta = 'Complemento alimenticio';
        $producto68->descripcionLarga = 'Complemento alimenticio en forma de ampollas elaborado con jalea real. Ayuda a mantener una alimentación sana y equilibrado, para el correcto crecimiento y desarrollo de los niños';
        $producto68->referencia = '00067';
        $producto68->imagen = 'Jalea_1.PNG';
        $producto68->subcategoria_id = Subcategoria::where('nombre', 'Jalea Real')->first()->id;
        $producto68->save();

        $producto69 = new Producto();
        $producto69->nombre = 'Cito-Oral Junior Zinc (2 x 500 ml)';
        $producto69->pvp = '4.79';
        $producto69->descripcionCorta = 'Cito-Oral sabor fresa';
        $producto69->descripcionLarga = 'Bebida rehidratante de glucosa, electrolitos y zinc, con edulcorantes. Indicada especialmente en situaciones de perdida excesiva de líquidos. Permite reponer de forma rápida, el agua y minerales que el organismo necesita. Sabor a fresa';
        $producto69->referencia = '00068';
        $producto69->imagen = 'Niños_1.PNG';
        $producto69->subcategoria_id = Subcategoria::where('nombre', 'Niños')->first()->id;
        $producto69->save();

        $producto70 = new Producto();
        $producto70->nombre = 'Aquilea Lax Enemas – 6 Unidades Unidosis';
        $producto70->pvp = '6.07';
        $producto70->descripcionCorta = 'Enemas aquilea';
        $producto70->descripcionLarga = 'Elaborada a base de manzanilla y malva, ofrece una triple acción contra el estreñimiento: ayuda a liberar el intestino, protege la mucosa rectal de la irritación y ofrece alivio calmando el intestino con su acción emoliente';
        $producto70->referencia = '00069';
        $producto70->imagen = 'Nutricion_1.PNG';
        $producto70->subcategoria_id = Subcategoria::where('nombre', 'Nutrición Deportiva')->first()->id;
        $producto70->save();

        $producto71 = new Producto();
        $producto71->nombre = 'Multicentrum – 30 Comprimidos';
        $producto71->pvp = '7.28';
        $producto71->descripcionCorta = 'Complemento alimenticio';
        $producto71->descripcionLarga = 'Complemento alimenticio con 13 vitaminas y 11 minerales, que te ayuda a mantener una vida sana y llena de energía y favorece el bienestar general. Indicado para adultos y adolescentes a partir de los 12 años de edad';
        $producto71->referencia = '00070';
        $producto71->imagen = 'Vitaminas_1.PNG';
        $producto71->subcategoria_id = Subcategoria::where('nombre', 'Vitaminas y Minerales')->first()->id;
        $producto71->save();
    }
}
