<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',1)->create();
        // factory('App\Items',5)->create();
    
        // $factory->define(Items::class, function (Faker $faker) {

        //     return [
        //         'title' => $faker->name,
        //         'seller' => $faker->name,
        //         'description'=> $faker->text(200),
        //         'price' => mt_rand(100, 500),
        //         'stock'=> mt_rand(100, 200),
        //     ];
        // });


        // public function up()
        // {
        //     Schema::create('items', function (Blueprint $table) {
        //         $table->bigIncrements('id');
        //         $table->string('title',100);
        //         $table->string('seller',30);
        //         $table->string('description',1000);
        //         $table->string('image',1000);
        //         $table->float('price',10,2);
        //         $table->bigInteger('stock');
        //         $table->timestamps();
        //     });
        // }

        $data = array(
            array('seller'=>" ",'title'=>'Ikan Tongkol','description'=>"Tongkol, tongkol como, tongkol komo, atau tongkol kurik (Euthynnus affinis) adalah sejenis ikan laut dari suku Scombridae. Terutama menjelajah di perairan dangkal dekat pesisir di kawasan Indo-Pasifik Barat, tongkol merupakan salah satu jenis ikan tangkapan yang penting bagi nelayan. Dalam perdagangan internasional dikenal sebagai kawakawa, little tuna, mackerel tuna, atau false albacore",'image'=>"https://cdn2.tstatic.net/jatim/foto/bank/images/ikan-tongkol.jpg",'price'=>2, 'stock'=>200),
            array('seller'=>" ",'title'=>'Ikan Teri','description'=> 'Ikan teri atau ikan bilis adalah sekelompok ikan laut kecil anggota suku Engraulidae. Nama ini mencakup berbagai ikan dengan warna tubuh perak kehijauan atau kebiruan.            Walaupun anggota Engraulidae ada yang memiliki panjang maksimum 23 cm, nama ikan teri biasanya diberikan bagi ikan dengan panjang maksimum 5 cm. Moncongnya tumpul dengan gigi yang kecil dan tajam pada kedua-dua rahangnya. Mangsa utama ikan teri ialah plankton. ', 'image' => 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/04/25/1813509067.jpg','price'=>1,'stock'=>200),
            array('seller'=>" ",'title'=>'Ikan Nila','description'=>"Ikan nila adalah sejenis ikan konsumsi air tawar. Ikan ini diintroduksi dari Afrika, tepatnya Afrika bagian timur, pada tahun 1969, dan kini menjadi ikan peliharaan yang populer di kolam-kolam air tawar di Indonesia sekaligus hama di setiap sungai dan danau Indonesia. Nama ilmiahnya adalah Oreochromis niloticus, dan dalam bahasa Inggris dikenal sebagai Nile Tilapia",'image'=>"https://img20.jd.id/Indonesia/s800x800_/nHBfsgAA3gAAABMABdzCmgAC1Bs.jpg",'price'=>2, 'stock'=>200),
            array('seller'=>" ",'title'=>'Ikan Lele','description'=> "Lele atau ikan keli, adalah sejenis ikan yang hidup di air tawar. Lele mudah dikenali karena tubuhnya yang licin, agak pipih memanjang, serta memiliki 'kumis' yang panjang, yang mencuat dari sekitar bagian mulutnya",'image'=>"https://tanikan.id/wp-content/uploads/2017/07/ikan-lele-600x343.jpg",'price'=>2, 'stock '=>200),
            array('seller'=>" ",'title'=>'Ikan Sapu-sapu','description'=>"Ikan sapu-sapu atau ikan bandaraya adalah sekelompok ikan air tawar yang berasal dari Amerika tro yang termasuk dalam famili Loricariidae, namun tidak semua anggota Loricariidae adalah sapu-sapu. Ikan ini dikenal sebagai pemakan alga/'lumut' dan sangat populer sebagai ikan pembersih akuarium. Dalam perdagangan ikan internasional ia dikenal sebagai plecostomus atau singkatannya, plecos dan plecs.",'image'=>'https://2.bp.blogspot.com/-CKx5mGhMhJU/VbnVR96Z2nI/AAAAAAAAA6A/jOqrwpnPIDk/s1600/1a214577-dbc6-4811-8a57-4abd.jpg','price'=>1,'stock'=>200),
            array('seller'=>" ",'title'=>'Ikan Piranha','description'=>"Piranha atau piraña adalah ikan air tawar omnivora[1] yang hidup di sungai-sungai di Amerika Selatan. Di sungai-sungai Venezuela, mereka disebut caribes. Mereka terkenal dengan gigi tajam dan pemakan daging. Meskipun Hollywood sering memberikan citra negatif pada piranha, mereka sebenarnya tidak seberbahaya itu, dan sering dibudidayakan di rumah dan kantor. ", 'image'=> "https://i1.wp.com/www.ekor9.com/wp-content/uploads/2018/10/info-tentang-ikan-piranha.jpg?resize=600%2C381&ssl=1",'price'=>284,'stock'=>200),
            );
        
        DB::table('items')->insert($data);

    
    }
}
