<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::current()->update([
            'logo' => 'images/logo.png',
            'site_name' => 'Hm² Infotech',
        ]);

        if (Portfolio::query()->exists()) {
            return;
        }

        \ = [
            [
                'title' => 'Black Rossy',
                'description' => 'E-commerce platform for fashion and accessories. Clothing and bags from our shelves. Guest checkout with cash on delivery.',
                'image' => 'images/blackrossy.png',
                'link' => 'https://blackrossy.com/',
                'category' => 'website',
                'sort_order' => 1,
            ],
            [
                'title' => 'Job Portal',
                'description' => 'Unique World Jobs - An easy to use end-to-end hiring platform. Bridging the gap in recruitment process from sourcing to offer management.',
                'image' => 'images/jobportal.png',
                'link' => 'https://portal.uniqueworldjobs.com/',
                'category' => 'website',
                'sort_order' => 2,
            ],
            [
                'title' => 'METAG',
                'description' => 'A product by Incharge Innovations Lab. Security-focused emergency helper platform with 4-step process for emergency assistance.',
                'image' => 'images/metag.png',
                'link' => 'https://metag.info/',
                'category' => 'website',
                'sort_order' => 3,
            ],
            [
                'title' => 'Saudi-e-league',
                'description' => 'Saudi E-League, the premier destination for competitive esports in Saudi Arabia. Join us for thrilling tournaments, top-tier gameplay, and a community of passionate gamers.',
                'image' => 'images/saudi.png',
                'link' => 'https://saudieleagues.com/',
                'category' => 'website',
                'sort_order' => 4,
            ],
            [
                'title' => 'Bio-diversity',
                'description' => 'Discover and protect biodiversity with our app, designed to help you explore and contribute to the preservation of wildlife and ecosystems.',
                'image' => 'images/bio.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.biodiversity.org&hl=en_IN',
                'category' => 'app',
                'sort_order' => 5,
            ],
            [
                'title' => 'Astrology Horoscope',
                'description' => 'Developed a captivating Astrology Horoscope app with Flutter, offering personalized daily predictions, zodiac insights, and compatibility analyses.',
                'image' => 'images/doctor.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.helloastro.customer',
                'category' => 'app',
                'sort_order' => 6,
            ],
            [
                'title' => 'Edutech',
                'description' => 'Developed Eduteck, an educational app powered by Flutter, offering interactive learning modules, quizzes, and progress tracking.',
                'image' => 'images/edu.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.edutech.edutech&hl=en&gl=US',
                'category' => 'app',
                'sort_order' => 7,
            ],
        ];

        foreach (\ as \) {
            Portfolio::create([
                ...\,
                'is_active' => true,
            ]);
        }
    }
}
