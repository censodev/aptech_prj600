create table master_nation
(
    id   int                       not null,
    name varchar(100) charset utf8 null,
    constraint master_nation_id_uindex
        unique (id)
);

alter table master_nation
    add primary key (id);

INSERT INTO vms.master_nation (id, name) VALUES (1, 'Kinh');
INSERT INTO vms.master_nation (id, name) VALUES (2, 'Tày');
INSERT INTO vms.master_nation (id, name) VALUES (3, 'Thái');
INSERT INTO vms.master_nation (id, name) VALUES (4, 'Hoa');
INSERT INTO vms.master_nation (id, name) VALUES (5, 'Khơ-me');
INSERT INTO vms.master_nation (id, name) VALUES (6, 'Mường');
INSERT INTO vms.master_nation (id, name) VALUES (7, 'Nùng');
INSERT INTO vms.master_nation (id, name) VALUES (8, 'HMông');
INSERT INTO vms.master_nation (id, name) VALUES (9, 'Dao');
INSERT INTO vms.master_nation (id, name) VALUES (10, 'Gia-rai');
INSERT INTO vms.master_nation (id, name) VALUES (11, 'Ngái');
INSERT INTO vms.master_nation (id, name) VALUES (12, 'Ê-đê');
INSERT INTO vms.master_nation (id, name) VALUES (13, 'Ba na');
INSERT INTO vms.master_nation (id, name) VALUES (14, 'Xơ-Đăng');
INSERT INTO vms.master_nation (id, name) VALUES (15, 'Sán Chay');
INSERT INTO vms.master_nation (id, name) VALUES (16, 'Cơ-ho');
INSERT INTO vms.master_nation (id, name) VALUES (17, 'Chăm');
INSERT INTO vms.master_nation (id, name) VALUES (18, 'Sán Dìu');
INSERT INTO vms.master_nation (id, name) VALUES (19, 'Hrê');
INSERT INTO vms.master_nation (id, name) VALUES (20, 'Mnông');
INSERT INTO vms.master_nation (id, name) VALUES (21, 'Ra-glai');
INSERT INTO vms.master_nation (id, name) VALUES (22, 'Xtiêng');
INSERT INTO vms.master_nation (id, name) VALUES (23, 'Bru-Vân Kiều');
INSERT INTO vms.master_nation (id, name) VALUES (24, 'Thổ');
INSERT INTO vms.master_nation (id, name) VALUES (25, 'Giáy');
INSERT INTO vms.master_nation (id, name) VALUES (26, 'Cơ-tu');
INSERT INTO vms.master_nation (id, name) VALUES (27, 'Gié Triêng');
INSERT INTO vms.master_nation (id, name) VALUES (28, 'Mạ');
INSERT INTO vms.master_nation (id, name) VALUES (29, 'Khơ-mú');
INSERT INTO vms.master_nation (id, name) VALUES (30, 'Co');
INSERT INTO vms.master_nation (id, name) VALUES (31, 'Tà-ôi');
INSERT INTO vms.master_nation (id, name) VALUES (32, 'Chơ-ro');
INSERT INTO vms.master_nation (id, name) VALUES (33, 'Kháng');
INSERT INTO vms.master_nation (id, name) VALUES (34, 'Xinh-mun');
INSERT INTO vms.master_nation (id, name) VALUES (35, 'Hà Nhì');
INSERT INTO vms.master_nation (id, name) VALUES (36, 'Chu ru');
INSERT INTO vms.master_nation (id, name) VALUES (37, 'Lào');
INSERT INTO vms.master_nation (id, name) VALUES (38, 'La Chí');
INSERT INTO vms.master_nation (id, name) VALUES (39, 'La Ha');
INSERT INTO vms.master_nation (id, name) VALUES (40, 'Phù Lá');
INSERT INTO vms.master_nation (id, name) VALUES (41, 'La Hủ');
INSERT INTO vms.master_nation (id, name) VALUES (42, 'Lự');
INSERT INTO vms.master_nation (id, name) VALUES (43, 'Lô Lô');
INSERT INTO vms.master_nation (id, name) VALUES (44, 'Chứt');
INSERT INTO vms.master_nation (id, name) VALUES (45, 'Mảng');
INSERT INTO vms.master_nation (id, name) VALUES (46, 'Pà Thẻn');
INSERT INTO vms.master_nation (id, name) VALUES (47, 'Co Lao');
INSERT INTO vms.master_nation (id, name) VALUES (48, 'Cống');
INSERT INTO vms.master_nation (id, name) VALUES (49, 'Bố Y');
INSERT INTO vms.master_nation (id, name) VALUES (50, 'Si La');
INSERT INTO vms.master_nation (id, name) VALUES (51, 'Pu Péo');
INSERT INTO vms.master_nation (id, name) VALUES (52, 'Brâu');
INSERT INTO vms.master_nation (id, name) VALUES (53, 'Ơ Đu');
INSERT INTO vms.master_nation (id, name) VALUES (54, 'Rơ măm');
INSERT INTO vms.master_nation (id, name) VALUES (55, 'Người nước ngoài');
INSERT INTO vms.master_nation (id, name) VALUES (56, 'Không rõ');