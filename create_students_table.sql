DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int unsigned NOT NULL auto_increment,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `group_number` varchar(255),
  `points` int,
  PRIMARY KEY (`id`)
);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Michelle", "Fry", "UX2871", 240),
  ("Boris", "Mcintosh", "FW8247", 291),
  ("Martena", "Black", "VE3632", 298),
  ("Clayton", "Wise", "XZ1325", 275),
  ("Brian", "Herrera", "LO9853", 253),
  ("Aretha", "Leonard", "BZ0585", 213),
  ("Mufutau", "Noble", "GD3783", 271),
  ("Bert", "Houston", "WX2192", 158),
  ("Derek", "Gross", "US3215", 182),
  ("Camille", "Guerra", "MM4646", 239);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Rhoda", "Fitzgerald", "SA5197", 208),
  ("Deacon", "Mason", "YK7127", 220),
  ("Marah", "Vasquez", "QK2467", 294),
  ("Sonia", "David", "GF2618", 182),
  ("Vaughan", "Mcfarland", "LK3125", 251),
  ("Evangeline", "Campbell", "FL8577", 283),
  ("Jasmine", "Morrow", "AW7625", 199),
  ("Hamish", "Mendoza", "GF8450", 282),
  ("Levi", "Mooney", "SH6603", 261),
  ("Azalia", "Camacho", "MR5354", 244);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Declan", "Howard", "GS7792", 206),
  ("Damon", "Austin", "YF6552", 298),
  ("Cole", "Sullivan", "MJ0154", 167),
  ("Cathleen", "Yates", "DR1244", 212),
  ("Zahir", "Wolf", "WB7984", 221),
  ("Ulric", "Porter", "AQ7212", 251),
  ("Josephine", "Weber", "EY1556", 169),
  ("Castor", "Mcdowell", "XM4042", 153),
  ("Lars", "Duffy", "NZ8362", 183),
  ("Forrest", "Mcintosh", "KG5191", 283);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Damon", "Gilliam", "AE2339", 181),
  ("Nero", "Hopper", "VJ1564", 254),
  ("Grant", "Delacruz", "JT2463", 197),
  ("Carl", "Alford", "SL9191", 216),
  ("Mariko", "Mcbride", "MX0316", 289),
  ("Dominique", "Rich", "QX1296", 170),
  ("Kevin", "Hardin", "NW4980", 187),
  ("Yetta", "Hodges", "UK8804", 183),
  ("Jessamine", "Clark", "LC3838", 249),
  ("Maite", "Macdonald", "JX1687", 287);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Chloe", "Petty", "PN3173", 167),
  ("Dustin", "Christensen", "TV0483", 300),
  ("Connor", "Golden", "PY3651", 254),
  ("Shellie", "Jennings", "BD7631", 163),
  ("Abraham", "Abbott", "CG2174", 248),
  ("Oren", "Wynn", "CN6837", 290),
  ("Jeanette", "Stark", "UG2552", 213),
  ("Burton", "Flores", "QN2126", 283),
  ("Chester", "Holt", "QJ5453", 283),
  ("Kessie", "Booker", "QU7516", 166);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Phoebe", "Mathews", "IK9898", 165),
  ("Leigh", "Maddox", "QI6625", 265),
  ("Kyle", "Hicks", "VQ3218", 283),
  ("Addison", "Workman", "ZH8262", 280),
  ("Rose", "Finley", "TG3191", 278),
  ("Ivory", "Roman", "NE3173", 224),
  ("Yvette", "Perry", "AR2171", 288),
  ("Quentin", "Howard", "FY5988", 246),
  ("Joel", "Key", "LY2599", 241),
  ("Kellie", "Hardy", "IW5543", 236);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Mikayla", "Shelton", "RZ3462", 185),
  ("Judah", "Hodge", "WN6678", 154),
  ("Zenaida", "Pope", "FI6116", 275),
  ("Elton", "Christensen", "JG6803", 184),
  ("Harriet", "Shields", "OC4265", 263),
  ("Amir", "Pace", "BT4232", 194),
  ("Janna", "Yang", "PS0841", 248),
  ("Ella", "Estes", "IT1540", 236),
  ("Mia", "Coleman", "ME7364", 241),
  ("Addison", "Brennan", "RH8585", 284);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Felicia", "Shaffer", "XU1371", 276),
  ("Chaim", "Norman", "NK4323", 153),
  ("Hannah", "Ramirez", "DH0122", 273),
  ("Hiram", "Villarreal", "AP8561", 245),
  ("Walter", "Kelly", "HF2546", 178),
  ("Larissa", "Warner", "YK7961", 299),
  ("Gay", "Everett", "MR9033", 229),
  ("Jasmine", "Mcintosh", "LU5437", 242),
  ("Suki", "Goodwin", "HQ4055", 281),
  ("Armand", "Cohen", "LN5545", 245);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Cheryl", "Bullock", "SO4657", 254),
  ("Kuame", "Weiss", "SZ3741", 209),
  ("Kristen", "Glass", "JT7665", 154),
  ("Bethany", "Weiss", "JU3769", 256),
  ("Charissa", "Noel", "EW6625", 199),
  ("Chancellor", "Wolfe", "GP6017", 281),
  ("Barclay", "Peters", "DU8257", 242),
  ("Brian", "Britt", "BN1744", 283),
  ("Tallulah", "Steele", "FV8840", 259),
  ("Jayme", "Horne", "SV3126", 193);
INSERT INTO `students` (
    `first_name`,
    `last_name`,
    `group_number`,
    `points`
  )
VALUES ("Deacon", "Park", "LI1188", 298),
  ("Acton", "Alvarez", "DN9744", 161),
  ("Randall", "Baird", "QE2176", 180),
  ("Anthony", "Roberts", "LB4435", 160),
  ("Sade", "Coleman", "XJ8031", 238),
  ("Theodore", "Boyer", "UC3650", 187),
  ("Plato", "Phillips", "JR5732", 162),
  ("Howard", "Ross", "SY8720", 300),
  ("Lesley", "Patrick", "HR5367", 198),
  ("Valentine", "Decker", "OH1571", 208);