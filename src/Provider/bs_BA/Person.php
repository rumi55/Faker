<?php

namespace Faker\Provider\bs_BA;

class Person extends \Faker\Provider\Person
{
    /**
     * @see https://fzs.ba/wp-content/uploads/2022/05/top-100-mu%C5%A1kih-imena-u-2021-1.pdf
     */
    protected static $firstNameMale = [
        'Davud', 'Ahmed', 'Hamza', 'Amar', 'Adin', 'Džan', 'Daris', 'Eman', 'Harun', 'Ali',
        'Adian', 'Imran', 'Dani', 'Omar', 'Emir', 'Tarik', 'Emin', 'Luka', 'Rejjan', 'Mak',
        'Vedad', 'Ajnur', 'Bilal', 'Jusuf', 'Muhamed', 'Josip', 'Ivan', 'Kenan', 'Kerim', 'Benjamin',
        'Adi', 'Ajdin', 'Zejd', 'Danin', 'Ismail', 'Omer', 'Arslan', 'Dženan', 'Mahir', 'Arman',
        'Ishak', 'Edin', 'Matej', 'Malik', 'Din', 'Faris', 'Petar', 'Fatih', 'Ibrahim', 'Armin',
        'Jakov', 'David', 'Ante', 'Emil', 'Filip', 'Marko', 'Rijad', 'Maid', 'Isak', 'Afan',
        'Leon', 'Anes', 'Adem', 'Adnan', 'Ammar', 'Džanan', 'Amer', 'Isa', 'Nedim', 'Adijan',
        'Anur', 'Mateo', 'Arian', 'Dino', 'Kan', 'Mihael', 'Haris', 'Rejan', 'Aldin', 'Alen',
        'Noa', 'Eldar', 'Mirza', 'Ajlan', 'Emrah', 'Ivano', 'Nikola', 'Abdullah', 'Danis', 'Mustafa',
        'Alem', 'Kaan', 'Liam', 'Toma', 'Ensar', 'Fran', 'Ismar', 'Karlo', 'Niko',
        'Abaz', 'Abdija', 'Abdulah', 'Abdulatif', 'Abdulaziz', 'Abdulhakim', 'Abdulhalim', 'Abdulhamid',
        'Abdulhasib', 'Abdulkadir', 'Abdurahim', 'Abdurahman', 'Abdureuf', 'Abid', 'Adem', 'Adil', 'Adnan',
        'Agan', 'Ajdin', 'Ajnur', 'Akif', 'Aladin', 'Alem', 'Alija', 'Alim', 'Aliosman', 'Almas',
        'Almir', 'Amar', 'Amel', 'Amer', 'Amil', 'Amir', 'Amsal', 'Anes', 'Arif', 'Arslan',
        'Asad', 'Asif', 'Asim', 'Atif', 'Atik', 'Azaudin', 'Azem', 'Azim', 'Azir', 'Aziz',
        'Fahrija', 'Fahro', 'Fahrudin', 'Fikret', 'Fikrija', 'Firdus', 'Fejzo', 'Fejzulah', 'Fetah',
        'Fuad', 'Fudo', 'Ragib', 'Raif', 'Redžo', 'Remzija', 'Reuf', 'Rifat', 'Rifet',
        'Sadik', 'Sakib', 'Salem', 'Salih', 'Samir', 'Sead', 'Selim', 'Sinan'
    ];


    protected static $firstNameFemale = [
        'Sara', 'Umihana', 'Merjem', 'Asja', 'Esma', 'Amina', 'Ema', 'Hana', 'Lejla', 'Lamija', 'Dalia',
        'Una', 'Iman', 'Adna', 'Ajla', 'Emina', 'Nejla', 'Ajša', 'Amna', 'Džejla', 'Ajna',
        'Ena', 'Ilma', 'Šejma', 'Dalija', 'Mia', 'Džana', 'Alina', 'Sajra', 'Marija', 'Dalila',
        'Ajlin', 'Uma', 'Sumeja', 'Ana', 'Tajra', 'Emma', 'Lejna', 'Zara', 'Iva', 'Dalal',
        'Lana', 'Aiša', 'Melina', 'Sarah', 'Naida', 'Petra', 'Alejna', 'Medina', 'Nedžla', 'Azra',
        'Marta', 'Nika', 'Lucija', 'Amila', 'Nadja', 'Klara', 'Nahla', 'Aylin', 'Farah', 'Nadija',
        'Nora', 'Šejla', 'Zana', 'Zejneb', 'Halima', 'Lajla', 'Rita', 'Berina', 'Nejra', 'Aria',
        'Elena', 'Jasmina', 'Lara', 'Ejna', 'Ella', 'Fatima', 'Najla', 'Nur', 'Elma', 'Iris',
        'Nađa', 'Zehra', 'Nadia', 'Belma', 'Ilda', 'Laura', 'Amra', 'Sumejja', 'Hanna', 'Mona',
        'Dunja', 'Ela', 'Lea', 'Amal', 'Anida', 'Asija', 'Alma', 'Ilhana', 'Ines', 'Abasa',
        'Abida', 'Abira', 'Adaleta', 'Ademija', 'Adevija', 'Adiba', 'Adila', 'Adla', 'Advija',
        'Afifa', 'Aiba', 'Aida', 'Aiša', 'Ajdina', 'Ajeta', 'Ajla', 'Alema', 'Alija', 'Alima',
        'Almasa', 'Amela', 'Amera', 'Amila', 'Amina', 'Amira', 'Amra', 'Amna', 'Anesa', 'Anida',
        'Arifa', 'Arzija', 'Asifa', 'Asija', 'Asima', 'Atifa', 'Atija', 'Atika', 'Avdeta', 'Azema',
        'Azemina', 'Saliha', 'Sakiba','Azima', 'Azira', 'Aziza', 'Azra', 'Hava', 'Ferida', 'Samira', 'Samra', 'Alija', 'Zuhra', 'Ćamila', 'Ćerima'
    ];


