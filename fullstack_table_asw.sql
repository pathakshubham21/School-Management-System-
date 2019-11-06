
-- --------------------------------------------------------

--
-- Table structure for table `asw`
--

CREATE TABLE `asw` (
  `Username` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Photo` varchar(20) NOT NULL,
  `Test` varchar(20) NOT NULL,
  `Result` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asw`
--

INSERT INTO `asw` (`Username`, `Name`, `Password`, `Course`, `Price`, `Photo`, `Test`, `Result`) VALUES
('pathak@gmail.com', 'Shubham Pathak', '123', 'Fullstack', '12000', 'shubham.jpg', '3', '80%'),
('nitin@gmail.com', 'Nitin Mishra', '123', 'Big Data', '11500', 'nitin.jpg', '2', '65.7%'),
('robin@gmail.com', 'Robin Kashyap', '123', 'Python', '15000', 'robin.jpg', '4', '74%'),
('qwwed@hdbsh', 'BHSH', '123', ' ', ' ', ' ', '', ''),
('vansh@gmail.com', 'Vansh Shukal', '123', 'Python', '15000 $', 'lion.png', '0', '0%'),
('pathak@gmail.com', 'Amit', '123', 'Big Data', '11500 $', 'admin.jpg', '0', '0%');
