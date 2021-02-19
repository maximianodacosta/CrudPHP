ALTER TABLE turmas 
ADD FOREIGN key (descricao)
REFERENCES alunos(turma);