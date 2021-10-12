-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para crud
CREATE DATABASE IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `crud`;

-- Copiando estrutura para tabela crud.emandamento
CREATE TABLE IF NOT EXISTS `emandamento` (
  `emAndamento_id` int(11) NOT NULL AUTO_INCREMENT,
  `emAndamento_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emAndamento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.emandamento: ~0 rows (aproximadamente)
DELETE FROM `emandamento`;
/*!40000 ALTER TABLE `emandamento` DISABLE KEYS */;
INSERT INTO `emandamento` (`emAndamento_id`, `emAndamento_nome`) VALUES
	(13, 'Trabalho da faculdadee'),
	(14, 'Ser contratado');
/*!40000 ALTER TABLE `emandamento` ENABLE KEYS */;

-- Copiando estrutura para tabela crud.finalizado
CREATE TABLE IF NOT EXISTS `finalizado` (
  `finalizado_id` int(11) NOT NULL AUTO_INCREMENT,
  `finalizado_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`finalizado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.finalizado: ~0 rows (aproximadamente)
DELETE FROM `finalizado`;
/*!40000 ALTER TABLE `finalizado` DISABLE KEYS */;
INSERT INTO `finalizado` (`finalizado_id`, `finalizado_nome`) VALUES
	(1, 'Limpar a casa'),
	(18, 'Projeto Giro List'),
	(19, 'Tarefa Web 1');
/*!40000 ALTER TABLE `finalizado` ENABLE KEYS */;

-- Copiando estrutura para tabela crud.tarefa
CREATE TABLE IF NOT EXISTS `tarefa` (
  `tarefa_id` int(11) NOT NULL AUTO_INCREMENT,
  `tarefa_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tarefa_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela crud.tarefa: ~1 rows (aproximadamente)
DELETE FROM `tarefa`;
/*!40000 ALTER TABLE `tarefa` DISABLE KEYS */;
INSERT INTO `tarefa` (`tarefa_id`, `tarefa_nome`) VALUES
	(18, 'Aula de Golang'),
	(24, 'Tarefa de Inglês');
/*!40000 ALTER TABLE `tarefa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
