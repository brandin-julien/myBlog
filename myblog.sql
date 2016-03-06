-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 06 Mars 2016 à 21:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `myblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `author_name` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `image`, `author_name`) VALUES
(3, 'Supergirl', 'Kara Zor-El, cousine de Kal-El, est arrivÃ©e sur Terre, mais avec 24 ans de retard. Elle avait pour mission de protÃ©ger son cousin, mais celui-ci est devenu entre temps un super hÃ©ros respectÃ© de tous. La jeune fille est donc recueillie par une famille d''adoption, la famille Danvers. Grâce à eux, la jeune fille apprend à maîtriser ses pouvoirs, mais surtout à les cacher du grand public. Adulte, âgÃ©e de 24 ans, elle travaille comme assistante au sein du groupe de média CatCo, dans la ville de National City, située sur la côte ouest des Etats-Unis. Une catastrophe inattendue va l''obliger à se montrer telle qu''elle est vraiment aux yeux de tous. Très vite, les habitants de la ville ayant vu ses incroyables capacités, la surnomment Supergirl.', 'http://smallthings.fr/wp-content/uploads/2015/10/supergirl-5600ba91aaa40.jpg', 'goju'),
(5, 'Walking Dead', 'La trame de l''histoire et l''évolution des personnages de la série télévisée sont indépendantes des comics dont elle s''inspire.\n\nAprès un phénomène d''origine virale qui a subitement transformé la majeure partie de la population mondiale en « rôdeurs » ou mort-vivant, un groupe d''américains guidé par Rick Grimes, ancien adjoint du shérif d''un comté de Géorgie, tente de survivre.\n\nLors de cette saison, Rick Grimes et son groupe ont fui le Terminus et arrivent au sein d''Alexandria, une ville fortifiée, dressée dès le début de l''épidémie.', 'http://www.geeksandcom.com/wp-content/uploads/2015/04/the-walking-dead-season-5.png', 'goju'),
(6, 'game of thrones', 'Sur le continent de Westeros, le roi Robert Baratheon gouverne le Royaume des Sept Couronnes depuis plus de dix-sept ans, Ã  la suite de la rÃ©bellion qu''il a menÃ©e contre le Â« roi fou Â» Aerys II Targaryen. Jon Arryn, Ã©poux de la sÅ“ur de Lady Catelyn Stark, Lady Arryn, son guide et principal conseiller, vient de dÃ©cÃ©der, et le roi part alors dans le nord du royaume demander Ã  son vieil ami Eddard Â« Ned Â» Stark de remplacer leur regrettÃ© mentor au poste de Main du roi. Ned, seigneur suzerain du nord depuis Winterfell et de la maison Stark, est peu dÃ©sireux de quitter ses terres. Mais il accepte Ã  contre-cÅ“ur de partir pour la capitale Port-RÃ©al avec ses deux filles, Sansa et Arya. Juste avant leur dÃ©part pour le sud, Bran, l''un des jeunes fils d''Eddard, est poussÃ© de l''une des tours de Winterfell aprÃ¨s avoir Ã©tÃ© tÃ©moin de l''union incestueuse de la reine Cersei Baratheon et son frÃ¨re jumeau, Jaime Lannister. Leur frÃ¨re, Tyrion Lannister, surnommÃ© Â« le gnome Â», est alors accusÃ© du crime par Lady Catelyn Stark.\r\n\r\nAu nord-ouest de Westeros, le jeune bÃ¢tard de Ned Stark, Jon Snow, se prÃ©pare Ã  intÃ©grer la fameuse Garde de Nuit. Depuis plus de 8000 ans, cette confrÃ©rie protÃ¨ge et dÃ©fend le royaume de ce qui vit de l''autre cÃ´tÃ© du Mur, un gigantesque Ã©difice fait de glace, de pierre et de magie, formant la frontiÃ¨re septentrionale entre les contrÃ©es glacÃ©es du nord et les Sept Couronnes. Si les Sauvageons ne sont pas une menace directe, le retour d''une race d''anciennes crÃ©atures appelÃ©e les Marcheurs Blancs est en revanche beaucoup plus inquiÃ©tant.\r\n\r\nSur le continent d''Essos, au sud-est au-delÃ  du DÃ©troit, l''hÃ©ritier Â« lÃ©gitime Â» en exil des Sept Couronnes, Viserys Targaryen, se prÃ©pare Ã  reconquÃ©rir le royaume. PrÃªt Ã  tout, il marie sa jeune sÅ“ur, la princesse Daenerys Targaryen, Ã  Khal Drogo, seigneur de guerre des Dothrakis, afin d''obtenir le soutien de la puissante horde de cavaliers nomades qu''il dirige. Mais le lunatique Viserys va hÃ©riter du mÃªme sort que celui de ses parents, laissant Ã  Daenerys le projet de recouvrer sa place sur le TrÃ´ne de fer, aidÃ©e en cela par ses trois dragons.', 'http://www.franceinfo.fr/sites/default/files/asset/images/2015/08/225e40c4752930d302d6c42fa4433.jpg', 'goju'),
(7, 'The flash', 'Le voyage dans le temps de Barry a crÃ©Ã© un portail vers une Terre alternative (que les personnages dÃ©cident d''appeler Terre-2), oÃ¹ ils ont tous un alter-ego. Dans ce monde vit un Ãªtre nommÃ© Zoom, possÃ©dant les mÃªmes pouvoirs que Barry et prÃªt Ã  tout pour Ãªtre l''homme le plus rapide de l''univers ; il dÃ©cide d''envoyer plusieurs mÃ©ta-humains pour tuer Barry. Heureusement, ce dernier peut toujours compter sur Cisco, Caitlin, Iris et Joe pour l''aider, mais aussi sur le Flash de la Terre-2, Jay Garrick.', 'https://images5.alphacoders.com/463/463438.jpg', 'goju'),
(10, 'The walking dead', 'La trame de l''histoire et l''Ã©volution des personnages de la sÃ©rie tÃ©lÃ©visÃ©e sont indÃ©pendantes des comics dont elle s''inspire.\r\n\r\nAprÃ¨s un phÃ©nomÃ¨ne d''origine virale qui a subitement transformÃ© la majeure partie de la population mondiale en Â« rÃ´deurs Â» ou mort-vivant, un groupe d''amÃ©ricains guidÃ© par Rick Grimes, ancien adjoint du shÃ©rif d''un comtÃ© de GÃ©orgie, tente de survivre.\r\n\r\nLors de cette saison, Rick Grimes et son groupe ont fui le Terminus et arrivent au sein d''Alexandria, une ville fortifiÃ©e, dressÃ©e dÃ¨s le dÃ©but de l''Ã©pidÃ©', 'http://img0.ndsstatic.com/wallpapers/52a5f810568758beebc368c181af31dd_large.jpeg', 'goju'),
(11, 'Viking', 'La sÃƒÂ©rie suit les exploits d''un groupe de Vikings menÃƒÂ© par Ragnar Lothbrok, l''un des plus populaires hÃƒÂ©ros vikings de tous les temps au destin semi-lÃƒÂ©gendaire. Ragnar serait d''origine danoise, suÃƒÂ©doise ou encore norvÃƒÂ©gienne selon les sources. Il est supposÃƒÂ© avoir unifiÃƒÂ© les clans vikings en un royaume aux frontiÃƒÂ¨res indÃƒÂ©terminÃƒÂ©es ÃƒÂ  la fin du viiie siÃƒÂ¨cle. Mais il est surtout connu pour avoir ÃƒÂ©tÃƒÂ© le promoteur des tous premiers raids vikings en terres chrÃƒÂ©tiennes, saxonnes, francques ou celtiques.\n', 'https://i.ytimg.com/vi/orOnPJi_xCc/maxresdefault.jpg', ''),
(12, 'Arrow', 'L''Archer est devenu un hÃ©ros pour les habitants de Starling City. La criminalitÃ© au sein de la ville a baissÃ©, la population se sent plus en sÃ©curitÃ© et le capitaine Lance a mÃªme dissout les forces Â« anti-Justicier Â». DorÃ©navant, Oliver pense qu''il peut enfin avoir une vie privÃ©e et propose Ã  Felicity un rendez-vous galant. Mais lorsqu''il tourne le regard, des ennemis apparaissent, le forÃ§ant Ã  rÃ©aliser qu''il ne pourra jamais Ãªtre Oliver Queen uniquement, du moins, pas tant que la ville a besoin de l''Archer.', 'http://vignette2.wikia.nocookie.net/logopedia/images/0/0b/Arrow_season_2_title_card.png/revision/latest?cb=20141202110250', ''),
(13, 'Gotham', 'Gotham City est une ville rongÃ©e par la criminalitÃ©, les politiciens et les policiers sont corrompus par les mafieux pour qu''ils dÃ©tournent les yeux et leur laissent le contrÃ´le des rues et des affaires. Mais une nuit, Thomas et Martha Wayne, un couple de milliardaires humanistes, sont tuÃ©s dans une ruelle de Gotham sous les yeux de leur fils unique, Bruce. L''inspecteur James Gordon, l''un des rares policiers intÃ¨gres de la ville et rÃ©cemment mutÃ©, jure de retrouver le coupable. Il ignore que cet assassinat va dÃ©clencher une guerre entre les gangs de Carmine Falcone et Salvatore Maroni, un bain de sang dont comptent tirer profit Fish Mooney, lieutenant de longue date de Falcone qui rÃªve de prendre le contrÃ´le de son empire, et Oswald Cobblepot, un homme de main de Mooney prÃªt Ã  tout pour devenir le numÃ©ro 1.', 'http://img1.gtsstatic.com/wallpapers/1a68eb3d781a71d8999c466b198bc2f3_large.jpeg', ''),
(14, 'Daredevil ', 'Aveugle depuis ses neuf ans Ã  la suite d''un accident, Matt Murdock possÃ¨de des sens qui bÃ©nÃ©ficient d''une acuitÃ© extraordinaire. Avocat le jour, il devient le super-hÃ©ros Daredevil lorsque la nuit tombe, afin de lutter contre lâ€™injustice Ã  New York, plus particuliÃ¨rement dans le quartier de Hell''s Kitchen, corrompu par la criminalitÃ© depuis sa reconstruction aprÃ¨s l''attaque des Chitauris lors des Ã©vÃ©nements du film Avengers.', 'https://anhelarium.files.wordpress.com/2015/06/daredevil-01.jpg', ''),
(15, 'Legends of Tomorrow', 'Rip Hunter, un agent faisant anciennement partie de la confÃ©dÃ©ration des maÃ®tres du temps dÃ©sobÃ©it Ã  cette derniÃ¨re en volant un vaisseau (nommÃ© Gideon) pouvant voyager Ã  travers le temps dans le but de recruter un groupe de super-hÃ©ros et de super-vilains capable d''affronter une menace planÃ©taire : le criminel Vandal Savage et son armÃ©e de super soldats ayant conquis et soumis le futur. Ils ont pris le contrÃ´le de toutes les infrastructures et ont fait des humains des esclaves. Ce groupe est initialement composÃ© de Captain Cold, Heat Wave, The Atom, Hawkgirl, Hawkman, White Canary et Firestorm4.', 'http://www.space.ca/wp-content/uploads/2016/01/Legends.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=32 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `mail`, `lastname`, `firstname`, `birthdate`) VALUES
(2, 'pira', 'f0e8e030141c892b6bd7044a1b2a1364bc674dbd', 'pira@pira.com', '', '0', '0000-00-00'),
(5, 'toto', '532f4c5b76fc83c4dc62ed85b5f66f2b3223a650', 'toto@42.com', '', '0', '0000-00-00'),
(6, 'alexandre', '27d6bea255689c803b15a552c7170d1511fd3ced', '', '', '0', '0000-00-00'),
(7, 'loli', '82b5a557cb0d39181fca8861972cf556894bc838', 'test@test.fr', 'brandin', 'julien', '2016-02-17'),
(9, 'bloublou', '4771603f0b9b094be9d63087b801a5fb9edff39d', 'julien.brandin@supinternet.fr', 'Alexandre', 'PICARD', '2014-10-29'),
(10, 'toto', '1aa452cd21d7a61e5c91228b95c18d59cbc0630e', 'toto@gmail.com', 'aze', 'rty', '2016-02-09'),
(12, 'julien77', 'e50fb31a4bedc14fcccedc566ce3d6ef5d754f40', 'azerty@gmail.com', 'Brandin', 'Julien', '2000-11-11'),
(30, 'goju', '1aa452cd21d7a61e5c91228b95c18d59cbc0630e', 'julienbrandin@sfr.fr', 'Brandin', 'Julien', '1995-11-04'),
(31, 'root', '6dd99e2d48fb9b0be8277b5cb28fac4c8afcce1f', 'root@root.fr', 'root', 'root', '1995-12-31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
