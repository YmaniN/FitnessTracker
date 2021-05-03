DROP TABLE if exists WorkoutSession;

DROP TABLE if exists WorkoutPlan;

DROP TABLE if exists AthUser;

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
  first_name varchar(25),
  last_name varchar(25),
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



CREATE TABLE AthUser
(
  id integer NOT NULL,
  username varchar(25),
  user_password varchar(25),
  phone_number varchar(15),
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
  location varchar(25),
  CONSTRAINT pk_workoutsession PRIMARY KEY (id)
);

-- add explicit insert statements

INSERT INTO Avatar Values ('101', '45', 'M', 'average');
INSERT INTO Avatar VALUES ('102', '32', 'F', 'unathletic');
INSERT INTO Avatar VALUES ('103', '15', 'M', 'skinny');
INSERT INTO Avatar VALUES ('104', '56', 'M', 'average');
INSERT INTO Avatar VALUES ('105', '9', 'F', 'unathletic');
INSERT INTO Avatar VALUES ('106', '25', 'F', 'athletic');

INSERT INTO Coach VALUES ('201', 'James', 'Frank', '4', 'high', 'Paris,France'); 
INSERT INTO Coach VALUES ('202', 'Evan', 'Morris', '13', 'moderate', 'London,UK'); 
INSERT INTO Coach VALUES ('203', 'Miranda', 'Frat', '8', 'low', 'Big Island,HI'); 

INSERT INTO WorkoutRating VALUES ('101', 'great', '10'); 
INSERT INTO WorkoutRating VALUES ('102', 'tired', '2'); 
INSERT INTO WorkoutRating VALUES ('103', 'sore', '6');
INSERT INTO WorkoutRating VALUES ('104', 'good', '7'); 
INSERT INTO WorkoutRating VALUES ('105', 'out of shape', '5'); 
INSERT INTO WorkoutRating VALUES ('106', 'strong', '9'); 
 
INSERT INTO AthUser VALUES ('101', 'JamesLee_14', 'password1234', '3139999999', '74', '180');
INSERT INTO AthUser VALUES ('102', 'Addy', 'Smyth123_Addy','908-888-8888', '63', '155'); 
INSERT INTO AthUser VALUES ('103', 'JohnGabe', 'FTN789_Johnnyboy', '757-777-7777', '70', '170'); 
INSERT INTO AthUser VALUES ('104', 'Sammy-Adams','Sam_Not_Adams!', '646-666-6666', '77', '195');
INSERT INTO AthUser VALUES ('105', 'GabNoDouglas', 'GabrielleLovesChickens45', '535-555-5555', '59', '120'); 
INSERT INTO AthUser VALUES ('106', 'BaddyMaddy', 'MegsKnees_GetLow23!', '434-444-4444', '69', '160');  

INSERT INTO WorkoutPlan VALUES ('101', 'athletic', 'pullups', '45', '5', '3', '20');  
INSERT INTO WorkoutPlan VALUES ('102', 'unathletic', 'squats', '0', '10', '5', '30'); 
INSERT INTO WorkoutPlan VALUES ('103', 'skinny', 'russian twists', '25', '15', '3', '10'); 
INSERT INTO WorkoutPlan VALUES ('104', 'average', 'pushups', '25', '10', '2', '20'); 
INSERT INTO WorkoutPlan VALUES ('105', 'unathletic', 'run', '0', '0', '0', '30'); 
INSERT INTO WorkoutPlan VALUES ('106', 'athletic', 'pullups', '50', '5', '2', '10'); 

INSERT INTO WorkoutSession VALUES ('101', '24-Feb-21', '1420', 'New York,NY');
INSERT INTO WorkoutSession VALUES ('102', '5-Mar-20', '1128', 'London,UK');
INSERT INTO WorkoutSession VALUES ('103', '7-Dec-20', '952', 'Colorado Springs,CO');  
INSERT INTO WorkoutSession VALUES ('104', '4-Apr-19', '845', 'Alexandria,VA');
INSERT INTO WorkoutSession VALUES ('105', '12-Dec-12', '1509', 'Naples, FL');   
INSERT INTO WorkoutSession VALUES ('106', '5-Jun-15', '1100', 'West New York, NJ'); 
-- mysql --user=student --password student < setup.sql

