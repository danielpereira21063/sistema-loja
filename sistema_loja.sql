-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.21 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela sistema_loja.telefones
CREATE TABLE IF NOT EXISTS `telefones` (
  `id_telefone` int unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int unsigned DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_telefone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela sistema_loja.telefones: 0 rows
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_loja.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int unsigned NOT NULL AUTO_INCREMENT,
  `id_telefone` int unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `active` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT 'Y',
  `admin` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela sistema_loja.users: 0 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
