CREATE DATABASE pratica_2;

USE pratica_2;

CREATE TABLE funcionarios (
    pk_id_funcionarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_funcionarios VARCHAR(100) NOT NULL,
    cpf_funcionarios CHAR(11) NOT NULL,  
    email_funcionarios VARCHAR(100) NOT NULL,
    telefone_funcionarios CHAR(15) NOT NULL 
);

CREATE TABLE clientes (
    pk_id_clientes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_clientes VARCHAR(100) NOT NULL,
    email_clientes VARCHAR(100) NOT NULL,
    telefone_clientes CHAR(15) NOT NULL  
);

CREATE TABLE solicitacoes (
    pk_id_solicitacoes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pk_id_cliente INT NOT NULL,  
    pk_id_funcionario INT NOT NULL,  
    pk_id_urgencia INT NOT NULL, 
    pk_id_status INT NOT NULL, 
    data_solicitacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    CONSTRAINT fk_cliente FOREIGN KEY (pk_id_cliente) REFERENCES clientes(pk_id_clientes),
    CONSTRAINT fk_funcionario FOREIGN KEY (pk_id_funcionario) REFERENCES funcionarios(pk_id_funcionarios),
    CONSTRAINT fk_urgencia FOREIGN KEY (pk_id_urgencia) REFERENCES urgencia(pk_id_urgencia),
    CONSTRAINT fk_status FOREIGN KEY (pk_id_status) REFERENCES status(pk_id_status)
);


CREATE TABLE atribuicao_de_funcionarios (
    pk_id_atribuicao_de_funcionarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pk_id_funcionario INT NOT NULL, 
    pk_id_solicitacao INT NOT NULL,  
    data_atribuicao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  
    CONSTRAINT fk_funcionario_atribuido FOREIGN KEY (pk_id_funcionario) REFERENCES funcionarios(pk_id_funcionarios),
    CONSTRAINT fk_solicitacao_atribuida FOREIGN KEY (pk_id_solicitacao) REFERENCES solicitacoes(pk_id_solicitacoes)
);

CREATE TABLE urgencias (
    pk_id_urgencias INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tipo_urgencias ENUM('Baixa', 'Média', 'Alta') NOT NULL 
);

CREATE TABLE status (
    pk_id_status INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    status ENUM('Pendente', 'Em Andamento', 'Finalizado') NOT NULL 
);


