CREATE TABLE IF NOT EXISTS produtos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(11) NOT NULL,
  preco VARCHAR(255) NOT NULL,
  imagem VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;

INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (1,'Sabonete','20, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (2,'Shampoo','15, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (3,'Kit Shampoo','30, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (4,'Shampoo','20, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (5,'Creme Facial','25, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (6,'Perfume','80, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (7,'Protetor Solar','35, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (8,'Kit Creme','70, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (9,'Anti Rugas','40, 00','');