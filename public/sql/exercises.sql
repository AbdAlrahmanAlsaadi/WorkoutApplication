-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE IF NOT EXISTS`exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `json` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `json`, `time`, `description`, `created_at`, `updated_at`) VALUES
(1, 'backLegRol', 'ftqoNpTvWOgyinSYnXHsBHEMGLsSSNdCV5EtOHKB.json', 30, 'Lie on the floor, then lie on your side, then spread your hands upward and move your legs to the sides. Also, place your hands on the floor and bend your legs when you move them. Be careful of the rapid movement.', '2024-05-16 09:13:30', '2024-05-16 09:13:30'),
(2, 'LegUpDown', 'CW00Htm6FqI7tI1mFTsNw4s07UTsjSM9aAMC4ghq.json', 30, 'Lie on the floor, paying attention to steadying your head. Raise and stabilize your head, then lift the lower part of your body, raise your legs to the top, and move your legs forward and backward alternately.', '2024-05-17 06:33:33', '2024-05-17 06:33:33'),
(3, 'plankLegMo', 'P1w2J0sWOCf55IgFV0h40KWzOcahQpNZa5FhauuO.json', 30, 'Get into a normal plank position with your elbows on the floor and make a fist with your hands, then stabilize the front part of your body, ensuring it is straight, while moving your legs up and down.', '2024-05-17 06:40:32', '2024-05-17 06:40:32'),
(5, 'SidePlank', 'lDPGZD73NDt53GeGhSExRQF0Th930KXHRT8ql6kI.json', 30, 'Place your elbow on the ground while sitting sideways. Be careful to move quickly. Place your other hand on your waist and tilt your head to the side, then raise and lower your leg.', '2024-05-17 06:43:26', '2024-05-17 06:43:26'),
(6, 'RolBack', 'SwU8D9jHwdVGVheJtPxe6X9whfdaYgXwJZPIBRMk.json', 30, 'Lie on a rubber cylinder, bend your legs, place your hands behind your head, and secure it, making sure the cylinder remains under your back.', '2024-05-17 06:44:40', '2024-05-17 06:44:40'),
(7, 'MusleKnee', 'I0pHK1aC8nCyPkd3MaiRUT9KTWbwPoxVwjQLbAxo.json', 30, 'Lie on the floor, bend your knees, place your hands at your ears, then raise your upper body, bringing your elbow to the knee opposite your elbow.', '2024-05-17 06:45:54', '2024-05-17 06:45:54'),
(8, 'Bicycle_crunches', 'NUgwD3sWG5satPKbzas8U7yN8KULTSEpGnK8OBS5.json', 30, 'This exercise is considered a comprehensive abdominal exercise, as it includes all parts of the abdomen, and it is an excellent exercise to tighten the abdomen.', '2024-05-17 07:33:34', '2024-05-17 07:33:34'),
(9, 'Plank', 'DFDNYfVkXlUSlAZLFsNlOCeYWFVyn0y5Fz8nalXt.json', 30, 'This exercise specifically moves the slow muscle fibers in the abdomen. It helps tighten the abdomen in an indescribable way. It helps build and sculpt the abdominal muscles as a whole.', '2024-05-17 07:35:54', '2024-05-17 07:35:54'),
(10, 'SuperMans', 'PzULsifD9ExMVoyKR34FeyxVEkLrgT0T6M4ggUbv.json', 30, 'This exercise tightens the abdomen as a whole, as it moves almost all of your abdominal muscles, even the side ones, so you should never forget this exercise.', '2024-05-17 07:37:26', '2024-05-17 07:37:26'),
(11, 'VerticalLegCrunch', '1UORTeKVSl5akC06I4KOBUzqb6ExLbpVQBm3u67v.json', 30, 'It focuses on the lower abdominal muscles. It is one of my favorite exercises. Try it and judge for yourself.', '2024-05-17 07:38:48', '2024-05-17 07:38:48'),
(12, 'KneeHand', 'QTt57qWudTr2SMZHUtLdrspUgfhtLWtlEUG3FCHs.json', 30, 'Place your hands on the ground, holding them steady, tighten your forearms, pay attention to the straightness of your shoulders, and keep your head steady. Then spread your legs and bring your knee closer to your elbow. Do this movement for both legs.', '2024-05-17 07:39:45', '2024-05-17 07:39:45'),
(13, 'ToeTouch', 'RdtP0NVaZnhW6ez2n43g2YrostH0s477j5B0DAAM.json', 30, 'It is one of the exercises specialized in building the upper abdomen, and it also helps in building the side abdominal muscles, so do not neglect this exercise at all!', '2024-05-18 11:13:44', '2024-05-18 11:13:44'),
(14, 'Arm_crunch', 'I3WeZMtHo700j32L2RIysk38GMEU8RXoxHhNwfuX.json', 30, 'It is one of the exercises to tighten the upper abdomen. It helps to divide the abdomen (the first 4 abdominal muscles) and burns a good number of calories.', '2024-05-18 11:17:36', '2024-05-18 11:17:36'),
(15, 'PlankBall', 'PNbbpyyUWqnHMV9tgcjZO6linl6lMBfQ2rqYrW7K.json', 30, 'Do the normal plank position, but place the ball under your cupped hands, bend your leg, and pay attention so that your head is parallel to the ball.', '2024-05-18 11:20:46', '2024-05-18 11:20:46'),
(16, 'LegBall', 'N7grvYIUfupCDUFHu3nM1a4MxkASVQAEiDgeTdQ8.json', 30, 'Place your feet on top of the large rubber ball and move your feet up and down while keeping your hands and upper body steady.', '2024-05-18 11:23:01', '2024-05-18 11:23:01'),
(17, 'UpDownBall', 'w9fg9OSyovouuewT5tsnTMQfa6NCdIyYNWKbwN7t.json', 30, 'Place the rubber beer ball between your feet, then push your feet forward and move them back while placing your hands behind your back.', '2024-05-18 11:40:04', '2024-05-18 11:40:04'),
(18, 'BackBall', 'Qk4Q6aqQnztNIwQsZAkoHp4EARSJjtwHqxbjoabi.json', 30, 'Sit on the large rubber ball, place a small rubber ball in your hands, and rock your body forward and backward while keeping your feet planted.', '2024-05-18 11:41:57', '2024-05-18 11:41:57'),
(19, 'HeadBall', 'hYNLXMiM41jtYtIj6jdtEZLdNBBkKWvLQa2PH0N0.json', 30, 'Place your upper body on the large rubber ball, straighten your shoulders, and place two small rubber balls in both hands and shake them in opposite directions, forward and backward.', '2024-05-18 11:44:18', '2024-05-18 11:44:18'),
(20, 'ElasticBack', 'eLIVe0OU345OScPwNBhHcmzjWB22uWX9v3mmYvGv.json', 30, 'Stand up straight with your chest open and your feet apart, then hold an elastic band and rotate it on your hand, then from behind you tighten the elastic while holding the hand steady and your other hand next to your head.', '2024-05-19 09:27:20', '2024-05-19 09:27:20'),
(21, 'ElasticLeg', 'YOChsmaaeyLyfahDxePDLEelxor1pN5qXXWa3LoS.json', 30, 'Stand up straight, tie your leg with an elastic, hold the elastic in your hand, put one leg forward and one leg back, and bend your leg and hand at the same time.', '2024-05-19 09:35:25', '2024-05-19 09:35:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
-- ALTER TABLE `exercises`
--   ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
