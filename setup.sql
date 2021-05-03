DROP TABLE if exists WorkoutSession;

DROP TABLE if exists WorkoutPlan;

DROP TABLE if exists User;

DROP TABLE if exists WorkoutRating;

DROP TABLE if exists Coach;

DROP TABLE if exists Avatar;

-- Table: Avatar



CREATE TABLE Avatar
(
  id integer NOT NULL,
  age integer,
  gender char,
  body_type varchar(10),
  CONSTRAINT pk_avatar PRIMARY KEY (id)
);


-- Table: Coach



CREATE TABLE Coach
(
  coach_id integer NOT NULL,
  first_name text,
  last_name text,
  coaching_experience integer,
  intensity varchar(25),
  location varchar(25),
  CONSTRAINT pk_coach PRIMARY KEY (coach_id)
);


-- Table: WorkoutRating



CREATE TABLE WorkoutRating
(
  id integer NOT NULL,
  wellness varchar(25),
  body_feeling integer,
  CONSTRAINT pk_rating PRIMARY KEY (id)
);

-- Table: User



CREATE TABLE User
(
  id integer NOT NULL,
  location varchar(25),
  username varchar(25),
  user_password varchar(25),
  phone_number integer,
  weight integer,
  height integer,
  CONSTRAINT pk_user PRIMARY KEY (id)
);


-- Table: WorkoutPlan



CREATE TABLE WorkoutPlan
(
  id integer NOT NULL,
  body_type varchar(25) NOT NULL,
  workout varchar(25),
  reps integer,
  sets integer,
  weight integer,
  duration integer,
  CONSTRAINT pk_workoutplan PRIMARY KEY (id, body_type)
);

-- Table: WorkoutSession


CREATE TABLE WorkoutSession
(
  id integer NOT NULL,
  date varchar(25),
  time integer,
  CONSTRAINT pk_workoutsession PRIMARY KEY (id)
);

-- add explicit insert statements
-- mysql --user=student --password student < setup.sql

