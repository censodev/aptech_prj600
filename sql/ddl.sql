create table injection_sites
(
    id          int auto_increment,
    name        varchar(255)  null,
    province_id int           null,
    district_id int           null,
    status      int default 1 null,
    constraint injection_sites_id_uindex
        unique (id)
);

alter table injection_sites
    add primary key (id);

create table master_country
(
    id   int                       not null,
    code varchar(10) charset utf8  null,
    name varchar(100) charset utf8 null,
    constraint master_country_id_uindex
        unique (id)
);

alter table master_country
    add primary key (id);

create table master_district
(
    id            int                       not null,
    name          varchar(100) charset utf8 null,
    code          varchar(10) charset utf8  null,
    origin_id     int                       null,
    short_name    varchar(100) charset utf8 null,
    signless_name varchar(100) charset utf8 null,
    `rank`        varchar(100) charset utf8 null,
    province_id   int                       null,
    constraint master_province_id_uindex
        unique (id)
);

alter table master_district
    add primary key (id);

create table master_nation
(
    id   int                       not null,
    name varchar(100) charset utf8 null,
    constraint master_nation_id_uindex
        unique (id)
);

alter table master_nation
    add primary key (id);

create table master_province
(
    id            int                       not null,
    name          varchar(100) charset utf8 null,
    code          varchar(10) charset utf8  null,
    origin_id     int                       null,
    regions       varchar(10) charset utf8  null,
    short_name    varchar(100) charset utf8 null,
    signless_name varchar(100) charset utf8 null,
    `rank`        varchar(100) charset utf8 null,
    constraint master_province_id_uindex
        unique (id)
);

alter table master_province
    add primary key (id);

create table master_ward
(
    id            int          not null,
    district_id   int          null,
    name          varchar(100) null,
    `rank`        varchar(100) null,
    code          varchar(10)  null,
    origin_id     int          null,
    short_name    varchar(100) null,
    signless_name varchar(100) null,
    province_id   int          null,
    constraint master_ward_id_uindex
        unique (id)
);

alter table master_ward
    add primary key (id);

create table profiles
(
    id                int auto_increment,
    full_name         varchar(255)  null,
    identity_card     varchar(20)   null,
    gender            int           null,
    country_id        int           null,
    nation_id         int           null,
    birthday          date          null,
    career            varchar(100)  null,
    workspace         varchar(255)  null,
    province_id       int           null,
    district_id       int           null,
    injection_site_id int           null,
    vaccine_id        int           null,
    injection_date    date          null,
    phone             varchar(20)   null,
    user_id           int           null,
    status            int default 0 null,
    ward_id           int           null,
    address           varchar(100)  null,
    screen_test       varchar(255)  null,
    symptom           text          null,
    appointment_date  date          null,
    constraint profiles_id_uindex
        unique (id)
);

create index profiles_identity_card_index
    on profiles (identity_card);

alter table profiles
    add primary key (id);

create table users
(
    id       int auto_increment,
    phone    varchar(20) charset utf8  not null,
    password varchar(255) charset utf8 null,
    constraint users_id_uindex
        unique (id),
    constraint users_phone_uindex
        unique (phone)
);

alter table users
    add primary key (id);

create table vaccines
(
    id             int auto_increment,
    name           varchar(200) charset utf8 null,
    lot            varchar(20) charset utf8  null,
    producer       varchar(100) charset utf8 null,
    supplier       varchar(100) charset utf8 null,
    doses          int                       null,
    expire_date    date                      null,
    consumed_doses int default 0             null,
    constraint vaccines_id_uindex
        unique (id)
);

alter table vaccines
    add primary key (id);

