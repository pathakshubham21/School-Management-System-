
-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `Q.No` varchar(20) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Option1` varchar(50) NOT NULL,
  `Option2` varchar(50) NOT NULL,
  `Option3` varchar(50) NOT NULL,
  `Option4` varchar(50) NOT NULL,
  `Answer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`Q.No`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
('1', 'HTML stands for?', 'Hyper Text Markup Language', 'High Text Markup Language', 'Hyper Tabular Markup Language', 'None of these', 'Hyper Text Markup Language'),
('2', 'The attribute of <form> tag', 'Method', 'Action', 'Both (a)&(b)', 'None of these', 'Both (a)&(b)'),
('3', ' Which of the following bootstrap style can be applied to button group instead of resizing each button?', ' .btn-group', ' .btn-toolbar', '.btn-group-lg', ' .btn-group-vertical', ''),
('4', ' All of the following accurately describe Hadoop, EXCEPT:', 'Open source', ' Real-time', 'Java-based', 'Distributed computing approach', ''),
('5', '...............has the world’s largest Hadoop cluster.', 'Apple', 'Datamatics', 'Facebook', 'None of the mentioned', 'Facebook'),
('6', 'What is your name?', 'Rahul', 'Shubham', 'Nitin', 'Robin', 'Shubham');
