create Database nanteDATA;

create table personne (
    idpersonne serial primary key,
    email varchar(50),
    mdp varchar(50),
    nom varchar(50),
    date_naissance date,
    est_admin boolean default false
);

create table categorie (
    idcategorie serial primary key,
    nom varchar(50)
);

create table objects (
    idobject serial primary key,
    idpersonne int,
    idcategorie int,
    nom varchar(50),
    descriptions varchar(100),
    photos varchar(100),
    prix_estimatif double precision,
    foreign key (idpersonne) references personne(idpersonne),
    foreign key (idcategorie) references categorie(idcategorie)
);

create table proposition (
    idproposition serial primary key,
    idproposeur int,
    iddestinateur int,
    obj_proposeur int,
    obj_destinateur int,
    accepter boolean default false,
    foreign key (idproposeur) references personne(idpersonne),
    foreign key (iddestinateur) references personne(idpersonne),
    foreign key (obj_proposeur) references objects(idobject),
    foreign key (obj_destinateur) references objects(idobject)
);

create table actions (
    idaction serial primary key,
    libelle varchar(50),
    proposeur int,
    destinateur int,
    obj_proposeur int,
    obj_destinateur int,
    dates datetime default now(),
    foreign key (proposeur) references personne(idpersonne),
    foreign key (destinateur) references personne(idpersonne),
    foreign key (obj_proposeur) references objects(idobject),
    foreign key (obj_destinateur) references objects(idobject)
);

insert into personne values (default,'admin@gmail.com','1234','admin','2023-02-07',true);
insert into personne values (default,'jean@gmail.com','1234','jean','2023-02-07',default);
insert into personne values (default,'ben@gmail.com','1234','ben','2023-02-07',default);

insert into categorie values (default,'vetement');
insert into categorie values (default,'livre');
insert into categorie values (default,'DVD');
insert into categorie values (default,'meuble');

insert into objects values (default,2,1,"Tee-shirt","un bon tee-shirt","teesh.jpg",5000);
insert into objects values (default,2,2,"godassy","tester","foot.jpg",7000);
insert into objects values (default,2,3,"Montre","a regarder !","montre.jpg",5000);
insert into objects values (default,3,4,"Airpods","bonne ecoute","airpods.jpg",100000);
insert into objects values (default,3,4,"parfum","bien doux","parfum.jpg",100000);
insert into objects values (default,3,2,"ordinateur","puissant","puissant.jpg",100000);

delete from proposition where obj_destinateur = '%s' or obj_proposeur = '%s';