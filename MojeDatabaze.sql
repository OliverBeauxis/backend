CREATE DATABASE MojeDatabaze;
USE MojeDatabaze;

CREATE TABLE Rodic (
    id INT PRIMARY KEY,
    jmeno VARCHAR(50),
    prijmeni VARCHAR(50)
);

CREATE TABLE Dite (
    id INT PRIMARY KEY,
    jmeno VARCHAR(50),
    rodic_id INT,
    FOREIGN KEY (rodic_id) REFERENCES Rodic(id)
);

INSERT INTO Rodic (id, jmeno, prijmeni) VALUES
    (1, 'Jan', 'Novak'),
    (2, 'Marie', 'Svobodova'),
    (3, 'Petr', 'Vlcek');

INSERT INTO Dite (id, jmeno, rodic_id) VALUES
    (1, 'Karel', 1),
    (2, 'Eva', 1),
    (3, 'Jakub', 2),
    (4, 'Lucie', 3);

-- Zobrazení výsledků
SELECT * FROM Rodic;
SELECT * FROM Dite;
