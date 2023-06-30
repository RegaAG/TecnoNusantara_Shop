-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teknonusantarashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`Id`, `Nama`, `Email`, `Username`, `Password`) VALUES
(1, 'Rega Anton Giapierro', 'rega22052002@gmail.com', 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `db_barang`
--

CREATE TABLE `db_barang` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `type_produk` varchar(50) NOT NULL,
  `gambar_produk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `db_barang`
--

INSERT INTO `db_barang` (`id`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `type_produk`, `gambar_produk`) VALUES
(25, 'LENOVO IDEAPAD SLIM 3 14', 7739000, 'Spesifikasi :\r\nProcessor : AMD Ryzen 5 5625U (6C / 12T, 2.3 / 4.3GHz, 3MB L2 / 16MB L3)\r\nGraphics : Integrated AMD Radeon Graphics\r\nMemory : 8GB Soldered DDR4-3200\r\nMemory Slots : One memory soldered to systemboard, one DDR4 SO-DIMM slot, dual-channel capable\r\nMax Memory : Up to 16GB (8GB soldered + 8GB SO-DIMM) DDR4-3200 offering\r\nStorage : 512GB SSD M.2 2280 PCIe 3.0x4 NVMe\r\nStorage Support :\r\nModel with 38Wh battery: up to two drives, 1x 2.5\" HDD + 1x M.2 SSD\r\n• 2.5\" HDD up to 1TB\r\n• M.2 2242 SSD up to 1TB\r\n• M.2 2280 SSD up to 1TB', 'Business', 'LENOVO IDEAPAD SLIM 3 14.png'),
(26, 'Lenovo ThinkPad Z13 Gen 1 OLED', 36799000, 'Spesifikasi\r\nProcessor : AMD Ryzen™ 7 PRO 6860Z (8C / 16T, 2.7 / 4.725GHz, 4MB L2 / 16MB L3)\r\nGraphics : Integrated AMD Radeon™ 680M Graphics\r\nChipset : AMD SoC Platform\r\nMemory : 32GB Soldered LPDDR5-6400\r\nMemory Slots : Memory soldered to systemboard, no slots, dual-channel\r\nMax Memory : 32GB soldered memory, not upgradable\r\nStorage : 1TB SSD M.2 2242 PCIe® 4.0x4 NVMe® Opal 2.0\r\nStorage Support : One drive, up to 1TB M.2 2242 SSD\r\nStorage Slot : One M.2 2242 PCIe® 4.0 x4 slot', 'Business', 'Lenovo ThinkPad Z13 Gen 1 OLED.png'),
(27, 'Lenovo ThinkPad Z16 Gen 1', 43399000, 'Processor : AMD Ryzen™ 7 PRO 6850H (8C / 16T, 3.2 / 4.7GHz, 4MB L2 / 16MB L3)\r\nGraphics : AMD Radeon™ RX 6500M 4GB GDDR6\r\nChipset : AMD SoC Platform\r\nMemory : 16GB Soldered LPDDR5-6400\r\nMemory Slots : Memory soldered to systemboard, no slots, dual-channel\r\nMax Memory : 16GB soldered memory, not upgradable\r\nStorage : 512GB SSD M.2 2280 PCIe® 4.0x4 Performance NVMe® Opal 2.0\r\nStorage Support : One drive, up to 2TB M.2 2280 SSD\r\nStorage Slot : One M.2 2280 PCIe® 4.0 x4 slot', 'Business', 'Lenovo ThinkPad Z13 Gen 1 OLED.png'),
(28, 'Asus TUF A15 FA506IC R735B6TO', 11492000, 'Spesifikasi :\r\n• CPU : AMD Ryzen™ 7 4800H Processor 2.9 GHz (8M Cache, up to 4.2 GHz)\r\n• Memory : 8GB DDR4-3200 SO-DIMM\r\n• Storage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n• GPU : NVIDIA® GeForce RTX™ 3050 Laptop GPU 4GB GDDR6\r\n• Display : 15.6-inch FHD (1920 x 1080) 16:9, 144Hz IPS 250nits; sRGB : 62.5%; NTSC % : 45% Value IPS-level\r\n• Keyboard : Backlit Chiclet Keyboard RGB\r\n• Camera : 720P HD camera\r\n\r\n• Audio :\r\n2x 2W speaker\r\nAI mic noise-canceling\r\nDTS software\r\n\r\n• Wifi and Bluetooth : Wi-Fi 6(802.11ax)+Bluetooth 5.1 (Dual band) 2*2\r\n(*BT version may change with OS upgrades.)\r\n\r\n• Software :\r\nWindows 11 (64bit) + Office Home and Student 2021 included\r\n\r\n• I/O Port\r\n1x USB 3.2 Gen 2 Type-C\r\n3x USB 3.2 Gen 1 Type-A\r\n1x 3.5mm Combo Audio Jack\r\n\r\n• Battery : 48WHrs, 3S1P, 3-cell Li-ion\r\n\r\nGaransi Resmi Asus Indonesia 2 Tahun', 'Gaming', 'Asus TUF A15 FA506IC R735B6TO.png'),
(29, 'LENOVO IDEAPAD GAMING 3', 11799000, 'Spesifikasi :\r\nProcessor : AMD Ryzen 5 5600H (6C / 12T, 3.3 / 4.2GHz, 3MB L2 / 16MB L3)\r\nGraphics : NVIDIA GeForce RTX 3050 4GB GDDR6, Boost Clock 1500MHz, TGP 85W\r\nChipset : AMD SoC Platform\r\nMemory : 1x 8GB SO-DIMM DDR4-3200\r\nMemory Slots : Two DDR4 SO-DIMM slots, dual-channel capable\r\nMax Memory : Up to 16GB DDR4-3200 offering\r\nStorage : 512GB SSD M.2 2280 PCIe 3.0x4 NVMe\r\nStorage Support : Non-RTX 3060 model: up to two drives, 1x 2.5\" HDD + 1x M.2 2242 SSD or 1x M.2 2242/2280 SSD + 1x M.2 2242 SSD\r\n• 2.5\" HDD up to 1TB\r\n• M.2 2242 SSD up to 512GB\r\n• M.2 2280 SSD up to 1TB\r\nCard Reader : None\r\nOptical : None\r\nAudio Chip : High Definition (HD) Audio, Realtek ALC3287 codec\r\nSpeakers : Stereo speakers, 2W x2, Nahimic Audio\r\nCamera : 720p with Camera Shutter\r\nMicrophone : 2x, Array\r\nBattery : Integrated 45Wh\r\nMax Battery Life : MobileMark 2018: 5 hr (45Wh)\r\nPower Adapter : 170W Slim Tip (3-pin)\r\nDESIGN\r\nDisplay : 15.6\" FHD (1920x1080) IPS 300nits Anti-glare, 165Hz, 100% sRGB, DC dimmer\r\nTouchscreen : None\r\nKeyboard : 4-Zone RGB Backlit, English\r\nCase Color : Shadow Black\r\nSurface Treatment : IMR (In-Mold Decoration by Roller)\r\nCase Material : PC + ABS (Top), PC + ABS (Bottom)\r\nDimensions (WxDxH) : 359.6 x 251.9 x 24.2 mm (14.16 x 9.92 x 0.95 inches)\r\nWeight : 2.25 kg (4.96 lbs)\r\nSOFTWARE\r\nOperating System : Windows 11 Home 64, English\r\nBundled Software : Office Home and Student 2021\r\nCONNECTIVITY\r\nEthernet : 100/1000M\r\nWLAN + Bluetooth : 11ax, 2x2 + BT5.0\r\nStandard Ports :\r\n2x USB 3.2 Gen 1\r\n1x USB-C 3.2 Gen 1 (support data transfer only)\r\n1x HDMI 2.0\r\n1x Ethernet (RJ-45)\r\n1x Headphone / microphone combo jack (3.5mm)\r\n1x Power connector\r\nSECURITY & PRIVACY\r\nSecurity Chip : Firmware TPM 2.0\r\nFingerprint Reader : None\r\nOther Security : Camera privacy shutter\r\n\r\nGaransi Resmi Lenovo 2 Tahun +ADP', 'Gaming', 'LENOVO IDEAPAD GAMING 3.png'),
(30, 'ASUS TUF GAMING A15 FA506IHR', 9949000, 'Spesifikasi :\r\n• CPU : AMD Ryzen™ 5 4600H Mobile Processor (6C/12T, 11MB Cache, 4.0 GHz Max Boost)\r\n• Memory : 8GB DDR4-3200 SO-DIMM / 16GB DDR4-3200 SO-DIMM\r\n• Storage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n• GPU : NVIDIA® GeForce GTX™ 1650 4GB GDDR6\r\n• Display : 15.6-inch FHD (1920 x 1080) 16:9 Value IPS-level ; Refresh Rate : 144Hz ; sRGB % 62.5% ; NTSC % : 45%\r\n• Keyboard : Backlit Chiclet Keyboard RGB\r\n• Camera : 720P HD camera\r\n\r\n• Sperker :\r\n2-speaker system\r\nAI noise-canceling technology\r\nDTS software\r\n\r\n• Wifi : Wi-Fi 6(802.11ax)\r\n• Bluetooth : Bluetooth 5.1 (Dual band) 2*2\r\n(*BT version may change with OS upgrades.)\r\n\r\n• Software :\r\n- Operating System : Windows 11 Home\r\n- Office : Office Home and Student 2021 included\r\n\r\n• I/O Port :\r\n1x USB 3.2 Gen 2 Type-C support DisplayPort™ 1.4\r\n3x USB 3.2 Gen 1 Type-A\r\n1x 3.5mm Combo Audio Jack\r\n\r\n• Battery : 48WHrs, 3S1P, 3-cell Li-ion\r\n• Dimension : 35.9 x 25.6 x 2.28 ~ 2.45 cm\r\n• Weight : 2.30 Kg\r\n\r\nBundle : TUF Gaming backpack\r\n\r\nGaransi Resmi Asus Indonesia 2 Tahun (1st Year VIP Perfect Warranty)', 'Gaming', 'ASUS TUF GAMING A15 FA506IHR.png'),
(31, 'ASUS TUF GAMING A15 FA506QM', 17449000, 'Spesifikasi:\r\nProcessor : AMD Ryzen 9 5900HX Mobile Processor (8-core/16-thread, 20MB cache, up to 4.6 GHz max boost)\r\nDisplay : 15.6-inch FHD(1920 x 1080), Anti-Glare, 250nits, 62.5% SRGB, 45% NTSC, Refresh Rate 144Hz,Value IPS-level\r\nMemory : 16GB (8GB DDR4-3200 SO-DIMM x2)\r\nStorage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nGraphics : NVIDIA® GeForce RTX™ 3060, 6GB GDDR6, 90W (95W with Dynamic Boost)\r\nKeyboard : Backlit Chiclet Keyboard RGB\r\nWireless : Wi-Fi 6(802.11ax)+Bluetooth 5.2 (Dual band) 2*2\r\nConnectivity : 1x 3.5mm Combo Audio Jack, 1x HDMI 2.0b, 3x USB 3.2 Gen 1 Type-A, 1x USB 3.2 Gen 2 Type-C, 1x RJ45 LAN port\r\nWebcam: 720P HD camera\r\nAudio : 2x 2W speaker\r\nBattery : 90WHrs, 4S1P, 4-cell Li-ion\r\nColor : Graphite Black\r\nSKU : FA506QM-R936B6T-O11\r\nFree : TUF Gaming Backpack\r\nOS : Windows 11 Home + Office Home and Student 2021\r\n\r\nGaransi Resmi ASUS Indonesia 2 Tahun', 'Gaming', 'ASUS TUF GAMING A15 FA506QM.png'),
(32, 'Asus TUF Gaming A15 FA507RM', 18149000, 'Spesifikasi :\r\nProcessor : AMD Ryzen™ 7 6800H Mobile Processor (8-core/16-thread, 20MB cache, up to 4.7 GHz max boost)\r\nDisplay : 15.6″ FHD (1920 x 1080) 16:9, 144Hz, 250 nits, sRGB 62.5%, Adaptive-Sync, Value IPS-level\r\nMemory : 16GB (8GB DDR5-4800 SO-DIMM x2), MAX 32GB\r\nStorage : 512GB M.2 NVMe™ PCIe® 3.0 SSD (2 M.2 PCIe 512GB/1TB)\r\nGraphics : NVIDIA® GeForce RTX™ 3060 Laptop , 6GB GDDR6, 1752MHz* at 140W (1702MHz Boost Clock+50MHz OC,115W+25W Dynamic Boost)\r\nKeyboard : Backlit Chiclet Keyboard RGB\r\nWireless : Wi-Fi 6(802.11ax)+Bluetooth 5.2 (Dual band) 2*2\r\nConectivity : 1x RJ45 LAN port, 1x USB 3.2 Gen 1 Type-C, 1x USB 3.2 Gen 1 Type-C support DisplayPort™ / G-SYNC, 2x USB 3.2 Gen 1 Type-A\r\nCamera : Web 720 HD Camera\r\nAudio : 2-speaker system\r\nBattery : 90WHrs, 4S1P, 4-cell Li-ion\r\nOperating System : Windows 11 Home + Office Home and Student 2021\r\nFree : Tuf Backpack', 'Gaming', 'Asus TUF Gaming A15 FA507RM.png'),
(33, 'ASUS VIVOBOOK 14X M1403QA', 7774999, 'Display : 14.0-inch WUXGA (1920 x 1200) 16:10 aspect ratio LED Backlit IPS-level Panel 300nits 45% NTSC color gamut Anti-glare display\r\nScreen-to-body ratio : 86 ％\r\n\r\nProcessor : AMD Ryzen™ 5 5600H Mobile Processor (6-core/12-thread, 19MB cache, up to 4.2 GHz max boost)\r\nIntergrated GPU : AMD Radeon™ Vega 7 Graphics\r\nTotal System Memory : 8GB DDR4 on board , Upgradeable up to 16GB\r\nOn board memory : 8GB DDR4 on board\r\nStorage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n\r\nHow to upgrade memory : Upgradable - Need to remove bottom/top case\r\nExpansion Slot(includes used) :\r\n1x DDR4 SO-DIMM slot\r\n1x M.2 2280 PCIe 3.0x4', 'Content Creator', 'ASUS VIVOBOOK 14X M1403QA.png'),
(34, 'ASUS VIVOBOOK PRO 14X OLED M3400QA', 9734999, 'Spesifikasi :\r\nProcessor : AMD Ryzen™ 7 5800H Mobile Processor (8-core/16-thread, 20MB cache, up to 4.4 GHz max boost)\r\nDisplay : 14″ 2.8K (2880 x 1800) OLED(16:10) Aspect Ratio, 0.2Ms, 90Hz refresh rate, 600Nits, DCI-P3: 100%, Pantone Validated, Anti-Glare Display, SGS Eye Care Display, Screen-To-Body Ratio: 85％\r\nMemory : 16GB DDR4 on board\r\nStorage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nGraphics : Integrated AMD Radeon™ Graphics', 'Content Creator', 'ASUS VIVOBOOK PRO 14X OLED M3400QA.png'),
(35, 'ASUS Vivobook Pro 15 OLED M6500QC', 13897000, '• Processor : AMD Ryzen™ 5 5600H Mobile Processor (6-core/12-thread, 19MB cache, up to 4.2 GHz max boost)\r\n• Memory : 16GB DDR4 on board\r\n• Storage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\n• Operating System : Windows 11 Home 64 Bit\r\n• Graphics : AMD Radeon™ Graphics & NVIDIA® GeForce® RTX™ 3050 Laptop GPU, 4GB GDDR6\r\nDisplay : 15.6-inch, 2.8K (2880 x 1620) OLED 16:9 aspect ratio, 120Hz refresh rate, 600nits HDR peak brightness, 100% DCI-P3 color gamut, 1,000,000:1, VESA CERTIFIED Display HDR True Black 600, 1.07 billion colors, PANTONE Validated, Glossy display, 70% less harmful blue light, Screen-to-body ratio: 84 ％', 'Content Creator', 'ASUS Vivobook Pro 15 OLED M6500QC.png'),
(36, 'ASUS Vivobook 16X M1603QA', 9334999, 'Spesifikasi :\r\nMilitary grade : US MIL-STD 810H military-grade standard\r\nTouch Panel : N/A\r\nDisplay : 16.0-inch WUXGA (1920 x 1200) 16:10 aspect ratio LED Backlit IPS-level Panel 60Hz refresh rate 300nits 45% NTSC color gamut Anti-glare display\r\nPantone : N/A\r\nScreen-to-body ratio : 86 ％\r\nIntel Athena Program : N/A\r\nProcessor : AMD Ryzen™ 7 5800H Mobile Processor (8-core/16-thread, 20MB cache, up to 4.4 GHz max boost)\r\nIntergrated GPU : AMD Radeon™ Vega 7 Graphics\r\nGraphics : N/A\r\nVRAM : N/A\r\nTotal System Memory : 8GB DDR4 on board + 8GB DDR4 SO-DIMM\r\nOn board memory : 8GB DDR4 on board\r\nDIMM Memory : 8GB DDR4 SO-DIMM\r\nStorage : 512GB M.2 NVMe™ PCIe® 3.0 SSD\r\nHow to upgrade memory : Upgradable - Need to remove bottom/top case\r\nExpansion Slot(includes used) : 1x DDR4 SO-DIMM slot', 'Content Creator', 'ASUS Vivobook 16X M1603QA.png'),
(37, 'ASUS ZENBOOK S 13 OLED UM5302TA', 17745000, '• Processor : AMD Ryzen™ 7 6800U Mobile Processor (8-core/16-thread, 16MB cache, up to 4.7 GHz max boost)\r\n• Graphics : AMD Radeon™ Graphics\r\n• Display : 13.3-inch, 2.8K (2880 x 1800) OLED 16:10 aspect ratio, 0.2ms response time, 550nits HDR peak brightness, 100% DCI-P3 color gamut, 1,000,000:1, VESA CERTIFIED Display HDR True Black 500, 1.07 billion colors, PANTONE Validated, Glossy display, 70% less harmful blue light, SGS Eye Care Display, Touch screen, With stylus support, Screen-to-body ratio: 89 ％\r\n• Memory : 16GB LPDDR5\r\n• Storage : 1TB M.2 NVMe™ PCIe® 4.0 Performance SSD', 'Content Creator', 'ASUS ZENBOOK S 13 OLED UM5302TA.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `db_barang`
--
ALTER TABLE `db_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_barang`
--
ALTER TABLE `db_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
