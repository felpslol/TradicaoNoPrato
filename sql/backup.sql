PGDMP  *                    |            Tradicaonoprato    16.3    16.3 
    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    24576    Tradicaonoprato    DATABASE     �   CREATE DATABASE "Tradicaonoprato" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Portuguese_Brazil.1252';
 !   DROP DATABASE "Tradicaonoprato";
                postgres    false            �            1259    24582    Restaurante    TABLE     �   CREATE TABLE public."Restaurante" (
    "ID_restaurant" integer NOT NULL,
    "Name" "char" NOT NULL,
    "Address" "char" NOT NULL,
    "Menu" bytea NOT NULL,
    "Rating" double precision[] NOT NULL,
    "Rating_Count" integer NOT NULL
);
 !   DROP TABLE public."Restaurante";
       public         heap    postgres    false            �            1259    24577    Usuario    TABLE     �   CREATE TABLE public."Usuario" (
    "ID_Usuario" integer NOT NULL,
    "Username" "char" NOT NULL,
    "Email" "char" NOT NULL
);
    DROP TABLE public."Usuario";
       public         heap    postgres    false            �          0    24582    Restaurante 
   TABLE DATA           m   COPY public."Restaurante" ("ID_restaurant", "Name", "Address", "Menu", "Rating", "Rating_Count") FROM stdin;
    public          postgres    false    216   �
       �          0    24577    Usuario 
   TABLE DATA           F   COPY public."Usuario" ("ID_Usuario", "Username", "Email") FROM stdin;
    public          postgres    false    215   �
                   2606    24588    Restaurante Restaurante_pkey 
   CONSTRAINT     k   ALTER TABLE ONLY public."Restaurante"
    ADD CONSTRAINT "Restaurante_pkey" PRIMARY KEY ("ID_restaurant");
 J   ALTER TABLE ONLY public."Restaurante" DROP CONSTRAINT "Restaurante_pkey";
       public            postgres    false    216                       2606    24581    Usuario Usuario_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public."Usuario"
    ADD CONSTRAINT "Usuario_pkey" PRIMARY KEY ("ID_Usuario");
 B   ALTER TABLE ONLY public."Usuario" DROP CONSTRAINT "Usuario_pkey";
       public            postgres    false    215            �      x������ � �      �      x������ � �     