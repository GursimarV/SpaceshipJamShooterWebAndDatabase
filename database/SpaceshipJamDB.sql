create TABLE player(
	id int AUTO_INCREMENT,
	username varchar(25) NOT NULL,
	password varchar(16) NOT NULL,
	primary key (id)
);

create TABLE playerinfo(
	id int,
	score int,
	foreign key (id) references player(id)
);

create TABLE friendinfo(
	friend_id int(3) NOT NULL,
	score int,
	foreign key (friend_id) references player(id)
);