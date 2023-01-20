CREATE TABLE IF NOT EXISTS produtos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  preco VARCHAR(255) NOT NULL,
  imagem VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB;

INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL, 'Sabonete','20, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Shampoo','15, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Kit Shampoo','30, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Shampoo','20, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Creme Facial','25, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Perfume','80, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Protetor Solar','35, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Kit Creme','70, 00','');
INSERT INTO `produtos`(`id`, `nome`, `preco`, `imagem`) VALUES (NULL,'Anti Rugas','40, 00','');