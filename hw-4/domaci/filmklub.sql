-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 28. Jan 2021. u 17:39
-- Verzija servera: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmklub`
--

-- --------------------------------------------------------

--
-- Struktura tabele `movies_1`
--

DROP TABLE IF EXISTS `movies_1`;
CREATE TABLE IF NOT EXISTS `movies_1` (
  `id` int(2) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `genre` varchar(27) DEFAULT NULL,
  `relase_date` varchar(19) DEFAULT NULL,
  `duration` varchar(8) DEFAULT NULL,
  `production` varchar(21) DEFAULT NULL,
  `director` varchar(18) DEFAULT NULL,
  `writer` varchar(50) DEFAULT NULL,
  `cast` varchar(126) DEFAULT NULL,
  `description` varchar(331) DEFAULT NULL,
  `Register` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `movies_1`
--

INSERT INTO `movies_1` (`id`, `name`, `genre`, `relase_date`, `duration`, `production`, `director`, `writer`, `cast`, `description`, `Register`) VALUES
(1, 'Deadpool', 'Action/Drama', '12. February 2016.', '108 mins', 'Marvel', 'Tim Miller', 'Rhett Reese/Paul Wernick', 'Ryan Reynolds - Wade( Deadpool ) / T.J. Miller - Weasel / Morena Baccarin - Vanessa', 'U nastojanju da izleci rak, bivsi operativac specijalnih snaga, Vejd Vilson, podvrgava se rizicnom eksperimentu, nakon kojeg dobija sposobnost vrlo brzog izlecenja, ali se pojavljuje i njegova podsvesna licnost, Dedpul. Uz novostecene sposobnosti i mracan, uvrnut osećaj za humor, Dedpul lovi coveka koji mu je skoro unistio zivot.', 'Register'),
(2, 'Joker', 'Crime, Drama, Thriller', '4. October 2019.', '122 mins', 'Warner Bros', 'Todd Phillips', 'Todd Phillips / Scott Silver', 'Joaquin Phoenix - Arthur Fleck / Robert De Niro - Murray Franklin / Frances Conroy - Penny Fleck / Zazie Beetz - Sophie Dumond', 'U Gotam Sitiju mentalno obolelog komicara Artura Fleka drustvo zanemaruje i maltretira. Zatim krece u silaznu spiralu revolucije i krvavog zlocina. Ovaj put dovodi ga licem u lice sa svojim alter-egom: Joker-om.', 'Register'),
(3, 'RED', 'Action/Comedy/Crime', '15. October 2010.', '111 mins', 'Summit Entertainment', 'Robert Schwentke', 'Jon Hoeber / Erich Hoeber', 'Bruce Willis / Helen Mirren / Morgan Freeman / John Malkovich', 'Kada njegov mirni zivot preti visokotehnoloskim ubicom, bivši agent crnih operacija Frank Moses ponovno okuplja svoj stari tim u posljednjem pokusaju da prezivi i otkrije svoje napadace.', 'Register'),
(4, 'Inception', 'Action/Adventure/Sci-Fi', '16. July 2010.', '148 mins', 'Warner Bros', 'Christopher Nolan', 'Christopher Nolan', 'Leonardo Di-Caprio / Tom Hardy / Joseph Gordon-Levitt / Elliot Page', 'Di-Caprio u filmu glumi coveka koji poseduje mogucnost da ulazi ljudima u snove i da im ugradi ili iz njih prikupi potrebne informacije. Ellen Page, Tom Hardy i Joseph Gordon Levitt glume clanove njegovog tima koji pokusavaju ukrasti inovativnu ideju koja bi mogla promeniti citav svet…', 'Register'),
(5, 'Fast & Furious 8', 'Action/Adventure/Crime', '14. April 2017.', '136 mins', 'Universal Pictures', 'F. Gary Gray', 'Gary Scott Thompson / Chris Morgan', 'Vin Diesel / Jason Statham / Dwayne Johnson / Michelle Rodriguez', 'Kada tajanstvena zena zavede Dominica Toretta u svet terorizma i izdaju najblizih, posada se suocava s iskusenjima koja ce ih testirati kao nikada pre.', 'Register'),
(6, 'Anabel', 'Horor', ' 3. October 2014.', '99 mins', 'Warner Bros', 'John R. Leonetti', 'Gary Dauberman', 'Ward Horton / Annabelle Wallis / Alfre Woodard', 'Radnja se dogadja 1967. godine, i prikazuje niz zastrasujucih dogadjaja koji pogode jednu porodicu nakon sto je otac kupio porculansku lutku po imenu \"Annabelle\". ', 'Register'),
(7, 'Deadpool 2', 'Action/Comedy/Adventure', '18. May 2018.', '119 mins', 'Marvel', 'David Leitch', 'Rhett Reese / Paul Wernick', 'Ryan Reynolds / Josh Brolin / Morena Baccarin', 'Wade Wilson (zvani Deadpool) okuplja tim kolega mutanata kako bi zastitili decaka sa natprirodnim sposobnostima od brutalnog kiborga koji putuje kroz vreme.', 'Register'),
(8, 'The Hangover 2', 'Comedy', ' 26. May 2011.', '102 mins', 'Warner Bros', 'Todd Phillips', 'Craig Mazin / Scot Armstrong', 'Zach Galifianakis / Bradley Cooper / Ed Helms', 'Dve godine nakon momacke veceri u Las Vegasu, Phil, Stu, Alan i Doug odleteli su na Tajland na Stuovo venčanje. Stuov plan za mirno momacko vece, ozbiljno se pokvario.', 'Register'),
(9, 'Need for Speed', 'Action/Crime', ' 14. March 2014.', '132 mins', 'Dreamworks Pictures', 'Scott Waugh', 'George Gatins (screenplay) / George Gatins (story)', 'Aaron Paul / Dominic Cooper / Imogen Poots', 'U ovom adrenalinskom filmu radnja se vrti oko price ulicnog trkaca Tobija Marsala koji ucestvuje u trci koja se vozi preko cele Amerike, kako bi se osvetio bivsem poslovnom saradniku koji mu je podmetnuo krivicu za smrt najboljeg prijatelja, i zbog cega je zavrsio u zatvoru.', 'Register'),
(10, 'Harry Potter - Deathly Hallows 2', ' Adventure / Drama / sci-fi', ' 15. July 2011.', '130 mins', 'Warner Bros', ' David Yates', 'Steve Kloves (screenplay) / J.K. Rowling (novel)', 'Daniel Radcliffe / Emma Watson / Rupert Grint', 'Harry, Ron i Hermiona traze preostale Voldemortove horkrukse u nastojanju da uniste Mracnog Gospodara dok posljednja bitka besni kod Hogwartsa.', 'Register'),
(11, 'Harry Potter - Goblet of Fire', 'Action/Adventure/Sci-Fi', '18. November 2005.', '157 mins', 'Warner Bros', 'Mike Newell', 'Steve Kloves (screenplay) / J.K. Rowling (novel)', 'Daniel Radcliffe / Emma Watson / Rupert Grint', 'Harry Potter ucestvuje na opasnom turniru izmedju suparnickih skola magije, ali odvracaju ga nocne more koje se ponavljaju.', 'Register'),
(12, 'Space Jam', 'Adventure / Comedy ', '15. November 1996.', '88 mins', 'Warner Bros', 'Joe Pytka', 'Leo Benvenuti / Steve Rudnick', ' Michael Jordan / Wayne Knight', 'U ocajnickom pokusaju da pobede u kosarkaskoj utakmici i steknu slobodu, Looney Tunes, traze pomoc penzionisanog kosarkaskog prvaka, Michaela Jordana.', 'Register'),
(13, 'John Wick', ' Action, Crime', ' 10. February 2017.', '122 mins', 'Summit Entertainment', 'Chad Stahelski', ' Derek Kolstad / Derek Kolstad', 'Keanu Reeves / Riccardo Scamarcio / Ian McShane', 'Nakon povratka u kriminalno podzemlje kako bi otplatio dug, John Wick otkriva da je za njegov zivot ulozena velika nagrada.', 'Register'),
(14, 'The Expendables 2', 'Action/Adventure', '17. August 2012.', '103 mins', 'Lionsgate', 'Simon West', 'Richard Wenk / Sylvester Stallone', 'Sylvester Stallone / Liam Hemsworth / Randy Couture / Jason Statham', 'Gospodin Church ponovno okuplja ekipu placenika za nesto sto bi trebalo biti laka zarada, ali kad jedan od njihovih ljudi bude ubijen na poslu, njihova potraga za osvetom stavlja ih duboko na neprijateljsku teritoriju i suprotstavljaju se neocekivanoj pretnji.', 'Register'),
(15, 'Fast & Furious', ' Action / Crime', '22. June 2001. ', '106 mins', 'Universal Pictures', 'Rob Cohen', 'Ken Li / Scott Thompson', 'Vin Diesel / Paul Walker / Michelle Rodriguez', 'Policajac Brian O\'Conner tajno je poslat u svet ulicnih trka kako bi ga unistio, medjutim on se zaljubljuje u taj svet i mora da odluci da li mu je vise stalo do policijske karijere.', 'Register'),
(16, 'The Nun', 'Horor', ' 7. September 2018.', '96 mins', 'Atomic Monster', 'Corin Hardy', 'Gary Dauberman / James Wan', ' Demian Bichir / Taissa Farmiga / Jonas Bloquet', 'Svestenika sa ukletom prosloscu Vatikan salje da istrazi smrt mlade casne sestre u Rumuniji i suprotstavi se zlonamernoj sili u obliku demonske casne sestre.', 'Register'),
(17, 'The Hangover', 'Comedy', ' 5. June 2009.', '100 mins', 'Warner Bros', 'Todd Phillips', 'Jon Lucas / Scott Moore', ' Zach Galifianakis / Bradley Cooper / Justin Bartha', 'Tri se prijatelja probude posle momacke veceri u Las Vegasu, bez secanja na prethodnu noc i bez mladozenje. Probijaju se gradom kako bi ga pronašli pre njegovog vencanja.', 'Register'),
(18, 'XXX', 'Action/Adventure', ' 20. January 2017.', '107 mins', 'Huahua Media', 'D.J. Caruso', 'Rich Wilkes / F. Scott Frazier', 'Vin Diesel / Donnie Yen / Deepika Padukone', 'Ksander Kejdz se vraca iz penzije te okuplja ekipu koja mora da spreci aktivaciju uredjaja koji moze da pretvori satelite u oruzje za masovno unistenje.', 'Register'),
(19, 'Batman - The Dark Knight ', 'Action/Crime', '18. July 2008.', '152 mins', 'Warner Bros', 'Christopher Nolan', 'Jonathan Nolan / Christopher Nolan', 'Christian Bale / Heath Ledger / Aaron Eckhart', 'Kad pretnja poznata kao Joker nanese pustos i haos stanovnicima Gotham Sitija, Batman mora prihvatiti jedan od najvecih psiholoskih i fizickih testova svoje sposobnosti zbog borbe protiv nepravde i zla.', 'Register'),
(20, 'Die Hard', 'Action', '20. July 1988.', '132 mins', 'Twentieth Century Fox', 'John McTiernan', 'Roderick Thorp / Jeb Stuart', 'Bruce Willis / Alan Rickman / Bonnie Bedelia', 'Sluzbenik NYPD-a pokusava spasiti svoju suprugu i nekoliko drugih koje su nemacki teroristi uzeli za taoce tokom bozicne zabave u Nakatomi Plaza u Los Angelesu.', 'Register'),
(21, 'The Expendables', 'Action/Adventure', '13. August 2010.', '103 mins', 'Millennium Films', 'Sylvester Stallone', 'Sylvester Stallone / Dave Callaham', 'Sylvester Stallone / Jason Statham / Jet Li', 'CIA-in operativac unajmljuje tim placenika kako bi eliminisao latinskog diktatora i odmetnutog agenta CIA-e.', 'Register'),
(22, 'Taken', 'Action', '30. January 2009.', '90 mins', 'EuropaCorp', 'Pierre Morel', 'Luc Besson / Robert Mark Kamen', 'Liam Neeson / Maggie Grace / Famke Janssen', 'Penzionisani agent CIA putuje po Europi i oslanja se na svoje stare vestine kako bi spasio svoju cerku koja je oteta tokom putovanja u Pariz.', 'Register'),
(23, 'Pirates of the Caribbean', 'Action/Adventure/Sci-Fi', ' 7. July 2006.', '151 mins', 'Walt Disney Pictures', 'Gore Verbinski', 'Ted Elliott / Terry Rossio', 'Johnny Depp / Orlando Bloom / Keira Knightley', 'Jack Sparrow otkriva da njegova dusa pripada legendarnom Davy Jonesu. Ako Jack ne pronadje nacin da se izvuce iz toga, i sam ce postati clan posade Ukletog Holandjanina i citavo stoljece patiti sluzeci Davy Jonesu.', 'Register'),
(24, 'Spider-Man 3', 'Action/Adventure/Sci-Fi', ' 4. May 2007.', '139 mins', 'Marvel', 'Sam Raimi', 'Sam Raimi / Ivan Raimi', 'Tobey Maguire / Kirsten Dunst / Topher Grace', 'Cudan crni entitet iz drugog sveta veze se za Pitera Parkera i uzrokuje unutrasnja previranja dok se bori s novim negativcima, iskusenjima i osvetom.', 'Register');

-- --------------------------------------------------------

--
-- Struktura tabele `movies_2`
--

DROP TABLE IF EXISTS `movies_2`;
CREATE TABLE IF NOT EXISTS `movies_2` (
  `id` int(2) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `genre` varchar(27) DEFAULT NULL,
  `relase_date` varchar(18) DEFAULT NULL,
  `duration` varchar(8) DEFAULT NULL,
  `production` varchar(20) DEFAULT NULL,
  `director` varchar(17) DEFAULT NULL,
  `writer` varchar(50) DEFAULT NULL,
  `cast` varchar(126) DEFAULT NULL,
  `description` varchar(331) DEFAULT NULL,
  `Register` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Prikaz podataka tabele `movies_2`
--

INSERT INTO `movies_2` (`id`, `name`, `genre`, `relase_date`, `duration`, `production`, `director`, `writer`, `cast`, `description`, `Register`) VALUES
(1, 'Deadpool', 'Action/Drama', '12. February 2016.', '108 mins', 'Marvel', 'Tim Miller', 'Rhett Reese/Paul Wernick', 'Ryan Reynolds - Wade( Deadpool ) / T.J. Miller - Weasel / Morena Baccarin - Vanessa', 'U nastojanju da izleci rak, bivsi operativac specijalnih snaga, Vejd Vilson, podvrgava se rizicnom eksperimentu, nakon kojeg dobija sposobnost vrlo brzog izlecenja, ali se pojavljuje i njegova podsvesna licnost, Dedpul. Uz novostecene sposobnosti i mracan, uvrnut osećaj za humor, Dedpul lovi coveka koji mu je skoro unistio zivot.', 'Register'),
(2, 'Joker', 'Crime, Drama, Thriller', '4. October 2019.', '122 mins', 'Warner Bros', 'Todd Phillips', 'Todd Phillips / Scott Silver', 'Joaquin Phoenix - Arthur Fleck / Robert De Niro - Murray Franklin / Frances Conroy - Penny Fleck / Zazie Beetz - Sophie Dumond', 'U Gotam Sitiju mentalno obolelog komicara Artura Fleka drustvo zanemaruje i maltretira. Zatim krece u silaznu spiralu revolucije i krvavog zlocina. Ovaj put dovodi ga licem u lice sa svojim alter-egom: Joker-om.', 'Register'),
(3, 'RED', 'Action/Comedy/Crime', '15. October 2010.', '111 mins', 'Summit Entertainment', 'Robert Schwentke', 'Jon Hoeber / Erich Hoeber', 'Bruce Willis / Helen Mirren / Morgan Freeman / John Malkovich', 'Kada njegov mirni zivot preti visokotehnoloskim ubicom, bivši agent crnih operacija Frank Moses ponovno okuplja svoj stari tim u posljednjem pokusaju da prezivi i otkrije svoje napadace.', 'Register'),
(4, 'Inception', 'Action/Adventure/Sci-Fi', '16. July 2010.', '148 mins', 'Warner Bros', 'Christopher Nolan', 'Christopher Nolan', 'Leonardo Di-Caprio / Tom Hardy / Joseph Gordon-Levitt / Elliot Page', 'Di-Caprio u filmu glumi coveka koji poseduje mogucnost da ulazi ljudima u snove i da im ugradi ili iz njih prikupi potrebne informacije. Ellen Page, Tom Hardy i Joseph Gordon Levitt glume clanove njegovog tima koji pokusavaju ukrasti inovativnu ideju koja bi mogla promeniti citav svet…', 'Register'),
(5, 'Fast & Furious 8', 'Action/Adventure/Crime', '14. April 2017.', '136 mins', 'Universal Pictures', 'F. Gary Gray', 'Gary Scott Thompson / Chris Morgan', 'Vin Diesel / Jason Statham / Dwayne Johnson / Michelle Rodriguez', 'Kada tajanstvena zena zavede Dominica Toretta u svet terorizma i izdaju najblizih, posada se suocava s iskusenjima koja ce ih testirati kao nikada pre.', 'Register'),
(6, 'Anabel', 'Horor', ' 3. October 2014.', '99 mins', 'Warner Bros', 'John R. Leonetti', 'Gary Dauberman', 'Ward Horton / Annabelle Wallis / Alfre Woodard', 'Radnja se dogadja 1967. godine, i prikazuje niz zastrasujucih dogadjaja koji pogode jednu porodicu nakon sto je otac kupio porculansku lutku po imenu \"Annabelle\". ', 'Register'),
(7, 'Deadpool 2', 'Action/Comedy/Adventure', '18. May 2018.', '119 mins', 'Marvel', 'David Leitch', 'Rhett Reese / Paul Wernick', 'Ryan Reynolds / Josh Brolin / Morena Baccarin', 'Wade Wilson (zvani Deadpool) okuplja tim kolega mutanata kako bi zastitili decaka sa natprirodnim sposobnostima od brutalnog kiborga koji putuje kroz vreme.', 'Register'),
(8, 'The Hangover 2', 'Comedy', ' 26. May 2011.', '102 mins', 'Warner Bros', 'Todd Phillips', 'Craig Mazin / Scot Armstrong', 'Zach Galifianakis / Bradley Cooper / Ed Helms', 'Dve godine nakon momacke veceri u Las Vegasu, Phil, Stu, Alan i Doug odleteli su na Tajland na Stuovo venčanje. Stuov plan za mirno momacko vece, ozbiljno se pokvario.', 'Register'),
(9, 'Need for Speed', 'Action/Crime', ' 14. March 2014.', '132 mins', 'Dreamworks Pictures', 'Scott Waugh', 'George Gatins (screenplay) / George Gatins (story)', 'Aaron Paul / Dominic Cooper / Imogen Poots', 'U ovom adrenalinskom filmu radnja se vrti oko price ulicnog trkaca Tobija Marsala koji ucestvuje u trci koja se vozi preko cele Amerike, kako bi se osvetio bivsem poslovnom saradniku koji mu je podmetnuo krivicu za smrt najboljeg prijatelja, i zbog cega je zavrsio u zatvoru.', 'Register'),
(10, 'Harry Potter - Deathly Hallows 2', ' Adventure / Drama / sci-fi', ' 15. July 2011.', '130 mins', 'Warner Bros', ' David Yates', 'Steve Kloves (screenplay) / J.K. Rowling (novel)', 'Daniel Radcliffe / Emma Watson / Rupert Grint', 'Harry, Ron i Hermiona traze preostale Voldemortove horkrukse u nastojanju da uniste Mracnog Gospodara dok posljednja bitka besni kod Hogwartsa.', 'Register'),
(11, 'Harry Potter - Goblet of Fire', 'Action/Adventure/Sci-Fi', '18. November 2005.', '157 mins', 'Warner Bros', 'Mike Newell', 'Steve Kloves (screenplay) / J.K. Rowling (novel)', 'Daniel Radcliffe / Emma Watson / Rupert Grint', 'Harry Potter ucestvuje na opasnom turniru izmedju suparnickih skola magije, ali odvracaju ga nocne more koje se ponavljaju.', 'Register'),
(12, 'Space Jam', 'Adventure / Comedy ', '15. November 1996.', '88 mins', 'Warner Bros', 'Joe Pytka', 'Leo Benvenuti / Steve Rudnick', ' Michael Jordan / Wayne Knight', 'U ocajnickom pokusaju da pobede u kosarkaskoj utakmici i steknu slobodu, Looney Tunes, traze pomoc penzionisanog kosarkaskog prvaka, Michaela Jordana.', 'Register');

-- --------------------------------------------------------

--
-- Struktura tabele `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
