-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 02:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sinopsis` text NOT NULL,
  `poster` text NOT NULL,
  `trailer` text NOT NULL,
  `genre` enum('Action','Horor','Thriller','Romance','Fantasy') NOT NULL,
  `release_date` date NOT NULL,
  `rating` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `sinopsis`, `poster`, `trailer`, `genre`, `release_date`, `rating`) VALUES
(1, 'Transformers: Rise of the Beasts', 'Transformers: Rise of the Beasts mengambil latar belakang era 90-an. Peneliti artefak berbakat bernama Noah Diaz (Anthony Ramos) dan Elena (Dominique Fishback) memulai perjalanan seru mereka dengan Autobots dan Transformers.\r\n\r\nPerjalanan itu justru membawa mereka ikut terseret ke dalam konflik besar melawan Unicron. Setelah Optimus Prime bertemu dengan Optimus Primal, Autobots berbentuk gorila, di hutan belantara, Noah dan Elena harus membantu Autobots untuk menyelamatkan Bumi dari ancaman besar.\r\n\r\nMampukah Autobots, Noah, dan Elena mengatasi ancaman tersebut?\r\n', 'posters/TROTB.jpg                           ', 'trailers/TROTB.mp4', 'Action', '2023-06-07', 6.1),
(2, 'Guardians of The Galaxy Vol. 3', 'Guardians of The Galaxy Vol. 3 ini merupakan kelanjutan dari sekuel sebelumnya yakni Guardians of The Galaxy Vol. 2 (2017) dan Guardians of The Galaxy (2014). \r\n\r\nSekuel akhir ini menceritakan tentang perjuangan Peter Quill yang masih bersedih lantaran kehilangan Gamora. Ia bertekad untuk mengumpulkan kembali timnya yang tentu masih memiliki kesedihan yang sama atas kehilangan Gamora. Ia membujuk timnya untuk bangkit dan mempertahankan alam semesta dengan cara apapun. Namun ternyata, sebuah misi harus mereka jalankan untuk mempertahankan keutuhan alam semesta. Jika misi itu gagal, bisa menjadi akhir dari kehidupan sebagai Penjaga. \r\n\r\nLantas, misi apakah itu? Bagaimana cara Peter Quill beserta timnya melakukan misi itu? Apakah mereka akan berhasil menyelamatkan alam semesta?\r\n', 'posters/GOTG3.jpg                           ', 'trailers/GOTG3.mp4', 'Action', '2023-05-03', 7.9),
(3, 'Avatar 2: The Way of Water', 'Film Avatar 2: The Way of Water mengisahkan sosok Jake Sully dengan pasangannya Neytiri tinggal bersama anak-anak mereka di tempat yang jauh dari Planet Pandora. Diceritakan bahwa mereka berjanji akan melakukan segala hal dan menghadapi segala rintangan untuk tetap bersama. \r\n\r\nAkan tetapi, dikisahkan datanglah sebuah ancaman. Mereka harus memerangi kembalinya RDA. Hal tersebut membuat Jake Sully dan keluarganya harus kembali ke Planet Pandora. Dikisahkan pula bahwa terdapat klan baru serta tempat baru yang dekat dengan terumbu karang.\r\n\r\nTempat tersebut dinilai jauh lebih aman, meski berbeda dengan lingkungan hutan sebelumnya. Di sisi lain, untuk melindungi Pandora, maka Jake Sully harus bekerja dengan Neytiri dan tentara ras Na\'vi. Mereka akan melakukan segala cara untuk bertahan hidup serta melindungi keluarga mereka.', 'posters/Avatar2.jpg                           ', 'trailers/Avatar2.mp4', 'Action', '2022-12-16', 7.6),
(4, 'The Maze Runner', 'The Maze Runner merupakan film bergenre fiksi ilmiah yang rilis pada 2014. Film ini diadaptasi dari novel best seller berjudul sama karya James Dashner dan digarap oleh sutradara Wes Ball. Beberapa pemain yang terlibat dalam film berdurasi 113 menit ini antara lain Dylan O\'Brien, Kaya Scodelario, Will Poulter, Thomas Brodie-Sangster, dan Ki Hong Lee. \r\n\r\nThe Maze Runner berkisah tentang sekelompok remaja yang berupaya memecahkan jalan keluar dari perangkap labirin raksasa. Kisahnya bermula ketika seorang remaja laki-laki terbangun dan mendapati dirinya berada di sebuah lapangan berdinding batu tinggi. Pemuda ini terbangun tanpa ingatan apapun kecuali namanya, yaitu Thomas (Dylan O\'Brien). \r\n\r\nThomas tiba di sebuah tempat yang disebut Glade dan bertemu dengan para Glader. Glader adalah sekelompok remaja yang bernasib sama seperti Thomas, bertahun-tahun terperangkap di dalam Glade. Satu-satunya jalan keluar dari Glade adalah melalui labirin raksasa. Sayangnya, labirin ini tidak mudah dilalui karena begitu luas dan dijaga oleh monster bernama Griever.Alby (Aml Amen) selaku pemimpin para Glader menjelaskan pada Thomas beberapa peraturan selama berada di Glade. Kecuali para Runner, tidak ada yang boleh memasuki labirin mengingat kondisinya sangat berbahaya. Kelompok Runner dipimpin Minho (Ki Hong Lee), yang telah tiga tahun mengelilingi labirin namun hasilnya masih nihil. Sejak kedatangan Thomas di Glade, beberapa konflik dan peristiwa terjadi. \r\n\r\nThomas juga menunjukan ketertarikan untuk menjadi Runner, tapi Alby mencegahnya. Namun, saat Alby dan beberapa teman diserang Griever, Thomas bersama Minho akhirnya memutuskan untuk berjuang sebagai Runner demi menguak misteri di dalam labirin. Berhasilkan mereka mencari jalan keluar dari labirin ini?\r\n', 'posters/TMR.jpg                           ', 'trailers/TMR.mp4', 'Thriller', '2014-09-19', 6.8),
(5, 'Avengers: Endgame', 'Film Avengers: Endgame merupakan sekuel terakhir dari rangkaian film The Avengers yang berada dalam timeline Marvel Cinematic Universe atau MCU. Film ini menceritakan peristiwa yang terjadi dalam rentang waktu lima tahun berselang dari film sebelumnya, Avengers: Infinity War. Pada Avengers: Infinity War, dikisahkan bahwa setengah populasi dunia hilang karena ulah Thanos.\r\n\r\nDua puluh tiga hari setelah peristiwa itu, Captain Marvel menyelamatkan Tony Stark dan Nebula dari luar angkasa. Mereka pun bergabung dengan para Avengers yang tersisa. Para Avengers tersebut kemudian membuat misi untuk mengambil infinity stone dari Thanos, namun Thanos telah menghancurkannya. Thor yang marah kemudian membunuh Thanos.\r\n\r\nLima tahun setelah peristiwa yang disebut blip itu terjadi, orang-orang yang ditinggalkan masih merasakan kehilangan yang amat dalam, tak terkecuali para Avengers yang tersisa. Meski begitu, mereka pun mulai berusaha menjalani kehidupan masing-masing, Tony Stark hidup bahagia bersama Pepper Potts dan telah memiliki seorang putri.', 'posters/Endgame.jpg                           ', 'trailer/Endgame.mp4', 'Fantasy', '2019-04-24', 8.4);

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `theater` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`id`, `movie_id`, `start_time`, `end_time`, `theater`) VALUES
(1, 4, '2023-11-18 16:00:00', '2023-11-18 18:00:00', 'Sun Plaza'),
(2, 2, '2023-11-15 14:00:00', '2023-11-15 16:00:00', 'Lippo Plaza'),
(3, 1, '2023-11-19 17:00:00', '2023-11-19 19:00:00', 'Center Point');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `showtime_id` int(11) NOT NULL,
  `seat_number` varchar(5) NOT NULL,
  `price` enum('35000','70000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `showtime_id`, `seat_number`, `price`) VALUES
(1, 1, 'A1', '70000'),
(2, 2, 'F5', '35000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `showtime_id` (`showtime_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD CONSTRAINT `showtimes_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`showtime_id`) REFERENCES `showtimes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
