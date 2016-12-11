-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 06:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--
CREATE DATABASE IF NOT EXISTS `movie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movie`;

-- --------------------------------------------------------

--
-- Table structure for table `moviedb`
--

CREATE TABLE `moviedb` (
  `id` int(50) NOT NULL,
  `movie_name` varchar(500) DEFAULT NULL,
  `summary` varchar(2500) DEFAULT NULL,
  `Director` varchar(1000) DEFAULT NULL,
  `writers` varchar(1000) DEFAULT NULL,
  `Duration` varchar(500) DEFAULT NULL,
  `Stars` varchar(1000) DEFAULT NULL,
  `Storyline` varchar(2500) DEFAULT NULL,
  `Genres` varchar(1000) DEFAULT NULL,
  `Release_date` varchar(500) DEFAULT NULL,
  `Lang` varchar(1000) DEFAULT NULL,
  `Budget` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviedb`
--

INSERT INTO `moviedb` (`id`, `movie_name`, `summary`, `Director`, `writers`, `Duration`, `Stars`, `Storyline`, `Genres`, `Release_date`, `Lang`, `Budget`, `Country`, `image_url`) VALUES
(7, 'Doctor Strange (2016)', 'A former neurosurgeon embarks on a journey of healing only to be drawn into the world of the mystic arts.', ' Scott Derrickson', ' Jon Spaihts, Scott Derrickson, 2 more credits', ' 115 min ', 'Benedict Cumberbatch, Chiwetel Ejiofor, Rachel McAdams', 'Marvel\'s "Doctor Strange" follows the story of the talented neurosurgeon Doctor Stephen Strange who, after a tragic car accident, must put ego aside and learn the secrets of a hidden world of mysticism and alternate dimensions. Based in New York City\'s Greenwich Village, Doctor Strange must act as an intermediary between the real world and what lies beyond, utilising a vast array of metaphysical abilities and artifacts to protect the Marvel Cinematic Universe.', ' Action | Adventure | Fantasy | Sci-Fi', '4 November 2016 (USA)', ' English', '$165,000,000 (estimated)', 'USA', 'doctor.jpg'),
(8, 'Bajirao Mastani (2015)', 'An account of the romance between the Maratha general, Baji Rao I and Mastani, a Muslim princess.', ' Sanjay Leela Bhansali', ' Nagnath S. Inamdar (novel), Sanjay Leela Bhansali (additional writer)', '2h 38min', ' Ranveer Singh, Priyanka Chopra, Deepika Padukone', 'Bajirao 1, who fought over 41 major battles and many others, is reputed never to have lost a battle. Bajirao is described as "RANMARD" a man of the battlefield. Bajirao said to his brother "Remember that night has nothing to do with sleep. It was created by God, to raid territory held by your enemy. The night is your shield, your screen against the cannons and swords of vastly superior enemy forces. " Bajirao was a heaven born cavalry leader. In the long and distinguished galaxy of Peshwas, Bajirao was unequaled for the daring and originality of his genius and the volume and value of his achievements.', ' Drama | History | Romance', ' 18 December 2015 (USA)', 'Hindi', 'INR 1,250,000,000 (estimated)', 'India', 'bajirao.jpg'),
(9, 'Inferno (2016)', 'When Robert Langdon wakes up in an Italian hospital with amnesia, he teams up with Dr. Sienna Brooks, and together they must race across Europe against the clock to foil a deadly global plot.', ' Ron Howard', ' Dan Brown (based on the novel by), David Koepp (screenplay)', '2h 1min', ' Tom Hanks, Felicity Jones, Irrfan Khan ', 'Academy AwardÂ® winner Ron Howard returns to direct the latest bestseller in Dan Brown\'s (Da Vinci Code) billion-dollar Robert Langdon series, Inferno, which finds the famous symbologist (again played by Tom Hanks) on a trail of clues tied to the great Dante himself. When Langdon wakes up in an Italian hospital with amnesia, he teams up with Sienna Brooks (Felicity Jones), a doctor he hopes will help him recover his memories. Together, they race across Europe and against the clock to stop a madman from unleashing a global virus that would wipe out half of the world\'s population.', ' Action | Adventure | Crime | Drama | Mystery | Thriller', '28 October 2016 (USA)', ' English | French | Italian | Turkish', ' $75,000,000 (estimated)', ' USA | Hungary', 'inferno.jpg'),
(10, 'Befikre (2016)', 'Set in Paris, Befikre is a free spirited, contemporary love story of Dharam and Shyra, who find love in an impulsive, engaging series of experiences. Doused in the spirit of Paris, it celebrates love- sensual, carefree and focused on living life to the fullest.', 'Aditya Chopra', ' Aditya Chopra (story and screenplay), Aditya Chopra (dialogue)', ' 2h 12min', ' Ranveer Singh, Vaani Kapoor, Elisa Bachir Bey', 'Befikre is a story that celebrates being carefree in love. A quintessential Delhi boy Dharam (Ranveer Singh) comes to Paris for work in search of an adventure. Just when he was about to embark on this journey of his life he bumps into a wild, free spirited, French born Indian girl Shyra (Vaani Kapoor). A feisty romance ensues between the two in which both of their personalities- one being an equal match for the other are tested to the limit. Battling their ups and downs, both realize that love is a leap of faith that can only be taken by those who dare to love.', 'Comedy | Crime | Romance', ' 9 December 2016 (USA)', 'Hindi', 'N/A', 'India', 'befikre.jpg'),
(12, 'The Accountant (2016)', 'As a math savant uncooks the books for a new client, the Treasury Department closes in on his activities and the body count starts to rise.', ' Gavin O\'Connor', ' Bill Dubuque', ' 2h 8min ', ' Ben Affleck, Anna Kendrick, J.K. Simmons', 'Christian Wolff is a math savant with more affinity for numbers than people. Behind the cover of a small-town CPA office, he works as a freelance accountant for some of the world\'s most dangerous criminal organizations. With the Treasury Department\'s Crime Enforcement Division, run by Ray King, starting to close in, Christian takes on a legitimate client: a state-of-the-art robotics company where an accounting clerk has discovered a discrepancy involving millions of dollars. But as Christian uncooks the books and gets closer to the truth, it is the body count that starts to rise.', ' Action | Crime | Drama | Thriller', ' 14 October 2016 (USA)', ' English', '$44,000,000 (estimated)', ' USA', 'accountant.jpg'),
(13, 'Masterminds (2016)', 'A guard at an armored car company in the Southern U.S. organizes one of the biggest bank heists in American history. Based on the October 1997 Loomis Fargo robbery.', ' Jared Hess', 'Chris Bowman (screenplay), Hubbel Palmer (screenplay)', '1h 35min', ' Kate McKinnon, Kristen Wiig, Jason Sudeikis ', 'David Ghantt discovers the true meaning of adventure far beyond his wildest dreams. He is an uncomplicated man stuck in a monotonous life. Day in and day out he drives an armored vehicle, transporting millions of other people\'s money with no escape in sight. The only glimmer of excitement is his flirtatious work crush Kelly Campbell who soon lures him into the scheme of a lifetime. Along with a group of half-brained criminals led by Steve Chambers and an absurdly faulted heist plan, David manages the impossible and makes off with $17 million in cash...only problem is he foolishly hands the money over to this wild group of double crossers and has been set up to take the fall. With the bandits blowing the millions on lavish and ridiculous luxuries, they leave behind a glaring trail of evidence. Now on the lam and in over his head, David must dodge the authorities, evade a hilarious hit man, Mike McKinney, and try to turn the tables on the ones he trusted most.', ' Action | Comedy | Crime', '30 September 2016 (USA)', 'Spanish | English', '$25,000,000 (estimated)', ' USA', 'masterminds.jpg'),
(14, 'Dear Zindagi (2016)', 'Kaira is a budding cinematographer in search of a perfect life. Her encounter with Jug, an unconventional thinker, helps her gain a new perspective on life. She discovers that happiness is all about finding comfort in life\'s imperfections.', ' Gauri Shinde', ' Gauri Shinde', ' 2h 31min', ' Alia Bhatt, Shah Rukh Khan, Kunal Kapoor', 'This is the story of Kaira, a budding cinematographer in search of perfect life. A chance encounter with Jug, an unconventional thinker, helps her gain new perspective about life. She discovers that happiness is all about finding comfort in life\'s imperfections.', ' Drama | Romance', ' 23 November 2016 (USA)', ' Hindi', '$1,419,208 (USA)', 'India', 'dearzindagi.jpg'),
(15, 'Pink (2016)', 'When three young women are implicated in a crime; a retired lawyer steps forward to help them clear their names.', ' Aniruddha Roy Chowdhury', ' Shoojit Sircar (story), Aniruddha Roy Chowdhury (story) ', ' 2h 16min ', 'Tapsee Pannu, Kirti Kulhari, Andrea Tariang', 'Deepak is a lawyer suffering from bipolar disorder who experiences frequent mood swings. One night, Rajveer and his friends get drunk and try to molest Miss Arora and her two roommates leading to an accident. The film revolves around how Deepak fights the girls\' case against these influential boys.', ' Drama | Thriller', ' 16 September 2016 (USA)', 'Hindi', 'N/A', 'India', 'pink.jpg'),
(16, 'Arrival (2016)', 'A linguist is recruited by the military to assist in translating alien communications.', 'Denis Villeneuve', ' Eric Heisserer (screenplay), Ted Chiang', '1h 56min', 'Amy Adams, Jeremy Renner, Forest Whitaker ', 'When mysterious spacecraft touch down across the globe, an elite team - led by expert linguist Louise Banks - is brought together to investigate. As mankind teeters on the verge of global war, Banks and the team race against time for answers - and to find them, she will take a chance that could threaten her life, and quite possibly humanity.', ' Drama | Mystery | Sci-Fi | Thriller', ' 11 November 2016 (USA)', ' English | Russian | Mandarin', '$47,000,000 (estimated)', ' USA', 'arrival.jpg'),
(17, 'Mechanic: Resurrection (2016)', 'Arthur Bishop thought he had put his murderous past behind him when his most formidable foe kidnaps the love of his life. Now he is forced to travel the globe to complete three impossible assassinations, and do what he does best, make them look like accidents.', ' Dennis Gansel', ' Philip Shelby (screenplay), Tony Mosher (screenplay)', '1h 38min ', ' Jason Statham, Jessica Alba, Tommy Lee Jones', 'Arthur Bishop, the master assassin who faked his death in hopes of putting that part of his ;life behind him, now lives a quiet life in Rio. But someone who knows who he is shows up and tells him, that if he wants to continue living this life, he will do three jobs for someone. Bishop tries to tell them he has the wrong man but they know who he is and if he won\'t do the job, they will take him but he gets away. He then goes to a resort in Thailand run by a friend, Mae, where he tries to find out who is looking for him. Later a woman named Gina shows up looking for medical assistance and Mae can\'t help but notice bruises all over her body. Mae deduces she\'s a battered woman and when Mae hears her being beaten, Mae asks Bishop to help her. He goes and kills the guy she\'s with. He kills the man and then sets fire to the boat he\'s on. But he sees that Gina has a photo of him.', ' Action | Crime | Thriller', ' 26 August 2016 (USA)', ' English | Bulgarian', '$40,000,000 (estimated)', ' France | USA', 'mechanic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `forename` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`forename`, `surname`, `username`, `password`) VALUES
('Bill', 'Smith', 'bsmith', '32aa0c466818e1ccba25b8793db98c94'),
('Pauline', 'Jones', 'pjones', '53eb1f29c1f8a132441a4fad1d6f667d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moviedb`
--
ALTER TABLE `moviedb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `movie_name` (`movie_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moviedb`
--
ALTER TABLE `moviedb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
