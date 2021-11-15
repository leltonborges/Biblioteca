/* Table 'aluno' */
CREATE TABLE biblioteca.aluno(
  id_aluno INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_aluno VARCHAR(100),
  end_aluno VARCHAR(100),
  email_aluno VARCHAR(100),
  fone_aluno VARCHAR(20),
  data_nasc_aluno DATE,
  genero_aluno VARCHAR(20),
  PRIMARY KEY(id_aluno)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

/* Table 'atendente' */
CREATE TABLE biblioteca.atendente(
  id_atendente INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_atendente VARCHAR(100),
  biblioteca_id INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY(id_atendente)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

CREATE INDEX fk_atendente ON biblioteca.atendente;

/* Table 'biblioteca' */
CREATE TABLE biblioteca.biblioteca(
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  address VARCHAR(50) NOT NULL,
  city VARCHAR(30) NOT NULL,
  state VARCHAR(2) NOT NULL,
  cep INT(8) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

/* Table 'categoria' */
CREATE TABLE biblioteca.categoria(
id_categoria INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_categoria VARCHAR(45), PRIMARY KEY(id_categoria)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

/* Table 'livro' */
CREATE TABLE biblioteca.livro(
  id_livro INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  titulo_livro VARCHAR(100),
  autor_livro VARCHAR(100),
  editora_livro VARCHAR(45),
  edicao_livro CHAR(3),
  ano_livro YEAR(4),
  localidade_livro VARCHAR(20),
  categoria_id_categoria INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY(id_livro)
) ENGINE = InnoDB AUTO_INCREMENT = 1 DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

CREATE INDEX `livro_FKIndex1` ON biblioteca.livro;

/* Table 'reserva' */
CREATE TABLE biblioteca.reserva(
  id_reserva INT(10) UNSIGNED NOT NULL,
  atendente_id_atendente INT(10) UNSIGNED NOT NULL,
  data_emprestimo DATE,
  data_devolucao DATE,
  aluno_id_aluno INT(10) UNSIGNED NOT NULL,
  biblioteca_id INT(10) UNSIGNED NOT NULL,
  livro_id_livro INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY(id_reserva)
) ENGINE = InnoDB DEFAULT CHARACTER SET = `utf8mb4`
  COLLATE = `utf8mb4_general_ci`;

CREATE INDEX `aluno_has_livro_FKIndex1` ON biblioteca.reserva(id_reserva);

CREATE INDEX `aluno_has_livro_FKIndex2` ON biblioteca.reserva;

CREATE INDEX `reserva_FKIndex3` ON biblioteca.reserva(atendente_id_atendente);

/* Relation 'aluno_reserva' */
ALTER TABLE biblioteca.reserva
  ADD CONSTRAINT aluno_reserva
    FOREIGN KEY (aluno_id_aluno) REFERENCES biblioteca.aluno (id_aluno);

/* Relation 'biblioteca_atendente' */
ALTER TABLE biblioteca.atendente
  ADD CONSTRAINT biblioteca_atendente
    FOREIGN KEY (biblioteca_id) REFERENCES biblioteca.biblioteca (id);

/* Relation 'biblioteca_reserva' */
ALTER TABLE biblioteca.reserva
  ADD CONSTRAINT biblioteca_reserva
    FOREIGN KEY (biblioteca_id) REFERENCES biblioteca.biblioteca (id);

/* Relation 'categoria_livro' */
ALTER TABLE biblioteca.livro
  ADD CONSTRAINT categoria_livro
    FOREIGN KEY (categoria_id_categoria)
      REFERENCES biblioteca.categoria (id_categoria);

/* Relation 'livro_reserva' */
ALTER TABLE biblioteca.reserva
  ADD CONSTRAINT livro_reserva
    FOREIGN KEY (livro_id_livro) REFERENCES biblioteca.livro (id_livro);
