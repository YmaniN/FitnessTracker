-- Table: "FItness Model"."Workout Rating"

-- DROP TABLE "FItness Model"."Workout Rating";

CREATE TABLE "FItness Model"."Workout Rating"
(
  "id#" integer NOT NULL,
  wellness text,
  "body feeling (1(bad)-10(great))" integer,
  CONSTRAINT pk_rating PRIMARY KEY ("id#")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "FItness Model"."Workout Rating"
  OWNER TO student;
