-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.10-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.5052
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sga
CREATE DATABASE IF NOT EXISTS `sga` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `sga`;

-- Copiando estrutura para tabela sga.apontamento
CREATE TABLE IF NOT EXISTS `apontamento` (
  `id_apontamento` int(11) NOT NULL AUTO_INCREMENT,
  `user_apontamento` int(11) NOT NULL,
  `data_apontamento` date NOT NULL,
  `hr_ini_apontamento` time NOT NULL,
  `hr_fim_apontamento` time NOT NULL,
  `site_apontamento` varchar(45) COLLATE utf8_bin NOT NULL,
  `os_apontamento` varchar(45) COLLATE utf8_bin NOT NULL,
  `evento_apontamento` int(11) NOT NULL,
  `descricao_apontamento` varchar(500) COLLATE utf8_bin NOT NULL,
  `veiculo_apontamento` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `gestor_apontamento` int(11) NOT NULL,
  `obs_apontamento` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `data_registro_apontamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data e hora da criação do apontamento',
  PRIMARY KEY (`id_apontamento`,`gestor_apontamento`,`evento_apontamento`,`user_apontamento`),
  UNIQUE KEY `id_apontamento_UNIQUE` (`id_apontamento`),
  KEY `os_apontamento_idx` (`evento_apontamento`),
  KEY `os_apontamento_idx1` (`gestor_apontamento`),
  KEY `os_apontamento_idx2` (`user_apontamento`),
  CONSTRAINT `fk_evento_apontamento` FOREIGN KEY (`evento_apontamento`) REFERENCES `evento` (`id_evento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_gestor_apontamento` FOREIGN KEY (`gestor_apontamento`) REFERENCES `gestor` (`id_gestor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `os_apontamento` FOREIGN KEY (`user_apontamento`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela sga.apontamento: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `apontamento` DISABLE KEYS */;
INSERT INTO `apontamento` (`id_apontamento`, `user_apontamento`, `data_apontamento`, `hr_ini_apontamento`, `hr_fim_apontamento`, `site_apontamento`, `os_apontamento`, `evento_apontamento`, `descricao_apontamento`, `veiculo_apontamento`, `gestor_apontamento`, `obs_apontamento`, `data_registro_apontamento`) VALUES
	(1, 1, '2016-03-28', '08:00:00', '10:00:00', 'SPO ABC', '2222-16', 4, 'Deslocamento da ENSEL para o site SPO ABC', 'HIG 8700', 2, 'Trânsito lento', '2016-03-28 14:50:37'),
	(2, 1, '2016-03-28', '10:00:00', '12:00:00', 'SPO ABC', '1000-16', 1, 'Instalação de Equipamento CISCO', 'HIG 8700', 2, 'Não foi possível finalizar a instalação.', '2016-03-28 14:48:18'),
	(3, 1, '2016-03-28', '12:00:00', '13:00:00', 'SPO ABC', '1000-16', 17, 'Intervalo almoço', 'HIG 8700', 2, 'Intervalo almoço', '2016-03-28 14:48:18'),
	(4, 1, '2016-03-28', '13:00:00', '17:00:00', 'SPO ABC', '1000-16', 1, 'Instalação de Equipamento CISCO', 'HIG 8700', 2, 'Instalação finalizada', '2016-03-28 14:49:19'),
	(5, 1, '2016-03-28', '17:00:00', '18:00:00', 'SPO ABC', '2222-16', 4, 'Deslocamento do site SPO ABC para a ENSEL', 'HIG 8700', 2, 'Trânsito congestionado no trajeto', '2016-03-28 14:50:40');
/*!40000 ALTER TABLE `apontamento` ENABLE KEYS */;

-- Copiando estrutura para tabela sga.cargo
CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cargo` varchar(45) COLLATE utf8_bin NOT NULL,
  `permissao_cargo` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_cargo`),
  UNIQUE KEY `nome_cargo_UNIQUE` (`nome_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela sga.cargo: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` (`id_cargo`, `nome_cargo`, `permissao_cargo`) VALUES
	(1, 'Estagiario', 'Campo'),
	(2, 'Montador', 'Campo'),
	(3, 'Tecnico', 'Campo'),
	(4, 'Projetista', 'Campo'),
	(5, 'Gestor', 'Gestao'),
	(6, 'Staff', 'Controller'),
	(7, 'Consultas', 'Consulta'),
	(8, 'Coordenador', 'Coordenador'),
	(100, 'Administrador', 'Root');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;

-- Copiando estrutura para tabela sga.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_evento` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_evento`),
  UNIQUE KEY `nome_cargo_UNIQUE` (`nome_evento`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela sga.evento: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id_evento`, `nome_evento`) VALUES
	(8, 'Aceitacao'),
	(1, 'Aguardando atividades'),
	(14, 'Atestado'),
	(10, 'CGR'),
	(13, 'Compensacao'),
	(20, 'Descanso Remunerado'),
	(4, 'Deslocamento'),
	(11, 'Divisao de Turno'),
	(9, 'Documentacao'),
	(15, 'Falta'),
	(3, 'Improdutividade Cliente'),
	(2, 'Improdutividade Ensel'),
	(6, 'Instalacao'),
	(17, 'Intervalo de Almoco'),
	(18, 'Intervalo de Janta'),
	(19, 'Intervalo entre turnos'),
	(12, 'Supervisao'),
	(7, 'Teste'),
	(16, 'Treinamento'),
	(5, 'Vistoria');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Copiando estrutura para tabela sga.gestor
CREATE TABLE IF NOT EXISTS `gestor` (
  `id_gestor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_gestor` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_gestor`),
  UNIQUE KEY `nome_cargo_UNIQUE` (`nome_gestor`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela sga.gestor: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `gestor` DISABLE KEYS */;
INSERT INTO `gestor` (`id_gestor`, `nome_gestor`) VALUES
	(3, 'Alex Diogo'),
	(1, 'Anderson Luis'),
	(2, 'André Luis'),
	(9, 'Cláudio Figueiredo'),
	(5, 'Gerlan Taares'),
	(13, 'Gerson Severino'),
	(4, 'Henrique Oliveira'),
	(14, 'José Márcio'),
	(8, 'Marcela Testi'),
	(7, 'Maro Lopes'),
	(11, 'Michelle Antunes'),
	(6, 'Pedro Gomes'),
	(12, 'Thiago Pessoa'),
	(10, 'Tárcio Lima');
/*!40000 ALTER TABLE `gestor` ENABLE KEYS */;

-- Copiando estrutura para tabela sga.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(45) COLLATE utf8_bin NOT NULL,
  `login_user` varchar(45) COLLATE utf8_bin NOT NULL,
  `email_user` varchar(45) COLLATE utf8_bin NOT NULL,
  `cargo_user` int(11) NOT NULL,
  `senha_user` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `dt_create_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data e hora da criação do usuário',
  `status_user` bit(1) NOT NULL DEFAULT b'1' COMMENT '0 = Inativo; 1 - Ativo',
  PRIMARY KEY (`id_user`,`cargo_user`),
  UNIQUE KEY `email_user_UNIQUE` (`email_user`),
  KEY `fk_cargo_id_userx` (`cargo_user`),
  CONSTRAINT `fk_cargo_user` FOREIGN KEY (`cargo_user`) REFERENCES `cargo` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela sga.user: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nome_user`, `login_user`, `email_user`, `cargo_user`, `senha_user`, `dt_create_user`, `status_user`) VALUES
	(1, 'Tarcio Lima', 'tarcio', 'tarcio@ensel.com.br', 100, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:09:22', b'1'),
	(2, 'Maro Lopes', 'maro', 'maro@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:09:18', b'1'),
	(15, 'Gerlan Tavares', 'gerlan', 'gerlan@ensel.com.br', 5, '250cf8b51c773f3f8dc8b4be867a9a02', '2016-04-11 23:07:14', b'1'),
	(16, 'teste', 'teste', 'teste@com', 100, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:07:22', b'1'),
	(19, 'Anderson Luis', 'anderson', 'anderson@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:07:31', b'1'),
	(20, 'Andre Barros', 'andre', 'andre@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:09:43', b'1'),
	(21, 'Alex Diogo', 'Alex', 'alex@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:07:50', b'1'),
	(22, 'Henrique Oliveira', 'henrique', 'henrique@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:08:00', b'1'),
	(23, 'Pedro Gomes', 'pedro', 'pedro@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:08:06', b'1'),
	(24, 'Marcela Teste', 'marcela', 'marcela@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:08:14', b'1'),
	(25, 'Claudio Figueirero', 'claudio', 'claudio@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:09:57', b'1'),
	(26, 'Michelle Antunes', 'michelle', 'michelle@ensel.com.br', 6, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:08:35', b'1'),
	(27, 'Thiago Pessoa', 't.pessoa', 't.pessoa@ensel.com.br', 8, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:08:51', b'1'),
	(28, 'Gerson Severino', 'gerson', 'gerson@ensel.com.br', 8, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:09:04', b'1'),
	(29, 'Jose Marcio', 'jose', 'jose@ensel.com.br', 7, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:10:11', b'1'),
	(31, 'Selma Pessoa', 'selma', 'selma@ensel.com.br', 5, '202cb962ac59075b964b07152d234b70', '2016-04-11 23:06:10', b'0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
