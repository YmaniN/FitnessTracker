-- Table: "FItness Model"."Coach"

-- DROP TABLE "FItness Model"."Coach";

CREATE TABLE "FItness Model"."Coach"
(
  "coach_id#" integer NOT NULL,
  first_name text,
  last_name text,
  "coaching_experience(years)" integer,
  intensity text,
  location text,
  CONSTRAINT pk_coach PRIMARY KEY ("coach_id#")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "FItness Model"."Coach"
  OWNER TO student;
