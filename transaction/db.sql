CREATE TABLE categorias 
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL
);

CREATE TABLE produtos
(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL,
    valor DECIMAL(11, 2),
    estoque INT NOT NULL,
    categoria_id INT NOT NULL REFERENCES categorias (id)
);