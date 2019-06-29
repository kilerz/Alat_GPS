--
-- PostgreSQL database dump
--

-- Dumped from database version 10.9 (Ubuntu 10.9-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.9 (Ubuntu 10.9-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: gps; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.gps (
    id integer NOT NULL,
    "Brand_GPS" character varying(100),
    "Model_GPS" character varying(100),
    "Waranty_month" character varying(2),
    "Buy_date" date,
    sold_date date,
    "Sold_to" character varying(100),
    "Photo" character varying(255),
    "Description" text,
    dokumentasi text,
    "GPS_name" character varying(100)
);


ALTER TABLE public.gps OWNER TO postgres;

--
-- Name: GPS_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public."GPS_id_seq"
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."GPS_id_seq" OWNER TO postgres;

--
-- Name: GPS_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public."GPS_id_seq" OWNED BY public.gps.id;


--
-- Name: profile; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.profile (
    id character varying(100) NOT NULL,
    nama character varying(100),
    alamat text,
    no_hp character varying(15)
);


ALTER TABLE public.profile OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.profile_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.profile_id_seq OWNER TO postgres;

--
-- Name: profile_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.profile_id_seq OWNED BY public.profile.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(100),
    password character varying(255),
    id_profile character varying(100),
    level_users integer
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: COLUMN users.level_users; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.users.level_users IS '1 = Admin Panel , 2 = User Panel';


--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: gps id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.gps ALTER COLUMN id SET DEFAULT nextval('public."GPS_id_seq"'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: gps; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.gps (id, "Brand_GPS", "Model_GPS", "Waranty_month", "Buy_date", sold_date, "Sold_to", "Photo", "Description", dokumentasi, "GPS_name") FROM stdin;
34	1	2	4	2019-06-10	2019-06-26	5	1561747112568.jpg	6	1	3
35	1	2	4	2019-06-13	2019-06-21	5	1561747141459.jpg	6	7	3
37	1a	2a	4	2019-06-23	2019-06-30	5a	1561748929517.jpg	6a	5a	3a
\.


--
-- Data for Name: profile; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.profile (id, nama, alamat, no_hp) FROM stdin;
PR-O0001			
PR-O0002	User Panel	Jl. Mangga Pekanbaru	082929292213
PR-O0003			
PR-O0004			
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, username, password, id_profile, level_users) FROM stdin;
11	admin	$2y$10$ULcNmzDgwykSKd9Mvz3JHeqTxmwzJQpmuFq2Zn3LwXG1vdbS0XyTi	PR-O0001	1
12	user	$2y$10$kZgWuTP5wXxs7eWMf7w2oeEIrFDYVJORrcpYZTDjRmbdQEY5zUfOm	PR-O0002	2
\.


--
-- Name: GPS_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public."GPS_id_seq"', 37, true);


--
-- Name: profile_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.profile_id_seq', 1, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 14, true);


--
-- Name: gps GPS_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.gps
    ADD CONSTRAINT "GPS_pkey" PRIMARY KEY (id);


--
-- Name: profile profile_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.profile
    ADD CONSTRAINT profile_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

