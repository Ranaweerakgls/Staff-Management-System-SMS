
/*Student Table*/
create table Student(
S_ID char(12),
F_name char(22),
L_name char(22),
NIC char(18),
S_Address varchar(50),
DOB char(10),
Mail varchar(30),
Faculty varchar(10),
A_year char(6),
constraint Student_PK primary key(S_ID)
);

/*inser data in student table*/

insert into Student values('IT23191310','Nimasha','Karunarathna','200212478941','180/C,Kandy road mawanella','2002/08/01','IT23191310@enigma.com','FOC','Y1S2');
insert into Student values('IT23409064','Lakshika','Ranaweera','200278803481','170/A,Kandy road Pilimathalawa','2002/07/02','IT234090640@enigma.com','FOC','Y1S1');
insert into Student values('IT23222168','Ashi','Bandara','200365613204','280/C,Kandy road katugatthota','2003/05/05','IT23222168@enigma.com','FOC','Y1S2');

/*Create lecture table*/
create table Lecture(
L_ID char(12),
FU_name char(22),
Faculty char(10),
Mail varchar(30),
constraint Lecture_PK primary key(L_ID)
);

/*insert data in lecture table*/
insert into Lecture values('LE12345678','Dissanayaka','FOC','LE12345678@enigma.com');
insert into Lecture values('LE21547825','Ranaweera','FOB','LE21547825@enigma.com');
insert into Lecture values('LE78512632','Bandara','FOE','LE78512632@enigma.com');

/*Creat Student phones*/

create table Student_phone(
S_ID char(12),
phone int,
constraint Student_phone primary key(S_ID)
);

/*Insert data in table*/
insert into Student_phone values('IT23191310',0757189312);
insert into Student_phone values('IT23409064',0787895233);
insert into Student_phone values('IT23222168',0758163263);

/*Create counsellor table*/

create table Counsellor(
C_ID char(12),
FU_name char(22),
Mail varchar(30),
constraint Coumsellor_PK primary key(C_ID)
);

/*insert data in table*/

insert into Counsellor values('CO12345678','Amarasena','CO12345678@enigma.com');
insert into Counsellor values('CO25478924','Liyanage','CO12345678@enigma.com');


/*Create table Admin*/
create table System_Admin(
A_ID char(12),
FU_name char(22),
Mail varchar(30),
constraint System_Admin_PK primary key(A_ID)
);

/*insert data in table*/
insert into System_Admin values('AD14757895','Amila','AD14757895@enigma.com');
insert into System_Admin values('AD54789215','Bhagya','AD54789215@enigma.com');

/*Create table Exam department*/
create table Exam_department(
EM_ID char(12),
FU_name char(22),
Mail varchar(30),
constraint Exam_department_PK primary key(EM_ID)
);

/*insert data in table*/
insert into Exam_department values('ED24578953','Deshan','ED24578953@enigma.com');
insert into Exam_department values('ED24578924','Kasun','ED24578924@enigma.com');

/*Create table IT department*/
create table IT_department(
ITM_ID char(12),
FU_name char(22),
Mail varchar(30),
constraint IT_department_PK primary key(ITM_ID)
);

/*insert data in table*/
insert into IT_department values('ID24579852','Kumara','ID24579852@enigma.com');
insert into IT_department values('ID24785921','Amal','ID24785921@enigma.com');


/*Create table Account*/
create table Account(
Username varchar(30),
U_Password varchar(35),
U_ID char(13),
U_type char(10),
constraint Account_PK primary key(Username)
);

/*insert data in table*/
insert into Account values('ID24579852@enigma.com','password','ID24579852','ID');
insert into Account values('ED24578924@enigma.com','maru','ED24578924','ED');
insert into Account values('IT23191310@enigma.com','abcd','IT23191310','IT');
insert into Account values('AD14757895@enigma.com','password','AD14757895','AD');
insert into Account values('CO12345678@enigma.com','pword','CO12345678','CO');
insert into Account values('LE12345678@enigma.com','abcid','LE12345678','LE');



/*Create table Knowlagebase*/
create table Knowlagebase(
KBID char(20),
Document varchar(3000),
A_ID char(13),
ITM_ID char(12),
constraint Knowlagebase_PK primary key(KBID),
constraint Knowlagebase_FK1 foreign key(A_ID) references System_Admin(A_ID),
constraint Knowlagebase_FK2 foreign key(ITM_ID) references IT_department(ITM_ID)
);

/*insert data in table*/
insert into Knowlagebase values('KB123','sementer registration','AD14757895','ID24579852');
insert into Knowlagebase values('KB245','prorata','AD54789215','ID24785921');

/*Create table progress_track*/
create table Progress_track(
PID char(20),
P_Status varchar(50),
S_ID char(13),
ITM_ID char(12),
EM_ID char(12),
C_ID char(12),
L_ID char(12),
constraint Progress_track_PK primary key(PID),
constraint Progress_track_S_ID_FK1 FOREIGN KEY(S_ID) REFERENCES Student(S_ID)
);

/*insert data in table*/
insert into Progress_track values('PT1234','pending','IT23191310','ID24579852','','','');
insert into Progress_track values('PT2456','Viewd','IT23409064','','ED24578924','','');

/*Create table EXticket*/
create table EX_ticket(
EXID int primary key auto_increment,
Fl_name char(50),
S_ID char(12),
mail varchar(30),
Faculty char(30),
E_Description varchar(100)
);

/*insert data in table*/
insert into EX_ticket values('','Nimasha','IT23191310','IT23191310@engigma.com','FOC','IC');
insert into EX_ticket values('','Ashi','IT23222168','IT23222168@enigma','FOB','medical');


/*Create table ITticket*/
create table IT_ticket(
TID int primary key auto_increment,
Ful_Name char(50),
S_ID char(12),
mail varchar(30),
T_Description varchar(100),
Faculty char(20)
);

/*insert data in table*/
insert into IT_ticket values('','Nimasha','IT23191310','IT23191310@engigma.com','login issu','FOC');
insert into IT_ticket values('','Ashi','IT23222168','IT23222168@enigma','password issu','FOB');


/*Create table Lappointment*/
create table L_Appointment(
AID int primary key auto_increment,
L_Subject char(30),
F_name char(30),
mail varchar(30),
L_Description varchar(100),
S_ID char(12),
L_ID char(12),
L_Date char(12),
Approve char(10),
Reject char(10),
constraint L_Appointment_S_ID_FK foreign key(S_ID) references Student(S_ID)
);

/*insert data in table*/
insert into L_Appointment values('','SPM','Dissanayaka','IT23191310@enigma.com','lecture 4','IT23191310','LE12345678','2024/5/3','Approvr','');
insert into L_Appointment values('','ISDM','Bandara','IT23409064@enigma.com','lecture2','IT23409064','LE21547825','2024/5/2','','Reject');

/*Create table Cappointment*/
create table C_Appointment(
AID int primary key auto_increment,
C_Subject char(30),
F_name char(30),
mail varchar(30),
C_Description varchar(100),
S_ID char(12),
C_ID char(12),
C_Date char(12),
Approve char(10),
Reject char(10),
constraint C_Appointment_S_ID_FK foreign key(S_ID) references Student(S_ID)
);

/*insert data in table*/
insert into C_Appointment values('','Mental','NImasha','IT23191310@enigma.com','Mental ','IT23191310','CO12345678','2024/5/6','Approvr','');
insert into C_Appointment values('','Stress','Lakshika','IT23409064@enigma.com','Academic','IT23409064','CO25478924','2024/5/8','','Reject');


