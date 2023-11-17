-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 16, 2023 at 10:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `password`, `email`, `profile`) VALUES
(1, 'admin', 'admin123', 'admin@gmail.com', 'upload_images/cosai.png');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_file`
--

CREATE TABLE `cloud_file` (
  `id` int(11) NOT NULL,
  `KIT_ID` varchar(255) NOT NULL,
  `file_id` varchar(200) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloud_file`
--

INSERT INTO `cloud_file` (`id`, `KIT_ID`, `file_id`, `file_name`, `start_time`, `file_url`) VALUES
(1, 'COSAI_VMS_902', '1M4Ibik1UkPA6NCa9yrG5n_7zf9cxElTg', '26-10-2023_16-06-32-PM.h264', '26-10-2023_16-06-32-PM', 'https://drive.google.com/file/d/1M4Ibik1UkPA6NCa9yrG5n_7zf9cxElTg/preview'),
(2, 'COSAI_VMS_902', '10SfY4tSKHSE87fvRGXlfdL0l5Q9HEDuV', '26-10-2023_11-00-02-AM.h264', '26-10-2023_11-00-02-AM', 'https://drive.google.com/file/d/10SfY4tSKHSE87fvRGXlfdL0l5Q9HEDuV/preview'),
(3, 'COSAI_VMS_902', '1IxHscLgWLjSVkAb2pCH7k8Ki3RQHfLQi', '26-10-2023_10-00-01-AM.h264', '26-10-2023_10-00-01-AM', 'https://drive.google.com/file/d/1IxHscLgWLjSVkAb2pCH7k8Ki3RQHfLQi/preview'),
(4, 'COSAI_VMS_902', '1hmK0oTlnxckIoNb98QfSGeus6y1RsMLK', '26-10-2023_09-00-01-AM.h264', '26-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1hmK0oTlnxckIoNb98QfSGeus6y1RsMLK/preview'),
(5, 'COSAI_VMS_902', '165pgl0AJEWxMA2TtSfuVNFL9QulHJOAF', '26-10-2023_08-00-01-AM.h264', '26-10-2023_08-00-01-AM', 'https://drive.google.com/file/d/165pgl0AJEWxMA2TtSfuVNFL9QulHJOAF/preview'),
(6, 'COSAI_VMS_902', '1CWUdNr0fa_CzGbRkaz5vV_otk1B2wVmD', '26-10-2023_07-00-02-AM.h264', '26-10-2023_07-00-02-AM', 'https://drive.google.com/file/d/1CWUdNr0fa_CzGbRkaz5vV_otk1B2wVmD/preview'),
(7, 'COSAI_VMS_902', '1LQzIeJbl753hOFcR2hcZK6YqhOaKR5Zj', '26-10-2023_06-00-01-AM.h264', '26-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1LQzIeJbl753hOFcR2hcZK6YqhOaKR5Zj/preview'),
(8, 'COSAI_VMS_902', '1Ei5wgFUovmKgrxEZu6mZXJwqXoSKCfrE', '26-10-2023_05-00-00-AM.h264', '26-10-2023_05-00-00-AM', 'https://drive.google.com/file/d/1Ei5wgFUovmKgrxEZu6mZXJwqXoSKCfrE/preview'),
(9, 'COSAI_VMS_902', '15-oEECr1Va07ie_laMURAgqKn4NaZYDT', '26-10-2023_04-00-00-AM.h264', '26-10-2023_04-00-00-AM', 'https://drive.google.com/file/d/15-oEECr1Va07ie_laMURAgqKn4NaZYDT/preview'),
(10, 'COSAI_VMS_902', '1jb8LGd8ihhLiZWyItn0XNNfvb44LCPy_', '26-10-2023_03-00-01-AM.h264', '26-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1jb8LGd8ihhLiZWyItn0XNNfvb44LCPy_/preview'),
(11, 'COSAI_VMS_902', '1Nk-0OmL2jSDrrn2ZBtQrR3y6NXKnnsrd', '26-10-2023_02-00-01-AM.h264', '26-10-2023_02-00-01-AM', 'https://drive.google.com/file/d/1Nk-0OmL2jSDrrn2ZBtQrR3y6NXKnnsrd/preview'),
(12, 'COSAI_VMS_902', '1Q8VexaoaA_28FIKh0vzZiTyuo7GMRJCm', '26-10-2023_01-00-00-AM.h264', '26-10-2023_01-00-00-AM', 'https://drive.google.com/file/d/1Q8VexaoaA_28FIKh0vzZiTyuo7GMRJCm/preview'),
(13, 'COSAI_VMS_902', '1NidXgCUWC6kgRBa-eR3dfZf1QjVaIW-P', '26-10-2023_00-00-00-AM.h264', '26-10-2023_00-00-00-AM', 'https://drive.google.com/file/d/1NidXgCUWC6kgRBa-eR3dfZf1QjVaIW-P/preview'),
(14, 'COSAI_VMS_902', '1PyiBZCOTFmulGO_5VfEzJ77C3930JSNT', '25-10-2023_23-00-01-PM.h264', '25-10-2023_23-00-01-PM', 'https://drive.google.com/file/d/1PyiBZCOTFmulGO_5VfEzJ77C3930JSNT/preview'),
(15, 'COSAI_VMS_902', '1otOB6D7QW4jI1eaEUsAjAdv7QO2yKMVu', '25-10-2023_22-00-01-PM.h264', '25-10-2023_22-00-01-PM', 'https://drive.google.com/file/d/1otOB6D7QW4jI1eaEUsAjAdv7QO2yKMVu/preview'),
(16, 'COSAI_VMS_902', '15S6DCrVSJEqqNhQJM99-t_8zSh1EFwTH', '25-10-2023_21-00-02-PM.h264', '25-10-2023_21-00-02-PM', 'https://drive.google.com/file/d/15S6DCrVSJEqqNhQJM99-t_8zSh1EFwTH/preview'),
(17, 'COSAI_VMS_902', '15BkHIo7PFyGg2huy7pPEs4MFELWCfkI1', '25-10-2023_20-00-01-PM.h264', '25-10-2023_20-00-01-PM', 'https://drive.google.com/file/d/15BkHIo7PFyGg2huy7pPEs4MFELWCfkI1/preview'),
(18, 'COSAI_VMS_902', '1FXiJ71nZa72Nh2ZYaeuFtHe-BPPrFoFB', '25-10-2023_19-00-01-PM.h264', '25-10-2023_19-00-01-PM', 'https://drive.google.com/file/d/1FXiJ71nZa72Nh2ZYaeuFtHe-BPPrFoFB/preview'),
(19, 'COSAI_VMS_902', '19EPvCd5E8Klzj8g1PIz3qpgwHoDuJJw3', '25-10-2023_18-00-01-PM.h264', '25-10-2023_18-00-01-PM', 'https://drive.google.com/file/d/19EPvCd5E8Klzj8g1PIz3qpgwHoDuJJw3/preview'),
(20, 'COSAI_VMS_902', '1OktjlOUxVVxMUuxdJAPF9YuOPmGVDUqL', '25-10-2023_17-00-02-PM.h264', '25-10-2023_17-00-02-PM', 'https://drive.google.com/file/d/1OktjlOUxVVxMUuxdJAPF9YuOPmGVDUqL/preview'),
(21, 'COSAI_VMS_902', '1MkhGmsfuWzlVPqdVPpH3irU2lA2cUTuh', '25-10-2023_16-00-01-PM.h264', '25-10-2023_16-00-01-PM', 'https://drive.google.com/file/d/1MkhGmsfuWzlVPqdVPpH3irU2lA2cUTuh/preview'),
(22, 'COSAI_VMS_902', '1Vf_eTaWgIdWtsNr-N7wMr7l9Vw-ULZcp', '25-10-2023_15-00-01-PM.h264', '25-10-2023_15-00-01-PM', 'https://drive.google.com/file/d/1Vf_eTaWgIdWtsNr-N7wMr7l9Vw-ULZcp/preview'),
(23, 'COSAI_VMS_902', '12w79SFScqrc5GK4o0KrfsZp8yTQ7DbbN', '25-10-2023_14-00-01-PM.h264', '25-10-2023_14-00-01-PM', 'https://drive.google.com/file/d/12w79SFScqrc5GK4o0KrfsZp8yTQ7DbbN/preview'),
(24, 'COSAI_VMS_902', '14xcQF2ttBJZrK4PaVwV3jHFuJdTsb1nf', '25-10-2023_13-15-32-PM.h264', '25-10-2023_13-15-32-PM', 'https://drive.google.com/file/d/14xcQF2ttBJZrK4PaVwV3jHFuJdTsb1nf/preview'),
(25, 'COSAI_VMS_902', '17iBpd4eLqz_1MBf3Yc-jkq0WKlFGWGgu', '25-10-2023_13-00-01-PM.h264', '25-10-2023_13-00-01-PM', 'https://drive.google.com/file/d/17iBpd4eLqz_1MBf3Yc-jkq0WKlFGWGgu/preview'),
(26, 'COSAI_VMS_902', '1gPx3alLo4D6CFobQ-L67wrAQwF_6sJx8', '25-10-2023_12-00-02-PM.h264', '25-10-2023_12-00-02-PM', 'https://drive.google.com/file/d/1gPx3alLo4D6CFobQ-L67wrAQwF_6sJx8/preview'),
(27, 'COSAI_VMS_902', '13rJAMAifBgwJgfsj44Q6xRWS489Br5u_', '25-10-2023_11-00-01-AM.h264', '25-10-2023_11-00-01-AM', 'https://drive.google.com/file/d/13rJAMAifBgwJgfsj44Q6xRWS489Br5u_/preview'),
(28, 'COSAI_VMS_902', '1UzvoS7hWIyrMoDEmHQ4s3VXQjLnr5uEh', '25-10-2023_10-28-11-AM.h264', '25-10-2023_10-28-11-AM', 'https://drive.google.com/file/d/1UzvoS7hWIyrMoDEmHQ4s3VXQjLnr5uEh/preview'),
(29, 'COSAI_VMS_902', '1wVQrehN8GI3YRle30-AQYLqZujdOFSld', '25-10-2023_10-27-06-AM.h264', '25-10-2023_10-27-06-AM', 'https://drive.google.com/file/d/1wVQrehN8GI3YRle30-AQYLqZujdOFSld/preview'),
(30, 'COSAI_VMS_902', '1PKOvPWGEYIfdjj2DwPJnEy57mQe7e_9F', '25-10-2023_10-00-01-AM.h264', '25-10-2023_10-00-01-AM', 'https://drive.google.com/file/d/1PKOvPWGEYIfdjj2DwPJnEy57mQe7e_9F/preview'),
(31, 'COSAI_VMS_902', '1TaDT1nM2EdrCxjcG8iCdEiBWiW0rOERU', '25-10-2023_09-00-01-AM.h264', '25-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1TaDT1nM2EdrCxjcG8iCdEiBWiW0rOERU/preview'),
(32, 'COSAI_VMS_902', '1Zx91gfpPl_iDCTrSEFLf2YLmjf-bJXli', '25-10-2023_08-00-00-AM.h264', '25-10-2023_08-00-00-AM', 'https://drive.google.com/file/d/1Zx91gfpPl_iDCTrSEFLf2YLmjf-bJXli/preview'),
(33, 'COSAI_VMS_902', '1Sx9tJXw_kKURg7jvqsloud2-0NBqP58V', '25-10-2023_07-00-00-AM.h264', '25-10-2023_07-00-00-AM', 'https://drive.google.com/file/d/1Sx9tJXw_kKURg7jvqsloud2-0NBqP58V/preview'),
(34, 'COSAI_VMS_902', '1HledoxbODykrRbW7l5zoQQ1sitz434DC', '25-10-2023_06-00-01-AM.h264', '25-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1HledoxbODykrRbW7l5zoQQ1sitz434DC/preview'),
(35, 'COSAI_VMS_902', '1Ka4vMfhMp-Z0zMLO3VRq-f33TG4-Z7Kx', '25-10-2023_05-00-00-AM.h264', '25-10-2023_05-00-00-AM', 'https://drive.google.com/file/d/1Ka4vMfhMp-Z0zMLO3VRq-f33TG4-Z7Kx/preview'),
(36, 'COSAI_VMS_902', '1V95y1pcN2r4yoYkTQpBb7pv6id1ERUQn', '25-10-2023_04-00-01-AM.h264', '25-10-2023_04-00-01-AM', 'https://drive.google.com/file/d/1V95y1pcN2r4yoYkTQpBb7pv6id1ERUQn/preview'),
(37, 'COSAI_VMS_902', '1ZQG0w6rLCCqLVZnxDdW0V6bvwyLURX6z', '25-10-2023_03-00-01-AM.h264', '25-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1ZQG0w6rLCCqLVZnxDdW0V6bvwyLURX6z/preview'),
(38, 'COSAI_VMS_902', '1NBAfaHPIMNmCpp5PIndDyiArTuYkLWrD', '25-10-2023_02-47-43-AM.h264', '25-10-2023_02-47-43-AM', 'https://drive.google.com/file/d/1NBAfaHPIMNmCpp5PIndDyiArTuYkLWrD/preview'),
(39, 'COSAI_VMS_902', '1r8amYmEbAugCuH759nTqFyuORlMbSQwC', '25-10-2023_02-00-00-AM.h264', '25-10-2023_02-00-00-AM', 'https://drive.google.com/file/d/1r8amYmEbAugCuH759nTqFyuORlMbSQwC/preview'),
(40, 'COSAI_VMS_902', '1N8sULunT3ixelqHmwkaUo0cM9y0IIqY2', '25-10-2023_01-00-00-AM.h264', '25-10-2023_01-00-00-AM', 'https://drive.google.com/file/d/1N8sULunT3ixelqHmwkaUo0cM9y0IIqY2/preview'),
(41, 'COSAI_VMS_902', '1T4T4nJzVE67bwMXGI2sLC4BhKQFiEHW1', '25-10-2023_00-00-00-AM.h264', '25-10-2023_00-00-00-AM', 'https://drive.google.com/file/d/1T4T4nJzVE67bwMXGI2sLC4BhKQFiEHW1/preview'),
(42, 'COSAI_VMS_902', '1wyitp05rlVbAXA5-VTfWhKN__MIM5fMS', '24-10-2023_23-00-00-PM.h264', '24-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1wyitp05rlVbAXA5-VTfWhKN__MIM5fMS/preview'),
(43, 'COSAI_VMS_902', '10mRsc7oLgvTxyJ_hFMf9z8fJFXlhclc2', '24-10-2023_22-00-00-PM.h264', '24-10-2023_22-00-00-PM', 'https://drive.google.com/file/d/10mRsc7oLgvTxyJ_hFMf9z8fJFXlhclc2/preview'),
(44, 'COSAI_VMS_902', '1_PPgPq2q6xECJkxiHaTx_sfz7iN1lYyU', '24-10-2023_21-00-01-PM.h264', '24-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/1_PPgPq2q6xECJkxiHaTx_sfz7iN1lYyU/preview'),
(45, 'COSAI_VMS_902', '1eoLNgsD05HtBdLeRWIdmHzwQIFIy0hqw', '24-10-2023_20-00-00-PM.h264', '24-10-2023_20-00-00-PM', 'https://drive.google.com/file/d/1eoLNgsD05HtBdLeRWIdmHzwQIFIy0hqw/preview'),
(46, 'COSAI_VMS_902', '1r8HjSEnzhHRe8z5U1IfnGKNCuPT-ZFoR', '24-10-2023_19-00-00-PM.h264', '24-10-2023_19-00-00-PM', 'https://drive.google.com/file/d/1r8HjSEnzhHRe8z5U1IfnGKNCuPT-ZFoR/preview'),
(47, 'COSAI_VMS_902', '1qF41Zn3D8BJ18Za_NVhAP-2xZMWYF7fU', '24-10-2023_18-00-00-PM.h264', '24-10-2023_18-00-00-PM', 'https://drive.google.com/file/d/1qF41Zn3D8BJ18Za_NVhAP-2xZMWYF7fU/preview'),
(48, 'COSAI_VMS_902', '1s4TDRPLov-Cjwf8spuBp8ne0ojaNfy-u', '24-10-2023_17-00-00-PM.h264', '24-10-2023_17-00-00-PM', 'https://drive.google.com/file/d/1s4TDRPLov-Cjwf8spuBp8ne0ojaNfy-u/preview'),
(49, 'COSAI_VMS_902', '1jL0vSeyZ0yLrRC33jwEQEBQ5WL_TfM9s', '24-10-2023_16-00-00-PM.h264', '24-10-2023_16-00-00-PM', 'https://drive.google.com/file/d/1jL0vSeyZ0yLrRC33jwEQEBQ5WL_TfM9s/preview'),
(50, 'COSAI_VMS_902', '1pYbIgv0-_pIYOK9dXFcyL2ZIhVy0OFeM', '24-10-2023_15-00-01-PM.h264', '24-10-2023_15-00-01-PM', 'https://drive.google.com/file/d/1pYbIgv0-_pIYOK9dXFcyL2ZIhVy0OFeM/preview'),
(51, 'COSAI_VMS_902', '1Os4rfBryQh51a8XDKT7WCyzVGd6DW7_-', '24-10-2023_14-00-00-PM.h264', '24-10-2023_14-00-00-PM', 'https://drive.google.com/file/d/1Os4rfBryQh51a8XDKT7WCyzVGd6DW7_-/preview'),
(52, 'COSAI_VMS_902', '16yD6fxmvN1t9vDjZTs4qK64_RatimQwh', '24-10-2023_13-00-00-PM.h264', '24-10-2023_13-00-00-PM', 'https://drive.google.com/file/d/16yD6fxmvN1t9vDjZTs4qK64_RatimQwh/preview'),
(53, 'COSAI_VMS_902', '1kntK4Tc78WLJQhHNE1UW1N4RyJigzggf', '24-10-2023_12-00-00-PM.h264', '24-10-2023_12-00-00-PM', 'https://drive.google.com/file/d/1kntK4Tc78WLJQhHNE1UW1N4RyJigzggf/preview'),
(54, 'COSAI_VMS_902', '1QycubP6qoJ4hndF75uZg_2gkk_5ETNf1', '24-10-2023_11-00-00-AM.h264', '24-10-2023_11-00-00-AM', 'https://drive.google.com/file/d/1QycubP6qoJ4hndF75uZg_2gkk_5ETNf1/preview'),
(55, 'COSAI_VMS_902', '1q4jkgBgI9qLBPvVeUC9iEmgxOWiFqFPX', '24-10-2023_10-00-00-AM.h264', '24-10-2023_10-00-00-AM', 'https://drive.google.com/file/d/1q4jkgBgI9qLBPvVeUC9iEmgxOWiFqFPX/preview'),
(56, 'COSAI_VMS_902', '19l82X_y5015w7FAsehab232RK5lH4IHd', '24-10-2023_09-00-01-AM.h264', '24-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/19l82X_y5015w7FAsehab232RK5lH4IHd/preview'),
(57, 'COSAI_VMS_902', '1bOCRutZmNK-3oXmyWxapJH4lo-_DM3gg', '24-10-2023_08-00-01-AM.h264', '24-10-2023_08-00-01-AM', 'https://drive.google.com/file/d/1bOCRutZmNK-3oXmyWxapJH4lo-_DM3gg/preview'),
(58, 'COSAI_VMS_902', '1yrYfeTOPImod_iVqN4JL3f2Mx_ZOSJ5m', '24-10-2023_07-00-00-AM.h264', '24-10-2023_07-00-00-AM', 'https://drive.google.com/file/d/1yrYfeTOPImod_iVqN4JL3f2Mx_ZOSJ5m/preview'),
(59, 'COSAI_VMS_902', '11d7t52aF-gOM3BBlvYF3EK0mXfwukqGR', '24-10-2023_06-00-00-AM.h264', '24-10-2023_06-00-00-AM', 'https://drive.google.com/file/d/11d7t52aF-gOM3BBlvYF3EK0mXfwukqGR/preview'),
(60, 'COSAI_VMS_902', '1R5KR9wZk8bZcNEUlC_P9_P73OPWUJPl9', '24-10-2023_05-00-00-AM.h264', '24-10-2023_05-00-00-AM', 'https://drive.google.com/file/d/1R5KR9wZk8bZcNEUlC_P9_P73OPWUJPl9/preview'),
(61, 'COSAI_VMS_902', '1bJLYUvpzK_7BLBPdh9xA9LQSU04fxyU8', '24-10-2023_04-00-00-AM.h264', '24-10-2023_04-00-00-AM', 'https://drive.google.com/file/d/1bJLYUvpzK_7BLBPdh9xA9LQSU04fxyU8/preview'),
(62, 'COSAI_VMS_902', '1q0O2qlbuMYLLDGmGoeGQi99Tk5F8CLw8', '24-10-2023_03-00-01-AM.h264', '24-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1q0O2qlbuMYLLDGmGoeGQi99Tk5F8CLw8/preview'),
(63, 'COSAI_VMS_902', '1aqmOBR1OX0UNSz0U7T2E0St0N-LEeZhN', '24-10-2023_02-00-01-AM.h264', '24-10-2023_02-00-01-AM', 'https://drive.google.com/file/d/1aqmOBR1OX0UNSz0U7T2E0St0N-LEeZhN/preview'),
(64, 'COSAI_VMS_902', '1JAVL8x8FUShpfVh1bCZEjH2OZvSX64Vo', '24-10-2023_01-00-00-AM.h264', '24-10-2023_01-00-00-AM', 'https://drive.google.com/file/d/1JAVL8x8FUShpfVh1bCZEjH2OZvSX64Vo/preview'),
(65, 'COSAI_VMS_902', '1E2Z3PtVvnbYiFsId-VTt8LJaNJQ0xyZZ', '24-10-2023_00-00-00-AM.h264', '24-10-2023_00-00-00-AM', 'https://drive.google.com/file/d/1E2Z3PtVvnbYiFsId-VTt8LJaNJQ0xyZZ/preview'),
(66, 'COSAI_VMS_902', '1p8ef6BGMed5Ps6npJdOwgHOWu_AuFWVR', '23-10-2023_23-00-00-PM.h264', '23-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1p8ef6BGMed5Ps6npJdOwgHOWu_AuFWVR/preview'),
(67, 'COSAI_VMS_902', '1U-QKuKnhfVCbViAw82SVY9bagINzaxQI', '23-10-2023_22-00-00-PM.h264', '23-10-2023_22-00-00-PM', 'https://drive.google.com/file/d/1U-QKuKnhfVCbViAw82SVY9bagINzaxQI/preview'),
(68, 'COSAI_VMS_902', '1vFOFA_2SUMr93achA9VZ5EEZrwKqRHQd', '23-10-2023_21-00-01-PM.h264', '23-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/1vFOFA_2SUMr93achA9VZ5EEZrwKqRHQd/preview'),
(69, 'COSAI_VMS_902', '19ygcY2tEPHnYZ437u0xd5FFyHuKV_PML', '23-10-2023_20-00-01-PM.h264', '23-10-2023_20-00-01-PM', 'https://drive.google.com/file/d/19ygcY2tEPHnYZ437u0xd5FFyHuKV_PML/preview'),
(70, 'COSAI_VMS_902', '18qSog3wBjRoXYHGUk-sDhsH6PIAd85Ua', '23-10-2023_19-00-00-PM.h264', '23-10-2023_19-00-00-PM', 'https://drive.google.com/file/d/18qSog3wBjRoXYHGUk-sDhsH6PIAd85Ua/preview'),
(71, 'COSAI_VMS_902', '17Xx2lwnfb36asp-fMQu__3eKHqLFx4Wd', '23-10-2023_18-00-00-PM.h264', '23-10-2023_18-00-00-PM', 'https://drive.google.com/file/d/17Xx2lwnfb36asp-fMQu__3eKHqLFx4Wd/preview'),
(72, 'COSAI_VMS_902', '1j9veEg5_ZQzxbmfvYTBanpo8wgtltKrl', '23-10-2023_17-00-00-PM.h264', '23-10-2023_17-00-00-PM', 'https://drive.google.com/file/d/1j9veEg5_ZQzxbmfvYTBanpo8wgtltKrl/preview'),
(73, 'COSAI_VMS_902', '1fAjcZR8vTlppJ4tKIlcFRFDZO7sczUUQ', '23-10-2023_16-00-00-PM.h264', '23-10-2023_16-00-00-PM', 'https://drive.google.com/file/d/1fAjcZR8vTlppJ4tKIlcFRFDZO7sczUUQ/preview'),
(74, 'COSAI_VMS_902', '1EI71laZ7pHbcI8TdjpYxCe2hLrtUJNlb', '23-10-2023_15-00-01-PM.h264', '23-10-2023_15-00-01-PM', 'https://drive.google.com/file/d/1EI71laZ7pHbcI8TdjpYxCe2hLrtUJNlb/preview'),
(75, 'COSAI_VMS_902', '1WBhqEIHGiDU6U8CRcTM9ZH5jVe838IHQ', '23-10-2023_14-00-01-PM.h264', '23-10-2023_14-00-01-PM', 'https://drive.google.com/file/d/1WBhqEIHGiDU6U8CRcTM9ZH5jVe838IHQ/preview'),
(76, 'COSAI_VMS_902', '1239WMw3DV0KcXfkobD4uY_2OZWB9r4qM', '23-10-2023_13-48-50-PM.h264', '23-10-2023_13-48-50-PM', 'https://drive.google.com/file/d/1239WMw3DV0KcXfkobD4uY_2OZWB9r4qM/preview'),
(77, 'COSAI_VMS_902', '1bc4LacUCDp5grwvvL0mJke8PrVoJ6j4J', '23-10-2023_13-00-00-PM.h264', '23-10-2023_13-00-00-PM', 'https://drive.google.com/file/d/1bc4LacUCDp5grwvvL0mJke8PrVoJ6j4J/preview'),
(78, 'COSAI_VMS_902', '1MfDrJleEkDryZj3VkTc8dHhoboe99SF6', '23-10-2023_12-00-01-PM.h264', '23-10-2023_12-00-01-PM', 'https://drive.google.com/file/d/1MfDrJleEkDryZj3VkTc8dHhoboe99SF6/preview'),
(79, 'COSAI_VMS_902', '1HMXzkPSaQ2KhBzPvVMKtycmlrDUL7sCv', '23-10-2023_11-00-01-AM.h264', '23-10-2023_11-00-01-AM', 'https://drive.google.com/file/d/1HMXzkPSaQ2KhBzPvVMKtycmlrDUL7sCv/preview'),
(80, 'COSAI_VMS_902', '1ZGZBFuI0I9bApAJP2fQVQL6ZQCnT1AzN', '23-10-2023_10-00-01-AM.h264', '23-10-2023_10-00-01-AM', 'https://drive.google.com/file/d/1ZGZBFuI0I9bApAJP2fQVQL6ZQCnT1AzN/preview'),
(81, 'COSAI_VMS_902', '1AHE4yVcwNzXElOYj7jM_oPglovTZahOh', '23-10-2023_09-00-00-AM.h264', '23-10-2023_09-00-00-AM', 'https://drive.google.com/file/d/1AHE4yVcwNzXElOYj7jM_oPglovTZahOh/preview'),
(82, 'COSAI_VMS_902', '1E5lm8ivZ_bRljzyabA28g9Jb9IkB5oR-', '23-10-2023_08-00-01-AM.h264', '23-10-2023_08-00-01-AM', 'https://drive.google.com/file/d/1E5lm8ivZ_bRljzyabA28g9Jb9IkB5oR-/preview'),
(83, 'COSAI_VMS_902', '194ShtEsG0xDM7TqI-m-KD_w_oqnt6Q02', '23-10-2023_07-00-00-AM.h264', '23-10-2023_07-00-00-AM', 'https://drive.google.com/file/d/194ShtEsG0xDM7TqI-m-KD_w_oqnt6Q02/preview'),
(84, 'COSAI_VMS_902', '1IBJ9_ztRPeKgZFnUnyxyDRY3HvXLDZlf', '23-10-2023_06-00-01-AM.h264', '23-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1IBJ9_ztRPeKgZFnUnyxyDRY3HvXLDZlf/preview'),
(85, 'COSAI_VMS_902', '1S2wl3jra01hKekL5WKNLOsR_2abfG8YY', '23-10-2023_05-00-01-AM.h264', '23-10-2023_05-00-01-AM', 'https://drive.google.com/file/d/1S2wl3jra01hKekL5WKNLOsR_2abfG8YY/preview'),
(86, 'COSAI_VMS_902', '1b6BWYWH-4Sf1q9hHvCSTgcuO7NddTfzV', '23-10-2023_04-00-01-AM.h264', '23-10-2023_04-00-01-AM', 'https://drive.google.com/file/d/1b6BWYWH-4Sf1q9hHvCSTgcuO7NddTfzV/preview'),
(87, 'COSAI_VMS_902', '1cIz6e2TuIBIxrO50g_0g0iWHezC0Zmjg', '23-10-2023_03-00-01-AM.h264', '23-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1cIz6e2TuIBIxrO50g_0g0iWHezC0Zmjg/preview'),
(88, 'COSAI_VMS_902', '1UVwEuZ_So9gHYG--cZ9MoVj4zk_kfDAH', '23-10-2023_02-00-00-AM.h264', '23-10-2023_02-00-00-AM', 'https://drive.google.com/file/d/1UVwEuZ_So9gHYG--cZ9MoVj4zk_kfDAH/preview'),
(89, 'COSAI_VMS_902', '1HmMwtYiDofErp0VJKOl3lgqSndarq4Tg', '23-10-2023_01-00-00-AM.h264', '23-10-2023_01-00-00-AM', 'https://drive.google.com/file/d/1HmMwtYiDofErp0VJKOl3lgqSndarq4Tg/preview'),
(90, 'COSAI_VMS_902', '1PrczR0m5zqDhl5j1UpeNollpCbu1dGhY', '23-10-2023_00-00-01-AM.h264', '23-10-2023_00-00-01-AM', 'https://drive.google.com/file/d/1PrczR0m5zqDhl5j1UpeNollpCbu1dGhY/preview'),
(91, 'COSAI_VMS_902', '1xItlQd_vKFF-eQD8kCnvcY6p_Ifr6wEc', '22-10-2023_23-00-00-PM.h264', '22-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1xItlQd_vKFF-eQD8kCnvcY6p_Ifr6wEc/preview'),
(92, 'COSAI_VMS_902', '16X-5YyxEZvr0n4qZKr_6CRf_gKN-7Rtj', '22-10-2023_22-00-01-PM.h264', '22-10-2023_22-00-01-PM', 'https://drive.google.com/file/d/16X-5YyxEZvr0n4qZKr_6CRf_gKN-7Rtj/preview'),
(93, 'COSAI_VMS_902', '1swTlTrIB6HSbkzIHp_BeH51EnO03l4ZR', '22-10-2023_21-00-01-PM.h264', '22-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/1swTlTrIB6HSbkzIHp_BeH51EnO03l4ZR/preview'),
(94, 'COSAI_VMS_902', '1pzCPhsv8GRHY53OYCND2kzY-a2sP6Etw', '22-10-2023_20-00-00-PM.h264', '22-10-2023_20-00-00-PM', 'https://drive.google.com/file/d/1pzCPhsv8GRHY53OYCND2kzY-a2sP6Etw/preview'),
(95, 'COSAI_VMS_902', '1BZsEHWVkDehPinGx9a-4-KGJmAN1r8tt', '22-10-2023_19-00-00-PM.h264', '22-10-2023_19-00-00-PM', 'https://drive.google.com/file/d/1BZsEHWVkDehPinGx9a-4-KGJmAN1r8tt/preview'),
(96, 'COSAI_VMS_902', '1z49k4ibUyJoY0oLRwtnFxxvEOiCqbTYE', '22-10-2023_18-00-01-PM.h264', '22-10-2023_18-00-01-PM', 'https://drive.google.com/file/d/1z49k4ibUyJoY0oLRwtnFxxvEOiCqbTYE/preview'),
(97, 'COSAI_VMS_902', '1ON8-UECox7mKJv3GN7xzrqexJwo6lths', '22-10-2023_17-00-00-PM.h264', '22-10-2023_17-00-00-PM', 'https://drive.google.com/file/d/1ON8-UECox7mKJv3GN7xzrqexJwo6lths/preview'),
(98, 'COSAI_VMS_902', '1N6vr7Ihv77p2hfFf3VRjaq6w2MiPETd6', '22-10-2023_16-00-01-PM.h264', '22-10-2023_16-00-01-PM', 'https://drive.google.com/file/d/1N6vr7Ihv77p2hfFf3VRjaq6w2MiPETd6/preview'),
(99, 'COSAI_VMS_902', '1LSNcR80_8Fp5kXSOWuXkJfxpDuxYO1DQ', '22-10-2023_15-00-01-PM.h264', '22-10-2023_15-00-01-PM', 'https://drive.google.com/file/d/1LSNcR80_8Fp5kXSOWuXkJfxpDuxYO1DQ/preview'),
(100, 'COSAI_VMS_902', '1p_Fu3crfE52fykJzU3Yl8p6y8Zk0nFo7', '22-10-2023_14-00-01-PM.h264', '22-10-2023_14-00-01-PM', 'https://drive.google.com/file/d/1p_Fu3crfE52fykJzU3Yl8p6y8Zk0nFo7/preview'),
(101, 'COSAI_VMS_902', '1ENW9gsfOXClowijYxR3RL5dVMJ0odgyO', '22-10-2023_13-00-01-PM.h264', '22-10-2023_13-00-01-PM', 'https://drive.google.com/file/d/1ENW9gsfOXClowijYxR3RL5dVMJ0odgyO/preview'),
(102, 'COSAI_VMS_902', '14zBvyyeH3s94KfU7L-seb54rQsvUG1DW', '22-10-2023_12-00-01-PM.h264', '22-10-2023_12-00-01-PM', 'https://drive.google.com/file/d/14zBvyyeH3s94KfU7L-seb54rQsvUG1DW/preview'),
(103, 'COSAI_VMS_902', '14vYqLe0Z2NKTMiOGMhZ7-j8Uktim6PkR', '22-10-2023_11-00-01-AM.h264', '22-10-2023_11-00-01-AM', 'https://drive.google.com/file/d/14vYqLe0Z2NKTMiOGMhZ7-j8Uktim6PkR/preview'),
(104, 'COSAI_VMS_902', '1jHBGgJgi6vebKlKZvBWh0D8o6bInY6Nz', '22-10-2023_10-00-01-AM.h264', '22-10-2023_10-00-01-AM', 'https://drive.google.com/file/d/1jHBGgJgi6vebKlKZvBWh0D8o6bInY6Nz/preview'),
(105, 'COSAI_VMS_902', '1NXUcXiELLd1vbUADsOLHO5NrtDAlZ8BE', '22-10-2023_09-00-01-AM.h264', '22-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1NXUcXiELLd1vbUADsOLHO5NrtDAlZ8BE/preview'),
(106, 'COSAI_VMS_902', '1VIz-AVC70eLkAuqboKPvhtRa9KIzn98F', '22-10-2023_08-00-00-AM.h264', '22-10-2023_08-00-00-AM', 'https://drive.google.com/file/d/1VIz-AVC70eLkAuqboKPvhtRa9KIzn98F/preview'),
(107, 'COSAI_VMS_902', '18g0iITuQL6ZwOUBeRbfXcdfRHart-5ex', '22-10-2023_07-00-00-AM.h264', '22-10-2023_07-00-00-AM', 'https://drive.google.com/file/d/18g0iITuQL6ZwOUBeRbfXcdfRHart-5ex/preview'),
(108, 'COSAI_VMS_902', '1yBLjV4lrjV3mNslZK3nWo7GW9FJgJ9Ep', '22-10-2023_06-00-01-AM.h264', '22-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1yBLjV4lrjV3mNslZK3nWo7GW9FJgJ9Ep/preview'),
(109, 'COSAI_VMS_902', '171xp5luJ-5DiMrBHpDAV6jYiXGma-oT3', '22-10-2023_05-00-00-AM.h264', '22-10-2023_05-00-00-AM', 'https://drive.google.com/file/d/171xp5luJ-5DiMrBHpDAV6jYiXGma-oT3/preview'),
(110, 'COSAI_VMS_902', '1X_bzqbHrf3nzjpHuGxhvDaqm9wMz3BAx', '22-10-2023_04-00-01-AM.h264', '22-10-2023_04-00-01-AM', 'https://drive.google.com/file/d/1X_bzqbHrf3nzjpHuGxhvDaqm9wMz3BAx/preview'),
(111, 'COSAI_VMS_902', '1ZqZXoPmdNrdnZ6jQFzUHNrZ6x0sJv3VO', '22-10-2023_03-00-01-AM.h264', '22-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1ZqZXoPmdNrdnZ6jQFzUHNrZ6x0sJv3VO/preview'),
(112, 'COSAI_VMS_902', '15RCkbpo2RdFblXvnSHzXkdLYLbEXwBSr', '22-10-2023_02-00-01-AM.h264', '22-10-2023_02-00-01-AM', 'https://drive.google.com/file/d/15RCkbpo2RdFblXvnSHzXkdLYLbEXwBSr/preview'),
(113, 'COSAI_VMS_902', '1r0I-3tpjhgikPUCZ62DWV_J4U8wuXz3y', '22-10-2023_01-00-01-AM.h264', '22-10-2023_01-00-01-AM', 'https://drive.google.com/file/d/1r0I-3tpjhgikPUCZ62DWV_J4U8wuXz3y/preview'),
(114, 'COSAI_VMS_902', '1SzoUjFMTkySVylS4Af0UjALahwnF0dRi', '22-10-2023_00-00-00-AM.h264', '22-10-2023_00-00-00-AM', 'https://drive.google.com/file/d/1SzoUjFMTkySVylS4Af0UjALahwnF0dRi/preview'),
(115, 'COSAI_VMS_902', '1aZgofWrhCrPVg1_AMkXhILf674yPAoIv', '21-10-2023_23-00-00-PM.h264', '21-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1aZgofWrhCrPVg1_AMkXhILf674yPAoIv/preview'),
(116, 'COSAI_VMS_902', '1APv8hJ1zCO_O0cSvfQUiwVfgCuuuJ_rz', '21-10-2023_22-00-01-PM.h264', '21-10-2023_22-00-01-PM', 'https://drive.google.com/file/d/1APv8hJ1zCO_O0cSvfQUiwVfgCuuuJ_rz/preview'),
(117, 'COSAI_VMS_902', '1MIUVej6o5r4lUeydPqRbE_PqeqigKznO', '21-10-2023_21-00-00-PM.h264', '21-10-2023_21-00-00-PM', 'https://drive.google.com/file/d/1MIUVej6o5r4lUeydPqRbE_PqeqigKznO/preview'),
(118, 'COSAI_VMS_902', '13Gz6pAGufN-A1X2ku_SeliOhgKWFRxVi', '21-10-2023_20-00-01-PM.h264', '21-10-2023_20-00-01-PM', 'https://drive.google.com/file/d/13Gz6pAGufN-A1X2ku_SeliOhgKWFRxVi/preview'),
(119, 'COSAI_VMS_902', '1dyHEzzzkuKewcwEfgKiWxgLMo_C_etDl', '21-10-2023_19-00-01-PM.h264', '21-10-2023_19-00-01-PM', 'https://drive.google.com/file/d/1dyHEzzzkuKewcwEfgKiWxgLMo_C_etDl/preview'),
(120, 'COSAI_VMS_902', '1jolextPhDF6ISFAS6eAG6bX7q4UPuF-T', '21-10-2023_18-00-01-PM.h264', '21-10-2023_18-00-01-PM', 'https://drive.google.com/file/d/1jolextPhDF6ISFAS6eAG6bX7q4UPuF-T/preview'),
(121, 'COSAI_VMS_902', '1gxTwNN6KHiK6YTogDGoMfbSGGb_kAvqR', '21-10-2023_17-00-00-PM.h264', '21-10-2023_17-00-00-PM', 'https://drive.google.com/file/d/1gxTwNN6KHiK6YTogDGoMfbSGGb_kAvqR/preview'),
(122, 'COSAI_VMS_902', '1yHkKU9Xbbsr_2Uakrk7pvru_LKgnS7wH', '21-10-2023_16-00-02-PM.h264', '21-10-2023_16-00-02-PM', 'https://drive.google.com/file/d/1yHkKU9Xbbsr_2Uakrk7pvru_LKgnS7wH/preview'),
(123, 'COSAI_VMS_902', '1xteplW6Bl2jFcjwlZhyRFmOgSrnP1nZr', '21-10-2023_15-00-01-PM.h264', '21-10-2023_15-00-01-PM', 'https://drive.google.com/file/d/1xteplW6Bl2jFcjwlZhyRFmOgSrnP1nZr/preview'),
(124, 'COSAI_VMS_902', '16BelfGOUAli2u6VSsGiU_c7BGBlZ-GzN', '21-10-2023_14-00-01-PM.h264', '21-10-2023_14-00-01-PM', 'https://drive.google.com/file/d/16BelfGOUAli2u6VSsGiU_c7BGBlZ-GzN/preview'),
(125, 'COSAI_VMS_902', '1zD0Frz3E-WDDmRpby5AnZvurgMc8uUt3', '21-10-2023_13-00-01-PM.h264', '21-10-2023_13-00-01-PM', 'https://drive.google.com/file/d/1zD0Frz3E-WDDmRpby5AnZvurgMc8uUt3/preview'),
(126, 'COSAI_VMS_902', '1cuRPJm56xTmoFxpOjc-JVeTfGqPzlgei', '21-10-2023_12-00-01-PM.h264', '21-10-2023_12-00-01-PM', 'https://drive.google.com/file/d/1cuRPJm56xTmoFxpOjc-JVeTfGqPzlgei/preview'),
(127, 'COSAI_VMS_902', '1aG1HvSfCkbSiPfkcphdSj5da-oyPoVBN', '21-10-2023_11-00-01-AM.h264', '21-10-2023_11-00-01-AM', 'https://drive.google.com/file/d/1aG1HvSfCkbSiPfkcphdSj5da-oyPoVBN/preview'),
(128, 'COSAI_VMS_902', '1_5UNbQh5RIyiwRjCCtZEUhgODC8YB_YF', '21-10-2023_10-00-02-AM.h264', '21-10-2023_10-00-02-AM', 'https://drive.google.com/file/d/1_5UNbQh5RIyiwRjCCtZEUhgODC8YB_YF/preview'),
(129, 'COSAI_VMS_902', '1RYou_6m5bpyWNBF10RWeJo_NshkY3Okl', '21-10-2023_09-00-01-AM.h264', '21-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1RYou_6m5bpyWNBF10RWeJo_NshkY3Okl/preview'),
(130, 'COSAI_VMS_902', '1cSZRDboZ-aHP_rpuoPjVfgO3JvGZw654', '21-10-2023_08-00-02-AM.h264', '21-10-2023_08-00-02-AM', 'https://drive.google.com/file/d/1cSZRDboZ-aHP_rpuoPjVfgO3JvGZw654/preview'),
(131, 'COSAI_VMS_902', '1wanMEO3EkYZrErvCb_LgMH3Vq6Y-NfZi', '21-10-2023_07-00-01-AM.h264', '21-10-2023_07-00-01-AM', 'https://drive.google.com/file/d/1wanMEO3EkYZrErvCb_LgMH3Vq6Y-NfZi/preview'),
(132, 'COSAI_VMS_902', '1Q8BDSwzfjQg2tV9O3RKFa_fV_ABIMnTP', '21-10-2023_06-00-01-AM.h264', '21-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1Q8BDSwzfjQg2tV9O3RKFa_fV_ABIMnTP/preview'),
(133, 'COSAI_VMS_902', '1DZNUA_fRI7LYxvN107Vt7ItAGroSKc30', '21-10-2023_05-00-01-AM.h264', '21-10-2023_05-00-01-AM', 'https://drive.google.com/file/d/1DZNUA_fRI7LYxvN107Vt7ItAGroSKc30/preview'),
(134, 'COSAI_VMS_902', '19N56uwloaD41UKWpfbaRby_p1bG_lDcY', '21-10-2023_04-00-02-AM.h264', '21-10-2023_04-00-02-AM', 'https://drive.google.com/file/d/19N56uwloaD41UKWpfbaRby_p1bG_lDcY/preview'),
(135, 'COSAI_VMS_902', '1Z3jwtRr12QosQaYxyDmQODQh0UuOJyzd', '21-10-2023_03-00-01-AM.h264', '21-10-2023_03-00-01-AM', 'https://drive.google.com/file/d/1Z3jwtRr12QosQaYxyDmQODQh0UuOJyzd/preview'),
(136, 'COSAI_VMS_902', '11wfDekz_bPqKxjgkrR2kr4033PDigMW5', '21-10-2023_02-00-02-AM.h264', '21-10-2023_02-00-02-AM', 'https://drive.google.com/file/d/11wfDekz_bPqKxjgkrR2kr4033PDigMW5/preview'),
(137, 'COSAI_VMS_902', '1n9AVhp_v6jRd3GyzJR_JLRO7aYc4U40a', '21-10-2023_01-00-01-AM.h264', '21-10-2023_01-00-01-AM', 'https://drive.google.com/file/d/1n9AVhp_v6jRd3GyzJR_JLRO7aYc4U40a/preview'),
(138, 'COSAI_VMS_902', '1FN1VXEjX4AroM_YwuPX7LSuXH_0CyU_D', '21-10-2023_00-00-01-AM.h264', '21-10-2023_00-00-01-AM', 'https://drive.google.com/file/d/1FN1VXEjX4AroM_YwuPX7LSuXH_0CyU_D/preview'),
(139, 'COSAI_VMS_902', '1uQhR7xdLNwFoh9H-2gMLUUXCWEabL7fo', '20-10-2023_23-00-00-PM.h264', '20-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1uQhR7xdLNwFoh9H-2gMLUUXCWEabL7fo/preview'),
(140, 'COSAI_VMS_902', '1EW3AZOUI6sxQrbXQqzfCg3OmKGBVgHBE', '20-10-2023_22-00-02-PM.h264', '20-10-2023_22-00-02-PM', 'https://drive.google.com/file/d/1EW3AZOUI6sxQrbXQqzfCg3OmKGBVgHBE/preview'),
(141, 'COSAI_VMS_902', '17VR2w6WosJD1L3jGE95LKDJZlq1ZLxpD', '20-10-2023_21-00-01-PM.h264', '20-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/17VR2w6WosJD1L3jGE95LKDJZlq1ZLxpD/preview'),
(142, 'COSAI_VMS_902', '1wmb_T7VtrDeUC8k1JrEHMkUwb_WdMowX', '20-10-2023_20-00-01-PM.h264', '20-10-2023_20-00-01-PM', 'https://drive.google.com/file/d/1wmb_T7VtrDeUC8k1JrEHMkUwb_WdMowX/preview'),
(143, 'COSAI_VMS_902', '1bA9ftvzEOsG8iXBpqH2-QPZrXcd9ISzL', '20-10-2023_19-00-00-PM.h264', '20-10-2023_19-00-00-PM', 'https://drive.google.com/file/d/1bA9ftvzEOsG8iXBpqH2-QPZrXcd9ISzL/preview'),
(144, 'COSAI_VMS_902', '1vf30c4TWiSBnSkgLRSvoRwhz2_igmqih', '20-10-2023_18-00-01-PM.h264', '20-10-2023_18-00-01-PM', 'https://drive.google.com/file/d/1vf30c4TWiSBnSkgLRSvoRwhz2_igmqih/preview'),
(145, 'COSAI_VMS_902', '1TUUlKw7DCTLNh89TONv7lVDwsTpxFsIf', '20-10-2023_17-00-00-PM.h264', '20-10-2023_17-00-00-PM', 'https://drive.google.com/file/d/1TUUlKw7DCTLNh89TONv7lVDwsTpxFsIf/preview'),
(146, 'COSAI_VMS_902', '1qNJKotEat2rlmxw4JjZRF4mTz4hViFiD', '20-10-2023_16-00-01-PM.h264', '20-10-2023_16-00-01-PM', 'https://drive.google.com/file/d/1qNJKotEat2rlmxw4JjZRF4mTz4hViFiD/preview'),
(147, 'COSAI_VMS_902', '12AKXLWPhCyc1ppaDZdJU1dmPIxWIaL-Q', '20-10-2023_15-00-00-PM.h264', '20-10-2023_15-00-00-PM', 'https://drive.google.com/file/d/12AKXLWPhCyc1ppaDZdJU1dmPIxWIaL-Q/preview'),
(148, 'COSAI_VMS_902', '1kKoX5K_gqT5TJbBB87B3A1rt1aSk9y3m', '20-10-2023_14-00-00-PM.h264', '20-10-2023_14-00-00-PM', 'https://drive.google.com/file/d/1kKoX5K_gqT5TJbBB87B3A1rt1aSk9y3m/preview'),
(149, 'COSAI_VMS_902', '14ahDA5SrKr-QK3QvEWYR7ZzBOrLZSW7U', '20-10-2023_12-07-13-PM.h264', '20-10-2023_12-07-13-PM', 'https://drive.google.com/file/d/14ahDA5SrKr-QK3QvEWYR7ZzBOrLZSW7U/preview'),
(150, 'COSAI_VMS_902', '124w7k-3zpfIVkomhEa42jYR-ACe6AVMp', '18-10-2023_13-00-01-PM.h264', '18-10-2023_13-00-01-PM', 'https://drive.google.com/file/d/124w7k-3zpfIVkomhEa42jYR-ACe6AVMp/preview'),
(151, 'COSAI_VMS_902', '1O_u-wAEjhinnCNLtJnVVujOqIeaXUsFf', '18-10-2023_12-00-01-PM.h264', '18-10-2023_12-00-01-PM', 'https://drive.google.com/file/d/1O_u-wAEjhinnCNLtJnVVujOqIeaXUsFf/preview'),
(152, 'COSAI_VMS_902', '1s_67t25QWFVkjJ1wQYaHr37cernndK6B', '18-10-2023_11-00-00-AM.h264', '18-10-2023_11-00-00-AM', 'https://drive.google.com/file/d/1s_67t25QWFVkjJ1wQYaHr37cernndK6B/preview'),
(153, 'COSAI_VMS_902', '1NC3sAsPgkS7akPq8VBkKlDBcj_XnyWVv', '18-10-2023_10-00-02-AM.h264', '18-10-2023_10-00-02-AM', 'https://drive.google.com/file/d/1NC3sAsPgkS7akPq8VBkKlDBcj_XnyWVv/preview'),
(154, 'COSAI_VMS_902', '1Im-V2-hdnadccQU6eOE9EqIpbQ7r_XkQ', '18-10-2023_09-00-01-AM.h264', '18-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1Im-V2-hdnadccQU6eOE9EqIpbQ7r_XkQ/preview'),
(155, 'COSAI_VMS_902', '1_6r3-o5mVqsqpZosFqOr5K53gEo68Ehl', '18-10-2023_08-00-01-AM.h264', '18-10-2023_08-00-01-AM', 'https://drive.google.com/file/d/1_6r3-o5mVqsqpZosFqOr5K53gEo68Ehl/preview'),
(156, 'COSAI_VMS_902', '1ZnFE-a-AN25PUUI3EnOcrxCFQlVH3xC1', '18-10-2023_07-00-00-AM.h264', '18-10-2023_07-00-00-AM', 'https://drive.google.com/file/d/1ZnFE-a-AN25PUUI3EnOcrxCFQlVH3xC1/preview'),
(157, 'COSAI_VMS_902', '1OtVxreGigoOHB0dzlul7P1jLHX2f5U0G', '18-10-2023_06-00-01-AM.h264', '18-10-2023_06-00-01-AM', 'https://drive.google.com/file/d/1OtVxreGigoOHB0dzlul7P1jLHX2f5U0G/preview'),
(158, 'COSAI_VMS_902', '1LWBgofkZmoMeCXrthERoXSjruzNIZowq', '18-10-2023_05-00-00-AM.h264', '18-10-2023_05-00-00-AM', 'https://drive.google.com/file/d/1LWBgofkZmoMeCXrthERoXSjruzNIZowq/preview'),
(159, 'COSAI_VMS_902', '1Y7rqOGSnn1k-Q35qw5qBE3yb-cHWwSD5', '18-10-2023_04-00-00-AM.h264', '18-10-2023_04-00-00-AM', 'https://drive.google.com/file/d/1Y7rqOGSnn1k-Q35qw5qBE3yb-cHWwSD5/preview'),
(160, 'COSAI_VMS_902', '1Pa6co3j2ltzcZekBBZ8-y-Yx_IR-dKaC', '18-10-2023_03-00-00-AM.h264', '18-10-2023_03-00-00-AM', 'https://drive.google.com/file/d/1Pa6co3j2ltzcZekBBZ8-y-Yx_IR-dKaC/preview'),
(161, 'COSAI_VMS_902', '1RX2dF_1O8W3xfle8oGP4mBPnehFA9j7U', '18-10-2023_02-00-02-AM.h264', '18-10-2023_02-00-02-AM', 'https://drive.google.com/file/d/1RX2dF_1O8W3xfle8oGP4mBPnehFA9j7U/preview'),
(162, 'COSAI_VMS_902', '14REJjyzVUMzsLhK0rF8snEncJC8sP9tR', '18-10-2023_01-00-01-AM.h264', '18-10-2023_01-00-01-AM', 'https://drive.google.com/file/d/14REJjyzVUMzsLhK0rF8snEncJC8sP9tR/preview'),
(163, 'COSAI_VMS_902', '1UsezZL6qJNikvswAQt2EyN1SRdJIQHtK', '18-10-2023_00-00-00-AM.h264', '18-10-2023_00-00-00-AM', 'https://drive.google.com/file/d/1UsezZL6qJNikvswAQt2EyN1SRdJIQHtK/preview'),
(164, 'COSAI_VMS_902', '1SLddUut1C3DjZpXj2UXzZFBVkQ52r1hS', '17-10-2023_23-00-00-PM.h264', '17-10-2023_23-00-00-PM', 'https://drive.google.com/file/d/1SLddUut1C3DjZpXj2UXzZFBVkQ52r1hS/preview'),
(165, 'COSAI_VMS_902', '18IlhcROB2aEmvjuNcFIFyA2f7hK02tRo', '17-10-2023_22-00-01-PM.h264', '17-10-2023_22-00-01-PM', 'https://drive.google.com/file/d/18IlhcROB2aEmvjuNcFIFyA2f7hK02tRo/preview'),
(166, 'COSAI_VMS_902', '1g63Ap02-rcfsjbjt53hZqRsBmeh1oVV9', '17-10-2023_21-00-01-PM.h264', '17-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/1g63Ap02-rcfsjbjt53hZqRsBmeh1oVV9/preview'),
(167, 'COSAI_VMS_902', '1XLyl6Qi7qCzH3mSvk-cK6puhU9XavwvL', '17-10-2023_20-00-02-PM.h264', '17-10-2023_20-00-02-PM', 'https://drive.google.com/file/d/1XLyl6Qi7qCzH3mSvk-cK6puhU9XavwvL/preview'),
(168, 'COSAI_VMS_902', '1depTcIdfIBpd2ibXFzMxJbxK4vlssQ83', '17-10-2023_19-00-01-PM.h264', '17-10-2023_19-00-01-PM', 'https://drive.google.com/file/d/1depTcIdfIBpd2ibXFzMxJbxK4vlssQ83/preview'),
(169, 'COSAI_VMS_902', '1lrnBvDLT8oEiCmrgPNrRKVyHwJXSLD2V', '17-10-2023_18-55-51-PM.h264', '17-10-2023_18-55-51-PM', 'https://drive.google.com/file/d/1lrnBvDLT8oEiCmrgPNrRKVyHwJXSLD2V/preview'),
(170, 'COSAI_VMS_902', '145VVpZuBE0iDqhcFZC7tY0m_K6_g5UEO', '17-10-2023_17-10-30-PM.h264', '17-10-2023_17-10-30-PM', 'https://drive.google.com/file/d/145VVpZuBE0iDqhcFZC7tY0m_K6_g5UEO/preview'),
(171, 'COSAI_VMS_902', '17epOeJxzlziwbgQVxq6ETy0_HoPvp3uw', 'output.mp4', 'output', 'https://drive.google.com/file/d/17epOeJxzlziwbgQVxq6ETy0_HoPvp3uw/preview'),
(172, 'COSAI_VMS_902', '1ZCo_-N97lSB8BvUHFaWo8MZ8T7DU5VI7', '17-10-2023_17-09-53-PM.h264', '17-10-2023_17-09-53-PM', 'https://drive.google.com/file/d/1ZCo_-N97lSB8BvUHFaWo8MZ8T7DU5VI7/preview'),
(173, 'COSAI_VMS_902', '1IsGrYkhV4rhHx2H8xEOCIjLlefZ6Tbc8', '17-10-2023_17-08-58-PM.h264', '17-10-2023_17-08-58-PM', 'https://drive.google.com/file/d/1IsGrYkhV4rhHx2H8xEOCIjLlefZ6Tbc8/preview'),
(174, 'COSAI_VMS_902', '1ZqaYRtOzRCTACH0cvfcm4Chwo--0yyeI', '17-10-2023_17-07-58-PM.h264', '17-10-2023_17-07-58-PM', 'https://drive.google.com/file/d/1ZqaYRtOzRCTACH0cvfcm4Chwo--0yyeI/preview'),
(175, 'COSAI_VMS_902', '10w6rMtn-LfU33ATQ-oFUdzP4lJrfiBOy', '17-10-2023_17-07-37-PM.h264', '17-10-2023_17-07-37-PM', 'https://drive.google.com/file/d/10w6rMtn-LfU33ATQ-oFUdzP4lJrfiBOy/preview'),
(176, 'COSAI_VMS_902', '1HlqpyKQUHSDCeHnFKcrLkJaZ2cqqsS3C', '17-10-2023_16-17-43-PM.h264', '17-10-2023_16-17-43-PM', 'https://drive.google.com/file/d/1HlqpyKQUHSDCeHnFKcrLkJaZ2cqqsS3C/preview'),
(177, 'COSAI_VMS_902', '1GtpGl2JJxup0TPhaGqHuqks-ZcKYjngC', '17-10-2023_13-26-28-PM.h264', '17-10-2023_13-26-28-PM', 'https://drive.google.com/file/d/1GtpGl2JJxup0TPhaGqHuqks-ZcKYjngC/preview'),
(178, 'COSAI_VMS_902', '1mwjPn-G74-OOSSZPbLcOvsIBbl4T9gSX', '17-10-2023_13-00-00-PM.h264', '17-10-2023_13-00-00-PM', 'https://drive.google.com/file/d/1mwjPn-G74-OOSSZPbLcOvsIBbl4T9gSX/preview'),
(179, 'COSAI_VMS_902', '1dTI5vo8kwIleYa0baccF-BVVIn2qnSEz', '17-10-2023_12-00-02-PM.h264', '17-10-2023_12-00-02-PM', 'https://drive.google.com/file/d/1dTI5vo8kwIleYa0baccF-BVVIn2qnSEz/preview'),
(180, 'COSAI_VMS_902', '1QC5FHnzS7FUrpQKk5CHo1_7CI4ja3yCT', '17-10-2023_11-00-01-AM.h264', '17-10-2023_11-00-01-AM', 'https://drive.google.com/file/d/1QC5FHnzS7FUrpQKk5CHo1_7CI4ja3yCT/preview'),
(181, 'COSAI_VMS_902', '1dSO6cB5sGnW1abVCC7-mU80mBltX6EZL', '17-10-2023_10-43-17-AM.h264', '17-10-2023_10-43-17-AM', 'https://drive.google.com/file/d/1dSO6cB5sGnW1abVCC7-mU80mBltX6EZL/preview'),
(182, 'COSAI_VMS_902', '1ndkhjtvt5u_vjEYYhiWTHf7mp54X5j3h', '17-10-2023_10-19-53-AM.h264', '17-10-2023_10-19-53-AM', 'https://drive.google.com/file/d/1ndkhjtvt5u_vjEYYhiWTHf7mp54X5j3h/preview'),
(183, 'COSAI_VMS_902', '1FlHeCwnnQcDmEcj61-IgbTywy0UFYQrA', '17-10-2023_10-00-00-AM.h264', '17-10-2023_10-00-00-AM', 'https://drive.google.com/file/d/1FlHeCwnnQcDmEcj61-IgbTywy0UFYQrA/preview'),
(184, 'COSAI_VMS_902', '1q00DTX0_dQF6gBYNqLDOfZHPDE9qmuIs', '17-10-2023_09-00-01-AM.h264', '17-10-2023_09-00-01-AM', 'https://drive.google.com/file/d/1q00DTX0_dQF6gBYNqLDOfZHPDE9qmuIs/preview'),
(185, 'COSAI_VMS_902', '1VbjlZuuaIeY_3Z1-C2zI-yyJuRRxou1p', '17-10-2023_08-00-01-AM.h264', '17-10-2023_08-00-01-AM', 'https://drive.google.com/file/d/1VbjlZuuaIeY_3Z1-C2zI-yyJuRRxou1p/preview'),
(186, 'COSAI_VMS_902', '1FwpBi7jHRFR9sE8AmsPmRMsm64icWGTF', '17-10-2023_07-00-01-AM.h264', '17-10-2023_07-00-01-AM', 'https://drive.google.com/file/d/1FwpBi7jHRFR9sE8AmsPmRMsm64icWGTF/preview'),
(187, 'COSAI_VMS_902', '1t0V1hfD9qU3YvxRW_EMqmUAQp7lurITd', '17-10-2023_06-00-00-AM.h264', '17-10-2023_06-00-00-AM', 'https://drive.google.com/file/d/1t0V1hfD9qU3YvxRW_EMqmUAQp7lurITd/preview'),
(188, 'COSAI_VMS_902', '1UxdAyRfzDDBoN9b58Q4kzKuNhxV5Wo4P', '17-10-2023_05-00-02-AM.h264', '17-10-2023_05-00-02-AM', 'https://drive.google.com/file/d/1UxdAyRfzDDBoN9b58Q4kzKuNhxV5Wo4P/preview'),
(189, 'COSAI_VMS_902', '1QgGoviP5VZP5VlbPRW0oW_td0KH_QPjL', '17-10-2023_04-00-01-AM.h264', '17-10-2023_04-00-01-AM', 'https://drive.google.com/file/d/1QgGoviP5VZP5VlbPRW0oW_td0KH_QPjL/preview'),
(190, 'COSAI_VMS_902', '1R78rxSmYkEIE9Hykfxqh_NowViNg0hfj', '17-10-2023_03-00-00-AM.h264', '17-10-2023_03-00-00-AM', 'https://drive.google.com/file/d/1R78rxSmYkEIE9Hykfxqh_NowViNg0hfj/preview'),
(191, 'COSAI_VMS_902', '1G9nGZD9qe8Yo_pADKUYXj1dj4hGvssqy', '17-10-2023_02-00-00-AM.h264', '17-10-2023_02-00-00-AM', 'https://drive.google.com/file/d/1G9nGZD9qe8Yo_pADKUYXj1dj4hGvssqy/preview'),
(192, 'COSAI_VMS_902', '1rlPX4i-WmhmmVC3FvTH3HCbW9YycGqwZ', '17-10-2023_01-00-02-AM.h264', '17-10-2023_01-00-02-AM', 'https://drive.google.com/file/d/1rlPX4i-WmhmmVC3FvTH3HCbW9YycGqwZ/preview'),
(193, 'COSAI_VMS_902', '1qd9gn7fMtVH_eU9UYc4X_OBzAkYdLnzW', '17-10-2023_00-00-01-AM.h264', '17-10-2023_00-00-01-AM', 'https://drive.google.com/file/d/1qd9gn7fMtVH_eU9UYc4X_OBzAkYdLnzW/preview'),
(194, 'COSAI_VMS_902', '1ExZcB3-BCW9q2KVU4kMt2nMftXcWgxPI', '16-10-2023_23-00-01-PM.h264', '16-10-2023_23-00-01-PM', 'https://drive.google.com/file/d/1ExZcB3-BCW9q2KVU4kMt2nMftXcWgxPI/preview'),
(195, 'COSAI_VMS_902', '1-5CEn_PwfJ4wQ2hDk3v1BBSqTry7MJY1', '16-10-2023_22-00-00-PM.h264', '16-10-2023_22-00-00-PM', 'https://drive.google.com/file/d/1-5CEn_PwfJ4wQ2hDk3v1BBSqTry7MJY1/preview'),
(196, 'COSAI_VMS_902', '1H_EhAFsxuffu9UjSzGv9ZhyTM1v7zRzJ', '16-10-2023_21-00-01-PM.h264', '16-10-2023_21-00-01-PM', 'https://drive.google.com/file/d/1H_EhAFsxuffu9UjSzGv9ZhyTM1v7zRzJ/preview'),
(197, 'COSAI_VMS_902', '1qbeiid3mhbb69BQIlOg0sUBQkrc12SY4', '16-10-2023_20-00-00-PM.h264', '16-10-2023_20-00-00-PM', 'https://drive.google.com/file/d/1qbeiid3mhbb69BQIlOg0sUBQkrc12SY4/preview'),
(198, 'COSAI_VMS_902', '186C2AXATojD4xa5yHbm2cMM1RQPTHD_R', '16-10-2023_19-00-02-PM.h264', '16-10-2023_19-00-02-PM', 'https://drive.google.com/file/d/186C2AXATojD4xa5yHbm2cMM1RQPTHD_R/preview'),
(199, 'COSAI_VMS_902', '1wubWwGjnI48w4GgjT4cCoi6h2nWzYvQf', '16-10-2023_18-00-01-PM.h264', '16-10-2023_18-00-01-PM', 'https://drive.google.com/file/d/1wubWwGjnI48w4GgjT4cCoi6h2nWzYvQf/preview'),
(200, 'COSAI_VMS_902', '142dBEVXWCB_Ze0BKvzvnMpBm18-oVEmr', '16-10-2023_17-00-02-PM.h264', '16-10-2023_17-00-02-PM', 'https://drive.google.com/file/d/142dBEVXWCB_Ze0BKvzvnMpBm18-oVEmr/preview'),
(201, 'COSAI_VMS_902', '1pIeMLnP_QiEblOvVDuPh25p_Jytvw72_', '16-10-2023_16-00-01-PM.h264', '16-10-2023_16-00-01-PM', 'https://drive.google.com/file/d/1pIeMLnP_QiEblOvVDuPh25p_Jytvw72_/preview'),
(202, 'COSAI_VMS_902', '1mDKzSiuLOkfhcDtHo_xgspUyV0WVGMct', '16-10-2023_15-00-00-PM.h264', '16-10-2023_15-00-00-PM', 'https://drive.google.com/file/d/1mDKzSiuLOkfhcDtHo_xgspUyV0WVGMct/preview'),
(203, 'COSAI_VMS_902', '13cfNgbXxgoZggy9dBOFgjYUvKegyRPjP', '16-10-2023_14-00-00-PM.h264', '16-10-2023_14-00-00-PM', 'https://drive.google.com/file/d/13cfNgbXxgoZggy9dBOFgjYUvKegyRPjP/preview'),
(204, 'COSAI_VMS_902', '1hL6RJzFQzRupuGLvsHxs_wpKTfOVKRSi', '16-10-2023_13-00-01-PM.h264', '16-10-2023_13-00-01-PM', 'https://drive.google.com/file/d/1hL6RJzFQzRupuGLvsHxs_wpKTfOVKRSi/preview'),
(205, 'COSAI_VMS_902', '1ykJLAlvuKf7LSyGjHHvDcDjz2KF06hM3', '16-10-2023_12-00-00-PM.h264', '16-10-2023_12-00-00-PM', 'https://drive.google.com/file/d/1ykJLAlvuKf7LSyGjHHvDcDjz2KF06hM3/preview'),
(206, 'COSAI_VMS_902', '1mjr6nkrVENcVwVlnfSC61W5mhADfHibC', '16-10-2023_11-55-44-AM.h264', '16-10-2023_11-55-44-AM', 'https://drive.google.com/file/d/1mjr6nkrVENcVwVlnfSC61W5mhADfHibC/preview'),
(207, 'COSAI_VMS_456', '1jum2JOdIo-Zq2tnAfuepktAZL-VC56XN', '2023-11-15-11-52-21-AM.mkv', '2023-11-15-11-52-21-AM', 'https://drive.google.com/file/d/1jum2JOdIo-Zq2tnAfuepktAZL-VC56XN/preview'),
(208, 'COSAI_VMS_456', '1qM--AW7uFbFR1Cl3yiDw5xNvafKoJ77I', '2023-11-15-11-47-19-AM.mkv', '2023-11-15-11-47-19-AM', 'https://drive.google.com/file/d/1qM--AW7uFbFR1Cl3yiDw5xNvafKoJ77I/preview'),
(209, 'COSAI_VMS_456', '1EgX3rRuKWJVYzCMMz0dkeA9Bz2fnirhR', '2023-11-15-11-42-17-AM.mkv', '2023-11-15-11-42-17-AM', 'https://drive.google.com/file/d/1EgX3rRuKWJVYzCMMz0dkeA9Bz2fnirhR/preview'),
(210, 'COSAI_VMS_456', '12JdfMTkQEQqhwDFKbPIGrER7HBBDua0K', '2023-11-09-18-41-45-PM.mkv', '2023-11-09-18-41-45-PM', 'https://drive.google.com/file/d/12JdfMTkQEQqhwDFKbPIGrER7HBBDua0K/preview'),
(211, 'COSAI_VMS_456', '1F97N7VCpjicpAKRHXrripD8YH7H2kzkI', '2023-11-15-13-35-44-PM.mkv', '2023-11-15-13-35-44-PM', 'https://drive.google.com/file/d/1F97N7VCpjicpAKRHXrripD8YH7H2kzkI/preview'),
(212, 'COSAI_VMS_456', '1TscKpvpGUYp_O0MUdhMPiPlqHGlhufFT', '2023-11-15-13-33-04-PM.mkv', '2023-11-15-13-33-04-PM', 'https://drive.google.com/file/d/1TscKpvpGUYp_O0MUdhMPiPlqHGlhufFT/preview'),
(213, 'COSAI_VMS_456', '1L79YPaIO2CIGkuBRXAs7XCW-Y7Qj12jV', '2023-11-15-13-28-02-PM.mkv', '2023-11-15-13-28-02-PM', 'https://drive.google.com/file/d/1L79YPaIO2CIGkuBRXAs7XCW-Y7Qj12jV/preview'),
(214, 'COSAI_VMS_456', '1j3087EM27vRtckvABGxFMl5OrCZZRLC5', '2023-11-15-12-57-49-PM.mkv', '2023-11-15-12-57-49-PM', 'https://drive.google.com/file/d/1j3087EM27vRtckvABGxFMl5OrCZZRLC5/preview'),
(215, 'COSAI_VMS_456', '1KLMLUT3LJcggRPhNNY5F9PoZukHRy2ry', '2023-11-15-13-23-00-PM.mkv', '2023-11-15-13-23-00-PM', 'https://drive.google.com/file/d/1KLMLUT3LJcggRPhNNY5F9PoZukHRy2ry/preview'),
(216, 'COSAI_VMS_456', '1BqbsSPoqVxegsUXc6GKFCy5OF4CS8IMZ', '2023-11-15-13-17-58-PM.mkv', '2023-11-15-13-17-58-PM', 'https://drive.google.com/file/d/1BqbsSPoqVxegsUXc6GKFCy5OF4CS8IMZ/preview'),
(217, 'COSAI_VMS_456', '1A0HeBtl2x8V1xbyrmZNDM4h8n0Ifh3Ia', '2023-11-15-13-12-56-PM.mkv', '2023-11-15-13-12-56-PM', 'https://drive.google.com/file/d/1A0HeBtl2x8V1xbyrmZNDM4h8n0Ifh3Ia/preview'),
(218, 'COSAI_VMS_456', '1KsvfsllAYMOf6o7TlclZ_p1D9hxV-9Bf', '2023-11-15-13-07-53-PM.mkv', '2023-11-15-13-07-53-PM', 'https://drive.google.com/file/d/1KsvfsllAYMOf6o7TlclZ_p1D9hxV-9Bf/preview'),
(219, 'COSAI_VMS_456', '1zSiRPpZvOWg3c-DOQRn6qTI-IAZ5hVVx', '2023-11-15-13-02-51-PM.mkv', '2023-11-15-13-02-51-PM', 'https://drive.google.com/file/d/1zSiRPpZvOWg3c-DOQRn6qTI-IAZ5hVVx/preview'),
(220, 'COSAI_VMS_456', '1KqO8nCSvuIwSzYUPSnatTx3PxbUFoxoV', '2023-11-15-12-52-47-PM.mkv', '2023-11-15-12-52-47-PM', 'https://drive.google.com/file/d/1KqO8nCSvuIwSzYUPSnatTx3PxbUFoxoV/preview'),
(221, 'COSAI_VMS_456', '1IG609gUzjRYqLBILR7FiFsX9mm2CZv_E', '2023-11-15-12-47-45-PM.mkv', '2023-11-15-12-47-45-PM', 'https://drive.google.com/file/d/1IG609gUzjRYqLBILR7FiFsX9mm2CZv_E/preview'),
(222, 'COSAI_VMS_456', '1STkIkAyZe_6VahSOFda1cCu5rBw4cU7m', '2023-11-15-12-42-43-PM.mkv', '2023-11-15-12-42-43-PM', 'https://drive.google.com/file/d/1STkIkAyZe_6VahSOFda1cCu5rBw4cU7m/preview'),
(223, 'COSAI_VMS_456', '1PREkdB3gDAjXOJALBm4MR_CS7mtQud0c', '2023-11-15-12-37-41-PM.mkv', '2023-11-15-12-37-41-PM', 'https://drive.google.com/file/d/1PREkdB3gDAjXOJALBm4MR_CS7mtQud0c/preview'),
(224, 'COSAI_VMS_456', '1b-f7o2GrWIgnSv3Mfncke8v93NT1d-Qc', '2023-11-15-12-32-38-PM.mkv', '2023-11-15-12-32-38-PM', 'https://drive.google.com/file/d/1b-f7o2GrWIgnSv3Mfncke8v93NT1d-Qc/preview'),
(225, 'COSAI_VMS_456', '1gRrbSSO_FMn5Zz-Ayre5NDDtxobDNF6T', '2023-11-15-12-27-36-PM.mkv', '2023-11-15-12-27-36-PM', 'https://drive.google.com/file/d/1gRrbSSO_FMn5Zz-Ayre5NDDtxobDNF6T/preview'),
(226, 'COSAI_VMS_456', '1-CylBsC8F8AbWWPFNixqGuFfh1tRXIDr', '2023-11-15-12-22-34-PM.mkv', '2023-11-15-12-22-34-PM', 'https://drive.google.com/file/d/1-CylBsC8F8AbWWPFNixqGuFfh1tRXIDr/preview'),
(227, 'COSAI_VMS_456', '1FxSFV4CoXOEt_2-nJSuy0JNwmblSMBj9', '2023-11-15-12-17-32-PM.mkv', '2023-11-15-12-17-32-PM', 'https://drive.google.com/file/d/1FxSFV4CoXOEt_2-nJSuy0JNwmblSMBj9/preview'),
(228, 'COSAI_VMS_456', '10RKLJ3X4SUC36AS0p9sVwdjpnUIDcot8', '2023-11-15-12-12-30-PM.mkv', '2023-11-15-12-12-30-PM', 'https://drive.google.com/file/d/10RKLJ3X4SUC36AS0p9sVwdjpnUIDcot8/preview'),
(229, 'COSAI_VMS_456', '1jskX2IbwPS3gmdT15KrHaQtTrPo24Z0R', '2023-11-15-12-07-28-PM.mkv', '2023-11-15-12-07-28-PM', 'https://drive.google.com/file/d/1jskX2IbwPS3gmdT15KrHaQtTrPo24Z0R/preview'),
(230, 'COSAI_VMS_456', '1Y6hlnxgaeEkTi87fntu2LJ_g8fctbQ36', '2023-11-15-12-02-26-PM.mkv', '2023-11-15-12-02-26-PM', 'https://drive.google.com/file/d/1Y6hlnxgaeEkTi87fntu2LJ_g8fctbQ36/preview'),
(231, 'COSAI_VMS_456', '1Ny_gNqQjfdKAwCcWba4vI5a2igCEJfM3', '2023-11-15-11-57-23-AM.mkv', '2023-11-15-11-57-23-AM', 'https://drive.google.com/file/d/1Ny_gNqQjfdKAwCcWba4vI5a2igCEJfM3/preview'),
(232, 'COSAI_VMS_456', '1_RhXVb3DNwfMV4Kxy4jFgALdOb4cyoZd', '2023-11-15-15-35-49-PM.mkv', '2023-11-15-15-35-49-PM', 'https://drive.google.com/file/d/1_RhXVb3DNwfMV4Kxy4jFgALdOb4cyoZd/preview'),
(233, 'COSAI_VMS_456', '1sdPqcPtTekKY-1zokC-vTEhSRZHXlxjK', '2023-11-15-14-35-47-PM.mkv', '2023-11-15-14-35-47-PM', 'https://drive.google.com/file/d/1sdPqcPtTekKY-1zokC-vTEhSRZHXlxjK/preview');

