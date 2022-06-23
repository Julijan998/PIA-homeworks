-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2021 at 08:59 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

DROP TABLE IF EXISTS `roombook`;
CREATE TABLE IF NOT EXISTS `roombook` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Meal`, `cin`, `cout`, `nodays`) VALUES
(2, 'Dr.', 'Julijan', 'Stojanovic', 'juca29941@gmail.com', 'Sri Lankan', 'Bahrain', '6521584815', 'Superior Room', 'Breakfast', '2021-07-01', '2021-07-07', 6),
(3, 'Dr.', 'Julijan', 'Stojanovic', 'juca000@gmail.com', 'Srbin', 'Bahamas', '6521584815', '1', 'Breakfast', '2021-07-09', '2021-07-16', 7),
(4, 'Dr.', 'Julijan', 'Stojanovic', 'lebronce@gmail.com', 'Srbin', 'Serbia', '6521584815', '1', 'Room only', '2021-07-01', '2021-07-08', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) NOT NULL,
  `town` text NOT NULL,
  `hotel` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image1` varchar(20) NOT NULL,
  `image2` varchar(20) NOT NULL,
  `image3` varchar(20) NOT NULL,
  `image4` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `town`, `hotel`, `title`, `description`, `size`, `price`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'Kopaonik', 'Kraljevi Cardaci', 'Kraljev apartman', 'Hotel Kraljevi Cardaci okruzen je prirodom i smesten u Nacionalnom parku Kopaonik. U ponudi ima moderni spa centar, restoran koji sluzi jela tradicionalne srpske i internacionalne kuhinje i savremeno opremljene sobe i suite jedinice. Najbliza ski staza udaljena je 2,5 km.\r\n<br><br>\r\nApartman poseduje:<br>\r\n1. Spa i wellnes centar<br>\r\n2. Mini Bar<br>\r\n3. Room servis<br>\r\n4. Internet<br>\r\n5. Restoran<br>\r\n6. Bazene<br>\r\n7. Diskoteku<br>\r\n8. Parking mesto<br>', '48', '15000', 'H.1.jpg', 'H.2.jpg', 'H.3.jpg', 'H.4.jpg'),