    /**
     * @see https://bs.wikipedia.org/wiki/Kategorija:Bo%C5%A1nja%C4%8Dka_prezimena
     */
    protected static $lastName = [
        'Alibegović', 'Alić', 'Alispahić', 'Atić', 'Avdić', 'Bajramović', 'Bašić', 'Begić', 'Berberović',
        'Čaušević', 'Duraković', 'Fazlagić', 'Fazlić', 'Hadžić', 'Hadžifejzović', 'Halilović', 'Hasanović',
        'Hodžić', 'Ibrahimović', 'Izetbegović', 'Jahić', 'Jašarević', 'Kodro', 'Mahmutović', 'Mujić', 'Mustafić',
        'Nišić', 'Omerović', 'Palić', 'Pašalić', 'Salihović', 'Sarajlić', 'Selimović', 'Smajlović', 'Sokolović',
        'Spahić', 'Abadžić', 'Abdulović', 'Grabus', 'Gruber', 'Mrakanović', 'Srebrenica', 'Bošnjak', 'Milić',
        'Gasal', 'Hrnjić', 'Zolota', 'Hodžić', 'Kovačević', 'Marković', 'Petrović', 'Tomić', 'Delić', 'Hadžić',
        'Savić', 'Halilović', 'Babić', 'Marić', 'Jovanović', 'Ilić', 'Bašić', 'Vuković', 'Lukić', 'Knežević',
        'Popović', 'Simić', 'Nikolić', 'Pavlović', 'Đurić', 'Mitrović', 'Jović', 'Avdić', 'Begić', 'Božić',
        'Todorović', 'Marjanović', 'Brkić', 'Perić', 'Ramić', 'Tadić', 'Alić', 'Imamović', 'Lazić', 'Karić',
        'Dedić', 'Stojanović', 'Đukić', 'Bošnjak', 'Stevanović', 'Selimović', 'Spahić', 'Smajić', 'Filipović',
        'Janković', 'Vidović', 'Blagojević', 'Gajić', 'Mujkić', 'Radić', 'Pejić', 'Ristić', 'Bajrić', 'Dizdarević',
        'Milošević', 'Beganović', 'Bešić', 'Mujić', 'Muratović', 'Musić', 'Šehić', 'Maksimović', 'Mehić', 'Mešić',
        'Ostojić', 'Omerović', 'Jurić', 'Matić', 'Andrić', 'Topić', 'Mijatović', 'Suljić', 'Smajlović', 'Šabić',
        'Lučić', 'Jahić', 'Vasić', 'Jukić', 'Zahirović', 'Ćorić', 'Lazarević', 'Trifković', 'Mahmutović', 'Ivanović',
        'Galić', 'Hasanović', 'Novaković', 'Husić', 'Topalović', 'Jašarević', 'Mihajlović', 'Kadrić', 'Mandić',
        'Petković', 'Kovač', 'Hasić', 'Softić', 'Šarić', 'Gavrić', 'Đokić', 'Stupar', 'Šimić', 'Huskić', 'Martinović',
        'Sinanović', 'Divčić', 'Bošković', 'Šabanović', 'Čaušević', 'Ćosić', 'Lovrić', 'Stanković', 'Jusić',
        'Živković', 'Osmanović', 'Bogdanović', 'Stanić', 'Samardžić', 'Damjanović', 'Mašić', 'Čolić', 'Grgić',
        'Mujkanović', 'Subašić', 'Memić', 'Muminović', 'Fazlić', 'Mićić', 'Hamzić', 'Salkić', 'Milanović',
        'Jokić', 'Begović', 'Zukić', 'Milić', 'Salihović', 'Pašić', 'Terzić', 'Janjić', 'Panić', 'Radovanović',
        'Mehmedović', 'Bojić', 'Ahmetović', 'Spasojević', 'Pajić', 'Stjepanović', 'Tešić', 'Mikulić', 'Bilić',
        'Duraković', 'Jovičić', 'Šišić', 'Vasiljević', 'Vidaković', 'Džafić', 'Nišić', 'Zovko', 'Ibrahimović',
        'Nedić', 'Bajić', 'Mišić', 'Aleksić', 'Pandurević', 'Kadić', 'Mujanović', 'Meštrovac', 'Bajramović',
        'Stević', 'Redžić', 'Kurtović', 'Makić', 'Mušić', 'Nešust', 'Blažević', 'Sarajlić', 'Milovanović',
        'Jelić', 'Kojić', 'Mustafić', 'Stanišić', 'Pašalić', 'Rakić', 'Pantić', 'Fejzić', 'Marinković', 'Obradović',
        'Muharemović', 'Ivanković', 'Josipović', 'Miletić', 'Nikić', 'Krstić', 'Velić', 'Imširović', 'Sarić',
        'Medić', 'Arnautović'
    ];

}
