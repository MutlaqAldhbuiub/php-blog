-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 07:23 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publish` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`, `publish`) VALUES
(1, 'The First', '<h1>Hello !!!!</h1>', 'Mutlaq', '2018-09-02 13:18:33', 1),
(2, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet hendrerit enim ut ullamcorper. Donec non nisl id leo fermentum mollis. Aenean eu iaculis ex. Integer eu fermentum purus. Nulla facilisi. Cras orci augue, volutpat sollicitudin magna sed, facilisis efficitur quam. In hac habitasse platea dictumst. \r\nNam semper est eget enim fringilla vestibulum. Mauris elit mi, tempus nec velit in, lacinia placerat diam. Vestibulum lacinia pretium eleifend. Fusce libero elit, venenatis sed felis at, lacinia dictum libero. Fusce a gravida nulla. Nullam mattis rutrum efficitur. Mauris venenatis ante turpis, sit amet finibus nunc luctus ac. Fusce at neque elit. Nunc sit amet nisi massa. Donec semper imperdiet lacus ac elementum. Cras justo lacus, pellentesque eget ligula non, tempus laoreet lectus. Quisque libero purus, iaculis non nibh at, eleifend maximus orci. Aenean eleifend nisl quis dui euismod, ac tincidunt eros auctor. Nam non lacus eget ipsum porttitor venenatis. Phasellus leo sem, convallis cursus varius nec, commodo eu neque. Integer ut accumsan arcu. \r\nNullam ut imperdiet sapien. Sed mollis lectus sed mi malesuada vestibulum. Nulla bibendum tristique libero. Fusce sit amet sapien ullamcorper, gravida mi et, eleifend ligula. Nam metus ligula, interdum sed porta a, fermentum eu risus. Vivamus in lacus ac diam malesuada sodales ut sed enim. Aliquam laoreet, tellus eu gravida posuere, neque arcu gravida ligula, nec auctor purus nibh a felis. Aliquam ac magna sed sem pharetra porta. Nunc faucibus neque et tempor volutpat. Suspendisse non vulputate metus. Sed auctor mi velit, ullamcorper suscipit elit dictum ac. Donec a porttitor odio. Duis porttitor est ut ipsum efficitur, id luctus velit convallis. Morbi ac rutrum urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus odio, porta ac turpis et, laoreet aliquam odio. \r\nPraesent faucibus enim eu tincidunt aliquet. Integer sodales neque sit amet mauris ullamcorper volutpat. Donec dignissim in quam sed pretium. Mauris lacinia purus nec gravida varius. In hac habitasse platea dictumst. In bibendum orci in ornare dictum. Cras lacus nisi, consectetur eu quam vel, laoreet tincidunt velit. Aliquam fringilla, dolor in dignissim sollicitudin, arcu dolor pellentesque ex, quis cursus nisi mi nec dolor. Ut suscipit ante sed mi vehicula rutrum. Fusce at tellus a elit fringilla placerat. \r\nDonec nec sem et dolor ornare semper et quis diam. Nunc eget dapibus nunc. Nam sem tellus, eleifend sed velit nec, iaculis dictum magna. Etiam gravida sapien ante, at eleifend lacus lobortis in. Ut a sagittis nunc, in sagittis lacus. Mauris dignissim dictum lobortis. Vivamus dolor ante, auctor bibendum elementum et, euismod eget ante. Sed id aliquam mauris. Vivamus ut faucibus enim, vitae bibendum nisi. Etiam eu leo tortor. ', 'Mohammed', '2018-09-03 13:01:11', 1),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet hendrerit enim ut ullamcorper. Donec non nisl id leo fermentum mollis. Aenean eu iaculis ex. Integer eu fermentum purus. Nulla facilisi. Cras orci augue, volutpat sollicitudin magna sed, facilisis efficitur quam. In hac habitasse platea dictumst. \r\nNam semper est eget enim fringilla vestibulum. Mauris elit mi, tempus nec velit in, lacinia placerat diam. Vestibulum lacinia pretium eleifend. Fusce libero elit, venenatis sed felis at, lacinia dictum libero. Fusce a gravida nulla. Nullam mattis rutrum efficitur. Mauris venenatis ante turpis, sit amet finibus nunc luctus ac. Fusce at neque elit. Nunc sit amet nisi massa. Donec semper imperdiet lacus ac elementum. Cras justo lacus, pellentesque eget ligula non, tempus laoreet lectus. Quisque libero purus, iaculis non nibh at, eleifend maximus orci. Aenean eleifend nisl quis dui euismod, ac tincidunt eros auctor. Nam non lacus eget ipsum porttitor venenatis. Phasellus leo sem, convallis cursus varius nec, commodo eu neque. Integer ut accumsan arcu. \r\nNullam ut imperdiet sapien. Sed mollis lectus sed mi malesuada vestibulum. Nulla bibendum tristique libero. Fusce sit amet sapien ullamcorper, gravida mi et, eleifend ligula. Nam metus ligula, interdum sed porta a, fermentum eu risus. Vivamus in lacus ac diam malesuada sodales ut sed enim. Aliquam laoreet, tellus eu gravida posuere, neque arcu gravida ligula, nec auctor purus nibh a felis. Aliquam ac magna sed sem pharetra porta. Nunc faucibus neque et tempor volutpat. Suspendisse non vulputate metus. Sed auctor mi velit, ullamcorper suscipit elit dictum ac. Donec a porttitor odio. Duis porttitor est ut ipsum efficitur, id luctus velit convallis. Morbi ac rutrum urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus odio, porta ac turpis et, laoreet aliquam odio. \r\nPraesent faucibus enim eu tincidunt aliquet. Integer sodales neque sit amet mauris ullamcorper volutpat. Donec dignissim in quam sed pretium. Mauris lacinia purus nec gravida varius. In hac habitasse platea dictumst. In bibendum orci in ornare dictum. Cras lacus nisi, consectetur eu quam vel, laoreet tincidunt velit. Aliquam fringilla, dolor in dignissim sollicitudin, arcu dolor pellentesque ex, quis cursus nisi mi nec dolor. Ut suscipit ante sed mi vehicula rutrum. Fusce at tellus a elit fringilla placerat. \r\nDonec nec sem et dolor ornare semper et quis diam. Nunc eget dapibus nunc. Nam sem tellus, eleifend sed velit nec, iaculis dictum magna. Etiam gravida sapien ante, at eleifend lacus lobortis in. Ut a sagittis nunc, in sagittis lacus. Mauris dignissim dictum lobortis. Vivamus dolor ante, auctor bibendum elementum et, euismod eget ante. Sed id aliquam mauris. Vivamus ut faucibus enim, vitae bibendum nisi. Etiam eu leo tortor. ', 'Mohammed', '2018-09-03 13:01:13', 1),
(4, 'khaled', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet hendrerit enim ut ullamcorper. Donec non nisl id leo fermentum mollis. Aenean eu iaculis ex. Integer eu fermentum purus. Nulla facilisi. Cras orci augue, volutpat sollicitudin magna sed, facilisis efficitur quam. In hac habitasse platea dictumst. \r\nNam semper est eget enim fringilla vestibulum. Mauris elit mi, tempus nec velit in, lacinia placerat diam. Vestibulum lacinia pretium eleifend. Fusce libero elit, venenatis sed felis at, lacinia dictum libero. Fusce a gravida nulla. Nullam mattis rutrum efficitur. Mauris venenatis ante turpis, sit amet finibus nunc luctus ac. Fusce at neque elit. Nunc sit amet nisi massa. Donec semper imperdiet lacus ac elementum. Cras justo lacus, pellentesque eget ligula non, tempus laoreet lectus. Quisque libero purus, iaculis non nibh at, eleifend maximus orci. Aenean eleifend nisl quis dui euismod, ac tincidunt eros auctor. Nam non lacus eget ipsum porttitor venenatis. Phasellus leo sem, convallis cursus varius nec, commodo eu neque. Integer ut accumsan arcu. \r\nNullam ut imperdiet sapien. Sed mollis lectus sed mi malesuada vestibulum. Nulla bibendum tristique libero. Fusce sit amet sapien ullamcorper, gravida mi et, eleifend ligula. Nam metus ligula, interdum sed porta a, fermentum eu risus. Vivamus in lacus ac diam malesuada sodales ut sed enim. Aliquam laoreet, tellus eu gravida posuere, neque arcu gravida ligula, nec auctor purus nibh a felis. Aliquam ac magna sed sem pharetra porta. Nunc faucibus neque et tempor volutpat. Suspendisse non vulputate metus. Sed auctor mi velit, ullamcorper suscipit elit dictum ac. Donec a porttitor odio. Duis porttitor est ut ipsum efficitur, id luctus velit convallis. Morbi ac rutrum urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus odio, porta ac turpis et, laoreet aliquam odio. \r\nPraesent faucibus enim eu tincidunt aliquet. Integer sodales neque sit amet mauris ullamcorper volutpat. Donec dignissim in quam sed pretium. Mauris lacinia purus nec gravida varius. In hac habitasse platea dictumst. In bibendum orci in ornare dictum. Cras lacus nisi, consectetur eu quam vel, laoreet tincidunt velit. Aliquam fringilla, dolor in dignissim sollicitudin, arcu dolor pellentesque ex, quis cursus nisi mi nec dolor. Ut suscipit ante sed mi vehicula rutrum. Fusce at tellus a elit fringilla placerat. \r\nDonec nec sem et dolor ornare semper et quis diam. Nunc eget dapibus nunc. Nam sem tellus, eleifend sed velit nec, iaculis dictum magna. Etiam gravida sapien ante, at eleifend lacus lobortis in. Ut a sagittis nunc, in sagittis lacus. Mauris dignissim dictum lobortis. Vivamus dolor ante, auctor bibendum elementum et, euismod eget ante. Sed id aliquam mauris. Vivamus ut faucibus enim, vitae bibendum nisi. Etiam eu leo tortor. ', 'Khalled', '2018-09-03 13:02:04', 1),
(5, 'Hlellfsjsldgj', '<p>jfshgshgdshghskgshgsdkgshdgjsdghkg</p>', 'Khaled', '2018-09-03 13:02:04', 1),
(6, 'khaled', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet hendrerit enim ut ullamcorper. Donec non nisl id leo fermentum mollis. Aenean eu iaculis ex. Integer eu fermentum purus. Nulla facilisi. Cras orci augue, volutpat sollicitudin magna sed, facilisis efficitur quam. In hac habitasse platea dictumst. \r\nNam semper est eget enim fringilla vestibulum. Mauris elit mi, tempus nec velit in, lacinia placerat diam. Vestibulum lacinia pretium eleifend. Fusce libero elit, venenatis sed felis at, lacinia dictum libero. Fusce a gravida nulla. Nullam mattis rutrum efficitur. Mauris venenatis ante turpis, sit amet finibus nunc luctus ac. Fusce at neque elit. Nunc sit amet nisi massa. Donec semper imperdiet lacus ac elementum. Cras justo lacus, pellentesque eget ligula non, tempus laoreet lectus. Quisque libero purus, iaculis non nibh at, eleifend maximus orci. Aenean eleifend nisl quis dui euismod, ac tincidunt eros auctor. Nam non lacus eget ipsum porttitor venenatis. Phasellus leo sem, convallis cursus varius nec, commodo eu neque. Integer ut accumsan arcu. \r\nNullam ut imperdiet sapien. Sed mollis lectus sed mi malesuada vestibulum. Nulla bibendum tristique libero. Fusce sit amet sapien ullamcorper, gravida mi et, eleifend ligula. Nam metus ligula, interdum sed porta a, fermentum eu risus. Vivamus in lacus ac diam malesuada sodales ut sed enim. Aliquam laoreet, tellus eu gravida posuere, neque arcu gravida ligula, nec auctor purus nibh a felis. Aliquam ac magna sed sem pharetra porta. Nunc faucibus neque et tempor volutpat. Suspendisse non vulputate metus. Sed auctor mi velit, ullamcorper suscipit elit dictum ac. Donec a porttitor odio. Duis porttitor est ut ipsum efficitur, id luctus velit convallis. Morbi ac rutrum urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus odio, porta ac turpis et, laoreet aliquam odio. \r\nPraesent faucibus enim eu tincidunt aliquet. Integer sodales neque sit amet mauris ullamcorper volutpat. Donec dignissim in quam sed pretium. Mauris lacinia purus nec gravida varius. In hac habitasse platea dictumst. In bibendum orci in ornare dictum. Cras lacus nisi, consectetur eu quam vel, laoreet tincidunt velit. Aliquam fringilla, dolor in dignissim sollicitudin, arcu dolor pellentesque ex, quis cursus nisi mi nec dolor. Ut suscipit ante sed mi vehicula rutrum. Fusce at tellus a elit fringilla placerat. \r\nDonec nec sem et dolor ornare semper et quis diam. Nunc eget dapibus nunc. Nam sem tellus, eleifend sed velit nec, iaculis dictum magna. Etiam gravida sapien ante, at eleifend lacus lobortis in. Ut a sagittis nunc, in sagittis lacus. Mauris dignissim dictum lobortis. Vivamus dolor ante, auctor bibendum elementum et, euismod eget ante. Sed id aliquam mauris. Vivamus ut faucibus enim, vitae bibendum nisi. Etiam eu leo tortor. ', 'Khalled', '2018-09-03 13:02:07', 1),
(7, 'Hlellfsjsldgj', '<p>jfshgshgdshghskgshgsdkgshdgjsdghkg</p>', 'Moahmmed', '2018-09-03 13:02:07', 1),
(8, 'Methods!', '<p><strong>Hello World!</strong></p>\r\n<p><em>today we\'ll talk about a lot of things! </em></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>like \" METHODS! \";</em></strong></p>\r\n<p>&nbsp;</p>', 'Mutlaq', '2018-09-09 12:30:01', 1),
(9, 'Methods!sss', '<p><strong>Hello World!</strong></p>\r\n<p><em>today we\'ll talk about a lot of things! </em></p>\r\n<p>&nbsp;</p>\r\n<p><strong><em>like \" METHODS! \";</em></strong></p>\r\n<p>&nbsp;</p>', 'Mutlaq', '2018-09-09 12:31:13', 1),
(10, '', '<p style=\"text-align: center;\"><strong>Ø§Ù„Ø³Ù„Ø§Ù… Ø¹Ù„ÙŠÙƒÙ… ÙˆØ±Ø­Ù…Ø© Ø§Ù„Ù„Ù‡ ÙˆØ¨Ø±ÙƒØ§ØªÙ‡&nbsp;</strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>&lt;img src=\"nothing!\" alt=\"Me\"&gt;</strong></p>\r\n<p style=\"text-align: justify; padding-left: 300px;\"><em>How are you doin?</em></p>', '', '2018-09-09 12:43:54', 1),
(11, 'test', '<p style=\"text-align: center;\"><strong><em>test</em></strong></p>', 'tessst', '2018-09-09 12:49:09', 1),
(12, 'Post three!ss', '<p><strong>asasasasa</strong></p>', 'Mutlaq', '2018-09-09 13:27:54', 1),
(13, 'Post four!test', '<p>sss<strong>ssss</strong></p>', 'sss', '2018-09-09 13:50:17', 1),
(14, 'Post fivesd', '<p>asasdadsd</p>', 'sdasdsad', '2018-09-09 13:54:36', 1),
(15, 'adadsadsd', '<p>asdasdasd<strong>asdasdasdasd</strong></p>', 'adasdasd', '2018-09-09 13:55:04', 1),
(16, 'Post three!', '<p>asdasd</p>', 'sd', '2018-09-09 16:23:39', 1),
(17, 'fsdfsdf', '<p>sdfsdfsdfdf</p>', 'sdfsdfsdf', '2018-09-09 16:27:57', 1),
(18, 'sdsdsd', '<p>sd</p>', 'sdsd', '2018-09-09 16:28:10', 1),
(19, 'UnVisable', '<p>sjkgsljglksjgklsjgkldgsjg</p>', '123', '2018-09-09 16:52:44', 0),
(20, 'UnVisable', '<p>kmjn</p>', 'Author_One', '2018-09-09 16:59:50', 0),
(21, 'UnVisable', '<p>kmjn</p>', 'Author_One', '2018-09-09 17:00:17', 0),
(22, 'UnVisable', '<p>kmjn</p>', 'Author_One', '2018-09-09 17:00:55', 0),
(23, 'adadsadsd', '<p>asdasd</p>', 'asd', '2018-09-09 17:01:00', 0),
(24, 'ishkjghksdgkjsdhgkjsdhghdskjgksdhgkjsd', '<p>asdfafdfsfsd</p>', 'asdasdasd', '2018-09-09 17:01:09', 0),
(25, 'Just a new', '<p>dkgsjklgjslkgjlskdgds</p>', 'Jellfka', '2018-09-09 17:02:32', 1),
(26, 'Just a new', '<p>dkgsjklgjslkgjlskdgds</p>', 'Jellfka', '2018-09-09 17:03:35', 0),
(27, 'Just a new', '<p>dkgsjklgjslkgjlskdgds</p>', 'Jellfka', '2018-09-09 17:03:56', 0),
(28, 'Just a new', '<p>dkgsjklgjslkgjlskdgds</p>', 'Jellfka', '2018-09-09 17:05:37', 0),
(29, 'vasibel', '<p>kfsdjgdfgkjsdlfjksdf</p>', 'sfkldjskldfjk', '2018-09-09 17:06:10', 0),
(30, 'unvisabless', '<p>lkscjflkjfldkfsw</p>', 'sdkljfkldjf', '2018-09-09 17:06:17', 0),
(31, 'unvisabless', '<p>lkscjflkjfldkfsw</p>', 'sdkljfkldjf', '2018-09-09 17:07:49', 0),
(32, 'unvisabless', '<p>lkscjflkjfldkfsw</p>', 'sdkljfkldjf', '2018-09-09 17:08:37', 0),
(33, '', '<p>asdasda</p>', 'asd', '2018-09-09 17:08:53', 1),
(34, 'Mohammed', '<p>asdasdasd</p>', 'asdasd', '2018-09-09 17:09:09', 1),
(35, 'Deleted Post', '<p>this post your are not allow to see it !</p>', 'Postss', '2018-09-09 17:09:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `post_id`, `created_at`) VALUES
(6, 'root', 'c4ca4238a0b923820dcc509a6f75849b', 'root@root.com', 0, '2018-09-02 12:44:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
