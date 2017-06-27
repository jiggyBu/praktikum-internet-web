create schema cinema;

create table cinema.account (
	account_id bigserial,
	username varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	acctype smallint NOT NULL,
	CONSTRAINT pk_account PRIMARY KEY(account_id)
);

create table cinema.hall(
	hall_id bigserial,
	isBusy boolean,
	CONSTRAINT pk_hall PRIMARY KEY(hall_id)
);

create table cinema.projection (
	projection_id bigserial,
	hallFRN_id bigint,
	name varchar(255) NOT NULL,
	start_ts timestamp NOT NULL,
	end_ts timestamp NOT NULL,
	CONSTRAINT pk_projection PRIMARY KEY(projection_id),
	CONSTRAINT fk_projection_hall FOREIGN KEY(hallFRN_id)
	REFERENCES igor.hall (hall_id) MATCH SIMPLE
	ON UPDATE CASCADE ON DELETE NO ACTION
);

create table cinema.reservation(
	reservation_id bigserial,
	name varchar(50) NOT NULL,
	projectionFRN_id bigint,
	CONSTRAINT pk_reservation PRIMARY KEY(reservation_id),
	CONSTRAINT fk_reservation_projection FOREIGN KEY(projectionFRN_id)
	REFERENCES igor.projection (projection_id) MATCH SIMPLE
	ON UPDATE NO ACTION ON DELETE NO ACTION
);
