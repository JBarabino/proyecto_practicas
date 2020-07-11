SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `Restaurantes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `precio` int(20) NOT NULL,
  `valor` int(20) NOT NULL,
  `telefono` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `Restaurantes` (`id`, `name`, `localidad`, `tipo`, `precio`, `valor`, `telefono`) VALUES
(1, 'Suro', 'Inca', 'Tapas', 3, 4, 111111111),
(2, 'Burger_and_taco', 'Inca', 'Americana', 3, 3, 222222222),
(3, 'Dalia', 'Inca', 'Tapas', 4, 4, 333333333),
(4, 'Es_Manacor', 'Manacor', 'Mallorquina', 2, 5, 444444444),
(5, 'Basant', 'Palma', 'India', 2, 4, 555555555),
(6, 'Il_Postino', 'Inca', 'Italiana', 4, 4, 666666666),
(7, 'Azuma', 'Palma', 'Japonesa', 3, 3, 777777777);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
