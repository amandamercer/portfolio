-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 10:37 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chantry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `about_id` mediumint(40) UNSIGNED NOT NULL,
  `about_tabone` text NOT NULL,
  `about_tabtwo` text,
  `about_tabthree` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`about_id`, `about_tabone`, `about_tabtwo`, `about_tabthree`) VALUES
(4, 'Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario. On the island is a majestic Imperial Lighthouse built in the mid 1800’s, as well as the Keeper’s quarters and a boat house. In 1822, during a hydrographic survey, Captain Henry Bayfield of the Royal Navy christened the island and named it after his friend and British sculptor Sir Francis Chantry.\r\nBecause the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.<br><br>\r\nChantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.<br><br>The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.', 'During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.<br><br>\r\nThe lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.', 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.<br><br>\r\nBecause the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` tinyint(1) UNSIGNED NOT NULL,
  `booking_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_info`) VALUES
(1, '- The 2 hour tour must be pre-booked and prepaid.<br>\r\n- There are 9 seats on the boat. The cost is $30.00 per person (includes HST).<br>\r\n- For refunds, cancellations must be received 24 hours before the scheduled departure.<br>\r\n- Chantry Island is a Federal Migratory Bird Sanctuary and No Pets allowed on the island.<br>\r\n- Cancellation can be caused by weather conditions but light rain is fine.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` mediumint(40) UNSIGNED NOT NULL,
  `contact_phone` varchar(50) NOT NULL,
  `contact_tollphone` varchar(50) NOT NULL,
  `contact_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `contact_phone`, `contact_tollphone`, `contact_address`) VALUES
(1, '519-797-5862', '1-866-797-5862', '86 Saugeen Street<br>\r\nSouthampton, Ontario<br>\r\nCanada, N0H 2L0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `donation_id` tinyint(1) UNSIGNED NOT NULL,
  `donation_text` text NOT NULL,
  `donation_shipmate` varchar(500) NOT NULL,
  `donation_lifesaving` varchar(500) NOT NULL,
  `donation_assistant` varchar(500) NOT NULL,
  `donation_lighthouse` varchar(500) NOT NULL,
  `donation_captain` varchar(500) NOT NULL,
  `donation_queen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donation`
--

INSERT INTO `tbl_donation` (`donation_id`, `donation_text`, `donation_shipmate`, `donation_lifesaving`, `donation_assistant`, `donation_lighthouse`, `donation_captain`, `donation_queen`) VALUES
(1, 'We are currently engaged in Fund Raising to support our New Boat, Dock Improvements, and Marine Heritage Projects.<br>\r\nWe will send a tax receipt for all donations $20 and more.', 'SHIPMATE<br>\r\n$1.00 - $199.00', 'LIFESAVING CREW<br>\r\n$200.00 - $999.00', 'ASSISTANT LIGHTHOUSE CREW<br>\r\n$1,000.00 - $4,999.00', 'LIGHTHOUSE KEEPERS<br>\r\n$5,000.00 - $9,999.00', 'CAPTAIN LAMBERT\'S CREW<br>\r\n$10,000.00 - $25,000.00', 'QUEEN VICTORIA\'S CREW<br>\r\n$25,000.00 +');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` smallint(4) UNSIGNED NOT NULL,
  `gallery_image` varchar(100) NOT NULL,
  `gallery_credit` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_image`, `gallery_credit`) VALUES
(1, 'birds_1.jpg', 'Carol Walberg'),
(2, 'birds_2.jpg', 'Carol Walberg'),
(3, 'aerial_1.jpg', 'Karen Smith'),
(4, 'aerial_2.jpg', 'Karen Smith'),
(5, 'aerial_3.jpg', 'Karen Smith'),
(6, 'aerial_4.jpg', 'Karen Smith'),
(7, 'aerial_5.jpg', 'Karen Smith'),
(8, 'birds_3.jpg', 'Nancy Calder'),
(9, 'birds_4.jpg', 'Nancy Calder'),
(10, 'birds_5.jpg', 'Nancy Calder'),
(11, 'birds_6.jpg', 'Nancy Calder'),
(12, 'cottage_1.jpg', 'James Swartz'),
(13, 'cottage_2.jpg', 'James Swartz'),
(14, 'cottage_3.jpg', 'James Swartz'),
(15, 'cottage_4.jpg', 'Vicki Tomori'),
(16, 'cottage_5.jpg', 'Vicki Tomori'),
(17, 'cottage.jpg', 'Terry Thomas'),
(19, 'island_1.jpg', 'Carol Walberg'),
(20, 'island_2.jpg', 'Carol Walberg'),
(21, 'island_3.jpg', 'Vicki Tomori'),
(22, 'island_4.jpg', 'Vicki Tomori'),
(23, 'island_5.jpg', 'Vicki Tomori'),
(24, 'island_6.jpg', 'Vicki Tomori'),
(25, 'island_7.jpg', 'Vicki Tomori'),
(26, 'island.jpg', 'James Swartz'),
(27, 'peerless_1.jpg', 'George Plant'),
(28, 'peerless_2.jpg', 'George Plant'),
(29, 'peerless_3.jpg', 'George Plant'),
(30, 'sunset_1.jpg', 'Terry Thomas'),
(31, 'sunset_2.jpg', 'Terry Thomas'),
(32, 'sunset_3.jpg', 'Terry Thomas'),
(33, 'tour_base_1.jpg\r\n', 'Misc.'),
(34, 'tour_base_2.jpg', 'Misc.'),
(35, 'tour_base_3.jpg', 'Misc.'),
(36, 'tour_base_4.jpg', 'Misc.'),
(37, 'tour_base_5.jpg', 'Misc.'),
(38, 'tour_base_6.jpg', 'Misc.'),
(39, 'tour_boat.jpg', 'Wayne MacDonald');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_log`
--

CREATE TABLE `tbl_last_log` (
  `last_log_id` smallint(4) UNSIGNED NOT NULL,
  `last_log_date` varchar(100) NOT NULL,
  `user_id` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_log`
--

INSERT INTO `tbl_last_log` (`last_log_id`, `last_log_date`, `user_id`) VALUES
(91, 'Tuesday, March 28th, 2017 @ 1:56pm', 1),
(92, 'Tuesday, March 28th, 2017 @ 1:56pm', 1),
(93, 'Tuesday, March 28th, 2017 @ 5:00pm', 1),
(94, 'Tuesday, March 28th, 2017 @ 5:09pm', 1),
(95, 'Tuesday, March 28th, 2017 @ 5:15pm', 1),
(96, 'Tuesday, March 28th, 2017 @ 5:49pm', 1),
(97, 'Tuesday, March 28th, 2017 @ 9:03pm', 1),
(98, 'Wednesday, March 29th, 2017 @ 7:01pm', 1),
(99, 'Wednesday, March 29th, 2017 @ 8:44pm', 1),
(100, 'Wednesday, March 29th, 2017 @ 8:49pm', 1),
(101, 'Wednesday, March 29th, 2017 @ 8:51pm', 1),
(102, 'Wednesday, March 29th, 2017 @ 8:54pm', 1),
(103, 'Wednesday, March 29th, 2017 @ 9:07pm', 1),
(104, 'Wednesday, March 29th, 2017 @ 9:08pm', 1),
(105, 'Wednesday, March 29th, 2017 @ 9:47pm', 1),
(106, 'Thursday, March 30th, 2017 @ 9:43am', 1),
(107, 'Thursday, March 30th, 2017 @ 10:43am', 1),
(108, 'Thursday, March 30th, 2017 @ 11:06am', 1),
(109, 'Thursday, March 30th, 2017 @ 11:19am', 1),
(110, 'Thursday, March 30th, 2017 @ 11:29am', 1),
(111, 'Thursday, March 30th, 2017 @ 11:48am', 1),
(112, 'Thursday, March 30th, 2017 @ 3:16pm', 1),
(113, 'Thursday, March 30th, 2017 @ 3:17pm', 1),
(114, 'Friday, March 31st, 2017 @ 2:27pm', 1),
(115, 'Friday, March 31st, 2017 @ 2:45pm', 1),
(116, 'Friday, March 31st, 2017 @ 3:19pm', 1),
(117, 'Friday, March 31st, 2017 @ 3:19pm', 1),
(118, 'Friday, March 31st, 2017 @ 3:26pm', 1),
(119, 'Friday, March 31st, 2017 @ 3:41pm', 1),
(120, 'Friday, March 31st, 2017 @ 3:56pm', 1),
(121, 'Friday, March 31st, 2017 @ 4:09pm', 1),
(122, 'Friday, March 31st, 2017 @ 4:21pm', 1),
(123, 'Friday, March 31st, 2017 @ 4:26pm', 1),
(124, 'Friday, March 31st, 2017 @ 4:33pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` mediumint(40) UNSIGNED NOT NULL,
  `news_type` mediumint(40) NOT NULL,
  `news_title` varchar(100) DEFAULT NULL,
  `news_date` varchar(100) DEFAULT NULL,
  `news_image` varchar(200) DEFAULT NULL,
  `news_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_type`, `news_title`, `news_date`, `news_image`, `news_content`) VALUES
(1, 1, 'A Night Alone on Chantry Island', '2016-09-30', 'night_alone.jpeg', 'Recently, August 31 the President of the Bluewater Astronomical Society spent a night camped out on Chantry Island. The purpose was to photograph the full moon with a celestial background and include Chantry Island Lighthouse Tower. Thanks to Captain John Willetts and Mark Clarke despite high seas the mission was accomplished. The photos have proven to be magnificent and will be a valuable asset to our organization. Thank you John Hlynialuk, Bluewater Astronomical Society.'),
(2, 1, 'Storm Signals Flying High Again', '2016-09-30', 'storm_signals.jpg', 'Storm signals in Pioneer Park have been raised and are flying as they once were so many years ago. This set up indicates a gale from west. Much appreciation and thanks goes the volunteers and to Tom Stewart Jr. who supplied the bucket truck and his time at no charge to help this happen.'),
(3, 1, 'Lighthouse Keeper’s Cottage Looking Great Again', '2016-09-30', 'lighthouse.jpg', 'The keeper’s cottage has had it’s white washing completed under the supervision  of Mike Sterling. Mike worked with our two students for weeks with the lime, rock salt and water to gain the correct consistency for the whitewash to stick and protect.  Matt and Sebastion worked for hours and hours, day over day to get this done.  The final result producing a clean, white authentic looking stone cottage  just the way the Light House Keepers would have liked and kept it.'),
(4, 1, 'Marine Heritage Volunteers Work on Dock Lift', '2016-10-08', 'dock_lift.jpg', 'A group of Marine Heritage Volunteers helping offload the metal walkways from Chantry Island Saturday October 8.'),
(5, 1, 'Tilbury Bumper Pad is lifted for Storage', '2016-10-08', 'bumper_pad.jpg', 'This bumper pad that sits in the water at the dock side will be repaired this winter. It needs it! By the looks of the number of volunteers needed to do the lifting it is also very heavy.'),
(6, 1, 'Volunteers Prepare the Floating Dock for Lifting', '2016-10-08', 'floating_docks2.jpg', 'This is the procedure used to lift such a heavy dock. It requires accuracy, timing and team work to do this safely.'),
(7, 1, 'Floating Docks from Chantry Island Lifted', '2016-10-08', 'floating_docks.jpg', 'The floating docks from Chantry Island were lifted today onto the Tarmac. The Metal walkways were also lifted off and placed for winter storage. The entire operation was done in less than 1 1/2 hours. Thanks to the volunteers and especially to Sam Welsh Contracting who took a short time out of a very busy Thanksgiving weekend to complete this annual and important job.'),
(8, 1, 'Straight and Neat', '2016-10-17', 'straight_neat.jpg', 'The docks are lined up and moved to a location in front of the TourBase. This entire operation took less than 1 and 1/2 hours to complete. Thanks to the 9 members who turned up to get the job done.'),
(9, 1, 'To All a Good Night', '2016-10-17', 'good_night.jpg', 'Once all the docks are on dry land they are lined up neatly, checked for damage and stored for the long, cold, windy winter season.'),
(10, 1, 'New Winch for Ramp on Island', '2016-10-21', 'ramp_winch.jpg', 'Over many discussions and observations with Randy Schnarr and Charles Bailey we came up with a plan. The actual template was designed by our own Marine Heritage Volunteer Randy Schnarr. Kuhl Manufacturing has been involved with the needs of MHS for many years. The cannons which were designed for the General Hunter by Mike Sterling were produced at the Kuhl facility as well.'),
(11, 1, 'Safer Winch Location Equals Safer Working Environment', '2016-10-21', 'winch_location.jpg', 'In the past the crew would have to climb up on the ramp and unwind the winch in an awkward position. If all works as planned this procedure will occur without climbing and also from the safety of the main dock. The new winch will be located at the opposite end of the ramp, much closer to where it can be reached.'),
(12, 1, 'New Winch for Ramp on Island', '2016-10-21', 'ramp_winch2.jpg', 'Today the newly designed winch template was taken to Kuhl Machine Shop in Keady. The new location of the winch will make for much safer raising and lowering of the ramp on Chantry Island.'),
(13, 1, 'Anchor from the Ontario', '2016-10-28', 'ontario_anchor.jpg', 'The anchor from the ship Ontario which ran ashore in the year 1907, in front of the Blue Water on Front St. is complete now with a plaque to acknowledge the event.'),
(14, 1, 'Anchor Crosses Many Paths', '2016-10-28', 'anchor_crosses.jpg', 'The anchor from the Ship "Ontario" that went aground in front of the Blue Water Hotel on Front St. in 1907 has crossed many paths since that tragic day. Presented to Hap Rogers former mayor of Southampton and onto Bill Bray, then to Jane Kramer and finally to the marine Heritage Society.'),
(15, 1, 'BIA Southampton Christmas Sled', '2016-11-01', 'southampton_sled.jpg', 'Volunteers under the direction of the Southampton BIA, have been busy painting and restoring an old Cutter sled in the Boathouse. The Sled will be used in front of the Town Hall this Christmas season.'),
(16, 1, 'Shoreline Artists Busy in the Boathouse', '2016-11-01', 'shoreline_artists.jpg', 'The Shoreline Artists are busy touching up the wooden Christmas figures used in Perkins Park for the Southampton Rotarians. This is all taking place in the spacious and comfort of the Southampton Marine Heritage Boathouse.'),
(17, 1, 'Everything is Looking Good in the Boathouse', '2016-11-01', 'boat_house2.jpg', 'It seems that everyone enjoys a good old fashioned cutter ride. Here the newly painted Christmas decorations gather around the one horse sleigh.'),
(18, 1, 'Tilbury Work Goes Well', '2016-11-03', 'tilbury_work.jpg', 'Thanks to the faithful members of the Propeller Club the work on the Tilbury, our work boat has been well started. Six members turned up to do this work. In addition, the complete interior has been cleaned, scrubbed and dried. Next, we will be painting the interior, flipping the boat to clean and paint the bottom.'),
(19, 1, 'Chambettes Christmas Sale in the Boathouse', '2016-11-26', 'chambettes_christmas.jpg', 'It was a busy Saturday in the Marine Heritage Boathouse November 26. The Chambettes held their Annual Christmas sale. From what I saw it was a huge success and everyone went away happy and with the Christmas Spirit. Picture Credit goes to Sandy Lindsay.'),
(20, 1, 'Chambettes Present Cheque to Marine Heritage Society', '2016-11-26', 'chambettes_cheque.jpg', 'The Marine Heritage Society was pleased to receive a cheque for $1500.00 from the local Chambettes. This represents donations received connected to the September 10 "Chantry Island Sleepover". We are certainly grateful and appreciate all the support we have received from the Chambettes both in the past & present. Thank You! Picture Credit to Sandy Lindsay.'),
(21, 1, 'MHS and Propeller Club Annual General Meeting', '2016-11-26', 'propeller_club2.jpg', 'It was a fine time to dine last Friday night at the 13th annual Marine Heritage and Propeller Club General Business meeting and dinner. The Walker House in Southampton served a fine meal and over 60 supporters were in attendance. Captain Gerald Grieg from Lions Head presented the "Tales and Yarns" of our Great Lakes and Great Ships. The evening concluded with a live Auction with lots of fun and laughs. Thanks for coming and if you could not make it...we missed you.'),
(22, 1, 'MHS and Propeller Club Annual General Meeting', '2016-11-25', 'propeller_club.jpg', 'The dinner table was full and fun. The conversation was lively and spontaneous. The meal was excellent! Photo by Sandy Lindsay.'),
(23, 1, 'Southampton Christmas Parade', '2016-12-02', '5.jpg', 'The Marine Heritage Society and Propeller Club Float or I mean boat was well received Friday Night at the annual Christmas Parade. Towing the Boat was a Saugeen Shores Fire pick up truck driven by Phil Eagleson our Fire Chief.'),
(24, 1, 'Southampton Christmas Parade', '2016-12-02', '4.jpg', 'The Peerless II outside the Boathouse in southampton. Photo courtesy Eric Rogers.'),
(25, 1, 'Chantry Island Tour Base', '2017-01-08', '3.jpg', 'Inside the Chantry Island Tour Base, where tickets can be purchased for the tours to Chantry Island. The Tour Base will open again in June.'),
(26, 1, 'Doug Johnsons 91st Birthday', '2017-01-10', '2.jpg', 'Doug Johnson is giving a short talk about his history with the Propeller Club. He is one of our strongest supporters.'),
(27, 1, 'Doug Johnson Proudly Displays the Famous Saying', '2017-01-18', '1.jpg', NULL),
(28, 1, 'Boat House Southampton', '2017-02-03', 'boat_house.jpg', 'Work on the Tilbury continues as the winter slowly approaches conclusion.'),
(29, 1, 'Boat House Work', '2017-03-01', 'boathouse_work.JPG', 'Soon our Island extensions and crossbars will be welded and drilled to serve as supports in the water holding up the metal walkways.'),
(30, 1, 'Paddles and Pieces', '2017-03-01', 'paddles_pieces.JPG', 'Oars, paddles and pieces of the Tilbury are currently being painted and repaired in preparation of an early Spring and Island work.'),
(31, 1, 'The Boat is Very Heavy', '2017-03-01', 'heavy_boat.JPG', 'A heavy boat requires heavy equipment to do the job safely.'),
(32, 1, 'The Inside Looks as Good as the Outside', '2017-03-01', 'flipped_boat.JPG', 'Now the boat is flipped, it has to be lifted again and set back on the trailer. Thanks to all who were able to come out and help. More pictures and movies are available if you click on the Facebook link found on our first page.\r\n'),
(33, 1, 'Liferaft Certification', '2017-03-01', 'liferaft.JPG', 'The 12 man life raft will soon be certified and ready for remounting on the Peerless. This is a heavy, time consuming and expensive job which must be done every 2 years. We are fortunate to have the Local Fire Dept. help us keep the tour boat safe every season.\r\n'),
(34, 1, 'Flipping the Tilbury Work Boat', '2017-03-01', 'tilbury_work_boat.JPG', 'Every year our work boat is stripped down, painted both inside and out and prepared for another season of hard work. Thanks to the Town and our volunteers this turns into a fun and productive activity.'),
(35, 2, 'Retiring from Marine Heritage Board', '2017-02-28', 'default.jpg', 'Don Nicholson informed the Marine Heritage Board of Directors that he will be stepping aside, as a board member, effective February 28, 2017. Thank you for the opportunity to serve the community of Saugeen Shores by working and volunteering for the Marine Heritage Society,  Chantry Island Tours, and the Propeller Club.    I wish you all the best and continued success in the operation of the Chantry Island Tours. I plan to continue volunteering and support the restoration, tours, projects and help in the transition as past President and Chair.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `pages_id` smallint(40) UNSIGNED NOT NULL,
  `pages_sectionone` text,
  `pages_sectiontwo` text,
  `page_images` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`pages_id`, `pages_sectionone`, `pages_sectiontwo`, `page_images`) VALUES
(1, 'The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community\'s marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavours.<br><br>Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.', 'As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron.<br><br>During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island.<br><br>\r\nStroll back in time while visiting the Light Keeper\'s Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.', ''),
(2, 'Since 1997 we have had a tremendous amount of support by donations. If you would like to be included, please send a cheque or money order to the mailing address provided.', '', 'images/terry_thomas/sunset_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restoration`
--

CREATE TABLE `tbl_restoration` (
  `restoration_id` mediumint(40) UNSIGNED NOT NULL,
  `restoration_volunteers` varchar(50) NOT NULL,
  `restoration_visitors` varchar(50) NOT NULL,
  `restoration_partners` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_restoration`
--

INSERT INTO `tbl_restoration` (`restoration_id`, `restoration_volunteers`, `restoration_visitors`, `restoration_partners`) VALUES
(1, '125', '20,538', 'Partners in the restoration, island maintenance, Chantry Island Tour operation and other Marine Heritage endeavors include the Town of Saugeen Shores, Bruce County Museum and Cultural Centre, Southampton Propeller Club, Chantry Island Chambettes and Saugeen Shores Chamber of Commerce. Their continuous support contributes to the success of the Marine Heritage Society goal to preserve the local marine history.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` mediumint(40) UNSIGNED NOT NULL,
  `schedule_text` text,
  `schedule_rates` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `schedule_text`, `schedule_rates`) VALUES
(1, 'We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis.', '$30.00 per person (includes HST). Same price for children and adults.<br>\r\nSpecial group rates available.<br>\r\nMasterCard, Visa, Debit accepted.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` tinyint(1) UNSIGNED NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_level` varchar(50) NOT NULL,
  `user_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_pass`, `user_level`, `user_ip`) VALUES
(1, 'Amanda', 'Mercer', 'a', '1', '1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteers`
--

CREATE TABLE `tbl_volunteers` (
  `volunteers_id` mediumint(40) UNSIGNED NOT NULL,
  `volunteers_image` varchar(200) DEFAULT NULL,
  `volunteers_name` varchar(100) NOT NULL,
  `volunteers_role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_volunteers`
--

INSERT INTO `tbl_volunteers` (`volunteers_id`, `volunteers_image`, `volunteers_name`, `volunteers_role`) VALUES
(1, 'avatar.jpg', 'Don Nicholson', 'Chairman'),
(2, 'avatar.jpg', 'Pat O\'Connor', 'Vice Chairman'),
(3, 'avatar.jpg', 'John Rigby', 'Treasurer'),
(4, 'avatar.jpg', 'Stan Young', 'Secretary'),
(5, 'avatar.jpg', 'Rick Smith', 'Past Chairman'),
(6, 'avatar.jpg', 'Ali Kelly', ''),
(7, 'avatar.jpg', 'Jane Kramer', ''),
(8, 'avatar.jpg', 'Vicki Tomori', ''),
(9, 'avatar.jpg', 'Dan Holmes', ''),
(10, 'avatar.jpg', 'Dave Wenn', ''),
(11, 'avatar.jpg', 'Ed Braun', ''),
(12, 'avatar.jpg', 'John Willetts', ''),
(13, 'avatar.jpg', 'Peter Williamson', 'Observer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_last_log`
--
ALTER TABLE `tbl_last_log`
  ADD PRIMARY KEY (`last_log_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `tbl_restoration`
--
ALTER TABLE `tbl_restoration`
  ADD PRIMARY KEY (`restoration_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
  ADD PRIMARY KEY (`volunteers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `about_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `donation_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_last_log`
--
ALTER TABLE `tbl_last_log`
  MODIFY `last_log_id` smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `pages_id` smallint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_restoration`
--
ALTER TABLE `tbl_restoration`
  MODIFY `restoration_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` tinyint(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_volunteers`
--
ALTER TABLE `tbl_volunteers`
  MODIFY `volunteers_id` mediumint(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
