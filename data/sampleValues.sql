use gymdb;
insert into `user` (Email, `Password`) values ("admin@gmail.com", "Password");
insert into `user` (Email, `Password`) values ("user@gmail.com", "Password");
insert into `admin` (UserID) value (1);
insert into cust (Fname, Sname, DOB, EirCode, Phone, UserID) values ("David", "Thornton", '2003-10-01', 'B16W375', 0862268473, 2);
insert into gallary (ImageLink) values ("blabla");
insert into lessons (LessonName, DurationMin, NumPlaces, Trainer, About, ImageID) values ("Spin", 60, 24, "Bob Ross", "BlaBlaBal", 1),
insert into lessons (LessonName, DurationMin, NumPlaces, Trainer, About, ImageID) values ("Yoga", 30, 24, "Daniel Connors", "BlaBlaBal", 1);
insert into `lesson-time` (`Time`, `Day`, LessonID) values ('19:30:00', 1, 1);
insert into `booked-lesson` (LessonTimeID, UserID) values (1, 2);
insert into `products` (ProductName, Price, `Description`, Size, Colour, ImageID) values ("Hoodie", 30, "BlaBlaBla", "Medium", "Red",1);
insert into orders (UserID, ProductID, OrderTime) value (2, 1, '2024-04-05 20:30:23');