(10, 'Jagodina', 'Hotel Lion', 'Dvokrevetni apartman', 'Dvokrevetni apartman sa odvojenom spavacom sobom, sadrzi dva odvojena kreveta, dnevnu sobu sa kuhinjom i kupatilom. Odlicno za sve one koji dolaze da odmore od velike guzve po vecim gradovima.\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Restoran <br>\r\n3. Internet<br>\r\n4. Telefon <br>\r\n5. Besplatan parking<br>', '40', '4500', 'H.37.jpg', 'H.38.jpg', 'H.39.jpg', 'H.40.jpg'),
(2, 'Kopaonik', 'Kraljevi Cardaci', 'Dvorska soba', 'Hotel Kraljevi Cardaci okruzen je prirodom i smesten u Nacionalnom parku Kopaonik. U ponudi ima moderni spa centar, restoran koji sluzi jela tradicionalne srpske i internacionalne kuhinje i savremeno opremljene sobe i suite jedinice. Najbliza ski staza udaljena je 2,5 km.\r\n<br><br>\r\nApartman poseduje:<br>\r\n1. Spa i wellnes centar<br>\r\n2. Mini Bar<br>\r\n3. Room servis<br>\r\n4. Internet<br>\r\n5. Restoran<br>\r\n6. Bazene<br>\r\n7. Diskoteku<br>\r\n8. Parking mesto<br>', '40', '9000', 'H.5.jpg', 'H.6.jpg', 'H.7.jpg', 'H.8.jpg'),
(3, 'Kopaonik', 'Angella hotel', 'Super apartman', 'Objekat Angella Hotel & Residence nalazi se na Kopaoniku, na 500 metara od Ski-centra Kopaonik. U ponudi je smestaj sa restoranom, privatnim parkingom, fitnes centrom i barom. Ovaj hotel sa 4 zvezdice ima besplatan WiFi, ostavu za ski-opremu i turisticki desk.\r\n<br><br>\r\nApartman obuhvata:<br>\r\n1. Brz internet<br>\r\n2. Odlican pogled<br>\r\n3. Blizina Ski stazama<br>\r\n4. Parking mesto<br>\r\n5. Restoranska usluga<br>', '43', '11000', 'H.9.jpg', 'H.10.jpg', 'H.11.jpg', 'H.12.jpg'),
(4, 'Zlatibor', 'Hotel Mons', 'Studio sa balkonom', 'Ovaj apartman ima balkon. Tu je i prostor za sedenje sa kaucem na razvlacenje, kao i kablovska TV. Ukljucena je kuhinja sa renom i friziderom. Kupatilo je pripremljeno podnim grejanjem i tusem.\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini Bar<br>\r\n3. Internet<br>\r\n4. Terasa <br>\r\n5. Besplatan parking<br>', '25', '8000', 'H.13.jpg', 'H.14.jpg', 'H.15.jpg', 'H.16.jpg'),
(5, 'Zlatibor', 'Hotel Mons', 'Porodicni apartman', 'Veliki prostran porodicni apartman koji moze primiti do cetiri osobe. Sastoji se od prostranog dnevnog boravka sa krevetom na razvlacenje, kuhinjom, spavacom sobom i kupatilom. Takodje pored svega toga gosti ovog apartmana imaju terasu sa previvnim pogledom na sumu. \r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini Bar <br>\r\n3. Internt<br>\r\n4. Terasa<br>\r\n5. Besplatan parking<br>', '35', '12000', 'H.17.jpg', 'H.18.jpg', 'H.19.jpg', 'H.20.jpg'),
(7, 'Divcibare', 'Divcibarski Vajat', 'Lux apartman', 'Nas lux apartman je idealan za mlade parove. Odlicno opremljen apartman koji poseduje veliku i komfornu dnevnu sobu sa kuhinjom, odvojenu spavacu sobu i kupatilo. Idealan za sve one koji vole da uzivaju pored kamina.\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini Bar<br>\r\n3. Internet<br>\r\n4. Terasa <br>\r\n5. Besplatan parking<br>', '33', '7500', 'H.25.jpg', 'H.26.jpg', 'H.27.jpg', 'H.28.jpg'),
(6, 'Divcibare', 'Apartmani Milosavljevic', 'Studio za dvoje', 'Nas studio apartman je idealan za mlade parove. Poseduje veliki bracni krevet, mini kuhinjicu i kupatilo sa tus kabinom. Idilicno mesto za provodjenje vremena tokom zime ali i tokom leta...\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini kuhinju<br>\r\n3. Internet<br>\r\n4. Indukciona ploca<br>\r\n5. Besplatan parking<br>', '22', '3800', 'H.21.jpg', 'H.22.jpg', 'H.23.jpg', 'H.24.jpg'),
(9, 'Divcibare', 'Hotel Crni Vrh', 'Deluxe Apartman', 'Ovaj apartman ima balkon. Tu je i prostor za sedenje sa kaucem na razvlacenje, kao i kablovska TV. Ukljucena je kuhinja sa renom i friziderom. Kupatilo je pripremljeno podnim grejanjem i tusem. Gostima hotela na raspolaganju su bazen, restotan i jos mnogo toga\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini Bar<br>\r\n3. Internet<br>\r\n4. Terasa <br>\r\n5. Besplatan parking<br>', '45', '13000', 'H.33.jpg', 'H.34.jpg', 'H.35.jpg', 'H.36.jpg'),
(8, 'Divcibare', 'Divcibarski Vajat', 'Relaks apartman', 'Apartman pogodan za odmor, poseduje 2 odvojena kreveta, dnevnu sobu, kuhinju i kupatilo. Odlican za goisnje odmore i uzivanje na Divcibarima.\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Veliki broj kanala <br>\r\n3. Internt<br>\r\n4. Terasa<br>\r\n5. Besplatan parking<br>', '35', '5000', 'H.29.jpg', 'H.30.jpg', 'H.31.jpg', 'H.32.jpg'),
(11, 'Jagodina', 'Gold Crown', 'Studio apartman', 'Svi nasi aprtmani su u potpunosti uradjeni tako da nasi gosti budu u potpunosti zadovoljni nasom uslugom. Besplatan internet u svim sobama, kao i veliki broj Tv kanala. Ovaj apartman sadrzi djakuzi kadu za opustanje u toku odmora. \r\n<br>\r\nMi smo tu da vam obezbedimo mesto za odlican boravak i odmor.', '37', '3500', 'H.41.jpg', 'H.42.jpg', 'H.43.jpg', 'H.44.jpg'),
(12, 'Jagodina', 'S-apartmani', 'Porodicni apartman', 'Objekat S-Apartmani nalazi se na manje od 1 km od Akva-parka Jagodina. U ponudi su klimatizovane smestajne jedinice sa besplatnim internetom i terasom. Apartmani imaju poplocane podove, potpuno opremljenu kuhinju sa friziderom, trpezariju, TV sa satelitskim kanalima i sopstveno kupatilo sa tusem i fenom za kosu.', '50', '5000', 'H.45.jpg', 'H.46.jpg', 'H.47.jpg', 'H.48.jpg'),
(13, 'Vrnjacka Banja', 'Solaris Resort', 'Porodicni apartman', 'Klimatizovane sobe koje sadrze flat-screen TV sa kablovskim kanalima, mini-bar i terasu. Na raspolaganju je sopstveno kupatilo s tusem, takodje svi clanovi naseg hotela imaju na raspolaganju parking mesto, upotrebu restorana kao i bazena. ', '30', '14500', 'H.49.jpg', 'H.50.jpg', 'H.51.jpg', 'H.52.jpg'),
(14, 'Vrnjacka Banja', 'Hotel Fontana', 'Bracni apartman', 'Hotel Fontana Vrnjacka Banja sa 4 zvezdice nudi klimatizovane sobe sa besplatnim internetom, kao i spa i velnes centar. Gostima su na raspolaganju hidromasazna kada, sauna, fitnes centar i pogled na planinu.', '35', '11000', 'H.53.jpg', 'H.54.jpg', 'H.55.jpg', 'H.56.jpg'),
(15, 'Novi Sad', 'Hotel Park', 'Lux Apartman', 'Hotel Park je smesten na obodu velikog parka u Novom Sadu. Ovaj potpuno klimatizovan hotel u ponudi ima elegantno opremljene smestajne jedinice sa besplatnim internetom i TV-om sa kablovskim kanalima. Pored toga pojedine smestajne jedinice nude hidromasaznu kadu. Bezbedan parking u sklopu objekta moze se besplatno koristiti.\r\n<br>\r\nHotel poseduje bazen, saunu, spa i velnes centar.\r\n<br> Dobrodosli!', '42', '9000', 'H.57.jpg', 'H.58.jpg', 'H.59.jpg', 'H.60.jpg'),
(16, 'Zlatibor', 'Hotel Idila', 'Apartman Idila', 'Elegantno uredjen apartman tipa \"suite\" sadrzi flat-screen TV sa kablovskim kanalima i sofe u dnevnom boravku. Na raspolaganju su mini-bar, terasa i sopstveno kupatilo sa tusem.', '50', '13000', 'H.61.jpg', 'H.62.jpg', 'H.63.jpg', 'H.64.jpg'),
(17, 'Zlatibor', 'Hotel Tornik', 'Standardni apartman', 'Objekat Grand&Sky Hotel Tornik je hotel sa 5 zvezdica. U ponudi su luksuzne sobe i suite jedinice, kao i sadrzajan spa i velnes centar koji ukljucuje 2 bazena u zatvorenom, spa kadu, hamam, saune i usluge masaze. Gosti takodje mogu da uzivaju u opustajucoj setnji prostranim vrtom. Objekat se nalazi na 1,5 km od centra Zlatibora.', '45', '18000', 'H.65.jpg', 'H.66.jpg', 'H.67.jpg', 'H.68.jpg'),
(18, 'Zlatibor', 'Hotel Tornik', 'Superior apartman', 'Objekat Grand&Sky Hotel Tornik je hotel sa 5 zvezdica. U ponudi su luksuzne sobe i suite jedinice, kao i sadrzajan spa i velnes centar koji ukljucuje 2 bazena u zatvorenom, spa kadu, hamam, saune i usluge masaze. Gosti takodje mogu da uzivaju u opustajucoj setnji prostranim vrtom. Objekat se nalazi na 1,5 km od centra Zlatibora.', '50', '25000', 'H.69.jpg', 'H.70.jpg', 'H.71.jpg', 'H.72.jpg'),
(19, 'Sokobanja', 'Hotel Sunce', 'Standard apartman', 'Hotel Sunce se nalazi u Sokobanji i nudi restoran, sezonski bazen na otvorenom, bar i zajednicki salon. Ponuda ovog hotela sa 4 zvezdica obuhvata spa i velnes centar, kao i klimatizovane sobe sa sopstvenim kupatilom. Recepcija radi non-stop, a gostima su takodje na raspolaganju usluga organizovanog prevoza, posluga u sobi i besplatan internet.', '45', '11500', 'H.73.jpg', 'H.74.jpg', 'H.75.jpg', 'H.76.jpg'),
(20, 'Sokobanja', 'Apartmani \"MEGI\"', 'Porodicni smestaj', 'Objekat Apartman \"MEGI\" se nalazi u Sokobanji i nudi terasu. Gostima ovog objekta na raspolaganju su balkon, besplatan privatni parking i besplatan internet.\r\n<br>\r\nApartman sadrzi jednu spavacu sobu, flat-screen TV sa kablovskim kanalima, opremljenu kuhinju sa friziderom i rernom, kao i kupatilo sa kadom ili tusem.', '40', '3800', 'H.77.jpg', 'H.78.jpg', 'H.79.jpg', 'H.80.jpg'),
(21, 'Golubac', 'Apartmani Cvetkovic', 'Smestaj', 'Jednoiposoban stan za turisticko izdavanje. Stan sadrzi veliku dnevnu sobu sa kuhinjom, kupatilo i odvojenu spavacu sobu sa velikim krevetom. U stanu postoji besplatan internet, centar grada je na oko jedan kilometar od stana. Privatno parking mesto za sve clanove nasih apartmana.', '42', '4000', 'H.81.jpg', 'H.82.jpg', 'H.83.jpg', 'H.84.jpg'),
(22, 'Beograd', 'Hotel Moskva', 'Lux apartman', 'Ovaj apartman ima balkon. Ogroman bracni krevet, kao i kablovska TV. Kupatilo je pripremljeno podnim grejanjem i tusem.\r\n<br><br>\r\nOvaj apartman poseduje:<br>\r\n1. TV<br>\r\n2. Mini Bar<br>\r\n3. Internet<br>\r\n4. Terasa <br>\r\n5. Besplatan parking<br>', '25', '20000', 'H.85.jpg', 'H.86.jpg', 'H.87.jpg', 'H.88.jpg'),
(23, 'Beograd', 'Hilton', 'Kraljevska soba', 'Objekat Hilton Belgrade ima krovni bar i restoran sa pogledom na grad. Od ovog hotela gosti mogu da prosetaju do Trga Slavija i Hrama Svetog Save. Living Well Health Club nudi spa i velnes sadrzaje, a gostima su na raspolaganju termalno kupatilo, sauna i tursko kupatilo.\r\n<br>\r\nProstrane sobe sadrze klima-uredjaj, radni sto i flat-screen TV sa kablovskim kanalima. Svaka smestajna jedinica sadrzi kuvalo i frizider, a pojedine poseduju i cajnu kuhinju. Sopstvena kupatila su opremljena tusem (bez kabine) i fenom za kosu.', '35', '19000', 'H.89.jpg', 'H.90.jpg', 'H.91.jpg', 'H.92.jpg'),
(24, 'Beograd', 'Tulip Inn Putnik', 'Suite apartman', 'Hotel Tulip Inn Putnik Belgrade smesten je u centru Novog Beograda, u poslovnom sredistu, na samo 100 metara od obale Dunava. Ovaj smestajni objekat iz lanca Golden Tulip Hospitality Group nalazi se na 10 minuta voznje od starog gradskog jezgra Beograda.\r\n<br>\r\nHotel nudi besplatan bezicni internet i besplatan parking. Recepcija hotela Putnik Tulip Inn radi 24 sata dnevno. Gosti mogu besplatno da koriste fitnes i spa centar.\r\n<br>\r\nSobe sadrze klima-uredjaj, plazma TV sa kablovskim kanalima i mini-bar. U kupatilima su obezbedjeni bade-mantili.', '29', '14000', 'H.93.jpg', 'H.94.jpg', 'H.95.jpg', 'H.96.jpg'),
(25, 'Krupanj', 'Hotel Grand', 'Lux Apartman', 'Lux apartman ce Vam obezbediti dodatnu udobnost, komfor i luksuz. Poseduje dnevni boravak u kome mozete uzivati sami, u drustvu prijatelja ili voljene osobe. TV velikih dimenzija ce upotpuniti dozivljaj ukoliko volite da pogledate dobar film ili slusate muziku. Apartman ima i prostranu spavacu sobu sa kraljevski velikim i udobnim krevetom. U svim prostorijama se nalaze veliki prozori kroz koje se pruza divan pogled na park, a obezbedice dosta prirodnog svetla i cistog vazduha. U kupatilu se nalazi djakuzi kada u kojoj cete se maksimalno opustiti.', '35', '7500', 'H.97.jpg', 'H.98.jpg', 'H.99.jpg', 'H.100.jpg'),
(26, 'Smederevo', 'Vila Graf', 'Elite Apartman', 'Gostima ovog apartmana sa pogledom na bazen na raspolaganju su poplocano dvoriste, prostor za sedenje, flat-screen TV sa satelitskim kanalima, potpuno opremljena kuhinja sa friziderom i plocom za kuvanje, kao i sopstveno kupatilo sa tusem i fenom za kosu. Svaka smestajna jedinica ima balkon sa pogledom na reku.\r\n<br>\r\nU objektu Apartments Villa Graf svakog jutra se sluze kontinentalni i dorucak na bazi svedskog stola.\r\n<br>\r\nObjekat poseduje i terasu za suncanje.\r\n<br>\r\nGosti mogu da plivaju u bazenu na otvorenom ili voze bicikl, a na raspolaganju im je i vrt sa sadrzajima za pripremu rostilja.', '43', '9000', 'H.101.jpg', 'H.102.jpg', 'H.103.jpg', 'H.104.jpg'),
(27, 'Smederevo', 'Vila Lily', 'Porodicni smestaj', 'Ova vila sa 2 spavace sobe ima flat-screen TV sa satelitskim kanalima, opremljenu kuhinju sa masinom za pranje posudja i mikrotalasnom pecnicom, masinu za pranje vesa i 2 kupatila sa hidromasaznom kadom.\r\n<br>\r\nGosti mogu da se opuste u spa i velnes centru, organizuju izlete na turistickom desku ili iznajme automobil i istraze okolinu. U okviru vile su dostupni sadrzaji za sportove na vodi, decje igraliste i vrt.', '150', '30000', 'H.105.jpg', 'H.106.jpg', 'H.107.jpg', 'H.108.jpg'),
(28, 'Tara', 'Apartmani Milev', 'Kucica za odmor', 'Nasi apartmani su u etno stilu, kucice se izdaju porodicama po povoljnim cenama. Nasi apartmani se nalaze takoreci u oazi mira. Nalazimo se u blizini Mokre Gore tako da to mozete posetiti. Svaka kucica je opremljena internetom, dvoristem(parking), kao i svim kucnim potrebstinama. ', '100', '7000', 'H.109.jpg', 'H.110.jpg', 'H.111.jpg', 'H.112.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