-- --------------------------------------------------------

--
-- Table structure for table `raspi_info`
--

CREATE TABLE `raspi_info` (
  `id` int(11) NOT NULL,
  `kit_id` varchar(200) NOT NULL,
  `modify_time` datetime NOT NULL DEFAULT current_timestamp(),
  `hostname` varchar(255) DEFAULT NULL,
  `server_address` varchar(255) DEFAULT NULL,
  `server_port` int(11) DEFAULT NULL,
  `cpu_usage_percentage` varchar(11) DEFAULT NULL,
  `number_of_cores` int(11) DEFAULT NULL,
  `cpu_frequency` int(11) DEFAULT NULL,
  `cpu_frequency_khz` int(11) DEFAULT NULL,
  `cpu_temperature` varchar(11) DEFAULT NULL,
  `memory_usage_percentage` varchar(11) DEFAULT NULL,
  `total_memory` varchar(11) DEFAULT NULL,
  `free_memory` varchar(11) DEFAULT NULL,
  `used_ram_memory` varchar(255) NOT NULL,
  `disk_usage_percentage` varchar(11) DEFAULT NULL,
  `disk_space_used` varchar(11) DEFAULT NULL,
  `available_disk_space` varchar(11) DEFAULT NULL,
  `total_disk_space` varchar(11) DEFAULT NULL,
  `kit_status` varchar(255) DEFAULT NULL,
  `drive_total_space_gb` varchar(11) DEFAULT NULL,
  `drive_free_space_gb` varchar(11) DEFAULT NULL,
  `drive_used_space_gb` varchar(11) DEFAULT NULL,
  `drive_free_space_percentage` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raspi_info`
--

INSERT INTO `raspi_info` (`id`, `kit_id`, `modify_time`, `hostname`, `server_address`, `server_port`, `cpu_usage_percentage`, `number_of_cores`, `cpu_frequency`, `cpu_frequency_khz`, `cpu_temperature`, `memory_usage_percentage`, `total_memory`, `free_memory`, `used_ram_memory`, `disk_usage_percentage`, `disk_space_used`, `available_disk_space`, `total_disk_space`, `kit_status`, `drive_total_space_gb`, `drive_free_space_gb`, `drive_used_space_gb`, `drive_free_space_percentage`) VALUES
(2, 'COSAI_VMS_456', '2023-11-16 15:15:03', 'raspberrypi', '10.0.0.152', 80, '16.1', 4, 1500, 1500, '69.627', '80.46525266', '3.655693054', '2.941562652', '0.59847640991211', '94.7', '50.56', '2.82', '56.27', '1', '15.00', '13.71', '1.29', '91.40'),
(3, 'COSAI_VMS_902', '2023-11-16 15:15:03', 'raspberrypi', '10.0.0.81', 80, '0.7', 4, 1800, 1800, '45.277', '95.08143504', '7.579502105', '7.206699371', '0.23335647583008', '17.3', '35.89', '171.69', '218.75', '1', '218.75', '182.87', '35.89', '83.60'),
(4, 'COSAI_VMS_542', '2023-11-15 19:19:03', 'raspberrypi', '10.0.0.165', 80, '18.7', 4, 1800, 1800, '50.634', '86.90069363', '7.579505920', '6.586643218', '0.79926681518555', '6.1', '25.54', '390.89', '438.79', '1', '15.00', '13.71', '1.29', '91.42');

-- --------------------------------------------------------

--
-- Table structure for table `vms_drive`
--

CREATE TABLE `vms_drive` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `google_drive_email` varchar(255) NOT NULL,
  `google_drive_pass` varchar(255) NOT NULL,
  `google_secret_key` varchar(255) NOT NULL,
  `cloud_folder_id` varchar(255) NOT NULL,
  `cloud_servicekey_path` varchar(255) NOT NULL,
  `raspi_ssid` varchar(255) NOT NULL,
  `raspi_pass` varchar(255) NOT NULL,
  `vnc_name` varchar(255) NOT NULL,
  `vnc_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vms_drive`
--

INSERT INTO `vms_drive` (`id`, `client_id`, `google_drive_email`, `google_drive_pass`, `google_secret_key`, `cloud_folder_id`, `cloud_servicekey_path`, `raspi_ssid`, `raspi_pass`, `vnc_name`, `vnc_password`) VALUES
(7, 9, 'kit1kerala@gmail.com', 'kerala1234563', 'kerala41464sd64', '1KocF1ls7tkaOeq5SGwF5qOiuR5UTMPMi', 'service-account-key.json', 'nagamalai', 'keralaadmin123', 'keralaadmin', 'kit3madurai'),
(13, 38, 'kit2@gmail.com', '123456', '41464sd64646dsa23$%#@', '1qTmIrixIiVs5q1SyZqwPWXZuOCpC7Fy4', 'service-account-key2.json', 'admin', 'admin123', 'admin', 'admin123'),
(14, 39, 'kit3@gmail.com', '123456', '41464sd64646dsa23$%#@', '', '', 'admin', 'admin123', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `vms_users`
--

CREATE TABLE `vms_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `device_number` varchar(255) NOT NULL,
  `live_switch` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vms_users`
--

INSERT INTO `vms_users` (`id`, `username`, `email`, `password`, `device_number`, `live_switch`, `time`, `phone`, `address`, `state`, `zipcode`, `country`, `profile`) VALUES
(9, 'kit1', 'kit1@gmail.com', '123456789', 'COSAI_VMS_456', 'Non-Capture', '2023-11-07 16:18:50', 712348207, 'MADURAI', 'kerala', 456123, 'India', 'medium-shot-man-wearing-vr-glasses23.jpg'),
(38, 'kit2', 'kit2@gmail.com', '123456', 'COSAI_VMS_902', 'Capture', '2023-11-14 10:48:15', 345345, 'madurai', 'tamilnadu', 12345, 'India', 'ipcamera24.png'),
(39, 'kit3', 'kit3@gmail.com', '123456', 'COSAI_VMS_542', 'Non-Capture', '2023-11-14 11:10:48', 1234567869, 'madurai', 'tamilnadu', 123456, 'India', 'ipcamera1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cloud_file`
--
ALTER TABLE `cloud_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspi_info`
--
ALTER TABLE `raspi_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vms_drive`
--
ALTER TABLE `vms_drive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vms_users`
--
ALTER TABLE `vms_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cloud_file`
--
ALTER TABLE `cloud_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `raspi_info`
--
ALTER TABLE `raspi_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vms_drive`
--
ALTER TABLE `vms_drive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vms_users`
--
ALTER TABLE `vms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
