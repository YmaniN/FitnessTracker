-- Table: "FItness Model"."Avatar"

-- DROP TABLE "FItness Model"."Avatar";

CREATE TABLE "FItness Model"."Avatar"
(
  "id#" integer NOT NULL,
  age integer,
  gender "char",
  "body type" text,
  CONSTRAINT pk_avatar PRIMARY KEY ("id#")
)
WITH (
  OIDS=FALSE
);
ALTER TABLE "FItness Model"."Avatar"
  OWNER TO student;
