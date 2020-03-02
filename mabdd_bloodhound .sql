-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 juin 2019 à 22:11
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mabdd_bloodhound`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  PRIMARY KEY (`id_article`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_article`, `title`, `date`, `img`, `description`, `subject`, `content`) VALUES
(1, 'Octane update', '2019-03-19', 'Article1.jpg', 'Octane arrived in the Apex Legend game', 'Octane', '<p>One day, Octavio Silva was bored. In fact, he was bored most days. Heir to the preoccupied CEOs of Silva Pharmaceuticals and wanting for nothing in life, he entertained himself by performing death-defying stunts and posting holovids of them for his fans to gawk over. So, this day, he decided to set the course record for a nearby Gauntlet by launching himself across the finish line – using a grenade.</p><br />\r\n<br />\r\n<p>\r\n  As he lay in triage hours later, the doctors informed him that the damage done to his legs meant his daredevil days were over. That didn’t sit well with Octavio, who turned to an old friend for help: Ajay Che, who he guilted into forging an order to replace his legs with bionic ones. Suddenly able to repair his limbs at a moment’s notice, Octavio decided petty online stunts weren’t enough: the ultimate adrenaline rush, the Apex Games, was calling. Now, he’s going to become an Apex Champion doing the most incredible, death-defying moves anyone’s ever seen. Maybe in the arena, he won’t be so bored.</p>'),
(2, 'Pathfinder hitbox', '2019-05-03', 'apex-section-bg-legends-pathfinder-xl.jpg.adapt.320w.jpg', 'Pathfinder Hitbox rework', 'Pathfinder', '<p>Adjusted hitboxes for Gibraltar, Caustic, and Pathfinder to better align with their shapes.</p>'),
(5, 'Article 1', '2018-11-15', 'IxCcX.png', 'This update did a lot of changements to this game', 'dqzdqdzqdq', '<p>ooifjiojofjerfijiejrofoeje</p>'),
(7, 'APEX LEGENDS SEASON 1', '2019-03-19', 'apex-legends-season-1-launch-announced.jpg.optimal.jpg', 'Discover what the Season 1 battlepass is.', 'BATTLE PASS AND BATTLE PASS BUNDLE', '<h3>HOW DOES THE BATTLE PASS WORK?</h3>\r\n<p> The more you play, the more you get. Grab the Wild Frontier Battle Pass and jump into the arena, where every level you gain levels up your Battle Pass and unlocks exclusive rewards.</p>\r\n<p><br /></p>\r\n<h3>\r\n  WILD FRONTIER LEGEND SKINS</h3>\r\n<p> Instantly unlock the Lifeline Revolutionary skin, the Wraith Survivor skin, and the Mirage Outlaw skin with purchase of the Battle Pass.</p>\r\n<p><br /></p>\r\n<h3>\r\n  BATTLE PASS REWARDS</h3>\r\n<p> Earn over 100 unique items throughout the season – everything you snag before the season’s over is yours to keep.</p>\r\n<p><br /></p>\r\n<h3>\r\n  READY TO JUMP IN?</h3>\r\n<p> To get the Battle Pass, jump into Apex Legends and head to the Battle Pass tab in the store. Grab the Battle Pass for 950 Apex Coins or the Battle Pass Bundle for 2,800 Apex Coins (containing 4,700 Apex Coins’ worth of content), and you’re all set. Take on the Wild Frontier and new rewards will unlock every time you level up your Battle Pass.</p>\r\n<p><br /></p>\r\n<h3>\r\n  BATTLE PASS FAQ</h3>\r\n<h3>\r\n  How do I buy the Battle Pass?</h3>\r\n<p> The Battle Pass can only be purchased in the in-game store using Apex Coins. Launch Apex Legends, navigate to the Battle Pass tab, and purchase the Battle Pass from there. If you need to purchase Apex Coins, you can do that in the store, too.</p>\r\n<p><br /></p>\r\n<h3>\r\n  What happens if I buy my Battle Pass late in the season?</h3>\r\n<p> You’ll receive all the rewards up to your Battle Pass level (which is your current level for the season) retroactively! For example, if you’re on level 20 for the season when you buy the Battle Pass, you’ll unlock all rewards for every level up to 20, plus three special Battle Pass skins.</p>\r\n<p> If you buy the Battle Pass Bundle, you’ll get the rewards for 25 levels in addition to the levels you’ve already reached. So, if you’re on level 20 for the season when you buy the Battle Pass Bundle, you’ll get all the rewards through level 45 and the three special Battle Pass skins.</p>\r\n<p><br /></p>\r\n<h3>\r\n  Can I keep leveling my Season 1 Battle Pass after the season ends?</h3>\r\n<p> No, the rewards available in the Season 1 Battle Pass can only be earned until the season is over. After it ends, you won’t be able to earn new Wild Frontier content.</p>\r\n<p><br /></p>\r\n<h3>\r\n  Do I keep my stuff after the season ends?</h3>\r\n<p>Yes! You keep every Battle Pass reward you’ve unlocked after the season is over.</p>\r\n<p><br /></p>\r\n<h3> What if I don’t buy the Battle Pass? Can I still earn rewards for free?</h3>\r\n<p> Yes. Even if you don’t purchase the Battle Pass, you can still earn the following items for free:</p>\r\n<p>1 Wild Frontier Legend skin</p>\r\n<p>5 Apex Packs</p>\r\n<p>18 Wild Frontier stat trackers</p>\r\n<p><br /></p>\r\n<h3>\r\n  If I buy the Battle Pass, can I also get the free rewards?</h3>\r\n<p> Yes! Everyone can earn the free rewards during Season 1.</p>\r\n<p><br /></p>\r\n<h3>\r\n  What’s the most efficient way to level up my Battle Pass?</h3>\r\n<p> Each character earns bonus Battle Pass XP at the end of a match based on survival time, up to a weekly cap. To reach your maximum Battle Pass level the fastest, you should maximize this bonus by playing a variety of characters throughout the season. Each character can earn up to 25,000 bonus Battle Pass XP starting the first week of Season 1, and the cap increases each week.</p>\r\n<p> You can also earn an extra 500 Battle Pass XP for your first kill of the day with each character (max three unique characters per day).</p>\r\n<p> Finally, the premium Battle Pass reward track offers Battle Pass XP boosts for playing with friends. These bonuses stack as you earn additional boosts.</p>\r\n<p><br /></p>\r\n<h3>\r\n  If I own the Battle Pass, can I buy levels past level 100 to get the bonus items?</h3>\r\n<p> No, you can only purchase levels up to level 100. You must earn the final 10 levels through playtime.</p>\r\n<p><br /></p>\r\n<h3>\r\n  Will the Battle Pass rewards ever return after Season 1?</h3>\r\n<p> No. All Wild Frontier cosmetic rewards (excluding Apex Packs and content dropped from them) in the Battle Pass are exclusive to Season 1 and will never be available again. Players in future seasons will be jealous of your OG status.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_contact`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `subject`, `content`, `date`) VALUES
(4, 'Tatiana Rivers', 'in@utlacus.ca', 'Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer', 'blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris', '2018-10-31'),
(5, 'Larissa Mcdowell', 'sit@vitae.com', 'Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque', 'ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam', '2018-07-23'),
(6, 'Elizabeth Sweeney', 'eleifend.vitae.erat@lobortis.edu', 'aliquam, enim nec tempus', 'ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et', '2018-11-26'),
(7, 'Paloma Alston', 'et.tristique.pellentesque@arcu.com', 'vel, mauris.', 'dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh', '2018-09-27'),
(8, 'Quyn Nixon', 'commodo.at@erat.com', 'Nullam feugiat placerat velit.', 'nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod', '2019-02-13'),
(9, 'Gabriel Garrett', 'nunc@non.com', 'ac mi eleifend egestas. Sed pharetra, felis', 'Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus.', '2019-01-14'),
(10, 'Amery Pope', 'sit@Nulla.net', 'leo.', 'pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus', '2019-05-25'),
(11, 'Dylan Mclaughlin', 'nec.ante@Proinvelnisl.com', 'lorem fringilla ornare', 'mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec,', '2018-09-29'),
(12, 'Alice Potter', 'massa.Suspendisse@sapiengravida.com', 'adipiscing. Mauris molestie pharetra nibh.', 'convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi', '2018-12-15'),
(13, 'Priscilla Quinn', 'vel@maurisa.org', 'ornare, lectus ante dictum mi, ac mattis velit', 'tortor nibh sit', '2018-10-21'),
(14, 'Haviva Singleton', 'dolor@amet.edu', 'nulla vulputate dui, nec tempus mauris', 'aliquet nec, imperdiet nec,', '2019-04-12'),
(15, 'Venus Atkinson', 'gravida.nunc@etmagnis.com', 'dis parturient montes, nascetur ridiculus mus. Proin vel', 'risus a ultricies adipiscing, enim mi tempor', '2019-05-15'),
(16, 'Len Peters', 'imperdiet.nec@Nullam.net', 'Etiam laoreet, libero et tristique pellentesque, tellus', 'nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut', '2018-09-04'),
(17, 'Jonas Gibbs', 'risus.In.mi@interdumfeugiat.co.uk', 'Praesent interdum ligula eu enim.', 'ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet,', '2019-05-09'),
(18, 'Hamish Mendez', 'orci.Ut.semper@velesttempor.edu', 'per conubia nostra, per', 'malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros.', '2018-08-31'),
(19, 'Aretha Douglas', 'Mauris.magna.Duis@a.co.uk', 'quis lectus. Nullam suscipit, est', 'Sed molestie. Sed id risus quis diam luctus', '2018-10-18'),
(20, 'Chastity William', 'ipsum.sodales@miac.com', 'non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris', 'sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris,', '2018-10-29'),
(21, 'Kirk Ayala', 'magna.Lorem@faucibusorci.edu', 'vel quam dignissim pharetra.', 'Proin', '2019-02-18'),
(22, 'Keane Knowles', 'malesuada.malesuada.Integer@orcisemeget.ca', 'Pellentesque tincidunt tempus risus. Donec egestas. Duis', 'risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus', '2018-11-10'),
(23, 'Mannix Coffey', 'tellus.sem.mollis@dignissimMaecenas.net', 'Aliquam rutrum lorem ac risus. Morbi metus.', 'scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque', '2018-11-01'),
(24, 'Nissim Tyson', 'mollis@sit.ca', 'fermentum fermentum arcu. Vestibulum ante ipsum primis', 'odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis', '2019-02-18'),
(25, 'Quincy Cain', 'magna.nec@orci.org', 'orci luctus et ultrices posuere cubilia Curae; Donec tincidunt. Donec', 'egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit', '2019-05-05'),
(26, 'Geraldine Hansen', 'quam.Curabitur.vel@Duis.org', 'non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec', 'ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus,', '2018-08-28'),
(27, 'Theodore Larson', 'lacus.Quisque@sapiengravidanon.org', 'quis arcu vel', 'ac urna. Ut', '2018-11-20'),
(28, 'Yeo Workman', 'lacus.Nulla@mi.net', 'aliquet molestie tellus. Aenean egestas hendrerit', 'nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper', '2018-09-03'),
(29, 'Beck Galloway', 'et.ultrices@nequevenenatislacus.ca', 'nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris', 'Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus', '2019-04-05'),
(30, 'Shad Mcknight', 'pharetra.ut@vulputatelacusCras.net', 'tincidunt', 'ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis', '2018-07-22'),
(31, 'Kaden Richmond', 'sed.sapien@dictumsapienAenean.co.uk', 'at augue id', 'scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer', '2018-11-28'),
(32, 'Wade Graham', 'a@lacusQuisqueimperdiet.com', 'egestas a, scelerisque sed, sapien.', 'non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim,', '2018-06-10'),
(33, 'Ruby Mcclure', 'fermentum.metus@Proinultrices.co.uk', 'mauris, rhoncus', 'feugiat. Sed', '2018-11-15'),
(34, 'Porter Calhoun', 'turpis.nec.mauris@odiovelest.ca', 'id enim. Curabitur massa. Vestibulum accumsan neque et', 'vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida.', '2018-07-16'),
(35, 'Rigel Stafford', 'ornare.libero@primisin.net', 'Pellentesque tincidunt', 'turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc', '2018-12-21'),
(36, 'Claudia Ford', 'adipiscing@fermentumarcu.net', 'sit amet', 'Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer', '2018-06-26'),
(37, 'Shafira Myers', 'Duis.sit@Quisqueornaretortor.edu', 'interdum enim non nisi. Aenean eget metus.', 'sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu', '2019-03-30'),
(38, 'Timothy Callahan', 'cursus@Curabiturdictum.edu', 'Sed nulla ante, iaculis nec, eleifend', 'iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2018-10-25'),
(39, 'Emmanuel Clarke', 'nisl.Quisque@acsemut.com', 'aliquet', 'nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra.', '2018-11-24'),
(40, 'Brendan Ayala', 'scelerisque.lorem@Donecfelis.edu', 'Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci.', 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere', '2018-06-06'),
(41, 'Kimberley Woodard', 'nec@odiotristique.co.uk', 'nec, diam. Duis mi enim, condimentum eget, volutpat ornare,', 'nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim.', '2018-08-15'),
(42, 'Ivan Eaton', 'varius.orci.in@tincidunt.edu', 'sociis natoque penatibus et magnis dis parturient montes,', 'torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim,', '2018-10-14'),
(43, 'Dane Trujillo', 'sit.amet@Phasellusataugue.ca', 'hymenaeos. Mauris ut quam vel', 'ligula. Aenean gravida nunc sed pede.', '2018-07-15'),
(44, 'Beau English', 'dolor.Nulla@diam.co.uk', 'commodo ipsum. Suspendisse non leo. Vivamus nibh', 'vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum', '2019-02-08'),
(45, 'Drake Cobb', 'dictum.eleifend.nunc@cubilia.net', 'vitae semper egestas, urna justo faucibus lectus,', 'Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit', '2019-05-23'),
(46, 'Austin Wagner', 'sed@fringillaporttitorvulputate.edu', 'nec enim. Nunc ut erat. Sed nunc est, mollis non,', 'eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet', '2019-05-12'),
(47, 'Marny Campos', 'eget.venenatis@antelectusconvallis.edu', 'non quam. Pellentesque habitant morbi tristique senectus', 'facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend,', '2019-05-29'),
(48, 'Quinn House', 'tempus@semperpretiumneque.co.uk', 'Nulla facilisis. Suspendisse commodo tincidunt', 'Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo.', '2019-02-04'),
(49, 'Jerome Pitts', 'sem.ut@etrisus.ca', 'In lorem. Donec elementum, lorem', 'lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit', '2019-04-15'),
(50, 'Flynn Suarez', 'Maecenas.libero.est@ornareIn.org', 'nec enim. Nunc', 'pede sagittis', '2019-03-04'),
(51, 'Christen Giles', 'auctor@veliteusem.com', 'felis eget varius ultrices, mauris', 'Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est', '2019-01-18'),
(52, 'Evan Curry', 'imperdiet@tincidunt.edu', 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus', 'tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras', '2018-12-29'),
(53, 'Allistair Blankenship', 'Curabitur@dui.co.uk', 'sit amet lorem', 'sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus', '2018-09-19'),
(54, 'Althea Stanley', 'eros.Nam.consequat@Nullamutnisi.com', 'Mauris molestie pharetra nibh. Aliquam ornare, libero at', 'nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae,', '2018-08-30'),
(55, 'Megan Fry', 'semper.tellus@Maecenasiaculis.co.uk', 'tristique senectus', 'congue a, aliquet vel, vulputate eu, odio.', '2019-02-18'),
(56, 'Veda Underwood', 'arcu.imperdiet.ullamcorper@luctus.edu', 'a felis ullamcorper viverra. Maecenas iaculis aliquet', 'rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed', '2018-08-26'),
(57, 'Graiden Park', 'a.scelerisque.sed@ametnullaDonec.edu', 'et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu.', 'quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu.', '2019-04-15'),
(58, 'Rudyard Pope', 'Nullam.nisl.Maecenas@nequesed.com', 'leo. Cras vehicula aliquet libero.', 'id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem', '2019-02-27'),
(59, 'Valentine Barnes', 'Nunc@musAenean.co.uk', 'sed sem', 'metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque', '2019-02-15'),
(60, 'Hammett Parker', 'sit.amet@mollisInteger.com', 'erat, eget tincidunt dui augue eu tellus.', 'libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis', '2018-05-30'),
(61, 'Yetta Livingston', 'egestas.lacinia@leoCrasvehicula.co.uk', 'mi fringilla mi lacinia mattis. Integer', 'tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id,', '2018-08-06'),
(62, 'Shana Valdez', 'id@maurisblanditmattis.ca', 'ac, fermentum vel, mauris.', 'interdum enim non nisi. Aenean eget metus. In nec', '2018-07-11'),
(63, 'Herman Velazquez', 'dolor@libero.net', 'sapien. Nunc pulvinar arcu et pede.', 'a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor', '2018-10-19'),
(64, 'Russell Marks', 'nec.diam@etultrices.com', 'Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat,', 'purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis.', '2019-03-26'),
(65, 'Lacy Beck', 'ante.lectus@orci.co.uk', 'posuere', 'quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus', '2018-08-10'),
(66, 'Emily Lopez', 'vestibulum.lorem.sit@molestiein.co.uk', 'Praesent luctus. Curabitur', 'porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non', '2018-07-29'),
(67, 'Madeson Cooke', 'aliquet.lobortis@estacmattis.net', 'non, lobortis quis, pede. Suspendisse dui.', 'ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce', '2019-05-25'),
(68, 'Asher Farmer', 'Integer@Loremipsumdolor.co.uk', 'euismod in, dolor. Fusce feugiat. Lorem ipsum dolor', 'Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet', '2018-08-18'),
(69, 'Laurel Wolf', 'lacus.Ut@sed.ca', 'facilisis eget, ipsum. Donec sollicitudin adipiscing', 'luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque', '2018-12-11'),
(70, 'Felix Ware', 'amet.ante.Vivamus@iaculisnec.net', 'sapien. Aenean massa. Integer vitae nibh. Donec est', 'tempus, lorem fringilla', '2018-11-01'),
(71, 'Orson Horton', 'ullamcorper.viverra@Nuncullamcorpervelit.org', 'magna. Duis dignissim tempor arcu. Vestibulum ut', 'non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra', '2018-08-24'),
(72, 'Honorato Frye', 'fringilla@facilisiseget.org', 'volutpat. Nulla', 'sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus,', '2018-09-14'),
(73, 'Ifeoma Pennington', 'velit@convalliserat.edu', 'eu, accumsan sed, facilisis vitae, orci. Phasellus', 'sem semper erat, in', '2018-12-08'),
(74, 'Jane Perry', 'tristique.ac@Quisque.net', 'dui nec urna', 'Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis', '2019-05-20'),
(75, 'Samuel Hanson', 'auctor.quis.tristique@quislectusNullam.org', 'mi lacinia mattis.', 'vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit', '2018-10-09'),
(76, 'Ava Cabrera', 'tellus.lorem.eu@massaMauris.org', 'metus facilisis lorem tristique', 'lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur', '2019-01-09'),
(77, 'Winter Roman', 'mauris@pede.ca', 'elementum, lorem ut aliquam iaculis, lacus pede sagittis augue,', 'Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor', '2019-05-04'),
(78, 'Gage Lambert', 'augue@pharetra.net', 'pede, malesuada vel, venenatis vel, faucibus id, libero. Donec', 'magnis dis parturient montes, nascetur ridiculus mus.', '2019-02-04'),
(79, 'Giselle Floyd', 'non.nisi@a.org', 'feugiat tellus lorem eu metus.', 'orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a', '2019-04-06'),
(80, 'Jordan Kidd', 'Etiam@eget.edu', 'rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at,', 'vitae purus gravida sagittis. Duis gravida. Praesent', '2018-11-14'),
(81, 'Ira Conway', 'habitant.morbi.tristique@acmattisornare.net', 'Nulla facilisis. Suspendisse commodo tincidunt nibh.', 'rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at,', '2018-11-06'),
(82, 'Zelenia Berry', 'nec.leo.Morbi@in.co.uk', 'egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor', 'felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus', '2019-05-16'),
(83, 'Daniel Gay', 'at.risus@temporerat.org', 'non enim commodo hendrerit. Donec porttitor tellus non magna. Nam', 'vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit', '2019-03-11'),
(84, 'Mollie Trujillo', 'morbi.tristique@ullamcorper.org', 'Sed auctor', 'tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor,', '2019-03-19'),
(85, 'Chester Lloyd', 'mauris.id@cubiliaCuraePhasellus.com', 'tellus. Phasellus', 'nascetur ridiculus mus. Proin vel nisl. Quisque', '2018-09-14'),
(86, 'Hillary Hopkins', 'Maecenas@Duisac.edu', 'Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet', 'Quisque tincidunt pede ac urna.', '2018-10-10'),
(87, 'Wade Jordan', 'tellus.sem.mollis@leoCras.ca', 'Donec tincidunt. Donec vitae erat vel pede blandit congue.', 'amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque,', '2018-07-02'),
(88, 'Reed Hayes', 'Donec@tellusfaucibusleo.ca', 'sodales.', 'lorem vitae odio sagittis semper. Nam tempor', '2018-09-09'),
(89, 'Kennedy Joyner', 'in.lobortis@egestas.ca', 'aliquam eros', 'Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant', '2019-06-01'),
(90, 'Brody Taylor', 'sem.eget@feugiat.ca', 'mauris id sapien. Cras', 'tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis', '2019-01-06'),
(91, 'Kitra Herrera', 'hendrerit@sempertellusid.co.uk', 'tristique senectus et netus et malesuada fames ac turpis egestas.', 'Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam.', '2019-05-28'),
(92, 'Keelie Duffy', 'elit.dictum.eu@turpisnonenim.co.uk', 'diam. Sed', 'vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh.', '2018-08-30'),
(93, 'James Hansen', 'tellus@aliquet.co.uk', 'eget metus. In nec orci. Donec nibh. Quisque', 'dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla', '2019-05-16'),
(94, 'Griffith Jenkins', 'lorem.ipsum@Inat.ca', 'Pellentesque tincidunt tempus risus. Donec egestas. Duis ac', 'luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet', '2019-05-05'),
(95, 'Paloma Richardson', 'elit.dictum.eu@nonummyacfeugiat.edu', 'a feugiat tellus lorem eu', 'at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada', '2019-05-01'),
(96, 'Janna Ball', 'vitae.sodales.nisi@diamnuncullamcorper.com', 'quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed', 'neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce mollis. Duis', '2019-02-18'),
(97, 'Alexandra Irwin', 'est.Nunc@lorem.net', 'dictum mi, ac mattis', 'quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non', '2019-03-13'),
(98, 'Emery Odonnell', 'Sed.auctor.odio@magna.com', 'mauris.', 'scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus', '2018-11-14'),
(99, 'Ignatius Adams', 'mollis@diamloremauctor.com', 'fames', 'nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed', '2019-01-04'),
(100, 'Carol Mcintosh', 'tristique.ac.eleifend@turpis.com', 'et netus et malesuada fames ac turpis egestas. Fusce aliquet', 'quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec', '2018-09-29'),
(101, 'Upton Wallace', 'elit.dictum@enim.org', 'diam.', 'nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam.', '2019-03-29'),
(102, 'Rowan Myers', 'sit.amet.nulla@laciniaorci.ca', 'vitae purus gravida sagittis. Duis', 'justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede,', '2019-01-22'),
(103, 'Brielle Fischer', 'a.felis.ullamcorper@pulvinararcuet.org', 'ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque.', 'Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu.', '2019-02-05');

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id_img` int(255) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `selectname` varchar(255) NOT NULL,
  `id_position` int(255) NOT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`id_img`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id_img`, `filename`, `selectname`, `id_position`, `alt`, `source`) VALUES
(1, 'Bloodhound.jpg', 'epic', 2, 'Bloodhound wallpaper', 'https://www.uhdpaper.com/2019/02/apex-legends-bloodhound-4k-52.html'),
(2, 'apex-legends-bloodhound-uhdpaper.com-4K-36.jpg', 'background op', 3, 'Bloodhound with white background and a banner', 'https://wall.alphacoders.com/big.php?i=994036'),
(15, 'apex_legends_desktop_wallpaper1.jpg', 'Red WP', 6, 'Wallpaper', 'http://wallpapershdnow.com/apex-legends/apex-legends-background-13'),
(14, 'apex-legends-bloodhound-the-runekeeper.jpg', 'Leg skin 1', 1, 'Legendary skin', 'https://www.apexskins.net/imperial-warrior/'),
(16, 'apex-legends-bloodhound-art-4K-6.jpg', 'hunt', 8, 'Bloodhound hunt a creature with a knife', 'https://www.uhdpaper.com/2019/02/apex-legends-bloodhound-art-4k.html'),
(17, 'apex-legends-bloodhound-uhdpaper.com-4K-71.jpg', 'wp grass', 4, 'Bloodhound with a legendary skin pointing something in the grass', 'https://www.uhdpaper.com/2019/03/apex-legends-bloodhound-4k-71.html'),
(18, '991594.jpg', 'map', 5, 'apex legends map', 'https://wall.alphacoders.com/big.php?i=991594'),
(19, 'apex-legends-bloodhound-royal-guard-1.jpg', 'legendary skin 2', 10, 'Bloodhound red legendary skin', 'https://apex-legendsskins.com/2019/02/19/royal-guard-bloodhound/'),
(20, 'apex-legends-all-characters-uhdpaper.com-4K-37.jpg', 'all characters', 7, 'Apex wallpaper with every character on it', 'https://www.xtrafondos.com/en/wallpaper/3840x2160/3032-apex-legends-personajes.html'),
(21, 'apex-legends-bloodhound-uhdpaper.com-4K-58.jpg', 'Bloodhound wheat wallpaper', 9, 'Bloodhound wallpaper with splash effects', 'https://www.uhdpaper.com/2019/02/apex-legends-bloodhound-4k-58.html'),
(22, 'flat,1000x1000,075,f.u1.jpg', 'Bloodhound icon', 11, 'Bloodhound icon 1000x1000 black and white', 'https://www.redbubble.com/fr/people/bitradical/works/37556530-apex-legends-bloodhound-samurai-clean-white'),
(28, 'mp,840x830,matte,f8f8f8,t-pad,1000x1000,f8f8f8.png', 'Retro BH', 12, '80s style Bloodhound phone wallpaper', 'https://www.redbubble.com/fr/people/ninjadesigninc/works/37284845-apex-legends-bloodhound-80s-retro-outrun-poster?p=canvas-print&rel=carousel&size=x_large');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(10) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_membre`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `nickname`, `password`, `firstname`, `lastname`, `admin`) VALUES
(5, 'exemple', '$2y$10$nMInx6yOIljZMjHHy6c77e2X6h7BOdtn3vQpTU5F0ifdLr0vh.CtK', 'everyone', 'get in here', 0),
(4, 'FairFight', '$2y$10$zKzaPGA08sL2Fg3lEVbk4O.LXG3b9Dk7ZRE5xAd6DLtaIdoojfXna', 'Sosthene', 'Fruchard', 1),
(9, 'Marine', '$2y$10$4pR0cmuyoLkS/sENLpnMzOrW9rOx5MQy7QaW/pxFw33tnT1hG9euW', 'Marine', 'Auribault', 0),
(10, 'dqzdzqd', '$2y$10$Fd8J.S9bB0e/3lZZkfeh2eMUP2QRPu0Qv1esS0gKsQApIsVlndE1i', 'dzqdqzqdzqd', 'dzqdqdqz', 0),
(11, 'Fabrine', '$2y$10$C/FaP3EYn/XCZmkI1sMiN.Etc4Q2.dADJYoeft3a1iDKnMa5Oo26e', 'fabbbb', 'fabbbb', 0),
(12, 'Always Juicy', '$2y$10$BTkuwJP1bqJXHrowlnq04.RHNlWjf2hKrg8HayuWaQwdp2LG1gaNu', 'Maximus', 'Lecuyus', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
