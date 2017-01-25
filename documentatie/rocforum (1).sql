-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jan 2017 om 14:13
-- Serverversie: 5.6.24
-- PHP-versie: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rocforum`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `idcolleges` int(11) NOT NULL,
  `college` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `colleges`
--

INSERT INTO `colleges` (`idcolleges`, `college`) VALUES
(1, 'ICT College'),
(2, 'Business College'),
(3, 'Techniek & Technologie College'),
(4, 'Bouw & Desgin College'),
(5, 'Dienstverlening College'),
(6, 'Onderwijs & Kinderopvang College'),
(7, 'Zorg & Welzijn College');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL,
  `projectnaam` varchar(255) DEFAULT NULL,
  `omschrijving` text,
  `aantal_leden` int(11) DEFAULT NULL,
  `opleverdatum` date DEFAULT NULL,
  `email_opdrachtgever` varchar(255) DEFAULT NULL,
  `telefoon_opdrachtgever` varchar(255) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `datum` datetime DEFAULT CURRENT_TIMESTAMP,
  `categorie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `post`
--

INSERT INTO `post` (`idpost`, `projectnaam`, `omschrijving`, `aantal_leden`, `opleverdatum`, `email_opdrachtgever`, `telefoon_opdrachtgever`, `catid`, `datum`, `categorie`) VALUES
(1, 'ioqioqiodoqwodh', ';ldsldswjwmklwnewionfweionio', 2, '1994-02-25', 'wwdqwwd@dwdwdw', '64646464646', 2, '2017-01-13 12:33:55', NULL),
(2, 'wdwdqdwqdw', 'qdwqdwqdwqdw', 222, '2222-02-22', '12312@dqwdqwqdw', '212132321', 3, '2017-01-13 12:33:55', NULL),
(3, 'wdwdqdwqdw', 'qdwqdwqdwqdw', 222, '2222-02-22', '12312@dqwdqwqdw', '212132321', 4, '2017-01-13 12:33:55', NULL),
(4, 'qewqewqew', 'qwdadsadsads', 2, '5555-05-05', 'qwdqwqdwqwd@dqwqdw', '12132132132132', 1, '2017-01-13 12:33:55', NULL),
(5, 'qwdqwqdw', 'sddfssddfs', 212, '2222-02-22', '12312@dqwdqwqdw', '12132132132132', 5, '2017-01-13 12:33:55', NULL),
(6, 'dervtbtrg', 'fdsfdsf', 12, '2222-03-22', 'wqdqwd@dewdw', '4554', 7, '2017-01-13 12:33:55', NULL),
(7, 'weerwgre', 'qwqeqwqew', 32, '8888-05-15', 'vcxxcvvx@ymumu', '4342342', 6, '2017-01-13 12:33:55', NULL),
(8, 'ionionion', 'ionionioni', 5, '5555-05-05', 'm@mfis.nl', '06262662620', 1, '2017-01-17 11:27:12', NULL),
(9, 'erererttre', 'ndnxionaon invnodifnvdiof;nv doi;fn dfb kld fb\r\nfb', 6, NULL, NULL, NULL, 2, '2017-01-17 12:05:05', NULL),
(10, '123456789', 'op', 5, '2222-02-12', NULL, NULL, 1, '2017-01-18 09:29:08', NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2017-01-18 09:29:33', NULL),
(12, NULL, 'klmklmklm', NULL, NULL, NULL, NULL, 4, '2017-01-18 09:30:03', NULL),
(13, 'kmvdskvkdslnvkl', 'DSVSDKVNSKLVN', 8, '2017-02-10', 'M@DKSICVISDNV.NL', NULL, 1, '2017-01-18 09:57:08', NULL),
(14, 'qqwqqwqew', 'fdfge3rf ew efw ffefwefw', 2, '2015-11-30', 'qweqweqw!qwwqweqw@efwew.rew', '12312123132132', 1, '2017-01-19 12:30:27', 'sdfdfsdfsdfs'),
(15, 'griek', 'griek', 5, '2017-01-13', 'efe@fef', '05616501', 1, '2017-01-20 10:07:03', 'griek'),
(16, 'hublot', 'mfdpejwpoefjiosdfnmkosnv;klsndknkla;nfko;anfs\r\nvfzd\r\nvdsnfio''vds\r\nfpvn\r\nsdf\r\nvsdbn', 5, '2017-01-20', 'v@ffffff.nl', '062201561', 1, '2017-01-20 10:09:34', 'Web develop');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reacties`
--

CREATE TABLE IF NOT EXISTS `reacties` (
  `idreacties` int(11) NOT NULL,
  `reactie` text,
  `postid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reacties`
--

INSERT INTO `reacties` (`idreacties`, `reactie`, `postid`, `userid`) VALUES
(1, 'asddasdsaadsadsdsadsadsadsadsads', 14, 1),
(2, '', 14, NULL),
(3, '', 14, NULL),
(4, '', 14, 1),
(5, 'egergergg', 14, 1),
(6, 'gegreg', 14, 1),
(7, 'WEWREREWFDSDFS', 14, 1),
(8, 'UYTRTHYJKL;', 14, 1),
(9, '', 14, 1),
(10, '', 14, 1),
(11, 'zobiee', 15, 1),
(12, 'vdvmdfmv', 16, 1),
(13, 'dfv kjdv jdkf zdv  kfvv\r\nf\r\nv\r\nfv', 16, 1),
(14, '', 16, 1),
(15, '', 16, 1),
(16, '', 16, 1),
(17, 'ckckdock', 16, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`) VALUES
(1, 'mohamed', '123');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`idcolleges`);

--
-- Indexen voor tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idpost`);

--
-- Indexen voor tabel `reacties`
--
ALTER TABLE `reacties`
  ADD PRIMARY KEY (`idreacties`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `colleges`
--
ALTER TABLE `colleges`
  MODIFY `idcolleges` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `post`
--
ALTER TABLE `post`
  MODIFY `idpost` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `reacties`
--
ALTER TABLE `reacties`
  MODIFY `idreacties` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
