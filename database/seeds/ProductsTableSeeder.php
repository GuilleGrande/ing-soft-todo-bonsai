<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(['name' => 'Pithecellobium tortum', 
                                        'title' => 'Brazilian Rain Bonsai Tree', 
                                        'description' => 'In the tropics, especially in South and South East Asia, there is a giant rain tree called Samanea saman that grows as a beautiful gigantic tree giving shades to a large area under it. This is the minature version.',
                                        'price' => '250.00',
                                        'category_id' => '1']);
        DB::table('products')->insert(['name' => 'Bougainvillea glabra', 
                                        'title' => 'Bougainvillea Bonsai Tree', 
                                        'description' => 'The bougainvillea is an ornamental and woody vine that is indigenous to South America. However, it is now grown in many parts of the world. It can grow to a great height under ideal conditions. It has been heavily crossbred, and is now available in many different colors. The leaves are attractive, and shaped like flower petals.',
                                        'price' => '250.00',
                                        'category_id' => '1']);
        DB::table('products')->insert(['name' => 'Ficus benjamina', 
                                        'title' => 'The Weeping Fig Bonsai Tree', 
                                        'description' => 'The Weeping Fig is one of the most popular houseplants in North America. It has the Ficus’ characteristic leathery, deep-green ovate leaves that give the Ficus bonsai a lush, tropical feel. Ficus Benjamina is one of the easiest Ficus species to care for but it must be reduced gradually. Hard cut backs often result in dieback.',
                                        'price' => '250.00',
                                        'category_id' => '1']);
        DB::table('products')->insert(['name' => 'Ehretia microphylla', 
                                        'title' => 'Fukien Tea Bonsai Tree', 
                                        'description' => 'The Fukien tea tree is indigenous to Southeast Asia. It is distinguished by almost year-round white flowers that are small in structure. Blooms give way to small red, black or green berries that are akin to miniature rosehips. The deep green leaves are dainty and lustrous. They are covered with tiny hairs.',
                                        'price' => '250.00',
                                        'category_id' => '1']);
        DB::table('products')->insert(['name' => 'Rhododendron indicum', 
                                        'title' => 'Azalea Bonsai Tree', 
                                        'description' => 'An indoor tropical species, azaleas/rhododendrons are available in a wide range of cultivars. A number of forms exist, ranging from arching to upright habits. The shrubs grow best in soil that is acidic.',
                                        'price' => '275.00',
                                        'category_id' => '2']);
        DB::table('products')->insert(['name' => 'Buxus sempervirens', 
                                        'title' => 'Boxwood Bonsai Tree', 
                                        'description' => 'There are more than 70 species of boxwood. The common boxwood is hardy and gains height rapidly. It works best for bonsai shaping. The root system is shallow, and the bark is thin.',
                                        'price' => '275.00',
                                        'category_id' => '2']);
        DB::table('products')->insert(['name' => 'Ulmus parvifolia', 
                                        'title' => 'Chinese Elm Bonsai Tree', 
                                        'description' => 'The Chinese elm is a study in contrasts: Its solid trunk is topped by slender branches and twigs, culminating in a graceful and arching tree canopy. When grown under ideal conditions, the tree is evergreen. However, in a less-than-ideal environment it will become deciduous and drop its leaves. The tree grows rapidly, and is adorned with glossy green leaves of heavy substance. It makes an easy-care and supremely eye-catching bonsai specimen.',
                                        'price' => '275.00',
                                        'category_id' => '2']);
        DB::table('products')->insert(['name' => 'Acer palmatum', 
                                        'title' => 'Japanese Maple Bonsai Tree', 
                                        'description' => 'The deciduous Japanese maple tree is indigenous to Japan. As the tree matures, the leaves undergo color changes. They start out with a green color, then they change to orange, and then end with a deep red color. The branches of the tree are flexible, making the tree well suited to bonsai training.',
                                        'price' => '275.00',
                                        'category_id' => '3']);
        DB::table('products')->insert(['name' => 'Acer buergerianum', 
                                        'title' => 'Trident Maple Bonsai Tree', 
                                        'description' => 'The three-lobed leaf distinguishes this ornamental tree. It has a thick-set trunk, and the upper back peels off easily to expose an under-bark that is pale orange in color.',
                                        'price' => '275.00',
                                        'category_id' => '3']);
        DB::table('products')->insert(['name' => 'Ginkgo biloba', 
                                        'title' => 'Ginkgo Bonsai Tree', 
                                        'description' => 'A deciduous tree, the gingko´s form is columnar in shape, and its leaves are shaped like fans. The tree is indigenous to China, and dates to prehistory.',
                                        'price' => '275.00',
                                        'category_id' => '3']);
        DB::table('products')->insert(['name' => 'Cedrus Libani', 
                                        'title' => 'Cedar Bonsai Tree', 
                                        'description' => 'The Lebanon Cedar tree is one of four cedars that are used in the art of bonsai. Its needles are short, and the foliage is thick. It is a slow grower, however.',
                                        'price' => '299.00',
                                        'category_id' => '4']);
        DB::table('products')->insert(['name' => 'Metasequoia glyptostrobides', 
                                        'title' => 'Redwood Bonsai Tree', 
                                        'description' => 'Redwoods are evergreen trees with rather flat, thin leaves that look like needles. The light-green leaves take on a red hue in the fall. The tree bark is an orange-brown color.',
                                        'price' => '299.00',
                                        'category_id' => '4']);
        DB::table('products')->insert(['name' => 'Juniperus squamata', 
                                        'title' => 'Needle Juniper Bonsai Tree', 
                                        'description' => 'The juniper tree is commonly known as Himalayan juniper. It is a fast-growing tree, and different varieties are available in a range of needle and trunk shades. The needles become brown in color when they die, and they tend to linger on the tree for an extended period.',
                                        'price' => '299.00',
                                        'category_id' => '4']);
        DB::table('products')->insert(['name' => 'Medium pot', 
                                        'title' => 'Medium sized pot', 
                                        'description' => 'Medium sized pot for a variety of bonsai trees to rest.',
                                        'price' => '34.99',
                                        'category_id' => '5']);
        DB::table('products')->insert(['name' => 'Watering Can', 
                                        'title' => 'Watering Can', 
                                        'description' => 'Convenient watering can for seamless watering.',
                                        'price' => '24.99',
                                        'category_id' => '5']);
        DB::table('products')->insert(['name' => 'Misting Sprayer', 
                                        'title' => 'Misting Sprayer', 
                                        'description' => 'Robust and adjustable misting sprayer for cautious watering.',
                                        'price' => '49.99',
                                        'category_id' => '5']);
        DB::table('products')->insert(['name' => 'Medium Rotating turntable', 
                                        'title' => 'Medium sized rotating Turntable', 
                                        'description' => 'Especial for turning and viewing every angle of your bonsai.',
                                        'price' => '45.00',
                                        'category_id' => '5']);
        DB::table('products')->insert(['name' => 'Carbon Steel Shears', 
                                        'title' => 'Carbon Steel Shears', 
                                        'description' => 'For easy pruning',
                                        'price' => '17.50',
                                        'category_id' => '6']);
        DB::table('products')->insert(['name' => 'Folding Knife', 
                                        'title' => 'Traditional Folding Knife', 
                                        'description' => 'Perfect for wood carving.',
                                        'price' => '14.50',
                                        'category_id' => '6']);
        DB::table('products')->insert(['name' => 'Steel Wire Brush', 
                                        'title' => 'Bonsai Steel Wire Brush', 
                                        'description' => 'Strong all metal construction steel bristle brush.',
                                        'price' => '8.50',
                                        'category_id' => '6']);
        DB::table('products')->insert(['name' => 'Pick & Hook', 
                                        'title' => 'Bonsai Root Pick & Root Hook Combo', 
                                        'description' => 'Hard handle and durable build.',
                                        'price' => '6.95',
                                        'category_id' => '6']);
        DB::table('products')->insert(['name' => 'Compost Soil Nº1', 
                                        'title' => 'Premium Bonsai Compost Soil Nº1', 
                                        'description' => 'Soil Mix for Bonsai trees growing in small pots. Extremely fine size mesh.',
                                        'price' => '15.00',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Compost Soil Nº2', 
                                        'title' => 'Premium Bonsai Compost Soil Nº2', 
                                        'description' => 'Soil Mix for Bonsai trees growing in medium pots. Medium fine size mesh.',
                                        'price' => '15.00',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Compost Soil Nº3', 
                                        'title' => 'Premium Bonsai Compost Soil Nº3', 
                                        'description' => 'Soil Mix for Bonsai trees growing in big pots. Coarse size mesh.',
                                        'price' => '15.00',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Green Dream Micro-Biological Soil Additive', 
                                        'title' => 'Green Dream™ Soil Source Natural Micro-Biological Soil Additive', 
                                        'description' => 'A powerful soil ameliorant that helps plants to establish quickly.',
                                        'price' => '10.99',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Rapeseed Bonsai Fertiliser Pellets', 
                                        'title' => 'Rapeseed Natural Bonsai Fertiliser Pellets 1KG', 
                                        'description' => '100% organic fertiliser for all bonsai trees. Gradually dissolves into the soil releasing nutrients slowly over time.',
                                        'price' => '10.99',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Crystal Specialist Fertilizer', 
                                        'title' => 'Crystal Specialist Fertilizer For Bonsai', 
                                        'description' => 'Crystal specialist fertilizer for bonsai is available in three formulas to suit early - mid season and late season feeding regimens.',
                                        'price' => '14.99',
                                        'category_id' => '7']);
        DB::table('products')->insert(['name' => 'Bug Killer and Fungicide', 
                                        'title' => 'Bonsai Invigorator, Bug Killer and Fungicide', 
                                        'description' => 'Environmentally friendly, no toxic pesticide and growth stimulant.',
                                        'price' => '12.99',
                                        'category_id' => '7']);
                                        
    }
}
