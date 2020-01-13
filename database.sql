CREATE TABLE users (
	id serial PRIMARY KEY,
	username VARCHAR(64) UNIQUE NOT NULL,
	password VARCHAR(128) NOT NULL,
	email VARCHAR(128) UNIQUE NOT NULL,
	role INTEGER NOT NULL DEFAULT 2,
	path VARCHAR(256),
	photo VARCHAR(128),
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

CREATE TABLE categories (
	id serial PRIMARY KEY,
	name VARCHAR(64) NOT NULL,
	icon VARCHAR(64) NOT NULL,
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

CREATE TABLE notices (
	id bigserial PRIMARY KEY,
	title VARCHAR(128) NOT NULL,
	body TEXT NOT NULL,
	start DATE,
	path VARCHAR(256),
	banner VARCHAR(128),
	image VARCHAR(128),
	pdf VARCHAR(128),
	liked INTEGER,
	noliked INTEGER,
	category_id INTEGER NOT NULL,
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

CREATE TABLE banners (
	id serial PRIMARY KEY,
	name VARCHAR(64) NOT NULL,
	path VARCHAR(256) NOT NULL,
	image VARCHAR(128) NOT NULL,
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

CREATE TABLE messages (
	id bigserial PRIMARY KEY,
	fullname VARCHAR(128) NOT NULL,
	area VARCHAR(128) NOT NULL,
	body TEXT NOT NULL,
	type BOOLEAN DEFAULT true,
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

CREATE TABLE generals (
	id serial PRIMARY KEY,
	name VARCHAR(128) NOT NULL,
	body TEXT,
	created TIMESTAMP WITH TIME ZONE,
	modified TIMESTAMP WITH TIME ZONE
);

INSERT INTO categories (id, name, icon, created, modified) VALUES (1, 'Prioritarios', ' fa-exclamation-triangle', '2020-01-12 21:05:43-05', '2020-01-12 21:05:43-05');

SELECT pg_catalog.setval('categories_id_seq', 1, true);

INSERT INTO generals (id, name, body, created, modified) VALUES (1, 'Términos y Condiciones', '', '2020-01-12 21:01:32-05', '2020-01-12 21:01:32-05');

SELECT pg_catalog.setval('generals_id_seq', 1, true);

INSERT INTO users (id, username, password, email, role, path, photo, created, modified) VALUES (1, 'admin', '$2y$10$/bxsr0CXfgYdws00AjE.tueLpTodTTn67jIsE927nvew2gNnWtpBy', 'admin@cvnote.com', 1, '', '', '2020-01-10 07:13:47-05', '2020-01-10 07:13:47-05');

SELECT pg_catalog.setval('users_id_seq', 1, true);