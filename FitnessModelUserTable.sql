-- Table: "FItness Model"."User"

-- DROP TABLE "FItness Model"."User";

CREATE TABLE "FItness Model"."User"
(
  "id#" integer NOT NULL,
  location text,
  first_name text,
  last_name text,
  phone_number integer,
  "weight(lbs)" integer,
  "height(inches)" integer,
  CONSTRAINT pk_user PRIMARY KEY ("id#")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "FItness Model"."User"
  OWNER TO student;
