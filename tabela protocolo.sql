-- --------------------------------------------------------
-- Criado por:                   Diego Fernando do Carmo Bezerra 48 991013276
-- Versão do servidor:           5.5.64-MariaDB - MariaDB Server
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para call_center
CREATE DATABASE IF NOT EXISTS `call_center` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `call_center`;

-- Copiando estrutura para tabela call_center.protocolo
CREATE TABLE IF NOT EXISTS `protocolo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datacri` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `protocolo` varchar(50) DEFAULT NULL,
  `ipprot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100115 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
