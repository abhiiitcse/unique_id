create table server_name(name varchar(8) NOT NULL,ipaddr varchar(20) NOT NULL,startrange1 varchar(10)NOT NULL,lastrange1 varchar(10)NOT NULL,startrange2 varchar(10)NOT NULL,lastrange2 varchar(10)NOT NULL,startrange3 varchar(10)NOT NULL,lastrange3 varchar(10)NOT NULL,startrange4 varchar(10)NOT NULL,lastrange4 varchar(10)NOT NULL)


->insert into server_name(name,ipaddr,startrange1,lastrange1,startrange2,lastrange2,startrange3,lastrange3,startrange4,lastrange4)
				VALUES("server 1","117.96.194.239","0","500000","2000000","4000000","10000000","50000000","200000000","300000000");

->insert into server_name(name,ipaddr,startrange1,lastrange1,startrange2,lastrange2,startrange3,lastrange3,startrange4,lastrange4)
				VALUES("server 2","117.96.194.239","500000","1000000","4000000","6000000","50000000","100000000","300000000","400000000");

->insert into server_name(name,ipaddr,startrange1,lastrange1,startrange2,lastrange2,startrange3,lastrange3,startrange4,lastrange4)
				VALUES("server 3","117.96.194.239","1000000","1500000","6000000","8000000","100000000","150000000","400000000","500000000");

->insert into server_name(name,ipaddr,startrange1,lastrange1,startrange2,lastrange2,startrange3,lastrange3,startrange4,lastrange4)
				VALUES("server 4","117.96.194.239","1500000","2000000","8000000","10000000","150000000","200000000","500000000","600000000");



