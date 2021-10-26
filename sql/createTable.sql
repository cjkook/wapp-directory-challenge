CREATE TABLE users (
	user_id SERIAL PRIMARY KEY,
	username VARCHAR ( 100 ) UNIQUE NOT NULL,
	password VARCHAR ( 100 ) NOT NULL,
	displayName VARCHAR ( 100 ) UNIQUE NOT NULL,
	email VARCHAR ( 255 ) UNIQUE NOT NULL,
	emailChangeNotices BOOLEAN NOT NULL,
	roles TEXT,
	userDetails TEXT NOT NULL,
	createDateTime TIMESTAMP NOT NULL,
        last_login TIMESTAMP 
);