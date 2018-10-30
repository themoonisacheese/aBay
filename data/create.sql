CREATE TABLE article (
	ref INTEGER PRIMARY KEY,
	libelle TEXT,
	categorie INTEGER,
	prix REAL,
	image TEXT,
	rating FLOAT,
	stock INTEGER,
	FOREIGN KEY(categorie) REFERENCES categorie(id)

);

CREATE TABLE categorie (
	id INTEGER PRIMARY KEY,
	nom TEXT,
	pere INTEGER,
	FOREIGN KEY(pere) REFERENCES categorie(id)
);
