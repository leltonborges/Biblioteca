CREATE TABLE `aluno` (
  `id_aluno` int(10) NOT NULL,
  `nome_aluno` varchar(100) DEFAULT NULL,
  `end_aluno` varchar(100) DEFAULT NULL,
  `email_aluno` varchar(100) DEFAULT NULL,
  `fone_aluno` varchar(20) DEFAULT NULL,
  `data_nasc_aluno` date DEFAULT NULL,
  `genero_aluno` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `end_aluno`, `email_aluno`, `fone_aluno`, `data_nasc_aluno`, `genero_aluno`) VALUES
(1, 'Matheus', 'Rio de Janeiro', 'matheus@gmail.com', '619746664', '2021-12-07', 'M'),
(2, 'Joana', 'DF', 'joana@gmail.com', '61 946465', '2021-12-16', 'F'),
(3, 'Lia', 'MS', 'lia@gmail.com', '61 95565', '2021-01-04', 'F'),
(4, 'Luana', 'MA', 'luana@gmail.com', '(61) 986646', '2021-07-12', 'F');

CREATE TABLE `atendente` (
  `id_atendente` int(10) NOT NULL,
  `nome_atendente` varchar(100) DEFAULT NULL,
  `biblioteca_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `atendente` (`id_atendente`, `nome_atendente`, `biblioteca_id`) VALUES
(1, 'Ana', 1),
(2, 'Bia', 2),
(3, 'Lia', 3),
(4, 'Alex', 4),
(5, 'José', 5),
(6, 'Maria', 1),
(7, 'Marcos', 2),
(8, 'João', 3),
(9, 'Alef', 4),
(10, 'Roberto', 5);

CREATE TABLE `biblioteca` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(2) NOT NULL,
  `cep` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `biblioteca` (`id`, `name`, `address`, `city`, `state`, `cep`) VALUES
(1, 'Biblioteca Pública de Águas Claras', 'Aguas Claras', 'Brasília', 'DF', 46464),
(2, 'Biblioteca Mário de Andrade ', 'São Paulo', 'São Paulo', 'SP', 64646),
(3, 'Biblioteca da Floresta', 'Acre', 'Rio Branco ', 'AC', 646),
(4, 'Biblioteca-Parque de Manguinhos', 'Rio de Janeiro', 'Rio de Janeiro', 'RJ', 34234),
(5, 'Real Gabinete Português de Leitura', 'Rio de Janeiro', 'Rio de Janeiro', 'RJ', 54345344);

CREATE TABLE `biblioteca_livro` (
  `id_livro` int(10) NOT NULL,
  `id_biblioteca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `biblioteca_livro` (`id_livro`, `id_biblioteca`) VALUES
(3, 1),
(4, 1),
(6, 1),
(8, 1),
(10, 1),
(5, 2),
(6, 2),
(7, 2),
(9, 2),
(2, 3),
(3, 3),
(5, 3),
(6, 3),
(11, 3),
(1, 4),
(5, 4),
(6, 4),
(10, 4),
(2, 5),
(3, 5),
(4, 5),
(6, 5),
(7, 5),
(10, 5),
(11, 5);

CREATE TABLE `categoria` (
  `id` int(10) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categoria` (`id`, `name`) VALUES
(1, 'PHP'),
(2, 'Java'),
(3, 'Rust'),
(4, 'Lua'),
(5, 'Swift'),
(6, 'TypeScript'),
(7, 'Ionic');

CREATE TABLE `livro` (
  `id_livro` int(10) NOT NULL,
  `titulo_livro` varchar(100) DEFAULT NULL,
  `autor_livro` varchar(100) DEFAULT NULL,
  `editora_livro` varchar(45) DEFAULT NULL,
  `edicao_livro` char(3) DEFAULT NULL,
  `ano_livro` year(4) DEFAULT NULL,
  `localidade_livro` varchar(20) DEFAULT NULL,
  `categoria_id` int(10) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `livro` (`id_livro`, `titulo_livro`, `autor_livro`, `editora_livro`, `edicao_livro`, `ano_livro`, `localidade_livro`, `categoria_id`, `url`) VALUES
(1, 'Padrões de Projetos', ' Erich Gamma, Richard Helm, Ralph Johnson', 'Bookman', '2ª', 2020, 'Brasília', 2, 'https://images-na.ssl-images-amazon.com/images/I/51bO3rI8hEL._SY344_BO1,204,203,200_QL70_ML2_.jpg	'),
(2, 'Código limpo', 'Robert C. Martin', 'Alta Books', '1º', 2019, 'SP', 1, 'https://images-na.ssl-images-amazon.com/images/I/4153E2zZmTS._SX350_BO1,204,203,200_.jpg'),
(3, 'Domain-Driven Design', 'Eric Evans', 'Alta Books', '2ª', 2018, 'RJ', 3, 'https://images-na.ssl-images-amazon.com/images/I/51HGF9mg6iL._SX323_BO1,204,203,200_.jpg'),
(4, 'Arquitetura limpa', 'Robert C. Marti', 'Alta Books', '1ª', 2015, 'BR', 1, 'https://images-na.ssl-images-amazon.com/images/I/41T8NdKFqEL._SX352_BO1,204,203,200_.jpg'),
(5, 'Desenvolvimento ágil limpo', 'Robert C. Martin', 'Alta Books', '1ª', 2018, 'Brasília', 6, 'https://images-na.ssl-images-amazon.com/images/I/41092NmnMkL._SX355_BO1,204,203,200_.jpg'),
(6, 'Refatoração', 'Martin Fowler', 'Novatec Editora', '1ª', 2020, 'Brasília', 4, 'https://images-na.ssl-images-amazon.com/images/I/4125lRe2M9L._SX347_BO1,204,203,200_.jpg'),
(7, 'HTML e CSS: projete e construa websites', 'Jon Duckett', 'Alta Books', '1ª', 2016, 'Amazon', 7, 'https://images-na.ssl-images-amazon.com/images/I/4187M4juO-L._SX368_BO1,204,203,200_.jpg'),
(8, 'Javascript e Jquery', 'Jon Duckett', 'Alta Books', '1ª', 2017, 'Amazon', 6, 'https://images-na.ssl-images-amazon.com/images/I/41vEGoXo1sL._SX323_BO1,204,203,200_.jpg'),
(9, 'CSS Pocket Reference', 'Eric A Meyer', 'Reilly Media', '1ª', 2018, 'Amazon', 7, 'https://images-na.ssl-images-amazon.com/images/I/51NlcI+VhlL._SX302_BO1,204,203,200_.jpg'),
(10, 'PHP Programando com Orientação a Objetos', ' Pablo DallOglio ', 'Novatec Editora', '3ª', 2018, 'Amazon', 1, 'https://m.media-amazon.com/images/I/41hdpFDpNOL._SY346_.jpg'),
(11, 'Desenvolvendo Websites com PHP', 'Juliano Niederauer', 'Novatec Editora', '3ª', 2019, 'Casa do Código', 1, 'https://images-na.ssl-images-amazon.com/images/I/61AQWLbbbuL._SX347_BO1,204,203,200_.jpg');

CREATE TABLE `reserva` (
  `id_reserva` int(10) NOT NULL,
  `atendente_id_atendente` int(10) NOT NULL,
  `data_emprestimo` date DEFAULT NULL,
  `data_devolucao` date DEFAULT NULL,
  `aluno_id_aluno` int(10) NOT NULL,
  `biblioteca_id` int(10) NOT NULL,
  `livro_id_livro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reserva` (`id_reserva`, `atendente_id_atendente`, `data_emprestimo`, `data_devolucao`, `aluno_id_aluno`, `biblioteca_id`, `livro_id_livro`) VALUES
(1, 2, '2021-12-21', '2021-12-19', 1, 2, 5),
(2, 10, '2021-12-06', '2021-12-16', 2, 5, 11),
(3, 3, '2021-12-13', '2021-12-19', 3, 3, 5),
(4, 4, '2021-12-05', '2021-12-29', 4, 4, 6),
(5, 1, '2021-12-13', '2021-12-06', 1, 1, 3),
(6, 6, '2021-12-12', '2021-12-24', 2, 1, 4),
(7, 3, '2021-12-05', '2021-12-15', 3, 3, 11),
(8, 3, '2021-12-20', '2021-12-18', 2, 3, 6),
(9, 8, '2021-12-03', '2021-12-14', 2, 3, 5),
(10, 3, '2021-12-05', '2021-12-12', 4, 3, 2);


ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

ALTER TABLE `atendente`
  ADD PRIMARY KEY (`id_atendente`),
  ADD KEY `atendente_biblioteca_id_fk` (`biblioteca_id`);

ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `biblioteca_livro`
  ADD PRIMARY KEY (`id_biblioteca`,`id_livro`),
  ADD KEY `biblioteca_livro_livro_id_livro_fk` (`id_livro`);

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`),
  ADD KEY `livro_categoria_id_fk` (`categoria_id`);

ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `reserva_biblioteca_id_fk` (`biblioteca_id`),
  ADD KEY `reserva_aluno_id_aluno_fk` (`aluno_id_aluno`),
  ADD KEY `reserva_livro_id_livro_fk` (`livro_id_livro`);


ALTER TABLE `aluno`
  MODIFY `id_aluno` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `atendente`
  MODIFY `id_atendente` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `biblioteca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `categoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `livro`
  MODIFY `id_livro` int(10) NOT NULL AUTO_INCREMENT;

ALTER TABLE `reserva`
  MODIFY `id_reserva` int(10) NOT NULL AUTO_INCREMENT;


ALTER TABLE `atendente`
  ADD CONSTRAINT `atendente_biblioteca_id_fk` FOREIGN KEY (`biblioteca_id`) REFERENCES `biblioteca` (`id`);

ALTER TABLE `biblioteca_livro`
  ADD CONSTRAINT `biblioteca_livro_biblioteca_id_fk` FOREIGN KEY (`id_biblioteca`) REFERENCES `biblioteca` (`id`),
  ADD CONSTRAINT `biblioteca_livro_livro_id_livro_fk` FOREIGN KEY (`id_livro`) REFERENCES `livro` (`id_livro`);

ALTER TABLE `livro`
  ADD CONSTRAINT `livro_categoria_id_fk` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_aluno_id_aluno_fk` FOREIGN KEY (`aluno_id_aluno`) REFERENCES `aluno` (`id_aluno`),
  ADD CONSTRAINT `reserva_biblioteca_id_fk` FOREIGN KEY (`biblioteca_id`) REFERENCES `biblioteca` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
