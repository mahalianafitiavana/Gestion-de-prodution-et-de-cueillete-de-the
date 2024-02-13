-- Inserting sample data into the users table
INSERT INTO users (nom, prenom, pseudo, pwd, types) VALUES
('Doe', 'John', 'johndoe', 'password123', 1),
('Smith', 'Alice', 'alicesmith', 'securepwd', 2),
('Johnson', 'Bob', 'bobj', 'password456', 1);

-- Inserting sample data into the variete table
INSERT INTO variete (nom, occupation, rendement) VALUES
('Wheat', 5000.00, 20.50),
('Corn', 3000.00, 15.75),
('Rice', 7000.00, 25.00);

-- Inserting sample data into the parcelle table
INSERT INTO parcelle (surface, id_variete) VALUES
(100.00, 1),
(75.50, 2),
(120.75, 3);

-- Inserting sample data into the cueilleurs table
INSERT INTO cueilleurs (nom, genre, naissance) VALUES
('Smith', 'M', '1990-05-15'),
('Johnson', 'F', '1985-10-20'),
('Williams', 'M', '1993-02-28');

-- Inserting sample data into the types table
INSERT INTO types (nom) VALUES
('Regular'),
('Overtime'),
('Bonus');

-- Inserting sample data into the depense table
INSERT INTO depense (montant, datemontant, id_type) VALUES
(1500.00, '2024-01-05', 1),
(200.00, '2024-01-10', 3),
(800.00, '2024-01-20', 1);

-- Inserting sample data into the salaire table
INSERT INTO salaire (montant, dates, id_cueilleur) VALUES
(2000.00, '2024-01-01', 1),
(1800.00, '2024-01-01', 2),
(2200.00, '2024-01-01', 3);

-- Inserting sample data into the cueillette table
INSERT INTO cueillette (datecueillette, poidscueilli, id_parcelle, id_cueilleur) VALUES
('2024-01-10', 50.25, 1, 1),
('2024-01-12', 40.75, 2, 2),
('2024-01-14', 60.00, 3, 3);
