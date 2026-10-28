-- Run this in phpMyAdmin (database: website) if artisan migrate fails

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `category` enum('website','app') NOT NULL DEFAULT 'website',
  `sort_order` int unsigned NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `site_name` varchar(255) DEFAULT 'Hm² Infotech',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `site_settings` (`id`, `logo`, `site_name`, `created_at`, `updated_at`)
VALUES (1, 'images/logo.png', 'Hm² Infotech', NOW(), NOW())
ON DUPLICATE KEY UPDATE `logo`=VALUES(`logo`);

INSERT INTO `portfolios` (`title`, `description`, `image`, `link`, `category`, `sort_order`, `is_active`, `created_at`, `updated_at`)
SELECT * FROM (
  SELECT 'Job-portel' AS title, 'SGCCI Job Portal, where recruiters can find top talent and employees can explore exciting career opportunities.' AS description, 'images/job.png' AS image, 'https://jobportal.sgcci.in/' AS link, 'website' AS category, 1 AS sort_order, 1 AS is_active, NOW() AS created_at, NOW() AS updated_at
  UNION ALL SELECT 'App.Affyscout', 'AffyScout, the ultimate platform for affiliate marketing and brand collaborations.', 'images/affy.png', 'https://app.affyscout.com/', 'website', 2, 1, NOW(), NOW()
  UNION ALL SELECT 'Movie Map Store', 'Explore MovieMap, your go-to platform for discovering and tracking the latest movies and shows.', 'images/movie.png', 'https://moviemap.online/', 'website', 3, 1, NOW(), NOW()
  UNION ALL SELECT 'Saudi-e-league', 'Saudi E-League, the premier destination for competitive esports in Saudi Arabia.', 'images/saudi.png', 'https://saudieleagues.com/', 'website', 4, 1, NOW(), NOW()
  UNION ALL SELECT 'Bio-diversity', 'Discover and protect biodiversity with our app.', 'images/bio.png', 'https://play.google.com/store/apps/details?id=com.biodiversity.org&hl=en_IN', 'app', 5, 1, NOW(), NOW()
  UNION ALL SELECT 'Astrology Horoscope', 'Astrology Horoscope app with Flutter — daily predictions and zodiac insights.', 'images/doctor.png', 'https://play.google.com/store/apps/details?id=com.helloastro.customer', 'app', 6, 1, NOW(), NOW()
  UNION ALL SELECT 'Edutech', 'Eduteck educational app powered by Flutter.', 'images/edu.png', 'https://play.google.com/store/apps/details?id=com.edutech.edutech&hl=en&gl=US', 'app', 7, 1, NOW(), NOW()
) AS seed
WHERE (SELECT COUNT(*) FROM `portfolios`) = 0;
