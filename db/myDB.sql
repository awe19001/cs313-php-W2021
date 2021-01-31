-- Table: public.Courses

-- DROP TABLE public."Courses";

CREATE TABLE public."Courses"
(
    "Code" integer,
    "Description" character varying(50) COLLATE pg_catalog."default",
    "Credits" integer,
    "Status" character varying(50) COLLATE pg_catalog."default",
    "Grade" character varying(20) COLLATE pg_catalog."default",
    "Comments/Feedback" character varying(100) COLLATE pg_catalog."default"
)

TABLESPACE pg_default;

ALTER TABLE public."Courses"
    OWNER to postgres;

****************************************


-- Table: public.newcourses

-- DROP TABLE public.newcourses;

CREATE TABLE public.newcourses
(
    coursecodeid integer NOT NULL,
    description character varying(50) COLLATE pg_catalog."default",
    credits integer,
    status character varying(50) COLLATE pg_catalog."default",
    grade character varying(20) COLLATE pg_catalog."default",
    commentsfeedback character varying(100) COLLATE pg_catalog."default",
    CONSTRAINT newcourses_pkey PRIMARY KEY (coursecodeid)
)

TABLESPACE pg_default;

ALTER TABLE public.newcourses
    OWNER to postgres;

******************************************

-- Table: public.stores

-- DROP TABLE public.stores;

CREATE TABLE public.stores
(
    productid integer NOT NULL,
    productname character varying(100) COLLATE pg_catalog."default",
    piecesperpack integer,
    managerid integer,
    CONSTRAINT stores_pkey PRIMARY KEY (productid),
    CONSTRAINT stores_managerid_fkey FOREIGN KEY (managerid)
        REFERENCES public.newcourses (coursecodeid) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
)

TABLESPACE pg_default;

ALTER TABLE public.stores
    OWNER to postgres;






****I am not sure if these are the things that I need to put inside the myDB.sql******