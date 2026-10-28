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

        $projects = [
            [
                'title' => 'Job-portel',
                'description' => 'SGCCI Job Portal, where recruiters can find top talent and employees can explore exciting career opportunities. Whether you\'re hiring or job hunting, we connect the right people to the right roles.',
                'image' => 'images/job.png',
                'link' => 'https://jobportal.sgcci.in/',
                'category' => 'website',
                'sort_order' => 1,
            ],
            [
                'title' => 'App.Affyscout',
                'description' => 'AffyScout, the ultimate platform for affiliate marketing and brand collaborations. Discover new opportunities, track your performance, and boost your earnings by partnering with top brands.',
                'image' => 'images/affy.png',
                'link' => 'https://app.affyscout.com/',
                'category' => 'website',
                'sort_order' => 2,
            ],
            [
                'title' => 'Movie Map Store',
                'description' => 'Explore MovieMap, your go-to platform for discovering and tracking the latest movies and shows. Get personalized recommendations and stay updated with all the entertainment you love.',
                'image' => 'images/movie.png',
                'link' => 'https://moviemap.online/',
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
                'description' => 'Discover and protect biodiversity with our app, designed to help you explore and contribute to the preservation of wildlife and ecosystems. Join the movement to safeguard nature and its diverse species.',
                'image' => 'images/bio.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.biodiversity.org&hl=en_IN',
                'category' => 'app',
                'sort_order' => 5,
            ],
            [
                'title' => 'Astrology Horoscope',
                'description' => 'Developed a captivating Astrology Horoscope app with Flutter, offering personalized daily predictions, zodiac insights, and compatibility analyses. The app provides users with an engaging platform to explore it.',
                'image' => 'images/doctor.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.helloastro.customer',
                'category' => 'app',
                'sort_order' => 6,
            ],
            [
                'title' => 'Edutech',
                'description' => 'Developed Eduteck, an educational app powered by Flutter, offering interactive learning modules, quizzes, and progress tracking for an engaging learning experience.',
                'image' => 'images/edu.png',
                'link' => 'https://play.google.com/store/apps/details?id=com.edutech.edutech&hl=en&gl=US',
                'category' => 'app',
                'sort_order' => 7,
            ],
        ];

        foreach ($projects as $project) {
            Portfolio::create([
                ...$project,
                'is_active' => true,
            ]);
        }
    }
}
