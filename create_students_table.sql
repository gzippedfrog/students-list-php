DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `first_name` varchar(255) default NULL,
  `last_name` varchar(255) default NULL,
  `group_number` varchar(255),
  `points` mediumint default NULL,
  `hash` varchar(255),
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Myles","Williamson","WH2207",239,"fnd34d31djl11f17rxs78x10ajr30n08"),
  ("Harriet","Compton","EM2345",260,"ljh34k36oxu68b20tzo20u11inn72p51"),
  ("Hermione","Mcleod","BX2537",197,"arb17u83aoz32p18yai35y73aek80b28"),
  ("Chava","Deleon","DG4331",208,"vuo22t73wch75w80ejo98b52puj18i84"),
  ("Felix","Shepard","PJ8496",221,"etv58j51aeg55n61fyr68p61gkc81x18"),
  ("Rhoda","Galloway","MP7863",197,"rhj46m79ieq81e74wcc57r15ute16m08"),
  ("Austin","Ashley","MH2337",154,"gaj23m76rpr13h94nrb32x23iug89e47"),
  ("Kennan","Anthony","MU2612",171,"kbh14h78gmv44m76orx91t70nfg62k82"),
  ("Bernard","Green","HK9664",157,"tyb93u68akj84p23jfm25o95tyt49v11"),
  ("Galena","Mcneil","VV4818",173,"sky58w68efe78s25bct06a62egb61q43");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Basia","Mason","WH2926",296,"abu51k51imi73v72mas63p84kfu14m36"),
  ("Jemima","Allison","BA9623",196,"yzg55o17qbv26s76euc16k96kcq23x51"),
  ("Alice","Russo","YD2005",212,"mjd35u14fcq95r75xts60m86fhs48m57"),
  ("Guinevere","Parker","LJ5588",291,"ehu73n41hcy63o15yuy02z20khi85b22"),
  ("Octavia","Sanchez","QN6668",257,"goc24v52csq22b87tln38m21syu64e17"),
  ("Neil","Ramirez","VU1544",257,"tkx12y14gtk95j02rso74g57mui25y33"),
  ("Orla","Cortez","EU2247",255,"bwn43f37gwh89t50hnq53j75rjj17e31"),
  ("Deacon","Wilder","ID0213",176,"izl57j27ddb64h68kzh41h36blx50m88"),
  ("Risa","Sargent","FC1177",246,"eru64s54grd34d31ooj44h98ztt17p78"),
  ("Pandora","Rodriguez","OG8038",210,"naj76o07gzj61j18zlh84g04zgw13n74");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Zorita","Boyd","XN7109",239,"jkl57v36vwg27k13trq72j14juo28e27"),
  ("Nathan","Booker","KT6416",183,"vlw34j63gnl79z64cbf20o19abx16b05"),
  ("Preston","Bond","TM2483",231,"rpc22m27rft83t18scs86c87qop62s66"),
  ("Plato","Booker","BN8517",235,"cyy76w54krt35i43jwn35b58wie92m65"),
  ("Nichole","Frye","BK5256",209,"krb69k59dmh75m54whw85c16sbs08t33"),
  ("Channing","Larson","UH1486",293,"iot15r81zst22o35pqu84u14yem68p89"),
  ("Shea","Sheppard","VN9965",202,"nhg36c60ymu15u69obw42f05qrx84q47"),
  ("Wyatt","Byrd","DC2432",298,"bhg26f87nug66u04ymd70j44jow84g64"),
  ("Dillon","Delacruz","UR4163",266,"dpj42c20fdb12m68rae36d44yrq08r36"),
  ("Warren","Ortiz","ZZ4583",236,"vdk78r23phu98b53pux67q83koa81o05");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Joseph","Stark","WS1144",188,"wum67c18vsi17y39zfj85x05ldm75n38"),
  ("Vivian","Bruce","RG8222",182,"riz00e47bry44u94ggq70g38its62z16"),
  ("Christopher","Collier","XC4763",192,"zjr20q66ohw43r40syj78j87yhl34e18"),
  ("Jolene","Holt","DI5218",200,"ryk83v66ipc36e95kzq29q57tah17q22"),
  ("Justin","Thompson","BJ3655",292,"vek86m57jhj63q34zrl52o66ikc61o15"),
  ("Damian","Massey","WJ3998",184,"tka82m96gge28u37vcw38h22ocw66t04"),
  ("Leroy","Watkins","PP3277",294,"rtc28m76arw93g71ioe13u43mha26t30"),
  ("Heidi","Cantu","BC5377",273,"wtt71g84hek04b64iwy30b29lpv57n14"),
  ("Richard","Peterson","KW8502",298,"vot49x16qum83j55xmf37x37khx12j50"),
  ("Rowan","Gilbert","BW6406",257,"blj45q78wdo90v76hrn15r88rpi05c73");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Cooper","Dominguez","MY8371",256,"hwn45f88kns55p97erq78d26bar29f65"),
  ("Rashad","Goodwin","JI4864",242,"qmo04m22dgi68s74kyr53c78ddx58n28"),
  ("Chantale","Larson","MK9547",246,"xbi68g37ihp85p35aer30s56enc69x53"),
  ("Kristen","Barker","WK9087",208,"jyj77c41ymn84z75njb89h27ops42x14"),
  ("Otto","Prince","LD8969",170,"wws18p64jwd67u46rec79n21gfw53d72"),
  ("Erasmus","Stanton","OI0823",273,"bws00j98lho85w79wuc52q25rmo32k07"),
  ("Carlos","Graham","RY0662",227,"xox49a67rgu55f51yqw23j71hpc93n73"),
  ("Abigail","Burton","LH2132",295,"knf49q85ifl68y31fph68g35coj55u62"),
  ("Tanya","Durham","PS4316",274,"rsn58s32hel61v34rne15u65wpe27o86"),
  ("Leigh","Wooten","SY9355",278,"ork76b01wiu55w31cve56e14kcx64q17");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Mara","Morris","NC8689",286,"qlg90u36uge43k34ird73h23esn30l60"),
  ("Joan","Sampson","KL4356",171,"nwo92q29rsl70u71etp52l34uqk77t13"),
  ("Ina","Fields","PE4154",176,"cwp26h31vbx78e54zwe67f63kxo95o82"),
  ("Odessa","Scott","GI4428",295,"rlr60j65ovi43b68jky76c69wjj35u83"),
  ("Ila","Witt","ME4374",227,"seq32y42ogx49o83fyh35l97tkz33i53"),
  ("Kylan","King","IB2851",196,"xbx49t59esn55p16mqo13s15rhf73k78"),
  ("India","Brown","HG2182",274,"dld26o11ttc85t95ryv30h33drb74h31"),
  ("Kermit","Mercer","KO7017",161,"kxk85j80rdg19c64uvv13j31gml53o47"),
  ("Zelda","Peck","OL5149",179,"zvp93h55iol45c46mur16h84tfm41o63"),
  ("Kalia","Gates","ME0547",201,"ijm68z35zrw54p62phu16w13vek69l81");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Lareina","Faulkner","YI2421",272,"ujz65e43bdh42c31oms39v38kqk97u35"),
  ("Mikayla","Daniels","NN4898",202,"qme14u52hhr16y65nvv70o69tfu00k94"),
  ("Gregory","Pruitt","UD1266",183,"kfu82v26shj70m52vwf32c65swx42b44"),
  ("Vaughan","Kane","QT5833",160,"kdz97w36trd63c11sdn49j25tns88t66"),
  ("Alfreda","Carroll","WJ8013",272,"mco52c26zix64w14ict27g56sla94n61"),
  ("George","Knight","MI4597",198,"npe73j86yvk43f24smg53v72gmx48w23"),
  ("Chaney","Jacobs","VV2525",278,"dqk34l00hcf46h41hfl60h92vud26p59"),
  ("Erich","Hatfield","IQ2511",158,"uin81c48ynu77d43pre82o57tuj60x21"),
  ("Rose","Jimenez","HF2611",270,"uvj48i11buk42w76wdx54n63wob62c37"),
  ("Jordan","Brewer","XI4577",292,"mdn13x88tmn56l10sco12p05vlv20p39");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Tashya","Perez","XX7783",237,"gvd83b41xog58q51vuq36k71xya54a43"),
  ("Idola","Zimmerman","YL3951",186,"gow54e21ewj54x71bmh22f78cql84d14"),
  ("Ashton","Sutton","ON8127",264,"gnu45b41jnn27w03fmy99p00zck97m62"),
  ("Abigail","Bradshaw","CR4266",191,"xgq92c91cow26i38lbt30q37hno36y56"),
  ("Deacon","Sharp","IC8577",264,"fwo35s73ety44m01njr83m38ndj95v02"),
  ("Timothy","Perez","BF7336",224,"bmm21n33okl04v35lwx13p15rkv07k25"),
  ("Tatiana","Taylor","FE6013",193,"rmo81s42ijn87y86wqj44j06wkv82r20"),
  ("Alika","Peters","PT3537",186,"izn82p49rnk71n76cic62j75jhn53x89"),
  ("Donna","Ingram","KD2291",284,"dcb71n36iyk33t44lvf33c52boe44f54"),
  ("Lillith","Ward","ID6346",244,"cga66v93yzp45f75buj67y72url48c66");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Hadassah","Rogers","TJ2153",222,"jug68i92nww48y53shy67x28ewx58s30"),
  ("Kato","Guthrie","DM6131",263,"xtt25z84kef23n46rdq03t86abx63r77"),
  ("April","Workman","MR9009",153,"kfp71u67nid72c13uie24x50jyt44f32"),
  ("Connor","Slater","YS2755",280,"hnh36h42vua64o84rws66c87kst94f57"),
  ("Yvonne","Mosley","VI6797",276,"pqx70n70cqs97i39znu48f65wus31o76"),
  ("Kim","Holt","CM8495",200,"xsx29a42hcs09w25ksz77o65ckb67l68"),
  ("Beck","Kidd","SL0552",240,"iyr05g18srr72f39mvn89u33byf70k58"),
  ("Gisela","Malone","II8043",175,"zqd61l44hiq46t22eqv85d38rtl53v51"),
  ("Cullen","Osborn","QO1194",251,"pyi60r67wrf76b84con11w25arp04c23"),
  ("Chaney","Lane","QO1346",160,"vfc48b17vro84x86sdl53p85klu95e30");
INSERT INTO `students` (`first_name`,`last_name`,`group_number`,`points`,`hash`)
VALUES
  ("Olympia","Lambert","BD4373",180,"mjp88c63ssx59k69ivd63h31ygh21v57"),
  ("Meredith","Vaughn","IY8838",188,"cnd37j16ufj79i01yqr76e50ule88b20"),
  ("Adam","Warren","OL7196",279,"gey53q87dzf45r57exb65f19omp45k69"),
  ("Kai","Bright","MN6487",178,"kne34w87ubs36j81xry53d77hpg78f65"),
  ("Georgia","Kidd","PP5841",164,"nnw63c73yju61b80htu80x84alq20u71"),
  ("Carolyn","Dalton","KH1911",278,"cio22r11gim57y14jgp47h38ujf64s42"),
  ("Eagan","Hebert","PT7266",180,"vxv71q20oqn23s61pds63r38gli51f29"),
  ("Malachi","Reynolds","YN4642",271,"auk61q99zpw33n93jkf88a21jgc43l83"),
  ("Serina","Bryant","PL4311",198,"ami22j78pgb88v13igs85v75ial17v71"),
  ("Marcia","Warren","FK4217",185,"kvw62w78chb75w70bkr65w16zji57s34");
