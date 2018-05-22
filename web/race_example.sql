CREATE TABLE events
(
    id SERIAL PRIMARY KEY,
    name VARCHAR(100 NOT NULL),
    location VARCHAR(100) NOT NULL, 
    "date" date
);

INSERT INTO events(name, location, "date") VALUES('Color Run', 'Boston Event Center', '2018-07-20');
INSERT INTO events(name, location) VALUES('Turkey Trot', 'Porter Park');


CREATE TABLE participants
(
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(40) NOT NULL,
    last_name VARCHAR(50) NOT NULL
);

INSERT INTO participants(first_name, last_name) VALUES('Emma', 'Fisher');

CREATE TABLE event_participant
(
    id SERIAL,
    event_id INT REFERENCES event(id) NOT NULL,
    participant_id INT REFERENCES participant(id) NOT NULL
);

INSERT INTO event_participant(event_id, participant_id) VALUES(1, 1);