-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 01:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprosjekt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(225) COLLATE utf8_danish_ci NOT NULL,
  `ingress` varchar(225) COLLATE utf8_danish_ci NOT NULL,
  `body` text COLLATE utf8_danish_ci NOT NULL,
  `imgsrc` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `ingress`, `body`, `imgsrc`, `category`) VALUES
(0, 'Fremtiden er elektrisk', 'Alle har et ansvar for hverandre og for samfunnet vi er en del av, både som bedrift og som enkeltmenneske. Vi er klar over vår egen rolle som del av en større helhet der også vi skal gi vårt bidrag og ta vårt ansvar.', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>Elektriske varmesystemer er i dag den mest effektive og skånsomme måten for miljøet å utnytte energi på, derfor er dette vårt satsningsområde også i fremtiden. Trådløse styringssystemer i smarte hjem, hvor termostater og elektriske komponenter selv regulerer og effektiviserer behovet for varme og lys, vil i lang tid være den beste og rimeligste metoden for våre hjem. Det betyr ikke at vi skal stå stille, vi skal alltid etterstrebe å effektivisere for å få enda mer ut av lite. Dette er fremtiden, og derfor sier vi at den er elektrisk.</p>\r\n            </div>\r\n        </div>', 'img/artikkel2.jpg', 'varmeløsninger'),
(1, 'Kunsten å holde seg varm', 'Siden vi var små har vi lært ulike teknikker for å holde kroppen varm. Ferdigheter som utviklet seg med alderen og som man arvet fra de som hadde gått først.', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>Turene i skogen med fatter hvor romme skisko skulle holde på varmen, og hvordan koppen med kakao tinte kalde fingre. Hvordan bestefar sverget til bjørkeved og alltid startet morran med knallhard fyring for at temperaturen skulle være levelig når han kom hjem fra skiftet. </p>\r\n\r\n                <p>Kulde halve året gjør noe med folk, du blir interessert i effektive måter å holde varmen på. Kobler du det med interesse og naturlige forutsetninger for elektrisitet, er det ikke uten grunn at Norden er ledende på varmeløsninger og styring av disse.</p>\r\n            </div>\r\n\r\n            <div class=\"col-sm-12\"><img class=\"img-fluid mx-auto d-block\" src=\"img/4.jpg\" alt=\"img alt\">\r\n            </div>\r\n        </div>\r\n\r\n        <div class=\"row\" style=\"padding-top:20px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>Tidene forandrer seg, og med den teknologien, men behovet for varme er konstant, uansett hvordan eller hvor du bor. Læren som tidligere gikk i arv blir nå erstattet med avanserte tekniske løsninger for styring av varme i såkalte smarte hjem. Og uansett fremtid -den er elektrisk -og vi må fortsette å alltid utvikle bedre løsninger for de som kommer etter. </p>\r\n\r\n                <p>For det å holde seg varm er en kunstform og en tradisjon, en arv vi holder svært høyt.</p>\r\n            </div>\r\n        </div>', 'img/artikkel1.jpg', 'varmestyring'),
(3, 'Panelovner er miljøvennlig oppvarming', 'Moderne panelovner er mer miljøvennlige, bruker mindre energi og gir bedre komfort enn tidligere.', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>\r\n                    Ingen andre oppvarmingssystem er bedre på temperaturregulering og energiforbruk! Dagens moderne panelovner sørger for at panelovnen bare gir fra seg den varmemengden som er nødvendig for å opprettholde den ønskede varmekomfort. Dette er energioptimalt og dermed svært miljøvennlig. Man sløser verken med energien eller energikostnadene.\r\n                </p>\r\n                <p>\r\n                    Panelovner i glass har har endret måten folk ser og tenker på panelovner. Tidligere ga folk lite oppmerksomhet til utformingen av panelovnen deres. Nå er panelovnen en integrert del av alle interiøret, og brukes gjerne som et designelement på veggen.\r\n                </p>\r\n            </div>\r\n            <div class=\"col-sm-12\"><img class=\"img-fluid mx-auto d-block\" src=\"img/16.jpg\" alt=\"img alt\">\r\n                <p class=\"small text-center\">Bruk av panelovn i glass som en elegant del av interiøret.</p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\" style=\"padding-top:20px;\">\r\n            <div class=\"col-sm-12\">\r\n                <h2>Hvordan spare penger og miljø?</h2>\r\n                <p>\r\n                    Et elektrisk varmesystem gir den laveste investeringen og er det mest energieffektive systemet. Veggovner er gunstigst økonomisk, men varmekabler foretrekkes ofte i badegulv og evt. andre gulv med kalde overflater som f.eks. flis.\r\n                </p>\r\n                <p>\r\n                    Et varmesystem med moderne ovner med elektronisk regulering er basis for god økonomi. Til dette systemet bør du installere et sentralt styresystem. Det sørger for at du har komfortabel innetemperatur når du er tilstede og ellers senker temperaturen. Dette er det optimale systemet som både sparer penger for deg og miljøet for oss alle!\r\n                </p>\r\n            </div>\r\n        </div>', 'img/artikkel3.jpg', 'varmestyring'),
(4, 'Det kalles ikke smarthus uten grunn', 'Å styre varme og lys fra mobilen er ikke lenger science fiction.', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <p>\r\n                For ikke så fryktelig mange år siden var lysbrytere uten ledninger noe som tilhørte fremtidsfilmer. Det samme gjaldt termostater man kan kontrollere med mobilen. Den salgs var forbeholdt folk med svært tykke lommebøker, i den grad det var mulig i det hele tatt. Vel, fremtiden har nå hentet oss inn.\r\n            </p>\r\n        </div>\r\n        <div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <div class=\"pull-left\">\r\n                    <img class=\"img-fluid mx-auto d-block\" src=\"img/18.jpg\" alt=\"img alt\">\r\n                </div>\r\n                <p>\r\n                    Smarthus gir deg muligheten til å styre elektroniske komponenter i huset ditt enkelt ved bruk av en mobilapp, men at smarthus-systemet gir deg nye muligheter betyr ikke at de gamle forsvinner.\r\n                </p>\r\n\r\n                <p>\r\n                    Hvis du uansett er rett ved en dimmer eller en termostat, kan begge deler fortsatt betjenes på vanlig vis. Smart Home-produktene har dessuten samme dimensjoner som tradisjonelle brytere, slik at overgangen fra gammelt til nytt går raskt og enkelt. Det er derfor man kan si at smarthus-systemer har de samme produktene som du kjenner fra tidligere, bare smartere.\r\n                </p>\r\n\r\n                <p>\r\n                    Det er denne fleksibiliteten som er systemets styrke. Smarthus fra ThermoFloor sine samarbeids-partnere benytter vanlig kabling, og skulle Wi-Fi-nettverket koble ut kan du altså justere alle enheter manuelt. Dette skaper et sikkert system du alltid kan stole på.\r\n                </p>\r\n\r\n                <p>\r\n                    Fleksibiliteten gir deg samtidig mulighet til å starte i det små med bare ett rom om du vil. Senere kan du bygge ut, og uansett hvor omfattende systemet ditt blir kan du sette opp automatisk styring overalt der produktene er montert.\r\n                </p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\" style=\"padding-top:20px;\">\r\n            <div class=\"col-sm-12\">\r\n                <h2>Justeres etter dine behov</h2>\r\n                <p>\r\n                    Du kan programmere inn tidsplaner for varmen i ulike rom, og lage scenarioer som ”komfort”, ”sparing” eller ”frostsikring”. På samme måte kan du også etablere forskjellige scenarioer for lyset, eksempelvis ”normal”, ”dempet”, ”natt” eller ”borte”. Hvis du skal styre systemet utenfra er du avhengig av Internet, men har du først koblet deg på hjemmenettverket har du full kontroll selv hvis nettforbindelsen skulle falle ut. Vi lever kanskje i fremtiden, men det hender fortsatt at nettet blir borte fra tid til annen.\r\n                </p>\r\n            </div>\r\n            <div class=\"col-sm-12\"><img class=\"img-fluid mx-auto d-block\" src=\"img/19.jpg\" alt=\"img alt\">\r\n                <p class=\"small text-center\">Bruk av panelovn i glass som en elegant del av interiøret.</p>\r\n            </div>\r\n            <div class=\"col-sm-12\">\r\n                <h2>Installasjon er kjapt og enkelt!</h2>\r\n                <p>\r\n                    Med hjelp fra elektriker kan du altså montere termostater og dimmere som kommuniserer trådløst med mobilen via sentralenheten. Du kan styre lyset på kjøkkenet fra gangen, eller varmen på badet fra stua. Du kan sjekke hvor mange grader huset holder mens du selv er ute på farten. Plutselig sprengkulde? Ikke noe problem! Du kan gjøre justeringer når som helst, fra kontoret eller på trikken.\r\n                </p>\r\n            </div>\r\n        </div>', 'img/artikkel4.jpg', 'smarthus'),
(5, 'Hvilke varmeteknologier bør du velge til badet?', 'Badet er et rom for velvære', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>God varme i rommet og gulvet gir deg den rette komforten på badet. Med jevn og deilig temperatur, kan du gjøre baderommet til en liten spa-opplevelse for kropp og sjel. La baderommet være stedet der du gir deg selv et pusterom og kvalitetstid i en travel hverdag. Med trådløs styring kan du enkelt fjernstyre varmen i hele huset, også på badet!. I tillegg til å effektiviserer energibruken med enkel regulering og kort reaksjonsevne, kan du også klargjøre badet med mobiltelefonen ved avreise fra hytta. Aldri mer kalde badegulv!</p>\r\n            </div>\r\n            <div class=\"col-sm-12\"><img class=\"img-fluid mx-auto d-block\" src=\"img/sh1.jpg\" alt=\"img alt\">\r\n                <p class=\"small text-center\">Et eksempel på et smarthjem, eller iallefall starten på et.</p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\" style=\"padding-top:20px;\">\r\n            <div class=\"col-sm-12\">\r\n                <h2>Parkett, belegg, teppe og fliser</h2>\r\n                <p>TF Sticky Mat er en lavtbyggende varmekabelmatte. Bygghøyden er fra 4-20mm, avhengig av underlag og overdekking. TF Sticky Mat har en 3,2mm tykk kabel, lagt i serpentiner med 80mm avstand mellom kablene.</p>\r\n\r\n                <p>TF Sticky Mat er selvklebende. Før legging må underlaget være rengjort, jevnt og påført primer. TF Sticky Mat rulles ut og tilpasses arealet som skal dekkes. Limet på undersiden gjør at varmekabelmatten enkelt fester seg til underlaget. Kan legges rett på tre, spon, betong m.m i effekt helt opp til 160W/m².</p>\r\n            </div>\r\n        </div>', 'img/artikkel5.jpg', 'varmeløsninger'),
(6, 'Hva er et smarthus?', 'Smart løsninger for smarte hjem', '<div class=\"row\" style=\"padding-top:30px;\">\r\n            <div class=\"col-sm-12\">\r\n                <p>Men hvordan henger det hele sammen? De automatiserte operasjonene styres av et avansert styringssystem, altså en gateway som er koblet til internett via ruteren er hjernen i systemet, den håndterer all informasjon mellom deg og systemets ulike funksjoner. Gateway behandler all informasjon fra systemets trådløse sensorer som er koblet til produktene du ønsker å styre. Disse styres basert på de ønskene du har lagt inn, eller det du sier den skal gjøre der og da. Et enkelt brukergrensesnitt på din pc, telefon eller nettbrett er alt som trengs for å administrere huset. Den lokale elektrikeren hjelper deg å sette opp systemet, og de monterer de ulike modulene som trengs for at systemet skal snakke sammen.Er du bruker av en smarttelefon har du den forståelsen som trengs. Systemet kan alltid utvides, her er det bare å komme i gang i det små og bygge på etter hvert som man ser nytten og gleden!</p>\r\n\r\n                <p>Ditt smarthus styres av et avansert system fra Fibaro. En gateway som er koblet til internett via ruteren din er hjernen i systemet, den håndterer all informasjon mellom deg og systemets ulike funksjoner. Gatewayen behandler all informasjon den får fra de trådløse sensorene som er koblet til produktene du ønsker å styre. Deretter styres dette basert på ønskene du har lagt inn, eller det du sier den skal gjøre via et enkelt brukergrensesnitt på din pc eller telefon. Dette er alt som trengs for å administrere huset ditt! Systemet kan alltid utvides, her er det bare å komme i gang og bygge på etter hvert som man ser behovet. * Den lokale elektrikeren hjelper deg å sette opp systemet, de monterer de ulike modulene som trengs for at systemet skal snakke sammen.</p>\r\n            </div>\r\n            <div class=\"col-sm-12\"><img class=\"img-fluid mx-auto d-block\" src=\"img/sh1.jpg\" alt=\"img alt\">\r\n                <p class=\"small text-center\">Et eksempel på et smarthjem, eller iallefall starten på et.</p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\" style=\"padding-top:20px;\">\r\n            <div class=\"col-sm-12\">\r\n                <h2>Hva trenger jeg for å komme igang?</h2>\r\n                <p>For å få ditt eget smarte hus, trenger du kun et styringssystem som er koblet til internett via din ruter, en smarttelefon og for eksempel en Z-Wave termostat eller en veggplugg for å styre lyset. Så enkelt kan du begynne å utforske mulighetene et smarthus gir. Teknologien fungerer like godt i gamle som nye hus, og gjerne jobben som «vaktmester» på hytta. Etter installasjonen er systemet gratis å bruke, alt du trenger er tilgang til internett.</p>\r\n            </div>\r\n        </div>', 'img/artikkel6.jpg', 'smarthus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_danish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@example.com', 'admin', '$2y$10$PdM528k5ap98r6FRCe.G2eRW5rs5rptHPjgIvcBW54O2oAT2MjYli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
