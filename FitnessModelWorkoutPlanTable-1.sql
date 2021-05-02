-- Table: "FItness Model"."Workout Plan"

-- DROP TABLE "FItness Model"."Workout Plan";

CREATE TABLE "FItness Model"."Workout Plan"
(
  "id#" integer NOT NULL,
  body_type text NOT NULL,
  workout text,
  reps integer,
  sets integer,
  "weight(lbs)" integer,
  "duration(minutes)" integer,
  CONSTRAINT pk_workoutplan PRIMARY KEY ("id#", body_type)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "FItness Model"."Workout Plan"
  OWNER TO student;
