<?php

namespace Database\Seeders;

use App\Models\ContactInformation;
use App\Models\ExtraInformation;
use App\Models\NearbyPlace;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Models\PropertyLocation;
use App\Models\PropertyVideo;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $faker = Faker::create();

        $categories = ['School', 'Hospital', 'Market', 'Park', 'Mall'];
        $features = [
        'Swimming Pool',
        'Gym',
        'Wi-Fi',
        'Air Conditioning',
        'Heating',
        'Balcony',
        'Garden',
        'Parking',
        'Elevator',
        'Security System',
        'Fireplace',
        'Laundry Room',
        'Pet Friendly',
        'Furnished',
        'Unfurnished',
        '24/7 Security',
        'CCTV Surveillance',
        'Playground',
        'Tennis Court',
        'Basketball Court',
        'BBQ Area',
        'Smart Home System',
        'Wheelchair Accessible',
        'Storage Room',
        'Rooftop Terrace',
        'Sauna',
        'Hot Tub',
        'Conference Room',
        'Concierge Service',
        'Private Entrance',
        'Solar Panels'
    ];


        for ($p = 0; $p < 20; $p++) {
            // Create property
            $property = Property::create([
                'property_id' => $faker->unique()->randomNumber(),
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'status' => $faker->randomElement(['rent', 'sale']),
                'price' => $faker->randomFloat(2, 50000, 500000),
                'area' => $faker->randomFloat(2, 500, 4000),
            ]);

            // Images (3 per property)
            for ($i = 0; $i < 3; $i++) {
                PropertyImage::create([
                    'property_id' => $property->id,
                    'image' => $faker->imageUrl(640, 480, 'house', true),
                ]);
            }

            // Video (1 per property)
            PropertyVideo::create([
                'property_id' => $property->id,
                'video_file' => $faker->url,
            ]);

            // Nearby places (5 per property)
            foreach ($categories as $category) {
                for ($i = 0; $i < 4; $i++) {
                    NearbyPlace::create([
                        'property_id' => $property->id,
                        'category' => $category,
                        'name' => $faker->company,
                        'distance' => $faker->randomFloat(2, 0.1, 10),
                        'rating' => $faker->randomFloat(1, 1, 5),
                        'map_url' => $faker->url,
                    ]);
                }
            }
            // Location
            PropertyLocation::create([
                'property_id' => $property->id,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'zip' => $faker->postcode,
                'country' => $faker->country,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
            ]);

            // Contact
            ContactInformation::create([
                'property_id' => $property->id,
                'name' => $faker->name,
                'user_name' => $faker->userName,
                'email' => $faker->safeEmail,
                'phone' => $faker->phoneNumber,
            ]);

            // Extra info
            ExtraInformation::create([
                'property_id' => $property->id,
                'bedroom' => $faker->numberBetween(1, 5),
                'bathroom' => $faker->numberBetween(1, 4),
                'kitchen' => $faker->numberBetween(1, 2),
                'window' => $faker->numberBetween(5, 15),
                'balcony' => $faker->numberBetween(0, 3),
                'living_room' => $faker->numberBetween(1, 2),
                'dining_room' => $faker->numberBetween(1, 2),
                'garage' => $faker->numberBetween(0, 2),
                'has_garden' => $faker->boolean,
                'has_rooftop' => $faker->boolean,
                'build_year' => $faker->date('Y-m-d', 'now'),
                'note' => $faker->optional()->paragraph,
            ]);

            // Features (3 random)
            $randomFeatures = $faker->randomElements($features,20);
            foreach ($randomFeatures as $feature) {
                PropertyFeature::create([
                    'property_id' => $property->id,
                    'name' => $feature,
                ]);
            }
        }
    }
}
