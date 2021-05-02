-- Table: "FItness Model"."Workout Session"

-- DROP TABLE "FItness Model"."Workout Session";

CREATE TABLE "FItness Model"."Workout Session"
(
  "id#" integer NOT NULL,
  date text,
  "time" integer,
  CONSTRAINT pk_workoutsession PRIMARY KEY ("id#")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "Fitness Model"."Workout Session"
  OWNER TO student;
