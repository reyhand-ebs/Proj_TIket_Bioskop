-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2023 at 08:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

DROP TABLE IF EXISTS `aktor`;
CREATE TABLE IF NOT EXISTS `aktor` (
  `aktorid` int NOT NULL AUTO_INCREMENT,
  `nama_aktor` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_aktor` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`aktorid`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aktor`
--

INSERT INTO `aktor` (`aktorid`, `nama_aktor`, `foto_aktor`) VALUES
(1, 'Chriss Pratt', 'Chriss Pratt.jpg'),
(2, 'Karen Gillan', 'Karen Gillan.jpg'),
(3, 'Will Poulter', 'Will Poulter.jpg'),
(4, 'Vin Diesel', 'Vin Diesel.jpg'),
(5, 'Michelle Rodriguez', 'Michelle Rodriguez.jpg'),
(6, 'Aghniny Haque', 'Aghniny Haque.jpg'),
(7, 'Angga Yunanda', 'Angga Yunanda.jpg'),
(8, 'Ari Irham', 'Ari Irham.jpg'),
(9, 'Shenina Cinnamon', 'Shenina Cinnamon.jpg'),
(10, 'Chicco Kurniawan', 'Chicco Kurniawan.jpg'),
(11, 'Lutesha', 'Lutesha.jpg'),
(12, 'Gong Yoo', 'Gong Yoo.jpg'),
(13, 'Ma Dong-seok', 'Ma Dong-seok.jpg'),
(14, 'Kim Su-an', 'Kim Su-an.jpg'),
(15, 'Millie Bobby Brown', 'Millie Bobby Brown.jpg'),
(16, 'Louis Partridge', 'Louis Partridge.jpg'),
(17, 'Henry Cavill', 'Henry Cavill.jpg'),
(18, 'Sam Worthington', 'Sam Worthington.jpg'),
(19, 'Zoe Saldana', 'Zoe Saldana.jpg'),
(20, 'Sigourney Weaver', 'Sigourney Weaver.jpg'),
(21, 'Jason Momoa', 'Jason Momoa.jpg'),
(22, 'Amber Heard', 'Amber Heard.jpg'),
(23, 'Willem Dafoe', 'Willem Dafoe.jpg'),
(24, 'Robert Downey Jr', 'Robert Downey Jr.jpg'),
(25, 'Chris Evans', 'Chris Evans.jpg'),
(26, 'Benedict Cumberbatch', 'Benedict Cumberbatch.jpg'),
(27, 'Tom Holland', 'Tom Holland.jpg'),
(28, 'Evangeline Lilly', 'Evangeline Lilly.jpg'),
(29, 'Zendaya', 'Zendaya.jpg'),
(30, 'Jacob Batalon', 'Jacob Batalon.jpg'),
(31, 'Jon Favreau', 'Jon Favreau.jpg'),
(32, 'Jason Statham', 'Jason Statham.jpg'),
(33, 'John Cena', 'John Cena.jpg'),
(34, 'Mirabai Pease', 'Mirabai Pease.jpg'),
(35, 'Richard Crouchley', 'Richard Crouchley.jpg'),
(36, 'Anna-Maree Thomas', 'Anna-Maree Thomas.jpg'),
(37, 'Matt Damon', 'Matt Damon.jpg'),
(38, 'Jason Bateman', 'Jason Bateman.jpg'),
(39, 'Ben Affleck', 'Ben Affleck.jpg'),
(40, 'Anya Taylor-Joy', 'Anya Taylor-Joy.jpg'),
(41, 'Charlie Day', 'Charlie Day.jpg'),
(42, 'Dwayne Johnson', 'Dwayne Johnson.jpg'),
(43, 'Madison Iseman', 'Madison Iseman.jpg'),
(44, 'Keanu Reeves', 'Keanu Reeves.jpg'),
(45, 'Iko Uwais', 'Iko Uwais.jpg'),
(46, 'Tobey Maguire', 'Tobey Maguire.jpg'),
(47, 'Chris Hemsworth', 'Chris Hemsworth.jpg'),
(48, 'Hong Ye Ji', 'Hong Ye Ji.jpg'),
(49, 'Shindy Huang', 'Shindy Huang.jpg'),
(50, 'Kim Hyun Soo', 'Kim Hyun Soo.jpg'),
(51, 'Gal Gadot', 'Gal Gadot.jpg'),
(52, 'Brie Larson', 'Brie Larson.jpg'),
(53, 'Byun Woo Seok', 'Byun Woo Seok.jpg'),
(54, 'Kim Dami', 'Kim Dami.jpg'),
(55, 'Choi Woo Shik', 'Choi Woo Shik.jpg'),
(56, 'Andrew Garfield', 'Andrew Garfield.jpg'),
(57, 'Jackie Chan', 'Jackie Chan.jpg'),
(58, 'Bruce Lee', 'Bruce Lee.jpg'),
(59, 'Donnie Yen', 'Donnie Yen.jpg'),
(60, 'Aldis Hodge', 'Aldis Hodge.jpg'),
(61, 'Price Brosnan', 'Price Brosnan.jpg'),
(62, 'Kim Yoo Jeong', 'Kim Yoo Jeong.jpg'),
(63, 'Roh Yeon Du', 'Roh Yeon Du.jpg'),
(64, 'Storm Reid', 'Storm Reid.jpg'),
(65, 'Nia Long', 'Nia Long.jpg'),
(66, 'Jeon So Nee', 'Jeon So Nee.jpg'),
(67, 'Song Kang Ho', 'Song Kang Ho.jpg'),
(68, 'Park So Dam', 'Park So Dam.jpg'),
(69, 'Julianne Nicholson', 'Julianne Nicholson.jpg'),
(70, 'Laurence Fishburne', 'Laurence Fishburne.jpg'),
(71, 'Mark Wahlberg', 'Mark Wahlberg.jpg'),
(72, 'Lauren Cohan', 'Lauren Cohan.jpg'),
(73, 'Dave Franco', 'Dave Franco.jpg'),
(74, 'Jesse Eisenberg', 'Jesse Eisenberg.jpg'),
(75, 'Mark Ruffalo', 'Mark Ruffalo.jpg'),
(76, 'Woody Harrelson', 'Woody Harrelson.jpg'),
(77, 'Daniella Pineda', 'Daniella Pineda.jpg'),
(78, 'Gerard Butler', 'Gerard Butler.jpg'),
(79, 'Mike Colter', 'Mike Colter.jpg'),
(80, 'Putri Marino', 'Putri Marino.jpg'),
(81, 'Armand Ezra', 'Armand Ezra.jpg'),
(82, 'Della Datyan', 'Della Datyan.jpg'),
(83, 'Amanda Rigby', 'Amanda Rigby.jpg'),
(84, 'Miqdad Addausy', 'Miqdad Addausy.jpg'),
(85, 'Takeru Satoh', 'Takeru Satoh.jpg'),
(86, 'Emi Takei', 'Emi Takei.jpg'),
(87, 'Halle Bailey', 'Halle Bailey.jpg'),
(88, 'Melissa McCarthy', 'Melissa McCarthy.jpg'),
(89, 'Jonah Hauer-King', 'Jonah Hauer-King.jpg'),
(90, 'Russell Crowe', 'Russell Crowe.jpg'),
(91, 'Daniel Zovatto', 'Daniel Zovatto.jpg'),
(92, 'Alex Essoe', 'Alex Essoe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `filmid` int NOT NULL AUTO_INCREMENT,
  `poster_film` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `judul_film` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `detail_film` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rilis_film` date NOT NULL,
  `rating_film` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `director_film` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `writer_film` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `durasi_film` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_film` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_upload` date NOT NULL,
  PRIMARY KEY (`filmid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`filmid`, `poster_film`, `judul_film`, `detail_film`, `rilis_film`, `rating_film`, `director_film`, `writer_film`, `durasi_film`, `file_film`, `tanggal_upload`) VALUES
(0, 'Guardians of the Galaxy Vol. 3.jpg', 'Guardians of the Galaxy Vol. 3', 'Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.', '2023-05-03', '8,3', 'James Gunn', 'James Gunn', '150', '', '2023-06-03'),
(1, 'Fast X.jpg', 'Fast X', 'The end of an era for the Fast and Furious Saga, a global franchise that has captivated audiences for three decades. Dom Toretto and his family, who have overcome countless obstacles, now face their most formidable adversary yet—a vengeful threat fro', '2023-05-17', '6,4', 'Louis Leterrier', 'James Gunn', '150', '', '2023-06-03'),
(2, 'Evil Dead Rise.jpg', 'Evil Dead Rise', 'Moving the action out of the woods and into the city, \"Evil Dead Rise\" tells a twisted tale of two estranged sisters, played by Sutherland and Sullivan, whose reunion is cut short by the rise of flesh possessing demons, thrusting them into a primal b', '2023-04-05', '7,5', 'Ben Affleck', 'Alex Convery', '111', '', '2023-06-03'),
(3, 'Air.jpg', 'Air', 'The movie explores how Nike\'s basketball shoe division was struggling in 1984 due to low sales, and how the company\'s Marketing VP Rob Strasser and CEO Phil Knight tasked basketball talent scout Sonny Vaccaro to find a new spokesperson for their shoe', '2023-04-05', '7,5', 'Ben Affleck', 'Alex Convery', '111', '', '2023-06-03'),
(4, 'The Super Mario Bros. Movie.jpg', 'The Super Mario Bros. Movie', 'A Brooklyn plumber named Mario travels through the Mushroom Kingdom with a princess named Peach and an anthropomorphic mushroom named Toad to find Mario\'s brother, Luigi, and to save the world from a ruthless fire-breathing Koopa named Bowser.', '2023-04-05', '7,2', 'Aaron Horvath, Michael Jelenic, Pierre L', 'Matthew Fogel', '92', '', '2023-06-03'),
(5, 'Avatar The Way of Water.jpg', 'Avatar: The Way of Water', 'Several years after the Na\'vi repelled the RDA invasion Jake Sully and his family are living on Pandora. Things seem peaceful but the RDA has other plans, invading and capturing Pandora. Sully forms a guerrilla group to try to expel the invaders.', '2022-12-14', '7,7', 'James Cameron', 'James Cameron, Rick Jaffa, Amanda Silver', '143', '', '2023-06-03'),
(6, 'Aquaman.jpg', 'Aquaman', 'Born upon the shores of the surface world, Arthur Curry (Jason Momoa) discovers that he is only half human, with the other half of his blood being of Atlanteean descent, thus making him the rightful heir to the throne of the undersea kingdom of Atlan', '2018-12-12', '6,8', 'James Wan', 'David Leslie Johnson-McGoldrick, Will Be', '143', '', '2023-06-03'),
(7, 'Avengers Endgame.jpg', 'Avengers: Endgame', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\'s actions and undo th', '2019-04-24', '8,4', 'Anthony Russo, Joe Russo', 'Christopher Markus, Stephen McFeely, Sta', '181', '', '2023-06-03'),
(8, 'Spider-Man No Way Home.jpg', 'Spider-Man: No Way Home', 'Peter Parker\'s secret identity is revealed to the entire world. Desperate for help, Peter turns to Doctor Strange to make the world forget that he is Spider-Man. The spell goes horribly wrong and shatters the multiverse, bringing in monstrous villain', '2021-12-15', '8,2', 'Jon Watts', 'Chris McKenna, Erik Sommers, Stan Lee', '148', '', '2023-06-03'),
(9, 'Mencuri Raden Saleh.jpg', 'Mencuri Raden Saleh', 'Pencurian terbesar abad ini tinggal menghitung hari menjelang tanggal eksekusinya. Komplotan sudah lengkap dan siap menjalankan misi untuk mencuri lukisan sang maestro, Raden Saleh, yang berjudul Penangkapan Diponegoro. Pemalsuan, peretasan, pertarun', '2022-08-25', '7,3', 'Angga Dwimas Sasongko', 'Husein M. Atmodjo, Angga Dwimas Sasongko', '154', '', '2023-06-03'),
(10, 'Penyalin Cahaya.jpg', 'Penyalin Cahaya', 'Penyalin Cahaya berkisah soal Sur (Shenina Cinnamon) yang kehilangan beasiswa karena dianggap mencemarkan nama baik fakultas dan melanggar aturan beasiswa usai swafoto dirinya kala mabuk tersebar.', '2021-10-08', '6,8', 'Wregas Bhanuteja', 'Wregas Bhanuteja', '130', '', '2023-06-03'),
(11, 'Train to Busan.jpg', 'Train to Busan', 'Seok-woo dan putrinya yang berulang tahun pergi ke Busan dengan kereta untuk menemui istrinya. Tapi perjalanan tersebut berubah menjadi mimpi buruk kala mereka terjebak di tengah-tengah wabah zombie.', '2016-07-01', '7,6', 'Yeon Sang-ho', 'Yeon Sang-ho', '118', '', '2023-06-03'),
(12, 'Enola Holmes.jpg', 'Enola Holmes', 'Film ini menceritakan tentang petualangan Enola Holmes, seorang perempuan yang merupakan adik dari detektif terkenal bernama Sherlock Holmes. Pada suatu hari Enola Holmes mendapat kabar bahwa ibunya tiba-tiba menghilang secara misterius.', '2020-09-23', '6,6', 'Harry Bradbeer', 'Nancy Springer', '123', '', '2023-06-03'),
(13, 'Enola Holmes 2.jpg', 'Enola Holmes 2', 'Film ini menceritakan kisah tentang Enola Holmes yang memiliki impian ingin menjadi detektif seperti sang kakak. Sayangnya pada saat itu, banyak orang yang meremehkan dirinya menjadi detektif karena Enola merupakan seorang perempuan yang masih di baw', '2022-10-27', '6,7', 'Harry Bradbeer', 'Jack Thorne', '130', '', '2023-06-03'),
(14, 'Black Adam.jpg', 'Black Adam', 'Berkisah tentang sosok antihero yang mendapatkan kekuatan dari dewa Mesir bernama Adam. Ia datang untuk menciptakan keadilan di dunia saat ini.', '2022-10-19', '6.3', 'Jaume Collet Serra', 'Adam Sztykiel, Rory Haines, Sohrab Noshi', '125', '', '2023-06-03'),
(15, 'Fast & Furious Presents Hobbs and Shaw.jpg', 'Fast & Furious Presents: Hobbs and Shaw', 'Luke Hobbs (Dwayne Johnson) membentuk aliansi yang tidak mungkin dengan Deckard Shaw (Jason Statham). Keduanya terpaksa bersatu membantu Hattie Shaw (Vanessa Kirby) untuk memburu Brixton (Idris Elba). Brixton adalah penjahat jenis baru yang berhasil ', '2019-07-31', '6.5', 'David Leitch', 'Chris Morgan, Drew Pearce', '137', '', '2023-06-03'),
(16, '20th Century Girl.jpg', '20th Century Girl', '20th Century Girl adalah film dari Korea Selatan yang rilis pada awal Oktober 2022 lalu. Film 20th Century Girl bergenre drama-romance yang berkisah tentang cinta pertama dan kisah persahabatan seorang anak SMA. Berlatar waktu tahun 1999, film ini te', '2022-10-06', '7.3', 'Woori Bang', 'Woori Bang', '119', '', '2023-06-03'),
(17, 'Missing.jpg', 'Missing', 'Ketika sang ibu dan pacar barunya menghilang saat berlibur berdua ke Kolombia, upaya June dalam mencari jawaban selalu terjegal oleh birokrasi internasional. Tak mampu beranjak dari Los Angeles, June dengan cerdik mempergunakan segala teknologi yang ', '2023-01-20', '7.1', 'Nicholas D. Johnson, Will Merrick', 'Will Merrick, Nicholas D. Johnson, Sev O', '111', '', '2023-06-03'),
(18, 'Soulmate.jpg', 'Soulmate', 'Mi-so, seorang gadis berusia 12 tahun yang dipindahkan dari Seoul ke pulau Jeju, bertemu dengan Ha-eun. Mereka berjanji tidak akan pernah berpisah. Pada usia 18 tahun, pacar Ha-eun, Jin-woo menjauhkan persahabatan dua gadis. Beberapa tahun kemudian m', '2023-03-15', '7.5', 'Min Young Geun', 'Kang Hyun Joo, Min Yong Geun', '124', '', '2023-06-03'),
(19, 'Parasite.jpg', 'Parasite', 'Keluarga Ki-taek beranggotakan empat orang pengangguran dengan masa depan suram menanti mereka. Suatu hari Ki-woo anak laki-laki tertua direkomendasikan oleh sahabatnya yang merupakan seorang mahasiswa dari universitas bergengsi agar Ki-woo menjadi g', '2019-06-21', '8.5', 'Bong Joon Ho', 'Bong Joon Ho, Han Jin Won', '132', '', '2023-06-03'),
(20, 'Togo.jpg', 'Togo', 'Film berdurarsi 114 menit ini mengisahkan tentang seekor anjing bernama Togo yang menjadi pahlawan saat wabah difteri yang merebak pada tahun 1925 di Nome, Alaska. Kisahnya bermula ketika seorang musher bernama Leonhard Seppala ditugaskan untuk memba', '2019-12-20', '7.9', 'Ericson Core', 'Tom Flynn', '113', '', '2023-06-03'),
(21, 'John Wick 4.jpg', 'John Wick 4', 'John Wick 4 akan berkisah tentang John Wick (Keanu Reeves) yang menghadapi musuhnya yang dinilai paling mematikan dalam seri keempat ini', '2023-03-22', '8.1', 'Chad Stahelski', 'Shay Hatten, Michael Finch, Derek Kolsta', '250', '', '2023-06-03'),
(22, 'Mile 22.jpg', 'Mile 22', 'Sebuah tim kecil perwira intelijen Amerika elit, bagian dari unit komando taktis rahasia, mencoba menyelundupkan seorang perwira polisi misterius dengan informasi sensitif keluar dari Indonesia.', '2018-08-10', '6.1', 'Peter Berg', 'Graham Roland, Lea Carpenter', '135', '', '2023-06-03'),
(23, 'Now You See Me.jpg', 'Now You See Me', 'Empat Penunggang Kuda muncul kembali, dan secara paksa direkrut oleh seorang jenius teknologi untuk melakukan perampokan yang paling mustahil.', '2016-06-09', '6.4', 'Jon M. Chu', 'Ed Solomon, Peter Chiarelli, Boaz Yakin', '210', '', '2023-06-03'),
(24, 'Plane (2023).jpg', 'Plane (2023)', 'Seorang pilot menemukan dirinya terjebak di zona perang setelah dia terpaksa mendaratkan pesawat komersialnya selama badai yang mengerikan.', '2023-01-13', '6.9', 'Jean-François Richet', 'Charles Cumming, J.P. Davis', '150', '', '2023-06-03'),
(25, 'The Big 4.jpg', 'The Big 4', 'Seorang detektif yang dikenal lurus menyelidiki kematian ayahnya dan mengikuti jejak hingga ke sebuah pulau tropis. Di sana, ia menemukan jati diri sesungguhnya sang ayah sebagai pemimpin kelompok pembunuh bayaran. Kini, ia dikejar musuh ayahnya, seh', '2023-12-05', '6', 'Timo Tjahjanto', 'Timo Tjahjanto, Johanna Wattimena', '141', '', '2023-06-03'),
(26, 'Mechamato Movies.jpg', 'Mechamato Movies', 'Seorang anak laki-laki bernama Amato menemukan robot MechaBot yang kuat setelah sebuah pesawat ruang angkasa misterius mendarat di Bumi. Amato kini dapat memanfaatkan kemampuan khusus MechaBot untuk Mekanisasi objek biasa menjadi perangkat berteknolo', '2023-03-01', '8', 'Nizam Razak', 'Nizam razak, Anas Abdul Malik', '122', '', '2023-06-03'),
(27, 'Atas nama Surga.jpg', 'Atas nama Surga', 'Naya (Della Dartyan) dan Attar (Miqdad Addausy) mulai bertemu ketika keduanya sedang kehilangan orang yang mereka cintai. Kemudian, Salwa (Amanda Rigby) yang merupakan cinta lama Attar, hadir di dalam hubungan mereka.', '2022-06-16', '8', 'Adis kayl Yurahmah', 'Gavrila Godelva', '104', '', '2023-06-03'),
(28, 'Rurouni Kenshin.jpg', 'Rurouni Kenshin', 'Bercerita tentang tentang masa lalu Kenshin Himura sang Batousai, film ini mengungkap banyak hal yang berkaitan dengan kehidupannya. Salah satunya tentang terciptanya tanda X di wajah Kenshin. Adapun cerita tentang restorasi Meiji dari era Shogun Tok', '2012-08-12', '7.4', 'Keishi Otomoto', 'Kiyumi Fuji, Keishi Otomo', '135', '', '2023-06-03'),
(29, 'The Little Mermaid.jpg', 'The Little Mermaid', 'The youngest of King Triton\'s daughters, Ariel is a beautiful and spirited young mermaid with a thirst for adventure. Longing to find out more about the world beyond the sea, Ariel visits the surface and falls for the dashing Prince Eric. Following h', '2023-05-24', '7', ' Rob Marshall', 'David Magee', '135', 'The Little Mermaid.jpg', '2023-06-03'),
(30, 'The Pope\'s Exorcist.jpg', 'The Pope\'s Exorcist', 'Inspired by the actual files of Father Gabriele Amorth, Chief Exorcist of the Vatican, The Pope\'s Exorcist follows Amorth as he investigates a young boy\'s terrifying possession and ends up uncovering a centuries-old conspiracy the Vatican has despera', '2023-04-07', '6.1', ' Julius Avery', ' Michael Petroni, Evan Spiliotopoulos, R', '103', 'The Pope\'s Exorcist.jpg', '2023-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `film_aktor`
--

DROP TABLE IF EXISTS `film_aktor`;
CREATE TABLE IF NOT EXISTS `film_aktor` (
  `film_id` int DEFAULT NULL,
  `aktor_id` int DEFAULT NULL,
  KEY `aktorid_fkfa` (`aktor_id`),
  KEY `filmid_fkfa` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_aktor`
--

INSERT INTO `film_aktor` (`film_id`, `aktor_id`) VALUES
(0, 1),
(0, 2),
(0, 3),
(1, 4),
(1, 5),
(4, 1),
(2, 34),
(2, 35),
(2, 36),
(3, 37),
(3, 38),
(3, 39),
(4, 40),
(4, 39),
(5, 18),
(5, 19),
(5, 20),
(6, 21),
(6, 22),
(6, 23),
(7, 24),
(7, 25),
(7, 26),
(7, 27),
(7, 2),
(7, 28),
(8, 27),
(8, 29),
(8, 26),
(8, 30),
(8, 31),
(9, 6),
(9, 7),
(9, 8),
(10, 9),
(10, 10),
(10, 11),
(11, 12),
(11, 13),
(11, 14),
(12, 15),
(12, 16),
(12, 17),
(13, 15),
(13, 16),
(13, 17),
(14, 42),
(14, 60),
(14, 61),
(29, 87),
(29, 88),
(29, 89),
(29, 87),
(29, 88),
(29, 89),
(30, 90),
(30, 91),
(30, 92);

-- --------------------------------------------------------

--
-- Table structure for table `film_genre`
--

DROP TABLE IF EXISTS `film_genre`;
CREATE TABLE IF NOT EXISTS `film_genre` (
  `film_id` int DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  KEY `genreid_fkfg` (`genre_id`),
  KEY `filmid_fkfg` (`film_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film_genre`
--

INSERT INTO `film_genre` (`film_id`, `genre_id`) VALUES
(0, 1),
(0, 2),
(0, 6),
(0, 18),
(1, 1),
(1, 2),
(1, 7),
(1, 14),
(1, 20),
(2, 13),
(3, 9),
(3, 19),
(4, 3),
(4, 2),
(4, 6),
(5, 1),
(5, 2),
(5, 11),
(6, 1),
(6, 2),
(6, 11),
(7, 1),
(7, 2),
(7, 9),
(8, 1),
(8, 2),
(8, 11),
(9, 1),
(9, 9),
(10, 9),
(10, 7),
(11, 13),
(11, 1),
(12, 14),
(12, 7),
(13, 14),
(13, 7),
(14, 1),
(14, 2),
(14, 11),
(15, 1),
(15, 2),
(16, 9),
(16, 17),
(17, 9),
(17, 14),
(17, 20),
(18, 9),
(18, 17),
(19, 9),
(19, 20),
(20, 2),
(20, 5),
(20, 9),
(21, 1),
(22, 1),
(22, 2),
(22, 7),
(23, 1),
(23, 6),
(23, 20),
(24, 1),
(24, 20),
(25, 6),
(26, 3),
(27, 17),
(28, 1),
(28, 18),
(29, 2),
(29, 10),
(29, 11),
(29, 2),
(29, 10),
(29, 11),
(29, 2),
(29, 10),
(29, 11),
(30, 13),
(30, 20);

-- --------------------------------------------------------

--
-- Table structure for table `film_user`
--

DROP TABLE IF EXISTS `film_user`;
CREATE TABLE IF NOT EXISTS `film_user` (
  `film_id` int NOT NULL,
  `rating_user` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `komen_user` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  KEY `filmid_fkfu` (`film_id`),
  KEY `userid_fkfu` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `genreid` int NOT NULL AUTO_INCREMENT,
  `nama_genre` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`genreid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genreid`, `nama_genre`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Anime'),
(5, 'Biography'),
(6, 'Comedy'),
(7, 'Crime'),
(8, 'Documentary'),
(9, 'Drama'),
(10, 'Family'),
(11, 'Fantasy'),
(12, 'History'),
(13, 'Horror'),
(14, 'Mystery'),
(15, 'Politics'),
(16, 'Reality'),
(17, 'Romance'),
(18, 'Science Fiction'),
(19, 'Sport'),
(20, 'Thriller'),
(21, 'War');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `roleid` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_role` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleid`, `nama_role`) VALUES
('role1', 'admin'),
('role2', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aktif` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `roleid` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `passwordsecr` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`userid`),
  KEY `user_fkr_1` (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `password`, `name`, `nohp`, `token`, `aktif`, `roleid`, `passwordsecr`) VALUES
(1, 'mohamad.reyhand.f@students.esqbs.ac.id', '$2y$10$WaUU3TtRgp8KBRZ48uTOoO2skKnrxMPt8xO4fOZZQ32IZHro3DhSO', 'Reyhand', '082246680795', '7969be91b85c90c3c94b5dadfb050007a7d12f9bf44dd8c486c6de41af95b212', '1', 'role1', 'Reyhand123'),
(2, 'refido.arjunal.a@students.esqbs.ac.id', '$2y$10$.mjtXPMvQOoLniOd9M6YwOnO8BxOVlYQtB.4BrBQA4VB2qvXTey56', 'Sensei ji', '03124324341', '74942d81fc2154f2abf73d8b1bd8e9973e5f322e4cf81ff5796aebd5b5fa4fcc', '1', 'role1', NULL),
(3, 'damar.adji.s@students.esqbs.ac.id', '$2y$10$O5DxPz/VhAP7ftZvSD3ihO8S94n5Ka1jtRD33aAoljxe3XvVUliKW', 'Damar', '23232323', '0ff24d051c96cfb0492b0f9765b1d70e0ed037ceaa989aeb828fd6efa2424107', '1', 'role2', NULL),
(4, 'afifah.k.rusli@students.esqbs.ac.id', '$2y$10$TW8cNpUyyoSXIY0CqwuQvO3FKLktRwUftICfjK/bmt3sjZQgoAcOu', 'Afifah', '023232323', 'ca5d7b4dacc0a88b9e2c0df29955349400374c946554a5d07820207c17741aea', '1', 'role2', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film_aktor`
--
ALTER TABLE `film_aktor`
  ADD CONSTRAINT `aktorid_fkfa` FOREIGN KEY (`aktor_id`) REFERENCES `aktor` (`aktorid`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `filmid_fkfa` FOREIGN KEY (`film_id`) REFERENCES `film` (`filmid`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `film_genre`
--
ALTER TABLE `film_genre`
  ADD CONSTRAINT `filmid_fkfg` FOREIGN KEY (`film_id`) REFERENCES `film` (`filmid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genreid_fkfg` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genreid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `film_user`
--
ALTER TABLE `film_user`
  ADD CONSTRAINT `filmid_fkfu` FOREIGN KEY (`film_id`) REFERENCES `film` (`filmid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid_fkfu` FOREIGN KEY (`user_id`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fkr_1` FOREIGN KEY (`roleid`) REFERENCES `role` (`roleid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
