-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 166.62.8.46
-- Generation Time: Jun 18, 2015 at 11:03 PM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topica`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_customer`
--

CREATE TABLE `app_customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `houseno` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=275 ;

--
-- Dumping data for table `app_customer`
--

INSERT INTO `app_customer` VALUES(30, 'sheila', 'ruiz', 'sheilaruiz@aol.com', 'whit iph 6', '1234p/2345');
INSERT INTO `app_customer` VALUES(31, 'charging', 'station', 'admin@thechargingstation.com', 'macbook', '4567');
INSERT INTO `app_customer` VALUES(33, 'brittany', 'mcglynn', 'mcg@aol.com', 'iph 6 otter box	', '1234');
INSERT INTO `app_customer` VALUES(34, 'brittany', 'm', 'bkm@gmail.com', 'blake leather case iphone5', '234');
INSERT INTO `app_customer` VALUES(40, 'paige', 'ruiz', 'ruiz@aol.com', 'samsung blue	', '22345');
INSERT INTO `app_customer` VALUES(41, 'Paige', 'Ruiz', 'paigeruiz96@gmail.com', 'samsung galaxy sw4 active grey with green edges', '1234');
INSERT INTO `app_customer` VALUES(45, 'brian', 'ruiz', 'caffellc@gmail.com', 'iphone6', '1234');
INSERT INTO `app_customer` VALUES(46, 'sheila', 'mcglynn', 'sheila@istocool.com', 'iphone5', '1235');
INSERT INTO `app_customer` VALUES(57, 'dye', 'Rui', 'ryj@Bhuj.ghu', 'Rah', ';(7');
INSERT INTO `app_customer` VALUES(58, 'Marty', 'Ruiz', 'mruiz2@columbus.rr.com', 'Blac', '1234');
INSERT INTO `app_customer` VALUES(59, 'Ashley', 'mcglynn', 'ashleymcgly1@gmail.com', 'iPhone 6 in white life proof', '400');
INSERT INTO `app_customer` VALUES(60, 'arena', 'miller', 'ljrland@yahoo.com', 'Green iPhone 5C ', '123');
INSERT INTO `app_customer` VALUES(61, 'universal', 'studios', 'uoteam@universalorlando.com', 'Best place ever!!!', '3057754');
INSERT INTO `app_customer` VALUES(64, 'Brittany', 'ok', 'hgmJsdgcgujs@gmail.com', 'Black I phone 5 otter box Case', '123');
INSERT INTO `app_customer` VALUES(65, 'Trevor', 'hill', 'tdhill91@gmail.com', 'iPhone 5s black case', '7342p/7340p/');
INSERT INTO `app_customer` VALUES(66, 'Joel', 'Perez', 'jp9671@hotmail.com', 'Goprohero3white', '7341p/');
INSERT INTO `app_customer` VALUES(67, 'Michael', 'hankies', 'mikehankes@gmail.com', 'White iPhone 4 with black otter box', '7338');
INSERT INTO `app_customer` VALUES(68, 'holly', 'rivers', 'riverchicks@yahoo.com', 'Galaxy note 3 purple and turquoise', '7339p/');
INSERT INTO `app_customer` VALUES(69, 'Lynn', 'miller', 'donfmiller@windstream.net', 'Black galaxys6', '7334');
INSERT INTO `app_customer` VALUES(70, 'Mary', 'korthauer', 'dmpkort@Comcast.net', 'iPhone 5 green blue case ', '7336p/');
INSERT INTO `app_customer` VALUES(71, 'Sidney', 'Westlake', 'westlakeri@baylorschool.org', 'White iPhone 4 the back is cracked', '7335');
INSERT INTO `app_customer` VALUES(72, 'Steve', 'fruit hey', 'sfritchley73@gmail.com', 'iPhone 5s', '7333');
INSERT INTO `app_customer` VALUES(73, 'Ethan', 'Tordoff', 'Tordoff.ethan@gmail.com', 'Blue iPhone 5c with a black case with a clear Barack', '7337p/');
INSERT INTO `app_customer` VALUES(74, 'Wendy', 'belligerent', 'rmrwendy@sbcglobal.net', 'Black I phone 6 otter box', '5345p/');
INSERT INTO `app_customer` VALUES(75, 'Samantha', 'grits', 'sgritz1@yahoo.com', 'iPhone 5s incipio case', '5346');
INSERT INTO `app_customer` VALUES(76, 'Kim', 'Cummings', 'littlemakena@hotmail.com', 'iPhone 6 black otter box', '5347');
INSERT INTO `app_customer` VALUES(77, 'wade', 'Evans', 'wadeevans26@gmail.com', 'Pink case iPhone 6 / iPhone 5s green teal otter box', '5418p/ 5419p/');
INSERT INTO `app_customer` VALUES(78, 'Cody', 'johns', 'breadman1834@yahoo.com', 'Galaxy active s5, no case', '5350p/');
INSERT INTO `app_customer` VALUES(79, 'Anthony', 'Guglielmucci', 'Smores290@hotmail.com', 'Black iPhone 5s Black Otter Box, Picture of girl and singer guy is screen saver', '5349p/9914');
INSERT INTO `app_customer` VALUES(80, 'joe', 'scagliola', 'joethecrowderp@gmail.com', 'Red speck case. Picture of eminem fucking a deer as background. ', '5352p/');
INSERT INTO `app_customer` VALUES(81, 'taylor', 'nock', 'tnoack55@yahoo.com', 'iPhone 5, white and black spec case(cracked at bottom)', '5351p/');
INSERT INTO `app_customer` VALUES(82, 'Ryan', 'Waters', 'Ryan@GWRDistilling.com', 'Birdsong Brewing on white iPhones', '5353p/');
INSERT INTO `app_customer` VALUES(83, 'Shannon', 'grab ouch', 'smgrabosch@gmail.com', 'Hot pink moto x with cracked screen. Back says shanny g', '5354p/');
INSERT INTO `app_customer` VALUES(84, 'Emma', 'Phillips', 'emma_phillips@my.uri.edu', 'iPhone 4s with a blue and brown vans case', '5355p/');
INSERT INTO `app_customer` VALUES(85, 'Patrick', 'almond', 'patrick_almonte@my.uri.edu', 'Black iPhone.  purple charging cord ', '5356');
INSERT INTO `app_customer` VALUES(86, 'Kristi', 'Mulligan', 'kmulliganemu@aol.com', 'iPhone 4s with pink case', '5395p/');
INSERT INTO `app_customer` VALUES(87, 'Carmen', 'bertucci', 'carmenbertucci@gmail.com', 'iPhone 6 plus white brand new', '5358p/');
INSERT INTO `app_customer` VALUES(88, 'ivo', 'Hughes', 'Ivo.hughes@gmail.com', 'iPhone 5 32 gb purple cord', '5359p/');
INSERT INTO `app_customer` VALUES(89, 'Lauren', 'stroud', 'les8837@alum.uncw.edu', 'Two iPhones. One a 4. One a 5. Both in back cases', '5361p/5360p/');
INSERT INTO `app_customer` VALUES(90, 'Lisa', 'Janie', 'lisaheldjanke@gmail.com', 'Samsung note 4', '5362p/');
INSERT INTO `app_customer` VALUES(91, 'makala ', 'Shankle', 'mshankle@baylorschool.org', 'iPhone 6 blue and white Trina Turk case ', '5364p/');
INSERT INTO `app_customer` VALUES(92, 'Kelley', 'Roark', 'kane159@aol.com', 'iPhone 4s with white iPhone charger', '5363p/');
INSERT INTO `app_customer` VALUES(93, 'Meghan', 'cannon', 'nothanks@gmail.com', 'White bubble iPhone ', '5365p/');
INSERT INTO `app_customer` VALUES(94, 'Rebecca', 'chunn', 'rmchunn@gmail.com', 'Iphone5cpurpleiphone', '5366p/');
INSERT INTO `app_customer` VALUES(95, 'aurley', 'Morris', 'aurley@gmail.com', 'iPhone 5 with green and pink case', '5367p/');
INSERT INTO `app_customer` VALUES(96, 'Stephanie', 'Stoessel', 'stephstoes98@gmail.com', 'Iphone 6 clear case with tickets and fortunes in it ', '5369p/');
INSERT INTO `app_customer` VALUES(97, 'Cory', 'Aiken ', 'coryjaiken@gmail.com', 'Galaxy s5 with black uag cover', '5368p/');
INSERT INTO `app_customer` VALUES(98, 'Kyle', 'Johnston', 'johnskp@sewanee.edu', 'White IPhone 5 with cracks on the back by the camera', '5370p/');
INSERT INTO `app_customer` VALUES(99, 'Codie', 'early', 'codiemantooth@gmail.com', 'White IPhone 6 with an eel as the lock screen.', '5371p/');
INSERT INTO `app_customer` VALUES(100, 'Wendy', 'Laplander', 'wjlrnc@AOL.com', 'Samsung Galaxy w blue and black case', '5372');
INSERT INTO `app_customer` VALUES(101, 'Adam', 'davidsaver', 'adavidsaver@gmail.com', 'Extremely cracked white iPhone 5', '5373p/');
INSERT INTO `app_customer` VALUES(102, 'mark', 'Hawes', 'hawes_m@hotmail.com', 'iPhone 5 with grey case', '5374');
INSERT INTO `app_customer` VALUES(103, 'Elle', 'fouse case', 'indianrocks503@yahoo.com', 'Samsung blue case and green purple iPhone', '5398-5399p/');
INSERT INTO `app_customer` VALUES(104, 'Llandale', 'Enalls', 'llandalep@aol.com', 'White, clear life proof ', '5427');
INSERT INTO `app_customer` VALUES(105, 'Nathan ', 'mote', 'Nathan.mote@gmail.com', 'iPhone 6 black on brown case', '5377');
INSERT INTO `app_customer` VALUES(106, 'Aspen', 'Foltz', 'aspen.foltz@gmail.com', 'Gold iPhone 5s arctic monkeys case ', '5379p/');
INSERT INTO `app_customer` VALUES(107, 'John', 'Evans', 'drjohne@ymail.com', 'Iphone5lightbluecase', '5380p/');
INSERT INTO `app_customer` VALUES(108, 'Chris', 'bow hay', 'christopherbowhay@me.com', 'iPhone 4 black incipio case', '5381/p');
INSERT INTO `app_customer` VALUES(109, 'Jennifer', 'Lund', 'pchef_lund@yahoo.com', 'iPhone 4 blue purple case', '5382p/');
INSERT INTO `app_customer` VALUES(110, 'Trevor', 'Brittingham', 'brittingham79@hotmail.com', 'IPhone 5s black sleeve', '5383p/');
INSERT INTO `app_customer` VALUES(111, 'Jeff', 'Carpenter', 'carpenterjcc@gmail.com', 'White iPhone 5S. Black case', '5384p/');
INSERT INTO `app_customer` VALUES(112, 'Amanda', 'aides', 'aades93@gmail.com', 'iPhone 5 with black and grey speck case', '5385p/');
INSERT INTO `app_customer` VALUES(113, 'nick', 'genthner', 'gte727z@gmail.com', 'Grey htc m8 one', '5386p/');
INSERT INTO `app_customer` VALUES(114, 'loeung', 'dean', 'loeungdean@yahoo.com', 'Gs4 otter box gray', '5387/p');
INSERT INTO `app_customer` VALUES(115, 'skylark', 'marr', 'skylermarr33@gmail.com', 'White iPhone 5 with black case with cd stickers on it', '5388p/');
INSERT INTO `app_customer` VALUES(116, 'Anna', 'Marta', 'Martz.anna@yahoo.com', 'White Galaxy s5', '5389p/');
INSERT INTO `app_customer` VALUES(117, 'Casey', 'king', 'Casey.king986@gmail.com', 'Blue 5s with clear/orange ', '5390');
INSERT INTO `app_customer` VALUES(118, 'joe', 'Purnell ', 'joepurnell@Comcast.net', 'iPhone 6 plus', '5392p/');
INSERT INTO `app_customer` VALUES(119, 'brad', 'rains', 'bradrains95@yahoo.com', 'I phone with yellow otter box', '5391p/');
INSERT INTO `app_customer` VALUES(120, 'Diane', 'Mack', 'dmackstar@mac.com', 'iPhone 5 blue case.', '5393p/');
INSERT INTO `app_customer` VALUES(121, 'Caleb', 'heikkila', 'cmheikkila@gmail.com', 'iPhone 5s bulk', '5394p/');
INSERT INTO `app_customer` VALUES(122, 'regi', 'Roberts ', 'regiroberts@Comcast.net', 'iPhone 5s or C pinker hard case', '5396p/');
INSERT INTO `app_customer` VALUES(123, 'Ronnie', 'Hawkins', 'ronzo96@yahoo.co', 'Green yin yang', '0008/P');
INSERT INTO `app_customer` VALUES(124, 'Katie', 'mulligan', 'kmullig1@emich.edu', 'iPhone with black lifeproof case', '5397p/');
INSERT INTO `app_customer` VALUES(125, 'shade', 'Winfrey', 'shade.winfrey@yahoo.com', 'Black iPhone 5 with LSU case and black iPhone 6 with white polka dot case ', '5423. 5424p/');
INSERT INTO `app_customer` VALUES(126, 'Alison', 'Green', 'alisonjoygreen@gmail.com', 'Green iPhone 5s with black cover with holes on the back', '5400p/');
INSERT INTO `app_customer` VALUES(127, 'Angie', 'berntson', 'angieberntson@gmail.com', '5c with blue and grey case ', '5401p/');
INSERT INTO `app_customer` VALUES(128, 'Paris', 'Jean', 'parisjean99@gmail.com', 'Gold 5s white and blue case horse screen saver. Gold 5s background two girls @ jazz fest ', '5490,5491p/');
INSERT INTO `app_customer` VALUES(129, 'Susan', 'Mathias', 'skmathias@gmail.com', 'Purple case iPhone 6', '5404p/');
INSERT INTO `app_customer` VALUES(130, 'Martin', 'sills', 'mds0742@gmail.com', 'iPhone 5c blue with blue and black speck case', '0007P/');
INSERT INTO `app_customer` VALUES(131, 'Pamela', 'Treacy', 'pamelatreacy@AOL.com', 'Leopard case iPhone 4s', '5405p/');
INSERT INTO `app_customer` VALUES(132, 'Taylor', 'Thayer', 'thayert1@msu.edu', 'iPhone 5s', '0006P/');
INSERT INTO `app_customer` VALUES(133, 'Lauren', 'Plath', 'lplath1986@gmail.com', 'Lg G3 peacock feather case', '0005');
INSERT INTO `app_customer` VALUES(134, 'Tara', 'miller', 'mille818@miamioh.edu', 'White iPhone 5s with white case with black pocket on the back (Kate spade )', '0004');
INSERT INTO `app_customer` VALUES(135, 'Lynn ', 'Barron ', 'westrut@yahoo.com', 'iPhone 4 with hard black case ', '5406p/');
INSERT INTO `app_customer` VALUES(136, 'Kayla', 'Walters', 'kmwalters96@aol.com', 'iPhone 5s with purple otter box', '0002P/');
INSERT INTO `app_customer` VALUES(137, 'Joel ', 'woods', 'woodsj009@yahoo.com', 'Tech 21 brown case iPhone ', '0001/P');
INSERT INTO `app_customer` VALUES(138, 'Subrata', 'Debnath', 'sdebnath@analysisexpress.com', 'iPhone 5 grey back', '5409p/');
INSERT INTO `app_customer` VALUES(139, 'Sammy ', 'Perez', 'chiroc.sam@gmail.com', 'Iphone6  backflip case with receipt inside ', '0000P/');
INSERT INTO `app_customer` VALUES(140, 'josh', 'woods', 'jmastawoods@gmail.com', 'iPhone 6 in black speck case', '9998p/');
INSERT INTO `app_customer` VALUES(141, 'Eric ', 'Sanchez', 'esanchlsu@yahoo.com', 'iPhone 4s', '5417p/');
INSERT INTO `app_customer` VALUES(142, 'Whitney', 'Pratt', 'wpratt@iupui.edu', 'Black iPhone 4', '5411p/');
INSERT INTO `app_customer` VALUES(143, 'Pam', 'ohradzansky', 'ohradzansky1@gmail.com', 'White iPhone 5 with black case', '5412p/');
INSERT INTO `app_customer` VALUES(144, 'Natalie', 'if ours', 'natkfoury@gmail.com', 'Samsung galaxy s5 with grey otter box case', '9993P/');
INSERT INTO `app_customer` VALUES(145, 'Chris', 'semmer', 'csemmer1@gmail.com', 'Atomi spare battery evergreen sticker', '9996P/');
INSERT INTO `app_customer` VALUES(146, 'Tyler', 'Marsh', 'tmarsh40@hotmail.com', 'Osheaga phone case, selfie of two guys holding a soccer trophy as the home screen hahaha.', '9995');
INSERT INTO `app_customer` VALUES(147, 'Katy', 'Anderson', 'kayandersonxx@yahoo.com', 'White iPhone 5S with pink/blue coral case ', '9991P/');
INSERT INTO `app_customer` VALUES(148, 'Victoria', 'zig adobo', 'vzigadlo@gmail.com', 'Gold iPhone 6 in clear case', '9989P/');
INSERT INTO `app_customer` VALUES(149, 'niaz', 'uddin ', 'niaz_1993@hotmail.com', 'iPhone 3GS', '9988');
INSERT INTO `app_customer` VALUES(150, 'Jacob', 'breed', 'jdb2bm@mtmail.mtsu.edu', 'iPhone 6 plus in white and grey life proof case', '9986p/');
INSERT INTO `app_customer` VALUES(151, 'Ricky', 'escandon ', 'Rick.escandon21@yahoo.com', 'iPhone 5s no case ', '9984P/');
INSERT INTO `app_customer` VALUES(152, 'Brittany ', 'McKenna', 'persephone4lost@gmail.com', 'iPhone 6 casemate gold sparkly case', ' 5414p/');
INSERT INTO `app_customer` VALUES(153, 'Lauren', 'Koch', 'lkoch879@gmail.com', 'Purple case iPhone 4s ', '9982P/');
INSERT INTO `app_customer` VALUES(154, 'Jane', 'Hearn', 'janecarrington@live.com', 'White/gold iPhone 5s in a black case, slight crack on bottom of case', '9983P/');
INSERT INTO `app_customer` VALUES(155, 'Daniel', 'Baldwin', 'dapabald@gmail.com', 'Black LG G3 with tech 21 case', '5415p/');
INSERT INTO `app_customer` VALUES(156, 'Alex', 'Edwards', 'Alexalexedwards@gmail.com', 'iPhone 5s black case', '5416P/');
INSERT INTO `app_customer` VALUES(157, 'raj', 'banik', 'rbanik@gmail.com', '1. Black phone 5, 2. Silver iPhone 6 with spigen case', '9979,9978P/');
INSERT INTO `app_customer` VALUES(158, 'Jenny', 'Stone', 'jfstone@Stetson.edu', 'White iPhone 5, cracked iPhone 4 with orange and grey case', '9977');
INSERT INTO `app_customer` VALUES(159, 'Hannah', 'Fageeh', 'hannahfageeh@gmail.com', 'Pink lifeproof white iPhone and black iPhone pineapple case', '9981/9980');
INSERT INTO `app_customer` VALUES(160, 'David', 'Reisberg', 'libero634@gmail.com', 'HTC One M9 w/ DOT folding cover', '9976');
INSERT INTO `app_customer` VALUES(161, 'Kristin', 'Calvert', 'krystinnn23@yahoo.com', 'iPhone 5c pink ', '9974P/');
INSERT INTO `app_customer` VALUES(162, 'Emily', 'Calvert', 'ecalv27@hotmail.com', 'Aztec case iPhone 5s', '9975P/');
INSERT INTO `app_customer` VALUES(163, 'Bethany', 'Kotun ', 'Bethany.kotun@gmail.com', 'Black 16 GB iPhone 5S with red and white polka dot case. ', '9973P/');
INSERT INTO `app_customer` VALUES(164, 'Garrett', 'noble', 'garrettwaitforitnoble@gmail.com', 'Galaxy s three. Looks as tho rye punched the screen. Hyduken.', '9972P/');
INSERT INTO `app_customer` VALUES(165, 'Thomas', 'johns tone', 'tjohnstonejr@live.com', 'iPhone 6', '5430p/');
INSERT INTO `app_customer` VALUES(166, 'Chloe', 'story', 'chloescory@hotmail.com', 'Pink phone case and a my lock screen picture is me at prom. #keepthepeace and rock on ðŸ˜‡ðŸŒ·âœŒðŸ»', '9971');
INSERT INTO `app_customer` VALUES(167, 'Ella ', 'lindskou get', 'ellalindskoug@gmail.com', 'iPhone 6 black with charging case', '9968');
INSERT INTO `app_customer` VALUES(168, 'Jonathan', 'Snyder', 'Snyder.jonathan82@gmail.com', 'Galaxy s3 dark blue case', '9969P/');
INSERT INTO `app_customer` VALUES(169, 'Adam', 'Hayden', 'ahayden95@yahoo.com', 'Black case, iPhone 5, crack down screen', '9962P/');
INSERT INTO `app_customer` VALUES(170, 'Johanna ', 'Leifland', 'Johanna.leifland@gmail.com', 'iPhone 4S white, black and pink case', '9964');
INSERT INTO `app_customer` VALUES(171, 'evil', 'whiting', 'evil.whiting@gmail.com', 'iPhone 6 purple case, pic of couple with red headed guy as background', '9963P/');
INSERT INTO `app_customer` VALUES(172, 'Patrick', 'Kelly', 'patrickmikekelly@gmail.com', 'Samsung Galaxy 5s; black otter box case', '8034466087');
INSERT INTO `app_customer` VALUES(173, 'Stephanie', 'Macintosh', 'stephanie_mcintosh20@yahoo.com', 'Cracked iphone5s white', '7024690950P/');
INSERT INTO `app_customer` VALUES(174, 'chris', 'harris', 'harris.christopher65@gmail.com', 'Iphone5 white cover', '9959P/');
INSERT INTO `app_customer` VALUES(175, 'dean', 'bro well', 'dbrowell@me.com', 'iPhone 6 gray metal stripe back', '9957P/');
INSERT INTO `app_customer` VALUES(176, 'Sonja', 'dale', 'sld5389@aol.com', 'iPhone 5s. Purple otter box ', '9956');
INSERT INTO `app_customer` VALUES(177, 'Aisha ', 'Jones', 'aishaj87@gmail.com', 'iPhone 5 with teal case and go pro hero 4', '9954/9955p/');
INSERT INTO `app_customer` VALUES(178, 'savannah ', 'Goldman', 'savannah_golman21@yahoo.com', 'Blue and white Lilly case with owls, cracked left top', '8647355030');
INSERT INTO `app_customer` VALUES(179, 'Darryl', 'Harrison', 'ogsunidee@gmail.com', 'iPhone 5 red blue case. White phone', '9948p/');
INSERT INTO `app_customer` VALUES(180, 'Rachel', 'parks', 'rkp446@mail.missouri.edu', 'iPhone 5s with pink and white striped case', '9947p/');
INSERT INTO `app_customer` VALUES(181, 'Sam', 'klimas ', 'samklimas118@gmail.com', 'White iPhone five ', '9945P/');
INSERT INTO `app_customer` VALUES(182, 'micheline', 'Guerrero', 'michelineguerriero@gmail.com', 'Orange otter mix cracked front left', '9944P/');
INSERT INTO `app_customer` VALUES(183, 'shad den', 'Brock', 'shaddenbrock@gmail.com', 'Huawei black, no case, cracked screen', '5436p/');
INSERT INTO `app_customer` VALUES(184, 'parke', 'breneiser', 'parkewaydrive@gmail.com', 'Samsung galaxy note 3, black otter box, hairline crack in screen, locked with pattern', '9942');
INSERT INTO `app_customer` VALUES(185, 'call an', 'piazza', 'cpiazza@email.com', 'White iPhone 4 with pink case', '9940');
INSERT INTO `app_customer` VALUES(186, 'Charles', 'McCain', 'mccainca@gmail.com', 'iPhone 6plus grey and black case', '5428');
INSERT INTO `app_customer` VALUES(187, 'Francis', 'ditto I', 'pkc3691~@gmailcom', 'Motorola black droid', '9939P/');
INSERT INTO `app_customer` VALUES(188, 'Paige', 'breneiser', 'paigeroxyourmom@gmail.com', 'Samsung Galaxy s4 in lime green and grey otter box face', '9941');
INSERT INTO `app_customer` VALUES(189, 'Paul', 'charlonne', 'pkc3691@yahoo.com', 'iPhone 6', '9938P/');
INSERT INTO `app_customer` VALUES(190, 'Taylor', 'kern', 'taylor_kern@aol.com', 'iPhone 6  black otter box', '9937P/');
INSERT INTO `app_customer` VALUES(191, 'Jason', 'Mancini', 'Jason.a.mancini@gmail.com', 'Grey and black incipio case', '9936p/');
INSERT INTO `app_customer` VALUES(192, 'Candy', 'Guerrant', 'candiceguerrant@me.com', 'Salmon Colored', '5429p/');
INSERT INTO `app_customer` VALUES(193, 'tami', 'mendelson', 'tmendels@mail.usf.edu', 'Purple speck iPhone 5s pic of dog', '9935p/');
INSERT INTO `app_customer` VALUES(194, 'Steven', 'cox', 'scox615@yahoo.com', 'iPhone 6 in an orange case', '9934P/');
INSERT INTO `app_customer` VALUES(195, 'Jessica', 'berry', 'jmb2ds@mtmail.mtsu.edu', 'Black iPhone 6plus with pink case', '9933P/');
INSERT INTO `app_customer` VALUES(196, 'Natasha', 'Trimble', 'tashat223@yahoo.com', 'Galaxy s4, cracked screen', '9932');
INSERT INTO `app_customer` VALUES(197, 'Maddox', 'wilkinson', 'wilkinsonmaddox@gmail.com', '4 iPhones with black blue and white cases', '9928,9929,9930,9931P/');
INSERT INTO `app_customer` VALUES(198, 'Debbie', 'Mackey', 'debmackey56@bellsouth.net', 'Samsung Galaxy white case', '5431p/');
INSERT INTO `app_customer` VALUES(199, 'Stuart', 'Merrick', 'stumanchu61@yahoo.com', 'iPhone 4 camo otter box', '5432');
INSERT INTO `app_customer` VALUES(200, 'Autumn', 'McNutt', 'autumnmcnutt97@gmail.com', 'iPhone 5s', '9925P/');
INSERT INTO `app_customer` VALUES(201, 'Kate', 'Merrill', 'rugbysqueeks11@gmail.com', 'iPhone - rainbow plaid case', '5433');
INSERT INTO `app_customer` VALUES(202, 'Andrew', 'Solomon', 'andrewsolomon1990@gmail.com', 'iPhone 5 without case. Nittany lion statue on lock screen. ', '9922P/');
INSERT INTO `app_customer` VALUES(203, 'Teresa', 'Yarbrough', 'tyarbrough92@gmail.com', 'White 5s in blue and purple otter box.   Black mop hie', '9923/9924P/');
INSERT INTO `app_customer` VALUES(204, 'chad', 'Herschel', 'chadhirsch22@gmail.com', 'Galaxy s5 blue rubber case', '9921');
INSERT INTO `app_customer` VALUES(205, 'Carlo', 'baker', 'carlo@glostyle.com', 'Busted Galaxy 3', '5434p/');
INSERT INTO `app_customer` VALUES(206, 'Chris', 'Hemphill', 'wchemphill@gmail.com', 'Motorola droid razor', '6153377838');
INSERT INTO `app_customer` VALUES(207, 'Taylor', 'Hubbard', 'thubbard987@gmail.com', 'White iPhone 5s with white case with eye balls on the back', '9920p/');
INSERT INTO `app_customer` VALUES(208, 'Elizabeth', 'Bryant', 'elizabethashleybryant@gmail.com', 'iPhone 6 Plus black Apple case', '9919');
INSERT INTO `app_customer` VALUES(209, 'Isaac', 'Hayden', 'ihayden21@yahoo.com', 'iPhone 5, no case. Background is of a fire. ', '9918');
INSERT INTO `app_customer` VALUES(210, 'Rebekah ', 'smith', 'Rebekah.smith613@topper.wku.edu', 'White iPhone 6, turquoise case ', '9917P/9917');
INSERT INTO `app_customer` VALUES(211, 'Olivia', 'Henry', 'olivia@lyft.com', 'iPhone 6 with a black and gold case, has a phone number for Haley on lock screen', '5437p/');
INSERT INTO `app_customer` VALUES(212, 'Derek ', 'sweezey', 'dereksweezey@gmail.com', 'Black otter box iPhone 6', '9916P/');
INSERT INTO `app_customer` VALUES(213, 'Claire', 'bumpous', 'Claire.bumpous477@topper.wku.edu', 'White iPhone 6 with blue otterbox case ', '9915');
INSERT INTO `app_customer` VALUES(214, 'Shelby', 'king', 'skking2@crimson.ua.edu', 'Black iPhone  6 with beach background ', '9913P/');
INSERT INTO `app_customer` VALUES(215, 'Dave', 'rich', 'drich@fewpb.net', 'Galaxy I is', '9912P/');
INSERT INTO `app_customer` VALUES(216, 'Michael', 'beach', 'mbeach2848@yahoo.com', 'Black lifeproof iPhone 5s', '9911p/');
INSERT INTO `app_customer` VALUES(217, 'Stephen', 'McIntyre', 'gtpiamp07@live.com', '2 iPhones, a 6 and a 5s', '5438. 5439p/');
INSERT INTO `app_customer` VALUES(218, 'Kyle', 'ole art', 'koleary1977@att.net', 'iPhone 6 silver ', '9910p/');
INSERT INTO `app_customer` VALUES(219, 'Kevin', 'Murphy', 'murphkw@hotmail.com', 'Two iPhones white and black', '9908,9909p/');
INSERT INTO `app_customer` VALUES(220, 'Ryen', 'Beach', 'ryenb1@gmail.com', 'White and gold iPhone 5s with no case and a lacrosse picture as lock screen', '9907P/');
INSERT INTO `app_customer` VALUES(221, 'Justin ', 'Johnson', 'Justin.johnson@texasairsystems.com', 'White iPhone 6', '5440p/');
INSERT INTO `app_customer` VALUES(222, 'Ellie', 'shrank', 'elkieshramek1@gmail.com', 'iPhone 5s', '5441p/');
INSERT INTO `app_customer` VALUES(223, 'Madison ', 'Scott', 'Madisonleescott@gmail.com', 'Rain drops iPhone 6', '5442');
INSERT INTO `app_customer` VALUES(224, 'Bryan', 'Byrnes', 'bryanbyrnes9@gmail.com', 'Htc1 m8 black blue and grey patterned cover', '9904p/');
INSERT INTO `app_customer` VALUES(225, 'Amanda', 'Yates', 'amandayates@live.com', 'Black iPhone 6 ', '5443p/');
INSERT INTO `app_customer` VALUES(226, 'Pete', 'Vance', 'pmvjr73@yahoo.com', 'Face cover peel', '9902P/');
INSERT INTO `app_customer` VALUES(227, 'Mary Beth', 'shall a', 'mbleach13@aol.com', 'iPhone 5 black with green case', '9901');
INSERT INTO `app_customer` VALUES(228, 'Silvia', 'Nunez', 'silvianunez01@gmail.com', 'Orange Bluetooth speaker, gold battery, pink battery bank', '5445p/ - 5446p/ - 5444p/');
INSERT INTO `app_customer` VALUES(229, 'brad', 'schalla', 'bschalla@gmail.com', 'iPhone 5 black case', '9900');
INSERT INTO `app_customer` VALUES(230, 'Ian', 'cruises', 'iancruiess@gmail.com', 'iPhone 6, black case on airplane mode', '5447p/');
INSERT INTO `app_customer` VALUES(231, 'max', 'suckle', 'max@suckle.net', '1) Gray Galaxy s5 no case --- 2) Blue HTC Very cracked screen -- 3) orange alter Lansing speaker', '5448,5449,5450p/');
INSERT INTO `app_customer` VALUES(232, 'Stephanie', 'Lyle', 'slytle19@msn.com', 'iPhone 5c us cellular tan case with giraffe smoking a cigar', '5451p/');
INSERT INTO `app_customer` VALUES(233, 'Elliott ', 'Reid ', 'reidspeed11@yahoo.com', 'iPhone 5c with black and gray otterbox', '9899p/');
INSERT INTO `app_customer` VALUES(234, 'Jenny', 'Huffman', 'jennylhuffman@outlook.com', 'iPhone 5c white in black otter box. Verizon. ', '5452p/');
INSERT INTO `app_customer` VALUES(235, 'Tanya', 'Wagner', 'tanyalwagner@gmail.com', 'Iphone5s black otter box case', '5453p/');
INSERT INTO `app_customer` VALUES(236, 'Noah', 'Cohn', 'noahacohn@yahoo.com', 'Normal iPhone 6 in black rubber case', '5454p/');
INSERT INTO `app_customer` VALUES(237, 'Dan', 'mania takes', 'magilladan@Comcast.net', 'iPhone 5 white with white otter box', '5455p/');
INSERT INTO `app_customer` VALUES(238, 'Jared', 'key ties', 'jaredkeuntjes@gmail.com', '5c with life proof case ', '5456p/');
INSERT INTO `app_customer` VALUES(239, 'Victoria', 'donegal', 'Victoria.donegan@gmail.com', 'iPhone 6 black and green glow in the dark case ', '5457p/');
INSERT INTO `app_customer` VALUES(240, 'Ryan', 'Franz', 'fudgiethewhale83@yahoo.com', 'iPhone 5s with blue plaid burton case', '9898P/');
INSERT INTO `app_customer` VALUES(241, 'Noah ', 'scholnick ', 'noahscholnick@gmail.com', 'Pretty black iPhone 5', '5459p/');
INSERT INTO `app_customer` VALUES(242, 'Vicki', 'meachum ', 'vickilmeachum@gmail.com', 'Green iPhone 5 with black otter box.', '5458p/');
INSERT INTO `app_customer` VALUES(243, 'Rachel', 'Prescott', 'rachelprescottx@gmail.com', 'iPhone 6 black case', '5460p/');
INSERT INTO `app_customer` VALUES(244, 'Dan', 'Donovan', 'ddonovan@sent.net', 'Nexus 6 black', '5461');
INSERT INTO `app_customer` VALUES(245, 'Johanna ', 'ordeal', 'Johanna.ordaz25 bon@gmail.com', 'Samsung Galaxy active s4 - cracked and Samsung Galaxy s4 in black case', '5462. 5463 p/');
INSERT INTO `app_customer` VALUES(246, 'savannah', 'Hughes', 'savannah19@mail.usf.edu', 'Gold iPhone 6 with small crack ', '5464p/');
INSERT INTO `app_customer` VALUES(247, 'cally ', 'bitterlin', 'callydelane@gmail.com', 'iPhone 6 with a purple otter box case. ', '5465p/');
INSERT INTO `app_customer` VALUES(248, 'Bruce', 'mink', 'sidingninja@yahoo.com', 'iPhone 4', '5466p/');
INSERT INTO `app_customer` VALUES(249, 'Jeffrey', 'pod is', 'jeffreypodis@yahoo.com', 'Scratches on the front; white blister on the right side; iPhone 5ðŸ˜‚ðŸ˜‚â¤ï¸â¤ï¸â¤ï¸â¤ï¸ðŸ˜˜ðŸ˜—ðŸ˜—ðŸ˜—ðŸ˜œðŸ˜œðŸ˜œðŸ˜œðŸ˜œ', '5467');
INSERT INTO `app_customer` VALUES(250, 'janeane', 'mettle', 'janeane_m@comcast.net', 'Black iPhone 5s', '5468p/');
INSERT INTO `app_customer` VALUES(251, 'Owen', 'at weary', 'otweardy200@gmail.com', 'iPhone 5s, red mophi case', '5469p/');
INSERT INTO `app_customer` VALUES(252, 'Kyle', 'Harvey', 'allenkyleharvey@gmail.com', 'Black iPhone 5, cracked screen, SF Giants background', '5470 p/');
INSERT INTO `app_customer` VALUES(253, 'Alexis', 'Kennedy', 'akenned407@gmail.com', 'Gold iPhone 5s', '5471p/');
INSERT INTO `app_customer` VALUES(254, 'David', 'Dickerson', 'daveofthedead82@gmail.com', 'iPhone 5s speck case', '5472p/');
INSERT INTO `app_customer` VALUES(255, 'Louise', 'sipes', 'rjsipes@Comcast.net', 'Cover iPhone uag', '5473p/');
INSERT INTO `app_customer` VALUES(256, 'Erin', 'salmons', 'erinesalmons@gmail.com', 'iPhone 6 and 5 ( 5 has lifeproof) ', '5474p/ 5475p/');
INSERT INTO `app_customer` VALUES(257, 'Ryan', 'bailie', 'r.baillie17@aol.com', 'Black iPhone 5. Black hookah pen w charger', '5476,5477, 5480/p');
INSERT INTO `app_customer` VALUES(258, 'Michael', 'both angel', 'Michael.r.nothnagel@gmail.com', 'Black iPhone 6', '5478p/');
INSERT INTO `app_customer` VALUES(259, 'Kathleen', 'north angel', 'Kathy.nothnagel@gmail.com', 'Iphone6 with purple case', '5479p/');
INSERT INTO `app_customer` VALUES(260, 'justin', 'Ito-Adler', 'justin.itoadler@gmail.com', 'Black iPhone 5. Small crack in front.', '5496p/');
INSERT INTO `app_customer` VALUES(261, 'Matt', 'durian', 'baileydudiak@gmail.com', 'Eleaf vape ', '5483p/');
INSERT INTO `app_customer` VALUES(262, 'kiana', 'kipps', 'wcallstars13@aol.com', 'iPhone 5 pink - sky blue case ', '5484p/');
INSERT INTO `app_customer` VALUES(263, 'Blake', 'fostvedt', 'bsf006@morningside.edu', 'Black iPhone 5', '8014');
INSERT INTO `app_customer` VALUES(264, 'Anthony ', 'segura', 'Anthony.segura@asu.edu', 'Android s 5 and iPhone 5', '5485, 5486p/');
INSERT INTO `app_customer` VALUES(265, 'Aaron', 'Morgan', 'aaronjd1213@gmail.com', 'Gold iphone 6 black rubber case', '5487p/');
INSERT INTO `app_customer` VALUES(266, 'Lauren', 'McFerrin', 'laurenmcferrin@yahoo.com', 'iPhone 6 blue phone case', '5488p/');
INSERT INTO `app_customer` VALUES(267, 'Shannon', 'Davis', 'Davis.shannon@aol.com', 'Iphone6 pink case ', '5489p/');
INSERT INTO `app_customer` VALUES(268, 'Emily', 'honor and', 'minahonarmand@gmail.com', 'One has a blue case and one is blank', '5493, 5492p/');
INSERT INTO `app_customer` VALUES(269, 'Heidi', 'drivers', 'iammsheidi@gmail.com', 'Yelo duck tape on back of note2', '5494');
INSERT INTO `app_customer` VALUES(270, 'Alex', 'Hines', 'alexandrahynes@gmail.com', 'iPhone 5 navy otter', '5495p/');
INSERT INTO `app_customer` VALUES(271, 'Michael', 'stroud', 'michaelstroud77@yahoo.com', 'Cell phone black lg. pink samsung. Cracked samsung', '5499 5500 5501p/');
INSERT INTO `app_customer` VALUES(272, 'dov', 'endless', 'dov.endress@gmail.com', 'White iPhone plus ', '5502p/');
INSERT INTO `app_customer` VALUES(273, 'Jordan', 'Gibson', 'littlered1452@aol.com', 'iPhone 5s leopard case', '5503p/');
